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
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico"/>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/scripts/jquery.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/scripts/bootstrap.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/scripts/jquery.rotate.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/scripts/custom.js"></script>
</head>
<body>

<nav class="navbar navbar-default no-border no-margin">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="<?php echo get_home_url() ?>" class="navbar-brand">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-vintage.png">
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse">
        <div class="navbar-right no-margin">
            <?php
            //            wp_nav_menu(array('menu'=>'Vintage'));
            $lang = get_bloginfo("language");
            $menuName = $lang == 'vi' ? 'vintage-vi' : 'Vintage';
            $menuItems = wp_get_nav_menu_items($menuName, array('order' => 'DESC')); ?>
            <ul class="main-menu list-inline no-margin">
                <li class="item"><a href="<?= get_home_url() ?>"><?php echo ($lang == 'vi' ? 'TRANG CHỦ' :'HOMGEPAGE'); ?></a></li>
                <?php
                $count = 0;
                $submenu = false;
                foreach ($menuItems as $key => $item):
                    $link = $item->url;
                    $title = $item->title;
                    // item does not have a parent so menu_item_parent equals 0 (false)
                    if (!$item->menu_item_parent) {
                        // save this id for later comparison with sub-menu items
                        $parent_id = $item->ID;
                        if ($menuItems[$key + 1] && $menuItems[$key + 1]->menu_item_parent == $parent_id) { ?>
                            <li class="item dropdown">
                            <a href="<?php echo $link; ?>" data-toggle="dropdown"><?=$title?> <i
                                    class="fa fa-angle-down"></i></a>
                            <?php
                        } else {
                            ?>
                            <li class="item">
                            <a href="<?php echo $link; ?>" class="title">
                                <?php echo $title; ?>
                            </a>
                            <?php
                        }
                        ?>


                    <?php } ?>

                    <?php if ($parent_id == $item->menu_item_parent) { ?>

                    <?php
                        if (!$submenu) {
                            $submenu = true;
                    ?>
                        <ul class="list-unstyled dropdown-menu no-margin">
                    <?php } ?>
                    <li><a href="<?php echo $link; ?>"><i class="fa fa-angle-right"></i><?php echo $title; ?></a></li>

                    <?php if ($menuItems[$key + 1]->menu_item_parent != $parent_id && $submenu) { ?>
                        </ul>
                        <?php $submenu = false;
                    } ?>

                <?php } ?>

                    <?php if ($menuItems[$key + 1]->menu_item_parent != $parent_id) { ?>
                    </li>
                    <?php $submenu = false;
                } ?>

                    <?php $count++; endforeach; ?>
                <li class="divine visible-sm visible-md visible-lg"></li>
                <li class="item languages">
                    <a href="<?php echo get_site_url() . "/vi" ?>"><img
                            src="<?php bloginfo('template_url'); ?>/assets/img/flag-vn.jpg"></a>
                    <a href="<?php echo get_site_url() . "/en"?>"><img
                            src="<?php bloginfo('template_url'); ?>/assets/img/flag-us.jpg"></a>
                </li>
                <!--<ul id="flags">
                    <?php /*pll_the_languages(array('show_flags' => 1, 'show_names' => 0)); */ ?>
                </ul>-->
            </ul>

            <!--<ul class="main-menu list-inline no-margin">
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
                <li class="item"><a href="<?=get_page_link(15)?>">Liên hệ</a></li>
                <li class="divine visible-sm visible-md visible-lg"></li>
                <li class="item languages">
                    <a href="#"><img src="<?php /*bloginfo('template_url'); */?>/assets/img/flag-vn.jpg"></a>
                    <a href="#"><img src="<?php /*bloginfo('template_url'); */?>/assets/img/flag-us.jpg"></a>
                </li>
            </ul>-->
        </div>
    </div>
</nav>