<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package The Granary
 */
?>

	</div><!-- #content -->


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer-widget" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-4' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

		<?php endif; // end sidebar widget area ?>
		</div><!-- #footer-widget -->
		<div class="site-info">
			<?php do_action( 'the_granary_credits' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'the-granary' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'the-granary' ), 'The Granary', '<a href="http://leogono.com" rel="designer">Leo Gono</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>