<?php
/*
Template Name: Шаблон для внутренней страницы с сайдбаром
*/
?>

<?php get_header(); ?>


<section class="inner-page">
  <div class="container">
    <div class="inner-page__row row">
      <div class="inner-page__aside">
        <ul class="side-menu">
          <li class="side-menu__item"><a href="#" class="side-menu__link">Link</a></li>
          <li class="side-menu__item"><a href="#" class="side-menu__link">Link</a></li>
          <li class="side-menu__item"><a href="#" class="side-menu__link">Link</a></li>
          <li class="side-menu__item"><a href="#" class="side-menu__link">Link</a></li>
          <li class="side-menu__item"><a href="#" class="side-menu__link">Link</a></li>
        </ul>
      </div>
      <div class="inner-page__content inner-page__content_col">
        <h1 class="inner-page__title p-title"><?php echo get_the_title(); ?></h1>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile;
        wp_reset_query();
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>