<?php
/**
 * Agency Website functions and definitions
 *
 * @package agency-website
 */

if ( ! function_exist( 'agency_website_setup' ) ) :
    function agency_website_setup(){
      add_theme_support( 'automatic-feed-links' );
      add_theme_support( 'title-tag' );
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      ) );
      add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
      ) );
      register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'agency-website' ),
		) );
    }
endif;
add_action( 'after_setup_theme', 'agency_website_setup' );
