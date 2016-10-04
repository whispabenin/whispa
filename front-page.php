<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since WHISPA 0.1
 * Template Name: front-page
 */

get_header(); ?>
<!---contenu de cours-->
    <!-- about-->
    <div id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <h2 class="lighter">Women High Impact Startup Preparation Academy (WHISPA)</h2>
            <p>WHISPA est un programme initié par <a class="rose" href="http://www.Etrilabs.com">ETRILABS</a> et <a class="rose" href="http://www.tekxl.com">TEKXL</a> ,  Ce programme met à la disposition de toutes jeunes femmes disponibles et motivées, une formation complète et gratuite d’une année dans le domaine de la programmation web, du marketing digital et du web design. Les jeunes femmes qui participent à la formation sont encadrées par des mentors et des personnes expérimentés travaillant dans des startups. Chacune des participantes du programme jouit d’un suivi particulier, adapté à ses besoins et aspirations et participe à la réalisation de projets innovants.  </p>
            <p>
            Actuellement, seulement 30% des personnes travaillant dans les (TIC) sont des femmes. C’est un secteur en pleine croissance qui offre de nouvelles perspectives. Il urge donc de réduire l’écart en formant des femmes compétentes, capables d’entreprendre dans ce secteur. A travers son programme de formation en programmation, marketing et design, le WHISPA se veut être une approche de solution pour résoudre le problème. WHISPA entend doter chacune de ces participantes, quel que soit le domaine d’activité qu’elles auraient choisi, de toutes les compétences nécessaires pour créer sa propre startup ou travailler dans des startups. </p>
          </div>
        </div>
      </div>
    </div>
    <div id="avantages">
  <div class="container">
      <div class="row text-center container">
       <h2 class="text-center">WHISPA forme des femmes entrepreneurs à :</h2>
        <div class="col-sm-3">
          <i class="fa fa-desktop"></i>
          <h3>Découvrir la technologie</h3>
          <p>Comprendre les différents aspects du domaine technologique et saisir les opportunités qu'il offre.</p>
        </div>
      
        <div class="col-sm-3">
          <i class="fa fa-line-chart"></i>
          <h3>Développer des compétences</h3>
          <p>Acquérir des compétences dansle domaine de la programmation, du marketing et du design.</p>
        </div>

         <div class="col-sm-3">
          <i class="fa fa-magic"></i>
          <h3>&Ecirc;tre plus compétitive</h3>
          <p>&Ecirc;tre plus compétitive sur le marché de l’emploi et avoir la possibilité de travailler pour de grande entreprise.</p>
        </div>

         <div class="col-sm-3">
          <i class="fa fa-rocket"></i>
          <h3>Créer une startup</h3>
          <p>Travailler son idée pour créer une startup qui permet de régler de manière innovante un problème.</p>
        </div>
      </div>
     </div>
    </div>
   
    

   <!--nos formations--> 
   <div id="formations">
    <div class="row">
      <h2 class="text-center">Nos formations</h2>
      <div class="col-sm-6 col-md-offset-1 formation-div">
        <h3>Programmations</h3>
        <p>Le volet programmation de la formation consiste à apprendre aux filles tous les langages de programmation pouvant leur permettre de développer des applications dans le cadre de la réalisation de leur projet.</p>

         <h3>Marketing-digital</h3>
        <p>Le volet marketing de la formation a pour objectif de développer chez les apprenantes les compétences nécessaires pour faire la promotion d’un produit sur le digital.</p>

        <h3>Design</h3>
        <p>Le design est un aspect important dans le développement d’un produit. Il est prévu dans la formation pour aider les apprenantes dans la conception d’un produit et également pour le marketing.</p>
      </div>
      <div class="col-sm-4 image-formation">
       <img src="<?php echo get_template_directory_uri(); ?>/images/about-us.JPG" alt=""/>
      </div>

     </div>
   </div>
  <div  id="whywhispa">
    <div class="row">
        <div id="benefit" class="carousel slide" data-ride="carousel" >
          <div class="container">
            <div>
              <h2 class="text-center">Pourquoi WHISPA est important?</h2>
              <hr id="underline">
            </div>
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center" id="slide">

              <div class="item active">
                  <p>« Les startups en Afrique n’ont souvent pas de femmes co-fondatrices, programmeuses, ou conceptrices d’interface ou d’expérience utilisateurs (UX/UI). Elles représentent seulement 15% de tous les ingénieurs. »
                  </p>
                  
              </div>
              <div class="item">

                   <p>« Les femmes peuvent contribuer de par leur point de vue, leur expérience et leur créativité à la conception et fabrication des produits que les gens voudront vraiment utiliser. »</p>

              </div>

              <div class="item">

                   <p>« Des études démontrent que les femmes sont la plus grande force économique dans le monde entier, leurs choix affectent plus de 85% des décisions d’achats.»</p>

              </div>

              <div class="item">

                   <p>« Préparer adéquatement un petit nombre de femmes chaque année pour les startups en Afrique peut avoir un effet catalyseur sur l’ensemble de l’écosystème. »</p>

              </div>

              <div class="item">
                  <p>«Une Afrique où la parité est facilement réalisée dans les équipes de startups, mieux, où les startups exclusivement féminines existent et prospèrent est possible. »</p>

              </div>
            </div><!--fermeture caroussel-inner-->

            <!-- Indicators 
            <ol class="carousel-indicators control">
              <li data-target="#benefit" data-slide-to="0" class="active"></li>
              <li data-target="#benefit" data-slide-to="1"></li>
              <li data-target="#benefit" data-slide-to="2"></li>
            </ol>fin Indicators -->
              <!-- Controls -->
            <a class="left carousel-control" href="#benefit" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#benefit" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div><!--generic-->
          <div class=" container break text-center">
            <button class="btnBorder" data-toggle="modal" data-target="#registerModal">Soutenir la cause</button>
          </div>


        </div><!--whywhispa-->
        </div><!--whywhispa-->
    </div>
    <!-- testimonials -->
    <div  id="testimonials">
       <div class="container">
          <div id="carousel" class="carousel slide col-md-10 col-md-offset-1 cadre" data-ride="carousel" >

            <!-- Wrapper for slides -->
            <div class="carousel-inner" id="slide">
              <div class="item active">
                <div class="row">
                  <div class="col-md-3 col-xs-12 col-sm-3">
                    <img class="pull-left img-circle" src="<?php echo get_template_directory_uri(); ?>/images/sawanatou.jpg" alt=""/>
                  </div>
                  <div class="col-md-9 col-xs-12 col-sm-9">
                    <span class="fa fa-quote-left"></span>
                    <blockquote>
                      <em>Je suis developpeur mais sans WHISPA, je n'aurais pas acquis toutes mes compétences actuelles. Aujourd'hui, je ne suis pas seulement developpeur mais j'apprends à créer ma propre entreprise.
                      <h4>- Sawanatou</h4>
                      </em>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-3 col-xs-12 col-sm-3">
                    <img class="pull-left  img-circle" src="<?php echo get_template_directory_uri(); ?>/images/murielle.jpg" alt=""/>
                  </div>

                  <div class="col-md-9 col-xs-12 col-sm-9">
                    <span class="fa fa-quote-left"></span>
                    <blockquote>
                      <em>WHISPA me permet non seulement d’approfondir mes connaissances en marketing, mais m'apprend également la  programmation informatique et le design!
                      <h4>- Murielle</h4>
                      </em>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-3 col-xs-12 col-sm-3">
                    <img class="pull-left  img-circle" src="<?php echo get_template_directory_uri(); ?>/images/hermine.jpg" alt="">
                  </div>

                  <div class="col-md-9 col-xs-12 col-sm-9">
                    <span class="fa fa-quote-left"></span>
                    <blockquote><em>J'évolue à mon rythme, dans une ambiance conviviale et avec des formateurs compétents et disponibles.
                    <h4>- Hermine</h4></em>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-3 col-xs-12 col-sm-3">
                    <img class="pull-left  img-circle" src="<?php echo get_template_directory_uri(); ?>/images/hadjara.jpg" alt="">
                  </div>
                  <div class="col-md-9 col-xs-12 col-sm-9">
                    <span class="fa fa-quote-left"></span>
                    <blockquote><em>Grâce à WHISPA, je ferai partie des femmes les plus compétentes du domaine technologique.
                    <h4>- Hadjara</h4></em>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div><!--fermeture caroussel-inner-->

              <!-- Indicators -->
         <ol class="carousel-indicators control">
              <li data-target="#benefit" data-slide-to="0" class="active"></li>
              <li data-target="#benefit" data-slide-to="1"></li>
              <li data-target="#benefit" data-slide-to="2"></li>
            </ol><!--fin Indicators-->
          </div><!--generic-->
        </div><!--container-->
    </div><!--testimonials--> 

    <!-- Modal -->
      <div id="registerModal" class="modal fade in" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body text-center">
              <h3>Participer a la cause</h3>
		<p>Veuillez nous contacter en envoyant un message a l'adresse: contact@whispa.org ou directement sur notre site web en remplissant le formulaire de contact.Merci</p>               
              </div>
            </div>
          </div>
        </div>
<?php get_footer(); ?>