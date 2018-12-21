<?php
/**
 * Topbar layout
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Classes
$classes = array( 'clr' );

// Add container class if the top bar is not full width
if ( true != get_theme_mod( 'ocean_top_bar_full_width', false ) )  {
	$classes[] = 'container';
}

// If no content
if ( ! get_theme_mod( 'ocean_top_bar_content' ) )  {
	$classes[] = 'has-no-content';
}

// Turn classes into space seperated string
$classes = implode( ' ', $classes ); ?>

<?php do_action( 'ocean_before_top_bar' ); ?>


<?php do_action( 'ocean_after_top_bar' ); ?>
