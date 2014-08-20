<?php 
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Admin Panel Icons Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_icon_tabs() {
	$tabs = array();
	
	$tabs['heading'] = __('Heading Icons', 'cmsmasters');
	$tabs['header_social'] = __('Header Social Icons', 'cmsmasters');
	$tabs['social'] = __('Footer Social Icons', 'cmsmasters');
	
	return $tabs;
}


function cmsms_options_icon_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = __('Heading Icons', 'cmsmasters');
		
		break;
	case 'header_social':
		$sections = array();
		
		$sections['header_social_section'] = __('Header Social Icons', 'cmsmasters');
		
		break;
	case 'social':
		$sections = array();
		
		$sections['social_section'] = __('Footer Social Icons', 'cmsmasters');
		
		break;
	}
	
	return $sections;	
} 


function cmsms_options_icon_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => CMSMS_SHORTNAME . '_heading_icons', 
			'title' => __('Heading Icons', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'heading', 
			'std' => '' 
		);
		
		break;
	case 'header_social':
		$options[] = array( 
			'section' => 'header_social_section', 
			'id' => CMSMS_SHORTNAME . '_header_social_icons', 
			'title' => __('Header Social Icons', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				get_template_directory_uri() . '/img/facebook.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/twitter.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/rss.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/dribbble.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/linkedin.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/behance.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/pinit.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/flickr.png|#ea2e0d|#|true' 
			) 
		);
		
		break;

	case 'social':
		$options[] = array( 
			'section' => 'social_section', 
			'id' => CMSMS_SHORTNAME . '_social_icons', 
			'title' => __('Footer Social Icons', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				get_template_directory_uri() . '/img/facebook.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/twitter.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/rss.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/dribbble.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/linkedin.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/behance.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/pinit.png|#ea2e0d|#|true', 
				get_template_directory_uri() . '/img/flickr.png|#ea2e0d|#|true' 
			) 
		);
		
		break;
	}
	
	return $options;	
}

