<?php
/* 
  Template Name: post-page
  Template post type: post
*/

get_header();
?>

<main class="blog">
  <section class="blog__thumbnail">
    <img src="<?php the_field('preview_image') ?>" alt="thumbnail" class="blog__top-photo">
    <h1 class="blog__title">
      <?php the_field('preview_title') ?>
    </h1>
    <div class="cover"></div>
  </section>
  <section class="blog__content">
    <div class="container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content() ?>
      <?php endwhile;
      endif; ?>
    </div>
  </section>
</main>

<?php get_footer() ?>