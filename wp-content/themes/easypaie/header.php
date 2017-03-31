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
	<script src="https://use.typekit.net/dbd5dzw.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<meta name="viewport" content="width=device-width">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/style.css" />
	<meta charset="UTF-8" />
	<title>Bryan Vidal Hetic<?php echo get_the_title(); ?></title>
	<meta name="description" content="Bryan Vidal, étudiant à Hetic, développeur front." />

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="menu-container">
	<div class="container-items">
		<?php
		$loop = new WP_Query( array( 'post_type' => 'projet', 'posts_per_page' => 30 ) );
		$i = 1;
		while ( $loop->have_posts() ) : $loop->the_post(); $i++;?>
			<a href="<?php echo the_permalink(); ?>" class="item-nav">
				<div class="background-project" style="background-image: url('<?php echo get_field('background_project'); ?>')"></div>
				<div class="background-project masque" style="background-image: url('<?php echo get_field('image_deux_navigation'); ?>')"></div>
				<div class="container-text">
					<h2 class="title-slide"><?php echo get_the_title(); ?><span class="category"><?php echo get_field("categorie_project"); ?></span></h2>
				</div>
			</a>
		<?php endwhile; ?>
	</div>
</div>
