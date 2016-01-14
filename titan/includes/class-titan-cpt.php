<?php 

if ( ! defined( 'WPINC' ) ) exit;

class Titan_Cpt {


	public function __construct () {


		add_action( 'init', array( $this, 'titan_create_cpt_templates' ) );

		if ( function_exists( 'acf_add_local_field_group' ) ) {

			$this->add_options_page();

		}

		// 	@TODO : add visual composer post type editor to this cpt


	}


	public function titan_create_cpt_templates () {


		$labels = array(
			'name'               => _x( 'Templates', 'post type general name', 'titan' ),
			'singular_name'      => _x( 'Template', 'post type singular name', 'titan' ),
			'menu_name'          => _x( 'Templates', 'admin menu', 'titan' ),
			'name_admin_bar'     => _x( 'Template', 'add new on admin bar', 'titan' ),
			'add_new'            => _x( 'Add New', 'Template', 'titan' ),
			'add_new_item'       => __( 'Add New Template', 'titan' ),
			'new_item'           => __( 'New Template', 'titan' ),
			'edit_item'          => __( 'Edit Template', 'titan' ),
			'view_item'          => __( 'View Template', 'titan' ),
			'all_items'          => __( 'All Templates', 'titan' ),
			'search_items'       => __( 'Search Templates', 'titan' ),
			'parent_item_colon'  => __( 'Parent Templates:', 'titan' ),
			'not_found'          => __( 'No Templates found.', 'titan' ),
			'not_found_in_trash' => __( 'No Templates found in Trash.', 'titan' )
		);

		$args = array(
			'labels'             => $labels,
	        'description'        => __( 'Description.', 'titan' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'template' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor' )
		);

		register_post_type( 'template', $args );


	}


	public function add_options_page () {


		// 	Template settings page
		acf_add_options_sub_page( array(
			'page_title' 	=> 'Template Settings',
			'menu_title'	=> 'Template Settings',
			'parent_slug'	=> 'edit.php?post_type=template',
		) );


	}


	public function roles_parts_list ( $defaults ) {


		var_dump($defaults);
		exit;


	}


}