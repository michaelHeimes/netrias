<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header page-banner banner has-bg grid-x align-middle">
		<div class="bg secondary-bg"></div>
		<div class="cell">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="cell small-12">
						<div class="inner">
						<h1 class="entry-title single-title white" itemprop="headline"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12 tablet-10 tablet-offset-1">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
																			
</article> <!-- end article -->