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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'axmVo52Bafa?Yg;jw|=@-9<0;0%cdjB[h-y;i4975/xbv3v%xps7H&0?7IM/q*I)' );
define( 'SECURE_AUTH_KEY',  ')EjoOB8E;;`. [,)97NxYi-4f0?2wtopoAZ_rU<?c4$6bxoF!wz>;*HOGg*]D}(&' );
define( 'LOGGED_IN_KEY',    'K%Lt9@Kp[?,#Yag>;3>6Y^9?V}$`jRh]#+[8yp;(SDMb/=PH}3,qLBNoo zO.w0c' );
define( 'NONCE_KEY',        'Tg0L(pW%uE~qy%cUmDs5G$(<T/Rr.zjz@U}lri+h1xZbTC=%F!=X6`Pt$d!e%8|N' );
define( 'AUTH_SALT',        'XG!)wL{=uO=UGwEFNGS;M>:6jZ:hl#$.WW;ef+E7{G=-KfZ#YiV}7:Og0WF7Lm@@' );
define( 'SECURE_AUTH_SALT', 'atzdcdRFV7C!)Vk`*1-O5Qo~.Q)+lYVLor;<ZQOxc|8e}Mc>haBhtT30@IS+X^Ur' );
define( 'LOGGED_IN_SALT',   '-LZEl+E>rQ^rO$|bd}U[lxN+9._hqk39Vf;[dd%o**Tj)dWW$kh9]H//t;!/bEZV' );
define( 'NONCE_SALT',       'Xd$ufFf~sg,p_HY-5t:Fuv|1X<%Qmg5:r&%=wZMci*zJ2/9:H`#JgZotBxkE_d89' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
