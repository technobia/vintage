<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/23/16
 * Time: 4:36 PM
 */

get_header(); ?>
<div id="product-list" class="container-responsive">
	<div class="container">
		<?php
		for ($i = 1; $i <= 6; $i++) {
		?>
			<div class="col-sm-6">
				<div class="item-inner">
					<div class="pic"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/NequeV.png"></div>
					<div class="info">
						<div class="title">Cabernet</div>
						<div class="description">
							This Reserva wine is red with violet notes. Its earthy bouquet is complemented by fresh fruit, black cherries, spices and tobacco. On the palate, the wine is smooth and fresh with prunes and black pepper and robust, silky tannins.
						</div>
						<div class="price">
							$10.99
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>