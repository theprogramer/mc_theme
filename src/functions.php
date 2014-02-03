<?php

/****************************************
Theme Setup
 *****************************************/

require_once(get_template_directory() . '/lib/init.php');
require_once(get_template_directory() . '/lib/theme-helpers.php');
require_once(get_template_directory() . '/lib/theme-functions.php');
require_once(get_template_directory() . '/lib/theme-comments.php');
require_once('wp_bootstrap_navwalker.php');

/****************************************
Misc Theme Functions
 *****************************************/

/**
 * Define custom post types
 */
add_action( 'init', 'register_cpt_attorney' );
function register_cpt_attorney() {

    $labels = array( 
        'name' => _x( 'Attorneys', 'attorney' ),
        'singular_name' => _x( 'Attorney', 'attorney' ),
        'add_new' => _x( 'Add New', 'attorney' ),
        'add_new_item' => _x( 'Add New Attorney', 'attorney' ),
        'edit_item' => _x( 'Edit Attorney', 'attorney' ),
        'new_item' => _x( 'New Attorney', 'attorney' ),
        'view_item' => _x( 'View Attorney', 'attorney' ),
        'search_items' => _x( 'Search Attorneys', 'attorney' ),
        'not_found' => _x( 'No attorneys found', 'attorney' ),
        'not_found_in_trash' => _x( 'No attorneys found in Trash', 'attorney' ),
        'parent_item_colon' => _x( 'Parent Attorney:', 'attorney' ),
        'menu_name' => _x( 'Attorneys', 'attorney' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'custom-fields' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'attorney', $args );
}


/**
 * Define custom post type capabilities for use with Members
 */
function mb_add_post_type_caps()
{
    // mb_add_capabilities( 'portfolio' );
}

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * Taken with thanks from the "Twenty Twelve" theme.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function wildly_minimalistic_wp_title($title, $sep)
{
    global $paged, $page;

    if (is_feed()) {
        return $title;
    }

    // Add the site name.
    $title .= get_bloginfo('name');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');

    if ($site_description && (is_home() || is_front_page())) {
        $title = "$title $sep $site_description";
    }

    // Add a page number if necessary.
    if ($paged >= 2 || $page >= 2) {
        $title = "$title $sep " . sprintf(__('Page %s', 'wildly-minimalistic'), max($paged, $page));
    }

    return $title;
}

add_filter('wp_title', 'wildly_minimalistic_wp_title', 10, 2);

/**
 * Load Google Fonts to use in Tiny MCE
 *
 * @param $mce_css string
 * @return string
 */
function wildly_minimalistic_mce_css($mce_css)
{
    $protocol = is_ssl() ? 'https' : 'http';

    $mce_css .= ', ' . $protocol . '://fonts.googleapis.com/css?family=Lato:300,300italic';

    return $mce_css;
}

add_filter('mce_css', 'wildly_minimalistic_mce_css');
