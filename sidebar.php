<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package The Granary
 */
?>
	<div id="home-top" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>


		<?php endif; // end sidebar widget area ?>
	</div><!-- #home-top -->

	</div><!-- #content -->

	<div id="home-mid" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #home-mid -->

	<div id="home-slider" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-3' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #home-slider -->