<section class="hero-banner banner has-bg grid-x align-middle">
	<div class="bg" style="background-image: url(<?php the_field('banner_background_image');?>);"></div>
	<div class="cell">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12">
					<div class="inner">
						<h1 class="white"><?php the_field('banner_heading');?></h1>
						<p class="white large-text"><?php the_field('banner_text');?></p>
						<?php 
						$link = get_field('banner_button_link');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
						<div class="link-wrap">
							<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>
					</div>
					<?php if( have_rows('read_more_link') ):?>
					<div class="bottom">
						<?php while ( have_rows('read_more_link') ) : the_row();?>	
							<?php 
							$link = get_sub_field('link');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>											
								<a class="grid-x align-bottom align-right text-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									<div class="left">
										<div class="title"><?php the_sub_field('title');?></div>
										<div class="link"><?php echo esc_html( $link_title ); ?></div>
									</div>
									<div class="right">
										<?php 
										$image = get_sub_field('image');
										if( !empty( $image ) ): ?>
										<div class="img-wrap">
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
										<?php endif; ?>
									</div>
								</a>
							<?php endif;?>
						<?php endwhile;?>
					</div>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
</section>