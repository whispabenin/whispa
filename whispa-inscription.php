<?php
/**
 * The content page template file
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since Whispa 1.0
 *
 * Template Name: inscription
 */

get_header(); ?>

 <!--content-->
    <!--content-->
    <div class="container contact">
      <div class="row">

        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class("col-md-6 col-md-offset-3 col-xs-12"); ?>>
            <h1 class="text-center"><?php the_title(); ?></h1>

            <div class="entry-content">
              <?php the_content(); ?>
              <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'whispa' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
            </div><!-- .entry-content -->

            <footer class="entry-meta">
              <?php edit_post_link( __( 'Edit', 'whispa' ), '<span class="edit-link">', '</span>' ); ?>
            </footer><!-- .entry-meta -->
          </article><!-- #post -->

        <?php endwhile; ?>

        </div>
    </div>



<?php get_footer(); ?>
