<?php

/**
 * The template for displaying all single posts
 *
 * @package urban
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<!-- Start urban News Pagination  -->
<div class="r_news_pagination">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="r_news_pagination_content">
					<div class="custom_breadcrumb_dgn">
						<?php
						if (function_exists('bcn_display')) {
							bcn_display();
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End urban News Pagination  -->
<?php
$backto_news_page = $_SERVER['HTTP_REFERER'];
?>
<!-- Start urban News Main Content  -->
<div class="r_news_main_content_area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="r_news_title_section">
					<a class="backtonews" href="<?php echo $backto_news_page; ?>"><span><i class="fas fa-chevron-left"></i></span> Torna a
						tutte le news</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="r_post_details_content_area">
					<div class="r_post_details_featured_image">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					</div>
					<div class="r_post_details_maincontent">
						<div class="r_news_post_meta">
							<span class="r_news_date"><?php echo get_the_date('d F, Y'); ?></span> / <span class="r_news_catlist"><a href="<?php the_permalink(); ?>">PRESS</a></span>
						</div>
						<h1 class="r_post_details_pagetitle"><?php the_title(); ?></h1>
						<div class="r_post_details_con">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="r_post_social_share_section">
					<div class="r_post_social_share">
						<strong>CONDIVIDI ARTICOLO</strong> <span><?php echo do_shortcode('[Sassy_Social_Share]') ?></span>
					</div>
				</div>
				<div class="r_post_contact_section">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-9">
							<div class="r_post_contact_title">
								<h3>Se vuoi approfondire il contenuto di questo articolo</h3>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="r_post_contact_btn">
								<?php
								$octgn_single_post_curl = get_theme_mod('octgn_single_post_curl');
								$site_url = site_url() . '/';
								?>
								<a href="<?php echo $site_url . $octgn_single_post_curl; ?>">CONTATTACI <span><i class="fas fa-chevron-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="r_post_details_related_post">
					<div class="row">
						<div class="col-12">
							<h3 class="r_post_details_related_title">ARTICOLI RECENTI</h3>
						</div>
						<?php
						$blog_post_query = new WP_Query([
							'post_type' => 'post',
							'posts_per_page' => 3
						]);
						if ($blog_post_query->have_posts()) {
							// Start the Loop.
							while ($blog_post_query->have_posts()) {
								$blog_post_query->the_post();

						?>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="r_news_post_list">
										<div class="r_news_post_image">
											<a class="r_news_feature_post_link" href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
										</div>
										<div class="r_news_post_main_content">
											<div class="r_news_post_content">
												<div class="r_news_post_meta">
													<span class="r_news_date"><?php echo get_the_date('d F, Y'); ?></span> / <span class="r_news_catlist"><a href="<?php the_permalink(); ?>">PRESS</a></span>
												</div>
												<h3 class="r_news_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
												<div class="r_news_post_excerpt">
													<p><?php echo wp_trim_words(get_the_content(), 10, true); ?></p>
												</div>
											</div>
											<div class="r_news_left_inner_btm inner_arrow_circle"><a href="<?php the_permalink(); ?>"><span>Leggi
														tutto</span> <span><i class="fas fa-chevron-right"></i></span></a>
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
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3">
				<div class="r_news_sidebar_section">
					<div class="r_news_sidebar_box">
						<h4 class="sidebar-title">Cerca nelle news</h4>
						<div class="r_news_sidebar_box_content r_news_sidebar_search">
							<?php get_search_form(); ?>
						</div>
					</div>
					<div class="r_news_sidebar_box">
						<h4 class="sidebar-title">Archivio news</h4>
						<div class="r_news_sidebar_box_content r_news_sidebar_archive">
							<ul>
								<?php wp_get_archives('Archivio News'); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End urban News Main Content  -->

<!-- start h_csm_profile_contact  -->
<div class="h_csm_profile_contact ash-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="h_csm_profile_contact_left">
					<h2>Form di <br>
						contatto</h2>
					<p>Sei interessato al nostro servizio? <br>
						Compila il form o contattaci al numero <br>
						<strong>+39 059 9770184</strong>
					</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-8">

				<?php
				if (get_theme_mod('octgn_mailto_display', true)) {
					$octgn_single_post_mail_to = get_theme_mod('octgn_single_post_mail_to');
					if ($octgn_single_post_mail_to) {
				?>
						<div class="h_csm_profile_contact_right">
							<div id="octgn_common_form_message"></div>
							<form id="octgn_common_form"  method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
								<div class="h_csm_contact_form_input">
									<div class="h_csm_contact_form_input_left">
										<label for="name" class="form-label">Nome*</label>
										<input name="name" type="text" class="form-control" id="name">
										<input type="hidden" name="action" value="octgn_common_form_action">
									</div>
									<div class="h_csm_contact_form_input_right">
										<label for="cognome" class="form-label">Cognome*</label>
										<input name="cognome" type="text" class="form-control" id="cognome">
										<input name="mail_to" type="hidden" value="<?php echo $octgn_single_post_mail_to; ?>">
									</div>
								</div>
								<!-- end item  -->
								<div class="h_csm_contact_form_input">
									<div class="h_csm_contact_form_input_left">
										<label for="ruolo" class="form-label">Ruolo</label>
										<input name="ruolo" type="text" class="form-control" id="ruolo">
									</div>
									<div class="h_csm_contact_form_input_right">
										<label for="azienda" class="form-label">Azienda</label>
										<input name="azienda" type="text" class="form-control" id="azienda">
									</div>
								</div>
								<!-- end item  -->

								<!-- end item  -->
								<div class="h_csm_contact_form_input">
									<div class="h_csm_contact_form_input_left">
										<label for="telefono" class="form-label">Telefono*</label>
										<input name="telefono" type="text" class="form-control" id="telefono">
									</div>
									<div class="h_csm_contact_form_input_right">
										<label for="email" class="form-label">E-mail*</label>
										<input name="email" type="email" class="form-control" id="email">
									</div>
								</div>
								<!-- end item  -->


								<!-- end item  -->
								<div class="h_csm_contact_form_input">
									<div class="h_csm_contact_form_input_right text_area">
										<label for="messaggio" class="form-label">Messaggio</label>
										<textarea name="messaggio" id="messaggio" class="form-control"></textarea>
									</div>

								</div>
								<!-- end item  -->

								<div class="h_csm_contact_form_radio_input lesr_border_top">
									<div class="profile_checkbox_list">
										<div class="h_csm_inp_left">
											<input  value="value_one"  name="voglio_ricevere" type="checkbox" class="form-check-input" id="voglio_ricevere">
										</div>
										<div class="h_csm_inp_right">
											<label class="form-check-label" for="voglio_ricevere">Voglio ricevere la vostra
												Newsletter</label>
										</div>
									</div>
									<div class="profile_checkbox_list">
										<div class="h_csm_inp_left">
											<input name="voglio_ricevere_two" type="checkbox" class="form-check-input" id="voglio_ricevere_two">
										</div>
										<div class="h_csm_inp_right">
											<label class="form-check-label" for="voglio_ricevere_two">Acconsento al
												trattamento dei
												dati personali secondo la normativa ….</label>
										</div>
									</div>
								</div>
								<div class="oct_submit_btn">
									<input class="btn btn-primary" type="submit" value="INVIA">
								</div>
							</form>
						</div>
				<?php
					}
				}
				?>



			</div>
		</div>
	</div>
</div>
<!-- start h_csm_company_profile_contact  -->

<?php
get_footer();
