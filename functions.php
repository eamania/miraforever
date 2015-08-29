<?php
/**
 * miraforever functions and definitions
 *
 * @package miraforever
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	//$content_width = 640; /* pixels */
}

if ( ! function_exists( 'miraforever_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function miraforever_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on miraforever, use a find and replace
	 * to change 'miraforever' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'miraforever', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'miraforever' ),
		) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
		) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'miraforever_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
}
endif; // miraforever_setup
add_action( 'after_setup_theme', 'miraforever_setup' );



/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function miraforever_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'miraforever' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		) );

	register_sidebar( array(
		'name'          => __( 'home', 'miraforever' ),
		'id'            => 'sidebar-home',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		) );

	register_sidebar( array(
		'name'          => __( 'footer_one', 'miraforever' ),
		'id'            => 'footer_one',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		) );

	register_sidebar( array(
		'name'          => __( 'footer_two', 'miraforever' ),
		'id'            => 'footer_two',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		) );

	register_sidebar( array(
		'name'          => __( 'footer_three', 'miraforever' ),
		'id'            => 'footer_three',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		) );

	register_sidebar( array(
		'name'          => __( 'footer_four', 'miraforever' ),
		'id'            => 'footer_four',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		) );
}
add_action( 'widgets_init', 'miraforever_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function miraforever_scripts() {
	//wp_enqueue_style('megamenu-style', get_template_directory_uri() . '/megamenu.css', true);
	wp_enqueue_style( 'miraforever-style', get_stylesheet_uri() );

	wp_deregister_script('jquery');
	wp_register_script('jquery', ("https://code.jquery.com/jquery-1.11.3.js"), true);



	wp_enqueue_script('jquery');
	//wp_enqueue_script( 'miraforever', get_template_directory_uri() . '/js/navigation.js', array(), '', true );
	//wp_enqueue_script( 'miraforever-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), NULL, true );
	wp_enqueue_script( 'miraforever-bootstrap', get_template_directory_uri() . '/inc/bootstrap/js/bootstrap.min.js', true );
	//wp_enqueue_script( 'carousell', get_template_directory_uri() . '/inc/carouselljs/js/owl.carousel.js', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'miraforever_scripts' );

/**
 * Register the required plugins for this theme.
 * TGM_Plugin_Activation class constructor.
 */
add_action( 'tgmpa_register', 'miraforever_register_required_plugins' );

function miraforever_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin pre-packaged with a theme.

    	array(
    		'name'      => 'Max Mega Menu',
    		'slug'      => 'megamenu',
    		'required'  => true,
    		'force_activation' => true,
    		),

    	);

/**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
$config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
        	'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
        	'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
            )
);

tgmpa( $plugins, $config );

}

add_filter( 'jpeg_quality', create_function( '', 'return 80;' ) );


if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150, true ); // dimensioni di default della miniatura
    }

    if ( function_exists( 'add_image_size' ) ) { 
    	add_image_size( 'thumbnails_header', 370, 280, true ); //   home page header
    	add_image_size( 'thumbnails_header_background', 1600, 900, true ); //home page header
    	add_image_size( 'thumbnails_rectangle', 350, 150, true); // last news
    	add_image_size( 'thumbnails_square', 350, 315, true); // last news
    	add_image_size( 'thumbnails_rectangle_big', 305, 260, true); // novelty
    	//add_image_size( $name, $width, $height, $crop );
    }




/**
 * Get taxonomies terms links.
 *
 * @see get_object_taxonomies()
 */
function wpdocs_custom_taxonomies_terms_links() {
    // Get post by post ID.
	$post = get_post( $post->ID );

    // Get post type by post.
	$post_type = $post->post_type;

    // Get post type taxonomies.
	$taxonomies = get_object_taxonomies( $post_type, 'objects' );

	$out = array();

	foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){

        // Get the terms related to post.
		$terms = get_the_terms( $post->ID, $taxonomy_slug );


		if ( ! empty( $terms ) ) {
			foreach ( $terms as $term ) {
				$out[] = $term->name ;
				if ($term != end($terms)) {
					$out[] =  ", ";
				}
				else {
					
					
				}

			}

		}


	}
	return implode( $out );
}




//custom post type and taxonomy 
function attrazioni_taxonomy() {

	$labels = array(
		'name'                       => 'Attrazioni',
		'singular_name'              => 'Attrazione',
		'menu_name'                  => 'Attrazioni',
		'all_items'                  => 'All Items',
		'parent_item'                => 'Parent Item',
		'parent_item_colon'          => 'Parent Item:',
		'new_item_name'              => 'New Item Name',
		'add_new_item'               => 'Add New Item',
		'edit_item'                  => 'Edit Item',
		'update_item'                => 'Update Item',
		'view_item'                  => 'View Item',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Items',
		'search_items'               => 'Search Items',
		'not_found'                  => 'Not Found',
		);
	$rewrite = array(
		'slug'                       => 'attrazioni-mirabilandia-category',
		'with_front'                 => false,
		'hierarchical'               => true,
		);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		);
	register_taxonomy( 'attrazioni_mirabilandia', array( 'attrazioni', 'attrazioni_rimosse' ), $args );

}

function spettacoli_taxonomy() {

	$labels = array(
		'name'                       => 'Spettacoli',
		'singular_name'              => 'Spettacolo',
		'menu_name'                  => 'Spettacoli',
		'all_items'                  => 'All Items',
		'parent_item'                => 'Parent Item',
		'parent_item_colon'          => 'Parent Item:',
		'new_item_name'              => 'New Item Name',
		'add_new_item'               => 'Add New Item',
		'edit_item'                  => 'Edit Item',
		'update_item'                => 'Update Item',
		'view_item'                  => 'View Item',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Items',
		'search_items'               => 'Search Items',
		'not_found'                  => 'Not Found',
		);
	$rewrite = array(
		'slug'                       => 'spettacoli-mirabilandia-category',
		'with_front'                 => false,
		'hierarchical'               => true,
		);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		);
	register_taxonomy( 'spettacoli_mirabilandia', array( 'spettacoli', 'spettacoli_rimossi' ), $args );

}


// Register Custom Post Type
function attrazioni() {

	$labels = array(
		'name'                => 'Attrazioni',
		'singular_name'       => 'Attrazione',
		'menu_name'           => 'Attrazioni',
		'name_admin_bar'      => 'Attrazioni',
		'parent_item_colon'   => 'Parent Item:',
		'all_items'           => 'All Items',
		'add_new_item'        => 'Add New Item',
		'add_new'             => 'Add New',
		'new_item'            => 'New Item',
		'edit_item'           => 'Edit Item',
		'update_item'         => 'Update Item',
		'view_item'           => 'View Item',
		'search_items'        => 'Search Item',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
		);
	$rewrite = array(
		'slug'                => 'attrazioni-mirabilandia',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
		);
	$args = array(
		'label'               => 'Attrazione',
		'description'         => 'Attrazioni di mirabilandia',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'attrazioni_taxonomy' ),
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
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
		);
	register_post_type( 'attrazioni', $args );

}


function attrazioni_rimosse() {

	$labels = array(
		'name'                => 'Attrazioni rimosse',
		'singular_name'       => 'Attrazione rimossa',
		'menu_name'           => 'Attrazioni rimosse',
		'name_admin_bar'      => 'Attrazioni rimosse',
		'parent_item_colon'   => 'Parent Item:',
		'all_items'           => 'All Items',
		'add_new_item'        => 'Add New Item',
		'add_new'             => 'Add New',
		'new_item'            => 'New Item',
		'edit_item'           => 'Edit Item',
		'update_item'         => 'Update Item',
		'view_item'           => 'View Item',
		'search_items'        => 'Search Item',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
		);
	$rewrite = array(
		'slug'                => 'attrazioni-rimosse',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
		);
	$args = array(
		'label'               => 'Attrazione',
		'description'         => 'Attrazioni rimosse da mirabilandia',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'attrazioni_taxonomy' ),
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
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
		);
	register_post_type( 'attrazioni_rimosse', $args );

}

function spettacoli() {

	$labels = array(
		'name'                => 'Spettacoli',
		'singular_name'       => 'Spettacolo',
		'menu_name'           => 'Spettacoli',
		'name_admin_bar'      => 'Spettacoli',
		'parent_item_colon'   => 'Parent Item:',
		'all_items'           => 'All Items',
		'add_new_item'        => 'Add New Item',
		'add_new'             => 'Add New',
		'new_item'            => 'New Item',
		'edit_item'           => 'Edit Item',
		'update_item'         => 'Update Item',
		'view_item'           => 'View Item',
		'search_items'        => 'Search Item',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
		);
	$rewrite = array(
		'slug'                => 'spettacoli-mirabilandia',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
		);
	$args = array(
		'label'               => 'Spettacolo',
		'description'         => 'Spettacoli di mirabilandia',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'spettacoli_taxonomy' ),
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
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
		);
	register_post_type( 'spettacoli', $args );

}

function spettacoli_rimossi() {

	$labels = array(
		'name'                => 'Spettacoli rimossi',
		'singular_name'       => 'Spettacolo rimosso',
		'menu_name'           => 'Spettacoli rimossi',
		'name_admin_bar'      => 'Spettacoli rimossi',
		'parent_item_colon'   => 'Parent Item:',
		'all_items'           => 'All Items',
		'add_new_item'        => 'Add New Item',
		'add_new'             => 'Add New',
		'new_item'            => 'New Item',
		'edit_item'           => 'Edit Item',
		'update_item'         => 'Update Item',
		'view_item'           => 'View Item',
		'search_items'        => 'Search Item',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
		);
	$rewrite = array(
		'slug'                => 'spettacoli-rimossi',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
		);
	$args = array(
		'label'               => 'Spettacolo',
		'description'         => 'Spettacoli rimossi da mirabilandia',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'spettacoli_taxonomy' ),
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
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
		);
	register_post_type( 'spettacoli_rimossi', $args );

}
add_action( 'init', 'attrazioni', 0 );
add_action( 'init', 'attrazioni_rimosse', 0 );
add_action( 'init', 'spettacoli', 0 );
add_action( 'init', 'spettacoli_rimossi', 0 );
add_action( 'init', 'attrazioni_taxonomy', 0 );
add_action( 'init', 'spettacoli_taxonomy', 0 );







/**
* Implement the Custom Header feature.
*/
//require get_template_directory() . '/inc/custom-header.php';

/**
* Custom template tags for this theme.
*/
require get_template_directory() . '/inc/template-tags.php';

/**
* Custom functions that act independently of the theme templates.
*/
require get_template_directory() . '/inc/extras.php';

/**
* Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';

/**
* Load Jetpack compatibility file.
*/
require get_template_directory() . '/inc/jetpack.php';


//TGM ACTIVATOR
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';


require get_template_directory() . '/inc/excerpt.php';

