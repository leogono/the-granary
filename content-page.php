<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package The Granary
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	
	
	<div class="entry-content <?php echo (has_post_thumbnail() ? 'with-thumb' : ''); ?>">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<?php if( has_post_thumbnail() ) {
		?>
		<div class="thumbnail-wrap">
			<?php echo the_post_thumbnail('page-thumb'); ?>
		</div>
		<?php
	} ?>
</article><!-- #post-## -->
