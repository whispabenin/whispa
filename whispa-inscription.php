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
        <h1 class="text-center">Inscription &agrave; WHISPA</h1>
          <div class="row text-center" id="info-envoi"></div>
          <iframe name="my_iframe" id="my_iframe" style="display:none;"></iframe>
          <form class="col-md-6 col-md-offset-3 col-xs-12" id="inscription_form" action="https://docs.google.com/forms/d/1XCdpNfvBhK7wsCa_2rdJbMAgkTjhSVriKOz_uk_rBeQ/formResponse" method="POST" target="my_iframe" data-parsley-validate>
            <h2>Informations personnelles</h2>
            <div class="form-group">
              <label for="name">Nom et pr&eacute;noms:</label>
              <input type="text" class="form-control" id="nom" name="entry.491471038" required>
            </div>

            <div class="form-group">
              <label for="age">Date de naissance:</label> <br>
              <input type="text" id="date" class="form-control" name="entry.315674901" required>
              <label for="date" class="error" style="display: none;">Veuillez choisir votre date de naissance.</label>
            </div>

            <div class="form-group">
              <label for="telephone">T&eacute;l&eacute;phone :</label>
              <input type="text" class="form-control" id="telephone" name="entry.903455759" data-parsley-type="number" required>
            </div>
            <div class="form-group">
              <label for="email">Email :</label>
              <input type="email" class="form-control" id="email" name="entry.1619800715" required>
            </div>

            <div class="form-group">
              <label for="niveau">Niveau d'&eacute;tude ou profession :</label><br>
              <textarea name="entry.1768188565" id="niveau" class="form-control" required></textarea>
            </div>
            <br>

            <h2>Connaissances</h2>
            <p>Utilisation des langages de programmation informatique</p>

            <div class="radio">
              <label for="entry.266238509" class="error" style="display: none;">Veuillez choisir votre niveau de connaissances.</label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.266238509" id="connaissance11" class="langages" value="Aucune" required>
                  Aucune
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.266238509" id="connaissance12" class="langages" value="Basique">
                  Basique
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.266238509" id="connaissance13" class="langages" value="Professionnelle">
                  Professionnelle
              </label>
            </div>
            <div class="form-group">
              <label for="niveau">Pr&eacute;cisez les langages de programmation si vous en utilisez:</label><br>
              <textarea name="entry.1884926527" id="langages" class="form-control"></textarea>
            </div>

            <h3>Connaissances digitales</h3>
            <div class="radio" id="connaissancesdigitales">
              <label for="entry.1349124608" class="error" style="display: none;">Veuillez pr&eacute;ciser vos connaissances digitales.</label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1349124608" id="connaissance21" class="connaissancesdigitales" value="Webmarketing" required>
                  Digital Marketing
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1349124608" id="connaissance22" class="connaissancesdigitales" value="Social Media Marketing">
                  Social Media Marketing
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1349124608" id="connaissance23" class="connaissancesdigitales" value="Community management">
                  Community Management
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1349124608" id="connaissance24" class="connaissancesdigitales" value="__other_option__">
                Autres
                <input type="text" name="entry.1349124608.other_option_response" id="connaissance2a">
              </label>
            </div>

            <h3>Connaissances design</h3>
            <div class="radio" id="connaissancesdesign">
              <label for="entry.1757553698" class="error" style="display: none;">Veuillez pr&eacute;ciser vos connaissances en design.</label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1757553698" id="connaissance31" class="connaissancesdesign" value="Design graphique" required>
                  Design graphique
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1757553698" id="connaissance32" class="connaissancesdesign" value="Design Infographique">
                  Design infographique
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1757553698" id="connaissance33" class="connaissancesdesign" value="Webdesign">
                  Webdesign
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="entry.1757553698" id="connaissance34" class="connaissancesdesign" value="UI Webdesign">
                  UI Webdesign
              </label>
            </div>
            <div class="radio">
                <label>
                  <input type="radio" name="entry.1757553698" id="connaissance35" class="connaissancesdesign" value="__other_option__">
                  Autres
                  <input type="text" name="entry.1757553698.other_option_response" id="connaissance3a">
                </label>
            </div>
            <br>

            <h2>Motivations</h2>
            <div class="form-group">
              <label for="raison">Dites-nous en quelques mots pourquoi vous voulez participer &agrave; ce programme:</label><br>
              <textarea name="entry.1249162603" id="raison" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label for="fascinant">Qu'avez-vous appris de fascinant r&eacute;cemment?</label><br>
              <textarea name="entry.1216302795" id="fascinant" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label for="avenir">O&ugrave; vous imaginez-vous dans deux ans?</label><br>
              <textarea name="entry.1205715919" id="avenir" class="form-control" required></textarea>
            </div>
            <p>
              <button id="submit" class="btnRose btnContact" type="submit">Envoyer</button>
            </p>
          </form>
        </div>
    </div>



<?php get_footer(); ?>