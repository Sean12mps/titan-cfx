<?php
$output = $animation_loading = $animation_loading_effects = $animation_delay = $el_class = $buttonlabel = $buttonalign = $buttonlink = $target = $buttonsize = $buttoncolor = $custombuttoncolor = $custombuttontextcolor = $custombuttontexthovercolor = $checkicon = $icon = $inverted = '';

extract(shortcode_atts( array(
	'animation_loading' => '',
	'animation_loading_effects' => '',
	'animation_delay' => '',
	'buttonlabel' => '',
	'buttonalign' => '',
	'buttonlink' => '',
	'target' => '',
	'buttonsize' => '',
	'buttoncolor' => '',
	'custombuttoncolor' => '',
	'custombuttontextcolor' => '',
	'custombuttontexthovercolor' => '',
	'checkicon' => '',
	'icon' => '',
	'inverted' => false,
	'el_class' => ''
), $atts ) );

$el_class = $this->getExtraClass($el_class);

if ( $target == 'same' || $target == '_self' ) { $target = ''; }
if ( $target != '' ) { $target = ' target="'.$target.'"'; }

$icon_output = null;
if ($checkicon=="custom_icon") { $icon_output = '<i class="'.$icon.'"></i>'; }

$inverted_to = '';
$buttonclass = null;
$buttonhover = null;
if ($inverted==true) {
	$inverted_to = ' inverted';
	if($buttoncolor=="custom") {
		$buttonhover = ' data-color-button="'.$custombuttoncolor.'" data-color-text="'.$custombuttontextcolor.'" data-hover-color="'.$custombuttontexthovercolor.'"';
		$buttoncolor = ' style="border-color: '.$custombuttoncolor.'; color: '.$custombuttontextcolor.'; background-color: transparent;"';
		$buttonclass = ' custom-button-color'; 
	} else {
		$buttonhover = null;
		$buttoncolor = null;
		$buttonclass = ' normal-button-color';
	}
} else {
	if($buttoncolor=="custom") {
		$buttonhover = ' data-color-button="'.$custombuttoncolor.'" data-color-text="'.$custombuttontextcolor.'" data-hover-color="'.$custombuttontexthovercolor.'"';
		$buttoncolor = ' style="background-color: '.$custombuttoncolor.'; border-color: '.$custombuttoncolor.'; color: '.$custombuttontextcolor.';"';
		$buttonclass = ' custom-button-color'; 
	} else {
		$buttonhover = null;
		$buttoncolor = null;
		$buttonclass = ' normal-button-color';
	}
}

$animation_loading_class = null;
if ($animation_loading == "yes") {
	$animation_loading_class = 'animated-content';
}

$animation_effect_class = null;
if ($animation_loading == "yes") {
	$animation_effect_class = $animation_loading_effects;
} else {
	$animation_effect_class = '';
}

$animation_delay_class = null;
if ($animation_loading == "yes" && !empty($animation_delay)) {
	$animation_delay_class = ' data-delay="'.$animation_delay.'"';
}

$class = setClass(array('button-main', $el_class, $buttonsize, $buttonclass, $inverted_to, $animation_loading_class, $animation_effect_class));

if($buttonalign=="noalign") {
	$output .= '<a'.$class.$buttoncolor.$buttonhover.' href="'.$buttonlink.'"'.$target.''.$animation_delay_class.'>'.$icon_output.$buttonlabel.'</a>';
} else {
	$output .= '<div class="position-btn '.$buttonalign.'"><a'.$class.$buttoncolor.$buttonhover.' href="'.$buttonlink.'"'.$target.''.$animation_delay_class.'>'.$icon_output.$buttonlabel.'</a></div>';
}

echo $output.$this->endBlockComment('az_buttons');

?>