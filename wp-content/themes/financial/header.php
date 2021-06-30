<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test landing</title>
  <link rel="stylesheet" href="./assets/css/reset.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <?php wp_head(); ?>

</head>

<body>

  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__logo-wrap">
          <a href="#" class="header__logo-link">
            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
             
            if ( has_custom_logo() ) {
                echo '<img src="' . esc_url( $logo[0] ) . '" alt="logo" class="header__logo-img" loading="lazy">';
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
            ?>
          </a>
        </div>
        <div class="header__menu-wrap">

          <?php
          wp_nav_menu([
            'theme_location'  => 'primary',
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'header__nav',
            'container_id'    => '',
            'menu_class'      => 'header__menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
          ]);
          ?>
        </div>
        <div class="header__customer-area">
          <label class="header__theme-switch switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
          </label>
          <a href="#" class="header__login-link">Login</a>
          <a href="<?php echo get_field('header_link', 'option')['url']; ?>" class="header__cta btn btn_prime btn_la"><?php echo get_field('header_link', 'option')['title']; ?></a>
        </div>
        <div class="header__burger">
          <svg class="header__burger-img" width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.571289 0H23.4284V2.28571H0.571289V0ZM6.28557 5.71429H23.4284V8H6.28557V5.71429ZM13.4284 11.4286H23.4284V13.7143H13.4284V11.4286Z" fill="white" />
          </svg>
        </div>
      </div>
    </div>
  </header>

  <main class="main">