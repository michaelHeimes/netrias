<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;800&display=swap" rel="stylesheet">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>
				
		<header class="header" role="banner">
					
			 <!-- This navs will be applied to the topbar, above all content 
				  To see additional nav styles, visit the /parts directory -->
			 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

		</header> <!-- end .header -->
		
		
		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<?php if(is_page_template('page-templates/page-home.php')):?>
				<section class="hero-banner banner has-bg grid-x align-middle">
					<div class="bg" style="background-image: url(<?php the_field('banner_background_image');?>);"></div>
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12">
								<div class="inner">
									<h1 class="white"><?php the_field('banner_heading');?></h1>
									<p class="white large-copy"><?php the_field('banner_text');?></p>
									<?php 
									$link = get_field('banner_button_link');
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
						</div>
					</div>
				</section>
				<?php endif;?>