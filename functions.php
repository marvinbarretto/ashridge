<?php

  function scripts()
  {

    
    wp_register_style('style', get_template_directory_uri() . '/dist/css/app.css', [], 1, 'all');
    wp_register_style('materialize', get_template_directory_uri() . '/vendor/materialize.css', [], 1, 'all');
    wp_register_style('font-regular', get_template_directory_uri() . '/fonts/TeXGyreAdventorRegular/style.css', [], 1, 'all');
    wp_register_style('font-bold', get_template_directory_uri() . '/fonts/TeXGyreAdventorBold/style.css', [], 1, 'all');
    
    wp_enqueue_style('style');
    wp_enqueue_style('materialize');

    wp_enqueue_style('font-regular');
    wp_enqueue_style('font-bold');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/js/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');
  }
  add_action('wp_enqueue_scripts', 'scripts');


  // Theme Options
  add_theme_support('menus');

  // Menus
  register_nav_menus(
    array(
      'primary-nav' => 'Desktop Location',
      'mobile-menu' => 'Mobile Location',
      'footer-nav' => 'Footer Location'
    )
  )
?>