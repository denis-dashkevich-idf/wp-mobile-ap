<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test landing</title>
  <?php wp_head(); ?>

</head>

<body>

<header class="header">
    <div class="container">
      <div class="header__inner">
        <a href="/" class="header__logo-wrap">
          <?php the_field('logo', 'option') ?>
          <span class="header__logo-text">Landguru</span>
        </a>
        <div class="header__menu-container">
          <nav class="header__nav">
            <ul class="header__menu menu">
              <li class="menu-item">
                <a href="/blog.html">Blog</a>
              </li>
              <li class="menu-item menu-item-has-children">
                <a href="/">Adversite</a>
                <ul class="sub-menu">
                  <li class="menu-item menu-item-has-children">
                    <a href="">subitem 1</a>
                    <ul class="sub-menu">
                      <li class="menu-item">
                        <a href="">subitem 1</a>
                      </li>
                      <li class="menu-item">
                        <a href="">subitem 2</a>
                      </li>
                      <li class="menu-item">
                        <a href="">subitem 3</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item">
                    <a href="">subitem 2</a>
                  </li>
                  <li class="menu-item menu-item-has-children">
                    <a href="">subitem 3</a>
                    <ul class="sub-menu">
                      <li class="menu-item">
                        <a href="">subitem 1</a>
                      </li>
                      <li class="menu-item">
                        <a href="">subitem 2</a>
                      </li>
                      <li class="menu-item">
                        <a href="">subitem 3</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item">
                    <a href="">subitem 4</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item menu-item-has-children">
                <a href="/">Supports</a>
                <ul class="sub-menu">
                  <li class="menu-item">
                    <a href="">subitem 1</a>
                  </li>
                  <li class="menu-item">
                    <a href="">subitem 2</a>
                  </li>
                  <li class="menu-item">
                    <a href="">subitem 3</a>
                  </li>
                  <li class="menu-item">
                    <a href="">subitem 4</a>
                  </li>
                  <li class="menu-item">
                    <a href="">subitem 5</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="/contacts.html">Contact</a>
              </li>
            </ul>
          </nav>
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