
   
<?php
/*
Template Name: Form
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
				
				<?php get_template_part('parts/content', 'intro-copy');?>
				
				<section class="form-wrap gray-bg">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1">
								Form Here
							</div>
						</div>
					</div>
				</section>

			</main> <!-- end #main -->
			
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->
		
</article> <!-- end article -->

<?php get_footer(); ?>