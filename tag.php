<?php
/**
 * The template for displaying Tag Archive pages.
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
				<h1><?php
					printf( __( 'Tag Archives: %s', 'boilerplate' ), '' . single_tag_title( '', false ) . '' );
				?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>
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
