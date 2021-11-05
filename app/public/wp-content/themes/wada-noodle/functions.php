<?php
/**
* @package wada-noodle
*/

/*------------------------------------------------------------------------------------
/* カスタム投稿タイプの追加
/*----------------------------------------------------------------------------------*/

add_action( 'init', 'custum_post_type' );
function custum_post_type() {
}

/*------------------------------------------------------------------------------------
/* WordPress標準の機能
/*----------------------------------------------------------------------------------*/
if ( !isset( $content_width ) ) {
  $content_width = 1118;
}

/*------------------------------------------------------------------------------------
/* WordPressへの追加設定
/*----------------------------------------------------------------------------------*/

add_filter('widget_text', 'do_shortcode');

function is_mobile() {
  $useragents = array(
  'iPhone',
  'iPod',
  'Android.*Mobile',
  'Windows.*Phone',
  'dream',
  'CUPCAKE',
  'blackberry9500',
  'blackberry9530',
  'blackberry9520',
  'blackberry9550',
  'blackberry9800',
  'webOS',
  'incognito',
  'webmate'
  );
  $pattern = '/'.implode('|', $useragents).'/i';
return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}


add_action('admin_menu', 'add_redirect_custom_box');
if ( !function_exists( 'add_redirect_custom_box' ) ):
  function add_redirect_custom_box(){
    add_meta_box( 'singular_redirect_settings', 'リダイレクト', 'redirect_custom_box_view', 'post', 'side' );
    add_meta_box( 'singular_redirect_settings', 'リダイレクト', 'redirect_custom_box_view', 'page', 'side' );
  }
endif;

if ( !function_exists( 'redirect_custom_box_view' ) ):
function redirect_custom_box_view(){
  $redirect_url = get_post_meta(get_the_ID(),'redirect_url', true);
  echo '<label for="redirect_url">リダイレクトURL</label>';
  echo '<input type="text" name="redirect_url" size="20" value="'.esc_attr(stripslashes_deep(strip_tags($redirect_url))).'" placeholder="https://" style="width: 100%;">';
  echo '<p class="howto">このページに訪れるユーザーを設定したURLに301リダイレクトします。</p>';
}
endif;

add_action('save_post', 'redirect_custom_box_save_data');
if ( !function_exists( 'redirect_custom_box_save_data' ) ):
  function redirect_custom_box_save_data(){
    $id = get_the_ID();
    if ( isset( $_POST['redirect_url'] ) ){
      $redirect_url = $_POST['redirect_url'];
      $redirect_url_key = 'redirect_url';
      add_post_meta($id, $redirect_url_key, $redirect_url, true);
      update_post_meta($id, $redirect_url_key, $redirect_url);
    }
  }
endif;

if ( !function_exists( 'get_singular_redirect_url' ) ):
  function get_singular_redirect_url(){
    return trim(get_post_meta(get_the_ID(), 'redirect_url', true));
  }
endif;

if ( !function_exists( 'redirect_to_url' ) ):
  function redirect_to_url($url){
    header( "HTTP/1.1 301 Moved Permanently" );
    header( "location: " . $url  );
    exit;
  }
endif;

define('URL_REG_STR', '(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)');
define('URL_REG', '/'.URL_REG_STR.'/');

add_action( 'wp','wp_singular_page_redirect', 0 );
if ( !function_exists( 'wp_singular_page_redirect' ) ):
  function wp_singular_page_redirect() {
    if (is_singular() && $redirect_url = get_singular_redirect_url()) {
      if (preg_match(URL_REG, $redirect_url)) {
        redirect_to_url($redirect_url);
      }
    }
  }
endif;


/*------------------------------------------------------------------------------------
/* デフォルトのWordPressの不要機能を削除
/*----------------------------------------------------------------------------------*/


add_filter( 'intermediate_image_sizes_advanced', 'disable_image_sizes' );
function disable_image_sizes( $new_sizes ) {
  unset( $new_sizes['thumbnail'] );
  unset( $new_sizes['medium'] );
  unset( $new_sizes['large'] );
  unset( $new_sizes['medium_large'] );
  unset( $new_sizes['1536x1536'] );
  unset( $new_sizes['2048x2048'] );
  return $new_sizes;
}
add_filter( 'big_image_size_threshold', '__return_false' );

//ダッシュボード デフォルトのサイドメニューの非表示
function remove_menus () {
  global $menu;
  unset($menu[25]);
}
add_action('admin_menu', 'remove_menus');


remove_action( 'wp_head', 'wp_generator' ); //WordPressのバージョン情報
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); //絵文字対応のスクリプト
remove_action( 'wp_print_styles', 'print_emoji_styles'); //絵文字対応のスタイル


add_filter( 'emoji_svg_url', '__return_false' );


function remove_recent_comments_style() {
  global $wp_widget_factory;
  remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ));
}
add_action( 'widgets_init', 'remove_recent_comments_style' );


remove_filter( 'term_description','wpautop' );


function remove_p_on_images($content){
  return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}
add_filter( 'the_content', 'remove_p_on_images' );


function remove_hentry( $classes ) {
  if ( !is_single() ) {
    $classes = array_diff( $classes, array( 'hentry' ) );
  }
  return $classes;
}
add_filter( 'post_class','remove_hentry' );


function no_self_ping( &$links ) {
  $home = home_url();
  foreach ( $links as $l => $link )
  if ( 0 === strpos( $link, $home ) )
  unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );


add_editor_style("editor-style.css");
add_theme_support("editor-style");


function vf_add_editor_styles()
{
  add_editor_style('asset/fonts/fontawesome.min.css');
}
add_action('admin_init', 'vf_add_editor_styles');


add_theme_support('post-thumbnails');
