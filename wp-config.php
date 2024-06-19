<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test_wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[CnhW4tK<FUns+32mQg{7x|o6S86~oxy=MLREg[(@*K4V;00<: 5)aP&gi2^n~;)' );
define( 'SECURE_AUTH_KEY',  '+dqwo)#{E%e,7H2&E$|q`LUq){S]Y=7l$W$JPNjYOz.,RMtvstc#R2FA:d|k}LlT' );
define( 'LOGGED_IN_KEY',    'VGYx$fm 2Qo`6B1J}`C|o$8q=n~doar57:Pt>(?9TrZHv1`mYX){7$^GwQ|Le~y1' );
define( 'NONCE_KEY',        '[;rCAvr2t[(zjLzrM)hLcT?(Isuh* tu-wD2r9Kh,zD,),AW7b `&/K&4~1]wfT5' );
define( 'AUTH_SALT',        '9Ut8$^LvVWFUH4?Z)te..`%7}M(G[k(oc4.E-aFJCxfDvX5+>P2kX:fYYV,]79:k' );
define( 'SECURE_AUTH_SALT', 'Kq4I@wN-FW{xi7OApyecKxlJ~#N=6!=4MU0.x+u|p[s=pRfaRo .^G7YVtUF5hkf' );
define( 'LOGGED_IN_SALT',   'O4=j/wR]PnN A5R/Oa$+|eL{x|6]-q2i{pEWd2c%cSf%&e6Eg5[cjx,yks</dP2P' );
define( 'NONCE_SALT',       '(,F71>ii*Zz1B%LkoO@~+J#8b4naEjI?z0^d(*@Tt.^^qux2W2&bRK!zL0^N/L$o' );

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
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
