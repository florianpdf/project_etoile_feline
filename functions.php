<?php

include_once plugin_dir_path( __FILE__ ).'/widgets/youtube_widget.php';

// Initialisation des fonctions
add_action('init', 'add_menu');
add_action('widgets_init','add_sidebar_widget');
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 825, 510, true );


// Création des menus
function add_menu(){
	register_nav_menus( array(
		'Top' => 'Navigation principale',
		'side_histoire' => 'Side nav, notre histoire',
		'side_other' => 'Side nav general'
	));
}

// Ajout des script's
function add_script(){
    echo '<script src="' . get_template_directory_uri() . '/assets/js/bootstrap.js"></script>';
    echo '<script src="' . get_template_directory_uri() . '/assets/js/main.js"></script>';
}

function add_sidebar_widget()
{
	register_sidebar(array(
		'id' => 'sidebar_widget',
		'name' => 'Sidebar',
		'description' => 'Apparait dans la sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<iframe width="100%" src="',
		'after_title' => '" frameborder="0" allowfullscreen></iframe>'
	));
}

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
	'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );

/*
 * Enable support for Post Formats.
 *
 * See: https://codex.wordpress.org/Post_Formats
 */
add_theme_support( 'post-formats', array(
	'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
) );