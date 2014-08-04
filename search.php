<?php
/**
 * The template for displaying Search Results pages.
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
<?php if ( have_posts() ) : ?>
				<h1><?php printf( __( 'Search Results for: %s', 'boilerplate' ), '' . get_search_query() . '' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
					<h2><?php _e( 'Nothing Found', 'boilerplate' ); ?></h2>
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'boilerplate' ); ?></p>
					<?php get_search_form(); ?>
<?php endif; ?>
			</div>
		</div>

		<div class="col4" id="right-col">
			<div class="module-blog">
				<?php get_sidebar(); ?>
			</div>
			<div class="testimonial">
				<p>With a high level of professionalism, customized options and personalized plans to fit every need and budget, HEITS is the leader in professional commercial maintenance services.</p>
				<div class="testimonial-author">Bill Guy, <a href="#">Company</a></div>
			</div>
		</div>

    </div>
<?php get_footer(); ?>
