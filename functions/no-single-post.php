<?php
// set post to noindex if external link
// https://wordpress.stackexchange.com/questions/192872/yoast-seo-plugin-set-no-index-to-a-post-automatically-when-a-post-is-set-to-st
function dg_update_external_link_posts($post_id, $post, $update) {
	if ( wp_is_post_revision( $post_id ) ) return;

	if (empty($post_id)) return;

	if ($_POST['_wp_http_referer'] == '/wp-admin/post-new.php') {
		$disable_single = (isset($_POST['acf']['field_625efdc8d82b5']) ? $_POST['acf']['field_625efdc8d82b5'] : false );
	} else {
		$disable_single = get_post_meta($post_id, 'disable_single_post', true);
	}
	
	if ($disable_single) {
		add_action( 'wpseo_saved_postdata', function() use ( $post_id ) { 
			update_post_meta( $post_id, '_yoast_wpseo_meta-robots-noindex', '1' );
		}, 999 );
	} else {
		add_action( 'wpseo_saved_postdata', function() use ( $post_id ) { 
			delete_post_meta( $post_id, '_yoast_wpseo_meta-robots-noindex' );
		}, 999 );
	}
}
add_action('save_post_news_event', 'dg_update_external_link_posts', 100, 3);
add_action('save_post_resource', 'dg_update_external_link_posts', 100, 3);

function my_redirect_function() {
	if(get_field('disable_single_post')){
		$external = get_field('external_link_url');
		if ($external) {
			wp_redirect( $external, 301 ); exit;
		} else {
		$home = esc_url( home_url());
			wp_redirect( $home, 301 ); exit;
		}
	}
}
add_action( 'template_redirect', 'my_redirect_function');