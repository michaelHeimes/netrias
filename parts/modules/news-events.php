<section class="news-events gray-bg">
	<div class="grid-container">
		<div class="top grid-x grid-padding-x medium-flex-dir-row-reverse">
			<div class="cell small-12 medium-shrink">
				<h2 class="small-caps"><?php the_field('news_small_caps_heading', 'option');?></h2>
			</div>
			<div class="cell small-12 medium-auto">
				<h3 class="h2"><?php the_field('news_heading', 'option');?></h3>
			</div>
		</div>
		<div class="card-grid grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-4">
		<?php			
		$args = array(  
			'post_type' => 'news_event',
			'post_status' => 'publish',
			'posts_per_page' => -1,
		);
		
		$loop = new WP_Query( $args ); 
		
		if ( $loop->have_posts() ) : 
			
			while ( $loop->have_posts() ) : $loop->the_post();?>
			
			<div class="grid-card cell<?php if (has_post_thumbnail( $post->ID ) ): ?> has-thumb<?php endif;?>">
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
					
						<div class="inner white-bg">
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
								<div class="thumb-wrap">
									<?php echo get_the_post_thumbnail( $post_id, 'news-thumb' ); ;?>
								</div>
								<div class="title-wrap">
									<h3 class="h5"><?php the_title();?></h3>
								</div>
							<?php else:?>
								<div class="title-dates">
									<h3 class="h5"><?php the_title();?></h3>
									<div class="h3"><?php the_field('dates');?></div>
								</div>
								<div class="description">
									<p><?php the_field('description');?></p>
								</div>
							<?php endif;?>
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
</section>