<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since WHISPA 0.1
 */

get_header(); ?>

	<div class="container">
		<div id="primary" class="row">
			<div class="site-content col-sm-8">
				<div class="row">
					<div class="col-sm-12">

					<?php if ( have_posts() ) : ?>
						<header class="archive-header">
							<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'whispa' ), single_cat_title( '', false ) ); ?></h1>

							<?php if ( category_description() ) : // Show an optional category description ?>
							<div class="archive-meta"><?php echo category_description(); ?></div>
							<?php endif; ?>
						</header><!-- .archive-header -->

						<?php /* The loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endwhile; ?>

						<?php whispa_paging_nav(); ?>

					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>

					</div>
				</div>
			</div>
			<?php get_sidebar(); ?>

		</div>
	</div>
	
<?php get_footer(); ?>