<?php
/**
 * Agency Website functions and definitions
 *
 * @package agency-website
 */

function load_stylesheets()
{

      wp_register_style ('icon', get_template_directory_uri() . '/img/favicon.png', array(), 1, 'all');
      wp_enqueue_style ('icon');

      wp_register_style ('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
      wp_enqueue_style ('bootstrap');

      wp_register_style ('fontawesome', get_template_directory_uri() . 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', array(), 1, 'all');
      wp_enqueue_style ('fontawesome');

      wp_register_style ('Meanmenu', get_template_directory_uri() . '/css/meanmenu.css', array(), 1, 'all');
      wp_enqueue_style ('Meanmenu');

      wp_register_style ('Animation', get_template_directory_uri() . '/css/aos.min.css', array(), 1, 'all');
      wp_enqueue_style ('Animation');

      wp_register_style ('Owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), 1, 'all');
      wp_enqueue_style ('Owlcarousel');

      wp_register_style ('Main', get_template_directory_uri() . '/style.css', array(), 1, 'all');
      wp_enqueue_style ('Main');



}

/*

    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,500,700,900');
    </style>
   
   
  
    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
  */

  add_action('wp_enqueue_scripts', 'load_stylesheets' );