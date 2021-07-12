    <!-- promo -->
    <section class="promo">
      <div class="container">
        <div class="promo__inner">
          <div class="promo__content-wrap">
            <h1 class="promo__title"><?php the_field('title') ?></h1>
            <p class="promo__subtitle"><?php the_field('subtitle') ?></p>
          </div>
          <div class="promo__bg-wrap">
            <img src="<?php the_field('bg') ?>" alt="phone" class="promo__phone-img" loading="lazy">
          </div>
          <div class="promo__btns-group">
            <a href="/" class="promo__cta btn btn_fill">Get Started</a>
            <button class="promo__btn-watch">Watch Video</button>
          </div>
          <div class="promo__sponsors">
            <span class="promo__sponsors-txt">Sponsored by:</span>
            <?php
            if (have_rows('sponsors')) :
              while (have_rows('sponsors')) : the_row(); ?>
                <img src="<?php echo get_sub_field('sp_img')['url']; ?>" alt="<?php echo get_sub_field('sp_img')['alt']; ?>" class="promo__sponsor-ico">
                <?php
              endwhile;
            endif;
            ?>
          </div>
        </div>
      </div>
    </section>