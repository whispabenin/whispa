<?php
/**
 * The content page template file
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since Whispa 1.0
 *
 * Template Name: blog
 */


get_header(); ?>

<!---contenu de cours-->
  <div class="container">
    <div id="primary" class="row">
      <div class="site-content col-sm-8">

    <?php if ( have_posts() ) : ?>

      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>

      <?php whispa_paging_nav(); ?>

    <?php else : ?>
      <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>

    </div>
      <?php get_sidebar(); ?>
    </div>
  </div>

<?php get_footer(); ?>