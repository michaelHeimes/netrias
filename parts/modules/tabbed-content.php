<?php $tabbed_num = get_row_index();?>
<section class="tabbed-content">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell">
				<ul class="tabs" data-tabs id="tabs-<?php echo $tabbed_num;?>">
					<?php if( have_rows('tabs') ):?>
						<?php while ( have_rows('tabs') ) : the_row();?>
							<?php $row = get_row_index();?>
							<li class="tabs-title<?php if($row == 1):?> is-active<?php endif;?>"><a href="#panel-<?php echo $row ;?>" <?php if($row == 1):?>aria-selected="true"<?php endif;?>><?php the_sub_field('tab_title');?></a></li>
						  <?php endwhile;?>
					  <?php endif;?>
				</ul>
				<div class="tabs-content" data-tabs-content="tabs-<?php echo $tabbed_num;?>">
					<?php if( have_rows('tabs') ):?>
						<?php while ( have_rows('tabs') ) : the_row();?>
							<?php $row = get_row_index();?>
							<div class="tabs-panel<?php if($row == 1):?> is-active<?php endif;?>" id="panel-<?php echo $row ;?>">
								<div class="grid-x grid-padding-x">
									<div class="left cell small-12 medium-6">
										<div class="copy-wrap">
											<?php the_sub_field('copy');?>
										</div>
									</div>
									<div class="cell small-12 medium-6">
										<?php 
										$image = get_sub_field('image');
										if( !empty( $image ) ): ?>
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>													
								</div>
							</div>
						<?php endwhile;?>
					<?php endif;?>
				</div>  
			</div>
		</div>
	</div>
</section>