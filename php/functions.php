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



?>
