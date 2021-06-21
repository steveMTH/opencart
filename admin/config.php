<?php
// HTTP
define('HTTP_SERVER', 'http://192.168.64.2/demo/admin/');
define('HTTP_CATALOG', 'http://192.168.64.2/demo/');

// HTTPS
define('HTTPS_SERVER', 'http://192.168.64.2/demo/admin/');
define('HTTPS_CATALOG', 'http://192.168.64.2/demo/');

// DIR
define('DIR_APPLICATION', '/opt/lampp/htdocs/demo/admin/');
define('DIR_SYSTEM', '/opt/lampp/htdocs/demo/system/');

define('DIR_IMAGE', '/opt/lampp/htdocs/demo/image/');

define('DIR_STORAGE', DIR_SYSTEM . 'storage/');

define('DIR_CATALOG', '/opt/lampp/htdocs/demo/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
