<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package team-sieron
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
<?php wp_body_open(); ?>
<div class="container">
    <div class="mobileMenu center">
        <button class="mobileMenu__close" onclick="closeMenu()">
            &times;
        </button>

        <div class="mobileMenu__inner">
            <img class="mobileMenu__logo" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/logo-contact.svg"; ?>" alt="logo" />

            <a href="#service" onclick="closeMenu()" class="mobileMenu__item">
                Service
            </a>
            <a href="#portfolio" onclick="closeMenu()" class="mobileMenu__item">
                Portfolio
            </a>
            <a href="#kontakt" onclick="closeMenu()" class="mobileMenu__item">
                Kontakt
            </a>
        </div>
    </div>