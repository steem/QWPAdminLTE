<?php
if(!defined('QWP_ROOT')){exit('Invalid Request');}
qwp_ui_init_table();
$option = array(
    'where' => 'id<>1'
);
global $roles;
get_user_roles($roles);
qwp_ui_init_dialog();
qwp_create_dialog_with_form("dialog_user", array(
    'width' => '460px',
    'height' => '280px',
), 'user');
?>
<qwp tmpl="search_form">
    <form id="search_form" class="form-inline tbl-search-form" name="all-message" onsubmit="return false">
        <div class="input-group">
            <input name="s[u.account]" type="text" style="width:80px;" class="form-control" placeholder="<?php EL('Account');?>">
            <div class="input-group-btn">
                <button type="button" class="btn btn-warning" mtag="reset"><i class="fa fa-remove"></i></button>
                <button type="button" class="btn btn-info" mtag="search"><i class="fa fa-search"></i></button>
                <button type="button" class="btn btn-primary" mtag="adv"><i class="fa fa-search-plus"></i></button>
            </div>
        </div>
    </form>
</qwp>
<qwp tmpl="adv_search_form">
    <form class="form-vertical" id="adv_search_form" onsubmit="return false;">
        <div class="form-group">
            <div class="btn-group">
                <button mtag="reset" type="reset" class="btn btn-warning btn-sm"><i class="fa fa-remove"></i></button>
                <button mtag="search" class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="s[name]" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="text" name="s[email]" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" name="s[phone]" class="form-control" placeholder="Phone">
        </div>
        <div class="form-group">
            <select name="s[gender]" class="form-control">
                <option value="">All Gender</option>
                <option value="m">Male</option>
                <option value="f">Female</option>
                <option value="x">Unset</option>
                <option value="s">Is set</option>
            </select>
        </div>
        <div class="form-group">
            <select name="s[avatar]" class="form-control">
                <option value="">All</option>
                <option value="1">Has avatar</option>
                <option value="0">No avatar</option>
            </select>
        </div>
        <div class="form-group">
            <select name="s[role]" class="form-control">
                <option value=""><?php EL('All Roles');?></option>
                <?php foreach($roles as $role_item) {
                    echo(format('<option value="{0}">{1}</option>', $role_item['id'], L($role_item['name'])));
                }?>
            </select>
        </div>
    </form>
</qwp>
<div class="user-div">
<div id="users-table" class="row qwp-table"></div>
</div>