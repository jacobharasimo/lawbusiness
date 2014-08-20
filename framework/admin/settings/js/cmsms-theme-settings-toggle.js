/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Admin Panel Toggles Scripts
 * Created by CMSMasters
 * 
 */


jQuery(document).ready(function () { 
	/* General '404' Tab Fields Load */
	if (jQuery('#lawbusiness_error_sitemap_button').is(':not(:checked)')) {
		jQuery('#lawbusiness_error_sitemap_link').closest('tr').hide();
	}
	
	/* General '404' Tab Fields Change */
	jQuery('#lawbusiness_error_sitemap_button').bind('change', function () { 
		if (jQuery(this).is(':checked')) {
			jQuery('#lawbusiness_error_sitemap_link').closest('tr').show();
		} else {
			jQuery('#lawbusiness_error_sitemap_link').closest('tr').hide();
		}
	} );
	
	
	
	/* General 'SEO' Tab Fields Load */
	if (jQuery('#lawbusiness_seo').is(':not(:checked)')) {
		jQuery('#lawbusiness_seo_title').closest('tr').hide();
		jQuery('#lawbusiness_seo_description').closest('tr').hide();
		jQuery('#lawbusiness_seo_keywords').closest('tr').hide();
	}
	
	/* General 'SEO' Tab Fields Change */
	jQuery('#lawbusiness_seo').bind('change', function () { 
		if (jQuery(this).is(':checked')) {
			jQuery('#lawbusiness_seo_title').closest('tr').show();
			jQuery('#lawbusiness_seo_description').closest('tr').show();
			jQuery('#lawbusiness_seo_keywords').closest('tr').show();
		} else {
			jQuery('#lawbusiness_seo_title').closest('tr').hide();
			jQuery('#lawbusiness_seo_description').closest('tr').hide();
			jQuery('#lawbusiness_seo_keywords').closest('tr').hide();
		}
	} );
	
	/* Appearance 'Background' Boxed Version Load */
	if (jQuery('#lawbusiness_boxed').is(':not(:checked)')) {
		jQuery('label[for="lawbusiness_bg_col"]').closest('tr').hide();
		jQuery('label[for="lawbusiness_bg_img_enable"]').closest('tr').hide();
		jQuery('label[for="lawbusiness_bg_img"]').closest('tr').hide();
		jQuery('label[for="lawbusiness_bg_rep"]').closest('tr').hide();
		jQuery('label[for="lawbusiness_bg_pos"]').closest('tr').hide();
		jQuery('label[for="lawbusiness_bg_att"]').closest('tr').hide();
	}
	
	
	
	/* Appearance 'Background' Boxed Version Change */
	jQuery('#lawbusiness_boxed').bind('change', function () { 
		if (jQuery('#lawbusiness_boxed').is(':checked')) {
			jQuery('label[for="lawbusiness_bg_col"]').closest('tr').show();
			jQuery('label[for="lawbusiness_bg_img_enable"]').closest('tr').show();
			jQuery('label[for="lawbusiness_bg_img"]').closest('tr').show();
			jQuery('label[for="lawbusiness_bg_rep"]').closest('tr').show();
			jQuery('label[for="lawbusiness_bg_pos"]').closest('tr').show();
			jQuery('label[for="lawbusiness_bg_att"]').closest('tr').show();
		} else {
			jQuery('label[for="lawbusiness_bg_col"]').closest('tr').hide();
			jQuery('label[for="lawbusiness_bg_img_enable"]').closest('tr').hide();
			jQuery('label[for="lawbusiness_bg_img"]').closest('tr').hide();
			jQuery('label[for="lawbusiness_bg_rep"]').closest('tr').hide();
			jQuery('label[for="lawbusiness_bg_pos"]').closest('tr').hide();
			jQuery('label[for="lawbusiness_bg_att"]').closest('tr').hide();
		}
	} );
	
	/* Appearance 'Background' Tab Fields Load */
	if (jQuery('#lawbusiness_bg_img_enable').is(':not(:checked)')) {
		jQuery('#lawbusiness_bg_img').closest('tr').hide();
		jQuery('label[for="lawbusiness_bg_rep"]').closest('tr').hide();
		jQuery('label[for="lawbusiness_bg_pos"]').closest('tr').hide();
		jQuery('label[for="lawbusiness_bg_pos_v"]').closest('tr').hide();
		jQuery('label[for="lawbusiness_bg_pos_h"]').closest('tr').hide();
		jQuery('label[for="lawbusiness_bg_att"]').closest('tr').hide();
	}
	
	/* Appearance 'Background' Tab Fields Change */
	jQuery('#lawbusiness_bg_img_enable').bind('change', function () { 
		if (jQuery('#lawbusiness_bg_img_enable').is(':checked')) {
			jQuery('#lawbusiness_bg_img').closest('tr').show();
			jQuery('label[for="lawbusiness_bg_rep"]').closest('tr').show();
			jQuery('label[for="lawbusiness_bg_pos"]').closest('tr').show();
			jQuery('label[for="lawbusiness_bg_pos_v"]').closest('tr').show();
			jQuery('label[for="lawbusiness_bg_pos_h"]').closest('tr').show();
			jQuery('label[for="lawbusiness_bg_att"]').closest('tr').show();
		} else {
			jQuery('#lawbusiness_bg_img').closest('tr').hide();
			jQuery('label[for="lawbusiness_bg_rep"]').closest('tr').hide();
			jQuery('label[for="lawbusiness_bg_pos"]').closest('tr').hide();
			jQuery('label[for="lawbusiness_bg_pos_v"]').closest('tr').hide();
			jQuery('label[for="lawbusiness_bg_pos_h"]').closest('tr').hide();
			jQuery('label[for="lawbusiness_bg_att"]').closest('tr').hide();
		}
	} );
	
	
	
	/* Appearance 'Content' Tab Fields Load */
	if (jQuery('#lawbusiness_bottom_twitter').is(':not(:checked)')) {
		jQuery('#lawbusiness_bottom_twitter_username').closest('tr').hide();
		jQuery('#lawbusiness_bottom_twitter_number').closest('tr').hide();
	}
	
	/* Appearance 'Content' Tab Fields Change */
	jQuery('#lawbusiness_bottom_twitter').bind('change', function () { 
		if (jQuery(this).is(':checked')) {
			jQuery('#lawbusiness_bottom_twitter_username').closest('tr').show();
			jQuery('#lawbusiness_bottom_twitter_number').closest('tr').show();
		} else {
			jQuery('#lawbusiness_bottom_twitter_username').closest('tr').hide();
			jQuery('#lawbusiness_bottom_twitter_number').closest('tr').hide();
		}
	} );
	
	
	
	/* Appearance 'Footer' Tab Fields Load */
	if (jQuery('#lawbusiness_footer_custom_html').is(':not(:checked)')) {
		jQuery('#lawbusiness_footer_html').closest('tr').hide();
	}
	
	/* Appearance 'Footer' Tab Fields Change */
	jQuery('#lawbusiness_footer_custom_html').bind('change', function () { 
		if (jQuery('#lawbusiness_footer_custom_html').is(':not(:checked)')) {
			jQuery('#lawbusiness_footer_html').closest('tr').hide();
		} else {
			jQuery('#lawbusiness_footer_html').closest('tr').show();
		}
	} );
	
	
	
	
	/* Header Checkbox Field Load */
	if (jQuery('#lawbusiness_header_custom_html').is(':not(:checked)')) {
		jQuery('#lawbusiness_header_html').closest('tr').hide();
		jQuery('#lawbusiness_header_custom_html_top').closest('tr').hide();
		jQuery('#lawbusiness_header_custom_html_right').closest('tr').hide();
	}
	if (jQuery('#lawbusiness_header_social').is(':not(:checked)')) {
		jQuery('#lawbusiness_header_social_top').closest('tr').hide();
		jQuery('#lawbusiness_header_social_right').closest('tr').hide();
	}
	
	/* Header Checkbox Field Change */
	jQuery('#lawbusiness_header_custom_html').bind('change', function () { 
		if (jQuery('#lawbusiness_header_custom_html').is(':not(:checked)')) {
			jQuery('#lawbusiness_header_html').closest('tr').hide();
			jQuery('#lawbusiness_header_custom_html_top').closest('tr').hide();
			jQuery('#lawbusiness_header_custom_html_right').closest('tr').hide();
		} else {
			jQuery('#lawbusiness_header_html').closest('tr').show();
			jQuery('#lawbusiness_header_custom_html_top').closest('tr').show();
			jQuery('#lawbusiness_header_custom_html_right').closest('tr').show();
		}
	} );

	
	jQuery('#lawbusiness_header_social').bind('change', function () { 
		if (jQuery('#lawbusiness_header_social').is(':not(:checked)')) {
			jQuery('#lawbusiness_header_social_top').closest('tr').hide();
		} else {
			jQuery('#lawbusiness_header_social_top').closest('tr').show();
		}
	} );
	
	
	
	/* Archive & Search Layout Sidebar Field Load */
	if (jQuery('input[name="cmsms_options_lawbusiness_archive[lawbusiness_archive_layout]"]:checked').val() !== 'fullwidth') {
		jQuery('#lawbusiness_archive_right_left_sidebar').closest('tr').show();
	} else {
		jQuery('#lawbusiness_archive_right_left_sidebar').closest('tr').hide();
	}
	if (jQuery('input[name="cmsms_options_lawbusiness_search[lawbusiness_search_layout]"]:checked').val() !== 'fullwidth') {
		jQuery('#lawbusiness_search_right_left_sidebar').closest('tr').show();
	} else {
		jQuery('#lawbusiness_search_right_left_sidebar').closest('tr').hide();
	}
	
	/* Archive & Search Layout Change */
	jQuery('input[name="cmsms_options_lawbusiness_archive[lawbusiness_archive_layout]"]').bind('change', function () { 
		if (jQuery(this).val() === 'fullwidth') {
			jQuery('#lawbusiness_archive_right_left_sidebar').closest('tr').hide();
		} else {
			jQuery('#lawbusiness_archive_right_left_sidebar').closest('tr').show();
		}
	} );
	jQuery('input[name="cmsms_options_lawbusiness_search[lawbusiness_search_layout]"]').bind('change', function () { 
		if (jQuery(this).val() === 'fullwidth') {
			jQuery('#lawbusiness_search_right_left_sidebar').closest('tr').hide();
		} else {
			jQuery('#lawbusiness_search_right_left_sidebar').closest('tr').show();
		}
	} );
	
	
	
	/* Logo 'Text Logo' Tab Fields Load */
	if (jQuery('#lawbusiness_text_logo').is(':not(:checked)')) {
		jQuery('#lawbusiness_text_logo_title').closest('tr').hide();
		jQuery('#lawbusiness_text_logo_subtitle').closest('tr').hide();
		jQuery('#lawbusiness_text_logo_subtitle_text').closest('tr').hide();
	} else {
		if (jQuery('#lawbusiness_text_logo_subtitle').is(':not(:checked)')) {
			jQuery('#lawbusiness_text_logo_subtitle_text').closest('tr').hide();
		}
	}
	
	/* Logo 'Text Logo' Tab Fields Change */
	jQuery('#lawbusiness_text_logo').bind('change', function () { 
		if (jQuery(this).is(':checked')) {
			jQuery('#lawbusiness_text_logo_title').closest('tr').show();
			jQuery('#lawbusiness_text_logo_subtitle').closest('tr').show();
			
			if (jQuery('#lawbusiness_text_logo_subtitle').is(':checked')) {
				jQuery('#lawbusiness_text_logo_subtitle_text').closest('tr').show();
			}
		} else {
			jQuery('#lawbusiness_text_logo_title').closest('tr').hide();
			jQuery('#lawbusiness_text_logo_subtitle').closest('tr').hide();
			jQuery('#lawbusiness_text_logo_subtitle_text').closest('tr').hide();
		}
	} );
	
	/* Logo 'Text Logo' Tab 'Logo Subtitle' Field Change */
	jQuery('#lawbusiness_text_logo_subtitle').bind('change', function () { 
		if (jQuery(this).is(':checked')) {
			jQuery('#lawbusiness_text_logo_subtitle_text').closest('tr').show();
		} else {
			jQuery('#lawbusiness_text_logo_subtitle_text').closest('tr').hide();
		}
	} );
	
	
	
	/* Logo 'Favicon' Tab Fields Load */
	if (jQuery('#lawbusiness_favicon').is(':not(:checked)')) {
		jQuery('#lawbusiness_favicon_url').closest('tr').hide();
	}
	
	/* Logo 'Favicon' Tab Fields Change */
	jQuery('#lawbusiness_favicon').bind('change', function () { 
		if (jQuery(this).is(':checked')) {
			jQuery('#lawbusiness_favicon_url').closest('tr').show();
		} else {
			jQuery('#lawbusiness_favicon_url').closest('tr').hide();
		}
	} );
} );

