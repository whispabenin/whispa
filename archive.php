<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, WHISPA
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
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
				<article class="row post">
					<div class="col-sm-12">

					<?php if ( have_posts() ) : ?>
						<header class="archive-header">
							<h1 class="archive-title"><?php
								if ( is_day() ) :
									printf( __( 'Daily Archives: %s', 'whispa' ), get_the_date() );
								elseif ( is_month() ) :
									printf( __( 'Monthly Archives: %s', 'whispa' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'whispa' ) ) );
								elseif ( is_year() ) :
									printf( __( 'Yearly Archives: %s', 'whispa' ), get_the_date( _x( 'Y', 'yearly archives date format', 'whispa' ) ) );
								else :
									_e( 'Archives', 'whispa' );
								endif;
							?></h1>
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
				</article>
			</div>
			<?php get_sidebar(); ?>

		</div>
	</div>
	
<?php get_footer(); ?>