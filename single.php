<?php
/**
 * The template for displaying all single posts
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

						<article class="row post">
							<div class="col-sm-12">
								<h1 class="entry-title"><?php the_title(); ?></h1>
								<p class="entry-meta"><?php whispa_entry_meta(); ?></p>
								<?php the_post_thumbnail(); ?>
								<?php the_content(); ?>
							</div>
						</article>
						<?php whispa_post_nav(); ?>
						<?php comments_template(); ?>

					<?php endwhile; ?>

					</div>
				</article>
			</div>
			<?php get_sidebar(); ?>

		</div>
	</div>
	
<?php get_footer(); ?>
