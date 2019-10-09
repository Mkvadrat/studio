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
define( 'DB_NAME', 'vtwo' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '[{utVd$mV#r=c-vz#|Luc2kJp9oPJI[^heb,!)U&Aa?bEmHN^Uw1T?KiSWOwh{3?' );
define( 'SECURE_AUTH_KEY',  'Q9|/3gj}|BP{M =_g$USr>r2~!g,:DM~;R~c,X,^;~RNK>N!8tD*&!#7ei*c2)vi' );
define( 'LOGGED_IN_KEY',    'k-DYNcaZ9>tGbd)]P6$%N/1HZg_J!]g1` CZ{KFcS0=up@-<D~0,<;0`7tf:&/Br' );
define( 'NONCE_KEY',        'l+IT0fkKEo4:RuQ c!$>OEd_XQP:h0PUH(]UMx}Mn@)?%@,v=/+A:RL$%}5.f|Rv' );
define( 'AUTH_SALT',        '*:?=[CG?p*o/*|-:+hN-asNk`N}WPj^@O!YVfzu2?Q`BE.(#M4bLV(1%BE*Gprw1' );
define( 'SECURE_AUTH_SALT', '~;)>=/pz$F2RWVT/tgqW?d(;PoN>a$J<[-U@$l7b4 (GMxMSGkHp_B!^5UhDL:3|' );
define( 'LOGGED_IN_SALT',   '&>z^M%@fv_4f#)! 2Z/[gKLx(Ix5fm6mQ<tb^WOzLk2b#voA?qh!rS3_Htg)650}' );
define( 'NONCE_SALT',       '69 y| ODmLr^A`[{X~JV (Q:Wy:D{>W+2*JHR7$dcRc#*E(QfOQRHrHz,8!NSk:P' );

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
