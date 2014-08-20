<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Services Page Full Width Slider Service Format Template
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

<!--_________________________ Start Slider Service _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('format-slider'); ?> data-category="<?php echo $s_categs; ?>">
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
		} elseif (sizeof($cmsms_service_images) > 1) { ?>
			<div class="media_box">
				<div class="shortcode_slideshow" id="slideshow_<?php the_ID(); ?>">
					<div class="shortcode_slideshow_body">
						<script type="text/javascript">
							jQuery(document).ready(function () { 
								jQuery('#slideshow_<?php the_ID(); ?> .shortcode_slideshow_slides').cmsmsResponsiveContentSlider( { 
									sliderWidth : '100%', 
									sliderHeight : 'auto', 
									animationSpeed : 500, 
									animationEffect : 'slide', 
									animationEasing : 'easeInOutExpo', 
									pauseTime : 0, 
									activeSlide : 1, 
									touchControls : true, 
									pauseOnHover : false, 
									arrowNavigation : false, 
									slidesNavigation : true 
								} ); 
							} );
						</script>
						<div class="shortcode_slideshow_container">
							<ul class="shortcode_slideshow_slides responsiveContentSlider">
							<?php 
								foreach ($cmsms_service_images as $cmsms_service_image) {
									echo '<li>' . 
										'<figure>' . 
											wp_get_attachment_image($cmsms_service_image, $service_thumb, false, array( 
												'class' => 'fullwidth', 
												'alt' => cmsms_title(get_the_ID(), false), 
												'title' => cmsms_title(get_the_ID(), false) 
											)) . 
										'</figure>' . 
									'</li>';
								}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		<?php 
		} else if (sizeof($cmsms_service_images) == 1) {
			echo '<a href="' . get_permalink() . '"></a>' . 
			'<div class="media_box">';
				cmsms_thumb(get_the_ID(), $service_thumb, false, 'img_' . get_the_ID(), true, false, true, true, $cmsms_service_images[0]);
			echo '</div>' . 
			'<div class="services_rollover">' . "\n"; 
			
			echo '<a href="' . ((isset($cmsms_imagelink)) ? $cmsms_imagelink[0] : '') . '" data-group="img_' . get_the_ID() . '" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_imagelink jackbox"><span></span></a>' . "\n" . 
			'<a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_link"><span></span></a>' . "\n" . 
				'<header class="entry-header">';
				
				cmsms_meta('service', 'page', get_the_ID(), 's-sort-categs');

				cmsms_heading(get_the_ID(), 'service', true, 'h1');
				
				echo '</header>' . "\n" . 
			'</div>';
		} else if (sizeof($cmsms_service_images) < 1 && has_post_thumbnail()) {
			echo '<a href="' . get_permalink() . '"></a>' . 
			'<div class="media_box">';
				cmsms_thumb(get_the_ID(), $service_thumb, false, 'img_' . get_the_ID(), true, false, true, true, false);
			echo '</div>' . 
			'<div class="services_rollover">' . "\n"; 
			
			echo '<a href="' . $cmsms_imagelink[0] . '" data-group="img_' . get_the_ID() . '" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_imagelink jackbox"><span></span></a>' . "\n" . 
			'<a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '" class="cmsms_link"><span></span></a>' . "\n" . 
				'<header class="entry-header">';
				
				cmsms_meta('service', 'page', get_the_ID(), 's-sort-categs');

				cmsms_heading(get_the_ID(), 'service', true, 'h1');
				
				echo '</header>' . "\n" . 
			'</div>';
		}
		
		if ((sizeof($cmsms_service_images) <= 1) || (has_post_thumbnail() && $cmsms_service_featured_image_show == 'true')) {
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
<!--_________________________ Finish Slider Service _________________________ -->

