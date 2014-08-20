<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Page Full Width Video Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_video_type = get_post_meta(get_the_ID(), 'cmsms_post_video_type', true);
$cmsms_post_video_link = get_post_meta(get_the_ID(), 'cmsms_post_video_link', true);
$cmsms_post_video_links = get_post_meta(get_the_ID(), 'cmsms_post_video_links', true);

?>

<!--_________________________ Start Video Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_content">
			<?php 
				if (!post_password_required()) {
					if ($cmsms_post_video_type == 'selfhosted' && sizeof($cmsms_post_video_links) > 0) {
						foreach ($cmsms_post_video_links as $cmsms_post_video_link_url) {
							$video_link[$cmsms_post_video_link_url[0]] = $cmsms_post_video_link_url[1];
						}
						
						if (has_post_thumbnail()) {
							$poster = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full-thumb');
							
							$video_link['poster'] = $poster[0];
						}
						
						echo '<div class="cmsms_blog_media">' . "\n" . 
							cmsmastersSingleVideoPlayer($video_link) . "\r\t\t" . 
						'</div>' . "\r\t\t";
					} elseif ($cmsms_post_video_type == 'embedded' && $cmsms_post_video_link != '') {
						echo '<div class="cmsms_blog_media">' . "\n\t\t\t" . 
							'<div class="resizable_block">' . "\n\t\t\t\t" . 
								get_video_iframe($cmsms_post_video_link) . "\r\t\t\t" . 
							'</div>' . "\r\t\t" . 
						'</div>' . "\r\t\t";
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
	<header class="entry-header with_img">
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
<!--_________________________ Finish Video Article _________________________ -->
