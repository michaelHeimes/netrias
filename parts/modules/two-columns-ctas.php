<section class="two-col-ctas">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
		<?php if( have_rows('ctas') ):?>
			<?php while ( have_rows('ctas') ) : the_row();?>	
				<div class="single-cta cell small-12 medium-6">
					<div class="inner">
						<div class="grid-x grid-padding-x align-middle">
							<div class="left cell small-12 large-5">
								<?php 
								$image = get_sub_field('image');
								if( !empty( $image ) ): ?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</div>
							<div class="cell small-12 large-7">
								<h3><?php the_sub_field('heading');?></h3>
								<?php 
								$link = get_sub_field('link');
								if( $link ): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
										<span><?php echo esc_html( $link_title ); ?></span>
										<?php get_template_part('parts/svg','chev-right');?>
									</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>	
			<?php endwhile;?>
		<?php endif;?>				
		</div>
	</div>
</section>
