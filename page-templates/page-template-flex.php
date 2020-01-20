<?php 
/**
 * Template name: Content Modules
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
<div class="content">

	<div class="inner-content">

	    <main class="main" role="main">
			
<?php if ( have_rows('content_modules') ) : ?>
<?php while ( have_rows('content_modules') ) : ?> 
<?php the_row(); ?>
		

	<?php if ( get_row_layout() == 'hero_banner' ) : ?>
	
		<?php
			$imgID = get_sub_field('background_image');
			$imgSize = "hero";
			$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );

			$heroHeight = get_sub_field('height');
		?>
					
		<div class="hero-banner height-<?php echo esc_attr($heroHeight['value']); ?> <?php if($cta_links = get_sub_field('add_call_to_action_links')):?>has-ctas<?php endif;?>" style="background-image: url(<?php echo $imgArr[0]; ?> );">
								
			<div class="mask"></div>
			
			<div class="grid-container">
				<div class="offset grid-x grid-padding-x">
					
					<div class="hero-content cell small-12 medium-10 large-6">
					
						<h1 class="white"><?php the_sub_field('heading');?></h1>
						
						<?php if (get_sub_field('sub-heading')):?> 
						<h3 class="white"><?php the_sub_field('sub-heading');?></h3>
						<?php endif;?>	
						
						<?php 
						$link = get_sub_field('link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						    <a class="white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
						
					</div>
					
				</div>
			</div>
			
			<?php if( $cta_links = !get_sub_field('add_call_to_action_links') && is_front_page()):?>
			
				<a class="down-arrow" href="#"><span></span><span></span><span></span></a>
						
				<div class="banner-bottom"></div>
			
			<?php endif;?>
								
		</div>
		
		<?php if($cta_links = get_sub_field('add_call_to_action_links')):?>
		
			<?php if( have_rows('cta_links') ):?>
			<div class="banner-cta-links-wrap grid-container">
				<div class="offset grid-x grid-padding-x align-left small-up-1 smedium-up-2 medium-up-3 large-up-3">
				<?php while ( have_rows('cta_links') ) : the_row();?>	
				
				<div class="single-cta-link cell">
					
					<?php if( have_rows('single_link') ):?>
						<?php while ( have_rows('single_link') ) : the_row();?>	
						
						<div class="logo-wrap"><img src="/wp-content/themes/summit/assets/images/SCF_Brand_Mark.svg"/></div>
					
						<h3><?php the_sub_field('heading');?></h3>
					
						<?php 
						$link = get_sub_field('link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
													
						<?php endwhile;?>
					<?php endif;?>
					
				</div>
			
				<?php endwhile;?>
				</div>
				
			</div>
			<?php endif;?>
			
		<?php endif;?>
		
	<?php endif;?>		
	
	
	<?php if ( get_row_layout() == 'page_copy' ) : ?>
	<section class="page-copy-wrap">
		<div class="grid-container">
			
			<?php if( get_sub_field('layout_options') == 'full-width' ):?>
				<div class="full-width-copy-wrap offset grid-x grid-padding-x">
					
					<div class="cell small-12">
						
						<?php if( get_sub_field('copy_size') == 'large' ):?>	
							
							<div class="large-copy-wrap">
								<?php the_sub_field('large_copy');?>
							</div>
							
						<?php endif;?>	
					
						<?php if( get_sub_field('copy_size') == 'small' ):?>		
							<div class="small-copy-wrap grid-x grid-padding-x small-up-1 medium-up-2">
								
								<div class="cell">
									<?php the_sub_field('small_copy_left');?>
								</div>
								
								<div class="cell">
									<?php the_sub_field('small_copy_right');?>
								</div>	
							
							</div>
						<?php endif;?>	
						
						<?php if( have_rows('cta_links') ):?>
							<ul class="cta-links-wrap no-bullet">
							<?php while ( have_rows('cta_links') ) : the_row();?>	
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
						
					</div>
					
				</div>
			<?php endif;?>

				
			<?php if( get_sub_field('layout_options') == 'left-heading' ):?>
				<div class="left-heading-copy-wrap offset grid-x grid-padding-x">
			
					<div class="cell small-12 medium-3">
						
						<?php if( get_sub_field('left_heading')):?>
						<h2><?php the_sub_field('left_heading');?></h2>
						<?php endif;?>
						
					</div>
					
					<div class="cell small-12 medium-9">
						
						<?php if( get_sub_field('copy_size') == 'large' ):?>	
							
							<div class="large-copy-wrap">
								<?php the_sub_field('large_copy');?>
							</div>
							
						<?php endif;?>	
					
						<?php if( get_sub_field('copy_size') == 'small' ):?>	

							<?php if( get_sub_field('small_copy_layout') == 'single' ):?>							
							
								<div class="split-copy-wrap grid-x grid-padding-x">
									
									<div class="cell small-12">
										<?php the_sub_field('small_copy_single_column');?>
									</div>
								
								</div>
								
							<?php endif;?>

							<?php if( get_sub_field('small_copy_layout') == 'two' ):?>							
							
								<div class="split-copy-wrap grid-x grid-padding-x small-up-1 large-up-2">
									
									<div class="cell">
										<?php the_sub_field('small_copy_left');?>
									</div>
									
									<div class="cell">
										<?php the_sub_field('small_copy_right');?>
									</div>	
								
								</div>
							
							<?php endif;?>
							
						<?php endif;?>	
						
						<?php if( have_rows('cta_links') ):?>
							<ul class="cta-links-wrap no-bullet">
							<?php while ( have_rows('cta_links') ) : the_row();?>	
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
						
					</div>
					
				</div>
			<?php endif;?>
	
		</div>
	</section>
	<?php endif;?>		
		
		
	<?php if ( get_row_layout() == 'full_width_image_wcta_link' ) : ?>
	
	<?php
		$imgID = get_sub_field('background_image');
		$imgSize = "cta-w-button";
		$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );

		$heroHeight = get_sub_field('height');
	?>
					
	<section class="fw-cta-w-button" style="background-image: url(<?php echo $imgArr[0]; ?> );">
		<div class="grid-container">
			<div class="full-width-copy-wrap grid-x grid-padding-x">
				
				<?php 
				$link = get_sub_field('link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <div class="cell auto">
				    	<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				    </div>
				<?php endif; ?>				
			</div>
		</div>
	</section>
	
	<?php endif; ?>
	
	
	<?php if ( get_row_layout() == 'full_width_image' ) : ?>
	<section class="fw-image">
		
		<?php 
		$image = get_sub_field('image');
		$size = 'fw-image'; // (thumbnail, medium, large, full or custom size)
		if( $image ) {
		    echo wp_get_attachment_image( $image, $size );
		};?>
		
	</section>
	<?php endif; ?>
	
	
	<?php if ( get_row_layout() == 'leadership_quote' ) : ?>
	<section class="leadership-quote">
		<div class="grid-container">
			
			<div class="offset show-for-small hide-for-medium grid-x grid-padding-x">
				
				<div class="single-quote cell small-12">
				
					<div class="inner">
				
						<div class="img-wrap">
							<?php 
							$image = get_sub_field('photo');
							$size = 'quote-image'; // (thumbnail, medium, large, full or custom size)
							if( $image ) {
							    echo wp_get_attachment_image( $image, $size );
							}?>
						</div>
						
						<div class="text-wrap">
						
							<?php if(get_sub_field('heading')):?>
											
								<h2><?php the_sub_field('heading'); ?></h2>
							
							<?php endif; ?>
							
							<div class="bottom">
							
								<p class="quote"><?php the_sub_field('quote');?></p>
				
								<p class="name">– <?php the_sub_field('name_&_title');?></p>
							
							</div>
						
						</div>
						
					</div>

				</div>

			</div>
			
			
			<div class="offset hide-for-small show-for-medium grid-x grid-padding-x">
				
				<div class="single-quote cell small-12">
					
					<div class="inner grid-x grid-padding-x medium-up-2">
					
						<div class="text-wrap cell">
													
							<?php if(get_sub_field('heading')):?>
											
								<h2><?php the_sub_field('heading'); ?></h2>
							
							<?php endif; ?>
							
							<div class="bottom">
								
								<p class="quote"><?php the_sub_field('quote');?></p>
				
								<p class="name">– <?php the_sub_field('name_&_title');?></p>
								
							</div>
						
						</div>
					
						<div class="img-wrap cell">
							<?php 
							$image = get_sub_field('photo');
							$size = 'quote-image'; // (thumbnail, medium, large, full or custom size)
							if( $image ) {
							    echo wp_get_attachment_image( $image, $size );
							}?>
						</div>
					
					</div>
					

				</div>

			</div>
			
		
		<?php if( get_sub_field('layout_options') == 'leader' ):?>
		
			<div class="story-wrap offset grid-x grid-padding-x">
				
				<h3 class="cell small-12"><?php the_sub_field('story_heading');?></h3>	
				
				<div class="copy-wrap cell small-12 medium-6">
					<?php the_sub_field('story_copy_left');?>
				</div>

				<div class="copy-wrap cell small-12 medium-6">
					<?php the_sub_field('story_copy_right');?>
				</div>				
			
			</div>
		
		<?php endif;?>
		
		</div>
		
		
	</section>
	<?php endif; ?>
	
	
	<?php if ( get_row_layout() == 'contact_form' ) : ?>
	<section class="contact-form">
		<div class="grid-container">
			
			<div class="story-wrap offset grid-x grid-padding-x">
				
				<div class="cell small-12">
			
					<?php if(get_sub_field('heading')):?>
						<h2><?php the_sub_field('heading');?></h2>
					<?php endif; ?>
		
					<?php gravity_form( 1, false, false, false, '', true );?>

				</div>

			</div>

		</div>
	</section>
	<?php endif; ?>	

<?php endwhile;?>
<?php endif; ?>
			
		</main> <!-- end #main -->
	    
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>