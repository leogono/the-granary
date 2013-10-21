<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package The Granary
 */
?>
<?php

//Variables

$footerText = get_field('footer_text', 'option');
$facebookUrl = get_field('facebook_url', 'option');
$twitterUrl = get_field('twitter_url', 'option');
$linkedinUrl = get_field('linkedin_url', 'option');

?>
	
</div><!--  #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer-widget" class="widget-area clearfix" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-4' ) ) ; ?>
		</div><!-- #footer-widget -->
		<div id="footer-text">
			<?php if($footerText) {
				echo $footerText;
			}
			else {
				echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Vestibulum consequat, orci ac laoreet cursus, dolor sem luctus lorem, eget consequat magna felis a magna. Aliquam scelerisque condimentum ante, eget facilisis tortor lobortis in. In interdum venenatis justo eget consequat. Morbi commodo rhoncus mi nec pharetra.';
			} ?>
			
		</div>
		<ul id="social-media">
			<?php if($facebookUrl) {
				echo '<li class="facebook"><a href="'.$facebookUrl.'">Facebook</a></li>';
			} ?>
			<?php if($twitterUrl) {
				echo '<li class="twitter"><a href="'.$twitterUrl.'">Twitter</a></li>';
			} ?>
			<?php if($linkedinUrl) {
				echo '<li class="linkedin"><a href="'.$linkedinUrl.'">LinkedIn</a></li>';
			} ?>
		</ul>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>