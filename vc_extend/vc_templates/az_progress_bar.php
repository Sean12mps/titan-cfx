<?php
$output = $animation_loading = $animation_loading_effects = $animation_delay = $el_class = $animated_bar = $field = $percentage = $bgcolor = $checkicon = $icon = $custombarcolor = '';

extract(shortcode_atts( array(
	'animation_loading' => '',
	'animation_loading_effects' => '',
	'animation_delay' => '',
	'el_class' => '',
	'animated_bar' => '',
	'field' => '',
	'percentage' => '',
	'bgcolor' => '',
	'checkicon' => '',
	'icon' => '',
	'custombarcolor' => ''
), $atts ) );

$el_class = $this->getExtraClass($el_class);

$class_bg = null;
if ($bgcolor=="custom") { $class_bg = 'custom-bar'; $bgcolor = ' background-color: '.$custombarcolor.';'; }

$icon_output = null;
if ($checkicon=="custom_icon") { $icon_output = '<i class="'.$icon.'"></i>'; }

// Output Bar
$bar_output = null;
if ($animated_bar==true) {
	$bar_output .= '<div class="bar animable" data-percent="'.$percentage.'" style="'.$bgcolor.'"></div>';
} else {
	$bar_output .= '<div class="bar" style="width: '.$percentage.'%; '.$bgcolor.'"></div>';
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

$class = setClass(array('progress-bar', $el_class, $class_bg, $animation_loading_class, $animation_effect_class));

$output .= '<div'.$class.''.$animation_delay_class.'>';
$output .= '<div class="progress">';
$output .= '<span class="field">'.$icon_output.$field.'</span>';
$output .= $bar_output;
$output .= '</div></div>';

echo $output.$this->endBlockComment('az_progress_bar');

?>