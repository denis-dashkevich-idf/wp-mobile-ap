<?php get_header(); ?>

<!-- inner page -->
<section class="post">
  <div class="post__head">
    <div class="container">
      <h1 class="post__title"><?php echo get_the_title(); ?></h1>
    </div>
    <img class="post__thumbnail" src="<?php the_field('img'); ?>" alt="">
  </div>
  <div class="container">
    <div class="post__row row">
      <div class="post__content page-content">
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile;
        wp_reset_query();
        ?>
      </div>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>