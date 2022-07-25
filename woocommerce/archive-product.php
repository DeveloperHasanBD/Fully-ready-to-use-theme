<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');
if (get_theme_mod('dkr_woocommerce_display', true)) {
	$dkr_page_top_cat_url_one = get_theme_mod('dkr_page_top_cat_url_one');
	$dkr_page_top_cat_url_two = get_theme_mod('dkr_page_top_cat_url_two');
	$dkr_page_top_cat_url_three = get_theme_mod('dkr_page_top_cat_url_three');
	$dkr_page_top_cat_url_four = get_theme_mod('dkr_page_top_cat_url_four');



?>

	<!-- start product archive top section  -->
	<div class="pro_archive_top_menu">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="pat_menu">
						<ul>
							<?php

							$dkr_page_top_cat_name_one = get_theme_mod('dkr_page_top_cat_name_one');
							$dkr_page_top_cat_url_one = get_theme_mod('dkr_page_top_cat_url_one');

							$dkr_page_top_cat_name_two = get_theme_mod('dkr_page_top_cat_name_two');
							$dkr_page_top_cat_url_two = get_theme_mod('dkr_page_top_cat_url_two');

							$dkr_page_top_cat_name_three = get_theme_mod('dkr_page_top_cat_name_three');
							$dkr_page_top_cat_url_three = get_theme_mod('dkr_page_top_cat_url_three');

							$dkr_page_top_cat_name_four = get_theme_mod('dkr_page_top_cat_name_four');
							$dkr_page_top_cat_url_four = get_theme_mod('dkr_page_top_cat_url_four');

							if ($dkr_page_top_cat_name_one) {
							?>
								<li><a href="<?php echo $dkr_page_top_cat_url_one; ?>"><?php echo $dkr_page_top_cat_name_one; ?></a></li>
							<?php
							}

							if ($dkr_page_top_cat_name_two) {
							?>
								<li><a href="<?php echo $dkr_page_top_cat_url_two; ?>"><?php echo $dkr_page_top_cat_name_two; ?></a></li>
							<?php
							}

							if ($dkr_page_top_cat_name_three) {
							?>
								<li><a href="<?php echo $dkr_page_top_cat_url_three; ?>"><?php echo $dkr_page_top_cat_name_three; ?></a></li>
							<?php
							}

							if ($dkr_page_top_cat_name_four) {
							?>
								<li><a href="<?php echo $dkr_page_top_cat_url_four; ?>"><?php echo $dkr_page_top_cat_name_four; ?></a></li>
							<?php
							}

							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product archive top section  -->

<?php
}
?>


<!-- start product archive top content section  -->
<div class="pro_archive_top_content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2"></div>
			<div class="col-sm-12 col-md-10 col-lg-10 col-xl-10">
				<div class="pro_ar_top_content">
					<?php
					if (get_theme_mod('dkr_woocommerce_display', true)) {


						$dkr_page_top_title = get_theme_mod('dkr_page_top_title');
						$dkr_page_top_subtitle = get_theme_mod('dkr_page_top_subtitle');
						$dkr_page_top_description = get_theme_mod('dkr_page_top_description');


						if ($dkr_page_top_title) {
					?>
							<h2><?php echo $dkr_page_top_title; ?></h2>
						<?php
						}

						if ($dkr_page_top_subtitle) {
						?>
							<h3><?php echo $dkr_page_top_subtitle; ?></h3>
						<?php
						}
						if ($dkr_page_top_description) {
						?>
							<p><?php echo $dkr_page_top_description; ?></p>
					<?php
						}
					}

					?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end product archive top content section  -->
<div class="start_products_section">
	<div class="container-fluid">
		<?php
		if (woocommerce_product_loop()) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			do_action('woocommerce_before_shop_loop');

			woocommerce_product_loop_start();

			if (wc_get_loop_prop('total')) {
				while (have_posts()) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action('woocommerce_shop_loop');

					wc_get_template_part('content', 'product');
				}
			}

			woocommerce_product_loop_end();

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action('woocommerce_after_shop_loop');
		} else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action('woocommerce_no_products_found');
		}
		?>
	</div>
</div>
<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');
?>



<?php
get_footer('shop');
