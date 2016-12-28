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

$cate_id = $categoryDetails->cat_ID;
if ($cate_id == 44 || $cate_id == 15) {
    $thumb = '/assets/img/thumb-Casas-Patronales.png';
} elseif ($cate_id == 46 || $cate_id == 39) {
    $thumb = '/assets/img/thumb-paso-fino-white.png';
} elseif ($cate_id == 48 || $cate_id == 35) {
    $thumb = '/assets/img/thumb-san-marco-gran-reverva-white.png';
} elseif ($cate_id == 50 || $cate_id == 27) {
    $thumb = '/assets/img/thumb-producta-vignobles-white.png';
} elseif ($cate_id == 52 || $cate_id == 31) {
    $thumb = '/assets/img/thumb-sovex-grands-chateaux-white.png';
} elseif ($cate_id == 54 || $cate_id == 19) {
    $thumb = '/assets/img/thumb-travaglini-white.png';
} elseif ($cate_id == 56 || $cate_id == 17) {
    $thumb = '/assets/img/thumb-felix-solis-white.png';
}

$is_casas_patronal_page = $cat == 44 || $cat == 15;

get_header(); ?>

<div id="product-list" class="container-responsive">
    <div class="container">
        <div class="col-xs-12">
            <div class="breadcrumb no-margin">
                <div class="thumb"><img
                        src="<?=bloginfo( 'template_url' ).$thumb?>"></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><span><?=($lang == 'vi' ? 'SẢN PHẨM' :'PRODUCTS')?></span></li>
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
