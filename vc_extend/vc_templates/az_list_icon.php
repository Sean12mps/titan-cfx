<?php
$output = $el_class = $animation_loading = $animation_loading_effects = $animation_delay = $icon = $icon_size = $icon_color = $custom_icon_color = '';

extract(shortcode_atts( array(
	'animation_loading' => '',
	'animation_loading_effects' => '',
	'animation_delay' => '',
	'icon' => '',
	'icon_size' => '',
	'icon_color' => '',
	'custom_icon_color' => '',
    'el_class' => ''
), $atts ) );

$el_class = $this->getExtraClass($el_class);

$icon_custom_value = null;
$icon_style_color = null;
$icon_ex = null;
if ($icon_color=="custom" && !empty($icon_size)) { $icon_custom_value = ' style="color:'.$custom_icon_color.'; font-size:'.$icon_size.'px;"'; }
else if (!empty($icon_size)) { $icon_custom_value = ' style="font-size:'.$icon_size.'px;"'; }

$icon_output = $icon;

$icon_ex .= '<i class="'.$icon_output.'"'.$icon_custom_value.'></i>';
$content = preg_replace('/<li>(.*?)<\/li>/s', '<li>'.$icon_ex.'${1}</li>', $content);

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

$class = setClass(array('list-icons', $el_class, $animation_loading_class, $animation_effect_class));

$output .= '<div'.$class.''.$animation_delay_class.'>';
$output .= $content;
$output .= '</div>';

echo $output.$this->endBlockComment('az_list_icon');

?>