<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
			
	<div class="content">

		<div class="grid-container">

			<main class="offset inner-content grid-x grid-padding-x" role="main">
			
				<section class="page-copy-wrap cell small-12">
					
					<div class="grid-x grid-padding-x">
					
						<h1 class="cell small-12"><?php the_field('message_404','option');?></h1>
						
						<div class="links-left page-copy-wrap cell small-12 medium-6">
							<?php if( have_rows('left_links','option') ):?>
								<ul class="cta-links-wrap left-links no-bullet">
								<?php while ( have_rows('left_links','option') ) : the_row();?>	
									<li>
									
									<?php 
									$link = get_sub_field('single_link','option');
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
						</div>
						
						<div class="links-right page-copy-wrap cell small-12 medium-6">
							<?php if( have_rows('right_links','option') ):?>
								<ul class="cta-links-wrap no-bullet">
								<?php while ( have_rows('right_links','option') ) : the_row();?>	
									<li>
									
									<?php 
									$link = get_sub_field('single_link','option');
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
						
					</div>
					
				</section>
				

			
	
			</main> <!-- end #main -->
			
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>