<?php
if(!defined('QWP_ROOT')){exit('Invalid Request');}

function add_user(&$msg, &$data) {
    global $F;
    // just for demo of file upload
    if (isset($F['avatar']) && $F['avatar']) {
        qwp_delete_file_in_form('avatar');
        unset($F['avatar']);
    }
    $F['name'] = $F['account'];
    db_insert('sys_user')->fields($F)->execute();
    $msg = L('Create a new user successfully');
}
qwp_set_form_processor('add_user');
qwp_set_form_validator('user');
define('IN_MODULE', 1);
require_once(QWP_CORE_ROOT . '/tmpl_json_ops.php');