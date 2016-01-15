<?php 

extract( shortcode_atts( array(
	'title' => '',
	'el_color' => '',
	'cat_tab' => '',
	'el_class' => ''
), $atts ) );

$el_class = $this->getExtraClass($el_class);

var_dump($el_class);

$output = '';
$output .= '<div class="'. setClass( $el_class ) .'">';
	
$output .= '</div>';

echo $output;