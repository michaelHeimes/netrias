<section class="page-banner banner has-bg grid-x align-middle">
	<div class="bg" style="background-image: url(<?php the_sub_field('background_image');?>);"></div>
	<div class="bg mask"></div>
	<div class="cell">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12">
					<div class="inner">
						<?php if( $alt_title = get_sub_field('alternative_title')):?>
							<h1 class="white"><?php echo $alt_title;?></h1>
						<?php else:?>
							<h1 class="white"><?php the_title();?></h1>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>