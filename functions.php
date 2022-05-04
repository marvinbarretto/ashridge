<?php

  function scripts()
  {    
    wp_register_style('style', get_template_directory_uri() . '/dist/css/app.css', [], 1, 'all');
    wp_register_style('materialize', get_template_directory_uri() . '/vendor/materialize.css', [], 1, 'all');
    wp_register_style('font-regular', get_template_directory_uri() . '/fonts/TeXGyreAdventorRegular/style.css', [], 1, 'all');
    wp_register_style('font-bold', get_template_directory_uri() . '/fonts/TeXGyreAdventorBold/style.css', [], 1, 'all');
    
    wp_enqueue_style('materialize');
    wp_enqueue_style('style');
    
    wp_enqueue_style('font-regular');
    wp_enqueue_style('font-bold');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/js/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');
  }
  add_action('wp_enqueue_scripts', 'scripts');


  // Theme Options
  add_theme_support('menus');
  add_theme_support('post-thumbnails');

  // Menus
  register_nav_menus(
    array(
      'primary-nav' => 'Desktop Location',
      'mobile-menu' => 'Mobile Location',
      'footer-nav' => 'Footer Location'
    )
  );

  // Custom image sizes
  // boolean is for a hard crop or not
  add_image_size('banner', 1920, 600, true);
  add_image_size('box', 640, 360, true );
  add_image_size('blog-large', 800, 400, true);
  add_image_size('blog-small', 300, 200, true);


  function titles_shortcode($atts, $content = null)
  {
    return $content;
  }
  add_shortcode('title', titles_shortcode);
  

  // Services
  function services_shortcode()
  {
    ob_start();
    get_template_part('includes/section', 'services');
    return ob_get_clean();
  }
  add_shortcode('services', services_shortcode);


  function create_service_pages()
  {
    $args = array(
      'labels' => array(
        'name' => 'Services',
        'singular_name' => 'Service',
      ),
      'hierarchical' => true,
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-star-filled',
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
      'rewrite' => array('slug' => 'our-services') 
    );
    register_post_type('services', $args);

  }
  add_action('init', 'create_service_pages');
?>