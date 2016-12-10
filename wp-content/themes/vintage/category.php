<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/23/16
 * Time: 4:36 PM
 */
$listCategoryOfPost = get_the_category();
get_header(); ?>

<div id="product-list" class="container-responsive">
    <div class="container">
        <div class="col-xs-12">
            <div class="breadcrumb no-margin">
                <ul class="list-inline">
                    <li class="list-inline-item"><span>SẢN PHẨM</span></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span><?=$listCategoryOfPost[0]->name?></span></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <?php
        foreach ($listCategoryOfPost as $categoryOfPost) {
            $agrCategory = array('category' => $categoryOfPost->cat_ID, 'posts_per_page' => -1, 'numberposts' => -1);
            $postsCategory = get_posts($agrCategory);
            foreach ($postsCategory as $post) {
                setup_postdata($post);
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb_url = $thumb_url_array[0]; ?>
                <div class="col-sm-12 col-md-6">
                    <div class="item-inner">
                        <div class="pic"><img src="<?php echo $thumb_url; ?>"></div>
                        <div class="info">
                            <div class="title">
                                <a href="<?php echo esc_url(get_permalink()); ?>">
                                    <?php the_title() ?>
                                </a>
                            </div>
                            <div class="description">
                                <?php the_excerpt() ?>
                            </div>
                            <div class="price">
                                <?php echo get_post_meta(get_the_ID(), 'price', TRUE);;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } ?>
    </div>
</div>
<?php get_footer(); ?>
