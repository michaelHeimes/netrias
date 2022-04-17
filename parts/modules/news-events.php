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
			
			<div class="grid-card cell grid-x flex-direction-column">
				<div class="inner white-bg">
					<?php if( (get_field('type') == 'news')):?>
						<div class="thumb-wrap">
							<?php echo get_the_post_thumbnail( $post_id, 'full' ); ;?>
						</div>
						<div class="title-wrap">
							<h3><?php the_title();?></h3>
						</div>
					<?php endif;?>
					<?php if( (get_field('type') == 'event')):?>
						<div class="title-dates">
							<h3><?php the_title();?></h3>
							<div class="h3"><?php the_field('dates');?></div>
						</div>
						<div class="description">
							<?php the_field('description');?>
						</div>
					<?php endif;?>
				</div>
			</div>
				
			<?php
			endwhile;
		
		endif;
		wp_reset_postdata(); 
		?>							
		</div>
	</div>
</section>