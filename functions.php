<?php

require get_template_directory().'/include/setup.php';


add_action('wp_enqueue_scripts', 'bp_theme_styles');
add_action('after_setup_theme', 'bp_after_setup');

?>