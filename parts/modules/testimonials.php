
<section class="testimonials secondary-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="left white secondary-bg cell small-12 tablet-4">
				<div class="inner">
					<h2 class="small-caps"><?php the_field('testimonials_small_caps_heading', 'options');?></h2>
					<h3 class="h2"><?php the_field('testimonials_heading', 'options');?></h3>
				</div>
				<nav class="grid-x">
					<div class="swiper-button-prev">
						<svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24 9C24.5523 9 25 8.55228 25 8C25 7.44772 24.5523 7 24 7L24 9ZM0.292893 7.29289C-0.0976314 7.68342 -0.0976315 8.31658 0.292892 8.7071L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34314C8.46159 1.95262 8.46159 1.31946 8.07107 0.928931C7.68054 0.538406 7.04738 0.538406 6.65686 0.928931L0.292893 7.29289ZM24 7L1 7L1 9L24 9L24 7Z" fill="white"/></svg>
					</div>
					<div class="swiper-button-next">
						<svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 7C0.447715 7 -4.82823e-08 7.44772 0 8C4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM24.7071 8.7071C25.0976 8.31658 25.0976 7.68342 24.7071 7.29289L18.3431 0.928931C17.9526 0.538406 17.3195 0.538406 16.9289 0.928931C16.5384 1.31946 16.5384 1.95262 16.9289 2.34314L22.5858 8L16.9289 13.6569C16.5384 14.0474 16.5384 14.6805 16.9289 15.0711C17.3195 15.4616 17.9526 15.4616 18.3431 15.0711L24.7071 8.7071ZM1 9L24 9L24 7L1 7L1 9Z" fill="white"/></svg>											
					</div>
				</nav>
			</div>
			<div class="cell small-12 tablet-8">
				<div class="testimonial-slider">
					<div class="swiper-wrapper">
						<?php			
						$args = array(  
							'post_type' => 'testimonial',
							'post_status' => 'publish',
							'posts_per_page' => -1,
						);
						
						$loop = new WP_Query( $args ); 
						
						if ( $loop->have_posts() ) : 
							
							while ( $loop->have_posts() ) : $loop->the_post();?>
							
								<div class="swiper-slide white-bg">
									<div class="inner">
										<p class="large-text"><?php the_field('quote');?></p>
										<div class="grid-x grid-padding-x align-middle">
											<?php 
											$image = get_field('photo');
											if( !empty( $image ) ): ?>
											<div class="cell shrink">
												<div class="img-wrap">
													<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												</div>
												
											</div>
											<?php endif; ?>
											<div class="cell auto primary">
												<strong>- <?php the_title();?></strong>
											</div>
										</div>
									</div>
								</div>
								
							<?php
							endwhile;
						
						endif;
						wp_reset_postdata(); 
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
