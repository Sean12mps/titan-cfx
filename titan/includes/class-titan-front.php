<?php 

if ( ! defined( 'WPINC' ) ) exit;

class Titan_Front {


	public $options = array();

	public $options_removal = array();

	public $options_archive_page = array();

	public $options_index = 0;

	public $special_page = false;



	public function __construct () {


		if ( ! is_admin() ) {


			$this->get_options();

			$this->modify_special_page_hook();

			$this->general_loop_options();

			$this->modify_archive_page_hook();


			add_action( 'wp_enqueue_scripts', array( $this, 'titan_remove_hooks' ) );

			add_action( 'wp_enqueue_scripts', array( $this, 'titan_enqueue_template_styles' ) );

			// add_action( 'template_redirect', array( $this, 'titan_control_special_pages' ) );

		}


	}


	public function get_options () {


		$options = get_field( 'hook_relations', 'option' );

		$options_removal = get_field( 'hook_removal', 'option' );

		$options_archive_page = get_field( 'hook_page_archives', 'option' );

		$this->options = $options;

		$this->options_removal = $options_removal;

		$this->options_archive_page = $options_archive_page;

		
	}


	public function general_loop_options () {


		$options = $this->options;

		$temp_options = array();

		if ( $options ) {

			$x = 0;

			foreach ( $options as $idx => $hook_options ) {

				$name_action = $hook_options['name_action'];

				$template = $hook_options['template'];

				$is_special_page = $this->get_special_page_name();

				if ( has_action( $name_action ) || $name_action == $is_special_page ) {

					$temp_options[] = $template;

				}

				add_action( $name_action, array( $this, 'titan_print_template' ), $x );

				$x++;

			}

			$this->options = $temp_options;

		}


	}


	public function titan_print_template () {

		$options = $this->options;

		$index = $this->options_index;

		$obj = $options[$index];

		echo do_shortcode( $obj->post_content );

		$index++;

		$this->options_index = $index;

	}


	public function titan_print_template_single () {


		$options = $this->special_page;


		echo do_shortcode( $options->post_content );


	}


	public function titan_enqueue_template_styles () {


		$options = $this->options;

		$options_archive = $this->special_page;

		$vicom_css = '';

		if ( $options ) {

			foreach ( $options as $index => $template ) {

				$vicom_css .= get_post_meta( $template->ID, '_wpb_shortcodes_custom_css', true );
				
			}

			if ( $options_archive ) {

				$vicom_css .= get_post_meta( $options_archive->ID, '_wpb_shortcodes_custom_css', true );

			}

			ob_start();

			?>
			
			<style type="text/css" data-type="vd_shortcodes-custom-css">

				<?php echo $vicom_css; ?>

			</style>

			<?php

			$content = ob_get_clean();

			echo $content;

		}


	}


	public function titan_remove_hooks () {

		$options_removal = $this->options_removal;

		if ( $options_removal ) {

			foreach ( $options_removal as $idx => $removal ) {

				remove_action( $removal['name_action'], $removal['name_hook'], $removal['priority'] );

			}

		}


	}


	public function modify_archive_page_hook () {


		if ( ! is_archive() ) return;


		$post_type = get_post_type();

		$options_archive_page = $this->options_archive_page;


		foreach ( $options_archive_page as $index => $options ) {


			if ( $post_type == $options['archive_slug'] ) {

				
				$hook_action = ( isset( $options['hook_action'] ) ? $options['hook_action'] : false );
				$hook_output = ( isset( $options['hook_output'] ) ? $options['hook_output'] : false );
				$hook_priority = ( isset( $options['hook_priority'] ) ? $options['hook_priority'] : 10 );
				$page_template = ( isset( $options['archive_page'] ) ? $options['archive_page'] : false );


				if ( $hook_action && $hook_output && $page_template ) {


					$this->special_page = $page_template;

					remove_action( $hook_action, $hook_output, $hook_priority );

					add_action( $hook_action, array( $this, 'titan_print_template_single' ), $hook_priority );


				}


			}


		}

		// // 	Check page type
		// if ( is_front_page() && is_home() ) {
		// // 	Default homepage
		// } elseif ( is_front_page() ) {
		// // 	static homepage
		// } elseif ( is_home() ) {
		// // 	blog page
		// } else {
		// //	everything else
		// }





	}


	public function get_special_page_name () {


		$post_type = get_post_type();

		$action_name = false;


		// 	Exit if normal page
		if ( $post_type === 'page' ) return;


		// if ( is_archive() ) {

		// 	$action_name = 'titan_archive_' . $post_type;

		// }


		if ( is_singular() ) {

			$action_name = 'titan_single_' . $post_type;

		}


		return $action_name;


	}


	public function modify_special_page_hook () {


		$post_type = get_post_type();

		// 	Exit if normal page
		if ( $post_type === 'page' ) return;

		$action_name = $this->get_special_page_name();

		if ( ! $action_name ) return;

		$this->special_page = $action_name;

		do_action( 'modify_special_page_content_init' );

		add_filter( 'the_content', array( $this, 'modify_special_page_content' ), 1 );


	}


	public function modify_special_page_content_init () {


		$action_name = $this->special_page;


		do_action( $action_name );


	}


	public function modify_special_page_content ( $content ) {


		// 	exit if no name
		if ( ! $this->special_page ) return;


		$name_hook_special_page = $this->special_page;


		ob_start();


		do_action( $name_hook_special_page );


		$content = ob_get_clean();


		return $content;


	}


}