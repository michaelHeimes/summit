<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="grid-container">
		<div class="top-bar-left float-left">

			<ul class="menu">
				<li>
				<?php if(is_page_template('page-templates/page-template-contact.php') || is_404()):?>

					<?php 
					$image = get_field('blue_text_logo', 'option');
					if( !empty( $image ) ): ?>
					
						<a href="<?php echo home_url(); ?>">
					    	<img class="logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						</a>
					    
					<?php else:?>
					
					<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					    
					<?php endif; ?>
					
				<?php else:?>
				
					<?php 
					$image = get_field('white_text_logo', 'option');
					if( !empty( $image ) ): ?>
					
						<a href="<?php echo home_url(); ?>">
					    	<img class="logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						</a>
						
					<?php else:?>
					
					<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					    
					<?php endif; ?>				
				
				<?php endif;?>
				</li>
			</ul>
		</div>
		<div class="top-bar-right show-for-large">
			<?php joints_top_nav(); ?>	
		</div>
		<div class="top-bar-right float-right hide-for-large">
			<ul class="menu">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a data-toggle="off-canvas">
					<span id="bar-1"></span>
					<span id="bar-2"></span>
					<span id="bar-3"></span>
				</a></li>
			</ul>
		</div>
	</div>
</div>