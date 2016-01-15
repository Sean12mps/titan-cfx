<?php
$output = $animation_loading = $animation_loading_effects = $animation_delay = $el_class = $box_wrap_link = $box_wrap_link_url = $target = $icons_select = $icon = $icon_color = $custom_icon_color = $title = $position = '';

extract(shortcode_atts( array(
	'animation_loading' => '',
	'animation_loading_effects' => '',
	'animation_delay' => '',
	'box_wrap_link' => '',
	'box_wrap_link_url' => '',
	'target' => '',
	'icons_select' => '',
	'icon' => '',
	'icon_color' => '',
	'custom_icon_color' => '',
	'title' => '',
	'position' => '',
    'el_class' => ''
), $atts ) );

$el_class = $this->getExtraClass($el_class);

$icons_markup = null;
$icons_standard = null;
$icon_style_color = null;
$icon_class_color = null;
$box_class_color = null;
if ($icon_color=="custom") { $box_class_color= ' style="border-color:'.$custom_icon_color.';"'; $icon_class_color = ' custom-color'; $icon_style_color = ' style="color:'.$custom_icon_color.';"'; }
$icon_output = '<i class="'.$icon.$icon_class_color.'"'.$icon_style_color.'></i>';

// Target
if ( $target == 'same' || $target == '_self' ) { $target = ''; }
if ( $target != '' ) { $target = ' target="'.$target.'"'; }

// Position
if ( $position == 'same' || $position == 'top' ) { $position = ''; }

if ( $position=="left" && $icons_select=="icon_circle" ) { $position = 'listed-left circle-icon'; }
if ( $position=="right" && $icons_select=="icon_circle" ) { $position = 'listed-right circle-icon'; }

if ( $position=="left" && $icons_select=="icon_only" ) { $position = 'listed-left only-icon'; }
if ( $position=="right" && $icons_select=="icon_only" ) { $position = 'listed-right only-icon'; }

if ( $icons_select=="boxed_version" ) { $position = 'boxed-version'; $icons_markup = '<div class="icon-boxed">'.$icon_output.'</div>'; }
if ( $icons_select=="icon_circle" ) { $icons_select = 'icon circle-mode-box'; $icons_markup = '<div class="'.$icons_select.$icon_class_color.'"'.$box_class_color.'>'.$icon_output.'</div>'; }
if ( $icons_select=="icon_only" ) { $icons_select = 'icon icon-only-mode-box'; $icons_markup = '<div class="'.$icons_select.'">'.$icon_output.'</div>'; }
if ( $icons_select=="icon_standard" ) { $icons_select = 'icon standard-mode-box'; $position = 'listed-left standard-icon'; $icons_standard = $icon_output; }

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

$class = setClass(array('box', $position, $animation_loading_class, $animation_effect_class, $el_class));

if ($box_wrap_link==true) {
	$output .= '<a href="'.$box_wrap_link_url.'" title="'.$title.'"'.$target.'>';
	$output .= '<div'.$class.''.$animation_delay_class.'>'.$icons_markup.'';
	$output .= '<div class="box-text">'; 
	$output .= '<h4>'.$icons_standard.$title.'</h4>';
	$output .= wpb_js_remove_wpautop($content, true);
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</a>';
} else {
	$output .= '<div'.$class.''.$animation_delay_class.'>'.$icons_markup.'';
	$output .= '<div class="box-text">'; 
	$output .= '<h4>'.$icons_standard.$title.'</h4>';
	$output .= wpb_js_remove_wpautop($content, true);
	$output .= '</div>';
	$output .= '</div>';
} 

echo $output.$this->endBlockComment('az_box_icon');

?>