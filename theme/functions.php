<?php

/**
 * Detect if is an ajax request
 */

function isAjax(){
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    return true;
  } else {
    return false;
  }
}

/**
 * Loading custom scripts files
 */

function theme_scripts() {
  wp_enqueue_script( 'theme-core', get_stylesheet_directory_uri() . '/core.js' );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
?>