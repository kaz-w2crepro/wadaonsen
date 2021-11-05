<?php

/**
 * Template header
 * @package wada-noodle
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <title><?php bloginfo('name'); ?></title>
  <meta name="keywords" content="サイトキーワードをカンマ区切りで4~6つ入力">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:image" content="SNSにシェアした際に表示されるサムネイル画像を設定">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
  <link rel="shortcut icon" href="img/common/favicon.png">
  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">

  <link href="<?php echo get_template_directory_uri() ?>/asset/css/reset.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/asset/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/asset/css/header.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/asset/css/footer.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/f0fc03e17c.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<?php
global $wp_query;
$post_obj = $wp_query->get_queried_object();
$slug = $post_obj->post_name;
?>

<body id="top" class="body <?php echo $slug; ?>">

  <header class="Header" id="header">

    <p>ヘッダー</p>

  </header>
