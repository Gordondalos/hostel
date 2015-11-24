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
define('DB_NAME', 'hostel');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',;s=_G=#:s!L)Tir.E4(v1gzv!q ;_hyjS5CTZynOSQ*3D Xy0l-+-B+9@d7t@|!');
define('SECURE_AUTH_KEY',  'e-:#VV-0..DreaN|h/wi:X[stVCJiO52uJ3$*gW0Ap+=_Gfl/WJjY/w#<u`bFJU[');
define('LOGGED_IN_KEY',    'K&$sDX#@.< kelSN] (hSb=fa9a1;b7UA9[.|v>Q$FlFO@iN:4@%Uj[e/UoZPML?');
define('NONCE_KEY',        '=j,x|}{4bbV34 I:0{KCQaYOh@s0 xfuls!oh d]r<3J{5>d.Qh<_C_nwto!GC%&');
define('AUTH_SALT',        ':GG71V4b`kvw+Q[%N#F,Ah|HONC)}q*:Qz0?3$St^ykriz+4@Pv+ujw/<$`GbPqd');
define('SECURE_AUTH_SALT', 'i-]JsOfZi7a.+/c&C+ U:3(>RH)R`qGuuC//Xj-U3Io8+sWy%nph(.*l@^6%2v&Z');
define('LOGGED_IN_SALT',   '#Q2,Tr<E;2K}5-~rVq)1z;]sp!{M&0Lzp%N}^P`%l`:QSfh%}j%X@BPUk0rGD>&F');
define('NONCE_SALT',       'P[sI]?+QR([M.aR3u?wBpj:^hj=Y]w|(zgNpZM))jQ$[[[QJ2~$[AKen;zZi.Pp<');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
