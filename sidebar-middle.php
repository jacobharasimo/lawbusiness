<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Sidebar Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


if (is_archive()) {
	$middle_sidebar_id = $cmsms_option[CMSMS_SHORTNAME . '_archive_middle_sidebar'];
} elseif (is_search()) {
	$middle_sidebar_id = $cmsms_option[CMSMS_SHORTNAME . '_search_middle_sidebar'];
} elseif (!is_404() && !is_home()) {
	$cmsms_page_id = get_the_ID();
	
	$middle_sidebar_id = get_post_meta($cmsms_page_id, 'cmsms_middle_sidebar_id', true);
} 


if (isset($middle_sidebar_id) && is_dynamic_sidebar($middle_sidebar_id) && is_active_sidebar($middle_sidebar_id)) {
	dynamic_sidebar($middle_sidebar_id);
} else if (is_active_sidebar('sidebar_middle')) {
	dynamic_sidebar('sidebar_middle');
} else {
	sidebarDefaultText();
}

