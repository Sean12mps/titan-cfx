<?php
$output = $animation_loading = $animation_loading_effects = $animation_delay = $el_class = '';

extract(shortcode_atts(array(
	'animation_loading' => '',
	'animation_loading_effects' => '',
	'animation_delay' => '',
    'el_class' => ''
), $atts));

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

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG,'text-block'.$el_class, $this->settings['base']);
$class = setClass(array($css_class, $animation_loading_class, $animation_effect_class));

$output .= '<div'.$class.''.$animation_delay_class.'>';
$output .= wpb_js_remove_wpautop($content, true);
$output .= '</div> ' . $this->endBlockComment('.text-block');

echo $output;