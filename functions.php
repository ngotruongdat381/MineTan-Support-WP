<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

/**
 * Add addtion style and script files
 */

add_action( 'wp_enqueue_scripts', 'enqueue_my_styles', 1000);
function enqueue_my_styles() {
  wp_enqueue_style( 'addition-styles', get_theme_root_uri() . '/x-child/css/addition-styles.css' );
  wp_enqueue_script( 'addition-scripts', get_theme_root_uri() . '/x-child/js/addition-scripts.js' );
}