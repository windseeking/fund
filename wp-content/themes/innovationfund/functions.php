<?php

require_once 'src/Backend/ACF.php';
require_once 'src/Backend/ContactForm.php';
require_once 'src/Backend/PolylangStrings.php';

function my_var_dump($var) {
    echo '<pre>'; 
    var_dump($var);
    echo '</pre>';
}

/**
 * Turns off admin bar
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Turns on thumbnails
 */
function theme_register_support()
{
    add_theme_support('post-thumbnails', array('post'));
    add_image_size('post_image', 400, 285, true);
}

/**
 * Enqueues styles and scripts
 */
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts()
{
    wp_enqueue_style('vendor-style', get_template_directory_uri() . '/dist/css/vendor.css', '', 1);
    wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/css/main.min.css', '', 1);
    wp_enqueue_script('vendor-script', get_template_directory_uri() . '/dist/js/vendor.js', 'null', 1, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/dist/js/script.min.js', 'jquery', 1, true);
    wp_localize_script('main-script', 'paths',
        array(
            'homeUrl' => home_url(),
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'themeUrl' => get_template_directory_uri(),
            'apiUrl' => get_home_url() . '/wp-json/wp/v2/',
        ));
    wp_enqueue_script('jquery-form');
    wp_localize_script(
        'main-script',
        'feedback_object',
        array(
            'url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('feedback-nonce'),
        )
    );
    wp_deregister_script( 'wp-embed' );
}

/**
 * Adds menus support
 */
add_theme_support('menus');

/**
 * Registers menu location
 */
add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('header', 'Шапка');
    register_nav_menu('footer-top', 'Подвал, верх');
    register_nav_menu('footer-bottom', 'Подвал, низ');
    register_nav_menu('header-rd', 'Шапка R&D');
}

/**
 * Registers widgets
 */
add_action('widgets_init', 'innovationfund_widgets_init');
function innovationfund_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Переключатель языка', 'innovationfund'),
            'id' => 'lang_switcher',
            'description' => 'Переключатель языка',
            'before_widget' => '<div id="%1$s" class="widget header-lang %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );
}

/**
 * Register categories for innovations post type
 */
add_action('init', 'register_innovations_categories');

function register_innovations_categories()
{

    register_taxonomy('developers', ['innovations'], [
        'label' => 'Разработчики',
        'labels' => [
            'name' => 'Разработчики',
            'singular_name' => 'Разработчик',
            'search_items' => 'Искать разработчика',
            'all_items' => 'Все разработчики',
            'view_item ' => 'Показать разработчика',
            'parent_item' => 'Родительская категория',
            'parent_item_colon' => 'Родительская категория:',
            'edit_item' => 'Редактировать разработчика',
            'update_item' => 'Обновить разработчика',
            'add_new_item' => 'Добавить нового разработчика',
            'new_item_name' => 'Новое имя разработчика',
            'menu_name' => 'Разработчики',
        ],
        'public' => true,
        'hierarchical' => true,
        'rewrite' => true,
        'query_var' => 'developer',
        'meta_box_cb' => null,
        'show_admin_column' => true,
        'show_in_quick_edit' => true,
        'show_in_rest' => true,
        'rest_base' => null,
    ]);
}

/**
 * Registers Innovation post type
 */
add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('innovations', [
        'label' => null,
        'labels' => [
            'name' => 'Инновации',
            'singular_name' => 'Инновация',
            'add_new' => 'Добавить инновацию',
            'add_new_item' => 'Добавление инновации',
            'edit_item' => 'Редактирование инновации',
            'new_item' => 'Новая инновация',
            'view_item' => 'Смотреть инновацию',
            'search_items' => 'Искать инновацию',
            'not_found' => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'parent_item_colon' => '',
            'menu_name' => 'Инновации',
        ],
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => null,
        'rest_base' => null,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-lightbulb',
        'hierarchical' => false,
        'supports' => ['title', 'editor', 'excerpt', 'custom-fields'],
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
}

/**
 * Adds custom classes to <li> in menu
 * TODO: проверить, используется ли
 */
add_filter('nav_menu_css_class', 'custom_class', 10, 4);
function custom_class($classes, $item, $args, $depth)
{
    if ('primary' === $args->theme_location) {
        $classes = ['nav-item nav-link text-nowrap'];
    } else {
        $classes = [];
    }

    return $classes;
}

function get_child_pages($post)
{
    $pages = (new WP_Query())->query([
        'post_type' => 'page',
        'posts_per_page' => -1
    ]);
    $children_pages = [];
    $children_objects = [];
    $post_id = is_int($post) ? $post : $post->ID;

    if (!empty(get_page_children($post->ID, $pages))) {
        $children_objects = get_page_children($post->ID, $pages);
    } elseif ($post->post_parent != 0) {
        $children_objects = get_page_children($post->post_parent, $pages);
    }

    if ($children_objects) {
        foreach ($children_objects as $child_object) {
            $children_pages[] = array(
                'title' => $child_object->post_title,
                'permalink' => get_permalink($child_object->ID)
            );
        }
    }
    return $children_pages;
}

function get_translation($str, $lang): string {
    foreach (get_field('elements', 'global-translations') as $element) {
        if ($lang == 'ru' && $element['name'] == $str) {
            return $element['name'];
        } elseif ($element['name'] == $str) {
            return $element['translations'][$lang];
        }
    }
    return '<span style="color: #dd0000">Элемент для перевода не найден</span>';
}

function get_page_title($post) {
    if (is_single()) {
        return $post->post_title;
    } elseif (is_tax()) {
        $post_type = get_taxonomy(get_queried_object()->taxonomy)->object_type[0];
        return pll_e(get_post_type_object($post_type)->label);
    } elseif (is_archive() && get_queried_object()->name === 'innovations') {
        return pll_e(get_queried_object()->label);
    } elseif (is_archive()) {
        return get_queried_object()->name;
    }
    return the_page_title();
}

// Returns custom page title for <h1> and get_breadcrumbs()
function the_page_title()
{
    $title = wp_get_document_title();
    return apply_filters('document_title_parts', $title);
}

// Removes site name from title and modifies search page title
add_filter('document_title_parts', function ($title)
{
    if (isset($title['site'])) unset($title['site']);
    if (isset($title['page'])) unset($title['page']);
    if (is_search() && isset($title['title'])) $title['title'] =  pll__('Результаты поиска');

    return $title;
});