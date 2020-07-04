<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_script( 'stripe-js', 'https://js.stripe.com/v3/' );
	wp_enqueue_script( 'zip', 'https://ajaxzip3.github.io/ajaxzip3.js/' );
}
?>