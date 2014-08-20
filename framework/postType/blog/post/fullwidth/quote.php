<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Post Full Width Quote Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_quote_text = get_post_meta(get_the_ID(), 'cmsms_post_quote_text', true);
$cmsms_post_quote_author = get_post_meta(get_the_ID(), 'cmsms_post_quote_author', true);

?>

<!--_________________________ Start Quote Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_content">
	<?php if (!post_password_required()) { ?>
		<h5>
			<?php 
				if ($cmsms_post_quote_text != '') {
					echo "\t" . str_replace("\n", '<br />', $cmsms_post_quote_text) . "\n";
				} else {
					echo "\t" . theme_excerpt(55, false) . "\n";
				}
			?>
		</h5>
		<?php 
			if ($cmsms_post_quote_author != '') {
				echo '<div class="entry-excerpt">' . $cmsms_post_quote_author . '</div>' . "\n";
			}
		} else {
			echo '<p>' . __('There is no excerpt because this is a protected post.', 'cmsmasters') . '</p>';
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
<!--_________________________ Finish Quote Article _________________________ -->

