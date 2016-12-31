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
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/scripts/jquery.min.1.9.1.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/scripts/bootstrap.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/scripts/jquery.rotate.min.js"></script>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/magnify-master/Event.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/magnify-master/Magnifier.js"></script>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/prettyPhoto_compressed_3.1.6/js/jquery.prettyPhoto.js"></script>
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
                <li class="item"><a href="<?= get_home_url() ?>"><?php echo ($lang == 'vi' ? 'TRANG CHỦ' :'HOMEPAGE'); ?></a></li>
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
                <li class="item social-list">
                    <a href="https://www.facebook.com/Công-ty-Nhập-Khẩu-Phân-Phối-Rượu-Vang-Vintage-305633576499335/"><i class="fa fa-facebook-square"></i></a>
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>