<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Post with Sidebar Aside Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_aside_text = get_post_meta(get_the_ID(), 'cmsms_post_aside_text', true);

?>

<!--_________________________ Start Aside Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_info">
		<span class="cmsms_post_format_img cmsms_post_animation"></span>
		<?php cmsms_post_date('post', 'post');?>
	</div>
	<footer class="entry-meta">
	<?php 
		cmsms_meta('post', 'post');
		
		echo '<div class="comment_wrap">';
		if (!post_password_required()) {
			cmsms_comments();
		}
		echo '</div>';
		
		cmsmsLike();
	?>
	</footer>
	<div class="post_content">
	<?php 
		if (!post_password_required()) {
			if ($cmsms_post_aside_text != '') {
				echo '<h5>' . $cmsms_post_aside_text . '</h5>' . "\n";
			} else {
				echo '<div class="entry-content">' . theme_excerpt(55, false) . '</div>' . "\n";
			}
		} else {
			echo '<p>' . __('There is no excerpt because this is a protected post.', 'cmsmasters') . '</p>';
		}
		
		echo '<div class="entry-content">' . "\n\t\t";
		
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
<!--_________________________ Finish Aside Article _________________________ -->

