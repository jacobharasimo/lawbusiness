<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Page with Sidebar Aside Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_aside_text = get_post_meta(get_the_ID(), 'cmsms_post_aside_text', true);

?>

<!--_________________________ Start Aside Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_content">
	<?php 
		if (!post_password_required()) {
			if (has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {
				echo '<div class="top_line"></div><div class="bottom_line"></div>';
				
				cmsms_thumb(get_the_ID(), 'post-thumbnail', true, false, true, false, true, true, false);
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
	<header class="entry-header">
	<?php 
		if (!post_password_required()) {
			if ($cmsms_post_aside_text != '') {
				echo '<h2>' . $cmsms_post_aside_text . '</h2>' . "\n";
			} else {
				echo '<div class="entry-content">' . theme_excerpt(55, false) . '</div>' . "\n";
			}
		} else {
			echo '<p>' . __('There is no excerpt because this is a protected post.', 'cmsmasters') . '</p>';
		}

		cmsms_meta('post', 'page');
	?>
	</header>
</article>
<!--_________________________ Finish Aside Article _________________________ -->

