<section class="resources gray-bg">
	<div class="grid-container">
		<div class="card-grid grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-4" data-equalizer data-equalize-on="medium">
		<?php			
		$args = array(  
			'post_type' => 'resource',
			'post_status' => 'publish',
			'posts_per_page' => -1,
		);
		
		$loop = new WP_Query( $args ); 
		
		if ( $loop->have_posts() ) : 
			
			while ( $loop->have_posts() ) : $loop->the_post();?>
			
			<div class="grid-card cell">
				<article id="post-<?php the_ID(); ?>" <?php post_class('grid-x flex-direction-column'); ?> role="article">
 					<?php 
	 					$disable_post = get_field('disable_single_post');
	 					$ext_link = get_field('external_link_url');
 					?>
 					<?php if( $disable_post == 'true' && !empty($ext_link) ):?>
 					<a class="grid-x" href="<?php echo $ext_link;?>" target="_blank" title="<?php the_title_attribute(); ?>">
 					
 					<?php elseif( $disable_post == 'true' && empty($ext_link) ):?>
 					
 					<?php else:?>
 					<a class="grid-x" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
 					<?php endif;?>
	
	
						<div class="inner white-bg grid-x flex-direction-column">
							<div class="top cell" data-equalizer-watch>
								<div class="date">
									<?php echo get_the_date( 'm', $post->ID );?>.<?php echo get_the_date( 'd', $post->ID );?>.<?php echo get_the_date( 'y', $post->ID );?>
								</div>
								<h5><?php the_title();?></h5>
							</div>
				
							<div class="bottom cell grid-x align-middle">
	
									<span><strong>Read more</strong></span>
									<?php get_template_part('parts/svg','chev-right');?>
							</div>
						</div>
						
					<?php if( $disable_post == 'true' && !empty($ext_link) ):?>
						</a>
							
						<?php elseif( $disable_post == 'true' && empty($ext_link) ):?>
							
						<?php else:?>
						</a>
					<?php endif;?>
				</article>
			</div>
				
			<?php
			endwhile;
		
		endif;
		wp_reset_postdata(); 
		?>							
		</div>
	</div>
</section>



