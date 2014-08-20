<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Services Page Full Width Video Service Format Template
 * Created by CMSMasters
 * 
 */


global $cmsms_page_full_columns;


if (!$cmsms_page_full_columns) {
    $cmsms_page_full_columns = 'four_columns';
}

if ($cmsms_page_full_columns == 'four_columns' || $cmsms_page_full_columns == 'three_columns') {
    $service_thumb = 'service-thumb';
} elseif ($cmsms_page_full_columns == 'two_columns') {
    $service_thumb = 'service-thumb-half';
} elseif ($cmsms_page_full_columns == 'one_column') {
    $service_thumb = 'service-thumb-full';
}


$cmsms_service_featured_image_show = get_post_meta(get_the_ID(), 'cmsms_service_featured_image_show', true);

$s_sort_categs = get_the_terms(0, 's-sort-categs');

if ($s_sort_categs != '') {
	$s_categs = '';
	
	foreach ($s_sort_categs as $s_sort_categ) {
		$s_categs .= ' ' . $s_sort_categ->slug;
	}
	
	$s_categs = ltrim($s_categs, ' ');
}

$cmsms_service_video_type = get_post_meta(get_the_ID(), 'cmsms_service_video_type', true);
$cmsms_service_video_link = get_post_meta(get_the_ID(), 'cmsms_service_video_link', true);
$cmsms_service_video_links = get_post_meta(get_the_ID(), 'cmsms_service_video_links', true);

?>

<!--_________________________ Start Video Service _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('format-video'); ?> data-category="<?php echo $s_categs; ?>">
	<div class="services_inner">
		<?php 
			
			if (has_post_thumbnail() && $cmsms_service_featured_image_show == 'true') {
				echo '<div class="media_box">' . 
					cmsms_thumb(get_the_ID(), $service_thumb, true, false, true, false, true, false, false) . 
				'</div>' . 
				'<div class="services_rollover">' . "\n"; 
				
				$cmsms_imagelink = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
				
				if ($cmsms_service_video_type == 'selfhosted' && sizeof($cmsms_service_video_links) > 0) {
					foreach ($cmsms_service_video_links as $cmsms_service_video_link_url) {
						$video_link[$cmsms_service_video_link_url[0]] = $cmsms_service_video_link_url[1];
					}
					echo '<a href="' . $video_link[$cmsms_service_video_link_url[0]] . '" data-group="video" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_imagelink jackbox"><span></span></a>' . "\n";
				} elseif ($cmsms_service_video_type == 'embedded' && $cmsms_service_video_link != '') {
					echo '<a href="' . $cmsms_service_video_link . '" data-group="" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_imagelink jackbox"><span></span></a>' . "\n";
				} else {
					echo '<a href="' . $cmsms_imagelink[0] . '" data-group="img_' . get_the_ID() . '" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_imagelink jackbox"><span></span></a>' . "\n";
				}
				
				echo  '<a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_link"><span></span></a>' . "\n" . 
					'<header class="entry-header">';
				
					cmsms_meta('service', 'page', get_the_ID(), 's-sort-categs');

					cmsms_heading(get_the_ID(), 'service', true, 'h1');
					
					echo '</header>' . "\n" . 
				'</div>';
				
			} elseif ($cmsms_service_video_type == 'selfhosted' && sizeof($cmsms_service_video_links) > 0) {
				foreach ($cmsms_service_video_links as $cmsms_service_video_link_url) {
					$video_link[$cmsms_service_video_link_url[0]] = $cmsms_service_video_link_url[1];
				}
				
				if (has_post_thumbnail()) {
					$poster = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $service_thumb);
					
					$video_link['poster'] = $poster[0];
				}
				
				echo '<div class="media_box">' . 
					cmsmastersSingleVideoPlayer($video_link) . 
				'</div>';
				
			} elseif ($cmsms_service_video_type == 'embedded' && $cmsms_service_video_link != '') {
				echo '<div class="media_box">' . 
					'<div class="resizable_block">' . 
						get_video_iframe($cmsms_service_video_link) . 
					'</div>' . 
				'</div>';
			}
		?>
	</div>
</article>
<!--_________________________ Finish Video Service _________________________ -->

