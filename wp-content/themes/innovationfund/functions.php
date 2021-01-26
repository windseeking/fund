<?php
/**
 * innovationfund functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package innovationfund
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'innovationfund_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function innovationfund_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on innovationfund, use a find and replace
		 * to change 'innovationfund' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'innovationfund', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'innovationfund' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'innovationfund_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'innovationfund_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function innovationfund_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'innovationfund_content_width', 640 );
}
add_action( 'after_setup_theme', 'innovationfund_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function innovationfund_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'innovationfund' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'innovationfund' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'innovationfund_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function innovationfund_scripts() {
	wp_enqueue_style( 'innovationfund-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'innovationfund-style', 'rtl', 'replace' );

	wp_enqueue_script( 'innovationfund-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'innovationfund_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_footer', 'theme_scripts');

function theme_styles() {
	    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('slider', get_template_directory_uri() . '/css/slider.css');
    wp_enqueue_style('assets_style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css');
}

function theme_scripts() {
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js');
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js');
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}

/**
 * Создает подготовленное выражение на основе готового SQL запроса и переданных данных
 *
 * @param $link mysqli Ресурс соединения
 * @param $sql string SQL запрос с плейсхолдерами вместо значений
 * @param array $data Данные для вставки на место плейсхолдеров
 *
 * @return mysqli_stmt Подготовленное выражение
 */
function db_get_prepare_stmt($link, $sql, $data = []) {
    $stmt = mysqli_prepare($link, $sql);

    if ($data) {
        $types = '';
        $stmt_data = [];

        foreach ($data as $value) {
            $type = null;

            if (is_int($value)) {
                $type = 'i';
            }
            else if (is_string($value)) {
                $type = 's';
            }
            else if (is_double($value)) {
                $type = 'd';
            }
            else if ($value === null) {
                $type = 'd';
            }

            if ($type) {
                $types .= $type;
                $stmt_data[] = $value;
            }
        }

        $values = array_merge([$stmt, $types], $stmt_data);

        $func = 'mysqli_stmt_bind_param';
        $func(...$values);
    }

    return $stmt;
}

function db_fetch_data($con, $sql, $data = []) {
    $result = [];
    $stmt = db_get_prepare_stmt($con, $sql, $data);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    if ($res) {
        $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    mysqli_stmt_close($stmt);
    return $result;
};


function add_innovation($con, array $innovation, string $lang)
{
    $sql =
        'INSERT INTO innovations_' . $lang . ' (name, short_description, author, main_image_path, market_types, current_stage, money_needed, description, roadmap, market_and_appliance, competitive_ability, poll_link_url, presentation_link, tech_offer_link, partnership) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    $values = [
        $innovation['name'] = ltrim($innovation['name']),
        $innovation['short_description'] = ltrim($innovation['short_description']),
        $innovation['author'] = ltrim($innovation['author']),
        $innovation['main_image_path'],
        $innovation['market_types'] = ltrim($innovation['market_types']),
        $innovation['current_stage'] = strtolower(ltrim($innovation['current_stage'])),
        $innovation['money_needed'] = ltrim($innovation['money_needed']),
        $innovation['description'] = ltrim($innovation['description']),
        $innovation['roadmap'] = ltrim($innovation['roadmap']),
        $innovation['market_and_appliance'] = ltrim($innovation['market_and_appliance']),
        $innovation['competitive_ability'] = ltrim($innovation['competitive_ability']),
        $innovation['poll_link_url'] = ltrim($innovation['poll_link_url']),
        $innovation['presentation_link'] = ltrim($innovation['presentation_link']),
        $innovation['tech_offer_link'] = ltrim($innovation['tech_offer_link']),
        $innovation['partnership'] = ltrim($innovation['partnership'])
    ];
    $stmt = db_get_prepare_stmt($con, $sql, $values);
    mysqli_stmt_execute($stmt);

    if (mysqli_error($con)) {
        return false;
    }
    return true;
}

function add_news($con, array $news)
{
    $sql =
        'INSERT INTO news (title, text, cat, image_path, created_at) 
        VALUES (?, ?, ?, ?, NOW())';
    $values = [
        $news['title'] = ltrim($news['title']),
        $news['text'] = ltrim($news['text']),
        $news['cat'],
        $news['image_path']
    ];
    $stmt = db_get_prepare_stmt($con, $sql, $values);
    mysqli_stmt_execute($stmt);

    if (mysqli_error($con)) {
        return false;
    }
    return true;
}

function add_partner($con, array $partner, string $lang)
{
    $sql =
        'INSERT INTO partners_' . $lang . ' (name, description, image_path, link) 
        VALUES (?, ?, ?, ?)';
    $values = [
        $partner['name'] = ltrim($partner['name']),
        $partner['description'] = ltrim($partner['description']),
        $partner['image_path'],
        $partner['link']
    ];
    $stmt = db_get_prepare_stmt($con, $sql, $values);
    mysqli_stmt_execute($stmt);

    if (mysqli_error($con)) {
        return false;
    }
    return true;
}

function filter_tags(string $str = null)
{
    return $str === null ? '' : strip_tags($str);
}

function get_connection(array $database_config)
{
    $con = mysqli_connect($database_config['host'], $database_config['user'], $database_config['password'],
        $database_config['database']);
    if (!$con) {
        die(mysqli_connect_error());
    }
    mysqli_set_charset($con, 'utf8');
    return $con;
}

function get_innovations(mysqli $con, $language)
{
    $sql =
        'SELECT * FROM innovations_' . $language;
    $res = mysqli_query($con, $sql);
    return $innovations = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function get_innovation_by_id(mysqli $con, int $id, string $language)
{
    $sql = 'SELECT * FROM innovations_' . $language .
        ' WHERE id = ' . $id;
    $res = mysqli_query($con, $sql);
    if ($res) {
        return mysqli_fetch_assoc($res);
    }
    return [];
}

function get_language()
{
    if (isset($_GET['lang'])) {
        $default_lang = $_GET['lang'];
        setcookie("language", $default_lang, time() + 3600 * 24 * 365); // expires in 1 year
        return $default_lang;
    }

    if (isset($_COOKIE['language'])) {
        $default_lang = $_COOKIE['language'];
        return $default_lang;
    }

    if (!isset($_GET['lang']) && !isset($_COOKIE['language'])) {
        preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]),
            $matches); // Получаем массив $matches с соответствиями
        $langs = array_combine($matches[1],
            $matches[2]); // Создаём массив с ключами $matches[1] и значениями $matches[2]
        foreach ($langs as $n => $v) {
            $langs[$n] = $v ? $v : 1;
        } // Если нет q, то ставим значение 1
        arsort($langs); // Сортируем по убыванию q
        $default_lang = key($langs); // Берём 1-й ключ первого (текущего) элемента (он же максимальный по q)
        if (strpos($default_lang, "ru" !== false)) {
            return "ru";
        } elseif (strpos($default_lang, "ru-ru") !== false) {
            return "ru";
        } elseif (strpos($default_lang, "uk") !== false) {
            return "uk";
        } elseif (strpos($default_lang, "uk-uk") !== false) {
            return "uk";
        } elseif (strpos($default_lang, "en") !== false) {
            return "en";
        } elseif (strpos($default_lang, "en-en") !== false) {
            return "en";
        } elseif (strpos($default_lang, "en-us") !== false) {
            return "en";
        } else {
            return $default_lang;
        }
    }
}

function get_news($con)
{
    $sql =
        'SELECT * FROM news ORDER BY created_at DESC';
    $res = mysqli_query($con, $sql);
    return $news = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function get_partners($con, $language)
{
    $sql =
        'SELECT * FROM partners_' . $language;
    $res = mysqli_query($con, $sql);
    return $partners = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function get_projects($con, $language)
{
    $sql =
        'SELECT * FROM projects_' . $language;
    $res = mysqli_query($con, $sql);
    return $projects = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function include_template($name, $data)
{
    $name = 'templates/' . $name;
    $result = '';
    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();
    return $result;
}

function is_email_exist($con, string $email)
{
    $sql =
        'SELECT id FROM users ' .
        'WHERE email = ?';
    $values = [$email];
    $user = db_fetch_data($con, $sql, $values);
    if (!empty($user)) {
        return true;
    }
    return false;
}

function is_news_exist($con, string $title)
{
    $sql =
        'SELECT id FROM news ' .
        'WHERE title = ?';
    $values = [$title];
    $news = db_fetch_data($con, $sql, $values);
    if (!empty($news)) {
        return true;
    }
    return false;
}

function is_partner_exist($con, string $name)
{
    $sql =
        'SELECT id FROM partners ' .
        'WHERE name = ?';
    $values = [$name];
    $partner = db_fetch_data($con, $sql, $values);
    if (!empty($partner)) {
        return true;
    }
    return false;
}

function is_username_exist($con, $username)
{
    $sql =
        'SELECT id FROM users ' .
        'WHERE username = ?';
    $values = [$username];
    $user = db_fetch_data($con, $sql, $values);
    if (!empty($user)) {
        return true;
    }
    return false;
}




