<?php 
/**
 * Template name: Contact Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
<div class="content">

	<div class="inner-content">

	    <main class="main" role="main">
			
			<section class="contact-form page-copy-wrap">
				<div class="grid-container">
					
					<div class="offset grid-x grid-padding-x">
						
						<div class="full-width-copy-wrap cell small-12">
							<p> <?php the_field('contact_message');?></p>
						</div>
						
						<ul class="tel-email cta-links-wrap no-bullet cell small-12 medium-6">
							<li class="heading">Contact Info</li>
							<li>Phone: <a href="tel:<?php the_field('phone_number');?>"><?php the_field('phone_number');?></a></li>
							<li><a href="mailto:<?php the_field('email_address');?>"><?php the_field('email_address');?></a></li>
						</ul>
						
						<div class="links-right page-copy-wrap cell small-12 medium-6">
							<?php if( have_rows('right_links') ):?>
								<ul class="cta-links-wrap no-bullet">
								<?php while ( have_rows('right_links') ) : the_row();?>	
									<li>
									
									<?php 
									$link = get_sub_field('single_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
									
									</li>
								<?php endwhile;?>
								</ul>
							<?php endif;?>
							
							<ul class="no-bullets footer-social cta-links-wrap  right-links small-padding-collapse small-margin-collapse">
								<li><a href="<?php the_field('linkedin_link', 'option');?>" target="_blank">LinkedIn</a></li>
								<li><a href="<?php the_field('instagram_link_link', 'option');?>" target="_blank">Instagram</a></li>
								<li><a href="<?php the_field('facebook_link', 'option');?>" target="_blank">Facebook</a></li>								
							</ul>
							
						</div>

						
						<div class="contact-form-wrap cell small-12">
					
							<?php if(get_field('contact_form_heading', 'option')):?>
								<h2><?php the_field('contact_form_heading', 'option');?></h2>
							<?php endif; ?>
				
							<?php gravity_form( 1, false, false, false, '', true );?>
		
						</div>
		
					</div>
		
				</div>
			</section>
			
		</main> <!-- end #main -->
	    
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>	
	
