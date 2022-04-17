<section class="intro-copy<?php if( get_sub_field('background_color')  == 'gray' ):?> gray-bg<?php endif;?><?php if(get_sub_field('remove_bottom_padding')):?> no-bp<?php endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-10 tablet-offset-1">
				<?php the_sub_field('intro_copy');?>
			</div>
		</div>
	</div>
</section>