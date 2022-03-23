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
 * * Настройки MySQL
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
define( 'DB_NAME', 'api_demo' );

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
define( 'AUTH_KEY',         '.M$Ph+=Oo9#l!B7NFd94l=4%RSj TwkIzsR,q,@o.-Okxu(JwLaL|X{39&N?CJy0' );
define( 'SECURE_AUTH_KEY',  'U;SgtW)}EpQH*qSjJ5(*LEv*E%3cAFlB~wIL$.#MBTX3;nyNi&.I#5^=k?1FL85:' );
define( 'LOGGED_IN_KEY',    'oI7(g7N. e@!1d?HoMS<K3>l`rosJsZ=M)hb1+dh!m[kLwpNMFDdf|Dk/*%vgR3(' );
define( 'NONCE_KEY',        'x#mgBj@/X$)|wd,e)#^JgY KEi$:wch0D=>aN( _]1c2].Pdf3_G+PWp^u;fad]{' );
define( 'AUTH_SALT',        'oG~8QG*%#GNb.$Vj%^46eV*C$.Mk(MWuxee32^)N>5wdduJF[M/7QyA2caEd::%(' );
define( 'SECURE_AUTH_SALT', 'e|IAqWP^H}>k`U7x33XOB 3@Ea]OMopr}{~A1u`z2$r pw6cI2ir=JH!E2+P qV(' );
define( 'LOGGED_IN_SALT',   ')WTBA4!7-WSW:_o1)go2dz$mv?N94=DSB:=obmD&D#HT2e7@}XFhd^ZUtJXEw!Zx' );
define( 'NONCE_SALT',       '=1d~=GLU`NNl*qe#Hsbr@&AQOTr?B%S@YbfR]S2;VgF(AGpWK`ybIL/M]T1a7mR?' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
