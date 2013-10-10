<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package The Granary
 */
?>

	
</div><!--  #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer-widget" class="widget-area clearfix" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-4' ) ) ; ?>
		</div><!-- #footer-widget -->
		<p id="footer-text">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Vestibulum consequat, orci ac laoreet cursus, dolor sem luctus lorem,
			eget consequat magna felis a magna. Aliquam scelerisque condimentum ante, 
			eget facilisis tortor lobortis in. In interdum venenatis justo eget consequat.
			Morbi commodo rhoncus mi nec pharetra. Aliquam erat
		</p>
		<ul id="social-media">
			<li class="facebook"><a href="#">facebook</a></li>
			<li class="tumbler"><a href="#">tumbler</a></li>
			<li class="instagram"><a href="#">instagram</a></li>
		</ul>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>