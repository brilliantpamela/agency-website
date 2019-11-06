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

      wp_register_style ('meanmenu', get_template_directory_uri() . '/css/meanmenu.css', array(), 1, 'all');
      wp_enqueue_style ('meanmenu');

      wp_register_style ('Animation', get_template_directory_uri() . '/css/aos.min.css', array(), 1, 'all');
      wp_enqueue_style ('Animation');

      wp_register_style ('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), 1, 'all');
      wp_enqueue_style ('owl.carousel');

      wp_register_style ('styles', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
      wp_enqueue_style ('styles');

      wp_register_style ('responsive', get_template_directory_uri() . '/css/responsive.css', array(), 1, 'all');
      wp_enqueue_style ('responsive');



}

/*

    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,500,700,900');
    </style>
   
   

  */

  add_action('wp_enqueue_scripts', 'load_stylesheets' );


  // Load scripts

  function addjs()
  {


          wp_register_script('jquery', get_template_directory_uri () . '/js/vendor/jquery-2.2.4.min.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('jquery');

          wp_register_script('popper', get_template_directory_uri () . '/js/popper.min.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('popper');

          wp_register_script('bootstrap', get_template_directory_uri () . '/js/bootstrap.min.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('bootstrap');

          wp_register_script('waypoints', get_template_directory_uri () . '/js/waypoints.min.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('waypoints');

          wp_register_script('counterup', get_template_directory_uri () . '/js/counterup.min.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('counterup');

          wp_register_script('meanmenu', get_template_directory_uri () . '/js/meanmenu.min.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('meanmenu');

          wp_register_script('animation', get_template_directory_uri () . '/js/aos.min.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('animation');

          wp_register_script('owl.carousel', get_template_directory_uri () . '/js/owl.carousel.min.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('owl.carousel');

          wp_register_script('scrollUp', get_template_directory_uri () . '/js/scrollUp.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('scrollUp');

          wp_register_script('magnific-popup', get_template_directory_uri () . '/js/magnific-popup.min.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('magnific-popup');

          wp_register_script('particle', get_template_directory_uri () . '/js/particles.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('particle');

          wp_register_script('apps', get_template_directory_uri () . '/js/app.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('apps');

          wp_register_script('main', get_template_directory_uri () . '/js/main.js
          ', array() , 1, 1, 1);
          wp_enqueue_script('main');






  }


