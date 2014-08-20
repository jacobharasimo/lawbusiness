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
	$top_sidebar_id = $cmsms_option[CMSMS_SHORTNAME . '_archive_top_sidebar'];
} elseif (is_search()) {
	$top_sidebar_id = $cmsms_option[CMSMS_SHORTNAME . '_search_top_sidebar'];
} elseif (!is_404() && !is_home()) {
	$cmsms_page_id = get_the_ID();

	$top_sidebar_id = get_post_meta($cmsms_page_id, 'cmsms_top_sidebar_id', true);
}


if (isset($top_sidebar_id) && is_dynamic_sidebar($top_sidebar_id) && is_active_sidebar($top_sidebar_id)) {
	dynamic_sidebar($top_sidebar_id);
} elseif (is_active_sidebar('sidebar_top')) {
	dynamic_sidebar('sidebar_top');
} else {
	sidebarDefaultText();
}

