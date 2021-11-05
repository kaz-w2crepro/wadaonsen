<?php

/**
 * Template Name: トップページ
 * @package WordPress
 * @Template Post Type: post, page,
 */
get_header(); ?>
<link href="<?php echo get_template_directory_uri() ?>/asset/css/front-page.css" rel="stylesheet">
<main>
  <section class="mv" id="js__mv">
    <div class="mv__wrapper">
      <div class="mv__textWrapper">
        <h2 class="mv__title">
          テキストテキストテキストテキストテキストテキスト
        </h2>
      </div>
    </div>
    <div class=" scrolldown"><span>Scroll</span>
    </div>
  </section>

  <section class="about">
    <div class="about__wrapper inner wide animationTarget">
      <h2 class="title about__title" title="私たちについて">About</h2>
      <div class="about__textWrap">
        <p class="about__text">
          テキストテキストテキストテキスト<br>
          テキストテキストテキストテキスト<br>
          テキストテキストテキストテキストテキストテキスト
        </p>
      </div>
    </div>
  </section>

  <section class="menu">
    <div class="menu__wrapper inner wide animationTarget" id="menu">
      <h2 class="title menu__title" title="システム&メニュー">Menu</h2>
      <div class="menu__listWrap">
        <ul class="menu__list" title="テキスト料金">
          <li class="menu__listItem">
            <div class="menuLeft">テキスト</div>
            <div class="centerLine">
              <hr>
            </div>
            <div class="menuRight">&yen;3,300<span class="price_tax">（税別）</span></div>
          </li>
          <li class="menu__listItem">
            <div class="menuLeft">テキスト</div>
            <div class="centerLine">
              <hr>
            </div>
            <div class="menuRight">&yen;4,400<span class="price_tax">（税別）</span></div>
          </li>
        </ul>
        <ul class="menu__list" title="焼酎">
          <li class="menu__listItem">
            <div class="menuLeft">テキスト</div>
            <div class="centerLine">
              <hr>
            </div>
            <div class="menuRight">&yen;5,500<span class="price_tax">（税別）</span></div>
          </li>
          <li class="menu__listItem">
            <div class="menuLeft">テキスト</div>
            <div class="centerLine">
              <hr>
            </div>
            <div class="menuRight">&yen;5,500<span class="price_tax">（税別）</span></div>
          </li>
          <li class="menu__listItem">
            <div class="menuLeft">テキスト</div>
            <div class="centerLine">
              <hr>
            </div>
            <div class="menuRight">&yen;5,500<span class="price_tax">（税別）</span></div>
          </li>
          <li class="menu__listItem">
            <div class="menuLeft">テキスト</div>
            <div class="centerLine">
              <hr>
            </div>
            <div class="menuRight">&yen;7,700<span class="price_tax">（税別）</span></div>
          </li>
          <li class="menu__listItem">
            <div class="menuLeft">テキスト</div>
            <div class="centerLine">
              <hr>
            </div>
            <div class="menuRight">&yen;テキスト<span class="price_tax">（税別）</span></div>
          </li>
        </ul>
        <ul class="menu__list" title="テキスト">
          <li class="menu__listItem">
            <div class="menuLeft">テキスト</div>
            <div class="centerLine">
              <hr>
            </div>
            <div class="menuRight">&yen;テキスト<span class="price_tax">（税別）</span></div>
          </li>
          <li class="menu__listItem">
            <div class="menuLeft">テキスト</div>
            <div class="centerLine">
              <hr>
            </div>
            <div class="menuRight">&yen;テキスト<span class="price_tax">（税別）</span></div>
          </li>
          <li class="menu__listItem">
            <div class="menuLeft">テキスト</div>
            <div class="centerLine">
              <hr>
            </div>
            <div class="menuRight">&yen;テキスト<span class="price_tax">（税別）</span></div>
          </li>
        </ul>
        <ul class="menu__list" title="その他">
          <li class="menu__listItem">
            <div class="menuLeft">テキスト</div>
            <div class="centerLine">
              <hr>
            </div>
            <div class="menuRight">&yen;テキスト<span class="price_tax">（税別）</span></div>
          </li>
          <li class="menu__listItem">
            <div class="menuLeft">テキスト</div>
            <div class="centerLine">
              <hr>
            </div>
            <div class="menuRight">&yen;テキスト<span class="price_tax">（税別）</span></div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="cast">
    <div class="cast__wrapper inner wide animationTarget" id="cast">
      <h2 class="title cast__title" title="キャスト">Cast</h2>
      <div class="cast__contentWrap">
        <div class="cast__media">
          <div class="cast__detail">
            <h3>テキストテキスト<br class="br-sp">テキストテキストです。</h3>
            <p>
              テキストテキストテキストテキストテキストテキスト
            </p>
            <p>
              テキストテキストテキストテキストテキストテキストテキストテキスト<br>
              テキストテキストテキストテキストテキスト<br>
              テキストテキストテキストテキストテキスト<br>
              テキストテキストテキスト<br class="-pc-only">
              テキストテキストテキストテキストテキストテキスト。<br>
              テキストテキストテキストテキストテキスト
            </p>
            <p>
              テキストテキストテキストテキストテキスト<br class="-pc-only">
              テキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
              テキストテキストテキストテキストテキストテキスト。
            </p>
          </div>
          <div class="cast__mediaImgWrap">
            <figure class="cast__mediaImg">
              <img src="<?php echo get_parent_theme_file_uri('img/page/front/woman1.jpg'); ?>" alt="">
            </figure>
            <figure class="cast__mediaImg">
              <img src="<?php echo get_parent_theme_file_uri('img/page/front/flower1.jpg'); ?>" alt="">
            </figure>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="access">
    <div class="access__wrapper inner wide animationTarget" id="access">
      <h2 class="title access__title" title="アクセス">Access</h2>
      <div class="access__contentWrap">
        <div class="access__media">
          <div class="access__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3275.647398412551!2d135.69068445866188!3d34.81481183274157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60011befffb33ddb%3A0xdb1c2ef4d9c7843!2z44CSNTczLTAxNDYg5aSn6Ziq5bqc5p6a5pa55biC5aSn5bOw5YWD55S677yR5LiB55uu77yX4oiS77yY!5e0!3m2!1sja!2sjp!4v1631780977669!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="access__detail">
            <figure>
              <img src="<?php echo get_parent_theme_file_uri('img/page/front/logo1.jpg'); ?>" alt="">
            </figure>
            <p>〒000-0000</p>
            <p>大阪府テキスト市テキスト町0丁目0−0</p>
            <p id="access__tel">TEL 00-0000-0000</p>
          </div>
          <ul class="access__list">
            <li class="access__listItem">
              <figure class="access__mediaImg">
                <img src="<?php echo get_parent_theme_file_uri('img/page/front/about_img_1.png'); ?>" alt="">
              </figure>
            </li>
            <li class="access__listItem">
              <figure class="access__mediaImg">
                <img src="<?php echo get_parent_theme_file_uri('img/page/front/about_img_1.png'); ?>" alt="">
              </figure>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="recruit">
    <div class="recruit__wrapper inner wide animationTarget" id="recruit">
      <h2 class="title recruit__title" title="求人情報">Recruit</h2>
      <div class="recruit__contentWrap">
        <p>Coming Soon...</p>
      </div>
    </div>
  </section>

  <section class="blog">
    <div class="blog__wrapper inner wide animationTarget" id="blog">
      <h2 class="title blog__title" title="ブログ">Blog</h2>
      <div class="blog__contentWrap">
        <ul class="blog__list">
          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
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
                      <p class="card__text -time"><?php echo get_the_date(); ?></p>
                    </div>
                  </article>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <a class="blog__more" href="/blogs/">More</a>
      </div>
    </div>
  </section>
</main>



<?php get_footer(); ?>