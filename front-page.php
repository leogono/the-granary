<?php get_header(); ?>

<div id="front-page-wrap" class="clearfix">
	<div id="primary" class="content-area">
		<div id="main" class="site-main clearfix" role="document">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'page' );
				?>

			<?php endwhile; ?>

			<?php the_granary_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- #main -->
	</div><!-- #primary -->

	<div id="home-top" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'home-top' ) ) ; ?>
	</div><!-- #home-top -->
</div>

<div id="home-mid" class="widget-area" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) ; ?>
</div><!-- #home-mid -->

<div id="home-slider" class="widget-area" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-3' ) ) ; ?>
</div><!-- #home-slider -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>