<?php 

if ( ! defined( 'WPINC' ) ) exit;

class Titan {


	public $dir;


	public function __construct ( $args = null ) {

		$this->dir = dirname( __FILE__ );

		$this->get_includes();

		$this->create_cpt();

		add_action( 'template_redirect', array( $this, 'controller_front_end' ) );

	}


	public function get_includes () {

		// 	Titan ACF
		include_once( $this->dir . '/includes/acf-titan-hookoptions.php' );
		
		// 	Custom Post Types
		include_once( $this->dir . '/includes/class-titan-cpt.php' );

		// 	Front end view
		include_once( $this->dir . '/includes/class-titan-front.php' );


	}


	public function create_cpt () {


		new Titan_Cpt();


	}


	public function controller_front_end () {


		new Titan_Front();


	}


}