<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Page with Sidebar Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_featured_image_show = get_post_meta(get_the_ID(), 'cmsms_post_featured_image_show', true);

$cmsms_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_post_images', true))));

?>

<!--_________________________ Start Gallery Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_content
	<?php
		if (has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {
			echo ' with_img';
		}
	?>
	">
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
		cmsms_thumb(get_the_ID(), 'slider-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsms_post_images[0]);
	} else if (sizeof($cmsms_post_images) < 1 && has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {
		cmsms_thumb(get_the_ID(), 'slider-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
	}
}
?>
		</div>
	<div class="cmsms_info">
		<span class="cmsms_post_format_img cmsms_post_animation"></span>
		<?php cmsms_post_date('post', 'page');?>
		<?php  
			echo '<div class="comment_wrap">';
			if (!post_password_required()) {
				cmsms_comments();
			}
			echo '</div>';
			
			cmsmsLike();
		?>
	</div>
	<header class="entry-header
	<?php
		if (has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {
			echo ' with_img';
		}
	?>">
		<?php 
			cmsms_heading(get_the_ID()); 

			cmsms_meta('post', 'page');
			
			cmsms_exc_cont();
		?>
			<?php  ?>
		
	</header>
	<footer class="entry-meta">
		<?php 			
			cmsms_more(get_the_ID()); 
		?>
	</footer>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

