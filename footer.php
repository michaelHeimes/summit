<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer grid-container" role="contentinfo">
					
					<div class="inner-footer offset grid-x grid-margin-x grid-padding-x">
						
						<div class="footer-left small-12 medium-7 cell">
							<nav role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>

						<div class="footer-right small-12 medium-5 cell">
							<h3><?php the_field('footer_newsletter_heading', 'option');?></h3>
							
							<p><?php the_field('footer_newsletter_copy', 'option');?></p>
							
							<?php gravity_form( 2, false, false, false, '', true );?>

							
								
							<ul class="no-bullets footer-social small-padding-collapse small-margin-collapse">
								<li><a href="<?php the_field('linkedin_link', 'option');?>" target="_blank">LinkedIn</a></li>
								<li><a href="<?php the_field('instagram_link_link', 'option');?>" target="_blank">Instagram</a></li>
								<li><a href="<?php the_field('facebook_link', 'option');?>" target="_blank">Facebook</a></li>								
							</ul>
								

	    				</div>
						
						<div class="small-12 medium-12 large-12 cell">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
						</div>
					
					</div> <!-- end #inner-footer -->
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->