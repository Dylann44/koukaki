<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

 ?>
 <!doctype html>
 <html <?php language_attributes(); ?>>
 
 <head>
     <meta charset="<?php bloginfo('charset'); ?>">


     <?php wp_head(); ?>
 </head>
 
 <body <?php body_class(); ?>>
     <?php wp_body_open(); ?>
     <div id="page" class="site">
         <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>
 
         <header id="masthead" class="site-header">
             <nav id="site-navigation" class="main-navigation">
                 <ul>
                     <li class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></li>
                 </ul>
                 <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                     <span class="line"></span>
                     <span class="line"></span>
                     <span class="line"></span>
                 </button>
                 <div id="menu">
                     <img class="image-menu logo-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo1.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
                     <img class="image-menu flower flower-menu-sunflower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'; ?>" alt="Un tournesol">
                     <img class="image-menu flower flower-menu-orchid" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?>" alt="Une Orchidée">
                     <img class="image-menu flower flower-menu-hibiscus" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus_footer.png'; ?>" alt="Un hibiscus orange">
                     <img class="image-menu flower flower-menu-random" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'; ?>" alt="Une fleur rose violette">
                     <img class="image-menu flower flower-menu-random2" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'; ?>" alt="Une fleur à multiples pétales orange">
                     <img class="image-menu cat cat-menu-orenjiiro" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/catorange.png'; ?>" alt="Un chat jaune qui s'appelle Orenjiiro">
                     <img class="image-menu cat cat-menu-jaakuna" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/catgris.png'; ?>" alt="Un chat gris qui s'appelle Jaakuna">
                     <img class="image-menu cat cat-menu-kawaneko" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/catbleu.png'; ?>" alt="Un chat bleu qui s'appelle Kawaneko">
                     <ul>
                         <li><a  href="#story">Histoire</a></li>
                         <li><a href="#carousel-section">Personnages</a></li>
                         <li><a href="#place">Lieu</a></li>
                         <li><a href="#studio">Studio Koukaki</a></li>
                     </ul>
                     <p class="image-menu menu-footer">STUDIO KOUKAKI</p>
                 </div>
 
             </nav><!-- #site-navigation -->
         </header><!-- #masthead -->
