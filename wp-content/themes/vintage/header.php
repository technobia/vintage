<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/15/16
 * Time: 5:18 PM
 */ ?>

<html>
<head>
    <title>Tutorial theme</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/jquery.rotate.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/custom.js"></script>
</head>
<body>
<nav class="navbar navbar-default no-border no-margin">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="<?php echo get_home_url()?>" class="navbar-brand">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-vintage.png">
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse">
        <div class="navbar-right no-margin">
            <ul class="main-menu list-inline no-margin">
                <li class="item dropdown">
                    <a href="#" data-toggle="dropdown">Sản Phẩm <i class="fa fa-angle-down"></i></a>
                    <ul class="list-unstyled dropdown-menu no-margin">
                        <li><a href="#"><i class="fa fa-angle-right"></i>Rượu vang Chile Casas Patronales</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Rượu vang Tây Ban Nha Felix Solis</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Rượu vang Ý Travaglini</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Rượu vang Pháp Producta</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Rượu vang Pháp Sovex Grands</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Rượu vang Chile San Marco</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Rượu vang Chile Paso Fino</a></li>
                    </ul>
                </li>
                <li class="item"><a href="#">Hộp Quà</a></li>
                <li class="item"><a href="#">Hình Ảnh</a></li>
                <li class="item"><a href="#">Tin Tức</a></li>
                <li class="item"><a href="#">Liên hệ</a></li>
                <li class="divine visible-sm visible-md visible-lg"></li>
                <li class="item languages">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/flag-vn.jpg"></a>
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/flag-us.jpg"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>