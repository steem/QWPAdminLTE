<?php
define('CONTENT_CHARSET', 'utf-8');
define('DB_CHARSET', 'utf-8');
define('DEFAULT_LANGUAGE', 'zh');
define('IN_DEBUG', false);
define('IN_MOCK', false);
// you can change the default module
define('DEFAULT_MODULE', 'dashboard');
define('QWP_SESSION_PREFIX', 'qwp_admin_lte_');
define('QWP_SESSION_TIMEOUT', true);
define('QWP_LOG_DIR', '/tmp/qwp_admin_lte');
define('QWP_ROUTER_ROOT', QWP_ROOT . '/router');
define('QWP_CORE_ROOT', QWP_ROOT . '/core');
define('QWP_PASSPORT_ROOT', QWP_ROOT . '/passport');
define('QWP_SECURITY_ROOT', QWP_ROOT . '/security');
define('QWP_INC_ROOT', QWP_ROOT . '/include');
define('QWP_COMMON_ROOT', QWP_ROOT . '/common');
define('QWP_UI_ROOT', QWP_ROOT . '/ui');
define('QWP_TEMPLATE_ROOT', QWP_ROOT . '/template');
define('QWP_MODULE_ROOT', QWP_ROOT . '/modules');
define('QWP_LANG_ROOT', QWP_ROOT . '/lang');
define('QWP_SHOW_INVALID_FORM_VALUE', true);
define('DRUPAL_DB_ROOT', QWP_INC_ROOT . '/database');
define('QWP_PRODUCT_VERSION', '1');

define('PRODUCT_NAME_LONG', 'QWPAdminLTE - A Quick Web Admin Template based on qwp and AdminLTE');
define('PRODUCT_NAME', 'QWPAdminLTE');
define('PRODUCT_NAME_SHORT', 'QWP');
define('COMPANY_NAME', 'QWPAdminLTE, Inc.');

$active_db = 'default';
// database settings
$databases['default']['default'] = array (
    'database' => 'qwp_adminlte',
    'username' => 'root',
    'password' => '',
    'host' => 'localhost',
    'port' => '',
    'driver' => 'mysql',
    'prefix' => '',
);