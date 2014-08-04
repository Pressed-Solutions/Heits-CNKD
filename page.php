<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<div id="main" role="main" class="clearfix">

    	<div id="card"></div>

		<?php
			$parent = get_post($post->post_parent);
			if($parent->post_parent) {
				$children = wp_list_pages("title_li=&child_of=".$parent->post_parent."&echo=0&depth=1");
			} elseif ($post->post_parent) {
				$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&depth=1");
			} else {
				$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&depth=1");
			}
			if ($children) { ?>
				<nav id="sub-nav" class="col12">
					<ul>
					<?php echo $children; ?>
					</ul>
				</nav>
		<?php } ?>



		<?php if (is_page('home')) {
			get_template_part('slider');
    	 } ?>

		<div class="col8" id="left-col">
			<div class="pad">
				 <?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		</div>

		<div class="col4" id="right-col">


				<?php
				if($parent->post_parent) {
				  $children2 = wp_list_pages('title_li=&child_of='.$parent->ID.'&echo=0&depth=3');
				}
				  if ($children2) { ?>
			<div class="module">
				  	<h3>Services Offered</h3>
				  	<nav id="side-nav">
						<ul>
							<?php echo $children2; ?>
						</ul>
					</nav>
			</div>
				 <?php } ?>


			<?php if (is_page( array( 6, 18, 20, 26, 321, 1120 ) )) { ?>

					<div class="module">
				<h3><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Why choose HEITS?</a></h3>
				<ul>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Programs To Fit Any Business</a></li>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Green Cleaning - Eco-Friendly &amp; Healthy</a></li>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">100% Money Back Guarantee</a></li>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Locally Owned &amp; Operated</a></li>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Free On-Site Cleaning Estimates</a></li>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Monthly Agreements with No Termination Period</a></li>
					<li><a href="http://www.heits-cnkd.com/commercial-cleaning/why-choose-heits/">Fully Insured and Bonded</a></li>				</ul>
		  </div>

			<?php } else { ?>

			<div class="module blue">
				<?php get_template_part('requestaquote') ?>
			</div>

			<?php } ?>

			<?php get_template_part('testimonial-single'); ?>


		</div>

    </div>


<?php get_footer(); ?>
