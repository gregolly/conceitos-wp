
<?php

function bp_theme_styles(){
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}

function bp_after_setup(){
 add_theme_support('menus');

 register_nav_menu('primary', __('Primary Menu', 'tema-conceito'));
 register_nav_menu('footer', 'Menu Rodapé');
}