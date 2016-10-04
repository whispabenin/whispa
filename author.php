<?php
/**
 * The template for displaying authors pages
 *
 * @package WordPress
 * @since WHISPA 0.1
 */

get_header(); ?>

	<div class="row" id="author">
		<div id="primary" class="container">
			<div class="site-content col-sm-8">

				<!-- This sets the $curauth variable -->
				<?php
					$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
				?>

				<h2>A propos de: <?php echo $curauth->nickname; ?></h2>

                                <?php echo get_avatar( $curauth->user_email ); ?>

				
				<?php echo $curauth->user_description; ?>
			</div>


						<?php if ( have_posts() ) : ?>
				<div class="col-sm-offset-1 col-sm-3">
					<h4>Les articles de <?php echo $curauth->nickname; ?>:</h4>
					<ul>
						<?php while (have_posts()) : the_post(); ?>
							<li><a class="entry-title" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
						<?php endwhile; wp_reset_query(); ?>
					</ul>
					<?php whispa_paging_nav(); ?>
				</div>

			<?php else : get_sidebar(); ?>

			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>