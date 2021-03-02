<?php
/**
 * @package Sydney
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('top-journal'); ?>>
	
	<?php do_action('sydney_inside_top_post'); ?>

	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'post_feat_image' ) != 1 ) ) : ?>
		<div class="my-entry-thumb">
			<?php the_post_thumbnail('large-thumb'); ?>
		</div>
	<?php endif; ?>

	<div class="my-entry-content" <?php sydney_do_schema( 'entry_content' ); ?>>
		<p><?php the_title(); ?></p>
		<div class="single-meta">
			<?php sydney_posted_on(); ?>
		</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php do_action('sydney_inside_bottom_post'); ?>

</article><!-- #post-## -->
