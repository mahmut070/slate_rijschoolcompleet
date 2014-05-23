<?php 

function custom_post_aanbieding() {
		$labels = array(
			'name'               => _x( 'Aanbiedingen', 'post type general name' ),
			'singular_name'      => _x( 'Aanbieding', 'post type singular name' ),
			'add_new'            => _x( 'Nieuwe aanbieding', 'book' ),
			'add_new_item'       => __( 'Voeg nieuwe aanbieding toe' ),
			'edit_item'          => __( 'Bewerk aanbieding' ),
			'new_item'           => __( 'Nieuw Aanbieding' ),
			'all_items'          => __( 'All aanbiedingen' ),
			'view_item'          => __( 'Bekijk aanbiedingen' ),
			'search_items'       => __( 'Zoek aanbiedingen' ),
			'not_found'          => __( 'No products found' ),
			'not_found_in_trash' => __( 'No products found in the Trash' ), 
			'parent_item_colon'  => '',
			'menu_name'          => 'Aanbiedingen'
		);
 
		$args = array(
			'labels'        => $labels,
			'description'   => 'Aanbiedingen kunnen hier worden toegevoegd.',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
		);
		register_post_type( 'aanbieding', $args );	


}

add_action( 'init', 'custom_post_aanbieding' );

//Remove fixed width and height http://css-tricks.com/snippets/wordpress/remove-width-and-height-attributes-from-inserted-images/
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

//Slider 
function custom_post_slider() {
		$labels = array(
			'name'               => _x( 'Slider', 'post type general name' ),
			'singular_name'      => _x( 'Slider', 'post type singular name' ),
			'add_new'            => _x( 'Nieuwe slide', 'book' ),
			'add_new_item'       => __( 'Voeg nieuwe slider afbeelding toe' ),
			'edit_item'          => __( 'Bewerk slide' ),
			'new_item'           => __( 'Nieuw Slider afbeelding' ),
			'all_items'          => __( 'All slider afbeeldingen' ),
			'view_item'          => __( 'Bekijk slider afbeeldingen' ),
			'search_items'       => __( 'Zoek afbeeldingen' ),
			'not_found'          => __( 'No products found' ),
			'not_found_in_trash' => __( 'No products found in the Trash' ), 
			'parent_item_colon'  => '',
			'menu_name'          => 'Slider'
		);
 
		$args = array(
			'labels'        => $labels,
			'description'   => 'Slider afbeeldingen kunnen hier worden toegevoegd.',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
		);
		register_post_type( 'slider', $args );	
}

add_action( 'init', 'custom_post_slider' );

$includes_path = TEMPLATEPATH . '/includes/';
require_once ($includes_path . 'navigation-walker.php');
register_nav_menu( 'sidemenu', 'Side Menu' );

add_filter( 'comments_array', 'array_reverse' );
?>