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
define('DB_NAME', 'mySiteOnWP_db');

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
define('AUTH_KEY',         'nwSp&/pU[S/#7T6Kv7Mb>@KV;O+(5$Uv>L%|AA=KL&ipdC ?g}+ )8rck~IG3pTg');
define('SECURE_AUTH_KEY',  'mcco+4-6Cj_@_yJ8~_!DeuqGAoTo#bv#?d3Uucr7MX`_ApFOOB,g+Zg]=J1W(`mk');
define('LOGGED_IN_KEY',    'EUsChv!:4Q|?CMgGdUk*9oZ223P7Amv?+,s6+qU]<~RZ2r-;mjcNg`j#ZpH1B9u&');
define('NONCE_KEY',        '%s&eC0;1@GU6YOmWmc:MiJw~r{r:MK&bh<wPKsrbegI|:Giy=#K&+YEC~qi:h sK');
define('AUTH_SALT',        '0DjF}7Fw{&ghBTWVf]MF~=1::!{}9Q%E&0IhlYQo9-M9X(#rcm1:$*|w|*uv :yL');
define('SECURE_AUTH_SALT', '1g/*nonwU53_IBRIqF($F6A)<MExF!1268 oW#4o;>N5 !HkL/am^i=z*I`V5A-I');
define('LOGGED_IN_SALT',   'F}x*:yEyreL+0-jTsX^Eua>uk r,S0ej9zvZ%Z9O)3ZMGM4=[;rjHwS%ZT^? /$!');
define('NONCE_SALT',       '@A{y]T%evSslDBch(gZJ##0gs`po]^ma_W}=zGShkm[U,x<9;_:fzXy)Ji^E$53U');

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
