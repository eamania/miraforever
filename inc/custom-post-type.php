<?php // Register Custom Post Type

/*
-------------------------
ATTRAZIONI POST TYPE
-------------------------
*/

if ( ! function_exists('create_attrazioni') ) {

// Register Custom Post Type
	function create_attrazioni() {

		$labels = array(
			'name'                => _x( 'Attrazioni', 'Post Type General Name', 'text_domain' ),
			'singular_name'       => _x( 'Attrazione', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'           => __( 'Attrazioni', 'text_domain' ),
			'name_admin_bar'      => __( 'Post Attrazioni', 'text_domain' ),
			'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
			'all_items'           => __( 'All Items', 'text_domain' ),
			'add_new_item'        => __( 'Add New Item', 'text_domain' ),
			'add_new'             => __( 'Add New', 'text_domain' ),
			'new_item'            => __( 'New Item', 'text_domain' ),
			'edit_item'           => __( 'Edit Item', 'text_domain' ),
			'update_item'         => __( 'Update Item', 'text_domain' ),
			'view_item'           => __( 'View Item', 'text_domain' ),
			'search_items'        => __( 'Search Item', 'text_domain' ),
			'not_found'           => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
			);
$args = array(
	'label'               => __( 'Attrazione', 'text_domain' ),
	'description'         => __( 'le attrazioni di mirabilandia', 'text_domain' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
	'taxonomies'          => array( 'attrazioni_mirabilandia' ),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_position'       => 5,
	'show_in_admin_bar'   => true, 
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => true,		
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'post',
	'rewrite' => array( 'slug' => 'attrazioni-mirabilandia', 'with_front' => false ),

	);
register_post_type( 'attrazioni', $args );

}
add_action( 'init', 'create_attrazioni', 0 );

}
/*
-------------------------
ATTRAZIONI RIMOSSE POST TYPE
-------------------------
*/

if ( ! function_exists('create_attrazioni_rimosse') ) {

// Register Custom Post Type
	function create_attrazioni_rimosse() {

		$labels = array(
			'name'                => _x( 'Attrazioni Rimosse', 'Post Type General Name', 'text_domain' ),
			'singular_name'       => _x( 'Attrazione Rimossa', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'           => __( 'Attrazioni Rimosse', 'text_domain' ),
			'name_admin_bar'      => __( 'Post Attrazioni Rimosse', 'text_domain' ),
			'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
			'all_items'           => __( 'All Items', 'text_domain' ),
			'add_new_item'        => __( 'Add New Item', 'text_domain' ),
			'add_new'             => __( 'Add New', 'text_domain' ),
			'new_item'            => __( 'New Item', 'text_domain' ),
			'edit_item'           => __( 'Edit Item', 'text_domain' ),
			'update_item'         => __( 'Update Item', 'text_domain' ),
			'view_item'           => __( 'View Item', 'text_domain' ),
			'search_items'        => __( 'Search Item', 'text_domain' ),
			'not_found'           => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
			);
$args = array(
	'label'               => __( 'Attrazione Rimossa', 'text_domain' ),
	'description'         => __( 'le attrazioni rimosse da mirabilandia', 'text_domain' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
	'taxonomies'          => array( 'attrazioni_mirabilandia' ),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_position'       => 5,
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => true,		
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'post',
	'rewrite' => array( 'slug' => 'attrazioni-rimosse', 'with_front' => false ),
	);
register_post_type( 'attrazioni_rimosse', $args );

}
add_action( 'init', 'create_attrazioni_rimosse', 0 );

}

/*
-------------------------
ATTRAZIONI POST TYPE
-------------------------
*/

if ( ! function_exists('create_spettacoli') ) {

// Register Custom Post Type
	function create_spettacoli() {

		$labels = array(
			'name'                => _x( 'Spettacoli', 'Post Type General Name', 'text_domain' ),
			'singular_name'       => _x( 'Spettacolo', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'           => __( 'Spettacoli', 'text_domain' ),
			'name_admin_bar'      => __( 'Post Spettacoli', 'text_domain' ),
			'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
			'all_items'           => __( 'All Items', 'text_domain' ),
			'add_new_item'        => __( 'Add New Item', 'text_domain' ),
			'add_new'             => __( 'Add New', 'text_domain' ),
			'new_item'            => __( 'New Item', 'text_domain' ),
			'edit_item'           => __( 'Edit Item', 'text_domain' ),
			'update_item'         => __( 'Update Item', 'text_domain' ),
			'view_item'           => __( 'View Item', 'text_domain' ),
			'search_items'        => __( 'Search Item', 'text_domain' ),
			'not_found'           => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
			);
$args = array(
	'label'               => __( 'Spettacolo', 'text_domain' ),
	'description'         => __( 'gli spettacoli di mirabilandia', 'text_domain' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
	'taxonomies'          => array( 'spettacoli_mirabilandia' ),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_position'       => 5,
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => true,		
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'post',
	'rewrite' => array( 'slug' => 'spettacoli-mirabilandia', 'with_front' => false ),

	);
register_post_type( 'spettacoli', $args );

}
add_action( 'init', 'create_spettacoli', 0 );

}



/*
-------------------------
ATTRAZIONI TAXONOMY
-------------------------
*/
if ( ! function_exists( 'create_attrazioni_taxonomy' ) ) {

// Register Custom Taxonomy
	function create_attrazioni_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Attrazioni Taxonomy', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Attrazione Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Attrazioni Taxonomy', 'text_domain' ),
			'all_items'                  => __( 'All Items', 'text_domain' ),
			'parent_item'                => __( 'Parent Item', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
			'new_item_name'              => __( 'New Item Name', 'text_domain' ),
			'add_new_item'               => __( 'Add New Item', 'text_domain' ),
			'edit_item'                  => __( 'Edit Item', 'text_domain' ),
			'update_item'                => __( 'Update Item', 'text_domain' ),
			'view_item'                  => __( 'View Item', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( 'Popular Items', 'text_domain' ),
			'search_items'               => __( 'Search Items', 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
			);
$args = array(
	'labels'                     => $labels,
	'hierarchical'               => true,
	'public'                     => true,
	'show_ui'                    => true,
	'show_admin_column'          => true,
	'show_in_nav_menus'          => true,
	'show_tagcloud'              => true,
	'rewrite' => array( 'slug' => 'attrazioni-mirabilandia-category', 'with_front' => false ),

	);
register_taxonomy( 'attrazioni_mirabilandia', array( 'attrazioni', 'attrazioni_rimosse' ), $args );

}
add_action( 'init', 'create_attrazioni_taxonomy', 0 );

}

/*
-------------------------
spettacoli TAXONOMY
-------------------------
*/
if ( ! function_exists( 'create_spettacoli_taxonomy' ) ) {

// Register Custom Taxonomy
	function create_spettacoli_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Spettacoli Taxonomy', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Spettacolo Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Spettacoli Taxonomy', 'text_domain' ),
			'all_items'                  => __( 'All Items', 'text_domain' ),
			'parent_item'                => __( 'Parent Item', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
			'new_item_name'              => __( 'New Item Name', 'text_domain' ),
			'add_new_item'               => __( 'Add New Item', 'text_domain' ),
			'edit_item'                  => __( 'Edit Item', 'text_domain' ),
			'update_item'                => __( 'Update Item', 'text_domain' ),
			'view_item'                  => __( 'View Item', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( 'Popular Items', 'text_domain' ),
			'search_items'               => __( 'Search Items', 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
			);
$args = array(
	'labels'                     => $labels,
	'hierarchical'               => true,
	'public'                     => true,
	'show_ui'                    => true,
	'show_admin_column'          => true,
	'show_in_nav_menus'          => true,
	'show_tagcloud'              => true,
	'rewrite' => array( 'slug' => 'spettacoli-mirabilandia-category', 'with_front' => false ),

	);
register_taxonomy( 'spettacoli_mirabilandia', array( 'spettacoli', 'spettacoli_rimossi' ), $args );

}
add_action( 'init', 'create_spettacoli_taxonomy', 0 );

}



?> 