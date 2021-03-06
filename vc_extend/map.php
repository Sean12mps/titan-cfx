<?php 

// /* Common Array */
// $target_arr = array(__("Same window", "js_composer") => "_self", __("New window", "js_composer") => "_blank");

// // Animations
// $animated_choice = 
// array(
//   	"type" => "dropdown",
//   	"heading" => __("Animation?", "js_composer"),
//   	"param_name" => "animation_loading",
//   	"value" => array ( 
//   		__("No", "js_composer") => "no",
//   		__("Yes", "js_composer") => "yes"
//   	),
//   	"admin_label" => false,
//   	"description" => __("Enable or Disable animation on item.", "js_composer")
// );
	
// $animated_effects =	
// array(
//   	"type" => "dropdown",
//   	"heading" => __("Animation Effects", "js_composer"),
//   	"param_name" => "animation_loading_effects",
//   	"value" => array(
//   		__("Fade In", "js_composer") => "fade_in",
//   		__("Move Left", "js_composer") => "move_left",
//   		__("Move Right", "js_composer") => "move_right",
//   		__("Move Up", "js_composer") => "move_up",
//   		__("Scale Up", "js_composer") => "scale_up",
//   		__("Little Bounce", "js_composer") => "little_bounce"
//   	),
//   	"admin_label" => false,
//   	"description" => __("Select your animation.", "js_composer"),
//   	"dependency" => Array('element' => "animation_loading", 'value' => array('yes'))
// );

// $animated_delay =	
// array(
//   	"type" => "textfield",
//   	"heading" => __("Animation Delay", "js_composer"),
//   	"param_name" => "animation_delay",
//   	"admin_label" => false,
//   	"description" => __("<strong>Optional</strong> If you want you can insert a delay for animation. For example write 100 = 0.1 seconds", "js_composer"),
//   	"dependency" => Array('element' => "animation_loading", 'value' => array('yes'))
// );

// // Image Style
// $image_styles =	
// array(
//   	"type" => "dropdown",
//   	"heading" => __("Image Style", "js_composer"),
//   	"param_name" => "image_style_effects",
//   	"value" => array(
//   		__("Default", "js_composer") => "default-image",
//   		__("Rounded", "js_composer") => "img-rounded",
//   		__("Circle", "js_composer")  => "img-circle",
//   		__("Border", "js_composer")  => "img-thumbnail",
//   		__("Border and Circle", "js_composer")  => "img-thumbnail img-circle"
//   	),
//   	"admin_label" => false,
//   	"description" => __("Select your image style.", "js_composer")
// );

// $image_box_shadow_styles =	
// array(
//   	"type" => "dropdown",
//   	"heading" => __("Image Box Shadow Style", "js_composer"),
//   	"param_name" => "image_box_shadow_effects",
//   	"value" => array(
//   		__("No Shadow", "js_composer") => "no-shadow",
//   		__("Box Shadow Effect 1", "js_composer")  => "box-shadow-eff-1",
//   		__("Box Shadow Effect 2", "js_composer")  => "box-shadow-eff-2"
//   	),
//   	"admin_label" => false,
//   	"description" => __("Select your image style.", "js_composer")
// );

// // Default Font Icons Array - Entypo + LineIcons + SteadyIcons + Custom Social Icons
// $fonticon_arr = array(
// 	'font-icon-phone' 		=> 'font-icon-phone',
// 	'font-icon-mobile' 		=> 'font-icon-mobile',
// 	'font-icon-mouse'		=> 'font-icon-mouse',
// 	'font-icon-directions'	=> 'font-icon-directions', 
// 	'font-icon-mail'		=> 'font-icon-mail', 
// 	'font-icon-paperplane'	=> 'font-icon-paperplane',
// 	'font-icon-pencil'		=> 'font-icon-pencil', 
// 	'font-icon-feather'		=> 'font-icon-feather', 
// 	'font-icon-paperclip'	=> 'font-icon-paperclip', 
// 	'font-icon-drawer'		=> 'font-icon-drawer', 
// 	'font-icon-reply'		=> 'font-icon-reply', 
// 	'font-icon-reply-all'	=> 'font-icon-reply-all',
// 	'font-icon-forward'		=> 'font-icon-forward', 
// 	'font-icon-user'		=> 'font-icon-user', 
// 	'font-icon-users'		=> 'font-icon-users', 
// 	'font-icon-user-add'	=> 'font-icon-user-add', 
// 	'font-icon-vcard'		=> 'font-icon-vcard', 
// 	'font-icon-export'		=> 'font-icon-export', 
// 	'font-icon-location'	=> 'font-icon-location', 
// 	'font-icon-map'			=> 'font-icon-map', 
// 	'font-icon-compass'		=> 'font-icon-compass', 
// 	'font-icon-location-2'	=> 'font-icon-location-2', 
// 	'font-icon-target'		=> 'font-icon-target', 
// 	'font-icon-share' 		=> 'font-icon-share', 
// 	'font-icon-sharable'	=> 'font-icon-sharable',
// 	'font-icon-heart'		=> 'font-icon-heart', 
// 	'font-icon-heart-2' 	=> 'font-icon-heart-2', 
// 	'font-icon-star'		=> 'font-icon-star', 
// 	'font-icon-star-2'		=> 'font-icon-star-2', 
// 	'font-icon-thumbs-up'	=> 'font-icon-thumbs-up', 
// 	'font-icon-thumbs-down'	=> 'font-icon-thumbs-down', 
// 	'font-icon-chat'		=> 'font-icon-chat', 
// 	'font-icon-comment'		=> 'font-icon-comment', 
// 	'font-icon-quote'		=> 'font-icon-quote', 
// 	'font-icon-house' 		=> 'font-icon-house',
// 	'font-icon-popup'		=> 'font-icon-popup',
// 	'font-icon-search' 		=> 'font-icon-search',
// 	'font-icon-signal' 		=> 'font-icon-signal',
// 	'font-icon-flashlight'	=> 'font-icon-flashlight', 
// 	'font-icon-printer' 	=> 'font-icon-printer',
// 	'font-icon-bell' 		=> 'font-icon-bell',
// 	'font-icon-link' 		=> 'font-icon-link',
// 	'font-icon-flag'		=> 'font-icon-flag',
// 	'font-icon-cog'			=> 'font-icon-cog' ,
// 	'font-icon-tools' 		=> 'font-icon-tools',
// 	'font-icon-trophy' 		=> 'font-icon-trophy',
// 	'font-icon-tag' 		=> 'font-icon-tag',
// 	'font-icon-camera' 		=> 'font-icon-camera',
// 	'font-icon-megaphone' 	=> 'font-icon-megaphone',
// 	'font-icon-moon' 		=> 'font-icon-moon',
// 	'font-icon-palette'		=> 'font-icon-palette',
// 	'font-icon-leaf' 		=> 'font-icon-leaf',
// 	'font-icon-music' 		=> 'font-icon-music',
// 	'font-icon-music-2'		=> 'font-icon-music-2', 
// 	'font-icon-new' 		=> 'font-icon-new',
// 	'font-icon-graduation'	=> 'font-icon-graduation',
// 	'font-icon-book' 		=> 'font-icon-book',
// 	'font-icon-newspaper'	=> 'font-icon-newspaper', 
// 	'font-icon-bag' 		=> 'font-icon-bag',
// 	'font-icon-airplane'	=> 'font-icon-airplane', 
// 	'font-icon-lifebuoy'	=> 'font-icon-lifebuoy',
// 	'font-icon-eye' 		=> 'font-icon-eye',
// 	'font-icon-clock'		=> 'font-icon-clock', 
// 	'font-icon-microphone' 	=> 'font-icon-microphone',
// 	'font-icon-calendar' 	=> 'font-icon-calendar',
// 	'font-icon-bolt'		=> 'font-icon-bolt',
// 	'font-icon-thunder'		=> 'font-icon-thunder', 
// 	'font-icon-droplet' 	=> 'font-icon-droplet',
// 	'font-icon-cd' 			=> 'font-icon-cd',
// 	'font-icon-briefcase' 	=> 'font-icon-briefcase',
// 	'font-icon-air'			=> 'font-icon-air', 
// 	'font-icon-hourglass' 	=> 'font-icon-hourglass',
// 	'font-icon-gauge'		=> 'font-icon-gauge', 
// 	'font-icon-language' 	=> 'font-icon-language',
// 	'font-icon-network' 	=> 'font-icon-network',
// 	'font-icon-key' 		=> 'font-icon-key',
// 	'font-icon-battery'		=> 'font-icon-battery',
// 	'font-icon-bucket'		=> 'font-icon-bucket',
// 	'font-icon-magnet' 		=> 'font-icon-magnet', 
// 	'font-icon-drive' 		=> 'font-icon-drive',
// 	'font-icon-cup' 		=> 'font-icon-cup',
// 	'font-icon-rocket' 		=> 'font-icon-rocket',
// 	'font-icon-brush' 		=> 'font-icon-brush',
// 	'font-icon-suitcase'	=> 'font-icon-suitcase',
// 	'font-icon-cone' 		=> 'font-icon-cone',
// 	'font-icon-earth' 		=> 'font-icon-earth',
// 	'font-icon-keyboard' 	=> 'font-icon-keyboard',
// 	'font-icon-browser' 	=> 'font-icon-browser',
// 	'font-icon-publish' 	=> 'font-icon-publish',
// 	'font-icon-progress-3'	=> 'font-icon-progress-3',
// 	'font-icon-progress-2' 	=> 'font-icon-progress-2',
// 	'font-icon-brogress-1' 	=> 'font-icon-brogress-1',
// 	'font-icon-progress-0' 	=> 'font-icon-progress-0',
// 	'font-icon-sun'			=> 'font-icon-sun', 
// 	'font-icon-sun-2' 		=> 'font-icon-sun-2',
// 	'font-icon-adjust' 		=> 'font-icon-adjust',
// 	'font-icon-code'		=> 'font-icon-code', 
// 	'font-icon-screen' 		=> 'font-icon-screen',
// 	'font-icon-light-bulb' 	=> 'font-icon-light-bulb',
// 	'font-icon-credit-card'	=> 'font-icon-credit-card', 
// 	'font-icon-database' 	=> 'font-icon-database',
// 	'font-icon-voicemail'	=> 'font-icon-voicemail', 
// 	'font-icon-clipboard' 	=> 'font-icon-clipboard',
// 	'font-icon-cart' 		=> 'font-icon-cart',
// 	'font-icon-box' 		=> 'font-icon-box',
// 	'font-icon-ticket' 		=> 'font-icon-ticket',
// 	'font-icon-rss'			=> 'font-icon-rss',
// 	'font-icon-signal'		=> 'font-icon-signal', 
// 	'font-icon-thermometer' => 'font-icon-thermometer',
// 	'font-icon-droplets' 	=> 'font-icon-droplets',
// 	'font-icon-layout-3' 	=> 'font-icon-layout-3',
// 	'font-icon-statistics' 	=> 'font-icon-statistics',
// 	'font-icon-pie' 		=> 'font-icon-pie',
// 	'font-icon-bars' 		=> 'font-icon-bars',
// 	'font-icon-graph'		=> 'font-icon-graph', 
// 	'font-icon-lock' 		=> 'font-icon-lock',
// 	'font-icon-lock-open' 	=> 'font-icon-lock-open',
// 	'font-icon-logout' 		=> 'font-icon-logout',
// 	'font-icon-login'		=> 'font-icon-login',
// 	'font-icon-checkmark' 	=> 'font-icon-checkmark',
// 	'font-icon-cross'		=> 'font-icon-cross', 
// 	'font-icon-minus' 		=> 'font-icon-minus',
// 	'font-icon-plus' 		=> 'font-icon-plus',
// 	'font-icon-cross-2' 	=> 'font-icon-cross-2',
// 	'font-icon-minus-2'		=> 'font-icon-minus-2',
// 	'font-icon-plus-2'		=> 'font-icon-plus-2', 
// 	'font-icon-cross-3' 	=> 'font-icon-cross-3',
// 	'font-icon-minus-3' 	=> 'font-icon-minus-3',
// 	'font-icon-plus-3' 		=> 'font-icon-plus-3',
// 	'font-icon-erase' 		=> 'font-icon-erase',
// 	'font-icon-blocked' 	=> 'font-icon-blocked',
// 	'font-icon-info' 		=> 'font-icon-info',
// 	'font-icon-info-2' 		=> 'font-icon-info-2',
// 	'font-icon-question' 	=> 'font-icon-question',
// 	'font-icon-help' 		=> 'font-icon-help',
// 	'font-icon-warning'		=> 'font-icon-warning',
// 	'font-icon-cycle' 		=> 'font-icon-cycle',
// 	'font-icon-cw' 			=> 'font-icon-cw',
// 	'font-icon-ccw' 		=> 'font-icon-ccw',
// 	'font-icon-shuffle' 	=> 'font-icon-shuffle',
// 	'font-icon-arrow' 		=> 'font-icon-arrow',
// 	'font-icon-arrow-2'		=> 'font-icon-arrow-2',
// 	'font-icon-retweet'	 	=> 'font-icon-retweet',
// 	'font-icon-loop'		=> 'font-icon-loop', 
// 	'font-icon-history'		=> 'font-icon-history',
// 	'font-icon-back'		=> 'font-icon-back', 
// 	'font-icon-switch' 		=> 'font-icon-switch',
// 	'font-icon-list'		=> 'font-icon-list',
// 	'font-icon-add-to-list' => 'font-icon-add-to-list',
// 	'font-icon-layout' 		=> 'font-icon-layout',
// 	'font-icon-list-2'		=> 'font-icon-list-2',
// 	'font-icon-text' 		=> 'font-icon-text',
// 	'font-icon-text-2'	 	=> 'font-icon-text-2', 
// 	'font-icon-document' 	=> 'font-icon-document',
// 	'font-icon-docs' 		=> 'font-icon-docs',
// 	'font-icon-landscape' 	=> 'font-icon-landscape',
// 	'font-icon-pictures' 	=> 'font-icon-pictures',
// 	'font-icon-video' 		=> 'font-icon-video',
// 	'font-icon-music-3' 	=> 'font-icon-music-3',
// 	'font-icon-folder'	 	=> 'font-icon-folder',
// 	'font-icon-archive' 	=> 'font-icon-archive',
// 	'font-icon-trash'	 	=> 'font-icon-trash',
// 	'font-icon-upload' 		=> 'font-icon-upload', 
// 	'font-icon-download' 	=> 'font-icon-download',
// 	'font-icon-disk' 		=> 'font-icon-disk',
// 	'font-icon-install'		=> 'font-icon-install',
// 	'font-icon-cloud' 		=> 'font-icon-cloud',
// 	'font-icon-upload-2' 	=> 'font-icon-upload-2',
// 	'font-icon-bookmark' 	=> 'font-icon-bookmark',
// 	'font-icon-bookmarks' 	=> 'font-icon-bookmarks',
// 	'font-icon-book-2'	 	=> 'font-icon-book-2',
// 	'font-icon-play'	 	=> 'font-icon-play',
// 	'font-icon-pause' 		=> 'font-icon-pause',
// 	'font-icon-record' 		=> 'font-icon-record',
// 	'font-icon-stop' 		=> 'font-icon-stop',
// 	'font-icon-next' 		=> 'font-icon-next',
// 	'font-icon-previous'	=> 'font-icon-previous',
// 	'font-icon-first'	 	=> 'font-icon-first',
// 	'font-icon-last' 		=> 'font-icon-last',
// 	'font-icon-resize-enlarge' 	=> 'font-icon-resize-enlarge',
// 	'font-icon-resize-shrink'	=> 'font-icon-resize-shrink',
// 	'font-icon-volume' 		=> 'font-icon-volume',
// 	'font-icon-sound'		=> 'font-icon-sound',
// 	'font-icon-mute'	 	=> 'font-icon-mute',
// 	'font-icon-flow-cascade'=> 'font-icon-flow-cascade',
// 	'font-icon-flow-branch' => 'font-icon-flow-branch',
// 	'font-icon-flow-tree'	=> 'font-icon-flow-tree',
// 	'font-icon-flow-line' 	=> 'font-icon-flow-line',
// 	'font-icon-flow-parallel'	=> 'font-icon-flow-parallel',	
// 	'font-icon-arrow-left-big-flat' 	=> 'font-icon-arrow-left-big-flat' , 
// 	'font-icon-arrow-down-big-flat'		=> 'font-icon-arrow-down-big-flat',
// 	'font-icon-arrow-up-big-flat' 		=> 'font-icon-arrow-up-big-flat',
// 	'font-icon-arrow-right-big-flat'	=> 'font-icon-arrow-right-big-flat', 
// 	'font-icon-arrow-left-small-flat'	=> 'font-icon-arrow-left-small-flat',
// 	'font-icon-arrow-down-small-flat' 	=> 'font-icon-arrow-down-small-flat',
// 	'font-icon-arrow-up-small-flat' 	=> 'font-icon-arrow-up-small-flat',
// 	'font-icon-arrow-right-small-flat' 	=> 'font-icon-arrow-right-small-flat', 
// 	'font-icon-arrow-left-circle'	=> 'font-icon-arrow-left-circle',
// 	'font-icon-arrow-down-circle' 	=> 'font-icon-arrow-down-circle', 
// 	'font-icon-arrow-up-circle' 	=> 'font-icon-arrow-up-circle',
// 	'font-icon-arrow-right-circle' 	=> 'font-icon-arrow-right-circle', 
// 	'font-icon-arrow-left-triangle'		=> 'font-icon-arrow-left-triangle',
// 	'font-icon-arrow-down-triangle' 	=> 'font-icon-arrow-down-triangle', 
// 	'font-icon-arrow-up-triangle' 		=> 'font-icon-arrow-up-triangle',
// 	'font-icon-arrow-right-triangle' 	=> 'font-icon-arrow-right-triangle', 
// 	'font-icon-arrow-left-simple-round'		=> 'font-icon-arrow-left-simple-round',
// 	'font-icon-arrow-down-simple-round' 	=> 'font-icon-arrow-down-simple-round', 
// 	'font-icon-arrow-up-simple-round' 		=> 'font-icon-arrow-up-simple-round', 
// 	'font-icon-arrow-right-simple-round' 	=> 'font-icon-arrow-right-simple-round',
// 	'font-icon-arrow-left-simple-thin-round' 	=> 'font-icon-arrow-left-simple-thin-round', 
// 	'font-icon-arrow-down-simple-thin-round'	=> 'font-icon-arrow-down-simple-thin-round',
// 	'font-icon-arrow-up-simple-thin-round' 		=> 'font-icon-arrow-up-simple-thin-round', 
// 	'font-icon-arrow-right-simple-thin-round' 	=> 'font-icon-arrow-right-simple-thin-round',
// 	'font-icon-arrow-left-simple-thin' 	=> 'font-icon-arrow-left-simple-thin',
// 	'font-icon-arrow-down-simple-thin' 	=> 'font-icon-arrow-down-simple-thin',
// 	'font-icon-arrow-up-simple-thin' 	=> 'font-icon-arrow-up-simple-thin',
// 	'font-icon-arrow-right-simple-thin' => 'font-icon-arrow-right-simple-thin',
// 	'font-icon-arrow-left-big' 	=> 'font-icon-arrow-left-big',
// 	'font-icon-arrow-down-big' 	=> 'font-icon-arrow-down-big',
// 	'font-icon-arrow-up-big' 	=> 'font-icon-arrow-up-big',
// 	'font-icon-arrow-right-big' => 'font-icon-arrow-right-big',
// 	'font-icon-arrow-menu' 		=> 'font-icon-arrow-menu',
// 	'font-icon-ellipsis' 		=> 'font-icon-ellipsis',
// 	'font-icon-dots' 			=> 'font-icon-dots',
// 	'font-icon-dot' 			=> 'font-icon-dot',
// 	'font-icon-align-right' 	=> 'font-icon-align-right',
// 	'font-icon-align-left' 		=> 'font-icon-align-left',
// 	'font-icon-align-justify' 	=> 'font-icon-align-justify',
// 	'font-icon-align-center' 	=> 'font-icon-align-center',
// 	'font-icon-group' 			=> 'font-icon-group',
// 	'font-icon-grid' 			=> 'font-icon-grid',
// 	'font-icon-grid-large' 		=> 'font-icon-grid-large',
// 	'font-icon-social-zerply' 			=> 'font-icon-social-zerply', 
// 	'font-icon-social-youtube'  		=> 'font-icon-social-youtube',
// 	'font-icon-social-yelp' 			=> 'font-icon-social-yelp',
// 	'font-icon-social-yahoo'			=> 'font-icon-social-yahoo',
// 	'font-icon-social-wordpress' 		=> 'font-icon-social-wordpress',
// 	'font-icon-social-virb' 			=> 'font-icon-social-virb',
// 	'font-icon-social-vimeo' 			=> 'font-icon-social-vimeo',
// 	'font-icon-social-viddler' 			=> 'font-icon-social-viddler',
// 	'font-icon-social-twitter' 			=> 'font-icon-social-twitter',
// 	'font-icon-social-tumblr' 			=> 'font-icon-social-tumblr',
// 	'font-icon-social-stumbleupon'		=> 'font-icon-social-stumbleupon',
// 	'font-icon-social-soundcloud' 		=> 'font-icon-social-soundcloud',
// 	'font-icon-social-skype' 			=> 'font-icon-social-skype',
// 	'font-icon-social-share-this'		=> 'font-icon-social-share-this',
// 	'font-icon-social-quora' 			=> 'font-icon-social-quora',
// 	'font-icon-social-pinterest'		=> 'font-icon-social-pinterest',
// 	'font-icon-social-photobucket'		=> 'font-icon-social-photobucket',
// 	'font-icon-social-paypal' 			=> 'font-icon-social-paypal',
// 	'font-icon-social-myspace' 			=> 'font-icon-social-myspace',
// 	'font-icon-social-linkedin' 		=> 'font-icon-social-linkedin',
// 	'font-icon-social-last-fm' 			=> 'font-icon-social-last-fm',
// 	'font-icon-social-instagram'		=> 'font-icon-social-instagram',
// 	'font-icon-social-grooveshark' 		=> 'font-icon-social-grooveshark',
// 	'font-icon-social-google-plus' 		=> 'font-icon-social-google-plus',
// 	'font-icon-social-github' 			=> 'font-icon-social-github',
// 	'font-icon-social-forrst' 			=> 'font-icon-social-forrst',
// 	'font-icon-social-flickr' 			=> 'font-icon-social-flickr',
// 	'font-icon-social-facebook' 		=> 'font-icon-social-facebook',
// 	'font-icon-social-evernote' 		=> 'font-icon-social-evernote',
// 	'font-icon-social-envato' 			=> 'font-icon-social-envato',
// 	'font-icon-social-email' 			=> 'font-icon-social-email', 
// 	'font-icon-social-dribbble'			=> 'font-icon-social-dribbble',
// 	'font-icon-social-digg' 			=> 'font-icon-social-digg',
// 	'font-icon-social-deviant-art' 		=> 'font-icon-social-deviant-art',
// 	'font-icon-social-blogger' 			=> 'font-icon-social-blogger',
// 	'font-icon-social-behance'			=> 'font-icon-social-behance',
// 	'font-icon-social-bebo' 			=> 'font-icon-social-bebo',
// 	'font-icon-social-addthis'			=> 'font-icon-social-addthis',
// 	'font-icon-social-500px' 			=> 'font-icon-social-500px',
// 	'lineicons-heart'		=> 	'lineicons-heart',
// 	'lineicons-cloud'		=> 	'lineicons-cloud',
// 	'lineicons-star'		=> 	'lineicons-star',
// 	'lineicons-tv'			=> 	'lineicons-tv',
// 	'lineicons-sound'		=> 	'lineicons-sound',
// 	'lineicons-video'		=> 	'lineicons-video',
// 	'lineicons-trash'		=> 	'lineicons-trash',
// 	'lineicons-user'		=> 	'lineicons-user',
// 	'lineicons-key' 		=> 	'lineicons-key',
// 	'lineicons-search' 		=> 	'lineicons-search',
// 	'lineicons-eye'			=> 	'lineicons-eye',
// 	'lineicons-bubble'		=> 	'lineicons-bubble',
// 	'lineicons-stack'		=> 	'lineicons-stack',
// 	'lineicons-cup'			=> 	'lineicons-cup',
// 	'lineicons-phone'		=> 	'lineicons-phone',
// 	'lineicons-news'		=> 	'lineicons-news',
// 	'lineicons-mail'		=> 	'lineicons-mail',
// 	'lineicons-like'		=> 	'lineicons-like',
// 	'lineicons-photo' 		=> 	'lineicons-photo',
// 	'lineicons-note' 		=> 	'lineicons-note',
// 	'lineicons-food'		=> 	'lineicons-food',
// 	'lineicons-tshirt'		=> 	'lineicons-tshirt',
// 	'lineicons-fire'		=> 	'lineicons-fire',
// 	'lineicons-clip'		=> 	'lineicons-clip',
// 	'lineicons-shop'		=> 	'lineicons-shop',
// 	'lineicons-calendar'	=> 	'lineicons-calendar',
// 	'lineicons-wallet'		=> 	'lineicons-wallet',
// 	'lineicons-vynil'		=> 	'lineicons-vynil',
// 	'lineicons-truck' 		=> 	'lineicons-truck',
// 	'lineicons-clock' 		=> 	'lineicons-clock',
// 	'lineicons-paperplane'	=> 	'lineicons-paperplane',
// 	'lineicons-params'		=> 	'lineicons-params',
// 	'lineicons-banknote'	=> 	'lineicons-banknote',
// 	'lineicons-data'		=> 	'lineicons-data',
// 	'lineicons-music'		=> 	'lineicons-music',
// 	'lineicons-megaphone'	=> 	'lineicons-megaphone',
// 	'lineicons-study'		=> 	'lineicons-study',
// 	'lineicons-world'		=> 	'lineicons-world',
// 	'lineicons-camera' 		=> 	'lineicons-camera',
// 	'lineicons-tag' 		=> 	'lineicons-tag',
// 	'lineicons-lock'		=> 	'lineicons-lock',
// 	'lineicons-bulb'		=> 	'lineicons-bulb',
// 	'lineicons-pen'			=> 	'lineicons-pen',
// 	'lineicons-diamond'		=> 	'lineicons-diamond',
// 	'lineicons-display'		=> 	'lineicons-display',
// 	'lineicons-location'	=> 	'lineicons-location',
// 	'lineicons-settings'	=> 	'lineicons-settings',
// 	'lineicons-lab'			=> 	'lineicons-lab',
// 	'steadyicons-envelope'			=>	'steadyicons-envelope',
// 	'steadyicons-email'				=>	'steadyicons-email',
// 	'steadyicons-files'				=>	'steadyicons-files',
// 	'steadyicons-uniE606'			=>	'steadyicons-uniE606',
// 	'steadyicons-file-settings'		=>	'steadyicons-file-settings',
// 	'steadyicons-file-add'			=>	'steadyicons-file-add',
// 	'steadyicons-file'				=>	'steadyicons-file',
// 	'steadyicons-align-left'		=>	'steadyicons-align-left',
// 	'steadyicons-align-right'		=>	'steadyicons-align-right',
// 	'steadyicons-align-center'		=>	'steadyicons-align-center',
// 	'steadyicons-align-justify'		=>	'steadyicons-align-justify',
// 	'steadyicons-file-broken'		=>	'steadyicons-file-broken',
// 	'steadyicons-browser'			=>	'steadyicons-browser',
// 	'steadyicons-windows'			=>	'steadyicons-windows',
// 	'steadyicons-window'			=>	'steadyicons-window',
// 	'steadyicons-folder'			=>	'steadyicons-folder',
// 	'steadyicons-folder-add'		=>	'steadyicons-folder-add',
// 	'steadyicons-folder-settings'	=>	'steadyicons-folder-settings',
// 	'steadyicons-folder-check'		=>	'steadyicons-folder-check',
// 	'steadyicons-connection-empty'	=>	'steadyicons-connection-empty',
// 	'steadyicons-connection-25'		=>	'steadyicons-connection-25',
// 	'steadyicons-connection-50'		=>	'steadyicons-connection-50',
// 	'steadyicons-connection-75'		=>	'steadyicons-connection-75',
// 	'steadyicons-connection-full'	=>	'steadyicons-connection-full',
// 	'steadyicons-list'				=>	'steadyicons-list',
// 	'steadyicons-grid'				=>	'steadyicons-grid',
// 	'steadyicons-uniE61E'			=>	'steadyicons-uniE61E',
// 	'steadyicons-battery-charging'	=>	'steadyicons-battery-charging',
// 	'steadyicons-battery-empty'		=>	'steadyicons-battery-empty',
// 	'steadyicons-battery-25'		=>	'steadyicons-battery-25',
// 	'steadyicons-battery-50'		=>	'steadyicons-battery-50',
// 	'steadyicons-battery-75'		=>	'steadyicons-battery-75',
// 	'steadyicons-battery-full'		=>	'steadyicons-battery-full',
// 	'steadyicons-settings'			=>	'steadyicons-settings',
// 	'steadyicons-arrow-left'		=>	'steadyicons-arrow-left',
// 	'steadyicons-arrow-up'			=>	'steadyicons-arrow-up',
// 	'steadyicons-arrow-down'		=>	'steadyicons-arrow-down',
// 	'steadyicons-arrow-right'		=>	'steadyicons-arrow-right',
// 	'steadyicons-reload'			=>	'steadyicons-reload',
// 	'steadyicons-refresh'			=>	'steadyicons-refresh',
// 	'steadyicons-mute'				=>	'steadyicons-mute',
// 	'steadyicons-microphone'		=>	'steadyicons-microphone',
// 	'steadyicons-microphone-off'	=>	'steadyicons-microphone-off',
// 	'steadyicons-book'				=>	'steadyicons-book',
// 	'steadyicons-checkmark'			=>	'steadyicons-checkmark',
// 	'steadyicons-checkbox-checked'	=>	'steadyicons-checkbox-checked',
// 	'steadyicons-checkbox'			=>	'steadyicons-checkbox',
// 	'steadyicons-paperclip'			=>	'steadyicons-paperclip',
// 	'steadyicons-download'			=>	'steadyicons-download',
// 	'steadyicons-tag'				=>	'steadyicons-tag',
// 	'steadyicons-trashcan'			=>	'steadyicons-trashcan',
// 	'steadyicons-search'			=>	'steadyicons-search',
// 	'steadyicons-zoom-in'			=>	'steadyicons-zoom-in',
// 	'steadyicons-chat'				=>	'steadyicons-chat',
// 	'steadyicons-chat-1'			=>	'steadyicons-chat-1',
// 	'steadyicons-chat-2'			=>	'steadyicons-chat-2',
// 	'steadyicons-chat-3'			=>	'steadyicons-chat-3',
// 	'steadyicons-comment'			=>	'steadyicons-comment',
// 	'steadyicons-calendar'			=>	'steadyicons-calendar',
// 	'steadyicons-bookmark'			=>	'steadyicons-bookmark',
// 	'steadyicons-email2'			=>	'steadyicons-email2',
// 	'steadyicons-heart'				=>	'steadyicons-heart',
// 	'steadyicons-enter'				=>	'steadyicons-enter',
// 	'steadyicons-cloud'				=>	'steadyicons-cloud',
// 	'steadyicons-book2'				=>	'steadyicons-book2',
// 	'steadyicons-star'				=>	'steadyicons-star',
// 	'steadyicons-clock'				=>	'steadyicons-clock',
// 	'steadyicons-printer'			=>	'steadyicons-printer',
// 	'steadyicons-home'				=>	'steadyicons-home',
// 	'steadyicons-flag'				=>	'steadyicons-flag',
// 	'steadyicons-meter'				=>	'steadyicons-meter',
// 	'steadyicons-switch'			=>	'steadyicons-switch',
// 	'steadyicons-forbidden'			=>	'steadyicons-forbidden',
// 	'steadyicons-lock'				=>	'steadyicons-lock',
// 	'steadyicons-unlocked'			=>	'steadyicons-unlocked',
// 	'steadyicons-unlocked2'			=>	'steadyicons-unlocked2',
// 	'steadyicons-users'				=>	'steadyicons-users',
// 	'steadyicons-user'				=>	'steadyicons-user',
// 	'steadyicons-users2'			=>	'steadyicons-users2',
// 	'steadyicons-user2'				=>	'steadyicons-user2',
// 	'steadyicons-bullhorn'			=>	'steadyicons-bullhorn',
// 	'steadyicons-share'				=>	'steadyicons-share',
// 	'steadyicons-screen'			=>	'steadyicons-screen',
// 	'steadyicons-phone'				=>	'steadyicons-phone',
// 	'steadyicons-phone-portrait'	=>	'steadyicons-phone-portrait',
// 	'steadyicons-phone-landscape'	=>	'steadyicons-phone-landscape',
// 	'steadyicons-tablet'			=>	'steadyicons-tablet',
// 	'steadyicons-tablet-landscape'	=>	'steadyicons-tablet-landscape',
// 	'steadyicons-laptop'			=>	'steadyicons-laptop',
// 	'steadyicons-camera'			=>	'steadyicons-camera',
// 	'steadyicons-microwave-oven'	=>	'steadyicons-microwave-oven',
// 	'steadyicons-credit-cards'		=>	'steadyicons-credit-cards',
// 	'steadyicons-calculator'		=>	'steadyicons-calculator',
// 	'steadyicons-bag'				=>	'steadyicons-bag',
// 	'steadyicons-diamond'			=>	'steadyicons-diamond',
// 	'steadyicons-drink'				=>	'steadyicons-drink',
// 	'steadyicons-shorts'			=>	'steadyicons-shorts',
// 	'steadyicons-vcard'				=>	'steadyicons-vcard',
// 	'steadyicons-sun'				=>	'steadyicons-sun',
// 	'steadyicons-bill'				=>	'steadyicons-bill',
// 	'steadyicons-coffee'			=>	'steadyicons-coffee',
// 	'steadyicons-uniE667'			=>	'steadyicons-uniE667',
// 	'steadyicons-newspaper'			=>	'steadyicons-newspaper',
// 	'steadyicons-stack'				=>	'steadyicons-stack',
// 	'steadyicons-map-marker'		=>	'steadyicons-map-marker',
// 	'steadyicons-map'				=>	'steadyicons-map',
// 	'steadyicons-support'			=>	'steadyicons-support',
// 	'steadyicons-uniE66B'			=>	'steadyicons-uniE66B',
// 	'steadyicons-barbell'			=>	'steadyicons-barbell',
// 	'steadyicons-stopwatch'			=>	'steadyicons-stopwatch',
// 	'steadyicons-atom'				=>	'steadyicons-atom',
// 	'steadyicons-syringe'			=>	'steadyicons-syringe',
// 	'steadyicons-health'			=>	'steadyicons-health',
// 	'steadyicons-bolt'				=>	'steadyicons-bolt',
// 	'steadyicons-pill'				=>	'steadyicons-pill',
// 	'steadyicons-bones'				=>	'steadyicons-bones',
// 	'steadyicons-lab'				=>	'steadyicons-lab',
// 	'steadyicons-clipboard'			=>	'steadyicons-clipboard',
// 	'steadyicons-mug'				=>	'steadyicons-mug',
// 	'steadyicons-bucket'			=>	'steadyicons-bucket',
// 	'steadyicons-select'			=>	'steadyicons-select',
// 	'steadyicons-graph'				=>	'steadyicons-graph',
// 	'steadyicons-crop'				=>	'steadyicons-crop',
// 	'steadyicons-image'				=>	'steadyicons-image',
// 	'steadyicons-cube'				=>	'steadyicons-cube',
// 	'steadyicons-bars'				=>	'steadyicons-bars',
// 	'steadyicons-chart'				=>	'steadyicons-chart',
// 	'steadyicons-pencil'			=>	'steadyicons-pencil',
// 	'steadyicons-type'				=>	'steadyicons-type',
// 	'steadyicons-box'				=>	'steadyicons-box',
// 	'steadyicons-archive'			=>	'steadyicons-archive',
// 	'steadyicons-wifi-low'			=>	'steadyicons-wifi-low',
// 	'steadyicons-wifi-mid'			=>	'steadyicons-wifi-mid',
// 	'steadyicons-wifi-full'			=>	'steadyicons-wifi-full',
// 	'steadyicons-volume'			=>	'steadyicons-volume',
// 	'steadyicons-volume-increase'	=>	'steadyicons-volume-increase',
// 	'steadyicons-volume-decrease'	=>	'steadyicons-volume-decrease',
// 	'steadyicons-eyedropper'		=>	'steadyicons-eyedropper',
// 	'steadyicons-measure'			=>	'steadyicons-measure',
// 	'fa-glass' 						=> 	'fa-glass',
// 	'fa-music' 						=> 	'fa-music',
// 	'fa-search' 					=> 	'fa-search',
// 	'fa-envelope-o' 				=> 	'fa-envelope-o',
// 	'fa-heart' 						=> 	'fa-heart',
// 	'fa-star' 						=> 	'fa-star',
// 	'fa-star-o' 					=> 	'fa-star-o',
// 	'fa-user' 						=> 	'fa-user',
// 	'fa-film' 						=> 	'fa-film',
// 	'fa-th-large' 					=> 	'fa-th-large',
// 	'fa-th' 						=> 	'fa-th',
// 	'fa-th-list' 					=> 	'fa-th-list',
// 	'fa-check' 						=> 	'fa-check',
// 	'fa-times' 						=> 	'fa-times',
// 	'fa-search-plus' 				=> 	'fa-search-plus',
// 	'fa-search-minus' 				=> 	'fa-search-minus',
// 	'fa-power-off' 					=> 	'fa-power-off',
// 	'fa-signal' 					=> 	'fa-signal',
// 	'fa-gear' 						=> 	'fa-gear',
// 	'fa-cog' 						=> 	'fa-cog',
// 	'fa-trash-o' 					=> 	'fa-trash-o',
// 	'fa-home' 						=> 	'fa-home',
// 	'fa-file-o' 					=> 	'fa-file-o',
// 	'fa-clock-o' 					=> 	'fa-clock-o',
// 	'fa-road' 						=> 	'fa-road',
// 	'fa-download' 					=> 	'fa-download',
// 	'fa-arrow-circle-o-down' 		=> 	'fa-arrow-circle-o-down',
// 	'fa-arrow-circle-o-up' 			=> 	'fa-arrow-circle-o-up',
// 	'fa-inbox' 						=> 	'fa-inbox',
// 	'fa-play-circle-o' 				=> 	'fa-play-circle-o',
// 	'fa-rotate-right' 				=> 	'fa-rotate-right',
// 	'fa-repeat' 					=> 	'fa-repeat',
// 	'fa-refresh' 					=> 	'fa-refresh',
// 	'fa-list-alt' 					=> 	'fa-list-alt',
// 	'fa-lock' 						=> 	'fa-lock',
// 	'fa-flag' 						=> 	'fa-flag',
// 	'fa-headphones' 				=> 	'fa-headphones',
// 	'fa-volume-off' 				=> 	'fa-volume-off',
// 	'fa-volume-down'				=> 	'fa-volume-down',
// 	'fa-volume-up' 					=> 	'fa-volume-up',
// 	'fa-qrcode' 					=> 	'fa-qrcode',
// 	'fa-barcode' 					=> 	'fa-barcode',
// 	'fa-tag' 						=> 	'fa-tag',
// 	'fa-tags' 						=> 	'fa-tags',
// 	'fa-book' 						=> 	'fa-book',
// 	'fa-bookmark' 					=> 	'fa-bookmark',
// 	'fa-print' 						=> 	'fa-print',
// 	'fa-camera' 					=> 	'fa-camera',
// 	'fa-font' 						=> 	'fa-font',
// 	'fa-bold' 						=> 	'fa-bold',
// 	'fa-italic' 					=> 	'fa-italic',
// 	'fa-text-height' 				=> 	'fa-text-height',
// 	'fa-text-width' 				=> 	'fa-text-width',
// 	'fa-align-left' 				=> 	'fa-align-left',
// 	'fa-align-center' 				=> 	'fa-align-center',
// 	'fa-align-right' 				=> 	'fa-align-right',
// 	'fa-align-justify' 				=> 	'fa-align-justify',
// 	'fa-list'				 		=> 	'fa-list',
// 	'fa-dedent' 					=> 	'fa-dedent',
// 	'fa-outdent' 					=> 	'fa-outdent',
// 	'fa-indent' 					=> 	'fa-indent',
// 	'fa-video-camera' 				=> 	'fa-video-camera',
// 	'fa-photo' 						=> 	'fa-photo',
// 	'fa-image'			 			=> 	'fa-image',
// 	'fa-picture-o' 					=> 	'fa-picture-o',
// 	'fa-pencil' 					=> 	'fa-pencil',
// 	'fa-map-marker' 				=> 	'fa-map-marker',
// 	'fa-adjust' 					=> 	'fa-adjust',
// 	'fa-tint' 						=> 	'fa-tint',
// 	'fa-edit'	 					=> 	'fa-edit',
// 	'fa-pencil-square-o' 			=> 	'fa-pencil-square-o', 
// 	'fa-share-square-o' 			=> 	'fa-share-square-o',
// 	'fa-check-square-o' 			=> 	'fa-check-square-o',
// 	'fa-arrows' 					=> 	'fa-arrows',
// 	'fa-step-backward' 				=> 	'fa-step-backward',
// 	'fa-fast-backward' 				=> 	'fa-fast-backward',
// 	'fa-backward' 					=> 	'fa-backward',
// 	'fa-play' 						=> 	'fa-play',
// 	'fa-pause' 						=> 	'fa-pause',
// 	'fa-stop' 						=> 	'fa-stop',
// 	'fa-forward' 					=> 	'fa-forward',
// 	'fa-fast-forward' 				=> 	'fa-fast-forward',
// 	'fa-step-forward' 				=> 	'fa-step-forward',
// 	'fa-eject' 						=> 	'fa-eject',
// 	'fa-chevron-left' 				=> 	'fa-chevron-left',
// 	'fa-chevron-right' 				=> 	'fa-chevron-right',
// 	'fa-plus-circle' 				=> 	'fa-plus-circle',
// 	'fa-minus-circle' 				=> 	'fa-minus-circle',
// 	'fa-times-circle' 				=> 	'fa-times-circle',
// 	'fa-check-circle' 				=> 	'fa-check-circle',
// 	'fa-question-circle' 			=> 	'fa-question-circle',
// 	'fa-info-circle' 				=> 	'fa-info-circle',
// 	'fa-crosshairs' 				=> 	'fa-crosshairs',
// 	'fa-times-circle-o' 			=> 	'fa-times-circle-o',
// 	'fa-check-circle-o' 			=> 	'fa-check-circle-o',
// 	'fa-ban' 						=> 	'fa-ban',
// 	'fa-arrow-left' 				=> 	'fa-arrow-left',
// 	'fa-arrow-right' 				=> 	'fa-arrow-right',
// 	'fa-arrow-up'		 			=> 	'fa-arrow-up',
// 	'fa-arrow-down' 				=> 	'fa-arrow-down',
// 	'fa-mail-forward' 				=> 	'fa-mail-forward',
// 	'fa-share' 						=> 	'fa-share',
// 	'fa-expand' 					=> 	'fa-expand',
// 	'fa-compress' 					=> 	'fa-compress',
// 	'fa-plus' 						=> 	'fa-plus',
// 	'fa-minus' 						=> 	'fa-minus',
// 	'fa-asterisk' 					=> 	'fa-asterisk',
// 	'fa-exclamation-circle' 		=> 	'fa-exclamation-circle',
// 	'fa-gift' 						=> 	'fa-gift',
// 	'fa-leaf' 						=> 	'fa-leaf',
// 	'fa-fire' 						=> 	'fa-fire',
// 	'fa-eye' 						=> 	'fa-eye',
// 	'fa-eye-slash' 					=> 	'fa-eye-slash',
// 	'fa-warning' 					=> 	'fa-warning',
// 	'fa-exclamation-triangle'	 	=> 	'fa-exclamation-triangle',
// 	'fa-plane' 						=> 	'fa-plane',
// 	'fa-calendar' 					=> 	'fa-calendar',
// 	'fa-random' 					=> 	'fa-random',
// 	'fa-comment' 					=> 	'fa-comment',
// 	'fa-magnet' 					=> 	'fa-magnet',
// 	'fa-chevron-up' 				=> 	'fa-chevron-up',
// 	'fa-chevron-down' 				=> 	'fa-chevron-down',
// 	'fa-retweet' 					=> 	'fa-retweet',
// 	'fa-shopping-cart' 				=> 	'fa-shopping-cart',
// 	'fa-folder' 					=> 	'fa-folder',
// 	'fa-folder-open' 				=> 	'fa-folder-open',
// 	'fa-arrows-v' 					=> 	'fa-arrows-v',
// 	'fa-arrows-h' 					=> 	'fa-arrows-h',
// 	'fa-bar-chart-o' 				=> 	'fa-bar-chart-o',
// 	'fa-twitter-square' 			=> 	'fa-twitter-square',
// 	'fa-facebook-square' 			=> 	'fa-facebook-square',
// 	'fa-camera-retro' 				=> 	'fa-camera-retro',
// 	'fa-key' 						=> 	'fa-key',
// 	'fa-gears' 						=> 	'fa-gears',
// 	'fa-cogs' 						=> 	'fa-cogs',
// 	'fa-comments' 					=> 	'fa-comments',
// 	'fa-thumbs-o-up' 				=> 	'fa-thumbs-o-up',
// 	'fa-thumbs-o-down' 				=> 	'fa-thumbs-o-down',
// 	'fa-star-half' 					=> 	'fa-star-half',
// 	'fa-heart-o' 					=> 	'fa-heart-o',
// 	'fa-sign-out' 					=> 	'fa-sign-out',
// 	'fa-linkedin-square' 			=> 	'fa-linkedin-square',
// 	'fa-thumb-tack' 				=> 	'fa-thumb-tack',
// 	'fa-external-link' 				=> 	'fa-external-link',
// 	'fa-sign-in' 					=> 	'fa-sign-in',
// 	'fa-trophy' 					=> 	'fa-trophy',
// 	'fa-github-square' 				=> 	'fa-github-square',
// 	'fa-upload' 					=> 	'fa-upload',
// 	'fa-lemon-o' 					=> 	'fa-lemon-o',
// 	'fa-phone'			 			=> 	'fa-phone',
// 	'fa-square-o' 					=> 	'fa-square-o',
// 	'fa-bookmark-o' 				=> 	'fa-bookmark-o',
// 	'fa-phone-square' 				=> 	'fa-phone-square',
// 	'fa-twitter' 					=> 	'fa-twitter',
// 	'fa-facebook' 					=> 	'fa-facebook',
// 	'fa-github' 					=> 	'fa-github',
// 	'fa-unlock' 					=> 	'fa-unlock',
// 	'fa-credit-card' 				=> 	'fa-credit-card',
// 	'fa-rss' 						=> 	'fa-rss',
// 	'fa-hdd-o'		 				=> 	'fa-hdd-o',
// 	'fa-bullhorn' 					=> 	'fa-bullhorn',
// 	'fa-bell' 						=> 	'fa-bell',
// 	'fa-certificate' 				=> 	'fa-certificate',
// 	'fa-hand-o-right' 				=> 	'fa-hand-o-right',
// 	'fa-hand-o-left'	 			=> 	'fa-hand-o-left',
// 	'fa-hand-o-up'			 		=> 	'fa-hand-o-up',
// 	'fa-hand-o-down' 				=> 	'fa-hand-o-down',
// 	'fa-arrow-circle-left' 			=> 	'fa-arrow-circle-left',
// 	'fa-arrow-circle-right' 		=> 	'fa-arrow-circle-right',
// 	'fa-arrow-circle-up' 			=> 	'fa-arrow-circle-up',
// 	'fa-arrow-circle-down' 			=> 	'fa-arrow-circle-down',
// 	'fa-globe' 						=> 	'fa-globe',
// 	'fa-wrench' 					=> 	'fa-wrench',
// 	'fa-tasks' 						=> 	'fa-tasks',
// 	'fa-filter' 					=> 	'fa-filter',
// 	'fa-briefcase' 					=> 	'fa-briefcase',
// 	'fa-arrows-alt' 				=> 	'fa-arrows-alt',
// 	'fa-group' 						=> 	'fa-group',
// 	'fa-users' 						=> 	'fa-users',
// 	'fa-chain' 						=> 	'fa-chain',
// 	'fa-link' 						=> 	'fa-link',
// 	'fa-cloud' 						=> 	'fa-cloud',
// 	'fa-flask' 						=> 	'fa-flask',
// 	'fa-cut' 						=> 	'fa-cut',
// 	'fa-scissors' 					=> 	'fa-scissors',
// 	'fa-copy' 						=> 	'fa-copy',
// 	'fa-files-o' 					=> 	'fa-files-o',
// 	'fa-paperclip' 					=> 	'fa-paperclip',
// 	'fa-save' 						=> 	'fa-save',
// 	'fa-floppy-o' 					=> 	'fa-floppy-o',
// 	'fa-square' 					=> 	'fa-square',
// 	'fa-navicon' 					=> 	'fa-navicon',
// 	'fa-reorder' 					=> 	'fa-reorder',
// 	'fa-bars' 						=> 	'fa-bars',
// 	'fa-list-ul' 					=> 	'fa-list-ul',
// 	'fa-list-ol' 					=> 	'fa-list-ol',
// 	'fa-strikethrough' 				=> 	'fa-strikethrough',
// 	'fa-underline' 					=> 	'fa-underline',
// 	'fa-table' 						=> 	'fa-table',
// 	'fa-magic' 						=> 	'fa-magic',
// 	'fa-truck' 						=> 	'fa-truck',
// 	'fa-pinterest' 					=> 	'fa-pinterest',
// 	'fa-pinterest-square' 			=> 	'fa-pinterest-square',
// 	'fa-google-plus-square' 		=> 	'fa-google-plus-square',
// 	'fa-google-plus' 				=> 	'fa-google-plus',
// 	'fa-money' 						=> 	'fa-money',
// 	'fa-caret-down' 				=> 	'fa-caret-down',
// 	'fa-caret-up' 					=> 	'fa-caret-up',
// 	'fa-caret-left' 				=> 	'fa-caret-left',
// 	'fa-caret-right' 				=> 	'fa-caret-right',
// 	'fa-columns' 					=> 	'fa-columns',
// 	'fa-unsorted' 					=> 	'fa-unsorted',
// 	'fa-sort' 						=> 	'fa-sort',
// 	'fa-sort-down' 					=> 	'fa-sort-down',
// 	'fa-sort-desc' 					=> 	'fa-sort-desc',
// 	'fa-sort-up' 					=> 	'fa-sort-up',
// 	'fa-sort-asc' 					=> 	'fa-sort-asc',
// 	'fa-envelope' 					=> 	'fa-envelope',
// 	'fa-linkedin' 					=> 	'fa-linkedin',
// 	'fa-rotate-left' 				=> 	'fa-rotate-left',
// 	'fa-undo' 						=> 	'fa-undo',
// 	'fa-legal' 						=> 	'fa-legal',
// 	'fa-gavel' 						=> 	'fa-gavel',
// 	'fa-dashboard' 					=> 	'fa-dashboard',
// 	'fa-tachometer'		 			=> 	'fa-tachometer',
// 	'fa-comment-o' 					=> 	'fa-comment-o',
// 	'fa-comments-o' 				=> 	'fa-comments-o',
// 	'fa-flash' 						=> 	'fa-flash',
// 	'fa-bolt' 						=> 	'fa-bolt',
// 	'fa-sitemap' 					=> 	'fa-sitemap',
// 	'fa-umbrella' 					=> 	'fa-umbrella',
// 	'fa-paste' 						=> 	'fa-paste',
// 	'fa-clipboard' 					=> 	'fa-clipboard',
// 	'fa-lightbulb-o' 				=> 	'fa-lightbulb-o',
// 	'fa-exchange' 					=> 	'fa-exchange',
// 	'fa-cloud-download' 			=> 	'fa-cloud-download',
// 	'fa-cloud-upload' 				=> 	'fa-cloud-upload',
// 	'fa-user-md' 					=> 	'fa-user-md',
// 	'fa-stethoscope' 				=> 	'fa-stethoscope',
// 	'fa-suitcase' 					=> 	'fa-suitcase',
// 	'fa-bell-o' 					=> 	'fa-bell-o',
// 	'fa-coffee' 					=> 	'fa-coffee',
// 	'fa-cutlery' 					=> 	'fa-cutlery',
// 	'fa-file-text-o' 				=> 	'fa-file-text-o',
// 	'fa-building-o' 				=> 	'fa-building-o',
// 	'fa-hospital-o' 				=> 	'fa-hospital-o',
// 	'fa-ambulance'					=> 	'fa-ambulance',
// 	'fa-medkit' 					=> 	'fa-medkit',
// 	'fa-fighter-jet' 				=> 	'fa-fighter-jet',
// 	'fa-beer' 						=> 	'fa-beer',
// 	'fa-h-square' 					=> 	'fa-h-square',
// 	'fa-plus-square' 				=> 	'fa-plus-square',
// 	'fa-angle-double-left' 			=> 	'fa-angle-double-left',
// 	'fa-angle-double-right' 		=> 	'fa-angle-double-right',
// 	'fa-angle-double-up' 			=> 	'fa-angle-double-up',
// 	'fa-angle-double-down' 			=> 	'fa-angle-double-down',
// 	'fa-angle-left' 				=> 	'fa-angle-left',
// 	'fa-angle-right' 				=> 	'fa-angle-right',
// 	'fa-angle-up' 					=> 	'fa-angle-up',
// 	'fa-angle-down' 				=> 	'fa-angle-down',
// 	'fa-desktop' 					=> 	'fa-desktop',
// 	'fa-laptop' 					=> 	'fa-laptop',
// 	'fa-tablet' 					=> 	'fa-tablet',
// 	'fa-mobile-phone' 				=> 	'fa-mobile-phone',
// 	'fa-mobile' 					=> 	'fa-mobile',
// 	'fa-circle-o' 					=> 	'fa-circle-o',
// 	'fa-quote-left' 				=> 	'fa-quote-left',
// 	'fa-quote-right' 				=> 	'fa-quote-right',
// 	'fa-spinner' 					=> 	'fa-spinner',
// 	'fa-circle' 					=> 	'fa-circle',
// 	'fa-mail-reply' 				=> 	'fa-mail-reply',
// 	'fa-reply' 						=> 	'fa-reply',
// 	'fa-github-alt' 				=> 	'fa-github-alt',
// 	'fa-folder-o' 					=> 	'fa-folder-o',
// 	'fa-folder-open-o' 				=> 	'fa-folder-open-o',
// 	'fa-smile-o' 					=> 	'fa-smile-o',
// 	'fa-frown-o' 					=> 	'fa-frown-o',
// 	'fa-meh-o' 						=> 	'fa-meh-o',
// 	'fa-gamepad' 					=> 	'fa-gamepad',
// 	'fa-keyboard-o' 				=> 	'fa-keyboard-o',
// 	'fa-flag-o' 					=> 	'fa-flag-o',
// 	'fa-flag-checkered' 			=> 	'fa-flag-checkered',
// 	'fa-terminal' 					=> 	'fa-terminal',
// 	'fa-code' 						=> 	'fa-code',
// 	'fa-mail-reply-all' 			=> 	'fa-mail-reply-all',
// 	'fa-reply-all' 					=> 	'fa-reply-all',
// 	'fa-star-half-empty' 			=> 	'fa-star-half-empty',
// 	'fa-star-half-full' 			=> 	'fa-star-half-full',
// 	'fa-star-half-o' 				=> 	'fa-star-half-o',
// 	'fa-location-arrow' 			=> 	'fa-location-arrow',
// 	'fa-crop' 						=> 	'fa-crop',
// 	'fa-code-fork' 					=> 	'fa-code-fork',
// 	'fa-unlink'						=> 	'fa-unlink',
// 	'fa-chain-broken' 				=> 	'fa-chain-broken',
// 	'fa-question' 					=> 	'fa-question',
// 	'fa-info' 						=> 	'fa-info',
// 	'fa-exclamation' 				=> 	'fa-exclamation',
// 	'fa-superscript' 				=> 	'fa-superscript',
// 	'fa-subscript' 					=> 	'fa-subscript',
// 	'fa-eraser' 					=> 	'fa-eraser',
// 	'fa-puzzle-piece' 				=> 	'fa-puzzle-piece',
// 	'fa-microphone' 				=> 	'fa-microphone',
// 	'fa-microphone-slash' 			=> 	'fa-microphone-slash',
// 	'fa-shield' 					=> 	'fa-shield',
// 	'fa-calendar-o' 				=> 	'fa-calendar-o',
// 	'fa-fire-extinguisher' 			=> 	'fa-fire-extinguisher',
// 	'fa-rocket' 					=> 	'fa-rocket',
// 	'fa-maxcdn'		 				=> 	'fa-maxcdn',
// 	'fa-chevron-circle-left' 		=> 	'fa-chevron-circle-left', 
// 	'fa-chevron-circle-right' 		=> 	'fa-chevron-circle-right',
// 	'fa-chevron-circle-up' 			=> 	'fa-chevron-circle-up',
// 	'fa-chevron-circle-down' 		=> 	'fa-chevron-circle-down',
// 	'fa-html5' 						=> 	'fa-html5',
// 	'fa-css3' 						=> 	'fa-css3',
// 	'fa-anchor' 					=> 	'fa-anchor',
// 	'fa-unlock-alt' 				=> 	'fa-unlock-alt',
// 	'fa-bullseye' 					=> 	'fa-bullseye',
// 	'fa-ellipsis-h' 				=> 	'fa-ellipsis-h',
// 	'fa-ellipsis-v' 				=> 	'fa-ellipsis-v',
// 	'fa-rss-square'		 			=> 	'fa-rss-square',
// 	'fa-play-circle' 				=> 	'fa-play-circle',
// 	'fa-ticket' 					=> 	'fa-ticket',
// 	'fa-minus-square' 				=> 	'fa-minus-square',
// 	'fa-minus-square-o' 			=> 	'fa-minus-square-o',
// 	'fa-level-up' 					=> 	'fa-level-up',
// 	'fa-level-down' 				=> 	'fa-level-down',
// 	'fa-check-square' 				=> 	'fa-check-square',
// 	'fa-pencil-square' 				=> 	'fa-pencil-square',
// 	'fa-external-link-square' 		=> 	'fa-external-link-square',
// 	'fa-share-square' 				=> 	'fa-share-square',
// 	'fa-compass' 					=> 	'fa-compass',
// 	'fa-toggle-down' 				=> 	'fa-toggle-down',
// 	'fa-caret-square-o-down'		=> 	'fa-caret-square-o-down',
// 	'fa-toggle-up' 					=> 	'fa-toggle-up',
// 	'fa-caret-square-o-up'	 		=> 	'fa-caret-square-o-up',
// 	'fa-toggle-right' 				=> 	'fa-toggle-right',
// 	'fa-caret-square-o-right' 		=> 	'fa-caret-square-o-right',
// 	'fa-euro' 						=> 	'fa-euro',
// 	'fa-eur' 						=> 	'fa-eur',
// 	'fa-gbp' 						=> 	'fa-gbp',
// 	'fa-dollar' 					=> 	'fa-dollar',
// 	'fa-usd' 						=> 	'fa-usd',
// 	'fa-rupee' 						=> 	'fa-rupee',
// 	'fa-inr' 						=> 	'fa-inr',
// 	'fa-cny' 						=> 	'fa-cny',
// 	'fa-rmb' 						=> 	'fa-rmb',
// 	'fa-yen' 						=> 	'fa-yen',
// 	'fa-jpy' 						=> 	'fa-jpy',
// 	'fa-ruble' 						=> 	'fa-ruble',
// 	'fa-rouble' 					=> 	'fa-rouble',
// 	'fa-rub' 						=> 	'fa-rub',
// 	'fa-won' 						=> 	'fa-won',
// 	'fa-krw' 						=> 	'fa-krw',
// 	'fa-bitcoin' 					=> 	'fa-bitcoin',
// 	'fa-btc' 						=> 	'fa-btc',
// 	'fa-file' 						=> 	'fa-file',
// 	'fa-file-text' 					=> 	'fa-file-text',
// 	'fa-sort-alpha-asc' 			=> 	'fa-sort-alpha-asc',
// 	'fa-sort-alpha-desc' 			=> 	'fa-sort-alpha-desc',
// 	'fa-sort-amount-asc' 			=> 	'fa-sort-amount-asc',
// 	'fa-sort-amount-desc' 			=> 	'fa-sort-amount-desc',
// 	'fa-sort-numeric-asc' 			=> 	'fa-sort-numeric-asc',
// 	'fa-sort-numeric-desc' 			=> 	'fa-sort-numeric-desc',
// 	'fa-thumbs-up' 					=> 	'fa-thumbs-up',
// 	'fa-thumbs-down' 				=> 	'fa-thumbs-down',
// 	'fa-youtube-square' 			=> 	'fa-youtube-square',
// 	'fa-youtube' 					=> 	'fa-youtube',
// 	'fa-xing' 						=> 	'fa-xing',
// 	'fa-xing-square' 				=> 	'fa-xing-square',
// 	'fa-youtube-play' 				=> 	'fa-youtube-play',
// 	'fa-dropbox' 					=> 	'fa-dropbox',
// 	'fa-stack-overflow' 			=> 	'fa-stack-overflow',
// 	'fa-instagram' 					=> 	'fa-instagram',
// 	'fa-flickr' 					=> 	'fa-flickr',
// 	'fa-adn' 						=> 	'fa-adn',
// 	'fa-bitbucket' 					=> 	'fa-bitbucket',
// 	'fa-bitbucket-square'			=> 	'fa-bitbucket-square',
// 	'fa-tumblr' 					=> 	'fa-tumblr',
// 	'fa-tumblr-square' 				=> 	'fa-tumblr-square',
// 	'fa-long-arrow-down' 			=> 	'fa-long-arrow-down',
// 	'fa-long-arrow-up' 				=> 	'fa-long-arrow-up',
// 	'fa-long-arrow-left' 			=> 	'fa-long-arrow-left',
// 	'fa-long-arrow-right' 			=> 	'fa-long-arrow-right',
// 	'fa-apple' 						=> 	'fa-apple',
// 	'fa-windows' 					=> 	'fa-windows',
// 	'fa-android' 					=> 	'fa-android',
// 	'fa-linux' 						=> 	'fa-linux',
// 	'fa-dribbble' 					=> 	'fa-dribbble',
// 	'fa-skype' 						=> 	'fa-skype',
// 	'fa-foursquare' 				=> 	'fa-foursquare',
// 	'fa-trello' 					=> 	'fa-trello',
// 	'fa-female' 					=> 	'fa-female',
// 	'fa-male' 						=> 	'fa-male',
// 	'fa-gittip' 					=> 	'fa-gittip',
// 	'fa-sun-o' 						=> 	'fa-sun-o',
// 	'fa-moon-o' 					=> 	'fa-moon-o',
// 	'fa-archive' 					=> 	'fa-archive',
// 	'fa-bug' 						=> 	'fa-bug',
// 	'fa-vk' 						=> 	'fa-vk',
// 	'fa-weibo' 						=> 	'fa-weibo',
// 	'fa-renren' 					=> 	'fa-renren',
// 	'fa-pagelines' 					=> 	'fa-pagelines',
// 	'fa-stack-exchange' 			=> 	'fa-stack-exchange',
// 	'fa-arrow-circle-o-right' 		=> 	'fa-arrow-circle-o-right',
// 	'fa-arrow-circle-o-left' 		=> 	'fa-arrow-circle-o-left',
// 	'fa-toggle-left' 				=> 	'fa-toggle-left',
// 	'fa-caret-square-o-left' 		=> 	'fa-caret-square-o-left',
// 	'fa-dot-circle-o' 				=> 	'fa-dot-circle-o',
// 	'fa-wheelchair' 				=> 	'fa-wheelchair',
// 	'fa-vimeo-square' 				=> 	'fa-vimeo-square',
// 	'fa-turkish-lira' 				=> 	'fa-turkish-lira',
// 	'fa-try' 						=> 	'fa-try',
// 	'fa-plus-square-o' 				=> 	'fa-plus-square-o', 
// 	'fa-space-shuttle' 				=> 	'fa-space-shuttle',
// 	'fa-slack' 						=> 	'fa-slack',
// 	'fa-envelope-square' 			=> 	'fa-envelope-square',
// 	'fa-wordpress' 					=> 	'fa-wordpress',
// 	'fa-openid' 					=> 	'fa-openid',
// 	'fa-institution' 				=> 	'fa-institution',
// 	'fa-bank' 						=> 	'fa-bank',
// 	'fa-university' 				=> 	'fa-university',
// 	'fa-mortar-board' 				=> 	'fa-mortar-board',
// 	'fa-graduation-cap' 			=> 	'fa-graduation-cap',
// 	'fa-yahoo' 						=> 	'fa-yahoo',
// 	'fa-google' 					=> 	'fa-google',
// 	'fa-reddit' 					=> 	'fa-reddit',
// 	'fa-reddit-square' 				=> 	'fa-reddit-square',
// 	'fa-stumbleupon-circle' 		=> 	'fa-stumbleupon-circle',
// 	'fa-stumbleupon' 				=> 	'fa-stumbleupon',
// 	'fa-delicious' 					=> 	'fa-delicious',
// 	'fa-digg' 						=> 	'fa-digg',
// 	'fa-pied-piper-square' 			=> 	'fa-pied-piper-square',
// 	'fa-pied-piper' 				=> 	'fa-pied-piper',
// 	'fa-pied-piper-alt' 			=> 	'fa-pied-piper-alt',
// 	'fa-drupal' 					=> 	'fa-drupal',
// 	'fa-joomla' 					=> 	'fa-joomla',
// 	'fa-language' 					=> 	'fa-language',
// 	'fa-fax' 						=> 	'fa-fax',
// 	'fa-building' 					=> 	'fa-building',
// 	'fa-child' 						=> 	'fa-child',
// 	'fa-paw' 						=> 	'fa-paw',
// 	'fa-spoon' 						=> 	'fa-spoon',
// 	'fa-cube' 						=> 	'fa-cube',
// 	'fa-cubes' 						=> 	'fa-cubes',
// 	'fa-behance' 					=> 	'fa-behance',
// 	'fa-behance-square' 			=> 	'fa-behance-square',
// 	'fa-steam' 						=> 	'fa-steam',
// 	'fa-steam-square' 				=> 	'fa-steam-square',
// 	'fa-recycle' 					=> 	'fa-recycle',
// 	'fa-automobile' 				=> 	'fa-automobile',
// 	'fa-car' 						=> 	'fa-car',
// 	'fa-cab' 						=> 	'fa-cab',
// 	'fa-taxi' 						=> 	'fa-taxi',
// 	'fa-tree' 						=>	'fa-tree',
// 	'fa-spotify' 					=> 	'fa-spotify',
// 	'fa-deviantart' 				=> 	'fa-deviantart',
// 	'fa-soundcloud' 				=> 	'fa-soundcloud',
// 	'fa-database' 					=> 	'fa-database',
// 	'fa-file-pdf-o' 				=> 	'fa-file-pdf-o',
// 	'fa-file-word-o'	 			=> 	'fa-file-word-o',
// 	'fa-file-excel-o' 				=> 	'fa-file-excel-o',
// 	'fa-file-powerpoint-o' 			=> 	'fa-file-powerpoint-o',
// 	'fa-file-photo-o' 				=> 	'fa-file-photo-o',
// 	'fa-file-picture-o' 			=> 	'fa-file-picture-o',
// 	'fa-file-image-o' 				=> 	'fa-file-image-o',
// 	'fa-file-zip-o' 				=> 	'fa-file-zip-o',
// 	'fa-file-archive-o' 			=> 	'fa-file-archive-o',
// 	'fa-file-sound-o' 				=> 	'fa-file-sound-o',
// 	'fa-file-audio-o' 				=> 	'fa-file-audio-o',
// 	'fa-file-movie-o' 				=> 	'fa-file-movie-o',
// 	'fa-file-video-o' 				=> 	'fa-file-video-o',
// 	'fa-file-code-o' 				=> 	'fa-file-code-o',
// 	'fa-vine' 						=> 	'fa-vine',
// 	'fa-codepen' 					=> 	'fa-codepen',
// 	'fa-jsfiddle' 					=> 	'fa-jsfiddle',
// 	'fa-life-bouy' 					=> 	'fa-life-bouy',
// 	'fa-life-saver' 				=> 	'fa-life-saver',
// 	'fa-support' 					=> 	'fa-support',
// 	'fa-life-ring' 					=> 	'fa-life-ring',
// 	'fa-circle-o-notch' 			=> 	'fa-circle-o-notch',
// 	'fa-ra' 						=> 	'fa-ra',
// 	'fa-rebel' 						=> 	'fa-rebel',
// 	'fa-ge' 						=> 	'fa-ge',
// 	'fa-empire' 					=> 	'fa-empire',
// 	'fa-git-square' 				=> 	'fa-git-square',
// 	'fa-git' 						=> 	'fa-git',
// 	'fa-hacker-news' 				=> 	'fa-hacker-news',
// 	'fa-tencent-weibo' 				=> 	'fa-tencent-weibo',
// 	'fa-qq' 						=> 	'fa-qq',
// 	'fa-wechat' 					=> 	'fa-wechat',
// 	'fa-weixin' 					=> 	'fa-weixin',
// 	'fa-send' 						=> 	'fa-send',
// 	'fa-paper-plane' 				=> 	'fa-paper-plane',
// 	'fa-send-o' 					=> 	'fa-send-o',
// 	'fa-paper-plane-o' 				=> 	'fa-paper-plane-o',
// 	'fa-history' 					=> 	'fa-history',
// 	'fa-circle-thin' 				=> 	'fa-circle-thin',
// 	'fa-header' 					=> 	'fa-header',
// 	'fa-paragraph' 					=> 	'fa-paragraph',
// 	'fa-sliders' 					=> 	'fa-sliders',
// 	'fa-share-alt'	 				=> 	'fa-share-alt',
// 	'fa-share-alt-square' 			=> 	'fa-share-alt-square',
// 	'fa-bomb' 						=> 	'fa-bomb'
// );

// /*-----------------------------------------------------------------------------------*/
// /*	Section
// /*-----------------------------------------------------------------------------------*/
// vc_map( array(
// 	"name" => __("Section", "js_composer"),
// 	"base" => "vc_row",
// 	"is_container" => true,
// 	"icon" => "icon-wpb-section",
// 	"show_settings_on_create" => false,
// 	"category" => __('Layout', 'js_composer'),
// 	"params" => array(
	
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra ID name", "js_composer"),
// 		  	"param_name" => "section_id",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a ID and then refer to it in your css file.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra Section Class name", "js_composer"),
// 		  	"param_name" => "section_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Section Mode", "js_composer"),
// 		  	"param_name" => "section_mode",
// 		  	"value" => array(
// 		  			__("Default", "js_composer") => "normal", 
// 		  			__("Full Width", "js_composer") => "fluid",
// 		  			__("Full Screen", "js_composer") => "full-screen"
// 		  		),
// 		  	"description" => __("Choose Layout Mode. Default 1170px Container. Full Width is a 100% Width Container.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "checkbox",
// 		  	"heading" => __("Scroll Button to Next Section", "js_composer"),
// 		  	"param_name" => "scroll_button",
// 		  	"value" => Array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"description" => __("Choose if you want a button scroll to next section.", "js_composer"),
// 		  	"dependency" => Array('element' => "section_mode", 'value' => array('full-screen'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("ID Next Section - Required", "js_composer"),
// 		  	"param_name" => "scroll_id",
// 		  	"description" => __("Enter ID of Next Section. For set the ID of Next Section click on Edit (pencil icon) and write your ID and copy and paste here.", "js_composer"),
// 		  	"value" => "",
// 		  	"dependency" => Array('element' => "scroll_button", 'value' => array('yes'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Background Mode", "js_composer"),
// 		  	"param_name" => "bgmode",
// 		  	"value" => array(
// 		  			__("Default", "js_composer") => "default", 
// 		  			__("Custom Image", "js_composer") => "customimagebg", 
// 		  			__("Custom Color", "js_composer") => "custom", 
// 		  			__("Custom Video", "js_composer") => "video"
// 		  		),
// 		  	"description" => __("Choose Background Mode.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		// Custom Image Settings
// 		array(
// 		  	"type" => "attach_image",
// 		  	"heading" => __("Image", "js_composer"),
// 		  	"param_name" => "image",
// 		  	"value" => "",
// 		  	"description" => __("Select image from media library.", "js_composer"),
// 		  	"dependency" => Array('element' => "bgmode", 'value' => array('customimagebg'))
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Background Color Image", "js_composer"),
// 		  	"param_name" => "bgimagebackgrouncolor",
// 		  	"description" => __("Choose a background color for your transparent image block.", "js_composer"),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true,)
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Background Image Position", "js_composer"),
// 		  	"param_name" => "bgposition",
// 		  	"value" => 
// 			  	array(
// 			  		__("Top Left", "js_composer") => "top left",
// 					__("Top Center", "js_composer") => "top center",
// 					__("Top Right", "js_composer") => "top right", 
// 					__("Bottom Left", "js_composer") => "bottom left",
// 					__("Bottom Center", "js_composer") => "bottom center",
// 					__("Bottom Right", "js_composer") => "bottom right",
// 					__("Center Left", "js_composer") => "center left",
// 					__("Center Center", "js_composer") => "center center",
// 					__("Center Right", "js_composer") => "center right"
// 				),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true)
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Background Image Repeat", "js_composer"),
// 		  	"param_name" => "bgrepeat",
// 		  	"value" => 
// 			  	array(
// 			  		__("No Repeat", "js_composer") => "no-repeat",
// 					__("Repeat", "js_composer") => "repeat",
// 					__("Repeat Horizontally", "js_composer") => "repeat-x",
// 					__("Repeat vertically", "js_composer") => "repeat-y",
// 					__("Stretch to fit", "js_composer") => "stretch"
// 				),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true)
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Background Attachment", "js_composer"),
// 		  	"param_name" => "bgattachment",
// 		  	"value" => 
// 			  	array(
// 			  		__("Scroll", "js_composer") => "scroll",
// 					__("Fixed", "js_composer") => "fixed"
// 				),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true)
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Overlay Mask", "js_composer"),
// 		  	"param_name" => "section_overlay",
// 		  	"value" => array(__("No Overlay Mask", "js_composer") => "no_overlay", __("Yes, Overlay Mask", "js_composer") => "yes_overlay"),
// 		  	"description" => __("Enable or Disable the custom options for overlay section.", "js_composer"),
// 		  	"dependency" => Array('element' => "bgmode", 'value' => array('customimagebg'))
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Background Color Overlay Mask", "js_composer"),
// 		  	"param_name" => "sectionoveralycolor",
// 		  	"description" => __("Choose a background color overlay for your title block. Only if Overlay Mask is enable.", "js_composer"),
// 		  	"dependency" => Array('element' => "section_overlay", 'value' => array('yes_overlay'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Background Opacity Overlay Mask", "js_composer"),
// 		  	"param_name" => "sectionoverlayopacity",
// 		  	"description" => __("Enter a number 0 - 1 for your background color opacity. Default 0.70. Only if Overlay Mask is enable.", "js_composer"),
// 		  	"value" => "0.70",
// 		  	"dependency" => Array('element' => "section_overlay", 'value' => array('yes_overlay'))
// 		),

// 		// Background Color Without Image Settings
// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Background Color", "js_composer"),
// 		  	"param_name" => "custombgcolor",
// 		  	"description" => __("Select a custom background color.", "js_composer"),
// 		  	"dependency" => Array('element' => "bgmode", 'value' => array('custom'))
// 		),

// 		// Video Settings
// 		array(
//   			"type" => "textarea_raw_html",
// 			"heading" => __("Vimeo/YouTube Embed Code", "js_composer"),
// 			"param_name" => "customvideoembed",
// 			"value" => base64_encode(""),
// 			"description" => __("Insert Vimeo or Youtube Embed Code.", "js_composer"),
// 			"dependency" => Array('element' => "bgmode", 'value' => array('video'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("WEBM File URL", "js_composer"),
// 		  	"param_name" => "customvideowebm",
// 		  	"description" => __("Upload a WEBM File.", "js_composer"),
// 		  	"dependency" => Array('element' => "bgmode", 'value' => array('video'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("M4V/MP4 File URL", "js_composer"),
// 		  	"param_name" => "customvideom4v",
// 		  	"description" => __("Upload a M4V or MP4 File.", "js_composer"),
// 		  	"dependency" => Array('element' => "bgmode", 'value' => array('video'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("OGV File URL", "js_composer"),
// 		  	"param_name" => "customvideoogv",
// 		  	"description" => __("Upload a OGV File.", "js_composer"),
// 		  	"dependency" => Array('element' => "bgmode", 'value' => array('video'))
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Disable Loop Self-Hosted Video?", "js_composer"),
// 		  	"param_name" => "disable_video_loop",
// 		  	"value" => array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"description" => __("Disable Loop on your Self-Hosted Video!", "js_composer"),
// 		  	"dependency" => Array('element' => "bgmode", 'value' => array('video'))
// 		),

// 		array(
// 		  	"type" => "attach_image",
// 		  	"heading" => __("Video Preview Image", "js_composer"),
// 		  	"param_name" => "customimagevideo",
// 		  	"value" => "",
// 		  	"description" => __("Select image from media library.", "js_composer"),
// 		  	"dependency" => Array('element' => "bgmode", 'value' => array('video'))
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Video Overlay?", "js_composer"),
// 		  	"param_name" => "video_overlay",
// 		  	"value" => Array(__("Use transparent overlay over video?", "js_composer") => 'show_video_overlay'),
// 		 	"dependency" => Array('element' => "bgmode", 'value' => array('video'))
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Video Overlay Color", "js_composer"),
// 		  	"param_name" => "video_color_overlay",
// 		  	"description" => __("Select a custom color for overlay block.", "js_composer"),
// 		  	"dependency" => Array('element' => "video_overlay", 'value' => array('show_video_overlay'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Video Overlay Opacity", "js_composer"),
// 		  	"param_name" => "video_opacity_overlay",
// 		  	"description" => __("Enter a number 0 - 1 for your overlay color opacity. Default 0.70. Only if Video Overlay Mask is enable.", "js_composer"),
// 		  	"value" => "0.70",
// 		  	"dependency" => Array('element' => "video_overlay", 'value' => array('show_video_overlay'))
// 		),

// 		// Custom Patter Settings
// 		array(
// 		  	"type" => "attach_image",
// 		  	"heading" => __("Pattern", "js_composer"),
// 		  	"param_name" => "pattern",
// 		  	"value" => "",
// 		  	"description" => __("Optional. Select a pattern from media library.", "js_composer"),
// 		  	"dependency" => Array('element' => "bgmode", 'value' => array('customimagebg', 'custom', 'video'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Section Padding", "js_composer"),
// 		  	"param_name" => "padding",
// 		  	"value" => array(
// 		  			__("No Padding", "js_composer") => "no-padding", 
// 		  			__("Small Padding", "js_composer") => "small-padding", 
// 		  			__("Default Padding", "js_composer") => "default-padding", 
// 		  			__("Large Padding", "js_composer") => "large-padding", 
// 		  			__("Custom Padding", "js_composer") => "custom-padding"
// 		  		),
// 		  	"description" => __("Define the sections top and bottom padding.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Padding Top", "js_composer"),
// 		  	"param_name" => "padding_top_value",
// 		  	"description" => __("Padding Top value in pixel. Enter only number value. Default value is 70.", "js_composer"),
// 		  	"value" => "70",
// 		  	"dependency" => Array('element' => "padding", 'value' => array('custom-padding'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Padding Bottom", "js_composer"),
// 		  	"param_name" => "padding_bottom_value",
// 		  	"description" => __("Padding Bottom value in pixel. Enter only number value. Default value is 70.", "js_composer"),
// 		  	"value" => "70",
// 		  	"dependency" => Array('element' => "padding", 'value' => array('custom-padding'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra Row Class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	),
// 	"js_view" => 'VcRowView'
// ) );

// /*-----------------------------------------------------------------------------------*/
// /*	Row Inner and Columns
// /*-----------------------------------------------------------------------------------*/
// vc_map(array(
// 	"name" => __("Row Inner", "js_composer"),
// 	"base" => "vc_row_inner",
// 	"is_container" => true,
// 	"category" => __('Layout', 'js_composer'),
// 	"icon" => "icon-wpb-row-inner",
// 	"show_settings_on_create" => false,
// 	"params" => array(
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	),
// 	"js_view" => 'VcRowView'
// ));

// vc_map(array(
// 	"name" => __("Column", "js_composer"),
// 	"base" => "vc_column",
// 	"is_container" => true,
// 	"content_element" => false,
// 	"params" => array(
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	),
// 	"js_view" => 'VcColumnView'
// ));

// Column Inner
// vc_map( array(
//   	"name" => __("Column", "js_composer"),
//   	"base" => "vc_column_inner",
//   	"class" => "",
//   	"icon" => "",
//   	"wrapper_class" => "",
//   	"controls"	=> "full",
//   	"allowed_container_element" => false,
//   	"content_element" => false,
//   	"is_container" => true,
//   	"params"=> array(
//   		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Background Mode", "js_composer"),
// 		  	"param_name" => "bgmode",
// 		  	"value" => array(
// 		  			__("Default", "js_composer") => "default",
// 		  			__("Custom Color", "js_composer") => "custom-color"
// 		  		),
// 		  	"description" => __("Choose Background Mode.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Background Color", "js_composer"),
// 		  	"param_name" => "custombgcolor",
// 		  	"description" => __("Select a custom background color.", "js_composer"),
// 		  	"dependency" => Array('element' => "bgmode", 'value' => array('custom-color'))
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Equals Columns Height Script?", "js_composer"),
// 		  	"param_name" => "equals_col_height",
// 		  	"value" => array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"description" => __("Enable Equals Columns Height!", "js_composer"),
// 		  	"dependency" => Array('element' => "bgmode", 'value' => array('custom-color'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Section Padding", "js_composer"),
// 		  	"param_name" => "padding",
// 		  	"value" => array(
// 		  			__("Default Padding", "js_composer") => "default-color-padding", 
// 		  			__("Custom Padding", "js_composer") => "custom-padding"
// 		  		),
// 		  	"description" => __("Define the sections top, left, bottom and right padding.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Padding", "js_composer"),
// 		  	"param_name" => "padding_value",
// 		  	"description" => __("Padding value in pixel. Enter only number value. Default value is 40.", "js_composer"),
// 		  	"value" => "40",
// 		  	"dependency" => Array('element' => "padding", 'value' => array('custom-padding'))
// 		),

//   		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

//     	array(
//       		"type" => "textfield",
//       		"heading" => __("Extra class name", "js_composer"),
//       		"param_name" => "el_class",
//       		"value" => "",
//       		"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
//     	)
//   	),
//   "js_view" => 'VcColumnView'
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Text-Block
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Column_Text extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Text Block", "js_composer"),
// 	"base" => "az_column_text",
// 	"icon" => "icon-wpb-text-block",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(
		
// 		array(
// 		  	"type" => "textarea_html",
// 		  	"holder" => "div",
// 		  	"heading" => __("Text", "js_composer"),
// 		  	"param_name" => "content",
// 		  	"value" => __("I am text block. Click edit button to change this text.", "js_composer")
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Special Heading
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Special_Heading extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Special Heading", "js_composer"),
// 	"base" => "az_special_heading",
// 	"icon" => "icon-wpb-special-heading",
// 	"wrapper_class" => "clearfix",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(
	
// 		array(
//   			"type" => "textarea_raw_html",
// 			"holder" => "div",
// 			"heading" => __("Text", "js_composer"),
// 			"param_name" => "content_heading",
// 			"value" => base64_encode("I am Heading Text."),
// 			"description" => __("Insert your text. HTML is allowed.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Heading Type", "js_composer"),
// 		  	"param_name" => "heading_type",
// 		  	"value" => 
// 			  	array(
// 					__("H1", "js_composer") => "1", 
// 					__("H2", "js_composer") => "2",
// 					__("H3", "js_composer") => "3",
// 					__("H4", "js_composer") => "4", 
// 					__("H5", "js_composer") => "5", 
// 					__("H6", "js_composer") => "6"
// 				),
// 		  	"description" => __("Select which kind of heading you want to display.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Font Color", "js_composer"),
// 		  	"param_name" => "heading_color",
// 		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
// 		  	"description" => __("Choose a color for your heading text.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Heading Custom Color", "js_composer"),
// 		  	"param_name" => "custom_heading_color",
// 		  	"description" => __("Select custom color for heading text.", "js_composer"),
// 		  	"dependency" => Array('element' => "heading_color", 'value' => array('custom'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Font Heading Size", "js_composer"),
// 		  	"param_name" => "heading_size",
// 		  	"value" => array(__("Theme Size Default", "js_composer") => "", __("Custom Size", "js_composer") => "custom"),
// 		  	"description" => __("Choose a size for your heading text.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Heading Custom Size", "js_composer"),
// 		  	"param_name" => "custom_heading_size",
// 		  	"description" => __("Font Size in pixel. Enter only number value.", "js_composer"),
// 		  	"value" => "",
// 		  	"dependency" => Array('element' => "heading_size", 'value' => array('custom')),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Heading Custom Line-Height", "js_composer"),
// 		  	"param_name" => "custom_heading_line",
// 		  	"description" => __("Font Line-Height in pixel. Enter only number value.", "js_composer"),
// 		  	"value" => "",
// 		  	"dependency" => Array('element' => "heading_size", 'value' => array('custom')),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Heading Style", "js_composer"),
// 		  	"param_name" => "heading_style",
// 		  	"value" => 
// 			  	array(
// 					__("Default Style", "js_composer") => "default",
// 					__("Italic Style", "js_composer") => "italic"
// 				),
// 		  	"description" => __("Select a heading style.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Heading Align", "js_composer"),
// 		  	"param_name" => "heading_align",
// 		  	"value" => 
// 			  	array(
// 					__("Align Left", "js_composer") => "textalignleft",
// 					__("Align Center", "js_composer") => "textaligncenter",
// 					__("Align Right", "js_composer") => "textalignright",
// 				),
// 		  	"description" => __("Select a heading align.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Padding Bottom", "js_composer"),
// 		  	"param_name" => "padding_bottom_heading",
// 		  	"description" => __("Bottom Padding in pixel. Enter only number value. Default value is 30.", "js_composer"),
// 		  	"value" => "30",
// 		  	"admin_label" => false
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));


// /*-----------------------------------------------------------------------------------*/
// /*	Divider / Blank Divider
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Divider extends WPBakeryShortCode {
// 	public function outputTitle($title) {
//         return '';
//     }
// }
// vc_map(array(
//     "base"		=> "az_divider",
//     "name"		=> __("Divider", "js_composer"),
//     "class"		=> "wpb_vc_separator",
//     "icon"      => "icon-wpb-divider",
// 	"category" 	=> __('Content', 'js_composer'),
//     "params"	=> array(
		
// 		array(
// 		 	"type" => "dropdown",
// 		 	"heading" => __("Divider Style", "js_composer"),
// 		 	"param_name" => "div_style",
// 		  	"value" => array(
// 		  		__("Normal", "js_composer") => "normal", 
// 		  		__("Short", "js_composer") => "short"
// 		  	),
// 		  	"description" => __("Choose between the two available divider styles.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		 	"type" => "dropdown",
// 		 	"heading" => __("Divider Type", "js_composer"),
// 		 	"param_name" => "div_type",
// 		  	"value" => array( 
// 	  			__("Fat Solid", "js_composer") => "fat-solid-div", 
// 	  			__("Thin Solid", "js_composer") => "thin-solid-div", 
// 	  			__("Dotted", "js_composer") => "dotted-div", 
// 	  			__("Double", "js_composer") => "double-div" 
// 	  		),
// 		  	"description" => __("Choose between the available divider types.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Divider Color", "js_composer"),
// 		  	"param_name" => "div_color",
// 		  	"value" => array(
// 		  		__("Theme Color Default", "js_composer") => "",
// 		  		__("Custom Color", "js_composer") => "custom"
// 		  	),
// 		  	"description" => __("Choose a color for your divider.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Divider Custom Color", "js_composer"),
// 		  	"param_name" => "custom_div_color",
// 		  	"description" => __("Select custom color for divider.", "js_composer"),
// 		  	"dependency" => Array('element' => "div_color", 'value' => array('custom'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Margin Top Value", "js_composer"),
// 		  	"param_name" => "margin_top_value",
// 		  	"description" => __("Margin Top Value in pixel. Enter only number value. Default value is 30.", "js_composer"),
// 		  	"value" => "30"
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		 	"heading" => __("Margin Bottom Value", "js_composer"),
// 		  	"param_name" => "margin_bottom_value",
// 		  	"description" => __("Margin Bottom Value in pixel. Enter only number value. Default value is 36.", "js_composer"),
// 		  	"value" => "36"
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,
	
//         array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
//     )
// ));

// class WPBakeryShortCode_AZ_Blank_Divider extends WPBakeryShortCode {
// 	public function outputTitle($title) {
//         return '';
//     }
// }
// vc_map(array(
//     "base"		=> "az_blank_divider",
//     "name"		=> __("Blank Divider", "js_composer"),
//     "class"		=> "wpb_vc_separator",
//     "icon"      => "icon-wpb-divider",
// 	"category" 	=> __('Content', 'js_composer'),
//     "params"	=> array(
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Height Value", "js_composer"),
// 		  	"param_name" => "height_value",
// 		  	"description" => __("Height Value in pixel. Enter only number value. Default value is 20.", "js_composer"),
// 		  	"value" => "20"
// 		),

//         array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
//     )
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	List Icon
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_List_Icon extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("List Icon", "js_composer"),
// 	"base" => "az_list_icon",
// 	"icon" => "icon-wpb-box-icon",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(

// 		array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Icon", "js_composer"),
// 	      	"param_name" => "icon",
// 	      	"value" => $fonticon_arr,
// 	      	"description" => __("Select your icon.", "js_composer"),
// 	      	"dependency" => Array('element' => "checkicon", 'value' => array('custom_icon'))
// 	    ),

// 	    array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Icon Size", "js_composer"),
// 		  	"param_name" => "icon_size",
// 		  	"description" => __("Size Value in pixel. Enter only number value. Default value is 16.", "js_composer"),
// 		  	"value" => "16"
// 		),

// 		array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Icon Color", "js_composer"),
// 	      	"param_name" => "icon_color",
// 	      	"value" => array(
// 	      		__("Theme Color Default", "js_composer") => "default-color", 
// 	      		__("Custom Color", "js_composer") => "custom"
// 	      	),
// 	      	"description" => __("Choose a color for your icon here.", "js_composer"),
// 	      	"admin_label" => false
// 	    ),
	    
// 	    array(
// 	      	"type" => "colorpicker",
// 	      	"heading" => __("Icon Custom Color", "js_composer"),
// 	      	"param_name" => "custom_icon_color",
// 	      	"description" => __("Select custom color for icon.", "js_composer"),
// 	      	"dependency" => Array('element' => "icon_color", 'value' => array('custom'))
// 	    ),

// 		array(
// 	      "type" => "textarea_html",
// 	      "holder" => "div",
// 	      "heading" => __("Text Content", "js_composer"),
// 	      "param_name" => "content",
// 	      "value" => __("Please use the Unordered List button <img src='".get_template_directory_uri() ."/framework/assets/img/icons/ul.png' alt='unordered list' /> on the editor to create the points of your icon list. Remember to delete this text...", "js_composer")
// 	    ),

// 	    $animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 	    array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));


// /*-----------------------------------------------------------------------------------*/
// /*	Alert Boxes
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Alert_Box extends WPBakeryShortCode {}
// vc_map(array(
//     "name"		=> __("Alert Box", "js_composer"),
//     "base"		=> "az_alert_box",
//     "icon"      => "icon-wpb-alert",
// 	"category" 	=> __('Content', 'js_composer'),
//     "params"	=> array(
		
// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Type", "js_composer"),
// 		  	"param_name" => "type_acc",
// 		  	"value" => array(
// 				__("Standard", "js_composer") => "alert-standard",
// 				__("Warning", "js_composer") => "alert-warning",
// 				__("Error", "js_composer") => "alert-error",
// 				__("Info", "js_composer") => "alert-info",
// 				__("Success", "js_composer") => "alert-success"
// 			),
// 		  	"description" => __("Select your Alert Box.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textarea",
// 		  	"holder" => "div",
// 		  	"heading" => __("Text", "js_composer"),
// 		  	"param_name" => "content",
// 		  	"value" => __("I am text block. Click edit button to change this text.", "js_composer")
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,
		
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
//     )
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Accordion / Toggle / Tabs / Testimonials
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Accordion_Container extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" 		=> __("Accordion", "js_composer"),
// 	"base" 		=> "az_accordion_container",
// 	"icon" 		=> "icon-wpb-accordion",
// 	"category" 	=> __('Content', 'js_composer'),
// 	"params" => array(

// 		array(
// 		  	"type" => "textarea_html",
// 		  	"holder" => "div",
// 		  	"heading" => __("Accordion", "js_composer"),
// 		  	"param_name" => "content",
// 		  	"description" => __("Click on the <strong>AZ Shortcode Button</strong> and select <strong>Accordion Section Shortcode</strong>.", "js_composer"),
// 		  	"value" => __("Click here, delete this text and click on AZ Shortcodes Button and select Accordion Section Shortcode...", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// class WPBakeryShortCode_AZ_Toggle_Container extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" 		=> __("Toggle", "js_composer"),
// 	"base" 		=> "az_toggle_container",
// 	"icon" 		=> "icon-wpb-toggle",
// 	"category" 	=> __('Content', 'js_composer'),
// 	"params" => array(

// 		array(
// 		  	"type" => "textarea_html",
// 		  	"holder" => "div",
// 		  	"heading" => __("Toggle", "js_composer"),
// 		  	"param_name" => "content",
// 		  	"description" => __("Click on the <strong>AZ Shortcode Button</strong> and select <strong>Toggle Section Shortcode</strong>.", "js_composer"),
// 		  	"value" => __("Click here, delete this text and click on AZ Shortcodes Button and select Toggle Section Shortcode...", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// class WPBakeryShortCode_AZ_Tab_Container extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" 		=> __("Tab", "js_composer"),
// 	"base" 		=> "az_tab_container",
// 	"icon" 		=> "icon-wpb-tab",
// 	"category" 	=> __('Content', 'js_composer'),
// 	"params" => array(

// 		array(
// 		  	"type" => "textarea_html",
// 		  	"holder" => "div",
// 		  	"heading" => __("Tab", "js_composer"),
// 		  	"param_name" => "content",
// 		  	"description" => __("Click on the <strong>AZ Shortcode Button</strong> and select <strong>Tab Section Shortcode</strong>.", "js_composer"),
// 		  	"value" => __("Click here, delete this text and click on AZ Shortcodes Button and select Tab Section Shortcode...", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// class WPBakeryShortCode_AZ_Testimonial_Container extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Testimonial", "js_composer"),
// 	"base" => "az_testimonial_container",
// 	"icon" => "icon-wpb-testimonial",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(
		
// 		array(
// 		  	"type" => "textarea_html",
// 		  	"holder" => "div",
// 		  	"heading" => __("Testimonial", "js_composer"),
// 		  	"param_name" => "content",
// 		  	"description" => __("Click on the <strong>AZ Shortcode Button</strong> and select <strong>Testimonial Section Shortcode</strong>.", "js_composer"),
// 		  	"value" => __("Click here, delete this text and click on AZ Shortcodes Button and select Testimonial Section Shortcode...", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		 	 "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Single Image / Lightbox Image, Video
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Single_Image extends WPBakeryShortCode {

// 	public function singleParamHtmlHolder($param, $value) {
//         $output = '';
//         // Compatibility fixes
//         $old_names = array('yellow_message', 'blue_message', 'green_message', 'button_green', 'button_grey', 'button_yellow', 'button_blue', 'button_red', 'button_orange');
//         $new_names = array('alert-block', 'alert-info', 'alert-success', 'btn-success', 'btn', 'btn-info', 'btn-primary', 'btn-danger', 'btn-warning');
//         $value = str_ireplace($old_names, $new_names, $value);
//         //$value = __($value, "js_composer");
//         //
//         $param_name = isset($param['param_name']) ? $param['param_name'] : '';
//         $type = isset($param['type']) ? $param['type'] : '';
//         $class = isset($param['class']) ? $param['class'] : '';

//         if ( isset($param['holder']) == false || $param['holder'] == 'hidden' ) {
//             $output .= '<input type="hidden" class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '" value="'.$value.'" />';
//             if(($param['type'])=='attach_image') {
//                 $img = wpb_getImageBySize(array( 'attach_id' => (int)preg_replace('/[^\d]/', '', $value), 'thumb_size' => 'medium' ));
//                 $output .= ( $img ? $img['medium'] : '<img width="50" height="50" src="' . WPBakeryVisualComposer::getInstance()->assetURL('vc/blank.gif') . '" class="attachment-thumbnail"  data-name="' . $param_name . '" alt="" title="" style="display: none;" />') . '<img src="' . WPBakeryVisualComposer::getInstance()->assetURL('vc/elements_icons/single_image.png') . '" class="no_image_image' . ( $img && !empty($img['p_img_large'][0]) ? ' image-exists' : '' ) . '" /><a href="#" class="column_edit_trigger' . ( $img && !empty($img['p_img_large'][0]) ? ' image-exists' : '' ) . '">' . __( 'Add image', 'js_composer' ) . '</a>';
//             }
//         }
//         else {
//             $output .= '<'.$param['holder'].' class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '">'.$value.'</'.$param['holder'].'>';
//         }
//         return $output;
//     }

// }
// vc_map(array(
//     "base"		=> "az_single_image",
//     "name"		=> __("Single Image", "js_composer"),
//     "class"		=> "",
//     "icon"      => "icon-wpb-light-image",
// 	"category" 	=> __('Content', 'js_composer'),
//     "params"	=> array(
        
//         array(
// 		  	"type" => "attach_image",
// 		  	"heading" => __("Image", "js_composer"),
// 		  	"param_name" => "image",
//       	  	"value" => "",
// 		  	"description" => __("Select image from media library.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Image Mode", "js_composer"),
// 		  	"param_name" => "image_mode",
//       	  	"value" => array(__("No Responsive", "js_composer") => "img-no-responsive", __("Responsive", "js_composer") => "img-responsive", __("Full Responsive", "js_composer") => "img-full-responsive"),
// 		  	"description" => __("Select mode of your image.", "js_composer"),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true),
//       	  	"admin_label" => false
// 		),

// 		$image_styles,
// 		$image_box_shadow_styles,

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Image Alignment", "js_composer"),
// 		  	"param_name" => "image_alignment",
//       	  	"value" => array(__("Left", "js_composer") => "alignleft", __("Center", "js_composer") => "aligncenter", __("Right", "js_composer") => "alignright"),
// 		  	"description" => __("Select mode of your image.", "js_composer"),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true),
//       	  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Image Link", "js_composer"),
// 		  	"param_name" => "image_link",
//       	  	"value" => array(__("No", "js_composer") => "no-link", __("Yes", "js_composer") => "yes"),
// 		  	"description" => __("Select mode of your image.", "js_composer"),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true),
//       	  	"admin_label" => false
// 		),
		
// 		array(
// 	      	"type" => "textfield",
// 	      	"heading" => __("Link URL", "js_composer"),
// 	      	"param_name" => "image_link_url",
// 	      	"description" => __("Where should your image link to?", "js_composer"),
// 	      	"dependency" => Array('element' => "image_link", 'value' => array('yes')),
// 		  	"admin_label" => false
// 	    ),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Link Target", "js_composer"),
// 		  	"param_name" => "target",
// 		  	"value" => $target_arr,
// 		  	"dependency" => Array('element' => "image_link", 'value' => array('yes'))
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
//     )
// ));

// // LightBox Image
// class WPBakeryShortCode_AZ_Lightbox_Image extends WPBakeryShortCode {
// 	public function singleParamHtmlHolder($param, $value) {
//         $output = '';
//         // Compatibility fixes
//         $old_names = array('yellow_message', 'blue_message', 'green_message', 'button_green', 'button_grey', 'button_yellow', 'button_blue', 'button_red', 'button_orange');
//         $new_names = array('alert-block', 'alert-info', 'alert-success', 'btn-success', 'btn', 'btn-info', 'btn-primary', 'btn-danger', 'btn-warning');
//         $value = str_ireplace($old_names, $new_names, $value);
//         //$value = __($value, "js_composer");
//         //
//         $param_name = isset($param['param_name']) ? $param['param_name'] : '';
//         $type = isset($param['type']) ? $param['type'] : '';
//         $class = isset($param['class']) ? $param['class'] : '';

//         if ( isset($param['holder']) == false || $param['holder'] == 'hidden' ) {
//             $output .= '<input type="hidden" class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '" value="'.$value.'" />';
//             if(($param['type'])=='attach_image') {
//                 $img = wpb_getImageBySize(array( 'attach_id' => (int)preg_replace('/[^\d]/', '', $value), 'thumb_size' => 'medium' ));
//                 $output .= ( $img ? $img['medium'] : '<img width="50" height="50" src="' . WPBakeryVisualComposer::getInstance()->assetURL('vc/blank.gif') . '" class="attachment-thumbnail"  data-name="' . $param_name . '" alt="" title="" style="display: none;" />') . '<img src="' . WPBakeryVisualComposer::getInstance()->assetURL('vc/elements_icons/single_image.png') . '" class="no_image_image' . ( $img && !empty($img['p_img_large'][0]) ? ' image-exists' : '' ) . '" /><a href="#" class="column_edit_trigger' . ( $img && !empty($img['p_img_large'][0]) ? ' image-exists' : '' ) . '">' . __( 'Add image', 'js_composer' ) . '</a>';
//             }
//         }
//         else {
//             $output .= '<'.$param['holder'].' class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '">'.$value.'</'.$param['holder'].'>';
//         }
//         return $output;
//     }
// }
// vc_map(array(
//     "base"		=> "az_lightbox_image",
//     "name"		=> __("LightBox Image", "js_composer"),
//     "class"		=> "",
//     "icon"      => "icon-wpb-light-image",
// 	"category" 	=> __('Content', 'js_composer'),
//     "params"	=> array(
        
//         array(
// 		  	"type" => "attach_image",
// 		  	"heading" => __("Image", "js_composer"),
// 		  	"param_name" => "image",
//       	  	"value" => "",
// 		  	"description" => __("Select image from media library.", "js_composer")
// 		),
		
// 		array(
// 		  	"type" => "attach_image",
// 		  	"heading" => __("Different PopUp Image (Optional)", "js_composer"),
// 		  	"param_name" => "image_popup",
//       	  	"value" => "",
// 		  	"description" => __("Select image from media library. If you want a different PopUp Image.", "js_composer"),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true)
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Thumbnail Width (Optional)", "js_composer"),
// 		  	"param_name" => "thumb_widht",
//       	  	"value" => "",
// 		  	"description" => __("If you wish choose a width for your thumbnail. It will be automatically cropped and resized. Enter only number value.", "js_composer"),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true)
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Gallery Name", "js_composer"),
// 		  	"param_name" => "gallery_name",
// 		  	"description" => __("Title of Gallery Name.", "js_composer")
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
//     )
// ));

// // Lightbox Video
// class WPBakeryShortCode_AZ_Lightbox_Video extends WPBakeryShortCode {
// 	public function singleParamHtmlHolder($param, $value) {
//         $output = '';
//         // Compatibility fixes
//         $old_names = array('yellow_message', 'blue_message', 'green_message', 'button_green', 'button_grey', 'button_yellow', 'button_blue', 'button_red', 'button_orange');
//         $new_names = array('alert-block', 'alert-info', 'alert-success', 'btn-success', 'btn', 'btn-info', 'btn-primary', 'btn-danger', 'btn-warning');
//         $value = str_ireplace($old_names, $new_names, $value);
//         //$value = __($value, "js_composer");
//         //
//         $param_name = isset($param['param_name']) ? $param['param_name'] : '';
//         $type = isset($param['type']) ? $param['type'] : '';
//         $class = isset($param['class']) ? $param['class'] : '';

//         if ( isset($param['holder']) == false || $param['holder'] == 'hidden' ) {
//             $output .= '<input type="hidden" class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '" value="'.$value.'" />';
//             if(($param['type'])=='attach_image') {
//                 $img = wpb_getImageBySize(array( 'attach_id' => (int)preg_replace('/[^\d]/', '', $value), 'thumb_size' => 'medium' ));
//                 $output .= ( $img ? $img['medium'] : '<img width="50" height="50" src="' . WPBakeryVisualComposer::getInstance()->assetURL('vc/blank.gif') . '" class="attachment-thumbnail"  data-name="' . $param_name . '" alt="" title="" style="display: none;" />') . '<img src="' . WPBakeryVisualComposer::getInstance()->assetURL('vc/elements_icons/single_image.png') . '" class="no_image_image' . ( $img && !empty($img['p_img_large'][0]) ? ' image-exists' : '' ) . '" /><a href="#" class="column_edit_trigger' . ( $img && !empty($img['p_img_large'][0]) ? ' image-exists' : '' ) . '">' . __( 'Add image', 'js_composer' ) . '</a>';
//             }
//         }
//         else {
//             $output .= '<'.$param['holder'].' class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '">'.$value.'</'.$param['holder'].'>';
//         }
//         return $output;
//     }
// }
// vc_map(array(
//     "base"		=> "az_lightbox_video",
//     "name"		=> __("LightBox Video", "js_composer"),
//     "class"		=> "",
//     "icon"      => "icon-wpb-light-video",
// 	"category" => __('Content', 'js_composer'),
//     "params"	=> array(
        
//         array(
// 		  	"type" => "attach_image",
// 		  	"heading" => __("Image", "js_composer"),
// 		  	"param_name" => "image",
//       	  	"value" => "",
// 		  	"description" => __("Select image from media library.", "js_composer")
// 		),
		
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Thumbnail Width (Optional)", "js_composer"),
// 		  	"param_name" => "thumb_widht",
//       	  	"value" => "",
// 		  	"description" => __("If you wish choose a width for your thumbnail. It will be automatically cropped and resized.", "js_composer"),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true)
// 		),
		
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Link URL", "js_composer"),
// 		  	"param_name" => "link_url",
// 		  	"description" => __("Insert Link for your video.", "js_composer")
// 		),
		
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Title", "js_composer"),
// 		  	"param_name" => "title",
// 		  	"description" => __("Title of Video.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Gallery Name", "js_composer"),
// 		  	"param_name" => "gallery_name",
// 		  	"description" => __("Title of Gallery.", "js_composer")
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
//     )
// ));

// // Lightbox Image Gallery
// class WPBakeryShortCode_AZ_Lightbox_Image_Gallery extends WPBakeryShortCode {
// 	public function singleParamHtmlHolder($param, $value) {
//         $output = '';
//         // Compatibility fixes
//         $old_names = array('yellow_message', 'blue_message', 'green_message', 'button_green', 'button_grey', 'button_yellow', 'button_blue', 'button_red', 'button_orange');
//         $new_names = array('alert-block', 'alert-info', 'alert-success', 'btn-success', 'btn', 'btn-info', 'btn-primary', 'btn-danger', 'btn-warning');
//         $value = str_ireplace($old_names, $new_names, $value);
//         //$value = __($value, "js_composer");
//         //
//         $param_name = isset($param['param_name']) ? $param['param_name'] : '';
//         $type = isset($param['type']) ? $param['type'] : '';
//         $class = isset($param['class']) ? $param['class'] : '';

//         if ( isset($param['holder']) == false || $param['holder'] == 'hidden' ) {
//             $output .= '<input type="hidden" class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '" value="'.$value.'" />';
//             if(($param['type'])=='attach_image') {
//                 $img = wpb_getImageBySize(array( 'attach_id' => (int)preg_replace('/[^\d]/', '', $value), 'thumb_size' => 'medium' ));
//                 $output .= ( $img ? $img['medium'] : '<img width="50" height="50" src="' . WPBakeryVisualComposer::getInstance()->assetURL('vc/blank.gif') . '" class="attachment-thumbnail"  data-name="' . $param_name . '" alt="" title="" style="display: none;" />') . '<img src="' . WPBakeryVisualComposer::getInstance()->assetURL('vc/elements_icons/single_image.png') . '" class="no_image_image' . ( $img && !empty($img['p_img_large'][0]) ? ' image-exists' : '' ) . '" /><a href="#" class="column_edit_trigger' . ( $img && !empty($img['p_img_large'][0]) ? ' image-exists' : '' ) . '">' . __( 'Add image', 'js_composer' ) . '</a>';
//             }
//         }
//         else {
//             $output .= '<'.$param['holder'].' class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '">'.$value.'</'.$param['holder'].'>';
//         }
//         return $output;
//     }
// }
// vc_map(array(
//     "base"		=> "az_lightbox_image_gallery",
//     "name"		=> __("LightBox Gallery", "js_composer"),
//     "class"		=> "",
//     "icon"      => "icon-wpb-light-image",
// 	"category" 	=> __('Content', 'js_composer'),
//     "params"	=> array(
        
//         array(
// 		  	"type" => "attach_image",
// 		  	"heading" => __("Thumbnail Image", "js_composer"),
// 		  	"param_name" => "image",
//       	  	"value" => "",
// 		  	"description" => __("Select thumbnail image from media library.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "attach_image",
// 		  	"heading" => __("Different PopUp Image (Optional)", "js_composer"),
// 		  	"param_name" => "image_popup",
//       	  	"value" => "",
// 		  	"description" => __("Select image from media library. If you want a different PopUp Image.", "js_composer"),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true)
// 		),
		
// 		array(
// 		  	"type" => "attach_images",
// 		  	"heading" => __("Images for Gallery", "js_composer"),
// 		  	"param_name" => "images_gallery",
//       	  	"value" => "",
// 		  	"description" => __("Select images from media library.", "js_composer"),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true)
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Thumbnail Width (Optional)", "js_composer"),
// 		  	"param_name" => "thumb_widht",
//       	  	"value" => "",
// 		  	"description" => __("If you wish choose a width for your thumbnail. It will be automatically cropped and resized. Enter only number value.", "js_composer"),
// 		  	"dependency" => Array('element' => "image", 'not_empty' => true)
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Gallery Name", "js_composer"),
// 		  	"param_name" => "gallery_name",
// 		  	"description" => __("Title of Gallery Name.", "js_composer")
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
//     )
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Clients
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Clients extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Clients", "js_composer"),
// 	"base" => "az_clients",
// 	"icon" => "icon-wpb-portfolio",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(
		
// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Layout Mode", "js_composer"),
// 		  	"param_name" => "client_layout",
// 		  	"value" => array(
// 		  		__("Grid", "js_composer") => "grid-clients", 
// 		  		__("Carousel", "js_composer") => "carousel-clients"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("Select Clients Layout Mode.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Item Number", "js_composer"),
// 		  	"param_name" => "client_item",
// 		  	"value" => "6",
// 		  	"admin_label" => false,
// 		  	"description" => __('', "js_composer"),
// 		  	"dependency" => Array('element' => "client_layout", 'value' => array('carousel-clients'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Item Tablet Number", "js_composer"),
// 		  	"param_name" => "client_item_tablet",
// 		  	"value" => "3",
// 		  	"admin_label" => false,
// 		  	"description" => __('', "js_composer"),
// 		  	"dependency" => Array('element' => "client_layout", 'value' => array('carousel-clients'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Item Mobile Number", "js_composer"),
// 		  	"param_name" => "client_item_mobile",
// 		  	"value" => "1",
// 		  	"admin_label" => false,
// 		  	"description" => __('', "js_composer"),
// 		  	"dependency" => Array('element' => "client_layout", 'value' => array('carousel-clients'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Carousel Navigation", "js_composer"),
// 		  	"param_name" => "client_navigation",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "false",
// 		  		__("Yes", "js_composer") => "true"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("", "js_composer"),
// 		  	"dependency" => Array('element' => "client_layout", 'value' => array('carousel-clients'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Carousel Pagination", "js_composer"),
// 		  	"param_name" => "client_pagination",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "false",
// 		  		__("Yes", "js_composer") => "true"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("", "js_composer"),
// 		  	"dependency" => Array('element' => "client_layout", 'value' => array('carousel-clients'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Carousel Autoplay", "js_composer"),
// 		  	"param_name" => "client_autoplay",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "false",
// 		  		__("Yes", "js_composer") => "true"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("", "js_composer"),
// 		  	"dependency" => Array('element' => "client_layout", 'value' => array('carousel-clients'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Latest Posts
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Latest_Posts extends WPBakeryShortCode {}
// wpb_map(array(
// 	"name" => __("Latest Posts", "js_composer"),
// 	"base" => "az_latest_posts",
// 	"icon" => "icon-wpb-box-icon",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(
		
// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Layout Mode", "js_composer"),
// 		  	"param_name" => "post_layout",
// 		  	"value" => array(
// 		  		__("Grid", "js_composer") => "grid-layout", 
// 		  		__("Masonry", "js_composer") => "masonry-layout",
// 		  		__("Listed", "js_composer") => "listed-layout"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("Select Post Layout Mode.", "js_composer")
// 		),
		
// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Columns", "js_composer"),
// 		  	"param_name" => "post_columns_count",
// 		  	"value" => array(
// 		  		__("2 Columns", "js_composer") => "2clm", 
// 		  		__("3 Columns", "js_composer") => "3clm", 
// 		  		__("4 Columns", "js_composer") => "4clm"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("How many columns should be displayed?", "js_composer"),
// 		  	"dependency" => Array('element' => "post_layout", 'value' => array('grid-layout', 'masonry-layout'))
// 		),
			
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Post Number", "js_composer"),
// 			"param_name" => "post_number",
// 		  	"admin_label" => false,
// 		  	"description" => __('How many post to show? Enter number or word "All". Default value is All.', "js_composer")
// 		),

// 		array(
// 		 	"type" => "textfield",
// 		  	"heading" => __("Categories", "js_composer"),
// 		  	"param_name" => "post_categories",
// 		  	"admin_label" => false,
// 		  	"description" => __("If you want to show only certain posts categories, not the entire blog, please write the categories in this field, separated by commas. Please use the <strong>category slug</strong>, not the title.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Portfolio Grid
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Portfolio_Grid extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Portfolio Grid", "js_composer"),
// 	"base" => "az_portfolio_grid",
// 	"icon" => "icon-wpb-portfolio",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(
		
// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Layout Mode", "js_composer"),
// 		  	"param_name" => "portfolio_layout",
// 		  	"value" => array(
// 		  		__("Grid", "js_composer") => "grid-portfolio", 
// 		  		__("Masonry", "js_composer") => "masonry-portfolio",
// 		  		__("Masonry Grid Block", "js_composer") => "masonry-block-portfolio",
// 		  		__("Striped", "js_composer") => "striped-portfolio",
// 		  		__("Scrollable", "js_composer") => "scrollable-portfolio",
// 		  		__("Listed", "js_composer") => "listed-portfolio",
// 		  		__("Carousel", "js_composer") => "carousel-portfolio"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("Select Portfolio Layout Mode.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Item Number", "js_composer"),
// 		  	"param_name" => "carousel_portfolio_item",
// 		  	"value" => "6",
// 		  	"admin_label" => false,
// 		  	"description" => __('', "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_layout", 'value' => array('carousel-portfolio'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Item Tablet Number", "js_composer"),
// 		  	"param_name" => "carousel_portfolio_item_tablet",
// 		  	"value" => "3",
// 		  	"admin_label" => false,
// 		  	"description" => __('', "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_layout", 'value' => array('carousel-portfolio'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Item Mobile Number", "js_composer"),
// 		  	"param_name" => "carousel_portfolio_item_mobile",
// 		  	"value" => "1",
// 		  	"admin_label" => false,
// 		  	"description" => __('', "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_layout", 'value' => array('carousel-portfolio'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Carousel Navigation", "js_composer"),
// 		  	"param_name" => "carousel_portfolio_navigation",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "false",
// 		  		__("Yes", "js_composer") => "true"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("", "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_layout", 'value' => array('carousel-portfolio'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Carousel Pagination", "js_composer"),
// 		  	"param_name" => "carousel_portfolio_pagination",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "false",
// 		  		__("Yes", "js_composer") => "true"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("", "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_layout", 'value' => array('carousel-portfolio'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Carousel Autoplay", "js_composer"),
// 		  	"param_name" => "carousel_portfolio_autoplay",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "false",
// 		  		__("Yes", "js_composer") => "true"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("", "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_layout", 'value' => array('carousel-portfolio'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Columns", "js_composer"),
// 		  	"param_name" => "portfolio_columns_count",
// 		  	"value" => array(
// 		  		__("2 Columns", "js_composer") => "2clm", 
// 		  		__("3 Columns", "js_composer") => "3clm", 
// 		  		__("4 Columns", "js_composer") => "4clm", 
// 		  		__("5 Columns (Only Wall Effect Enabled)", "js_composer") => "5clm", 
// 		  		__("6 Columns (Only Wall Effect Enabled)", "js_composer") => "6clm"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("How many columns should be displayed?", "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_layout", 'value' => array('grid-portfolio', 'masonry-portfolio'))
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Enable Wall Effect?", "js_composer"),
// 		  	"param_name" => "portfolio_wall",
// 		  	"value" => array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"description" => __("Enable or Disable Portfolio Wall Effect!", "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_layout", 'value' => array('grid-portfolio', 'masonry-portfolio', 'carousel-portfolio'))
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Colorize Effect?", "js_composer"),
// 		  	"param_name" => "portfolio_colorize",
// 		  	"value" => array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"description" => __("Enable or Disable Colorize Effect!", "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_layout", 'value' => array('grid-portfolio', 'masonry-portfolio', 'masonry-block-portfolio', 'striped-portfolio', 'scrollable-portfolio', 'carousel-portfolio'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Sortable", "js_composer"),
// 		  	"param_name" => "portfolio_sortable_mode",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "no",
// 		  		__("Yes", "js_composer") => "yes"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("Should the sorting options based on categories be displayed? Disable if you want display a custom portfolio categories.", "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_layout", 'value' => array('grid-portfolio', 'masonry-portfolio', 'masonry-block-portfolio', 'listed-portfolio'))
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Enable Filter Animation?", "js_composer"),
// 		  	"param_name" => "portfolio_sortable_animation",
// 		  	"value" => array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"description" => __("Enable or Disable Portfolio Filter Animation!", "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_sortable_mode", 'value' => array('yes'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Portfolio Sortable Name", "js_composer"),
// 		  	"param_name" => "portfolio_sortable_name",
// 		  	"value" => "All",
// 		  	"admin_label" => false,
// 		  	"description" => __('Enter sortable name. Default value is All', "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_sortable_mode", 'value' => array('yes'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Portfolio Pagination", "js_composer"),
// 		  	"param_name" => "portfolio_pagination",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "no",
// 		  		__("Yes", "js_composer") => "yes" 
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("Select if you want a pagination portfolio.", "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_layout", 'value' => array('grid-portfolio', 'masonry-portfolio', 'masonry-block-portfolio', 'listed-portfolio'))
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Infinite Scroll?", "js_composer"),
// 		  	"param_name" => "portfolio_infinite_scroll",
// 		  	"value" => array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"description" => __("Enable or Disable Infinite Scroll! <strong><em>Remember the Filter don't work with Infinite Scroll</em></strong>", "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_pagination", 'value' => array('yes'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Infinite Scroll Method", "js_composer"),
// 		  	"param_name" => "portfolio_infinite_scroll_method",
// 		  	"value" => array(
// 		  		__("Trigger Button", "js_composer") => "twitter",
// 		  		__("Automatic Scroll", "js_composer") => "manual" 
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("Select if you prefereed method.", "js_composer"),
// 		  	"dependency" => Array('element' => "portfolio_infinite_scroll", 'value' => array('yes'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Post Number", "js_composer"),
// 		  	"param_name" => "portfolio_post_number",
// 		  	"admin_label" => false,
// 		  	"description" => __('How many post to show? Enter number or word "All". Default value is All.', "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Portfolio Categories", "js_composer"),
// 		  	"param_name" => "portfolio_categories",
// 		  	"admin_label" => false,
// 		  	"description" => __("If you want to show only certain portfolio categories, not the entire portfolio, please write the categories in this field, separated by commas. Please use the <strong>category slug</strong>, not the title.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Order by", "js_composer"),
// 		  	"param_name" => "orderby",
// 		  	"value" => array( 
// 		  		"", 
// 		  		__("Date", "js_composer") => "date", 
// 		  		__("ID", "js_composer") => "ID", 
// 		  		__("Author", "js_composer") => "author", 
// 		  		__("Title", "js_composer") => "title", 
// 		  		__("Modified", "js_composer") => "modified", 
// 		  		__("Random", "js_composer") => "rand", 
// 		  		__("Comment count", "js_composer") => "comment_count", 
// 		  		__("Menu order", "js_composer") => "menu_order"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => sprintf(__('Select how to sort retrieved posts. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Order way", "js_composer"),
// 		  	"param_name" => "order",
// 		  	"value" => array( 
// 		  		__("Descending", "js_composer") => "DESC", 
// 		  		__("Ascending", "js_composer") => "ASC" 
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => sprintf(__('Designates the ascending or descending order. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Team Grid
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Team_Grid extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Team Grid", "js_composer"),
// 	"base" => "az_team_grid",
// 	"icon" => "icon-wpb-team",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Layout Mode", "js_composer"),
// 		  	"param_name" => "team_layout",
// 		  	"value" => array(
// 		  		__("Grid", "js_composer") => "grid-team", 
// 		  		__("Listed", "js_composer") => "listed-team",
// 		  		__("Carousel", "js_composer") => "carousel-team"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("Select Team Layout Mode.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Item Number", "js_composer"),
// 		  	"param_name" => "carousel_team_item",
// 		  	"value" => "6",
// 		  	"admin_label" => false,
// 		  	"description" => __('', "js_composer"),
// 		  	"dependency" => Array('element' => "team_layout", 'value' => array('carousel-team'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Item Tablet Number", "js_composer"),
// 		  	"param_name" => "carousel_team_item_tablet",
// 		  	"value" => "3",
// 		  	"admin_label" => false,
// 		  	"description" => __('', "js_composer"),
// 		  	"dependency" => Array('element' => "team_layout", 'value' => array('carousel-team'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Item Mobile Number", "js_composer"),
// 		  	"param_name" => "carousel_team_item_mobile",
// 		  	"value" => "1",
// 		  	"admin_label" => false,
// 		  	"description" => __('', "js_composer"),
// 		  	"dependency" => Array('element' => "team_layout", 'value' => array('carousel-team'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Carousel Navigation", "js_composer"),
// 		  	"param_name" => "carousel_team_navigation",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "false",
// 		  		__("Yes", "js_composer") => "true"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("", "js_composer"),
// 		  	"dependency" => Array('element' => "team_layout", 'value' => array('carousel-team'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Carousel Pagination", "js_composer"),
// 		  	"param_name" => "carousel_team_pagination",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "false",
// 		  		__("Yes", "js_composer") => "true"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("", "js_composer"),
// 		  	"dependency" => Array('element' => "team_layout", 'value' => array('carousel-team'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Carousel Autoplay", "js_composer"),
// 		  	"param_name" => "carousel_team_autoplay",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "false",
// 		  		__("Yes", "js_composer") => "true"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("", "js_composer"),
// 		  	"dependency" => Array('element' => "team_layout", 'value' => array('carousel-team'))
// 		),
		
// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Columns", "js_composer"),
// 		  	"param_name" => "team_columns_count",
// 		  	"value" => array(
// 		  		__("2 Columns", "js_composer") => "2clm", 
// 		  		__("3 Columns", "js_composer") => "3clm", 
// 		  		__("4 Columns", "js_composer") => "4clm",
// 		  		__("5 Columns (Only Wall Effect Enabled)", "js_composer") => "5clm",
// 		  		__("6 Columns (Only Wall Effect Enabled)", "js_composer") => "6clm"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("How many columns should be displayed?", "js_composer"),
// 		  	"dependency" => Array('element' => "team_layout", 'value' => array('grid-team'))
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Enable Wall Effect?", "js_composer"),
// 		  	"param_name" => "team_wall",
// 		  	"value" => array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"description" => __("Enable or Disable Team Wall Effect!", "js_composer"),
// 		  	"dependency" => Array('element' => "team_layout", 'value' => array('grid-team', 'carousel-team'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Team Number", "js_composer"),
// 		  	"param_name" => "team_post_number",
// 		  	"admin_label" => false,
// 		  	"description" => __('How many post to show? Enter number or word "All". Default value is All.', "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Team Categories", "js_composer"),
// 		  	"param_name" => "team_categories",
// 		  	"admin_label" => false,
// 		  	"description" => __("If you want to show only certain team categories, not the entire team, please write the categories in this field, separated by commas. Please use the <strong>category slug</strong>, not the title.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Order by", "js_composer"),
// 		  	"param_name" => "orderby",
// 		  	"value" => array( 
// 		  		"", 
// 		  		__("Date", "js_composer") => "date", 
// 		  		__("ID", "js_composer") => "ID", 
// 		  		__("Author", "js_composer") => "author", 
// 		  		__("Title", "js_composer") => "title", 
// 		  		__("Modified", "js_composer") => "modified", 
// 		  		__("Random", "js_composer") => "rand",
// 		  		__("Comment count", "js_composer") => "comment_count", 
// 		  		__("Menu order", "js_composer") => "menu_order"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => sprintf(__('Select how to sort retrieved posts. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Order way", "js_composer"),
// 		  	"param_name" => "order",
// 		  	"value" => array( 
// 		  		__("Descending", "js_composer") => "DESC", 
// 		  		__("Ascending", "js_composer") => "ASC"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => sprintf(__('Designates the ascending or descending order. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Gallery Images
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Gallery_Images extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Gallery Images", "js_composer"),
// 	"base" => "az_gallery_images",
// 	"icon" => "icon-wpb-gallery",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(
		
// 		array(
// 		  	"type" => "attach_images",
// 		  	"heading" => __("Images for Gallery", "js_composer"),
// 		  	"param_name" => "images_gallery",
//       	  	"value" => "",
// 		  	"description" => __("Select images from media library.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Gallery Layout Mode", "js_composer"),
// 		  	"param_name" => "gallery_layout",
// 		  	"value" => array(
// 		  		__("Grid", "js_composer") => "grid-gallery", 
// 		  		__("Masonry", "js_composer") => "masonry-gallery",
// 		  		__("Carousel", "js_composer") => "carousel-gallery"
// 		  	),
// 		  	"admin_label" => true,
// 		  	"description" => __("Select Gallery Layout Mode.<br/>
// 		  						 Grid Gallery - Simple Grid Gallery with columns.<br/>
// 		  						 Masonry Gallery - Simple Masonry Gallery with Columns.", "js_composer")
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Randomize Image?", "js_composer"),
// 		  	"param_name" => "gallery_random_image",
// 		  	"value" => array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"description" => __("Randomize the Images", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Item Number", "js_composer"),
// 		  	"param_name" => "carousel_gallery_item",
// 		  	"value" => "6",
// 		  	"admin_label" => false,
// 		  	"description" => __('', "js_composer"),
// 		  	"dependency" => Array('element' => "gallery_layout", 'value' => array('carousel-gallery'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Item Tablet Number", "js_composer"),
// 		  	"param_name" => "carousel_gallery_item_tablet",
// 		  	"value" => "3",
// 		  	"admin_label" => false,
// 		  	"description" => __('', "js_composer"),
// 		  	"dependency" => Array('element' => "gallery_layout", 'value' => array('carousel-gallery'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Item Mobile Number", "js_composer"),
// 		  	"param_name" => "carousel_gallery_item_mobile",
// 		  	"value" => "1",
// 		  	"admin_label" => false,
// 		  	"description" => __('', "js_composer"),
// 		  	"dependency" => Array('element' => "gallery_layout", 'value' => array('carousel-gallery'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Carousel Navigation", "js_composer"),
// 		  	"param_name" => "carousel_gallery_navigation",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "false",
// 		  		__("Yes", "js_composer") => "true"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("", "js_composer"),
// 		  	"dependency" => Array('element' => "gallery_layout", 'value' => array('carousel-gallery'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Carousel Pagination", "js_composer"),
// 		  	"param_name" => "carousel_gallery_pagination",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "false",
// 		  		__("Yes", "js_composer") => "true"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("", "js_composer"),
// 		  	"dependency" => Array('element' => "gallery_layout", 'value' => array('carousel-gallery'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Carousel Autoplay", "js_composer"),
// 		  	"param_name" => "carousel_gallery_autoplay",
// 		  	"value" => array(
// 		  		__("No", "js_composer") => "false",
// 		  		__("Yes", "js_composer") => "true"
// 		  	),
// 		  	"admin_label" => false,
// 		  	"description" => __("", "js_composer"),
// 		  	"dependency" => Array('element' => "gallery_layout", 'value' => array('carousel-gallery'))
// 		),
		

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Columns", "js_composer"),
// 		  	"param_name" => "gallery_columns_count",
// 		  	"value" => array(
// 		  		__("2 Columns", "js_composer") => "2clm", 
// 		  		__("3 Columns", "js_composer") => "3clm", 
// 		  		__("4 Columns", "js_composer") => "4clm", 
// 		  		__("5 Columns (Only Wall Effect Enabled)", "js_composer") => "5clm", 
// 		  		__("6 Columns (Only Wall Effect Enabled)", "js_composer") => "6clm"
// 		  	),
// 		  	"admin_label" => true,
// 		  	"description" => __("How many columns should be displayed?", "js_composer"),
// 		  	"dependency" => Array('element' => "gallery_layout", 'value' => array('grid-gallery', 'masonry-gallery'))
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Enable Wall Effect?", "js_composer"),
// 		  	"param_name" => "gallery_wall",
// 		  	"value" => Array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"description" => __("Enable or Disable Portfolio Wall Effect!", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Box Icon
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Box_Icon extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Box Icon", "js_composer"),
// 	"base" => "az_box_icon",
// 	"icon" => "icon-wpb-box-icon",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Box Style Select", "js_composer"),
// 		  	"param_name" => "icons_select",
// 		  	"value" => array(
// 		  					__("Click For Select", "js_composer") => "",
// 		  					__("Boxed Version", "js_composer") => "boxed_version", 
// 		  					__("Circle Icon", "js_composer") => "icon_circle",
// 		  					__("Icon Only", "js_composer") => "icon_only",
// 		  					__("Standard Icon with Title", "js_composer") => "icon_standard"
// 		  				),
// 		  	"admin_label" => false,
// 		  	"description" => __("Select Your Favorite Box Icons Style.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Box Icon Position", "js_composer"),
// 		  	"param_name" => "position",
// 		  	"value" => array(
// 		  					__("Left", "js_composer") => "left", 
// 		  					__("Top", "js_composer") => "top", 
// 		  					__("Right", "js_composer") => "right"
// 		  				),
// 		  	"description" => __("Should the icon be positioned at the left, right or at the top?", "js_composer"),
// 		  	"dependency" => Array('element' => "icons_select", 'value' => array('icon_circle', 'icon_only')),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Wrap Box Icon in a link?", "js_composer"),
// 		  	"param_name" => "box_wrap_link",
// 		  	"value" => Array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Link URL", "js_composer"),
// 		  	"param_name" => "box_wrap_link_url",
// 		  	"description" => __("Where should your box icon link to?", "js_composer"),
// 		  	"dependency" => Array('element' => "box_wrap_link", 'value' => array('yes')),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Link Target", "js_composer"),
// 		  	"param_name" => "target",
// 		  	"value" => $target_arr,
// 		  	"dependency" => Array('element' => "box_wrap_link", 'value' => array('yes')),
// 		  	"admin_label" => false
// 		),		
		
// 		array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Icon", "js_composer"),
// 	      	"param_name" => "icon",
// 	      	"value" => $fonticon_arr,
// 	      	"description" => __("Select your icon.", "js_composer"),
// 	      	"dependency" => Array('element' => "icons_select", 'value' => array('icon_circle', 'icon_only', 'icon_standard', 'boxed_version'))
// 	    ),

// 	    array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Icon Color", "js_composer"),
// 	      	"param_name" => "icon_color",
// 	      	"value" => array(
// 	      		__("Theme Color Default", "js_composer") => "default-color", 
// 	      		__("Custom Color", "js_composer") => "custom"
// 	      	),
// 	      	"description" => __("Choose a color for your icon here.", "js_composer"),
// 	      	"admin_label" => false
// 	    ),
	    
// 	    array(
// 	      	"type" => "colorpicker",
// 	      	"heading" => __("Icon Custom Color", "js_composer"),
// 	      	"param_name" => "custom_icon_color",
// 	      	"description" => __("Select custom color for icon.", "js_composer"),
// 	      	"dependency" => Array('element' => "icon_color", 'value' => array('custom'))
// 	    ),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Title", "js_composer"),
// 		  	"param_name" => "title",
// 		  	"description" => __("Add an Box Icon title here.", "js_composer"),
// 		  	"value" => "Box Icon Title",
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textarea_html",
// 		  	"holder" => "div",
// 		  	"heading" => __("Text", "js_composer"),
// 		  	"param_name" => "content",
// 		  	"value" => __("Insert Your Text.", "js_composer")
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		 	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Video Embed or Video Self Hosted
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Video_Container extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Video", "js_composer"),
// 	"base" => "az_video_container",
// 	"icon" => "icon-wpb-video",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(
		
// 		array(
// 		  	"type" => "textarea_html",
// 		  	"holder" => "div",
// 		  	"heading" => __("Video Embed / Video Self Hosted", "js_composer"),
// 		  	"param_name" => "content",
// 		  	"description" => __("Click on the <strong>AZ Shortcode Button</strong> and select <strong>Video Embed or Video Self Hosted Shortcode</strong>.
// 		  	<br/><br/>A list of all supported Video Services can be found on <a href='http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F' target='_blank'>WordPress.org</a><br/>
// 		  	<br/>Working examples, in case you want to use an external service (Video Embed Shortcode):
// 		  	<br/><strong>https://vimeo.com/charlex/shapeshifter</strong>
// 		  	<br/><strong>http://www.youtube.com/watch?v=CZIt20emgLY</strong>", "js_composer"),
// 		  	"value" => __("Click here, delete this text and click on AZ Shortcodes Button and select Video Embed or Video Self Hosted Shortcode...", "js_composer")
// 		),
			
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Audio Self Hosted
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Audio_Container extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Audio", "js_composer"),
// 	"base" => "az_audio_container",
// 	"icon" => "icon-wpb-audio",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(
		
// 		array(
// 		  	"type" => "textarea_html",
// 		  	"holder" => "div",
// 		  	"heading" => __("Audio Self Hosted", "js_composer"),
// 		  	"param_name" => "content",
// 		  	"description" => __("Click on the <strong>AZ Shortcode Button</strong> and select <strong>Audio Self Hosted Shortcode</strong>.", "js_composer"),
// 		  	"value" => __("Click here, delete this text and click on AZ Shortcodes Button and select Audio Self Hosted Shortcode...", "js_composer")
// 		),
			
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Google Map
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Google_Map extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Google Map", "js_composer"),
//   	"base" => "az_google_map",
//   	"icon" => "icon-wpb-map",
//   	"category" => __('Content', 'js_composer'),
//   	"params" => array(

//   		array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Map Color", "js_composer"),
// 	      	"param_name" => "map_color_select",
// 	      	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
// 	      	"description" => __("Choose a color for your map here.", "js_composer"),
// 	      	"admin_label" => false
// 	    ),

// 	    array(
// 	      	"type" => "colorpicker",
// 	      	"heading" => __("Map Hue Color", "js_composer"),
// 	      	"param_name" => "map_hue_color",
// 	      	"description" => __("Indicates the basic color. Clear Value if you want a default google color map.", "js_composer"),
// 	      	"dependency" => Array('element' => "map_color_select", 'value' => array('custom'))
// 	    ),
		
// 		array(
//       		"type" => "textfield",
//       		"heading" => __("Map Saturation", "js_composer"),
//       		"param_name" => "map_saturation",
//       		"description" => __("A floating point value between -100 and 100. Indicates the percentage change in intensity of the basic color to apply to the element.", "js_composer"),
// 	  		"value" => "0",
// 	  		"admin_label" => false,
// 	  		"dependency" => Array('element' => "map_color_select", 'value' => array('custom'))
//     	),

//     	array(
//       		"type" => "textfield",
//       		"heading" => __("Map Lightness", "js_composer"),
//       		"param_name" => "map_lightness",
//       		"description" => __("A floating point value between -100 and 100. Indicates the percentage change in brightness of the element. Negative values increase darkness (where -100 specifies black) while positive values increase brightness (where +100 specifies white).", "js_composer"),
// 	  		"value" => "0",
// 	  		"admin_label" => false,
// 	  		"dependency" => Array('element' => "map_color_select", 'value' => array('custom'))
//     	),

//     	array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Map Scroll", "js_composer"),
// 	      	"param_name" => "map_scroll",
// 	      	"value" => array(__("Enable", "js_composer") => "true", __("Disable", "js_composer") => "false"),
// 	      	"description" => __("Enable/disable Scrollwheel zooming on the map.", "js_composer"),
// 	      	"admin_label" => false
// 	    ),

// 	    array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Map Draggable", "js_composer"),
// 	      	"param_name" => "map_drag",
// 	      	"value" => array(__("Enable", "js_composer") => "true", __("Disable", "js_composer") => "false"),
// 	      	"description" => __("Enable/disable dragged map.", "js_composer"),
// 	      	"admin_label" => false
// 	    ),

// 	    array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Map Zoom Control", "js_composer"),
// 	      	"param_name" => "map_zoom_control",
// 	      	"value" => array(__("Enable", "js_composer") => "true", __("Disable", "js_composer") => "false"),
// 	      	"description" => __("Enable/disable state of the Zoom Control.", "js_composer"),
// 	      	"admin_label" => false
// 	    ),

// 	    array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Map Disable Double Click", "js_composer"),
// 	      	"param_name" => "map_double_click",
// 	      	"value" => array(__("Enable", "js_composer") => "true", __("Disable", "js_composer") => "false"),
// 	      	"description" => __("Enable/disable Zoom and Center on double click.", "js_composer"),
// 	      	"admin_label" => false
// 	    ),

// 	    array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Map Disable Default UI", "js_composer"),
// 	      	"param_name" => "map_default",
// 	      	"value" => array(__("Enable", "js_composer") => "true", __("Disable", "js_composer") => "false"),
// 	      	"description" => __("Enable/disable all default UI.", "js_composer"),
// 	      	"admin_label" => false
// 	    ),

// 		array(
//       		"type" => "textfield",
//       		"heading" => __("Map Height", "js_composer"),
//       		"param_name" => "map_height",
//       		"description" => __("Please enter the height for your map in pixel. Default Value 500.", "js_composer"),
// 	  		"value" => "500",
// 	  		"admin_label" => false
//     	),

// 		array(
//       		"type" => "textfield",
//       		"heading" => __("Map Latidude", "js_composer"),
//       		"param_name" => "map_latidude",
//       		"description" => __("Please enter the latitude for the maps center point.", "js_composer"),
// 	  		"value" => "",
// 	  		"admin_label" => false
//     	),

//     	array(
//       		"type" => "textfield",
//       		"heading" => __("Map Longitude", "js_composer"),
//       		"param_name" => "map_longitude",
//       		"description" => __("Please enter the longitude for the maps center point.", "js_composer"),
// 	  		"value" => "",
// 	  		"admin_label" => false
//     	),

//     	array(
//       		"type" => "textfield",
//       		"heading" => __("Map Zoom Level", "js_composer"),
//       		"param_name" => "map_zoom",
//       		"description" => __("Value should be between 1-18, 1 being the entire earth and 18 being right at street level.", "js_composer"),
// 	  		"value" => "",
// 	  		"admin_label" => false
//     	),

//     	array(
// 		  	"type" => "attach_image",
// 		  	"heading" => __("Marker Icon", "js_composer"),
// 		  	"param_name" => "image",
//       	  	"value" => "",
// 		  	"description" => __("Please upload an image that will be used for the marker on your map.", "js_composer")
// 		),

//     	array(
//       		"type" => "textfield",
//       		"heading" => __("Map Title Marker", "js_composer"),
//       		"param_name" => "map_title_marker",
//       		"description" => __("Please Enter here your text of Title Marker.", "js_composer"),
// 	  		"value" => "",
// 	  		"admin_label" => false
//     	),

//     	array(
//       		"type" => "textarea",
//       		"heading" => __("Map Info Window Text", "js_composer"),
//       		"param_name" => "map_infowindow_text",
//       		"description" => __("If you would like to display any text in an info window for location, please enter it here.", "js_composer"),
// 	  		"value" => "",
// 	  		"admin_label" => false
//     	),

// 		array(
// 	      	"type" => "textfield",
// 	      	"heading" => __("Extra class name", "js_composer"),
// 	      	"param_name" => "el_class",
// 	      	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 	    )
//   	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Call to Action
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Call_Action extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Call to Action", "js_composer"),
//   	"base" => "az_call_action",
//   	"icon" => "icon-wpb-btn",
//   	"category" => __('Content', 'js_composer'),
//   	"params" => array(

//   		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Call Action Font Color", "js_composer"),
// 		  	"param_name" => "call_action_color",
// 		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
// 		  	"description" => __("Choose a color for your call action text.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Call Action Text Custom Color", "js_composer"),
// 		  	"param_name" => "custom_call_action_color",
// 		  	"description" => __("Select custom color for call action text.", "js_composer"),
// 		  	"dependency" => Array('element' => "call_action_color", 'value' => array('custom'))
// 		),
		
// 		array(
//   			"type" => "textarea_raw_html",
// 			"holder" => "div",
// 			"heading" => __("Call Action Text", "js_composer"),
// 			"param_name" => "content_call_action",
// 			"value" => base64_encode("Call to Action Text."),
// 			"description" => __("Insert your text. HTML is allowed.", "js_composer")
// 		),

// 		array(
//       		"type" => "textfield",
//       		"heading" => __("Button Label", "js_composer"),
//       		"param_name" => "buttonlabel",
//       		"description" => __("This is the text that appears on your button.", "js_composer"),
// 	  		"value" => "Button Title",
// 	  		"admin_label" => false
//     	),

//     	array(
// 	      	"type" => "textfield",
// 	      	"heading" => __("Button Link", "js_composer"),
// 	      	"param_name" => "buttonlink",
// 	      	"description" => __("Where should your button link to?", "js_composer"),
// 		  	"admin_label" => false
// 	    ),
	
// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Button Link Target", "js_composer"),
// 		  	"param_name" => "target",
// 		  	"value" => $target_arr
// 		),

// 		array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Button Color", "js_composer"),
// 	      	"param_name" => "buttoncolor",
// 	      	"value" => array(
// 	      		__("Theme Color Default", "js_composer") => "default-color", 
// 	      		__("Custom Color", "js_composer") => "custom"
// 	      	),
// 	      	"description" => __("Choose a color for your button here.", "js_composer"),
// 	      	"admin_label" => false
// 	    ),

// 	    array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Inverted Color?", "js_composer"),
// 		  	"param_name" => "inverted",
// 		  	"value" => Array(__("Yes, please", "js_composer") => 'yes')
// 		),
	    
// 	    array(
// 	      	"type" => "colorpicker",
// 	      	"heading" => __("Button Custom Color", "js_composer"),
// 	      	"param_name" => "custombuttoncolor",
// 	      	"description" => __("Select custom color for button.", "js_composer"),
// 	      	"dependency" => Array('element' => "buttoncolor", 'value' => array('custom'))
// 	    ),

// 	    array(
// 	      	"type" => "colorpicker",
// 	      	"heading" => __("Button Text Custom Color", "js_composer"),
// 	      	"param_name" => "custombuttontextcolor",
// 	      	"description" => __("Select custom color for text button.", "js_composer"),
// 	      	"dependency" => Array('element' => "buttoncolor", 'value' => array('custom'))
// 	    ),

// 	    array(
// 	      	"type" => "colorpicker",
// 	      	"heading" => __("Button Text Hover Custom Color", "js_composer"),
// 	      	"param_name" => "custombuttontexthovercolor",
// 	      	"description" => __("Select custom color for text button hover event.", "js_composer"),
// 	      	"dependency" => Array('element' => "buttoncolor", 'value' => array('custom'))
// 	    ),

// 		array(
// 	      	"type" => "textfield",
// 	      	"heading" => __("Extra class name", "js_composer"),
// 	      	"param_name" => "el_class",
// 	      	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 	    )
//   	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Button
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Buttons extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Button", "js_composer"),
//   	"base" => "az_buttons",
//   	"icon" => "icon-wpb-btn",
//   	"category" => __('Content', 'js_composer'),
//   	"params" => array(
		
// 		array(
//       		"type" => "textfield",
//       		"heading" => __("Button Label", "js_composer"),
//       		"param_name" => "buttonlabel",
//       		"description" => __("This is the text that appears on your button.", "js_composer"),
// 	  		"value" => "Button Title",
// 	  		"admin_label" => false
//     	),

//     	array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Button Align", "js_composer"),
// 		  	"param_name" => "buttonalign",
// 		  	"value" => 
// 			  	array(
// 					__("No Align", "js_composer") => "noalign",
// 					__("Align Left", "js_composer") => "textalignleft",
// 					__("Align Center", "js_composer") => "textaligncenter",
// 					__("Align Right", "js_composer") => "textalignright",
// 				),
// 		  	"description" => __("Select the align.", "js_composer"),
// 		  	"admin_label" => false
// 		),
	
// 		array(
// 	      	"type" => "textfield",
// 	      	"heading" => __("Button Link", "js_composer"),
// 	      	"param_name" => "buttonlink",
// 	      	"description" => __("Where should your button link to?", "js_composer"),
// 		  	"admin_label" => false
// 	    ),
	
// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Button Link Target", "js_composer"),
// 		  	"param_name" => "target",
// 		  	"value" => $target_arr
// 		),
		
// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Button Size", "js_composer"),
// 		  	"param_name" => "buttonsize",
// 		  	"value" => array(
// 		  		__("Mini", "js_composer") => "button-mini", 
// 		  		__("Small", "js_composer") => "button-small", 
// 		  		__("Medium", "js_composer") => "button-medium", 
// 		  		__("Large", "js_composer") => "button-large"
// 		  	),
// 		  	"admin_label" => false
// 		),
		
// 		array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Button Color", "js_composer"),
// 	      	"param_name" => "buttoncolor",
// 	      	"value" => array(
// 	      		__("Theme Color Default", "js_composer") => "default-color", 
// 	      		__("Custom Color", "js_composer") => "custom"
// 	      	),
// 	      	"description" => __("Choose a color for your button here.", "js_composer"),
// 	      	"admin_label" => false
// 	    ),
	    
// 	    array(
// 	      	"type" => "colorpicker",
// 	      	"heading" => __("Button Custom Color", "js_composer"),
// 	      	"param_name" => "custombuttoncolor",
// 	      	"description" => __("Select custom color for button.", "js_composer"),
// 	      	"dependency" => Array('element' => "buttoncolor", 'value' => array('custom'))
// 	    ),

// 	    array(
// 	      	"type" => "colorpicker",
// 	      	"heading" => __("Button Text Custom Color", "js_composer"),
// 	      	"param_name" => "custombuttontextcolor",
// 	      	"description" => __("Select custom color for text button.", "js_composer"),
// 	      	"dependency" => Array('element' => "buttoncolor", 'value' => array('custom'))
// 	    ),

// 	    array(
// 	      	"type" => "colorpicker",
// 	      	"heading" => __("Button Text Hover Custom Color", "js_composer"),
// 	      	"param_name" => "custombuttontexthovercolor",
// 	      	"description" => __("Select custom color for text button hover event.", "js_composer"),
// 	      	"dependency" => Array('element' => "buttoncolor", 'value' => array('custom'))
// 	    ),
		
// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Inverted Color?", "js_composer"),
// 		  	"param_name" => "inverted",
// 		  	"value" => Array(__("Yes, please", "js_composer") => 'yes')
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Icon", "js_composer"),
// 		  	"param_name" => "checkicon",
// 		  	"value" => array(
// 		  		__("No Icon", "js_composer") => "no_icon", 
// 		  		__("Yes, Display Icon", "js_composer") => "custom_icon"
// 		  	),
// 		  	"description" => __("Should an icon be displayed at the left side of the progress bar.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Icon", "js_composer"),
// 	      	"param_name" => "icon",
// 	      	"value" => $fonticon_arr,
// 	      	"description" => __("Select your icon.", "js_composer"),
// 	      	"dependency" => Array('element' => "checkicon", 'value' => array('custom_icon'))
// 	    ),

// 	    $animated_choice,
// 		$animated_effects,
// 		$animated_delay,
		
// 		array(
// 	      	"type" => "textfield",
// 	      	"heading" => __("Extra class name", "js_composer"),
// 	      	"param_name" => "el_class",
// 	      	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 	    )
//   	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Social Profiles
// /*-----------------------------------------------------------------------------------*/

// class WPBakeryShortCode_AZ_Social_Profile extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Social Profile", "js_composer"),
//   	"base" => "az_social_profile",
//   	"icon" => "icon-wpb-social",
//   	"category" => __('Content', 'js_composer'),
//   	"params" => array(
		
// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("500PX Profile", "js_composer"),
// 		  	"param_name" => "px",
// 		  	"description" => __("Please enter in your 500PX URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Add This Profile", "js_composer"),
// 		  	"param_name" => "addthis",
// 		  	"description" => __("Please enter in your Add This URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Behance Profile", "js_composer"),
// 		  	"param_name" => "behance",
// 		  	"description" => __("Please enter in your Behance URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Bebo Profile", "js_composer"),
// 		  	"param_name" => "bebo",
// 		  	"description" => __("Please enter in your Bebo URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Blogger Profile", "js_composer"),
// 		  	"param_name" => "blogger",
// 		  	"description" => __("Please enter in your Blogger URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Deviant Art Profile", "js_composer"),
// 		  	"param_name" => "deviantart",
// 		  	"description" => __("Please enter in your Deviant Art URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Digg Profile", "js_composer"),
// 		  	"param_name" => "digg",
// 		  	"description" => __("Please enter in your Digg URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Dribbble Profile", "js_composer"),
// 		  	"param_name" => "dribbble",
// 		  	"description" => __("Please enter in your Dribbble URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Email Profile", "js_composer"),
// 		  	"param_name" => "email",
// 		  	"description" => __("Please enter in your Email URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Envato Profile", "js_composer"),
// 		  	"param_name" => "envato",
// 		  	"description" => __("Please enter in your Envato URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Evernote Profile", "js_composer"),
// 		  	"param_name" => "evernote",
// 		  	"description" => __("Please enter in your Evernote URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Facebook Profile", "js_composer"),
// 		  	"param_name" => "facebook",
// 		  	"description" => __("Please enter in your Facebook URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Flickr Profile", "js_composer"),
// 		  	"param_name" => "flickr",
// 		  	"description" => __("Please enter in your Flickr URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Forrst Profile", "js_composer"),
// 		  	"param_name" => "forrst",
// 		  	"description" => __("Please enter in your Forrst URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Github Profile", "js_composer"),
// 		  	"param_name" => "github",
// 		  	"description" => __("Please enter in your Github URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Google Plus Profile", "js_composer"),
// 		  	"param_name" => "googleplus",
// 		  	"description" => __("Please enter in your Google Plus URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Grooveshark Profile", "js_composer"),
// 		  	"param_name" => "grooveshark",
// 		  	"description" => __("Please enter in your Grooveshark URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Instagram Profile", "js_composer"),
// 		  	"param_name" => "instagram",
// 		  	"description" => __("Please enter in your Instagram URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Last Fm Profile", "js_composer"),
// 		  	"param_name" => "lastfm",
// 		  	"description" => __("Please enter in your Last Fm URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Linked In Profile", "js_composer"),
// 		  	"param_name" => "linkedin",
// 		  	"description" => __("Please enter in your Linked In URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("My Space Profile", "js_composer"),
// 		  	"param_name" => "myspace",
// 		  	"description" => __("Please enter in your My Space URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("PayPal Profile", "js_composer"),
// 		  	"param_name" => "paypal",
// 		  	"description" => __("Please enter in your PayPal URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Photobucket Profile", "js_composer"),
// 		  	"param_name" => "photobucket",
// 		  	"description" => __("Please enter in your Photobucket URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Pinterest Profile", "js_composer"),
// 		  	"param_name" => "pinterest",
// 		  	"description" => __("Please enter in your Pinterest URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Quora Profile", "js_composer"),
// 		  	"param_name" => "quora",
// 		  	"description" => __("Please enter in your Quora URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Share This Profile", "js_composer"),
// 		  	"param_name" => "sharethis",
// 		  	"description" => __("Please enter in your Share This URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Skype Profile", "js_composer"),
// 		  	"param_name" => "skype",
// 		  	"description" => __("Please enter in your Skype URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Soundcloud Profile", "js_composer"),
// 		  	"param_name" => "soundcloud",
// 		  	"description" => __("Please enter in your Soundcloud URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("StumbleUpon Profile", "js_composer"),
// 		  	"param_name" => "stumbleupon",
// 		  	"description" => __("Please enter in your StumbleUpon URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Tumblr Profile", "js_composer"),
// 		  	"param_name" => "tumblr",
// 		  	"description" => __("Please enter in your Tumblr URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Twitter Profile", "js_composer"),
// 		  	"param_name" => "twitter",
// 		  	"description" => __("Please enter in your Twitter URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Viddler Profile", "js_composer"),
// 		  	"param_name" => "viddler",
// 		  	"description" => __("Please enter in your Viddler URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Vimeo Profile", "js_composer"),
// 		  	"param_name" => "vimeo",
// 		  	"description" => __("Please enter in your Vimeo URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Virb Profile", "js_composer"),
// 		  	"param_name" => "virb",
// 		  	"description" => __("Please enter in your Virb URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Wordpress Profile", "js_composer"),
// 		  	"param_name" => "wordpress",
// 		  	"description" => __("Please enter in your Wordpress URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Yahoo Profile", "js_composer"),
// 		  	"param_name" => "yahoo",
// 		  	"description" => __("Please enter in your Yahoo URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Yelp Profile", "js_composer"),
// 		  	"param_name" => "yelp",
// 		  	"description" => __("Please enter in your Yelp URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("You Tube Profile", "js_composer"),
// 		  	"param_name" => "youtube",
// 		  	"description" => __("Please enter in your You Tube URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array( 
// 		  	"type" => "textfield",
// 		  	"heading" => __("Zerply Profile", "js_composer"),
// 		  	"param_name" => "zerply",
// 		  	"description" => __("Please enter in your Zerply URL.", "js_composer"),
// 		  	"value" => ""
// 		),

// 		array(
// 	      	"type" => "textfield",
// 	      	"heading" => __("Extra class name", "js_composer"),
// 	      	"param_name" => "el_class",
// 	      	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 	    )
//   	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Social Share Buttons
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Social_Share_Button extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Social Share Button", "js_composer"),
//   	"base" => "az_social_share_button",
//   	"icon" => "icon-wpb-btn",
//   	"category" => __('Content', 'js_composer'),
//   	"params" => array(
	
// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Facebook?", "js_composer"),
// 		  	"param_name" => "facebook_btn",
// 		  	"value" => Array(__("Enabled", "js_composer") => 'enabled')
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Twitter?", "js_composer"),
// 		  	"param_name" => "twitter_btn",
// 		  	"value" => Array(__("Enabled", "js_composer") => 'enabled')
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Google Plus?", "js_composer"),
// 		  	"param_name" => "googleplus_btn",
// 		  	"value" => Array(__("Enabled", "js_composer") => 'enabled')
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Pinterest?", "js_composer"),
// 		  	"param_name" => "pinterest_btn",
// 		  	"value" => Array(__("Enabled", "js_composer") => 'enabled')
// 		),
		
// 		array(
// 	      	"type" => "textfield",
// 	      	"heading" => __("Extra class name", "js_composer"),
// 	      	"param_name" => "el_class",
// 	      	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 	    )
//   	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Big Twitter Feed
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Big_Tweet_Feed extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Big Twitter Feed", "js_composer"),
// 	"base" => "az_big_tweet_feed",
// 	"icon" => "icon-wpb-tweet",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Big Twitter Feed Type", "js_composer"),
// 		  	"param_name" => "twitter_mode",
// 		  	"value" => array(__("One Tweet", "js_composer") => "one_tweet", __("More Tweet", "js_composer") => "more_tweet"),
// 		  	"admin_label" => false,
// 		  	"description" => __("Select Your Favorite Twitter Style.", "js_composer")
// 		),
		
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Twitter Username", "js_composer"),
// 		  	"param_name" => "twitter_username",
// 		  	"value" => "Bluxart",
// 		  	"description" => __("Insert here your twitter username only.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 			"type" => "textfield",
// 			"heading" => __("Number Tweet", "js_composer"),
// 			"param_name" => "num_tweet",
// 			"value" => "",
// 			"description" => __("Display total tweets.", "js_composer"),
// 			"dependency" => Array('element' => "twitter_mode", 'value' => array('more_tweet'))
// 		),
			
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Progress Bar
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Progress_Bar extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Progress Bar", "js_composer"),
// 	"base" => "az_progress_bar",
// 	"icon" => "icon-wpb-progress-bar",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(

// 		array(
// 		  	"type" => "checkbox",
// 		  	"heading" => __("Animated Bar?", "js_composer"),
// 		  	"param_name" => "animated_bar",
// 		  	"value" => Array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"description" => __("Choose if you want animate bar when appears.", "js_composer")
// 		),
		
// 		array(
// 		  	"type" => "textfield",
// 		 	"heading" => __("Progress Bar Field", "js_composer"),
// 		  	"param_name" => "field",
// 		  	"description" => __("Enter the Progress Bar Field title here.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		 	"type" => "textfield",
// 		  	"heading" => __("Progress in %", "js_composer"),
// 		  	"param_name" => "percentage",
// 		  	"description" => __("Enter a number between 0 and 100.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Bar color", "js_composer"),
// 		  	"param_name" => "bgcolor",
// 		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
// 		  	"description" => __("Choose a color for your progress bar here.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Bar Custom Color", "js_composer"),
// 		  	"param_name" => "custombarcolor",
// 		  	"description" => __("Select custom background color for bar.", "js_composer"),
// 		  	"dependency" => Array('element' => "bgcolor", 'value' => array('custom'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Icon", "js_composer"),
// 		  	"param_name" => "checkicon",
// 		  	"value" => array(
// 		  		__("No Icon", "js_composer") => "no_icon", 
// 		  		__("Yes, Display Icon", "js_composer") => "custom_icon"
// 		  	),
// 		  	"description" => __("Should an icon be displayed at the left side of the progress bar.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Icon", "js_composer"),
// 	      	"param_name" => "icon",
// 	      	"value" => $fonticon_arr,
// 	      	"description" => __("Select your icon.", "js_composer"),
// 	      	"dependency" => Array('element' => "checkicon", 'value' => array('custom_icon'))
// 	    ),

// 	    $animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Circular Progress Bar
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Circular_Progress_Bar extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Circular Bar", "js_composer"),
// 	"base" => "az_circular_progress_bar",
// 	"icon" => "icon-wpb-circular-bar",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Circular Progress Type", "js_composer"),
// 		  	"param_name" => "check_circular_type",
// 		  	"value" => array(
// 		  		__("With Icon", "js_composer") => "icon_mode", 
// 		  		__("Custom Field", "js_composer") => "field_mode",
// 		  		__("Animated Percentage", "js_composer") => "ani_percentage"
// 		  	),
// 		  	"description" => __("Select the type of your circular progress.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Icon", "js_composer"),
// 		  	"param_name" => "checkicon",
// 		  	"value" => array(
// 		  		__("No Icon", "js_composer") => "no_icon", 
// 		  		__("Yes, Display Icon", "js_composer") => "custom_icon"
// 		  	),
// 		  	"description" => __("Should an icon be displayed at the left side of the progress bar.", "js_composer"),
// 		  	"admin_label" => false,
// 		  	"dependency" => Array('element' => "check_circular_type", 'value' => array('icon_mode'))
// 		),

// 		array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Icon", "js_composer"),
// 	      	"param_name" => "icon",
// 	      	"value" => $fonticon_arr,
// 	      	"description" => __("Select your icon.", "js_composer"),
// 	      	"dependency" => Array('element' => "checkicon", 'value' => array('custom_icon'))
// 	    ),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Icon Color", "js_composer"),
// 		  	"param_name" => "icon_color",
// 		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
// 		  	"description" => __("Choose a color for your icon.", "js_composer"),
// 		  	"admin_label" => false,
// 		  	"dependency" => Array('element' => "check_circular_type", 'value' => array('icon_mode'))
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Icon Custom Color", "js_composer"),
// 		  	"param_name" => "custom_icon_color",
// 		  	"description" => __("Select custom color for icon.", "js_composer"),
// 		  	"dependency" => Array('element' => "icon_color", 'value' => array('custom'))
// 		),
		
// 		// Field
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Circular Progress Bar Field", "js_composer"),
// 		  	"param_name" => "circular_field",
// 		  	"description" => __("Enter the Circular Progress Bar Field title here.", "js_composer"),
// 		  	"admin_label" => false,
// 		  	"dependency" => Array('element' => "check_circular_type", 'value' => array('field_mode'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Field Color", "js_composer"),
// 		  	"param_name" => "field_color",
// 		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
// 		  	"description" => __("Choose a color for your field.", "js_composer"),
// 		  	"admin_label" => false,
// 		  	"dependency" => Array('element' => "check_circular_type", 'value' => array('field_mode'))
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Field Custom Color", "js_composer"),
// 		  	"param_name" => "custom_field_color",
// 		  	"description" => __("Select custom color for field text.", "js_composer"),
// 		  	"dependency" => Array('element' => "field_color", 'value' => array('custom'))
// 		),

// 		// Percentage
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Circular Progress in %", "js_composer"),
// 		  	"param_name" => "circular_percentage",
// 		  	"description" => __("Enter a number between 0 and 100.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("TextField", "js_composer"),
// 		  	"param_name" => "circular_percentage_text",
// 		  	"description" => __("Enter a text.", "js_composer"),
// 		  	"value" => "Text",
// 		  	"admin_label" => false,
// 		  	"dependency" => Array('element' => "check_circular_type", 'value' => array('ani_percentage'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Percentage Text Color", "js_composer"),
// 		  	"param_name" => "percentage_color",
// 		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
// 		  	"description" => __("Choose a color for your percentage text.", "js_composer"),
// 		  	"admin_label" => false,
// 		  	"dependency" => Array('element' => "check_circular_type", 'value' => array('ani_percentage'))
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Percentage Animate Text Custom Color", "js_composer"),
// 		  	"param_name" => "custom_percentage_color",
// 		  	"description" => __("Select custom color for animate percentage text.", "js_composer"),
// 		  	"dependency" => Array('element' => "percentage_color", 'value' => array('custom'))
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Percentage Text Custom Color", "js_composer"),
// 		  	"param_name" => "custom_percentage_text_color",
// 		  	"value" => "#000000",
// 		  	"description" => __("Select custom color for percentage text.", "js_composer"),
// 		  	"dependency" => Array('element' => "percentage_color", 'value' => array('custom'))
// 		),

// 		// Circular Graph Settings
// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Circular Bar Color", "js_composer"),
// 		  	"param_name" => "circular_bgcolor",
// 		  	"value" => "#2ABB9B",
// 		  	"description" => __("Select custom color for circular bar.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Circular Track Color", "js_composer"),
// 		  	"param_name" => "circular_trackcolor",
// 		  	"value" => "#EBEDEF",
// 		  	"description" => __("Select custom color of the track for the bar.", "js_composer")
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Circular Progress Size", "js_composer"),
// 		  	"param_name" => "circular_size",
// 		  	"description" => __("Enter a number for the size of your circle progress in px. Default size is 170.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Line Width Circle Progress", "js_composer"),
// 		  	"param_name" => "circular_line",
// 		  	"description" => __("Enter a number for the width of the bar line in px. Default size is 6.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Count Number
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Count_Number extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Count Number", "js_composer"),
// 	"base" => "az_count_number",
// 	"icon" => "icon-wpb-count-number",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(
		
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Count Number Field", "js_composer"),
// 		  	"param_name" => "number_field",
// 		  	"description" => __("Enter the Progress Bar Field title here.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Field Text Color", "js_composer"),
// 		  	"param_name" => "field_color",
// 		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
// 		  	"description" => __("Choose a color for your field text.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Field Text Custom Color", "js_composer"),
// 		  	"param_name" => "custom_field_color",
// 		  	"description" => __("Select custom color for field text.", "js_composer"),
// 		  	"dependency" => Array('element' => "field_color", 'value' => array('custom'))
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Count Number From", "js_composer"),
// 		  	"param_name" => "number_value_from",
// 		  	"value" => "0",
// 		  	"description" => __("The number to start counting from. Default value is 0.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Count Number To", "js_composer"),
// 		  	"param_name" => "number_value_to",
// 		  	"value" => "100",
// 		  	"description" => __("The number to stop counting at. Default value is 100.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Count Number Speed", "js_composer"),
// 		  	"param_name" => "number_speed",
// 		  	"value" => "1000",
// 		  	"description" => __("The number of milliseconds it should take to finish counting. Default value is 1000.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Count Number Delay", "js_composer"),
// 		  	"param_name" => "number_delay",
// 		  	"value" => "0",
// 		  	"description" => __("The number of milliseconds it should take to delay for start counting. Default value is 0.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Counter Number Color", "js_composer"),
// 		  	"param_name" => "number_color",
// 		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
// 		  	"description" => __("Choose a color for your counter number.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Counter Number Custom Color", "js_composer"),
// 		  	"param_name" => "custom_number_color",
// 		  	"description" => __("Select custom color for counter number.", "js_composer"),
// 		  	"dependency" => Array('element' => "number_color", 'value' => array('custom'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Icon", "js_composer"),
// 		  	"param_name" => "checkicon",
// 		  	"value" => array(
// 		  		__("No Icon", "js_composer") => "no_icon", 
// 		  		__("Yes, Display Icon", "js_composer") => "custom_icon"
// 		  	),
// 		  	"description" => __("Should an icon be displayed at the left side of the progress bar.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Icon", "js_composer"),
// 	      	"param_name" => "icon",
// 	      	"value" => $fonticon_arr,
// 	      	"description" => __("Select your icon.", "js_composer"),
// 	      	"dependency" => Array('element' => "checkicon", 'value' => array('custom_icon'))
// 	    ),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Icon Color", "js_composer"),
// 		  	"param_name" => "icon_color",
// 		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
// 		  	"description" => __("Choose a color for your icon.", "js_composer"),
// 		  	"admin_label" => false,
// 		  	"dependency" => Array('element' => "checkicon", 'value' => array('custom_icon'))
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Icon Custom Color", "js_composer"),
// 		  	"param_name" => "custom_icon_color",
// 		  	"description" => __("Select custom color for icon.", "js_composer"),
// 		  	"dependency" => Array('element' => "icon_color", 'value' => array('custom'))
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		 	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));


// /*-----------------------------------------------------------------------------------*/
// /*	Icons
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Icon extends WPBakeryShortCode {}
// vc_map(array(
// 	"name" => __("Icon", "js_composer"),
// 	"base" => "az_icon",
// 	"icon" => "icon-wpb-single-icon",
// 	"category" => __('Content', 'js_composer'),
// 	"params" => array(

// 		array(
// 	      	"type" => "dropdown",
// 	      	"heading" => __("Icon", "js_composer"),
// 	      	"param_name" => "icon",
// 	      	"value" => $fonticon_arr,
// 	      	"description" => __("Select your icon.", "js_composer")
// 	    ),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Wrap Icon in a link?", "js_composer"),
// 		  	"param_name" => "icon_wrap_link",
// 		  	"value" => Array(__("Yes, please", "js_composer") => 'yes'),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Link URL", "js_composer"),
// 		  	"param_name" => "icon_wrap_link_url",
// 		  	"description" => __("Where should your box icon link to?", "js_composer"),
// 		  	"dependency" => Array('element' => "icon_wrap_link", 'value' => array('yes')),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Link Target", "js_composer"),
// 		  	"param_name" => "target",
// 		  	"value" => $target_arr,
// 		  	"dependency" => Array('element' => "icon_wrap_link", 'value' => array('yes')),
// 		  	"admin_label" => false
// 		),	

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Icon Color", "js_composer"),
// 		  	"param_name" => "icon_color",
// 		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
// 		  	"description" => __("Choose a color for your icon.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "colorpicker",
// 		  	"heading" => __("Icon Custom Color", "js_composer"),
// 		  	"param_name" => "custom_icon_color",
// 		  	"description" => __("Select custom color for icon.", "js_composer"),
// 		  	"dependency" => Array('element' => "icon_color", 'value' => array('custom'))
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Icon Align", "js_composer"),
// 		  	"param_name" => "icon_align",
// 		  	"value" => 
// 			  	array(
// 					__("Align Left", "js_composer") => "iconalignleft",
// 					__("Align Center", "js_composer") => "iconaligncenter",
// 					__("Align Right", "js_composer") => "iconalignright",
// 				),
// 		  	"description" => __("Select a icon align.", "js_composer"),
// 		  	"admin_label" => false
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Icon Size", "js_composer"),
// 		  	"param_name" => "icon_size",
// 		  	"description" => __("Size Value in pixel. Enter only number value. Default value is 16.", "js_composer"),
// 		  	"value" => "16"
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
// 	)
// ));

// /*-----------------------------------------------------------------------------------*/
// /*	Pricing Table
// /*-----------------------------------------------------------------------------------*/
// class WPBakeryShortCode_AZ_Pricing_Table extends WPBakeryShortCode {}
// vc_map(array(
//     "base"		=> "az_pricing_table",
//     "name"		=> __("Pricing Table", "js_composer"),
//     "class"		=> "",
//     "icon"      => "icon-wpb-pricing-table",
// 	"category" 	=> __('Content', 'js_composer'),
//     "params"	=> array(
        
//         array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Pricing Table Title", "js_composer"),
// 		  	"param_name" => "title"
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Pricing Table Price", "js_composer"),
// 		  	"param_name" => "price"
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Pricing Table Currency Symbol", "js_composer"),
// 		  	"param_name" => "currency"
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Pricing Table Interval Time", "js_composer"),
// 		  	"param_name" => "interval"
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Pricing Table Button URL", "js_composer"),
// 		  	"param_name" => "link_url",
// 		  	"value" => "#"
// 		),

// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Pricing Table Button Text", "js_composer"),
// 		  	"param_name" => "link_text",
// 		  	"value" => "Button Text"
// 		),

// 		array(
// 		  	"type" => "dropdown",
// 		  	"heading" => __("Pricing Table Link Target", "js_composer"),
// 		  	"param_name" => "target",
// 		  	"value" => $target_arr
// 		),

// 		array(
// 		  	"type" => 'checkbox',
// 		  	"heading" => __("Highlight Pricing Table?", "js_composer"),
// 		  	"param_name" => "highlight",
// 		  	"value" => Array(__("Yes, please", "js_composer") => 'yes')
// 		),
		
// 		array(
// 		  	"type" => "textarea_html",
// 		  	"holder" => "div",
// 		  	"heading" => __("Text", "js_composer"),
// 		  	"param_name" => "content",
// 		  	"value" => __("<ul><li>5 Project</li><li>5GB Storage</li><li>12 Users</li><li>Tasks</li><li>CRM</li><li>Your Domain</li></ul>", "js_composer")
// 		),

// 		$animated_choice,
// 		$animated_effects,
// 		$animated_delay,
		
// 		array(
// 		  	"type" => "textfield",
// 		  	"heading" => __("Extra class name", "js_composer"),
// 		  	"param_name" => "el_class",
// 		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
// 		)
//     )
// ));


// vc extension = Grid Heading
// ============================
class WPBakeryShortCode_tt_grid_heading extends WPBakeryShortCode {}
vc_map(array(
    "base"		=> "tt_grid_heading",
    "name"		=> __("Grid Heading", "js_composer"),
    "class"		=> "",
    "icon"      => "icon-wpb-pricing-table",
	"category" 	=> __('Titan', 'js_composer'),
    "params"	=> array(
        
        array(
		  	"type" => "textfield",
		  	"heading" => __("Heading Title", "js_composer"),
		  	"param_name" => "title"
		),

        array(
		  	"type" => "colorpicker",
		  	"heading" => __("Element's color", "js_composer"),
		  	"param_name" => "el_color"
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Categories To Display", "js_composer"),
		  	"param_name" => "cat_tab"
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Element's Class", "js_composer"),
		  	"param_name" => "el_class"
		),

    )
));