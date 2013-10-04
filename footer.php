<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package The Granary
 */
?>

	


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer-widget" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-4' ) ) : ?>

			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footerwidget1.jpg" width="301px" height="119px" />
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footerwidget2.jpg" width="301px" height="119px" />
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footerwidget3.jpg" width="301px" height="119px" />

		<?php endif; // end sidebar widget area ?>
		</div><!-- #footer-widget -->
		<p id="footer-text">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Vestibulum consequat, orci ac laoreet cursus, dolor sem luctus lorem,
				 eget consequat magna felis a magna. Aliquam scelerisque condimentum ante, 
				 eget facilisis tortor lobortis in. In interdum venenatis justo eget consequat.
				  Morbi commodo rhoncus mi nec pharetra. Aliquam erat
				</p>
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