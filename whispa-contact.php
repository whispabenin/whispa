<?php
/**
 * The content page template file
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since Whispa 1.0
 *
 * Template Name: contact
 */

get_header(); ?>

    <!--content-->
    <div class="container contact">
      <div class="row">
        <div class="col-md-5">
          <h2 class="underlined">Nos Coordonnées</h2>
          <p>Etrilabs</p>
            <p>Rue 2348A Fidjrossè, Cotonou
            <br> (Rue en face de l’Eglise Catholique
            <br> St Francois D’Assise,
            <br> ensuite 4e rue à gauche)
          </p>
          <p><span>Téléphone</span>: +229 21-30-82-09</p>
          <p><span> BP</span>: 6498 Cotonou, Benin</p>
          <p><span>E-mail</span>: contact@whispa.org</p>
          <p><span>Website</span>: www.whispa.org</p>
        </div>
        <div class="col-md-7">
          <h2 class="underlined">Nous Contacter</h2>


          <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>">
              <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'whispa' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
              </div><!-- .entry-content -->

              <footer class="entry-meta">
                <?php edit_post_link( __( 'Edit', 'whispa' ), '<span class="edit-link">', '</span>' ); ?>
              </footer><!-- .entry-meta -->
            </article><!-- #post -->
        <?php endwhile; ?>

          <!--iframe src="" id="my_iframe" name="my_iframe"></iframe>
          <div class="row" id="info-envoi"></div>
          <form action="https://docs.google.com/forms/d/1Bo0Gbaa4lKh_ytG1ZQIxSzbdSZWCQ20htZQ2dARlT7g/formResponse" target="my_iframe" method="POST" id="contact_form" data-parsley-validate>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="nom"> Nom et prénoms</label>
                  <input class="form-control" type="text"  name="entry.1896512487" id="nom" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="prenoms"> E-mail</label>
                  <input class="form-control" type="email" name="entry.945291491" id="email" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label> Message</label>
                  <textarea class="form-control" name="entry.178754131" id="entry.178754131" required> </textarea>
                </div>
              </div>
            </div>
            <p>
              <!--a class="btnRose btnContact" onclick="postContactToGoogle()"> Envoyer </a-->
              <!--button class="btnRose btnContact" type="submit" >Envoyer</button>
            </p>
          </form-->
        </div>
      </div>
    </div>

<?php get_footer(); ?>