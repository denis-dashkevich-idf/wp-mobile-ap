</main>

<div class="popup" style="position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: #777070b0;
    z-index: 22;
    display: none;
    justify-content: center;
    align-items: center;
    ">
  <p style="    font-size: 22px;
    padding: 96px;
    background: #fff;">sucecce</p>
</div>

<footer class="footer">
  <div class="footer__info-block">
    <div class="container">
      <div class="row">
        <div class="footer__column">
          <p class="footer__column-title">Get In Touch</p>
          <p class="footer__col-text">
            the quick fox jumps over the
            lazy dog
          </p>

          <div class="footer__socials">
            <?php if (have_rows('socials', 'options')) : ?>
              <?php while (have_rows('socials', 'options')) : the_row(); ?>
                <a href="<?php the_sub_field('link', 'option'); ?>" class="footer__social-link">
                  <?php $logo = get_sub_field('icon', 'option'); ?>
                  <?php echo file_get_contents($logo); ?>
                </a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

        </div>
        <?php

        if (is_active_sidebar('custom-footer-widget')) : ?>
          <?php dynamic_sidebar('custom-footer-widget'); ?>

        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="footer__copyright-block">
    <div class="container">
      <p class="footer__copyright"><?php the_field('copyright', 'options') ?></p>
    </div>
  </div>
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<?php wp_footer(); ?>
</body>

</html>