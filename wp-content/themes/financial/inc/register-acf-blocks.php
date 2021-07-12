<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a promo block.
        acf_register_block_type(array(
            'name'              => 'promo',
            'title'             => __('promo/секция промо'),
            'description'       => __('promo'),
            'render_template'   => 'template-parts/blocks/promo.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'promo', 'промо' ),
        ));
       // register a about block.
        acf_register_block_type(array(
            'name'              => 'about',
            'title'             => __('about/секция О нас'),
            'description'       => __('about'),
            'render_template'   => 'template-parts/blocks/about.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'about', 'о нас' ),
        ));
       // register a app block.
        acf_register_block_type(array(
            'name'              => 'app',
            'title'             => __('app/Приложение'),
            'description'       => __('app'),
            'render_template'   => 'template-parts/blocks/app.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'app', 'пирложение' ),
        ));
       // register a feature block.
        acf_register_block_type(array(
            'name'              => 'features',
            'title'             => __('features/Преимущества'),
            'description'       => __('features'),
            'render_template'   => 'template-parts/blocks/feature.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'features', 'Преимущества' ),
        ));
       // register a jackpot block.
        acf_register_block_type(array(
            'name'              => 'jackpot',
            'title'             => __('jackpot/Джекпот'),
            'description'       => __('jackpot'),
            'render_template'   => 'template-parts/blocks/jackpot.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'jackpot', 'Джекпот' ),
        ));
       // register a hiw block.
        acf_register_block_type(array(
            'name'              => 'hiw',
            'title'             => __('hiw/Как это работает'),
            'description'       => __('hiw'),
            'render_template'   => 'template-parts/blocks/hiw.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'hiw', 'Как это работает' ),
        ));
       // register a secure block.
        acf_register_block_type(array(
            'name'              => 'secure',
            'title'             => __('secure/Безопасность'),
            'description'       => __('secure'),
            'render_template'   => 'template-parts/blocks/secure.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'secure', 'Безопасность' ),
        ));
       // register a plans block.
        acf_register_block_type(array(
            'name'              => 'plans',
            'title'             => __('plans/Тарифы'),
            'description'       => __('plans'),
            'render_template'   => 'template-parts/blocks/plans.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'plans', 'Тарифы' ),
        ));
       // register a faq block.
        acf_register_block_type(array(
            'name'              => 'faq',
            'title'             => __('faq/Вопрос ответ'),
            'description'       => __('faq'),
            'render_template'   => 'template-parts/blocks/faq.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'faq', 'Вопрос ответ' ),
        ));
    }
}