<?php
$output = $el_class = '';

extract(shortcode_atts( array(
	'el_class' => ''
), $atts ) );

$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'toggle-builder'.$el_class, $this->settings['base']);
$class = setClass(array($css_class));

$output .= '<div'.$class.'>';
$output .= wpb_js_remove_wpautop($content);
$output .= '</div>'.$this->endBlockComment('az_toggle_container');

echo $output;

?>