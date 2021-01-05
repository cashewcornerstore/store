<?php
$type = apply_filters( 'aora_woo_config_product_layout', 10,2 );            
$inner = 'inner-'.$type;
$product_item = isset($product_item) ? $product_item : $inner;

$show_des 		= isset($show_des) ? $show_des : false;
$countdown 		= isset($countdown) ? $countdown : false;
$flash_sales 	= isset($flash_sales) ? $flash_sales : false;
$end_date 		= isset($end_date) ? $end_date : '';

$countdown_title 		= isset($countdown_title) ? $countdown_title : '';

$screen_desktop          	=      isset($screen_desktop) ? $screen_desktop : 4;
$screen_desktopsmall     	=      isset($screen_desktopsmall) ? $screen_desktopsmall : 3;
$screen_tablet           	=      isset($screen_tablet) ? $screen_tablet : 3;
$screen_landscape_mobile    =      isset($screen_landscape_mobile) ? $screen_landscape_mobile : 2;
$screen_mobile           	=      isset($screen_mobile) ? $screen_mobile : 1;

$count = 0;
 

$data_responsive  = aora_tbay_check_data_responsive_grid($columns, $screen_desktop, $screen_desktopsmall, $screen_tablet, $screen_landscape_mobile, $screen_mobile);

$class_columns = ($columns <= 1) ? 'w-products-list' : 'products products-grid';
?>
<div class="<?php echo esc_attr( $class_columns ); ?> ">
	<div class="row <?php echo esc_attr($layout_type); ?>" <?php echo trim($data_responsive); ?>>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

			<?php wc_get_template( 'content-products.php', array('show_des' => $show_des,'countdown' => $countdown, 'countdown_title' => $countdown_title, 'flash_sales' => $flash_sales, 'end_date' => $end_date, 'layout_type' => $layout_type, 'product_item' => $product_item,'screen_desktop' => $screen_desktop,'screen_desktopsmall' => $screen_desktopsmall,'screen_tablet' => $screen_tablet,'screen_mobile' => $screen_mobile) ); ?>

			<?php $count++; ?>

		<?php endwhile; ?>
	</div>
</div>

<?php wp_reset_postdata(); ?>