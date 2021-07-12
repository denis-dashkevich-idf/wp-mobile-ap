  <!-- app -->
  <section class="app">
    <div class="container">
      <div class="app__row row">
        <div class="app__img-block">.
          <img src="<?php the_field('img'); ?>" alt="phone" class="app__phone-img">
        </div>
        <div class="app__info-block">
          <p class="app__undertitle s-undertitle"><?php the_field('undertitle'); ?></p>
          <h2 class="app__title s-title"><?php the_field('title'); ?></h2>

          <ul class="app__pluses">
            <li class="app__plus">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/app/pl1.svg" alt="plus icon" class="app__plus-ico" loading="lazy">
              <p class="app__plus-title">Smart Features</p>
              <p class="app__plus-desc">Get your blood tests delivered at let home collect sample from the victory of
                the managments. your blood tests.</p>
            </li>
            <li class="app__plus">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/app/pl2.svg" alt="plus icon" class="app__plus-ico" loading="lazy">
              <p class="app__plus-title">Secure Contents</p>
              <p class="app__plus-desc">Get your blood tests delivered at let home collect sample from the victory of
                the managments. your blood tests.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>