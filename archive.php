<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Blog Archives Page Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsms_option = cmsms_get_global_options();


$cmsms_layout = $cmsms_option[CMSMS_SHORTNAME . '_archive_layout'];

if (!$cmsms_layout) { 
    $cmsms_layout = 'r_sidebar'; 
}


echo '<!--_________________________ Start Content _________________________ -->' . "\n";

if ($cmsms_layout == 'r_sidebar') {
	echo '<section id="content" role="main">' . "\n\t";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo '<section id="content" class="fr" role="main">' . "\n\t";
} else {
	echo '<section id="middle_content" role="main">' . "\n\t";
}
?>
	<div class="entry-summary">
		<section class="blog">
<?php 
if (!have_posts()) : 
	echo '<h2>' . __('No posts found', 'cmsmasters') . '</h2>';
else : 
	while (have_posts()) : the_post();
		if (get_post_type() == 'post') {
			if (get_post_format() != '') {
				get_template_part('framework/postType/blog/page/sidebar/' . get_post_format());
			} else {
				get_template_part('framework/postType/blog/page/sidebar/standard');
			}
		} else if (get_post_type() == 'service') {
			$cmsms_service_format = get_post_meta(get_the_ID(), 'cmsms_service_format', true);
			
			if (!$cmsms_service_format) { 
				$cmsms_service_format = 'slider'; 
			}
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('format-' . $cmsms_service_format); ?>>
				<?php 					
					cmsms_heading(get_the_ID(), 'service');

					if (has_post_thumbnail()) {
						cmsms_thumb(get_the_ID(), 'post-thumbnail', true, false, true, false, true, true, false);
					}
					
					the_excerpt();
					
					cmsms_more(get_the_ID(), 'service');
				?>
			</article>
			<div class="divider"></div>
<?php 
		} else if (get_post_type() == 'testimonial') {
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php
					
					echo '<div class="tl_content_wrap">' . "\n" . 
						'<div class="tl_content">' . "\n" . 
						'<blockquote>' . theme_excerpt(60, false) . '</blockquote>' .  "\n\t";
						
						echo '</div>' .  "\n" . 
					'</div>' . "\n";
					
					if ($cmsms_option[CMSMS_SHORTNAME . '_testimonial_page_author_avatar'] && has_post_thumbnail() != '') {
						echo '<figure class="tl_author_img">' . get_the_post_thumbnail(get_the_ID(), 'testim-thumb', array( 
							'alt' => cmsms_title(get_the_ID(), false), 
							'title' => cmsms_title(get_the_ID(), false) 
						));
						echo '</figure>' . "\n";
					}
					cmsms_more(get_the_ID(), 'testimonial');
					cmsms_tl_descr(get_the_ID(), 'page');
					
					echo '<div class="cl"></div>' . "\n";
				?>
				</article>
			<?php
		}
	endwhile;
	
	pagination();
endif;
?>
		</section>
	</div>
</section>
<!-- _________________________ Finish Content _________________________ -->


<?php
if ($cmsms_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<section id="sidebar" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</section>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<section id="sidebar" class="fl" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</section>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}

get_footer();

