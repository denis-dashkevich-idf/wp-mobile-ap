<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.min.css' );
	wp_enqueue_style( 'wp-styles', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.min.css' );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/script.min.js', array(), '1.0.0', true );
}

// add menu
add_action( 'after_setup_theme', 'theme_register_nav' );
function theme_register_nav() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

add_theme_support( 'custom-logo' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function wpb_widgets_init() {
 
	register_sidebar( array(
			'name'          => 'Custom Footer Widget Area',
			'id'            => 'custom-footer-widget',
			'before_widget' => '<div class="footer__column">',
			'after_widget'  => '</div>',
			'before_title'  => '<p class="footer__column-title">',
			'after_title'   => '</p>',
	) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );