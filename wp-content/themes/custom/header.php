<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri() . "/assets/js/main.js"; ?>"></script>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
    <link rel='stylesheet' type='text/css' href='<?php echo get_stylesheet_uri()?>'>
</head>

<body>
		<?php
		wp_body_open();
		?>
    <header class='container navbar navbar-expand-lg navbar-dark sticky-top menu'><a href='/mayakovskogo22k1' class='navbar-brand'>
            <div class='logo'><?php require('logo.svg');?></div>
        </a><button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <nav class='navbar-nav ml-auto text-center menu__items'>
                
                <?php
                require_once('functions.php');

                $menuItems = array(
                    "/mayakovskogo22k1/about/" => "О проекте",
                    "/mayakovskogo22k1/activities/" => "Активности",
                    "/mayakovskogo22k1/news/" => "Новости",
                    "https://t.me/akiweis" => "<svg class='telegram__svg' id='Bold' enable-background='new 0 0 24 24' height='32' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='m12 24c6.629 0 12-5.371 12-12s-5.371-12-12-12-12 5.371-12 12 5.371 12 12 12zm-6.509-12.26 11.57-4.461c.537-.194 1.006.131.832.943l.001-.001-1.97 9.281c-.146.658-.537.818-1.084.508l-3-2.211-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953z'></path></svg>"
                );

                $request = $_SERVER['REQUEST_URI'];
                foreach ($menuItems as $link => $title) {
                    $isActive = $request == $link ? "active" : "";
                    echo ("<li class='nav-item text-center $isActive menu__item'><a class='nav-link' href='$link'>$title</a></li>");
                }

                ?>
            </nav>
        </div>
    </header>
<div class="fadeIn">
<div class="container mt-5 mb-5 main-content">
