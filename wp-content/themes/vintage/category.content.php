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