<?php

if ( ! \defined( 'ABSPATH' ) ) { exit; }

//Setup some theme-level constants to make life easier elsewhere
define( 'TPP_THEME_FILE', __FILE__ );
define( 'TPP_THEME_PATH', __DIR__ );
define( 'TPP_THEME_URL',  get_bloginfo( 'template_directory' ) );

require_once TPP_THEME_PATH . '/includes/autoload.php';

//Generally shared across all themse
require_once TPP_THEME_PATH . '/includes/vendi-base.php';

//General hooks
require_once TPP_THEME_PATH . '/includes/hooks.php';

//Global functions
require_once TPP_THEME_PATH . '/includes/global-functions.php';



//Navigation Walker
require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';


// Automatic Sub Nav creation
require_once get_template_directory() . '/inc/sub-nav.php';

// Customizer Options
require get_template_directory() . '/inc/customizer.php';

// Advanced Custom Fields
// require get_template_directory() . '/inc/custom-fields.php';




