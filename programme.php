<?php
/**
 * The content page template file
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since Whispa 1.0
 *
 * Template Name: Programme
 */

get_header(); ?>
<div id="programme">
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
                     <!-- <h1 class="entry-title"><?php the_title(); ?></h1>-->
                      </header><!-- .entry-header -->
                   
                     <div class="entry-content">
                     <!---contenu de cours-->
                       <div class="container">
                         <div class="row">
                           <div class="col-md-7 col-md-offset-3">
                             <h1 class="benefits-title lighter">Les différentes carrières possibles avec WHISPA:</h1>
                           </div>
                         </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row ">
                              <div class="col-md-4"> 
                                <div  class="programme-content">
                                   <h2 class="benefits-item">Backend Developer</h2>
                                    <p>Apprenez comment devenir un Backend Web Developer en découvrant les compétences, les responsabilités et les langues qui sont nécessaires dans ce domaine. </p>
                                    <hr>
                                    <h3 class="benefits-item">Contenu du programme</h3>
				     <ul>
                                    <li>Introduction au Marketing digital</li>
                                    <li>Initiation aux startups</li>
                                    <li>Introduction au Design</li>
                                    <li>jQuery, Node.js,Database, Android</li>
                                    <li >JSON, HTTP, REST, Ruby...</li>
				    </ul>
          
                                </div>
                              </div>

                               <div class="col-md-4">
                                <div class="programme-content">
                                  <h2 class="benefits-item">Front-end Developer</h2>
                                  <p>Maîtrisez les compétences requises pour devenir un Front-End Web Developer, et commencer à construire de beaux sites sensibles optimisés pour mobiles et ordinateurs.</p>
                                  <hr>
                                  <h3 class="benefits-item">Contenu du programme</h3>
                                <div class="front-end">
				<ul>
                                  <li>Introduction au Design</li>
                                  <li>Théories du design</li>
                                  <li >UI/UX</li>
                                  <li>jQuery, Php, Angular js</li>
                                  <li>creation de theme/plugin Wordpress...</li>
				</ul>
                                </div>
 
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="programme-content" id="border">
                                  <h2 class="benefits-item">Digital marketer</h2>
                                  <p> Développer les compétences nécessaires a l’utilisation des supports numériques pour vendre ou promouvoir des produits aux consommateurs et entreprises.</p>
                                <hr>
                                  <h3 class="benefits-item">Contenu du programme</h3>
                        	<ul>
                                  <li>Analyse marketing numérique</li>
                                  <li>Marketing par les réseaux sociaux</li>
                                  <li>Vidéo Marketing-Presentation</li>
    
                                  <li>Application Gestion des réseaux sociaux</li>
                                  <li>Application Digital Marketing...</li>
				</ul>
                                </div>
                              </div>
                          </div>
                       </div>
                     </div>
                </div>

                </article>
            <?php endwhile; ?>
              </div><!--entry content-->
             </article>
         </div>
      </div>

  </div>
</div>
<?php get_footer(); ?>