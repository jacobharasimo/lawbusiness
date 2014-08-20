<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Template Name: Services Timeline
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


get_header();


$cmsms_layout = get_post_meta(get_the_ID(), 'cmsms_layout', true);
$cmsms_page_items_number = get_post_meta(get_the_ID(), 'cmsms_page_items_number', true);

if (!$cmsms_layout) { 
    $cmsms_layout = 'fullwidth';
}


echo '<!--_________________________ Start Content _________________________ -->' . "\n";

if ($cmsms_layout == 'r_sidebar') {
	echo '<section id="content" role="main">' . "\n";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo '<section id="content" class="fr" role="main">' . "\n";
} else {
	echo '<section id="middle_content" role="main">' . "\n";
}

echo '<div class="entry">' . "\n";

if (have_posts()) : the_post();
	if (has_post_thumbnail() && $cmsms_heading != 'parallax') {
		if ($cmsms_layout == 'r_sidebar' || $cmsms_layout == 'l_sidebar') {
			echo '<div class="cmsms_media">' . "\n\t";
			
			cmsms_thumb(get_the_ID(), 'post-thumbnail', false, 'img_' . get_the_ID(), true, false, true, true, false);
			
			echo "\r" . '</div>';
		} else {
			echo '<div class="cmsms_media">' . "\n\t";
			
			cmsms_thumb(get_the_ID(), 'full-thumb', false, 'img_' . get_the_ID(), true, false, true, true, false);
			
			echo "\r" . '</div>';
		}
	}
	
	echo '<div class="entry-content">' . "\n";
	
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

echo '</div>' . "\n";

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
	'orderby' => 'date', 
	'order' => 'DESC', 
	'paged' => $paged, 
	'posts_per_page' => $cmsms_page_items_number
));


$timeline_array = array();


if ($wp_query->have_posts()) :
	while ($wp_query->have_posts()) : $wp_query->the_post();
		if (!array_key_exists(get_the_date('Y'), $timeline_array)) {
			$timeline_array[get_the_date('Y')] = array( 
				array( 
					get_permalink(get_the_ID()), 
					cmsms_title(get_the_ID(), false),
					get_the_time('j-F-y G:i:s'),
					theme_excerpt(25, false),
					get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 
						'alt' => cmsms_title(get_the_ID(), false), 
						'title' => cmsms_title(get_the_ID(), false), 
						'style' => 'width:80px; height:80px;' 
					)),
					get_post_meta(get_the_ID(), 'cmsms_service_format', true)
				) 
			);
		} else {
			$timeline_array[get_the_date('Y')][] = array( 
				get_permalink(get_the_ID()), 
				cmsms_title(get_the_ID(), false),
				get_the_time('j-F-y G:i:s'),
				theme_excerpt(25, false),
				get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 
					'alt' => cmsms_title(get_the_ID(), false), 
					'title' => cmsms_title(get_the_ID(), false), 
					'style' => 'width:80px; height:80px;' 
				)),
				get_post_meta(get_the_ID(), 'cmsms_service_format', true)
			);
		}
	endwhile;
	
endif;

echo '<div class="timeline_wrap">' . "\n";

foreach ($timeline_array as $key => $values) {
	echo '<h4 class="cmsms_timeline_title">' . $key . '</h4>' . "\n" . 
	'<div class="cmsms_timeline">' . "\n";
	
	foreach ($values as $value) {
		echo '<article class="format-' . $value[5] . '">' . 
			'<span class="cmsms_post_format_img cmsms_post_animation"></span>' . "\n" . 
			'<div class="cmsms_timeline_inner_wrap">' . "\n" . 
			'<div class="cmsms_timeline_inner">' . "\n";
			if ($value[4] != '') {
				echo '<figure class="alignleft">' . $value[4] . '</figure>';
			}
			echo '<h1 class="entry-title"><a href="' . $value[0] . '">' . $value[1] . '</a></h1>' . "\n" . 
			'<abbr class="published">[' . $value[2] . ']</abbr>' . "\n" . 
			'<div class="timeline_content">' . $value[3] . '</div>' . "\n" . 
		'<div class="cl"></div>' . "\n" . 
		'</div>' . "\n" . 
		'</div>' . "\n" . 
		'</article>' . "\n";
	}
	
	echo '</div>';
}

pagination();

$wp_query = null;
$wp_query = $temp;


wp_reset_query();

echo '</div>' . "\n" . 
'</section>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsms_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<section id="sidebar" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</section>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<section id="sidebar" class="fl" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</section>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

