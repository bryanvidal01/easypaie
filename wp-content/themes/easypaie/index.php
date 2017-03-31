<?php get_header();
?>

<div class="masque"></div>
<div class="big-masque"></div>
<div class="header">
	<ul class="social-share">
		<li>
			<a href="mailto:bryan.vidal@hetic.net">Contact</a>
		</li>
		<li>
			<a href="https://dribbble.com/Bryanvidal" target="_blank">Dribbble</a>
		</li>
	</ul>
	<div class="logo">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" />
	</div>
	<div class="menu">
		<div class="barre"></div>
		<div class="barre"></div>
		<div class="barre"></div>
	</div>
</div>

<div class="scroll-mouse">
	<div class="container">
		<div class="point"></div>
		<div class="point"></div>
		<div class="point"></div>
	</div>
</div>

<div id="fullpage">

<?php
	$loop = new WP_Query( array( 'post_type' => 'projet', 'posts_per_page' => 30 ) );
	$i = 1;
	while ( $loop->have_posts() ) : $loop->the_post(); $i++;?>
	 	<div class="section">
			<div class="slide">
				<div class="background-project" style="background-image: url('<?php echo get_field('background_project'); ?>')"></div>
				<div class="container-text">
					<h2 class="title-slide"><?php echo get_the_title(); ?></h2>
					<div class="description-slide">
						<?php echo get_field("information_project"); ?>
					</div>
					<a href="<?php echo get_the_permalink(); ?>" class="link-slide">Voir le projet</a>
				</div>
				<div class="round-background" style="background: <?php echo get_field('couleur_rond'); ?>;"></div>


				<?php $prev_post = get_previous_post();
				if (!empty( $prev_post )): ?>
					<div class="number-slide">
						<div class="number"><?php if($i < 9) : echo "0"; endif; ?><?php echo $i; ?></div>
						<div class="next-project"><?php echo $prev_post->post_title; ?></div>
						<div class="ico-arrow-bottom">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-bottom.png" width="8px">
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
