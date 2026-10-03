<?php
if (!defined("BASE_URL")) {
    define("BASE_URL", "/drarosero/");
}

if (!defined('BASE_PATH')) {
    define('BASE_PATH', __DIR__ . "/");
}

if (!defined('BASE_DOMAIN')) {
    define('BASE_DOMAIN', "http://localhost");
}

if (!defined('SEO_URL')) {
    define('SEO_URL', rtrim(BASE_DOMAIN, '/' . BASE_URL));
}

//Producción:
/*
if (!defined("BASE_URL")) {
    define("BASE_URL", "/");
}

if (!defined('BASE_PATH')) {
    define('BASE_PATH', __DIR__ . "/");
}

if (!defined('BASE_DOMAIN')) {
    define('BASE_DOMAIN', "https: url");
}

if (!defined('SEO_URL')) {
    defined('SEO_URL', rtrim(BASE_DOMAIN, '/' . BASE_URL));
}
*/
