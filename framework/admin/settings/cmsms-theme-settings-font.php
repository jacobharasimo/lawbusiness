<?php 
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = __('Content', 'cmsmasters');
	$tabs['link'] = __('Links', 'cmsmasters');
	$tabs['nav'] = __('Navigation', 'cmsmasters');
	$tabs['h1'] = __('H1', 'cmsmasters');
	$tabs['h2'] = __('H2', 'cmsmasters');
	$tabs['h3'] = __('H3', 'cmsmasters');
	$tabs['h4'] = __('H4', 'cmsmasters');
	$tabs['h5'] = __('H5', 'cmsmasters');
	$tabs['h6'] = __('H6', 'cmsmasters');
	$tabs['other'] = __('Other', 'cmsmasters');
	
	return $tabs;
}


function cmsms_options_font_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = __('Content Font Options', 'cmsmasters');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = __('Links Font Options', 'cmsmasters');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = __('Navigation Font Options', 'cmsmasters');
		
		break;
	case 'h1':
		$sections = array();
		
		$sections['h1_section'] = __('H1 Font Options', 'cmsmasters');
		
		break;
	case 'h2':
		$sections = array();
		
		$sections['h2_section'] = __('H2 Font Options', 'cmsmasters');
		
		break;
	case 'h3':
		$sections = array();
		
		$sections['h3_section'] = __('H3 Font Options', 'cmsmasters');
		
		break;
	case 'h4':
		$sections = array();
		
		$sections['h4_section'] = __('H4 Font Options', 'cmsmasters');
		
		break;
	case 'h5':
		$sections = array();
		
		$sections['h5_section'] = __('H5 Font Options', 'cmsmasters');
		
		break;
	case 'h6':
		$sections = array();
		
		$sections['h6_section'] = __('H6 Font Options', 'cmsmasters');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = __('Other Fonts Options', 'cmsmasters');
		
		break;
	}
	
	return $sections;
} 


function cmsms_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_content_font', 
			'title' => __('Main Content Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif", 
				'google_font' => '', 
				'font_color' => '#7e7e7e', 
				'font_size' => '13', 
				'line_height' => '20', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => CMSMS_SHORTNAME . '_link_font', 
			'title' => __('Links Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif", 
				'google_font' => '', 
				'font_color' => '#ea2e0d', 
				'font_size' => '13', 
				'line_height' => '20', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => CMSMS_SHORTNAME . '_link_font_hover', 
			'title' => __('Links Font Hover Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#000000' 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_content_link', 
			'title' => __('Bottom Links Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'font_color' => '#ffffff', 
				'font_size' => '12', 
				'line_height' => '18' 
			), 
			'choices' => array( 
				'font_color', 
				'font_size', 
				'line_height'
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_content_link_hover', 
			'title' => __('Bottom Links Hover Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ea2e0d'
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_font', 
			'title' => __('Navigation Title Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif",  
				'google_font' => 'Playfair+Display:400,700,400italic,700italic', 
				'font_color' => '#000000', 
				'font_size' => '16',  
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size',  
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_font_hover', 
			'title' => __('Navigation Title Hover &amp; Active Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ea2e0d' 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_dropdown_font', 
			'title' => __('Navigation Dropdown Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif", 
				'google_font' => '',
				'font_color' => '#7e7e7e', 
				'font_size' => '12', 
				'line_height' => '24', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'h1':
		$options[] = array( 
			'section' => 'h1_section', 
			'id' => CMSMS_SHORTNAME . '_h1_font', 
			'title' => __('H1 Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif", 
				'google_font' => 'Playfair+Display:400,700,400italic,700italic',
				'font_color' => '#000000', 
				'font_size' => '34', 
				'line_height' => '42', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'h2':
		$options[] = array( 
			'section' => 'h2_section', 
			'id' => CMSMS_SHORTNAME . '_h2_font', 
			'title' => __('H2 Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif",
				'google_font' => 'Playfair+Display:400,700,400italic,700italic',
				'font_color' => '#000000', 
				'font_size' => '26', 
				'line_height' => '32', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'h3':
		$options[] = array( 
			'section' => 'h3_section', 
			'id' => CMSMS_SHORTNAME . '_h3_font', 
			'title' => __('H3 Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif",
				'google_font' => 'Playfair+Display:400,700,400italic,700italic', 
				'font_color' => '#000000', 
				'font_size' => '20', 
				'line_height' => '28', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'h4':
		$options[] = array( 
			'section' => 'h4_section', 
			'id' => CMSMS_SHORTNAME . '_h4_font', 
			'title' => __('H4 Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif",
				'google_font' => 'Playfair+Display:400,700,400italic,700italic',
				'font_color' => '#000000', 
				'font_size' => '18', 
				'line_height' => '24', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'h5':
		$options[] = array( 
			'section' => 'h5_section', 
			'id' => CMSMS_SHORTNAME . '_h5_font', 
			'title' => __('H5 Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif",
				'google_font' => 'Playfair+Display:400,700,400italic,700italic', 
				'font_color' => '#000000', 
				'font_size' => '16', 
				'line_height' => '22', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'h6':
		$options[] = array( 
			'section' => 'h6_section', 
			'id' => CMSMS_SHORTNAME . '_h6_font', 
			'title' => __('H6 Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif", 
				'google_font' => 'Playfair+Display:400,700,400italic,700italic', 
				'font_color' => '#000000', 
				'font_size' => '14', 
				'line_height' => '20', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_quote_font', 
			'title' => __('Blockquote Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif", 
				'google_font' => 'Playfair+Display:400,700,400italic,700italic', 
				'font_color' => '#989898', 
				'font_size' => '15', 
				'line_height' => '24', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_dropcap_font', 
			'title' => __('Dropcap Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif",  
				'google_font' => 'Playfair+Display:400,700,400italic,700italic',  
				'font_color' => '#000000', 
				'font_size' => '36', 
				'line_height' => '40', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_code_font', 
			'title' => __('Code Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif", 
				'google_font' => '', 
				'font_color' => '#7e7e7e', 
				'font_size' => '13', 
				'line_height' => '18', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_small_font', 
			'title' => __('Small Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif", 
				'google_font' => '', 
				'font_color' => '#7e7e7e', 
				'font_size' => '12', 
				'line_height' => '20', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_input_font', 
			'title' => __('Text Fields Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif", 
				'google_font' => '', 
				'font_color' => '#7e7e7e', 
				'font_size' => '13', 
				'line_height' => '20', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_headings_color', 
			'title' => __('Bottom Headings Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_font', 
			'title' => __('Bottom Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Verdana, Geneva, 'DejaVu Sans', sans-serif", 
				'google_font' => '', 
				'font_color' => '#8d8d8d', 
				'font_size' => '12', 
				'line_height' => '18', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	}
	
	return $options;	
}

