<?php 
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Column Shortcode Popup
 * Created by CMSMasters
 * 
 */


define('DOING_AJAX', true);
define('WP_ADMIN', true);


require_once('../../../../../../../../wp-load.php');
require_once('../../../../../../../../wp-admin/includes/admin.php');


do_action('admin_init');


if (!is_user_logged_in()) {
	die(__('You must be logged in to access this page.', 'cmsmasters'));
}


if (isset($_POST['index']) && $_POST['index'] != '') {
	$index = $_POST['index'];
} else {
	$index = ''; 
}


if (isset($_POST['animation']) && $_POST['animation'] != '') {
	$animation = $_POST['animation'];
} else {
	$animation = ''; 
}

?>
<script type="text/javascript">
	jQuery(document).ready(function () { 
		jQuery(window).resize(function () { 
			if (jQuery('#TB_window').height() - 44 > jQuery('.popup_content').height() + 20) {
				jQuery('#TB_ajaxContent').height(jQuery('#TB_window').height() - 44);
			} else {
				jQuery('#TB_ajaxContent').height(jQuery('.popup_content').height() + 20);
			}
		} );
	} );
	
	
	function insertShortcode() { 
		var shortcode_tag = '', 
			popup_tr_value = jQuery('#TB_ajaxContent .popup_tr_value'), 
			col_animation = jQuery('#col_animation').val();
		
		
		for (var i = 0, ilength = popup_tr_value.length; i < ilength; i += 1) {
			popup_tr_value[i].style.removeProperty('border');
			
			
			if (popup_tr_value.eq(i).attr('aria-required') === 'true' && popup_tr_value.eq(i).parent().parent().css('display') !== 'none') {
				if (popup_tr_value.eq(i).val() === '' || popup_tr_value.eq(i).val() === ' ') {
					alert('<?php _e('Enter required fields!', 'cmsmasters'); ?>');
					
					
					popup_tr_value.eq(i).css('border', '1px solid #ff0000').focus();
					
					
					return false;
				}
			}
		}
		
		
		shortcode_tag += col_animation;
		
		
		popupUpdateContent(shortcode_tag);
		
		
		tb_remove();
		
		
		return false;
	}
	
	
	function popupUpdateContent(shortcode_tag) { 
		var newValDivs = jQuery('#cmsms_composer_content > div'), 
			newPostContent = '';
		
		
		newValDivs.eq(<?php echo $index; ?>).find('.cmsms_composer_column_elements').attr( { 
			'data-animation': shortcode_tag 
		} );
		
		
		for (var i = 0, ilength = newValDivs.length; i < ilength; i += 1) {
			var cClass = newValDivs.eq(i).attr('class'), 
				cFolder = (newValDivs.eq(i).find('> .cmsms_composer_column_elements').attr('data-folder')) ? newValDivs.eq(i).find('> .cmsms_composer_column_elements').attr('data-folder') : 'column', 
				cType = (newValDivs.eq(i).find('> .cmsms_composer_column_elements').attr('data-type')) ? newValDivs.eq(i).find('> .cmsms_composer_column_elements').attr('data-type') : '', 
				cAnimation = (newValDivs.eq(i).find('> .cmsms_composer_column_elements').attr('data-animation')) ? newValDivs.eq(i).find('> .cmsms_composer_column_elements').attr('data-animation') : '', 
				cElements = newValDivs.eq(i).find('> .cmsms_composer_column_elements > div'), 
				newPostElementContent = '';
			
			
			if (cFolder !== 'divider' && cElements.length > 0) {
				for (var j = 0, jlength = cElements.length; j < jlength; j += 1) {
					var ceFolder = (cElements.eq(j).find('> .cmsms_composer_column_content').attr('data-folder')) ? cElements.eq(j).find('> .cmsms_composer_column_content').attr('data-folder') : 'column', 
						ceType = (cElements.eq(j).find('> .cmsms_composer_column_content').attr('data-type')) ? cElements.eq(j).find('> .cmsms_composer_column_content').attr('data-type') : '', 
						ceContent = cElements.eq(j).find('> .cmsms_composer_column_content').html();
					
					
					newPostElementContent += '<div data-folder="' + ceFolder + '" data-type="' + ceType + '">' + ceContent + '</div>';
				}
			}
			
			
			if (cFolder !== 'divider') {
				newPostContent += '<div class="' + cClass + '" data-folder="' + cFolder + '" data-type="' + cType + '" data-animation="' + cAnimation + '">' + newPostElementContent + '</div>';
			} else {
				newPostContent += '<div class="' + cClass + '" data-folder="' + cFolder + '" data-type="' + cType + '" data-animation="">' + '<div class="' + ((cType === 'divider') ? 'divider' : 'cl') + '"></div>' + '</div>';
			}
		}
		
		
		jQuery('#cmsms_content_composer_text').text(encodeURIComponent(newPostContent));
	}
	
	
	function closePopup() { 
		tb_remove();
		
		
		return false;
	}
</script>
<div class="popup_content">
	<h3 class="media-title"><?php echo __('Set', 'cmsmasters') . ' ' . __('Column', 'cmsmasters') . ' ' . __('Shortcode Options', 'cmsmasters'); ?></h3>
	<div id="media-items" class="media-upload-form">
		<div class="media-item">
			<table class="describe">
				<tbody>
					<tr>
						<th class="label" valign="top" style="width:130px; padding-top:15px;" scope="row">
							<span class="alignleft">
								<label for="col_animation"><?php _e('Animation', 'cmsmasters'); ?></label>
							</span>
						</th>
						<td class="field" style="padding-top:10px;">
							<select name="col_animation" id="col_animation" class="popup_tr_value">
								<option value=""<?php echo ($animation == '') ? ' selected="selected"' : ''; ?>><?php _e('No Animation', 'cmsmasters'); ?>&nbsp;</option>
								<option value="fadein"<?php echo ($animation == 'fadein') ? ' selected="selected"' : ''; ?>><?php _e('Fade In', 'cmsmasters'); ?>&nbsp;</option>
								<option value="to_top"<?php echo ($animation == 'to_top') ? ' selected="selected"' : ''; ?>><?php _e('From bottom to top', 'cmsmasters'); ?>&nbsp;</option>
								<option value="to_right"<?php echo ($animation == 'to_right') ? ' selected="selected"' : ''; ?>><?php _e('From left to right', 'cmsmasters'); ?>&nbsp;</option>
								<option value="to_bottom"<?php echo ($animation == 'to_bottom') ? ' selected="selected"' : ''; ?>><?php _e('From top to bottom', 'cmsmasters'); ?>&nbsp;</option>
								<option value="to_left"<?php echo ($animation == 'to_left') ? ' selected="selected"' : ''; ?>><?php _e('From right to left', 'cmsmasters'); ?>&nbsp;</option>
							</select>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="cmsms_shcs_buttons">
		<div class="fl">
			<input type="button" id="cancel" class="button" name="cancel" value="<?php _e('Cancel', 'cmsmasters'); ?>" onclick="closePopup();" />
		</div>
		<div class="fr">
			<input type="submit" id="insert" class="button-primary" name="insert" value="<?php _e('Update Shortcode', 'cmsmasters'); ?>" onclick="insertShortcode();" />
		</div>
	</div>
</div>

