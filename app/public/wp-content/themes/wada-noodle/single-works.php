<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wada-noodle
 */

get_header();
?>
<link href="<?php echo get_template_directory_uri() ?>/asset/css/works_detail.css" rel="stylesheet">

<main class="works__detailWrapper">


  <div class="works__detail">
    <div class="scrollLine">
    </div>
    <span>Works</span>
    <div class="works__contentArea">

      <div class="works__detailMedia">

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="works__thumbnail">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail();
              else :
              ?>
                <img src="<?php echo get_parent_theme_file_uri('img/page/front/noimage.jpg'); ?>" alt="">
              <?php endif; ?>
            </div>
            <h2 class="works__detailTitle"><?php the_title(); ?></h2>
            <time class="works__detailDay">Post Date <?php the_time('Y.m.d') ?><time>
                <div class="works__detailContent">
                  <?php the_content(); ?>
                </div>
            <?php endwhile;
        endif; ?>
            <div class="pagination__wrapper">
              <div class="pagination__prev"><?php next_posts_link('Prev'); ?></div>
              <div class="pagination__next"><?php previous_posts_link('Next'); ?></div>
            </div>
      </div>
    </div>


  </div>
</main>
<?php
get_footer();
