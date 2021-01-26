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
define( 'DB_USER', 'pavel-k_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'pakoWorld6' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'mysql18.hosting.ua' );

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
define( 'AUTH_KEY',         '0>yX6%HG>p%.pj`8%Sa<)BP`{{OC`Hc/};X~iG}]2jRH=.5rXl*Z=QA5d0NmON^L' );
define( 'SECURE_AUTH_KEY',  '-}r^uXVU6$qOg_nZ)xZ!0E}qH}P3Oh=aA`NMvs&2WPnvmFgmOnjENl3X(+P4~F0o' );
define( 'LOGGED_IN_KEY',    'G~h0BCsU+tW0Ia$FG !)@XmR=cFA)=S27?dMO?]e4xHzNg5;4a0sjI?>.dIXe}Pd' );
define( 'NONCE_KEY',        'SjTqbkkln[g<>:qGl*NRRq}a6^|q_!ILU.RkcUv^=52#P/x~B!Ml~#a$$UvhuL=!' );
define( 'AUTH_SALT',        'Ne#S(zqm`HIFws7U<y8TUHJaknH2Vl~0SsNJnZ^IKv7!e(b `eEgtITl[9K40UUR' );
define( 'SECURE_AUTH_SALT', ']:3BB1M-HqX<a&5^$+]Re}t,mlZ)Cn*RFkYnU#cr@KA!29/e~8U5Dqd+q8L-I.ch' );
define( 'LOGGED_IN_SALT',   'w*1s_4zH>sZ^qY3Um+(&yt$gfirE)l5-njDba7#.^(?6DRQgq_]7;F|(NC9;N8]V' );
define( 'NONCE_SALT',       'TPfJ|[jvLD@53]G}wXr}x%6xvU=?iMC5X^8@(i@.#{ej7r2>hkGKYa73)M5mHJB3' );

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
