<?php
/**
 * The Template for displaying all single posts.
 *
 * @package The Granary
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_granary_content_nav( 'nav-below' ); ?>

			<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
			} ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>