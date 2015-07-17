<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @since WHISPA 0.1
 */

$class = array(
	'row'
);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>
	<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
	<div class="entry-thumbnail col-sm-6">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php endif; ?>

	<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
	<div class="col-sm-6">
	<?php else : ?>
	<div class="col-sm-12">
	<?php endif; ?>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<p class="entry-meta"><?php whispa_entry_meta(); ?></p>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-meta">
			<?php if ( comments_open() && ! is_single() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'whispa' ) . '</span>', __( 'One comment so far', 'whispa' ), __( 'View all % comments', 'whispa' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
		</footer><!-- .entry-meta -->
	</div>
</article><!-- #post -->
