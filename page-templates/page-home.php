
   
<?php
/*
Template Name: Home
*/

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
							
	<header class="article-header">
		<?php get_template_part('parts/content', 'home-hero');?>
	</header> <!-- end article header -->

	<div class="content" itemprop="text">
	
		<div class="inner-content">
	
			<main class="main" role="main">
				
				<?php get_template_part('parts/content', 'icon-text-cards');?>
				
				<?php get_template_part('parts/content', 'testimonials');?>
				
				<section class="careers">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="left cell small-12 medium-6 large-5">
								<h2 class="small-caps">
									<?php the_field('careers_small_caps_heading');?>
								</h2>
								<h3 class="h2"><?php the_field('careers_heading');?></h3>
								<div class="copy-wrap large-text">
									<?php the_field('careers_copy');?>
								</div>
							</div>
							<div class="right cell small-12 medium-6 large-6 large-offset-1">
								<?php 
								$image = get_field('careers_image');
								if( !empty( $image ) ): ?>
								<div class="img-wrap">
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</section>
				
				<?php get_template_part('parts/content', 'news-events');?>

			</main> <!-- end #main -->
			
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->
		
</article> <!-- end article -->

<?php get_footer(); ?>