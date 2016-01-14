<?php 

if ( ! defined( 'WPINC' ) ) exit;

class Titan_Front {


	public $options = array();


	public $options_index = 0;


	public function __construct () {


		if ( ! is_admin() ) {

			$this->get_options();

			$this->loop_options();

			// $this->titan_control_special_pages();

			add_action( 'wp_enqueue_scripts', array( $this, 'titan_enqueue_template_styles' ) );
			add_action( 'calibrefx_before_post_title', array( $this, 'titan_control_special_pages' ) );

		}


	}


	public function get_options () {


		$options = get_field( 'hook_relations', 'option' );

		$this->options = $options;

		
	}


	public function loop_options () {


		$options = $this->options;

		$temp_options = array();

		if ( $options ) {

			$x = 0;

			foreach ( $options as $idx => $hook_options ) {

				$name_action = $hook_options['name_action'];

				$template = $hook_options['template'];

				$temp_options[] = $template;

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


	public function titan_enqueue_template_styles () {


		$options = $this->options;

		$vicom_css = '';

		foreach ( $options as $index => $template ) {

			$vicom_css .= get_post_meta( $template->ID, '_wpb_shortcodes_custom_css', true );
			
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


	public function titan_control_special_pages () {


		$page_type = '';

		// 	Check page type
		if ( is_front_page() && is_home() ) {
			
			// 	Default homepage

		} elseif ( is_front_page() ) {
			
			// 	static homepage

		} elseif ( is_home() ) {
			
			// 	blog page

		} else {
			
			//	everything else

		}


	}


}