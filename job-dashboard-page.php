<?php
/**
 * Template Name: Job Dashboard
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
<div id="card"></div>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>
				<?php if ( is_user_logged_in() ) { echo '<p><a href="/job-dashboard/">Back to all jobs</a></p>'; } ?>
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'boilerplate' ), 'after' => '' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'boilerplate' ), '', '' ); ?>

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
