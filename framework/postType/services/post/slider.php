<?php
/**
 * @package WordPress
 * @subpackage Lawbusiness
 * @since Lawbusiness 1.0
 * 
 * Services Post Full Width Slider Post Format Template
 * Created by CMSMasters
 * 
 */
 
 
$cmsms_option = cmsms_get_global_options();


$cmsms_service_featured_image_show = get_post_meta(get_the_ID(), 'cmsms_service_featured_image_show', true);

$cmsms_service_features_one_title = get_post_meta(get_the_ID(), 'cmsms_service_features_one_title', true);
$cmsms_service_features_one = get_post_meta(get_the_ID(), 'cmsms_service_features_one', true);

$cmsms_service_features_two_title = get_post_meta(get_the_ID(), 'cmsms_service_features_two_title', true);
$cmsms_service_features_two = get_post_meta(get_the_ID(), 'cmsms_service_features_two', true);

$cmsms_service_features_three_title = get_post_meta(get_the_ID(), 'cmsms_service_features_three_title', true);
$cmsms_service_features_three = get_post_meta(get_the_ID(), 'cmsms_service_features_three', true);

$cmsms_service_features_four_title = get_post_meta(get_the_ID(), 'cmsms_service_features_four_title', true);
$cmsms_service_features_four = get_post_meta(get_the_ID(), 'cmsms_service_features_four', true);

$cmsms_service_features_five_title = get_post_meta(get_the_ID(), 'cmsms_service_features_five_title', true);
$cmsms_service_features_five = get_post_meta(get_the_ID(), 'cmsms_service_features_five', true);

$cmsms_service_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_service_images', true))));

$cmsms_service_author_box = get_post_meta(get_the_ID(), 'cmsms_service_author_box', true);
$cmsms_service_more_posts = get_post_meta(get_the_ID(), 'cmsms_service_more_posts', true);
$cmsms_service_features = get_post_meta(get_the_ID(), 'cmsms_service_features', true);
$cmsms_service_sharing_box = get_post_meta(get_the_ID(), 'cmsms_service_sharing_box', true);

$service_tags = get_the_terms(get_the_ID(), 's-tags');


$s_side_bar = '';

if ((
		isset($cmsms_service_features_one[0]) && 
		isset($cmsms_service_features_one[0][0]) && 
		$cmsms_service_features_one[0][0] != ''
	) || (
		isset($cmsms_service_features_two[0]) && 
		isset($cmsms_service_features_two[0][0]) && 
		$cmsms_service_features_two[0][0] != ''
	) || (
		isset($cmsms_service_features_three[0]) && 
		isset($cmsms_service_features_three[0][0]) && 
		$cmsms_service_features_three[0][0] != ''
	) || (
		isset($cmsms_service_features_four[0]) && 
		isset($cmsms_service_features_four[0][0]) && 
		$cmsms_service_features_four[0][0] != ''
	) || (
		isset($cmsms_service_features_five[0]) && 
		isset($cmsms_service_features_five[0][0]) && 
		$cmsms_service_features_five[0][0] != ''
	)
) {
	$s_side_bar = 'true';
}

if (
	$cmsms_option[CMSMS_SHORTNAME . '_services_service_date'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_services_service_cat'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_services_service_author'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_services_service_comment'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_services_service_tag']
) {
	$s_side_bar = 'true';
}

$s_details = '';

if (
	$cmsms_option[CMSMS_SHORTNAME . '_services_service_date'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_services_service_cat'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_services_service_author'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_services_service_comment'] || 
	$cmsms_option[CMSMS_SHORTNAME . '_services_service_tag']
) {
	$s_details = 'true';
}



?>

<!--_________________________ Start Slider Service _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('format-slider'); ?>>
<?php
echo '<div class="service_content' . (($s_side_bar != '') ? ' with_s_side_bar' : '') . '">' . "\n" .
	'<div class="resize">';
		if (sizeof($cmsms_service_images) > 1) { ?>
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
									wp_get_attachment_image($cmsms_service_image, 'full-slider-thumb', false, array( 
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
		<?php 
		} else if (sizeof($cmsms_service_images) == 1 && $cmsms_service_images[0] != '') {
			cmsms_thumb(get_the_ID(), 'full-slider-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsms_service_images[0]);
		} else if (sizeof($cmsms_service_images) < 1 && has_post_thumbnail() && $cmsms_service_featured_image_show == 'true') {
			cmsms_thumb(get_the_ID(), 'full-slider-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
		}
		
	echo '</div>' . "\n";
		
	// cmsms_heading_nolink(get_the_ID(), 'service', true, 'h3');
	
	echo '<div class="entry-content">' . "\n";

		the_content();
	
		wp_link_pages(array( 
			'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . __('Pages', 'cmsmasters') . ':</strong>', 
			'after' => '</div>' . "\n", 
			'link_before' => ' [ ', 
			'link_after' => ' ] ' 
		));
	
		cmsms_content_composer(get_the_ID());
	
	echo "\t\t" . '</div>' . "\n" . 
'</div>';

if ($s_side_bar != '') {
	echo '<footer class="entry-meta service_sidebar">';
	
		if (isset($cmsms_service_features_one[0]) && isset($cmsms_service_features_one[0][0]) && $cmsms_service_features_one[0][0] != '') {
			echo '<div class="cmsms_features">';
				if ($cmsms_service_features_one_title && $cmsms_service_features_one_title != '') {
					echo '<h3>' . 
						$cmsms_service_features_one_title . 
					'</h3>';
				}

				foreach ($cmsms_service_features_one as $cmsms_service_feature_one) {
					if ($cmsms_service_feature_one[0] != '' && $cmsms_service_feature_one[1] != '') {
						$cmsms_service_feature_lists_one = explode("\n", $cmsms_service_feature_one[1]);
						 
						echo '<div class="cmsms_features_item">' . 
							'<span class="cmsms_features_item_title">' . 
								$cmsms_service_feature_one[0] . 
							'</span>' . 
							'<span class="cmsms_features_item_desc">';
								foreach ($cmsms_service_feature_lists_one as $cmsms_service_feature_list_one) {
									echo '' . trim($cmsms_service_feature_list_one) . '';
								}
							echo '</span>' . 
						'</div>' . "\n\t\t\t";
					}
				}
			echo '</div>';
		}
		
		if (isset($cmsms_service_features_two[0]) && isset($cmsms_service_features_two[0][0]) && $cmsms_service_features_two[0][0] != '') {
			echo '<div class="cmsms_features">';
				if ($cmsms_service_features_two_title && $cmsms_service_features_two_title != '') {
					echo '<h3>' . 
						$cmsms_service_features_two_title . 
					'</h3>';
				}
				
				foreach ($cmsms_service_features_two as $cmsms_service_feature_two) {
					if ($cmsms_service_feature_two[0] != '' && $cmsms_service_feature_two[1] != '') {
						$cmsms_service_feature_lists_two = explode("\n", $cmsms_service_feature_two[1]);
						 
						echo '<div class="cmsms_features_item">' . 
							'<span class="cmsms_features_item_title">' . 
								$cmsms_service_feature_two[0] . 
							'</span>' . 
							'<span class="cmsms_features_item_desc">';
								foreach ($cmsms_service_feature_lists_two as $cmsms_service_feature_list_two) {
									echo '' . trim($cmsms_service_feature_list_two) . '';
								}
							echo '</span>' . 
						'</div>' . "\n\t\t\t";
					}
				}
			echo '</div>';
		}
		
		if (isset($cmsms_service_features_three[0]) && isset($cmsms_service_features_three[0][0]) && $cmsms_service_features_three[0][0] != '') {
			echo '<div class="cmsms_features">';
				if ($cmsms_service_features_three_title && $cmsms_service_features_three_title != '') {
					echo '<h3>' . 
						$cmsms_service_features_three_title . 
					'</h3>';
				}
				
				foreach ($cmsms_service_features_three as $cmsms_service_feature_three) {
					if ($cmsms_service_feature_three[0] != '' && $cmsms_service_feature_three[1] != '') {
						$cmsms_service_feature_lists_three = explode("\n", $cmsms_service_feature_three[1]);
						 
						echo '<div class="cmsms_features_item">' . 
							'<span class="cmsms_features_item_title">' . 
								$cmsms_service_feature_three[0] . 
							'</span>' . 
							'<span class="cmsms_features_item_desc">';
								foreach ($cmsms_service_feature_lists_three as $cmsms_service_feature_list_three) {
									echo '' . trim($cmsms_service_feature_list_three) . '';
								}
							echo '</span>' . 
						'</div>' . "\n\t\t\t";
					}
				}
			echo '</div>';
		}
		
		if (isset($cmsms_service_features_four[0]) && isset($cmsms_service_features_four[0][0]) && $cmsms_service_features_four[0][0] != '') {
			echo '<div class="cmsms_features">';
				if ($cmsms_service_features_four_title && $cmsms_service_features_four_title != '') {
					echo '<h3>' . 
						$cmsms_service_features_four_title . 
					'</h3>';
				}
				
				foreach ($cmsms_service_features_four as $cmsms_service_feature_four) {
					if ($cmsms_service_feature_four[0] != '' && $cmsms_service_feature_four[1] != '') {
						$cmsms_service_feature_lists_four = explode("\n", $cmsms_service_feature_four[1]);
						 
						echo '<div class="cmsms_features_item">' . 
							'<span class="cmsms_features_item_title">' . 
								$cmsms_service_feature_four[0] . 
							'</span>' . 
							'<span class="cmsms_features_item_desc">';
								foreach ($cmsms_service_feature_lists_four as $cmsms_service_feature_list_four) {
									echo '' . trim($cmsms_service_feature_list_four) . '';
								}
							echo '</span>' . 
						'</div>' . "\n\t\t\t";
					}
				}
			echo '</div>';
		}
		
		if (isset($cmsms_service_features_five[0]) && isset($cmsms_service_features_five[0][0]) && $cmsms_service_features_five[0][0] != '') {
			echo '<div class="cmsms_features">';
				if ($cmsms_service_features_five_title && $cmsms_service_features_five_title != '') {
					echo '<h3>' . 
						$cmsms_service_features_five_title . 
					'</h3>';
				}
				
				foreach ($cmsms_service_features_five as $cmsms_service_feature_five) {
					if ($cmsms_service_feature_five[0] != '' && $cmsms_service_feature_five[1] != '') {
						$cmsms_service_feature_lists_five = explode("\n", $cmsms_service_feature_five[1]);
						 
						echo '<div class="cmsms_features_item">' . 
							'<span class="cmsms_features_item_title">' . 
								$cmsms_service_feature_five[0] . 
							'</span>' . 
							'<span class="cmsms_features_item_desc">';
								foreach ($cmsms_service_feature_lists_five as $cmsms_service_feature_list_five) {
									echo '' . trim($cmsms_service_feature_list_five) . '';
								}
							echo '</span>' . 
						'</div>' . "\n\t\t\t";
					}
				}
			echo '</div>';
		}
		
		
		if ($s_details != '') {
			echo '<div class="cmsms_features">' . "\n\t\t\t" . 
				'<h3>' . __('Service details', 'cmsmasters') . '</h3>';
						
				cmsms_s_cat(get_the_ID(), 's-sort-categs', 'post');
		
				cmsms_s_date('post');
				
				cmsms_s_author('post');
				
				cmsms_s_comments('post');
				
				cmsms_s_tag(get_the_ID(), 's-tags', 'post');
				
				cmsms_link(get_the_ID(), 'service');
							
			echo '</div>';
		}
	echo '</footer>';
}
?>
	<div class="cl"></div>
</article>
<!--_________________________ Finish Slider Service _________________________ -->

