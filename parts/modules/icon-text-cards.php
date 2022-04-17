<?php if( have_rows('centered_icontext_cards') ):?>
<section class="icon-text-cards">
	<div class="grid-container">
		<div class="grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-3 align-center">
		<?php while ( have_rows('centered_icontext_cards') ) : the_row();?>	
		<div class="single-card cell grid-x flex-dir-column align-middle">
			<div class="inner text-center">
				<?php 
				$image = get_sub_field('icon');
				if( !empty( $image ) ): ?>
				<div class="icon-wrap">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div>
				<?php endif; ?>
				<div class="text-wrap">
					<?php the_sub_field('text');?>
				</div>
				<?php 
				$link = get_sub_field('link');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
				<div class="link-wrap">
					<a class="grid-x align-middle align-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<span><strong><?php echo esc_html( $link_title ); ?></strong></span>
						<?php get_template_part('parts/svg','chev-right');?>
				</a>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<?php endwhile;?>
		</div>
	</div>
</section>
<?php endif;?>