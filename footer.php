<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Website Footer Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


if (is_archive()) {
	$cmsms_middle_sidebar = $cmsms_option[CMSMS_SHORTNAME . '_archive_middle_sidebar'];
	$cmsms_bottom_sidebar = $cmsms_option[CMSMS_SHORTNAME . '_archive_bottom_sidebar'];
} else if (is_search()) {
	$cmsms_middle_sidebar = $cmsms_option[CMSMS_SHORTNAME . '_search_middle_sidebar'];
	$cmsms_bottom_sidebar = $cmsms_option[CMSMS_SHORTNAME . '_search_bottom_sidebar'];
} else if (!is_404() && !is_home()) {
	$cmsms_page_id = get_the_ID();
	

	$cmsms_middle_sidebar = get_post_meta($cmsms_page_id, 'cmsms_middle_sidebar', true);
	$cmsms_bottom_sidebar = get_post_meta($cmsms_page_id, 'cmsms_bottom_sidebar', true);
}


echo '<div class="cl"></div>' . "\n" . 
'</div>' . "\n";


if (
	!is_home() && 
	!is_404() && 
	$cmsms_middle_sidebar != 'false' && 
	$cmsms_middle_sidebar != ''
) {
	echo '<!-- _________________________ Start Middle Sidebar _________________________ -->' . "\n" . 
	'<section class="middle_sidebar">' . "\n" . 
	'<div class="middle_sidebar_inner">' . 
	'<div class="middle_sidebar_in_inner">';
	
	get_sidebar('middle');
	
	echo "\n" . 
	'</div>' . "\n" .
	'</div>' . "\n" .
	'<div class="cl"></div>' . "\r" . 
	'</section>' . "\n" . 
	'<!-- _________________________ Finish Middle Sidebar _________________________ -->' . "\n";
}

echo '</section>' . "\n" . 
'<!-- _________________________ Finish Middle _________________________ -->' . "\n\n\n";

if (
	isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_twitter']) && 
	$cmsms_option[CMSMS_SHORTNAME . '_bottom_twitter'] != '' &&
	$cmsms_option[CMSMS_SHORTNAME . '_bottom_twitter_username'] != '' && 
	$cmsms_option[CMSMS_SHORTNAME . '_bottom_twitter_number'] != '' 
) { 
?>
	<div id="cmsms_latest_bottom_tweets">
		<div class="cmsms_latest_bottom_tweets_inner">
			<span class="tweets_icon"></span>
			<ul class="jta-tweet-list responsiveContentSlider">
			<?php 
				$tweets = cmsms_get_tweets($cmsms_option[CMSMS_SHORTNAME . '_bottom_twitter_username'], $cmsms_option[CMSMS_SHORTNAME . '_bottom_twitter_number']);
				
				
				foreach ($tweets as $t) {
					echo '<li class="jta-tweet-list-item">' . $t['text'] . '</li>';
				}
			?>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function () { 
			jQuery('#cmsms_latest_bottom_tweets .jta-tweet-list').cmsmsResponsiveContentSlider( {
				sliderWidth : '100%',
				sliderHeight : 'auto',
				animationSpeed : 500,
				animationEffect : 'fade',
				animationEasing : 'linear',
				pauseTime : 7000,
				activeSlide : 1, 
				touchControls : true,
				pauseOnHover : false, 
				arrowNavigation : true, 
				slidesNavigation : false
			} );
		} );
	</script>
<?php 
}

if (
	!is_home() && 
	!is_404() && 
	$cmsms_bottom_sidebar != 'false' && 
	$cmsms_bottom_sidebar != ''
) {
	echo '<!-- _________________________ Start Bottom _________________________ -->' . "\n" . 
		'<section id="bottom">' . "\n" . 
		'<div class="bottom_inner">' . "\n" . 
		'<div class="bottom_ininner">' . "\n";
	
	get_sidebar('bottom');
	
	echo '<div class="cl"></div></div>' . "\n" . 
	'</div>' . "\n" . 
	'</section>' . "\n" . 
	'<!-- _________________________ Finish Bottom _________________________ -->' . "\n\n";
}


echo '<a href="javascript:void(0);" id="slide_top" class="icon-video"></a>' . "\n";
?>
</div>
<!-- _________________________ Finish Container _________________________ -->

<!-- _________________________ Start Footer _________________________ -->
	<footer id="footer" role="contentinfo">
		<div class="footer_outer_wrap">
		<div class="footer_outer">
			<div class="footer_inner">
		<?php 	
			if ($cmsms_option[CMSMS_SHORTNAME . '_footer_additional_content'] == 'social') {
				echo '<ul class="social_icons">' . "\n";
				
				foreach ($cmsms_option[CMSMS_SHORTNAME . '_social_icons'] as $cmsms_social_icons) {
					$cmsms_social_icon = explode('|', str_replace(' ', '', $cmsms_social_icons));
					
					if (is_numeric($cmsms_social_icon[0])) {
						$image = wp_get_attachment_image_src($cmsms_social_icon[0], 'full');
						
						$image = $image[0];
					} else {
						$image = $cmsms_social_icon[0];
					}
					
					echo '<li>' . "\n\t" . 
						'<a' . (($cmsms_social_icon[3] == 'true') ? ' target="_blank"' : '') . ' href="' . $cmsms_social_icon[2] . '" title="' . $cmsms_social_icon[2] . '">' . "\n\t\t" . 
							'<img src="' . $image . '" alt="' . $cmsms_social_icon[2] . '" />' . "\r\t" . 
						'</a>' . "\r" . 
					'</li>' . "\n";
				}
				
				echo '</ul>' . "\n";
			} elseif ($cmsms_option[CMSMS_SHORTNAME . '_footer_additional_content'] == 'nav' && has_nav_menu('footer')) {
				wp_nav_menu(array( 
					'theme_location' => 'footer', 
					'container' => '', 
					'sort_column' => 'menu_order', 
					'menu_id' => 'footer_nav', 
					'menu_class' => 'footer_nav' 
				));
			}
			
			echo '<span class="copyright">' . stripslashes($cmsms_option[CMSMS_SHORTNAME . '_footer_copyright']) . '</span>' . "\n";
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_footer_custom_html']) { 
				echo stripslashes($cmsms_option[CMSMS_SHORTNAME . '_footer_html']) . "\n";
			}
		?>
			</div>
			</div>
		</div>
	</footer>
<!-- _________________________ Finish Footer _________________________ -->

</section>
<!-- _________________________ Finish Page _________________________ -->

<?php 
if ($cmsms_option[CMSMS_SHORTNAME . '_google_analytics'] != '') {
	echo stripslashes($cmsms_option[CMSMS_SHORTNAME . '_google_analytics']);
}

echo "\r" . '<script type="text/javascript">' . "\n\t" . 
	'jQuery(document).ready(function () {' . "\n\t\t" . 
		"jQuery('.cmsms_social').socicons( {" . "\n\t\t\t" . 
			"icons : 'nujij,ekudos,digg,linkedin,sphere,technorati,delicious,furl,netscape,yahoo,google,newsvine,reddit,blogmarks,magnolia,live,tailrank,facebook,twitter,stumbleupon,bligg,symbaloo,misterwong,buzz,myspace,mail,googleplus'," . "\n\t\t\t" . 
			"imagesurl : '" . get_template_directory_uri() . "/img/share_icons/'" . "\n\t\t" . 
		'} );' . "\n\t" . 
	'} );' . "\n" . 
'</script>' . "\n";

if ($cmsms_option[CMSMS_SHORTNAME . '_custom_css'] != '') {
	echo '<style type="text/css">' . 
		stripslashes($cmsms_option[CMSMS_SHORTNAME . '_custom_css']) . 
	'</style>';
}

if ($cmsms_option[CMSMS_SHORTNAME . '_custom_js'] != '') {
	echo '<script type="text/javascript">' . 
		stripslashes($cmsms_option[CMSMS_SHORTNAME . '_custom_js']) . 
	'</script>';
}

wp_footer();
?>
</body>
</html>
