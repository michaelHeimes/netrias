
   
<?php
/*
Template Name: Solutions
*/
$fields = get_fields();
get_header(); ?>
			
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">
		<?php get_template_part('parts/content', 'page-banner');?>
	</header> <!-- end article header -->

	<div class="content" itemprop="text">
	
		<div class="inner-content">
	
			<main class="main" role="main">
				
				<div class="gray-bg">
					<?php get_template_part('parts/content', 'intro-copy');?>
				</div>
				
				<?php if( have_rows('solution_tabs') ):?>
				<section class="solution-tabs">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell">
								<ul class="tabs" data-tabs id="solution-tabs">
									<?php if( have_rows('solution_tabs') ):?>
										<?php while ( have_rows('solution_tabs') ) : the_row();?>
											<?php $row = get_row_index();?>
	  									  <li class="tabs-title<?php if($row == 1):?> is-active<?php endif;?>"><a href="#panel-<?php echo $row ;?>" <?php if($row == 1):?>aria-selected="true"<?php endif;?>><?php the_sub_field('tab_title');?></a></li>
								  		<?php endwhile;?>
								  	<?php endif;?>
								</ul>
								<div class="tabs-content" data-tabs-content="solution-tabs">
									<?php if( have_rows('solution_tabs') ):?>
										<?php while ( have_rows('solution_tabs') ) : the_row();?>
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
				<?php endif;?>
				
				<section class="centered-cta secondary-bg">
					<div class="grid-x grid-padding-x">
						<div class="cell small-12 tablet-8 tablet-offset-2 large-6 large-offset-3 text-center">		
							<h2 class="white"><?php echo $fields['ccta_heading'];?></h2>
							<?php 
							$link = $fields['ccta_button_link'];
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
				

				<?php if( have_rows('two-column_cta') ):?>
				<section class="two-col-ctas">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
					<?php while ( have_rows('two-column_cta') ) : the_row();?>
						<?php if( have_rows('ctas') ):?>
							<?php while ( have_rows('ctas') ) : the_row();?>	
								<div class="single-cta cell small-12 medium-6">
									<div class="grid-x grid-padding-x align-middle">
										<div class="left cell small-12 medium-6 tablet-5">
											<?php 
											$image = get_sub_field('image');
											if( !empty( $image ) ): ?>
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
										</div>
										<div class="cell small-12 medium-6 tablet-7">
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
							<?php endwhile;?>
						<?php endif;?>				
					<?php endwhile;?>
						</div>
					</div>
				</section>
				<?php endif;?>

			</main> <!-- end #main -->
			
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->
		
</article> <!-- end article -->

<?php get_footer(); ?>