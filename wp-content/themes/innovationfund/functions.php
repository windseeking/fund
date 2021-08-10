<?php

/**
 * Turns off admin bar
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Turns on thumbnails
 */
function theme_register_support() {
    add_theme_support('post-thumbnails', array('post'));
    add_image_size('post_image', 400, 285, true);
}

/**
 * Enqueues styles and scripts
 */
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
function theme_scripts() {
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/dist/css/main.min.css', '', 1);
    wp_enqueue_style( 'vendor-style', get_template_directory_uri() . '/dist/css/vendor.css', '', 1);
    wp_enqueue_script( 'vendor-script', get_template_directory_uri() . '/dist/js/vendor.js', 'null', 1, true);
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/dist/js/script.min.js', 'jquery', 1, true);
}

/**
 * Adds menus support
 */
add_theme_support( 'menus' );

/**
 * Registers menu location
 */
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
    register_nav_menu( 'header', 'Шапка' );
    register_nav_menu( 'footer-top', 'Подвал, верх' );
    register_nav_menu( 'footer-bottom', 'Подвал, низ' );
}

/**
 * Registers widgets
 */
add_action( 'widgets_init', 'innovationfund_widgets_init' );
function innovationfund_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар инноваций', 'innovationfund' ),
			'id'            => 'innovations_sidebar',
            'description' => 'Сайдбар страницы инноваций',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<div class="cat-title">',
			'after_title'   => '</div>',
		)
	);

    register_sidebar(
        array(
            'name'          => esc_html__( 'Сайдбар новостей', 'innovationfund' ),
            'id'            => 'news_sidebar',
            'description' => 'Сайдбар страницы новостей',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<div class="cat-title">',
            'after_title'   => '</div>',
        )
    );
}

/**
 * Registers Innovation post type
 */
add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type( 'innovations', [
        'label'  => null,
        'labels' => [
            'name'               => 'Инновации', // основное название для типа записи
            'singular_name'      => 'Инновация', // название для одной записи этого типа
            'add_new'            => 'Добавить инновацию', // для добавления новой записи
            'add_new_item'       => 'Добавление инновации', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование инновации', // для редактирования типа записи
            'new_item'           => 'Новая инновация', // текст новой записи
            'view_item'          => 'Смотреть инновацию', // для просмотра записи этого типа.
            'search_items'       => 'Искать инновацию', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Инновации', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-lightbulb',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'excerpt', 'custom-fields', 'comments'], // 'title','editor','author','trackbacks','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}

/**
 * Adds custom classes to <li> in menu
 * TODO: проверить, используется ли
 */
add_filter( 'nav_menu_css_class', 'custom_class', 10, 4 );
function custom_class( $classes, $item, $args, $depth ) {
    if ( 'primary' === $args->theme_location ) {
        $classes = [ 'nav-item nav-link text-nowrap' ];
    } else {
        $classes = [];
    }

    return $classes;
}