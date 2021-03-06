<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer secondary-bg white" role="contentinfo">
					<div class="grid-container">
						<div class="inner-footer grid-x grid-padding-x align-justify">
							
							<div class="cell small-12 medium-6 tablet-4 xlarge-auto">
								<?php 
								$image = get_field('footer_logo', 'option');
								if( !empty( $image ) ): ?>
								<div class="footer-logo">
									<a href="<?php echo home_url(); ?>">
										<img class="style-svg" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</a>
								</div>
								<?php endif; ?>
								<nav role="navigation" class="hide-for-medium">
									<?php joints_footer_links(); ?>
								</nav>
								<p class="address">
									<a class="white" href="<?php the_field('directions_url', 'option');?>" target="_blank">
										<?php the_field('address', 'option');?>
									</a>
								</p>
								<p class="email-phone">
									<a class="white" href="tel:<?php the_field('phone_number', 'option');?>"><?php the_field('phone_number', 'option');?></a><br>
									<a  class="white"href="mailto:<?php the_field('email_address', 'option');?>"><?php the_field('email_address', 'option');?></a>
								</p>
								<div class="social-links-wrap mobile hide-for-medium">
									<?php joints_social_links(); ?>
								</div>
							</div>		

							<div class="cell small-12 medium-6 tablet-8 xlarge-shrink show-for-medium">
								<nav role="navigation">
	    							<?php joints_footer_links(); ?>
	    						</nav>
	    					</div>
							
						</div>
							
						<div class="post-footer grid-x grid-padding-x align-justify">
							<div class="cell small-12 medium-6 tablet-shrink">
								<p class="white source-org copyright">&copy; <?php echo date('Y'); ?> Netrias, LLC. All Rights Reserved.</p>
							</div>
							<div class="social-links-wrap cell small-12 medium-6 tablet-shrink show-for-medium">
								<?php joints_social_links(); ?>
							</div>
						
						</div> <!-- end #inner-footer -->
					</div>
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->