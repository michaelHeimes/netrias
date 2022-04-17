<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<?php 
		if( have_rows('page_modules') ):
			while ( have_rows('page_modules') ) : the_row();
				if( get_row_layout() == 'home_hero' ):
					get_template_part('parts/modules/home-hero');
				elseif( get_row_layout() == 'centered_cta' ):
					get_template_part('parts/modules/centered-cta');
				elseif( get_row_layout() == 'banner' ):
					get_template_part('parts/modules/page-banner');
				elseif( get_row_layout() == 'form' ):
					get_template_part('parts/modules/form');
				elseif( get_row_layout() == 'intro_copy' ):
					get_template_part('parts/modules/intro-copy');
				elseif( get_row_layout() == 'copylinkimage' ):
					get_template_part('parts/modules/copylinkimage');
				elseif( get_row_layout() == 'resources' ):
					get_template_part('parts/modules/resources');
				elseif( get_row_layout() == 'jobs' ):
					get_template_part('parts/modules/jobs');
				elseif( get_row_layout() == 'centered_icontext_cards' ):
					get_template_part('parts/modules/icon-text-cards');
				elseif( get_row_layout() == 'news_&_events' ):
					get_template_part('parts/modules/news-events');
				elseif( get_row_layout() == 'tabbed_content' ): 
					get_template_part('parts/modules/tabbed-content');
				elseif( get_row_layout() == 'testimonials' ): 
					get_template_part('parts/modules/testimonials');
				elseif( get_row_layout() == 'two-column_cta' ): 
					get_template_part('parts/modules/two-columns-ctas');
				endif;
			endwhile;
		endif;
	?>		
					
</article> <!-- end article -->