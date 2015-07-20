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
 */

get_header(); ?>
<!---contenu de cours-->
		<!-- about-->
		<div id="about" class="container">
			<div class="row espace">
				<div class="col-md-6">
					<h2 class="lighter">Women High Impact Startup Preparation Academy (WHISPA)</h2>
					<p>Initié par <a class="rose" href="http://www.tekxl.com">TEKXL</a> et <a class="rose" href="http://www.Etrilabs.com">Etrilabs</a>, WHISPA est un programme dont l’objectif  principal est de faire acquérir aux jeunes femmes les compétences nécessaires à l’entreprenariat dans le domaine des TICs.</p>
					<p>
						En effet, seulement 30% des personnes travaillant dans les (TIC) sont des femmes.
						Le secteur, en pleine croissance, offre de nouvelles perspectives, et il urge de réduire l’écart en formant des femmes compétentes, capables d’entreprendre dans le domaine. A travers son<a href="programme.html"><span class="rose"> programme de formation en programmation, marketing et design</span></a>, le WHISPA se veut être une approche de solution pour résoudre le problème.
					</p>
				</div>

				<div class="col-md-5 col-md-offset-1">
					<img class="pull-right img_desc" src="<?php echo get_template_directory_uri(); ?>/images/framework.jpg" alt="WHISPA">
				</div>
			</div>
		</div>
		<div class="row col-md-offset-2 col-md-8 col-margin"> <hr> </div>

		<!-- benefits -->
		<div class="container">
		<div id="benefits" class="row">
			<div class="col-md-7 col-md-offset-3">
				<h3 class="benefits-title lighter">WHISPA forme des femmes et jeunes filles entrepreneurs à : </h3>
				<h4 class="benefits-item"><span class="glyphicon glyphicon-ok"></span>Acquérir très rapidement des connaissances dans le domaine technologique</h4>
		    <h4 class="benefits-item"><span class="glyphicon glyphicon-ok"></span>Apprendre la programmation, le marketing et le design</h4>
				<h4 class="benefits-item"><span class="glyphicon glyphicon-ok"></span>Etre plus compétitive sur le marché de l’emploi</h4>
				<h4 class="benefits-item"><span class="glyphicon glyphicon-ok"></span>Apprendre à créer une startup</h4>
			</div>
		</div>
		</div>
		<!-- testimonials -->
		<div  id="testimonials" class="container-fluid ">
			<div id="carousel-example-generic" class="carousel slide col-md-8 col-md-offset-2  cadre" data-ride="carousel" >

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
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				</ol><!-- fin Indicators -->
      </div><!--generic-->

      <div class=" container break">
      	<a href="<?php echo home_url(); ?>/inscription" class="btnRose">Rejoins-nous maintenant</a>
      </div>
    </div><!--testimonials-->


<?php get_footer(); ?>