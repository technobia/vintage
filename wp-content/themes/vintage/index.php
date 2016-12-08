<?php get_header(); ?>
<div id="wrapper">
    <div class="container-responsive">
        <?php
        $lang = get_bloginfo("language");
        $menuName = $lang == 'vi' ? 'vintage-vi' : 'Vintage';
        $isVietnam = $lang == 'vi';
        $list = wp_get_nav_menu_items($menuName, array('order' => 'DESC'));
        $result = array();
        foreach ($list as $item) {
            $result[$item->ID] = $item->url;
        }
//        echo "<pre>";
//        print_r($result);
//        echo "</pre>";
        $casaspatronales = $isVietnam ? $result[68] : $result[37];
        $felixsolis = $isVietnam ? $result[69] : $result[43];
        ?>
    </div>
    <div id="footer">
        <div class="main-brands">
            <div id="brands-slide">
                <div class="slideMain">
                    <ul class="no-margin slide1">
                        <li>
                            <a href="<?=$casaspatronales?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-casas-patronales.jpg"></a>
                        </li>
                        <li>
                            <a href="<?=$felixsolis?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-felix-solis.jpg"></a>
                        </li>
                        <li>
                            <a href="<?=$pasofino?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-paso-fino.jpg"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-producta.jpg"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-san-marco.jpg"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-sovex-grandschateaux.jpg"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-travaglini-gattinara.jpg"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="address">
                <h1>MTV IMPORT EXPORT TRADING JOINT STOCK COMPANY</h1>
                <p>
                    <span>Hotline : 0903 91 95 81</span>
                    <span class="divine"></span>
                    <span>Wine Consultant : 0989 988 509 </span>
                </p>
                <p>Showroom: Vintage , 01 Thao Dien str., Dist. 2, HCMC</p>
                <p>
                    <span><i class="fa fa-globe"></i><a href="#">www.vintage.vn</a></span>
                    <span class="divine"></span>
                    <span><i class="fa fa-envelope-o"></i><a href="mailto:info@vintage.vn">info@vintage.vn</a> - <a
                            href="mailto:mtvwines@yahoo.com">hienmtv@gmail.com</a></span>
                </p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>