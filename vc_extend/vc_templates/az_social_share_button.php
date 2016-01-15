<?php
$output = $el_class = $facebook_btn = $twitter_btn = $googleplus_btn = $pinterest_btn = '';

extract(shortcode_atts( array(
	'facebook_btn' => false,
	'twitter_btn' => false,
	'googleplus_btn' => false,
	'pinterest_btn' => false,
	'el_class' => ''
), $atts ) );

$el_class = $this->getExtraClass($el_class);

$class = setClass(array('az-social-share', $el_class));

$output .= '<div'.$class.'>';
if ($facebook_btn==true) {
	$output .= '<a href="#" id="share-facebook" class="share-btn">Facebook</a>';
}

if ($twitter_btn==true) {
	$output .= '<a href="#" id="share-twitter" class="share-btn">Twitter</a>';
}

if ($googleplus_btn==true) {
	$output .= '<a href="#" id="share-google" class="share-btn">Google +</a>';
}

if ($pinterest_btn==true) {
	$output .= '<a href="#" id="share-pinterest" class="share-btn">Pinterest</a>';
}
$output .= '</div>';


echo $output.$this->endBlockComment('az_social_share_button');

?>