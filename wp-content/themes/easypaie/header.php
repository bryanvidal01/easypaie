<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/style.css" />
	<meta charset="UTF-8" />
	<title>Easypaie | <?php echo get_the_title(); ?></title>
	<meta name="description" content="Easypaie vous simplifie la paie !" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
					</div>
				</div>
				<div class="col-sm-7">
					<div class="navigation">
						<ul>
							<li>
								<a href="#">Accueil</a>
							</li>
							<li>
								<a href="#">Nos atouts</a>
							</li>
							<li>
								<a href="#">Notre mission</a>
							</li>
							<li>
								<a href="#">Nos packs</a>
							</li>
							<li>
								<a href="#">Contact</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 text-right">
					<div class="phone">
						01 53 40 53 40
					</div>
				</div>
			</div>
		</div>
	</header>
