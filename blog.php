<?php
/* 
  Template Name: blog
  Template post type: page
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
  <section class="blog__posts">
    <div class="container">
      <div class="blog__post-cards">
        <?php
        global $post;

        $myposts = get_posts([
          'numberposts' => 6,
        ]);

        if ($myposts) {
          foreach ($myposts as $post) {
            setup_postdata($post);
        ?>
            <!-- Вывод постов, функции цикла: the_title() и т.д. -->
            <a href="<?php the_permalink() ?>" class="post-card">
              <h2 class="post-card__title">
                <?php the_title() ?>
              </h2>
              <p class="post-card__text">
                <?php echo get_the_excerpt() ?>
              </p>
              <span class="post-card__more">Mehr erfahren →</span>
            </a>
        <?php
          }
        }
        wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>