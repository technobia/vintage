<?php
$casas_patronal_page_one = [75, 79, 152, 157, 160, 169, 173, 179, 691, '|', 472, 505, 543, 545, 547, 549, 551, 689, 687];
$casas_patronal_page_two = [341, 344, 183, 349, 352, 357, 361, '|', 541, 539, 537, 535, 533, 528, 530];
$casas_patronal_page_three = [364, 368, 374, 377, 381, 385, 389, '|', 526, 524, 522, 518, 520, 516, 514];

$config = array(
    'category' => $cat,
    'posts_per_page' => -1,
    'meta_key' => 'price',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
);
$list_category = array();
foreach(get_posts($config) as $value) {
    $list_category[$value->ID] = $value;
}
?>

<div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="page_1">
        <?php
        foreach($list_category as $post) {
            if (in_array($post->ID, $casas_patronal_page_one)) {
                setup_postdata($post)
        ?>
        <div class="col-sm-12 col-md-6">
            <div class="item-inner">
                <div class="pic"><img src="<?=wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true)[0]?>"></div>
                <div class="info">
                    <div class="title">
                        <a href="<?php echo esc_url(get_permalink()); ?>">
                            <?php the_title() ?>
                        </a>
                    </div>
                    <div class="description">
                        <?php the_excerpt() ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>

    <div role="tabpanel" class="tab-pane" id="page_2">
        <?php
        foreach($list_category as $post) {
            if (in_array($post->ID, $casas_patronal_page_two)) {
                setup_postdata($post)
                ?>
                <div class="col-sm-12 col-md-6">
                    <div class="item-inner">
                        <div class="pic"><img src="<?=wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true)[0]?>"></div>
                        <div class="info">
                            <div class="title">
                                <a href="<?php echo esc_url(get_permalink()); ?>">
                                    <?php the_title() ?>
                                </a>
                            </div>
                            <div class="description">
                                <?php the_excerpt() ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <div role="tabpanel" class="tab-pane" id="page_3">
        <?php
        foreach($list_category as $post) {
            if (in_array($post->ID, $casas_patronal_page_three)) {
                setup_postdata($post)
                ?>
                <div class="col-sm-12 col-md-6">
                    <div class="item-inner">
                        <div class="pic"><img src="<?=wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true)[0]?>"></div>
                        <div class="info">
                            <div class="title">
                                <a href="<?php echo esc_url(get_permalink()); ?>">
                                    <?php the_title() ?>
                                </a>
                            </div>
                            <div class="description">
                                <?php the_excerpt() ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>

<div class="clearfix"></div>
<nav class="padding-15 text-center">
    <ul class="pagination">
        <li class="active"><a href="#page_1" data-toggle="tab">1</a></li>
        <li><a href="#page_2" data-toggle="tab">2</a></li>
        <li><a href="#page_3" data-toggle="tab">3</a></li>
    </ul>
</nav>
