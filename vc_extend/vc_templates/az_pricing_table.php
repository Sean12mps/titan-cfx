<?php
$output = $animation_loading = $animation_loading_effects = $animation_delay = $el_class = $title = $price = $currency = $interval = $link_url = $link_text = $target = $highlight = '';

extract(shortcode_atts(array(
	'animation_loading' => '',
	'animation_loading_effects' => '',
	'animation_delay' => '',
    'el_class' => '',
    'title' => '',
	'price' => '',
	'currency' => '',
	'interval' => '',
	'link_url' => '',
	'link_text' => '',
	'target' => '',
	'highlight' => false,
), $atts));

$el_class = $this->getExtraClass($el_class);

if ( $target == 'same' || $target == '_self' ) { $target = ''; }
if ( $target != '' ) { $target = ' target="'.$target.'"'; }

$highlight_to = '';
if ($highlight==true) {
	$highlight_to = 'selected ';
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

$class = setClass(array('pricing-table', $highlight_to, $el_class, $animation_loading_class, $animation_effect_class));
	  
$output .= '<div'.$class.''.$animation_delay_class.'>';
$output .= '<div class="field-title">'.$title.'</div>';
$output .= '<div class="price">'.$currency.$price.'<span>'.$interval.'</span></div>';
$output .= wpb_js_remove_wpautop($content);
$output .= '<a class="confirm" href="'.$link_url.'"'.$target.'>'.$link_text.'</a>';
$output .= '</div>';

echo $output.$this->endBlockComment('az_pricing_table');