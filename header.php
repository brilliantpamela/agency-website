<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="home">
        <div class="main-navigation sticky-header sticker">
            <div class="container">
                <div class="row">
                    <!-- logo-area-->
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <div class="logo-area">
                            <a href="index.html">
                                <img src="img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <!-- mainmenu-area-->
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="main-menu f-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a class="current" href="index.html">home<i class="fas fa-angle-down"></i></a>
                                        <ul class="dropdown dropdown-home">
                                            <li><a href="index.html">Home 1</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#about">about</a>
                                    </li>
                                    <li>
                                        <a href="#services">services</a>
                                    </li>
                                    <li>
                                        <a href="#projects">projects</a>
                                    </li>
                                    <li>
                                        <a href="#blog">blog</a>
                                    </li>
                                    <li>
                                        <a href="#contact">contact us</a>
                                    </li>
                                    <!-- dropdown menu-area-->
                                    <li>
                                        <a href="#" onclick="return false">pages <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown">
                                            <li><a href="about.html">about us</a></li>
                                            <li><a href="single-project.html">single projects</a></li>
                                            <li><a href="blog.html">our blog</a></li>
                                            <li><a href="single-blog.html">single blog</a></li>
                                            <li><a href="contact.html">contact us</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu-->
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>