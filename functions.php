<?php

/****************************************
Theme Setup
 *****************************************/

require_once(get_template_directory() . '/lib/init.php');
require_once(get_template_directory() . '/lib/theme-helpers.php');
require_once(get_template_directory() . '/lib/theme-functions.php');
require_once(get_template_directory() . '/lib/theme-comments.php');

/****************************************
Misc Theme Functions
 *****************************************/

/**
 * Define custom post type capabilities for use with Members
 */
function mb_add_post_type_caps()
{
    // mb_add_capabilities( 'portfolio' );
}
