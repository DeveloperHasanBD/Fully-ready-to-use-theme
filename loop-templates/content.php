<?php

/**
 * Post rendering content according to caller of get_template_part
 *
 * @package urban
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
	<div class="r_news_post_list">
		<div class="r_news_post_image">
			<?php
			if (has_post_thumbnail()) {
				$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
			?>
				<a class="r_news_feature_post_link" href="<?php the_permalink(); ?>"><img src="<?php echo $large_image_url[0]; ?>" /></a>
			<?php } else { ?>
				<a class="r_news_feature_post_link" href="<?php the_permalink(); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2022/03/features.png"></a>
			<?php } ?>
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