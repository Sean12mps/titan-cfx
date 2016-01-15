<?php
$output = $el_class = $height_value = '';

extract(shortcode_atts(array(
    'height_value' => '',
    'el_class' => ''
), $atts));

$el_class = $this->getExtraClass($el_class);

$height_value = ' style="height: '.$height_value.'px;"';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG,'blank_divider'.$el_class, $this->settings['base']);
$class = setClass(array($css_class));

$output .= '<div'.$class.''.$height_value.'></div>'.$this->endBlockComment('az_blank_divider')."\n";

echo $output;