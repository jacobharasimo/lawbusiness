<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Services Page Full Width Album Service Format Template
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
 
$cmsms_service_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_service_images', true))));

$s_sort_categs = get_the_terms(0, 's-sort-categs');

if ($s_sort_categs != '') {
	$s_categs = '';
	
	foreach ($s_sort_categs as $s_sort_categ) {
		$s_categs .= ' ' . $s_sort_categ->slug;
	}
	
	$s_categs = ltrim($s_categs, ' ');
}

?>

<!--_________________________ Start Album Service _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('format-album'); ?> data-category="<?php echo $s_categs; ?>">
	<div class="services_inner">
		<?php 
			if (has_post_thumbnail() && $cmsms_service_featured_image_show == 'true') {
				echo '<div class="media_box">' . 
					cmsms_thumb(get_the_ID(), $service_thumb, true, false, true, false, true, false, false) . 
				'</div>';
				
				$cmsms_imagelink = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
				
				echo '<div class="services_rollover">' . "\n"; 
				
				echo '<a href="' . $cmsms_imagelink[0] . '" data-group="img_' . get_the_ID() . '" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_imagelink jackbox"><span></span></a>' . "\n" . 
				'<a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_link"><span></span></a>' . "\n" . 
				'<header class="entry-header">';

				cmsms_meta('service', 'page', get_the_ID(), 's-sort-categs');
				
				cmsms_heading(get_the_ID(), 'service', true, 'h1');
				
				echo '</header>' . "\n" . 
				'</div>';
			} else if (sizeof($cmsms_service_images) > 0 && $cmsms_service_images[0] != '') {
				echo '<div class="media_box">' . 
					'<figure>' . 
						wp_get_attachment_image($cmsms_service_images[0], $service_thumb, false, array( 
							'class' => 'fullwidth', 
							'alt' => cmsms_title(get_the_ID(), false), 
							'title' => cmsms_title(get_the_ID(), false) 
						)) . 
					'</figure>' . 
				'</div>';
				
				$cmsms_imagelink = wp_get_attachment_image_src($cmsms_service_images[0], 'full');
				
				echo '<div class="services_rollover">' . "\n" . 
				'<a href="' . $cmsms_imagelink[0] . '" data-group="img_' . get_the_ID() . '" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_imagelink jackbox"><span></span></a><a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_link"><span></span></a>' . "\n" . 
				'<header class="entry-header">';
				
				cmsms_meta('service', 'page', get_the_ID(), 's-sort-categs');

				cmsms_heading(get_the_ID(), 'service', true, 'h1');
				
				echo '</header>' . "\n" . 
				'</div>';
			} else {
				echo '<div class="media_box">' . 
					'<figure class="preloader">' . 
						'<img src="' . get_template_directory_uri() . '/img/PF-XL-gallery.jpg' . '" alt="' . cmsms_title(get_the_ID(), false) . '" title="' . cmsms_title(get_the_ID(), false) . '" class="fullwidth" />' . 
					'</figure>' . 
				'</div>';
				
				echo '<div class="services_rollover">' . "\n" . 
				'<a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_link"><span></span></a>' . "\n" . 
				'<header class="entry-header">';
				
				cmsms_meta('service', 'page', get_the_ID(), 's-sort-categs');

				cmsms_heading(get_the_ID(), 'service', true, 'h1');
				
				echo '</header>' . "\n" . 
				'</div>';
			}
			
			if (sizeof($cmsms_service_images) > 1) {
				unset($cmsms_service_images[0]);
				
				echo '<div class="dn">';
				
				foreach ($cmsms_service_images as $cmsms_service_image) {
					$link_href = wp_get_attachment_image_src($cmsms_service_image, 'full');
					
					echo '<figure>' . 
						'<a href="' . $link_href[0] . '" data-group="img_' . get_the_ID() . '" title="' . cmsms_title(get_the_ID(), false) . '" class="preloader highImg jackbox">' . 
							wp_get_attachment_image($cmsms_service_image, $service_thumb, false, array( 
								'class' => 'fullwidth', 
								'alt' => cmsms_title(get_the_ID(), false), 
								'title' => cmsms_title(get_the_ID(), false) 
							)) . 
						'</a>' . 
					'</figure>';
				}
				
				echo '</div>';
			}
		?>
	</div>
</article>
<!--_________________________ Finish Album Service _________________________ -->

