<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Page with Sidebar Quote Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_quote_text = get_post_meta(get_the_ID(), 'cmsms_post_quote_text', true);
$cmsms_post_quote_author = get_post_meta(get_the_ID(), 'cmsms_post_quote_author', true);

?>

<!--_________________________ Start Quote Article _________________________ -->
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
		<?php if (!post_password_required()) { ?>
			<blockquote>
				<?php 
					if ($cmsms_post_quote_text != '') {
						echo "\t" . str_replace("\n", '<br />', $cmsms_post_quote_text) . "\n";
					} else {
						echo "\t" . theme_excerpt(55, false) . "\n";
					}
				?>
			</blockquote>
			<?php 
				if ($cmsms_post_quote_author != '') {
					echo '<div class="entry-excerpt">' . $cmsms_post_quote_author . '</div>' . "\n";
				}
			} else {
				echo '<p>' . __('There is no excerpt because this is a protected post.', 'cmsmasters') . '</p>';
			}

			cmsms_meta('post', 'page');
		?>
	</header>
</article>
<!--_________________________ Finish Quote Article _________________________ -->

