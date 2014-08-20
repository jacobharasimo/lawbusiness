<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Post with Sidebar Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_featured_image_show = get_post_meta(get_the_ID(), 'cmsms_post_featured_image_show', true);

$cmsms_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_post_images', true))));

?>

<!--_________________________ Start Gallery Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_content">
	<?php 
		if (!post_password_required()) {
			if (sizeof($cmsms_post_images) > 1) {
		?>
		<script type="text/javascript">
			jQuery(document).ready(function () { 
				jQuery('#cmsms_hover_slider_<?php the_ID(); ?>').cmsmsHoverSlider( { 
					sliderBlock : '#cmsms_hover_slider_<?php the_ID(); ?>', 
					sliderItems : '.cmsms_hover_slider_items', 
					thumbWidth : '139', 
					thumbHeight : '77'
				} );
			} );
		</script>
		<div class="cmsms_hover_slider" id="cmsms_hover_slider_<?php the_ID(); ?>">
			<ul class="cmsms_hover_slider_items">
				<?php 
					foreach ($cmsms_post_images as $cmsms_post_image) {
						echo "\t\t\t\t\t\t" . 
						'<li>' . "\n\t\t\t\t\t\t\t" . 
							'<figure class="cmsms_hover_slider_full_img">' . "\n\t\t\t\t\t\t\t\t" . 
								wp_get_attachment_image($cmsms_post_image, 'slider-thumb', false, array( 
									'class' => '', 
									'alt' => cmsms_title(get_the_ID(), false), 
									'title' => cmsms_title(get_the_ID(), false) 
								)) . "\r\t\t\t\t\t\t\t" . 
							'</figure>' . "\r\t\t\t\t\t\t" . 
						'</li>' . "\r";
					}
				?>
			</ul>
		</div>
	<?php 
			} else if (sizeof($cmsms_post_images) == 1) {
				echo '<div class="cmsms_blog_media">';
					cmsms_thumb(get_the_ID(), 'slider-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsms_post_images[0]);
				echo '</div>';
			} else if (sizeof($cmsms_post_images) < 1 && has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {
				echo '<div class="cmsms_blog_media">';
					cmsms_thumb(get_the_ID(), 'slider-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
				echo '</div>';
			}
		}
		

		echo '<div class="cmsms_info">' . "\n\t\t";
			echo '<span class="cmsms_post_format_img cmsms_post_animation"></span>';
			cmsms_post_date('post', 'post');
 
			echo '<div class="comment_wrap">';
			if (!post_password_required()) {
				cmsms_comments();
			}
			echo '</div>';
			
			cmsmsLike(); 

		echo '</div>';
		
		echo '<div class="entry-header">' . "\n\t\t";
		
		cmsms_heading_nolink(get_the_ID(), 'post', true); 
		
		the_content();
		
		echo "\n";
		
		wp_link_pages(array( 
			'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . __('Pages', 'cmsmasters') . ':</strong>', 
			'after' => '</div>' . "\n", 
			'link_before' => ' [ ', 
			'link_after' => ' ] ' 
		));
		
		cmsms_content_composer(get_the_ID());
		
		echo "\n\t\t" . '</div>' . "\n";
	?>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

