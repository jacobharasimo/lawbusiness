<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Page with Sidebar Link Post Format Template
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
			echo '<h1 class="entry-title">' . 
				'<a href="' . $cmsms_post_link_address . '" target="_blank">' . $cmsms_post_link_text . '</a>' . 
			'</h1>' . "\n" . 
			'<span class="format_link">- ' . $cmsms_post_link_address . ' -</span>' . "\n";
		} else {
			echo '<h1 class="entry-title">' . $cmsms_post_link_text . '</h1>';
		}

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
<!--_________________________ Finish Link Article _________________________ -->

