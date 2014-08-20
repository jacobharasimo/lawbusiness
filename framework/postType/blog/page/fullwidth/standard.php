<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Page Full Width Standard Post Format Template
 * Created by CMSMasters
 * 
 */

$cmsms_post_featured_image_show = get_post_meta(get_the_ID(), 'cmsms_post_featured_image_show', true);

?>

<!--_________________________ Start Standard Article _________________________ -->
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
			if (has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {				
				cmsms_thumb(get_the_ID(), 'full-thumb', true, false, true, false, true, true, false);
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
	</header>
	<footer class="entry-meta">
	<?php 		
		cmsms_more(get_the_ID()); 
	?>
	</footer>
</article>
<!--_________________________ Finish Standard Article _________________________ -->
