<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/23/16
 * Time: 4:36 PM
 */
$listCategoryOfPost = get_the_category();
$categoryDetails = get_category($cat, array());
$categoryLink = get_category_link($categoryDetails);
$lang = get_bloginfo("language");

switch($categoryDetails->cat_ID) {
    case 44:
        $thumb = '/assets/img/thumb-Casas-Patronales.png';
        break;
    case 46:
        $thumb = '/assets/img/thumb-paso-fino-white.png';
        break;
    case 48:
        $thumb = '/assets/img/thumb-san-marco-gran-reverva-white.png';
        break;
    case 50:
        $thumb = '/assets/img/thumb-producta-vignobles-white.png';
        break;
    case 52:
        $thumb = '/assets/img/thumb-sovex-grands-chateaux-white.png';
        break;
    case 54:
        $thumb = '/assets/img/thumb-travaglini-white.png';
        break;
    case 56:
        $thumb = '/assets/img/thumb-felix-solis-white.png';
        break;
    default:
        $thumb = '/assets/img/thumb-Casas-Patronales-white.png';
        break;
};

$is_casas_patronal_page = $cat == 44;

get_header(); ?>

<div id="product-list" class="container-responsive">
    <div class="container">
        <div class="col-xs-12">
            <div class="breadcrumb no-margin">
                <div class="thumb"><img
                        src="<?=bloginfo( 'template_url' ).$thumb?>"></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><span>SẢN PHẨM</span></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span><?= $categoryDetails->name ?></span></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>

        <?php
        if ($is_casas_patronal_page) {
            require('category-casa-patronal.content.php');
        } else {
            require('category.content.php');
        } ?>
    </div>
</div>
<?php get_footer(); ?>
