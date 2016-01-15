<?php
/*
Plugin Name: Titan - Calibrefx
Plugin URI: http://www.calibreworks.com
Description: Calibrefx on steroid ! ! !
Version: 1.0.0
Author: Calibreworks Team Titan
Author Email: developer@calibreworks.com
License:

  Copyright 2015 Calibreworks Team (developer@calibreworks.com)

  This program is not a free software; this is used for internal Calibreworks 
  team only.
  
*/


// 	Includes
include_once( dirname( __FILE__ ) . '/titan/titan.php' );
include_once( dirname( __FILE__ ) . '/vc_extend/extend-vc.php' );


// 	Initialize
$titan_args = array();

$cfx_titan = new Titan( $titan_args );