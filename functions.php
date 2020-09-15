<?php 

	/* Theme Supports  */
	function icoffee_theme_supports(){
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats',array('audio','video','link','quote','image','gallery') );
		load_theme_textdomain('icoffee');

		register_nav_menus(array(
			'primary_menu'			=>'Primary Menu',
		));
	}


	add_action('after_setup_theme','icoffee_theme_supports');

	


	/* Theme Assets Enqueue  */


	function icoffee_assets_enqueue(){
		wp_enqueue_style( 'bootstrap', get_theme_file_uri().'/css/bootstrap.css', null, '1.0.0' ,'all' );

		wp_enqueue_style( 'style', get_theme_file_uri().'/css/style.css', null, '1.0.0' ,'all' );
		wp_enqueue_style( 'chocolat', get_theme_file_uri().'/css/chocolat.css', null, '1.0.0' ,'all' );
		wp_enqueue_style('main', get_stylesheet_uri() );


		wp_enqueue_script( 'move-top', get_theme_file_uri().'/js/move-top.js', array('jquery'), '2.0.0', true );
		wp_enqueue_script( 'easing', get_theme_file_uri().'/js/easing.js', array('jquery'), '2.0.0', true );
		wp_enqueue_script( 'modernizr', get_theme_file_uri().'/js/modernizr.custom.97074.js', array('jquery'), '2.0.0', true );
		wp_enqueue_script( 'chocolat', get_theme_file_uri().'/js/jquery.chocolat.js', array('jquery'), '2.0.0', true );
		wp_enqueue_script( 'hoverdir', get_theme_file_uri().'/js/jquery.hoverdir.js', array('jquery'), '2.0.0', true );
		wp_enqueue_script( 'flexisel', get_theme_file_uri().'/js/jquery.flexisel.js', array('jquery'), '2.0.0', true );
		wp_enqueue_script( 'main', get_theme_file_uri().'/js/main.js', array('jquery'), '2.0.0', true );
	}

	add_action('wp_enqueue_scripts','icoffee_assets_enqueue');

	if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c1ce76adcb9e',
	'title' => 'Subtitle',
	'fields' => array(
		array(
			'key' => 'field_5c1ce77925d35',
			'label' => 'Subtitle Name',
			'name' => 'subtitle_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;


function cptui_register_my_cpts() {

	/**
	 * Post Type: Gallery.
	 */

	$labels = array(
		"name" => __( "Gallery", "icoffee" ),
		"singular_name" => __( "Gallery", "icoffee" ),
		"menu_name" => __( "Gallery", "icoffee" ),
		"all_items" => __( "All Images", "icoffee" ),
		"add_new" => __( "Add New Image", "icoffee" ),
	);

	$args = array(
		"label" => __( "Gallery", "icoffee" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "coffee_gallery", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-learn-more",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "coffee_gallery", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );





/* TGM Connection */

include_once 'inc/tgm/example.php';


/* Widget Register  */

add_action('widgets_init','icoffee_widgets');

function icoffee_widgets(){
	register_sidebar( array(

			'id'				=>'address',
			'name'				=>'Address Widget',
			'description'		=>'This is address widget',
			'before_widget'		=>'',
			'after_widget'		=>'',
			'before_title'		=>'',
			'after_title'		=>'',
	) );
}

/* Redux Framework  */

include_once 'inc/Redux/ReduxCore/framework.php';
include_once 'inc/Redux/sample/config.php';