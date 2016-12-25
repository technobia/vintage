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
            $result[$item->object_id] = $item->url;
        }

        $casaspatronales = $isVietnam ? $result[44] : $result[15];
        $felixsolis = $isVietnam ? $result[56] : $result[17];
        $travalini = $isVietnam ? $result[54] : $result[19];
        $producta = $isVietnam ? $result[50] : $result[27];
        $sovex = $isVietnam ? $result[52] : $result[31];
        $sand_marco = $isVietnam ? $result[48] : $result[35];
        $paso_fino = $isVietnam ? $result[46] : $result[39];
        ?>
    </div>
    <div id="footer">
        <div class="main-brands">
            <div id="brands-slide">
                <div class="slideMain">
                    <ul class="no-margin slide1">
                        <li>
                            <a href="<?=$casaspatronales?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-1-casas-patronales.jpg"></a>
                        </li>
                        <li>
                            <a href="<?=$felixsolis?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-2-felix-solis.jpg"></a>
                        </li>
                        <li>
                            <a href="<?=$travalini?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-4-travaglini.jpg"></a>
                        </li>
                        <li>
                            <a href="<?=$producta?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-3-producta-vignobles.jpg"></a>
                        </li>
                        <li>
                            <a href="<?=$sovex?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-5-sovex-grands-chateaux.jpg"></a>
                        </li>
                        <li>
                            <a href="<?=$sand_marco?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-6-san-marco-gran-reserva.jpg"></a>
                        </li>
                        <li>
                            <a href="<?=$sand_marco?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-7-san-marco-reverva-especial.jpg"></a>
                        </li>
                        <li>
                            <a href="<?=$paso_fino?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-8-paso-fino.jpg"></a>
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