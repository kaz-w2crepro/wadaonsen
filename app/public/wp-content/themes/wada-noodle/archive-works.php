<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wada-noodle
 */

get_header();
?>
<link href="<?php echo get_template_directory_uri() ?>/asset/css/archive.css" rel="stylesheet">

<main class="archive__blog">
  <div class="blog__contentWrap">
    <ul class="blog__list">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'works',
        // 'posts_per_page' => 6,
        'paged' => $paged,
        'orderby' => 'date',
        'order'   => 'DESC',
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="blog__listItem">

            <a href="<?php the_permalink(); ?>">
              <article class="card">
                <div class="card__header">
                  <h3 class="card__title"><?php the_title(); ?></h3>
                  <figure class="card__thumbnail">
                    <?php
                    if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    else :
                    ?>
                      <img src="<?php echo get_parent_theme_file_uri('img/page/front/noimage.jpg'); ?>" alt="">
                    <?php endif; ?>
                  </figure>
                </div>
                <div class="card__body">
                  <p class="card__text"><?php echo get_the_excerpt(); ?></p>
                  <p class="card__time"><?php echo get_the_date(); ?></p>
                </div>
              </article>
            </a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
    <?php the_posts_pagination(
      array(
        'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => true,
        'prev_text' => '«',
        'next_text' => '»',
        'type'          => 'list', // 戻り値の指定 (plain/list)
      )
    ); ?>
  </div>

</main><!-- #main -->

<?php
get_footer();
