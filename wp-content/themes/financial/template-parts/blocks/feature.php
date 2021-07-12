  <!-- features -->
  <section class="features">
    <div class="container">
      <p class="features__undertitle s-undertitle"><?php the_field('undertitle') ?></p>
      <h2 class="features__title s-title"><?php the_field('title') ?></h2>
      <div class="features__row row">
        <?php if (have_rows('features')) : ?>
          <?php while (have_rows('features')) : the_row(); ?>
            <div class="features__card">
              <img src="<?php the_sub_field('ico') ?>" alt="Smart Features" class="features__card-img" loading="lazy">
              <div class="features__card-content">
                <p class="features__card-title"><?php the_sub_field('title') ?></p>
                <p class="features__card-desc"><?php the_sub_field('desc') ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>