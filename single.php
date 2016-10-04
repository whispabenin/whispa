<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @since WHISPA 0.1
 */

get_header(); ?>

	<div class="row">
		<div id="primary" class="container">
			<div class="site-content col-sm-8">

					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<article class="row post content">
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

 
      <div class="profil">
        <h4>A propos de l'auteur:</h4>
        <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
        <?php echo substr( get_the_author_meta('user_description') , 0 , 230 ); ?>
        <br>
        <a class="entry-title" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">En savoir plus...</a>
      </div>   


			</div>
			<?php get_sidebar(); ?>

		</div>
	</div>

<?php get_footer(); ?>
