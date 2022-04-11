
   
<?php
/*
Template Name: Why Netrias
*/

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
				
				<?php get_template_part('parts/content', 'icon-text-cards');?>
				
				<?php get_template_part('parts/content', 'testimonials');?>
				
				<?php get_template_part('parts/content', 'news-events');?>

			</main> <!-- end #main -->
			
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->
		
</article> <!-- end article -->

<?php get_footer(); ?>