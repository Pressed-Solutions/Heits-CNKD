<?php
/**
 *  Template Name: Slider
 *
 */
?>

<div class="slider-wrapper theme-default" style="position: relative;">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">

            <?php $custom_query = new WP_Query('post_type=slider-images'); // exclude category 9
				while($custom_query->have_posts()) : $custom_query->the_post(); ?>

			<?php if (get_post_meta($post->ID, 'wpcf-slider-image-link', true)) { ?>
			<a href="<?php echo get_post_meta($post->ID, 'wpcf-slider-image-link', true) ?>" alt="<?php the_title() ?>">
			<?php } ?>

			<img src="<?php echo get_post_meta($post->ID, 'wpcf-image', true) ?>" alt="<?php the_title() ?>" />

			<?php if (get_post_meta($post->ID, 'wpcf-slider-image-link', true)) { ?>
			</a>
			<?php } ?>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); // reset the query ?>

            </div>
            <div id="guarantee-badge">
				<a class="ir"href="about-us/100-percent-money-back-guarante/">100% Money Back Guarantee - Click to Learn More</a>
			</div>
        </div>
