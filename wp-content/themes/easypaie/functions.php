<?php add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'projet',
    array(
      'labels' => array(
        'name' => __( 'Projets' ),
        'singular_name' => __( 'Projet' )
      ),
      'public' => true
    )
  );
}
	
add_theme_support( 'post-thumbnails' );
add_image_size( '1800x1800', 1800, 1800, true ); // Hard Crop Mode

?>
