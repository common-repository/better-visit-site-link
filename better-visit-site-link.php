<?php
/*
Plugin Name: Better Visit Site Link
Plugin URI: http://www.yourwpexpert.com/better-visit-site-link/
Description: Makes the "Visit Site" link always visible, and also open the link in a new tab/window.
Author: Your WP Expert
Version: 1.0
Author URI: http://www.yourwpexpert.com/
*/
    function better_visit_site_link() {
        global $wp_admin_bar;
        
        $wp_admin_bar->add_menu( array(
            'id'    => 'better-visit-link',
            'title'  => __( 'Visit Site' ),
			'meta' => array('target' => '_blank'),
            'href'  => site_url()
        ));

    }
    add_action( 'wp_before_admin_bar_render', 'better_visit_site_link' ); 
?>