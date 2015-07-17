<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @since WHISPA 0.1
 */

get_header(); ?>

	<div class="container">
		<div id="primary" class="row">
			<div class="site-content col-sm-8">
				<article class="row post">
					<div class="col-sm-12">

					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
								<div class="entry-thumbnail">
									<?php the_post_thumbnail(); ?>
								</div>
								<?php endif; ?>

								<h1 class="entry-title"><?php the_title(); ?></h1>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'whispa' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
							</div><!-- .entry-content -->

							<footer class="entry-meta">
								<?php edit_post_link( __( 'Edit', 'whispa' ), '<span class="edit-link">', '</span>' ); ?>
							</footer><!-- .entry-meta -->
						</article><!-- #post -->

						<?php comments_template(); ?>
					<?php endwhile; ?>

					</div>
				</article>
			</div>
			<?php get_sidebar(); ?>

		</div>
	</div>
	
<?php get_footer(); ?>