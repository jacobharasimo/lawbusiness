<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Template Name: Services
 * Created by CMSMasters
 * 
 */


get_header();


$cmsms_page_service_type = get_post_meta(get_the_ID(), 'cmsms_page_service_type', true);
$cmsms_page_items_number = get_post_meta(get_the_ID(), 'cmsms_page_items_number', true);
$cmsms_page_order = get_post_meta(get_the_ID(), 'cmsms_page_order', true);
$cmsms_page_order_type = get_post_meta(get_the_ID(), 'cmsms_page_order_type', true);
$cmsms_page_full_columns = get_post_meta(get_the_ID(), 'cmsms_page_full_columns', true);

if (!$cmsms_page_full_columns) {
    $cmsms_page_full_columns = 'four_columns';
}


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<section id="middle_content" role="main">' . "\n";


if (get_query_var('paged')) { 
	$paged = get_query_var('paged'); 
} elseif (get_query_var('page')) { 
	$paged = get_query_var('page'); 
} else { 
	$paged = 1; 
}


$temp = $wp_query;
$wp_query= null;


$wp_query = new WP_Query(array( 
	'post_type' => 'service', 
	'orderby' => $cmsms_page_order_type, 
	'order' => $cmsms_page_order, 
	'posts_per_page' => $cmsms_page_items_number, 
	'paged' => $paged, 
	's-categs' => $cmsms_page_service_type 
));


if ($wp_query->have_posts()) : 
	echo '<div class="entry-summary">' . "\n" . 
		'<section class="services ' . $cmsms_page_full_columns . '">';
	
	while ($wp_query->have_posts()) : $wp_query->the_post();
		$cmsms_service_format = get_post_meta(get_the_ID(), 'cmsms_service_format', true);
		
		if (!$cmsms_service_format) { 
			$cmsms_service_format = 'slider'; 
		}
		
		get_template_part('framework/postType/services/page/' . $cmsms_service_format);
	endwhile;
	
	echo '</section>' . "\n";
	
	pagination();
	
	echo '</div>' . "\n\t";
endif;


$wp_query = null;
$wp_query = $temp;


wp_reset_query();


echo '<div class="entry">' . "\n\t";

if (have_posts()) : the_post();
	if (has_post_thumbnail() && $cmsms_heading != 'parallax') {
		
		if (has_post_thumbnail()) {
			echo '<div class="cmsms_media">' . "\n\t";
			
			cmsms_thumb(get_the_ID(), 'full-thumb', false, 'img_' . get_the_ID(), true, false, true, true, false);
			
			echo "\r" . '</div>';
		}
		
	}
	
	the_content();
	
	wp_link_pages(array( 
		'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . __('Pages', 'cmsmasters') . ':</strong>', 
		'after' => '</div>' . "\n", 
		'link_before' => ' [ ', 
		'link_after' => ' ] ' 
	));
	
	cmsms_content_composer(get_the_ID());
	
	echo '</div>' . "\n";
endif;


if (comments_open()) {
	echo '<br />' . 
	'<div class="divider"></div>';
	
	comments_template();
}


echo '</section>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

