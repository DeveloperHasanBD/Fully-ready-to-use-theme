<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
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

<!-- strat single product top area  -->
<div class="single_product_top_area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
				<div class="single_product_top_left">
					<div class="sp_model_name">
						<?php
						$sptinfo_model_name = get_field('sptinfo_model_name');
						$sptinfo_title = get_field('sptinfo_title');
						$sptinfo_description = get_field('sptinfo_description');
						if ($sptinfo_model_name) {
						?>
							<p><?php echo $sptinfo_model_name; ?></p>
						<?php
						}
						if ($sptinfo_title) {
						?>
							<h2><?php echo $sptinfo_title; ?></h2>
						<?php
						}

						?>
					</div>
					<div class="sp_description">
						<div class="sp_desc_top">
							<ul>
								<li><span><img src="<?php echo get_template_directory_uri(); ?>/urban-assets/images/product/single-pro/1.png" alt=""></span></li>
								<li><span>Dettagli</span></li>
							</ul>
						</div>
						<?php
						if ($sptinfo_description) {
							echo $sptinfo_description;
						}
						?>

					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 single_pro_img_pos">
				<div class="single_product_top_right">
					<div class="sp_product_img">
						<?php
						/**
						 * Hook: woocommerce_before_single_product_summary.
						 *
						 * @hooked woocommerce_show_product_sale_flash - 10
						 * @hooked woocommerce_show_product_images - 20
						 */
						do_action('woocommerce_before_single_product_summary');
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end single product top area  -->

<!-- start single pproduct technical info  -->
<div class="sp_technical_info">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<div class="sp_technical_top_info">
					<div class="sp_desc_top">
						<ul>
							<li><span><img src="<?php echo get_template_directory_uri(); ?>/urban-assets/images/product/single-pro/4.png" alt=""></span></li>
							<li><span>Caratteristiche Tecniche</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="colsm-12 col-md-12 col-lg-6 col-xl-6">
				<div class="sp_technical_left_info">
					<?php
					// Check rows exists.
					if (have_rows('splf_left_features')) {
						// Loop through rows.
						while (have_rows('splf_left_features')) : the_row();

							// Load sub field value.
							$splf_left_item = get_sub_field('splf_left_item');
							if ($splf_left_item) {
					?>
								<ul>
									<li><span>-</span></li>
									<li>

										<p><?php echo $splf_left_item ?></p>
									</li>
								</ul>
					<?php
							}
						// Do something...

						// End loop.
						endwhile;
					}
					?>

				</div>
			</div>
			<div class="colsm-12 col-md-12 col-lg-6 col-xl-6">
				<div class="sp_technical_left_info">
					<?php
					// Check rows exists.
					if (have_rows('splf_right_features')) {
						// Loop through rows.
						while (have_rows('splf_right_features')) : the_row();

							// Load sub field value.
							$splf_right_item = get_sub_field('splf_right_item');
							if ($splf_right_item) {
					?>
								<ul>
									<li><span>-</span></li>
									<li>

										<p><?php echo $splf_right_item ?></p>
									</li>
								</ul>
					<?php
							}
						// Do something...

						// End loop.
						endwhile;
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end single pproduct technical info  -->

<!-- start single product specific info  -->
<div class="sinlge_product_specific_data_table">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<div class="sp_technical_top_info">
					<div class="sp_desc_top">
						<ul>
							<li><span><img src="<?php echo get_template_directory_uri(); ?>/urban-assets/images/product/single-pro/5.png" alt=""></span></li>
							<li><span>Dati Tecnici</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="sinlge_product_specific_table">
					<table class="table">
						<thead>
							<tr>
								<th>
									<div class="info_title"><span> DESCRIZIONE </span></div>
								</th>
								<th>
									<div class="info_title"><span> Unità di misura </span></div>
								</th>
								<th>
									<div class="info_title"><span> HPL400 </span></div>
								</th>
								<th>
									<div class="info_title"><span> HPL800 </span></div>
								</th>
							</tr>
						</thead>
						<tbody>

							<?php
							// Check rows exists.
							if (have_rows('sptd_table_data')) {
								// Loop through rows.
								while (have_rows('sptd_table_data')) : the_row();

									// Load sub field value.
									$sptd_col_one = get_sub_field('sptd_col_one');
									$sptd_col_two = get_sub_field('sptd_col_two');
									$sptd_col_three = get_sub_field('sptd_col_three');
									$sptd_col_four = get_sub_field('sptd_col_four');

							?>
									<tr>
										<td>
											<?php
											if ($sptd_col_one) {
											?>
												<p><?php echo $sptd_col_one; ?></p>
											<?php
											}
											?>

										</td>
										<td>
											<?php
											if ($sptd_col_two) {
											?>
												<p><?php echo $sptd_col_two; ?></p>
											<?php
											}
											?>
										</td>
										<td>
											<?php
											if ($sptd_col_three) {
											?>
												<p><?php echo $sptd_col_three; ?></p>
											<?php
											}
											?>
										</td>
										<td>
											<?php
											if ($sptd_col_four) {
											?>
												<p><?php echo $sptd_col_four; ?></p>
											<?php
											}
											?>
										</td>
									</tr>
							<?php
								// Do something...

								// End loop.
								endwhile;
							}
							?>


						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="sp_technical_top_info">

					<div class="sp_desc_top">

						<ul>
							<li><span><img src="<?php echo get_template_directory_uri(); ?>/urban-assets/images/product/single-pro/6.png" alt=""></span></li>
							<li><span>Download</span></li>
						</ul>

					</div>

				</div>
				<div class="sp_technical_top_info">

					<div class="sp_desc_top">

						<ul>
							<li><span><img src="<?php echo get_template_directory_uri(); ?>/urban-assets/images/product/single-pro/13.png" alt=""></span></li>
							<li><span>Condividi</span></li>
						</ul>

					</div>
					<div class="dkr_single_pro_social_share">
						<?php echo do_shortcode('[Sassy_Social_Share]'); ?>
					</div>
				</div>
				<div class="sp_technical_download_info">

					<?php
					// Check rows exists.
					if (have_rows('spdpdf_upload_pdf')) {
						// Loop through rows.
						while (have_rows('spdpdf_upload_pdf')) : the_row();

							// Load sub field value.
							$spdpdf_pdf_file = get_sub_field('spdpdf_pdf_file');
							$file_name = explode('/', $spdpdf_pdf_file);
							$get_final_name = end($file_name);
							$get_final_pdf_name = explode('.', $get_final_name);
							// echo $get_final_pdf_name[0];

							if ($spdpdf_pdf_file) {
					?>
								<a target="_blank" href="<?php echo $spdpdf_pdf_file; ?>">
									<ul>
										<li><span><img src="<?php echo get_template_directory_uri(); ?>/urban-assets/images/product/single-pro/12.png" alt=""></span></li>
										<li><span>SCHEDA TECNICA</span></li>
									</ul>
								</a>
					<?php
							}
						// Do something...

						// End loop.
						endwhile;
					}
					?>



				</div>
			</div>
		</div>
	</div>
</div>
<!-- end single product specific info  -->



<!-- start home blog  -->
<div class="sp_related_product_slider">
	<div class="slider_arrow d-none">
		<img src="<?php echo get_template_directory_uri(); ?>/urban-assets/images/home/slider-arrow.png" alt="">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<div class="sp_technical_top_info">
					<div class="sp_desc_top">
						<ul>
							<li><span><img src="<?php echo get_template_directory_uri(); ?>/urban-assets/images/product/single-pro/7.png" alt=""></span></li>
							<li><span>Prodotti Simili</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php
				/**
				 * Hook: woocommerce_after_single_product_summary.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				do_action('woocommerce_after_single_product_summary');
				?>

			</div>
		</div>
	</div>
</div>
<!-- end home blog  -->