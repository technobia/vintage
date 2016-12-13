<?php
$currentPostId = get_the_ID();
$currentContent = get_the_content();
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
$listCategoryOfPost = get_the_category();
?>
<div id="product-detail" class="container-responsive">
    <div class="product-detail-inner" style="padding-bottom: 0;">
        <div class="col-xs-12 no-padding">
            <div class="breadcrumb no-margin">
                <ul class="list-inline">
                    <li class="list-inline-item"><span>SẢN PHẨM</span></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span><?=$listCategoryOfPost[0]->name?></span></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span><?=the_title()?></span></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="product-detail-inner">
        <div class="product-detail">
            <h1 class="title"><?php the_title() ?></h1>
            <div class="clearfix"></div>
            <div class="content">
                <div class="description">
                    <?php echo $currentContent; ?>
                </div>
                <div class="image">
                    <img src="<?php echo $thumb_url; ?>" data-action="zoom">
                </div>
            </div>

            <!--<h1 class="title">Reserva Privada</h1>
            <ul class="list-inline no-margin list-child">
                <li class="active"><a href="#">Cabernet Sauvignon</a></li>
                <li><a href="#">Carménère</a></li>
                <li><a href="#">Syrah</a></li>
                <li><a href="#">Pinot Noir</a></li>
                <li><a href="#">Chardonnay</a></li>
                <li><a href="#">Sauvignon Blanc</a></li>
            </ul>
            <div class="clearfix"></div>
            <div class="content">
                <div class="description">
                    <p>These are complex wines, in which fruity notes combine with smoked and Sweetness of tones resulting from the wine's fine evolution in French oak. In the mouth they are soft, elegant, concentrated and fresh. The expression of our terroirs finds its greatest potential in the Reserva Privada wines.</p>
                    <p>Cellaring Recommendations: 5 to 6 years</p>
                    <p>Time in barrels: 10 to 12 months</p>
                    <p>Tonnes per hectare: 6 to 8 tonnes per hectare.</p>
                    <p>Serving recommendation: 18°C</p>
                </div>
                <div class="image">
                    <img src="<?php /*bloginfo( 'template_url' ); */ ?>/assets/img/NequeV.png">
                </div>
            </div>-->
        </div>
    </div>
</div>