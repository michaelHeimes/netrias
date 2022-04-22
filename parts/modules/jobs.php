<?php			
$args = array(  
	'post_type' => 'job',
	'post_status' => 'publish',
	'posts_per_page' => -1,
);

$loop = new WP_Query( $args ); $row = get_row_index();?>

<section class="career-tabs secondary-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2">
				<ul class="tabs" data-tabs id="career-tabs-<?php echo $row;?>">
				<?php $postTabCount = 0; while ( $loop->have_posts() ) : $postTabCount++; $loop->the_post();?>
					<li class="tabs-title<?php if($postTabCount == 1):?> is-active<?php endif;?>">
						<a class="white" href="#panel-<?php echo $postTabCount ;?>" <?php if($postTabCount == 1):?>aria-selected="true"<?php endif;?>><?php the_title();?></a>
					</li>
				<?php endwhile;?>
				</ul>
				<div class="tabs-content" data-tabs-content="career-tabs-<?php echo $row;?>">
					<?php $postContentCount = 0; while ( $loop->have_posts() ) : $postContentCount++; $loop->the_post();?>
						<div class="tabs-panel<?php if($postContentCount == 1):?> is-active<?php endif;?>" id="panel-<?php echo $postContentCount ;?>">
							<div class="copy-wrap">
								<h2><?php the_title();?></h2>
								<p><?php the_field('blurb_for_tab_card');?></p>
								<div class="btn-wrap">
								<a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									Explore This Opportunity
								</a>
								</div>
							</div>
						</div>
					<?php endwhile;?>
				</div>  
			</div>
		</div>
	</div>
</section>

<?php
wp_reset_postdata(); 
?>	