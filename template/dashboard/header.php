<?php if(!defined('QWP_ROOT')){exit('Invalid Request');}
require_once(QWP_ROOT . '/security/admin_nav.php');
qwp_render_header();
?><body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a href="#" class="logo">
            <span class="logo-mini"><b>QWP</b></span>
            <span class="logo-lg"><b>QWP</b>AdminLTE</span>
        </a>
        <nav class="navbar navbar-static-top">
<?php if (qwp_has_sub_modules()) {?>
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
<?php }?>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <?php qwp_tmpl_render_nav();?>
                    <?php render_notification_nav();?>
                    <?php render_user_nav();?>
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="content-wrapper">
        <section class="content">