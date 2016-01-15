<?php
$output = $el_class = $animation_loading = $animation_loading_effects = $animation_delay = $icon_align = $icon_color = $custom_icon_color = $icon_size = $icon = $icon_wrap_link = $icon_wrap_link_url = $target = '';

extract(shortcode_atts( array(
	'animation_loading' => '',
	'animation_loading_effects' => '',
	'animation_delay' => '',
	'icon_align' => '',
	'icon_color' => '',
	'custom_icon_color' => '',
	'icon_size' => '',
	'icon' => '',
	'icon_wrap_link' => '',
	'icon_wrap_link_url' => '',
	'target' => '',
    'el_class' => ''
), $atts ) );

$el_class = $this->getExtraClass($el_class);

// Target
if ( $target == 'same' || $target == '_self' ) { $target = ''; }
if ( $target != '' ) { $target = ' target="'.$target.'"'; }

$icon_custom_value = null;
$icon_style_color = null;
if ($icon_color=="custom" && !empty($icon_size)) { $icon_custom_value = ' style="color:'.$custom_icon_color.'; font-size:'.$icon_size.'px;"'; }
else if (!empty($icon_size)) { $icon_custom_value = ' style="font-size:'.$icon_size.'px;"'; }

$icon_output = $icon;

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

$class = setClass(array($icon_output, $icon_align, $el_class, $animation_loading_class, $animation_effect_class));

if ($icon_wrap_link==true) {
	$output .= '<a class="icon-sh" href="'.$icon_wrap_link_url.'" '.$target.'>';
	$output .= '<span class="icon-shortcode"><i'.$class.''.$animation_delay_class.$icon_custom_value.'></i></span>';
	$output .= '</a>';
} else {
	$output .= '<span class="icon-shortcode"><i'.$class.''.$animation_delay_class.$icon_custom_value.'></i></span>';
}

echo $output.$this->endBlockComment('az_icon');

?>