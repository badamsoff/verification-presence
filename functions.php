<?php
function enqueue_custom_style() {
  wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/custom.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_style' );
?>