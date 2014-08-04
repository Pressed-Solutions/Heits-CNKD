<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
<div id="main" role="main" class="clearfix">

    	<div id="card"></div>


		<div class="col8" id="left-col">
			<div class="pad">
			<article id="post-0" class="post error404 not-found" role="main">
				<h1><?php _e( 'Not Found', 'boilerplate' ); ?></h1>
				<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'boilerplate' ); ?></p>
				<?php get_search_form(); ?>
				<script>
					// focus on search field after it has loaded
					document.getElementById('s') && document.getElementById('s').focus();
				</script>
			</article>
	</div>
</div>
<div class="col4" id="right-col">
			<div class="module-blog">
				<?php get_sidebar(); ?>
			</div>
			<?php get_template_part('testimonial-single') ?>
		</div>

    </div>
<?php get_footer(); ?>
