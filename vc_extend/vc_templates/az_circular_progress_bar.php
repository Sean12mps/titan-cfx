<?php
$output = $animation_loading = $animation_loading_effects = $animation_delay = $el_class = $check_circular_type = $checkicon = $icon = $icon_color = $custom_icon_color = $circular_field = $field_color = $custom_field_color = $circular_percentage = $circular_percentage_text = $percentage_color = $custom_percentage_color = $custom_percentage_text_color = $circular_bgcolor = $circular_trackcolor = $circular_size = $circular_line = '';

extract(shortcode_atts( array(
	'animation_loading' => '',
	'animation_loading_effects' => '',
	'animation_delay' => '',
	'el_class' => '',
	'check_circular_type' => '',
	'checkicon' => '',
	'icon' => '',
	'icon_color' => '',
	'custom_icon_color' => '',
	'circular_field' => '',
	'field_color' => '',
	'custom_field_color' => '',
	'circular_percentage' => '',
	'circular_percentage_text' => '',
	'percentage_color' => '',
	'custom_percentage_color' => '',
	'custom_percentage_text_color' => '',
	'circular_bgcolor' => '',
	'circular_trackcolor' => '',
	'circular_size' => '',
	'circular_line' => ''
), $atts ) );

$el_class = $this->getExtraClass($el_class);

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

// Control Size and Line Width of Circle Progress Bar
if( !empty($circular_size)) {
  $size_output = $circular_size;
} else {
  $size_output = 170;
}

if( !empty($circular_line)) {
  $line_output = $circular_line;
} else {
  $line_output = 6;
}

// Output
$circular_output = null;
$color_icon = null;
$color_field = null;
$color_percentage = null;
$color_text_percentage = null;
$circular_animate_text_output = null;

// Check Colors
if ($icon_color=="custom") { 
	$color_icon = ' style="color: '.$custom_icon_color.';"';  
}
if ($field_color=="custom") { 
	$color_field = ' style="color: '.$custom_field_color.';"';  
}
if ($percentage_color=="custom") { 
	$color_percentage = ' style="color: '.$custom_percentage_color.';"';  
	$color_text_percentage = ' style="color: '.$custom_percentage_text_color.';"';
}

if ($check_circular_type=="field_mode") { 
	$circular_output = '<span class="field-text"'.$color_field.'>'.$circular_field.'</span>';  
}

if ($check_circular_type=="ani_percentage") { 
	$circular_output = '<span class="percentage no-field"'.$color_percentage.'>'.$circular_percentage.'</span>';
	$circular_animate_text_output = '<span class="field-animate-text"'.$color_text_percentage.'>'.$circular_percentage_text.'</span>';  
}

if ($check_circular_type=="icon_mode" && $checkicon=="custom_icon") { $circular_output = '<span class="field-icon"'.$color_icon.'><i class="'.$icon.'"></i></span>'; }


$class = setClass(array('progress-circle', $el_class, $animation_loading_class, $animation_effect_class));

$output .= '<div'.$class.''.$animation_delay_class.'>';
$output .= '<div class="chart" data-bgcolor="'.$circular_bgcolor.'" data-trackcolor ="'.$circular_trackcolor.'" data-size="'.$size_output.'" data-line="'.$line_output.'" data-percent="'.$circular_percentage.'" style="line-height: '.$size_output.'px;">'.$circular_output.'</div>';
$output .= $circular_animate_text_output;
$output .= '</div>';

echo $output.$this->endBlockComment('az_circular_progress_bar');

?>