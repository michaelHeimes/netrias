<section class="centered-cta secondary-bg">
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 tablet-8 tablet-offset-2 large-6 large-offset-3 text-center">		
			<h2 class="white"><?php the_sub_field('heading');?></h2>
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
	</div>			
</section>