  <!-- plans -->
  <section class="plans">
    <div class="container">
      <p class="plans__undertitle s-undertitle">Whats the function</p>
      <h2 class="plans__title s-title">Let’s see how it works</h2>
      <div class="plans__row row">

        <?php if (have_rows('plans')) : ?>
          <?php while (have_rows('plans')) : the_row(); ?>

            <div class="plans__card plan-card 
            <?php if (get_sub_field('is_prime')) {
              echo " plan-card_prime";
            } ?>
            ">
              <?php if (get_sub_field('is_prime')) { ?>
                <span class="plan-card__badge">Recommended</span>
              <?php } ?>
              <?php if (get_sub_field('price')) { ?>
                <div class="plan-card__price">
                  <p class="plan-card__price-txt">Starting from</p>
                  <p class="plan-card__price-val"><?php the_sub_field('price') ?></p>
                </div>
              <?php } ?>

              <p class="plan-card__title"><?php the_sub_field('title') ?></p>
              <p class="plan-card__subtitle"><?php the_sub_field('desc') ?></p>
              <ul class="plan-card__features">
                <?php
                $values = get_sub_field('pluses');
                $field = get_sub_field_object('pluses');
                $choices = $field['choices'];
                foreach ($choices as $value => $label) { ?>
                  <li class="plan-card__feature-item <?php echo (in_array($value, $values)) ? '' : ' plan-card__feature-item_unchecked' ?>">
                    <?php echo $label; ?>
                  </li>
                <?php } ?>
              </ul>
              <button class="plan-card__get btn
              <?php if (get_sub_field('is_prime')) {
                echo " btn_prime";
              } else {
                echo " btn_fill";
              } ?>
              ">Signup Now</button>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>