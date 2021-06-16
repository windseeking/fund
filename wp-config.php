<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'pavel-k_innovationfund' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'BYYFptybn2' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zmhV%y5=wV/Dl(~NT#_rvVz(KIQP_]I|L%GUXhBG>jsoK%JJXQFFux43i_qw&-rw' );
define( 'SECURE_AUTH_KEY',  '_ydVyp&2> M)G!{ ]mJ1tH<zK4dwfyb-uJ!/1H|/XSoF<,nhh>3Z6RUt.|afo`;6' );
define( 'LOGGED_IN_KEY',    'DivAL4jl/{>:QdB3cI,]>Afy<m^w$QRZz5$Bbwd5+FW<WM@3qY}Eh2QE<%jZP#.Y' );
define( 'NONCE_KEY',        '&Y0KMX8]/oc+tB_;.yGl<iWJSnEYyM_[|MW.Zp@66%`dtbWrF@~5Z:9R0=LI6jwi' );
define( 'AUTH_SALT',        '89i*|^^72K:Mu[`tV3Q7K94KJu2-z,%daTS)b?p_6)S=}FWN]mPr@.ymv8R8U1~?' );
define( 'SECURE_AUTH_SALT', '3n[<MWVRKx_05&[q-41(:-xFnNVeVEpPi3-5#adUAvRX7bbOO2_p%~1q!*r7N!(+' );
define( 'LOGGED_IN_SALT',   '0O=.I];26Q^X~Vi!Q&9+AO{.iCVsbJA>d^Waf4N+kygF-Gm8CK+x|+eA[ane&6$}' );
define( 'NONCE_SALT',       'W3YB`+0TL5($3VdQ$?`[_oY7+L8]{I`Zb>0;|>S04{im6K2tY7<SJOn):/tQ/;yi' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
