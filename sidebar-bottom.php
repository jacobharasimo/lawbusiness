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


if (is_archive()) {
	$bottom_sidebar_id = $cmsms_option[CMSMS_SHORTNAME . '_archive_bottom_sidebar'];
} elseif (is_search()) {
	$bottom_sidebar_id = $cmsms_option[CMSMS_SHORTNAME . '_search_bottom_sidebar'];
} elseif (!is_404() && !is_home()) {
	$cmsms_page_id = get_the_ID();
	
	$bottom_sidebar_id = get_post_meta($cmsms_page_id, 'cmsms_bottom_sidebar_id', true);
}


if (isset($bottom_sidebar_id) && is_dynamic_sidebar($bottom_sidebar_id) && is_active_sidebar($bottom_sidebar_id)) {
	dynamic_sidebar($bottom_sidebar_id);
} elseif (is_active_sidebar('sidebar_bottom')) {
	dynamic_sidebar('sidebar_bottom');
} else {
	sidebarDefaultText();
}

