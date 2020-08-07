<?php

// Enable Post Thumbnails
add_theme_support( 'post-thumbnails' );

function searchfilter($query) {
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post', 'page'));
    }
return $query;
}

add_filter('pre_get_posts','searchfilter');

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'GLTR' ),
) );


// Register Widgets
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home Sidebar',
		'id'            => 'home_sidebar',
		'before_widget' => '<div class="sidebar-section">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="postHeading">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Post Sidebar',
		'id'            => 'post_sidebar',
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="pageHeading">',
		'after_title'   => '</h3>',
	) );

}

add_action( 'widgets_init', 'arphabet_widgets_init' );

?>