<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test landing</title>
  <?php wp_head(); ?>

</head>

<body class="<?php body_class(); ?>">

<header class="header <?php echo is_front_page() ? '' : 'header_ip'; ?>">
    <div class="container">
      <div class="header__inner">
        <a href="/" class="header__logo-wrap">
          <?php the_field('logo', 'option') ?>
          <span class="header__logo-text">Landguru</span>
        </a>
        <div class="header__menu-container">

          <?php
          wp_nav_menu( [
            'theme_location'  => 'primary',
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'header__nav',
            'container_id'    => '',
            'menu_class'      => 'header__menu menu',
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
          ] );
          ?>
        </div>
        <a href="<?php echo get_field('link', 'option')['url'] ?>" class="header__cta btn"><?php echo get_field('link', 'option')['title'] ?></a>
        <div class="header__burger burger">
          <div class="burger__line"></div>
          <div class="burger__line"></div>
          <div class="burger__line"></div>
        </div>
      </div>
    </div>
  </header>
  <main class="main">