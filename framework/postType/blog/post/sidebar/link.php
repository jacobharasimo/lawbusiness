<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Post with Sidebar Link Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_link_text = get_post_meta(get_the_ID(), 'cmsms_post_link_text', true);
$cmsms_post_link_address = get_post_meta(get_the_ID(), 'cmsms_post_link_address', true);

if ($cmsms_post_link_text == '') {
	$cmsms_post_link_text = __('Enter link text', 'cmsmasters');
}

if ($cmsms_post_link_address == '') {
	$cmsms_post_link_address = '#';
}

?>

<!--_________________________ Start Link Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_content">
	<?php 
		if (!post_password_required()) {
			echo '<h1 class="entry-title">' . 
				'<a href="' . $cmsms_post_link_address . '" target="_blank">' . $cmsms_post_link_text . '</a>' . 
			'</h1>' . "\n";
		} else {
			echo '<h1 class="entry-title">' . $cmsms_post_link_text . '</h1>';
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

		echo '<span class="format_link">- ' . $cmsms_post_link_address . ' -</span>' . "\n";
		
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
<!--_________________________ Finish Link Article _________________________ -->

