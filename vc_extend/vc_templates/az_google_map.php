<?php
$output = $el_class = $map_color_select = $map_hue_color = $map_saturation = $map_lightness = $map_scroll = $map_drag = $map_zoom_control = $map_double_click = $map_default = $map_height = $map_latidude = $map_longitude = $map_zoom = $image = $map_title_marker = $map_infowindow_text = '';

extract(shortcode_atts( array(
	'map_color_select' => '',
	'map_hue_color' => '',
	'map_saturation' => '',
	'map_lightness' => '',
	'map_scroll' => '',
	'map_drag' => '',
	'map_zoom_control' => '',
	'map_double_click' => '',
	'map_default' => '',
	'map_height' => '',
	'map_latidude' => '',
	'map_longitude' => '',
	'map_zoom' => '',
	'image' => $image,
	'map_title_marker' => '',
	'map_infowindow_text' => '',
    'el_class' => ''
), $atts ) );

wp_register_script('googleMaps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', NULL, NULL, TRUE);
wp_enqueue_script('googleMaps');

$el_class = $this->getExtraClass($el_class);

$img_id = preg_replace('/[^\d]/', '', $image);
$image_string = wp_get_attachment_image_src( $img_id, 'full');
$image_string = $image_string[0];

$map_color = null;
$map_sat = null;
$map_lightness = null;
if ($map_color_select == "custom") {
	$map_color = $map_hue_color;
	$map_sat = $map_saturation;
	$map_lig = $map_lightness;
} else {
	$map_color = '';
	$map_sat = '0';
	$map_lig = '0';
}

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'az-map'.$el_class, $this->settings['base']);
$class = setClass(array($css_class));

$output .= '<div id="map_'.uniqid().'" '.$class.' style="height: '.$map_height.'px;"';

if(!empty($map_latidude))
$output .= ' data-map-lat="'.$map_latidude.'"';

if(!empty($map_longitude))
$output .= ' data-map-lon="'.$map_longitude.'"';

if(!empty($map_zoom))
$output .= ' data-map-zoom="'.$map_zoom.'"';

if(!empty($image))
$output .= ' data-map-pin="'.$image_string.'"';

if(!empty($map_title_marker))
$output .= ' data-map-title="'.$map_title_marker.'"';

if(!empty($map_infowindow_text))
$output .= ' data-map-info="'.$map_infowindow_text.'"';

$output .= ' data-map-color="'.$map_color.'"';
$output .= ' data-map-saturation="'.$map_sat.'"';
$output .= ' data-map-lightness="'.$map_lig.'"';

$output .= ' data-map-scroll="'.$map_scroll.'"';
$output .= ' data-map-drag="'.$map_drag.'"';
$output .= ' data-map-zoom-control="'.$map_zoom_control.'"';
$output .= ' data-map-double-click="'.$map_double_click.'"';
$output .= ' data-map-default="'.$map_default.'"';

$output .= '></div>'.$this->endBlockComment('az_google_map');

echo $output;

?>