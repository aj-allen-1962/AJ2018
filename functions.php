<?php

function My_Resources () {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'My_Resources');

// navigation menus
register_nav_menus (array (
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),

	));

// Function to add left column
  function open_left_column() {
    return ('<div class="left-column">');
}
add_shortcode('left-open', 'open_left_column');

// Function to close left column
  function close_left_column() {
    return ('</div><!-- close left column -->');
}
add_shortcode('left-close', 'close_left_column');


// Function to add right column
  function open_right_column() {
    return ('<div class="right-column">');
}
add_shortcode('right-open', 'open_right_column');

// Function to close right column
  function close_right_column() {
    return ('</div><!-- close right column -->');
}
add_shortcode('right-close', 'close_right_column');

//Function to add right floated callout box


 function float_right() {
    return ('<div class="float-right">');
}
add_shortcode('float-right', 'float_right');

// Function to close right column
  function float_right_close() {
    return ('</div><!-- close right float -->');
}
add_shortcode('float-right-close', 'float_right_close');

