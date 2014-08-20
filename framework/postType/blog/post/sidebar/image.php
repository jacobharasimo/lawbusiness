<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Post with Sidebar Image Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_featured_image_show = get_post_meta(get_the_ID(), 'cmsms_post_featured_image_show', true);

$cmsms_post_image_link = get_post_meta(get_the_ID(), 'cmsms_post_image_link', true);

?>

<!--_________________________ Start Image Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_content">
	<?php 
		if (!post_password_required()) {
			if ($cmsms_post_image_link != '' && $cmsms_post_image_link != get_template_directory_uri() . '/framework/admin/inc/img/image.png') {
				echo '<div class="cmsms_blog_media">';
					cmsms_thumb(get_the_ID(), 'slider-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsms_post_image_link);
				echo '</div>';
			} else if (has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {
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

		cmsms_meta('post', 'post');
		
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
<!--_________________________ Finish Image Article _________________________ -->

