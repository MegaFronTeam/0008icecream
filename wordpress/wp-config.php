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
define( 'DB_NAME', 'icecream' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'icecream' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '49a.zKJak00bLQH/' );

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
define( 'AUTH_KEY',         '_?h [7IyNeKNVpai:D~@jYfi!X0:w6YzN<3kY)m>JMre.7oE50euB]nJ?4:L,lRb' );
define( 'SECURE_AUTH_KEY',  'ow5f=#>L5]#tmiu3Ig5#MzU=]ZwZy H:=gQ`;_KpezgxV7rY G)>^4KgCQnHti1j' );
define( 'LOGGED_IN_KEY',    '(EI!e?/28#1?PZW3iPS8.91Isfj7Dr9Xq@q.Tzr(cNNVK^:;Qm]>V1Q1X/F37vi&' );
define( 'NONCE_KEY',        'yHBQ`YaGT@`N>L{Uh*Y<5Z.2@)DE)E1j5uz{^axAC`r|+0jg}5dB)iM)a$YvRu.W' );
define( 'AUTH_SALT',        'Da{,,n4p3*#R{/S?jl#/p)#+DlQROAm.f7`@g(Mx$lRA=fFve#C5WdlGahu:@yR,' );
define( 'SECURE_AUTH_SALT', '^y.g-O>,vRWIIv$sOFbP`Aq[c53Z|ZNO1nTT`yt~3D%^)=>{3ajXTk4Z:2k)AOg.' );
define( 'LOGGED_IN_SALT',   'C9&9:,jgu0ap@R0Zml+q ixOBdqfFwLr+E&{*i^ko)f{<d(e89u!;2bqY(!%MNyd' );
define( 'NONCE_SALT',       '_r }(s7C/5_Y75KCH*@Y?_:o,D3obN rp*H?tbM$E|h0GsO25plycJ]$^y3r5x^S' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'icecream_';

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
