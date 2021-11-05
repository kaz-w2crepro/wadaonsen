<?php

/**
 * Template Name: お問い合わせ
 * @package WordPress
 * @Template Post Type: post, page,
 */
get_header(); ?>
<link href="<?php echo get_template_directory_uri() ?>/asset/css/page-contact.css" rel="stylesheet">

<section class="contact">
  <h2 class="contact__title">Contact</h2>
  <p class="contact__subTitle">お問い合わせ</p>
  <div class="container">
    <p class="contact__message">お問い合わせいただいた内容により、回答までにお時間を頂戴することもございますので
      あらかじめご了承ください。</p>
  </div>
  <div class="form__parent">
    <form action="#" method="POST">
      <label for="name">お名前</label><input type="text" id="name" class="contact__name" name="name" required>
      <hr>
      <label for="email">メールアドレス</label><input type="email" id="email" class="contact__email" name="email" required>
      <hr>
      <label for="emailConfirm">▼確認(メール)</label><input type="email" id="emailConfirm" class="contact__email" name="email" required>
      <hr>
      <label for="title">タイトル</label><input type="text" id="title" class="contact__Title" name="email">
      <hr>
      <label for="contact__Text">お問い合わせ内容</label><input type="textarea" id="contact__Text" class="contact__text" name="email" required>
      <button class="form__btn" type="submit">Submit</button>
    </form>
  </div>
  <!-- お問い合わせページ -->
</section>


<?php get_footer(); ?>