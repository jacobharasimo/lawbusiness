<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


get_header();

?>
<!-- _________________________ Start Content _________________________ -->
<section id="middle_content" role="main">
	<div class="entry">
		<div class="error">
		<?php 
			echo '<div class="error_inner" style="background-color:' . $cmsms_option[CMSMS_SHORTNAME . '_error_bg_color'] . ';' . (($cmsms_option[CMSMS_SHORTNAME . '_error_bg_image'] != '' && $cmsms_option[CMSMS_SHORTNAME . '_error_bg_image'] != get_template_directory_uri() . '/framework/admin/inc/img/image.png') ? ' background-image:url(' . ((is_numeric($cmsms_option[CMSMS_SHORTNAME . '_error_bg_image'])) ? array_shift(wp_get_attachment_image_src($cmsms_option[CMSMS_SHORTNAME . '_error_bg_image'], 'full')) : $cmsms_option[CMSMS_SHORTNAME . '_error_bg_image']) . ');' : '') . '">' . "\n" . 
				'<h1>404</h1>' . 
				'</div>';
			
			echo '<h2>' . __("We're sorry, but the page you were looking for doesn't exist.", 'cmsmasters') . '</h2>' . "\n";
			if ($cmsms_option[CMSMS_SHORTNAME . '_error_search']) { 
				get_search_form(); 
			}
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_error_sitemap_button'] && $cmsms_option[CMSMS_SHORTNAME . '_error_sitemap_link'] != '') {
				echo '<a href="' . $cmsms_option[CMSMS_SHORTNAME . '_error_sitemap_link'] . '" class="button">' . __('Sitemap', 'cmsmasters') . '</a>';
			}
		?>
		</div>
	</div>
</section>
<!-- _________________________ Finish Content _________________________ -->


<?php 
get_footer();

