<?php

/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


// $debug = true;
// define('WP_DEBUG', $debug);
// define('WP_DEBUG_DISPLAY', $debug);
// @ini_set('display_errors', $debug);
// define('SCRIPT_DEBUG', $debug);



$understrap_includes = array(
	'/clearAdminPanel.php',
	'/optimizeResources.php',               //optymalizacja
	//'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	//'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	//'/template-tags.php',                   // Custom template tags for this theme.
	//'/pagination.php',                      // Custom pagination for this theme.
	//'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	//'/custom-comments.php',                 // Custom Comments file.
	//'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	//'/deprecated.php',                      // Load deprecated functions.
);

foreach ($understrap_includes as $file) {
	$filepath = locate_template('inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}



if (!defined('IMGS')) {
	define('IMGS', get_template_directory_uri() . "/imgs");
}

add_filter('upload_mimes', function ($mime_types) {
	$mime_types['svg'] = 'image/svg+xml';
	return $mime_types;
}, 1, 1);





add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
	global $wp_version;


	$filetype = wp_check_filetype($filename, $mimes);

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4);




function debugToDebug($data)
{
	file_put_contents(get_template_directory() . '/debug.log', var_dump($data, true), FILE_APPEND);
}
function my_custom_menu() {
    register_nav_menu('my-custom-menu',__( 'Menu header' ));
}
add_action( 'init', 'my_custom_menu' );


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page("Footer");
    
}

$understrap_includes = array(

	'/woocommerce.php',                     // Load WooCommerce functions.

);

foreach ($understrap_includes as $file) {
	$filepath = locate_template('inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}


add_filter( 'woocommerce_product_single_add_to_cart_text', 'change_single_add_to_cart_text' );
 
function change_single_add_to_cart_text() {
    return __( 'Dodaj do koszyka', 'woocommerce' );
}

add_filter(
	'site_option_upload_filetypes',
	function ( $filetypes ) {
	  $filetypes = explode( ' ', $filetypes );
	  if ( ! in_array( 'webp', $filetypes, true ) ) {
		$filetypes[] = 'webp';
	  }
	  $filetypes   = implode( ' ', $filetypes );
	  return $filetypes;
	}
  );
  define('ALLOW_UNFILTERED_UPLOADS', true); 