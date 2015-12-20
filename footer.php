<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @since WHISPA 0.1
 */
?>


 <div id="footer" class="container-fluid">
			<div class="container">
				<div class="row">
						<div id="partner">
							<div class="partner-title col-md-12"><span>Partenaires:</span></div>
							<div class="partner-logo col-md-12">
								<ul class="partenaires">
		  						<li><a href="http://www.etrilabs.com/"><img class="partenaire" src="<?php echo get_template_directory_uri(); ?>/images/etrilabs.png" alt="Etrilabs"></a></li>
		  						<li><a href="http://www.tekxl.com/"><img class="partenaire" src="<?php echo get_template_directory_uri(); ?>/images/tekxl.png" alt="TEKXL LLC"></a></li>
		  					</ul>
		  				</div>
  					</div>

					<div class="col-md-8">
							<div id="copyright">
								<span>&copy; 2015,<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>. All rights reserved.</span>
									<ul class="sociaux">
			  						<li><a href="https://www.facebook.com/whispaBenin"><i class="icon-facebook-2 facebook"></i></a></li>
			  						<li><a href="https://twitter.com/whispabenin"><i class="icon-twitter-2 twitter"></i></a></li>
			  					</ul>
							</div>
					</div>
				</div>
			</div><!--footer container-->
		</div><!--footer-->
		<?php wp_footer(); ?>
</body>
</html>
