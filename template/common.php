<?php
if(!defined('QWP_ROOT')){exit('Invalid Request');}
function qwp_set_site_info() {
?><?php if (defined('PRODUCT_NAME')) {?>
<title><?php echo(PRODUCT_NAME);?></title>
<?php }?>
<?php if (defined('SITE_KEYWORDS')) {?>
<meta name="keywords" content="<?php echo(SITE_KEYWORDS);?>" />
<?php }?>
<?php if (defined('SITE_DESCRIPTION')) {?>
<meta name="description" content="<?php echo(SITE_DESCRIPTION);?>" />
<?php }?>
<script>
var qwp={
    _r:[],
    r: function(f){qwp._r.push(f);},
    isEmpty: function(o){return !o || !o.length;}
};
</script>
<?php
}
function qwp_get_logo() {
    $img = 'img/logo.png';
    $file_path = join_paths(QWP_ROOT, $img);
    return file_exists($file_path) ? "<img src='$img'> " : '';
}
function qwp_render_header() {
?><!DOCTYPE html>
<html lang="<?php echo(qwp_html_lang());?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php qwp_set_site_info();?>
    <link href="css/bootstrap.min.css<?php echo_product_version();?>" rel="stylesheet">
    <link href="css/font-awesome.min.css<?php echo_product_version();?>" rel="stylesheet">
    <link href="css/ionicons.min.css<?php echo_product_version();?>" rel="stylesheet">
    <link href="css/adminlte.min.css<?php echo_product_version();?>" rel="stylesheet">
    <link href="css/skins/skin-blue.min.css<?php echo_product_version();?>" rel="stylesheet">
    <link href="css/toastr.min.css<?php echo_product_version();?>" rel="stylesheet">
    <link href="css/iCheck.css<?php echo_product_version();?>" rel="stylesheet">
    <?php qwp_render_css();?>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js<?php echo_product_version();?>"></script>
    <script src="js/respond.min.js<?php echo_product_version();?>"></script>
    <![endif]-->
</head>
<?php
}
function qwp_render_footer() {
?>
<script src="js/jquery-1.11.3.min.js<?php echo_product_version();?>"></script>
<script src="js/jquery-ui-1.11.4.min.js<?php echo_product_version();?>"></script>
<script src="js/bootstrap.min.js<?php echo_product_version();?>"></script>
<script src="js/jquery.slimscroll.min.js<?php echo_product_version();?>"></script>
<script src="js/toastr.min.js<?php echo_product_version();?>"></script>
<script src="js/icheck.min.js<?php echo_product_version();?>"></script>
<?php qwp_render_js_lang();?>
<script src="js/adminlte.min.js<?php echo_product_version();?>"></script>
<script src="js/qwp.js<?php echo_product_version();?>"></script>
<?php
    qwp_render_js();
}
function render_user_nav()
{
    global $USER;
?>
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="img/user2-160x160.jpg" class="user-image" alt="User Image">
        <span class="hidden-xs"><?php echo($USER->name);?></span>
    </a>
    <ul class="dropdown-menu">
        <li class="user-header">
            <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
            <p>
                Alexander Pierce - Web Developer
                <small>Member since Nov. 2012</small>
            </p>
        </li>
        <li class="user-body">
            <div class="row">
                <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                </div>
            </div>
        </li>
        <li class="user-footer">
            <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="<?php echo(qwp_uri_logout());?>" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>
    </ul>
</li>
<?php
}