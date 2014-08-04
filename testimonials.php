<?php
/**
 *  Template Name: Testimonials
 *
 */
get_header() ?>


<div id="main" role="main" class="clearfix">

    	<div id="card"></div>


				<nav id="sub-nav" class="col12">
					<ul>
						<li><a href="http://www.heits-cnkd.com/franchise-testimonials/" title="Franchise Testimonials">Franchise Testimonials</a></li>
						<li><a href="http://www.heits-cnkd.com/testimonials/" title="Client Testimonials">Client Testimonials</a></li>
<li><a href="http://www.heits-cnkd.com/green-cleaning/why-choose-heits/" title="Why choose HEITS?">Why choose HEITS?</a></li>
					</ul>
				</nav>


		<div class="col8" id="left-col">
			<div class="pad">
				<h1>What people are saying about <strong>HEITS</strong></h1>
				<?php $custom_query = new WP_Query('post_type=testimonials&orderby=date');
				while($custom_query->have_posts()) : $custom_query->the_post();

				if (get_post_meta($post->ID, 'wpcf-testimonial-type', true) == "3" && is_page(16)) { ?>


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
					} ?>

				</div>
				</div>

		<?php } else if  (get_post_meta($post->ID, 'wpcf-testimonial-type', true) == "2" && is_page( 287 )) { ?>

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
					}  ?>


				</div>
				</div>


		<?php } else { ?>
		<?php } ?>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); // reset the query ?>
			</div>
		</div>

		<div class="col4" id="right-col">

			<div class="module">
				<h3><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Why choose HEITS?</a></h3>
				<ul>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Programs To Fit Any Business</a></li>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Green Cleaning - Eco-Friendly &amp; Healthy</a></li>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">100% Money Back Guarantee</a></li>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Locally Owned &amp; Operated</a></li>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Free On-Site Cleaning Estimates</a></li>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Monthly Agreements with No Termination Period</a></li>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Fully Insured and Bonded</a></li>
				</ul>
			</div>
<?php get_template_part('testimonial-single') ?>
		</div>

    </div>


<?php get_footer(); ?>
