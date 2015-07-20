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
    <div class="container contact">
      <div class="row">
        <h1 class="text-center">Inscription &agrave; WHISPA</h1>
          <div class="row text-center" id="info-envoi"></div>
          <iframe src="" id="my_iframe" name="my_iframe"></iframe>
          <form class="col-md-6 col-md-offset-3 col-xs-12" id="inscription_form" action="https://docs.google.com/forms/d/1XCdpNfvBhK7wsCa_2rdJbMAgkTjhSVriKOz_uk_rBeQ/formResponse" method="POST" target="my_iframe" data-parsley-validate>

            <h2>Informations personnelles</h2>
            <div class="form-group">
              <label for="name">Nom et prénoms:</label>
              <input type="text" class="form-control" id="nom" name="entry.491471038" required>
            </div>

            <div class="form-group">
              <label for="age">Date de naissance:</label> <br>
               <select id='annee' name="entry.315674901_year" required>
                  <option value='0'>Année</option>
                </select>
                <select id='mois' name="entry.315674901_month" required>
                   <option value='0'>Mois</option>
               </select>
               <select id='jour' name="entry.315674901_day" required>
                  <option value='0'>Jour</option>
               </select>
            </div>

            <div class="form-group">
              <label for="telephone">Téléphone:</label>
              <input type="text" class="form-control" id="telephone" name="entry.903455759" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="entry.1619800715" required>
            </div>

            <div class="form-group">
              <label for="niveau">Niveau d'étude ou profession:</label><br>
              <textarea name="entry.1768188565" id="niveau" class="form-control" required></textarea>
            </div>
            <br>

            <h2>Connaissances</h2>
            <p>Utilisation des langages de programmation informatique</p>
            <div class="radio">
              <label>
                <input type="radio" name="entry.266238509" id="connaissance11" value="Aucune">
                  Aucune
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.266238509" id="connaissance12" value="Basique" required>
                  Basique
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.266238509" id="connaissance13" value="Professionnelle" required>
                  Professionnelle
              </label>
            </div>


            <div class="form-group">
              <label for="niveau">Précisez les langages de programmation si vous en utilisez:</label><br>
              <textarea name="entry.1884926527" id="langages" class="form-control" data-parsley-conditionaldifrequired='["[name=\"entry.266238509\"]:checked", "Aucune"]' data-parsley-validate-if-empty data-parsley-success-class="" data-parsley-conditionaldifrequired-message="Ce champ est requis"></textarea>
            </div>

            <label>Connaissances digitales</label>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1349124608" id="connaissance21" value="Webmarketing">
                  Digital Marketing
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1349124608" id="connaissance22" value="Social Media Marketing">
                  Social Media Marketing
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1349124608" id="connaissance23" value="Community management">
                  Community Management
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1349124608" id="connaissance24" value="__other_option__">
                Autres
                <input type="text" name="entry.1349124608.other_option_response" id="connaissance2a" data-parsley-conditionalrequired='["[name=\"entry.1349124608\"]:checked", "__other_option__"]' data-parsley-validate-if-empty data-parsley-success-class="" data-parsley-conditionalrequired-message="ce champ est requis" />
              </label>
            </div>

            <label>Connaissances design</label>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1757553698" id="connaissance31" value="Design graphique">
                  Design graphique
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1757553698" id="connaissance32" value="Design Infographique">
                  Design infographique
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1757553698" id="connaissance33" value="Webdesign">
                  Webdesign
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1757553698" id="connaissance34" value="UI Webdesign">
                  UI Webdesign
              </label>
            </div>
            <div class="radio">
                <label>
                  <input type="radio" name="entry.1757553698" id="connaissance35" value="__other_option__">
                  Autres
                  <input type="text" name="entry.1757553698.other_option_response" id="connaissance3a" data-parsley-conditionalrequired='["[name=\"entry.1757553698\"]:checked", "__other_option__"]' data-parsley-validate-if-empty data-parsley-success-class="" data-parsley-conditionalrequired-message="ce champ est requis" />
                </label>
            </div>
            <br>

            <h2>Motivations</h2>
            <div class="form-group">
              <label for="raison">Dites-nous en quelques mots pourquoi vous voulez participer à ce programme:</label><br>
              <textarea name="entry.1249162603" id="raison" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label for="fascinant">Qu'avez-vous appris de fascinant récemment?</label><br>
              <textarea name="entry.1216302795" id="fascinant" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label for="avenir">Où vous imaginez-vous dans deux ans?</label><br>
              <textarea name="entry.1205715919" id="avenir" class="form-control" required></textarea>
            </div>
            <p>
              <button class="btnRose btnContact" type="submit">Envoyer</button>
            </p>
          </form>

        </div>

    </div>


<?php get_footer(); ?>