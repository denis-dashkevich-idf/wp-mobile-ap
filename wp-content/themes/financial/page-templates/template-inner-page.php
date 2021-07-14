<?php
/*
Template Name: Шаблон для внутренней страницы
*/
?>

<?php get_header(); ?>

<!-- inner page -->
<section class="inner-page">
  <div class="container">
    <h1 class="inner-page__title p-title"><?php echo get_the_title(); ?></h1>
    <div class="inner-page__content">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile;
      wp_reset_query();
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>