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
define( 'DB_NAME', 'wp_doorStore' );

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
define( 'AUTH_KEY',         'Z*Ca;_lELt21#Slq ,G*|k (8C R_:Xt{*[bI`HvSqt@&uw:l<e8+/L@ #w::|r#' );
define( 'SECURE_AUTH_KEY',  'M|[L.Ni%Otv:ONa+pKtY~mlba;[`_uQwGonH8pwrHW(qNR*wi#/xQe-{:azAD.;i' );
define( 'LOGGED_IN_KEY',    'F>?$]Z)/YmmjAFd$G0,(?xaNMQCp:<c^qgze2DH*wU0Is@[0nFf[Q8n(6!({Qf&V' );
define( 'NONCE_KEY',        'kN?%T$z2)vma2Adrk@3*|v|qrY3Ntx;J[,,1bGjW6MP}Ic;v?wiVJqp/_2_C-(~4' );
define( 'AUTH_SALT',        'S8g;!Z7[4;=]=iuyZ+t()~[%?1@Wo7d0J$wd}oJnFios(?,8l1<pZKzgaL/41{}#' );
define( 'SECURE_AUTH_SALT', '[Zw?- i-D_h}.H:)Rs/wl[S>c^S.R={8Ui[G{tO~JG8xEfyU&p=sx^EM4~6;ae5Y' );
define( 'LOGGED_IN_SALT',   'g?Azf~&/~$@95KG0@xbx4ga)4rY_[9<qD~tg25YM>a2:SglX&$T:7azHaj#OH&]l' );
define( 'NONCE_SALT',       '!Y]![?QM_7ZFb[v]iP}l4$E_.D@DadKTXl]A$04-c^SB`pC*e-o$2oPn9<aOW~C+' );

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
