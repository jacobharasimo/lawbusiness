<?php 
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Admin Panel Services Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_services_tabs() {
	$tabs = array();
	
	$tabs['full'] = __('Page', 'cmsmasters');
	$tabs['service'] = __('Service', 'cmsmasters');
	
	return $tabs;
}


function cmsms_options_services_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'full':
		$sections = array();
		
		$sections['full_section'] = __('Services Page Options', 'cmsmasters');
		
		break;
	case 'service':
		$sections = array();
		
		$sections['service_section'] = __('Services Service Options', 'cmsmasters');
		
		break;
	}
	
	return $sections;
} 


function cmsms_options_services_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'full':
		$options[] = array( 
			'section' => 'full_section', 
			'id' => CMSMS_SHORTNAME . '_services_full_title', 
			'title' => __('Service Title', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'full_section', 
			'id' => CMSMS_SHORTNAME . '_services_full_cat', 
			'title' => __('Service Categories', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'service':
		$options[] = array( 
			'section' => 'service_section', 
			'id' => CMSMS_SHORTNAME . '_services_service_title', 
			'title' => __('Service Title', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'service_section', 
			'id' => CMSMS_SHORTNAME . '_services_service_date', 
			'title' => __('Service Date', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'service_section', 
			'id' => CMSMS_SHORTNAME . '_services_service_cat', 
			'title' => __('Service Categories', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'service_section', 
			'id' => CMSMS_SHORTNAME . '_services_service_author', 
			'title' => __('Service Author', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'service_section', 
			'id' => CMSMS_SHORTNAME . '_services_service_comment', 
			'title' => __('Service Comments', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'service_section', 
			'id' => CMSMS_SHORTNAME . '_services_service_tag', 
			'title' => __('Service Tags', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'service_section', 
			'id' => CMSMS_SHORTNAME . '_services_service_link', 
			'title' => __('Service Link', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'service_section', 
			'id' => CMSMS_SHORTNAME . '_services_service_nav_box', 
			'title' => __('Services Navigation Box', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'service_section', 
			'id' => CMSMS_SHORTNAME . '_services_service_share_box', 
			'title' => __('Sharing Box', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'service_section', 
			'id' => CMSMS_SHORTNAME . '_services_service_author_box', 
			'title' => __('About Author Box', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'service_section', 
			'id' => CMSMS_SHORTNAME . '_services_more_services_box', 
			'title' => __('More Services Box', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'multi-checkbox', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				__('Show Related Tab', 'cmsmasters') . '|related', 
				__('Show Popular Tab', 'cmsmasters') . '|popular', 
				__('Show Recent Tab', 'cmsmasters') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'service_section', 
			'id' => CMSMS_SHORTNAME . '_services_service_r_p_l_number', 
			'title' => __('Related, Popular & Latest Services Boxes Items Number', 'cmsmasters'), 
			'desc' => __('services', 'cmsmasters'), 
			'type' => 'number', 
			'std' => '4' 
		);
		
		break;
	}
	
	return $options;	
}

