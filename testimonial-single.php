

<?php
$x = 0;

 if (is_page( array( 30,32,14 ) )) {
 $testi_type="2";
 }else
 {
 $testi_type="3";
 }
$custom_query = new WP_Query('post_type=testimonials&orderby=rand');
				while($custom_query->have_posts()) : $custom_query->the_post();

				if (get_post_meta($post->ID, 'wpcf-testimonial-type', true) == $testi_type && ($x < 1) ) { ?>


				<div class="testimonial"><?php the_content(); ?>
				<div class="testimonial-author">- <?php echo get_post_meta($post->ID, 'wpcf-client', true) ?>
					<?php if (get_post_meta($post->ID, 'wpcf-client-company', true)) {
						if (get_post_meta($post->ID, 'wpcf-client-company-url', true)) {
							echo '<a href="' . get_post_meta($post->ID, 'wpcf-client-company-url', true) . '" title="' . get_post_meta($post->ID, 'wpcf-client-company', true) . ">";
						}
					 echo ', ' . get_post_meta($post->ID, 'wpcf-client-company', true);
					 	if (get_post_meta($post->ID, 'wpcf-client-company-url', true)) {
							echo '</a>';
						}

					}
					$x++; ?>

				</div>
				</div>

		<?php } ?>



<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
