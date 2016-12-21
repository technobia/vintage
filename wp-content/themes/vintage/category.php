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
        $agrCategory = array(
            'category' => $cat,
            'posts_per_page' => -1,
            'meta_key' => 'price',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
        );
        $postsCategory = get_posts($agrCategory);
        $no_rotate = [285, 248, 288, 320, 316, 313, 309, 305];

        foreach ($postsCategory as $post) {
            setup_postdata($post);
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
            $no_rotate_class = '';
            if (in_array($post->ID, $no_rotate)) { $no_rotate_class = 'no-rotate'; }
            ?>
            <div class="col-sm-12 col-md-6">
                <div class="item-inner">
                    <div class="pic"><img src="<?=$thumb_url?>" class="<?=$no_rotate_class?>"></div>
                    <div class="info">
                        <div class="title">
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <?php the_title() ?>
                            </a>
                        </div>
                        <div class="description">
                            <?php the_excerpt() ?>
                        </div>
                        <div class="price hidden">
                            <?php
                            $number = number_format(get_post_meta(get_the_ID(), 'price', TRUE));
                            $currency = get_post_meta(get_the_ID(), 'currency', TRUE);
                            echo $number.' '.$currency;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } ?>
    </div>
</div>
<?php get_footer(); ?>
