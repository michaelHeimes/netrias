<section class="copy-img-link">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="left cell small-12 medium-6">
				<h2 class="small-caps">
					<?php the_sub_field('small_caps_heading');?>
				</h2>
				<h3 class="h2"><?php the_sub_field('heading');?></h3>
				<div class="copy-wrap large-text">
					<?php the_sub_field('copy');?>
				</div>
				<?php 
				$link = get_sub_field('button_link');
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
			<div class="right cell small-12 medium-6">
				<?php 
				$image = get_sub_field('image');
				if( !empty( $image ) ): ?>
				<div class="img-wrap">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>