<?php

//thumnails de los post
if (function_exists ('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

//Navbar

if(function_exists ('register_nav_menus')){
    register_nav_menus(array(
        'header_menu' => 'Menu Principal',
        'social_menu' => 'Menu Social'
    ));
}

add_filter( 'nav_menu_link_attributes', 'class_main_nav', 10, 3);
function class_main_nav ($atts, $item, $args) {
  $class = 'nav-item nav__item';
  $atts['class'] = $class; 
  return $atts;
}

?>