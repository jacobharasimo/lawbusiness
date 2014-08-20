<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Single Service Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


get_header();

$cmsms_service_features_one_title = get_post_meta(get_the_ID(), 'cmsms_service_features_one_title', true);
$cmsms_service_features_one = get_post_meta(get_the_ID(), 'cmsms_service_features_one', true);

$cmsms_service_features_two_title = get_post_meta(get_the_ID(), 'cmsms_service_features_two_title', true);
$cmsms_service_features_two = get_post_meta(get_the_ID(), 'cmsms_service_features_two', true);

$cmsms_service_features_three_title = get_post_meta(get_the_ID(), 'cmsms_service_features_three_title', true);
$cmsms_service_features_three = get_post_meta(get_the_ID(), 'cmsms_service_features_three', true);

$cmsms_service_features_four_title = get_post_meta(get_the_ID(), 'cmsms_service_features_four_title', true);
$cmsms_service_features_four = get_post_meta(get_the_ID(), 'cmsms_service_features_four', true);

$cmsms_service_features_five_title = get_post_meta(get_the_ID(), 'cmsms_service_features_five_title', true);
$cmsms_service_features_five = get_post_meta(get_the_ID(), 'cmsms_service_features_five', true);

$cmsms_service_format = get_post_meta(get_the_ID(), 'cmsms_service_format', true);

if (!$cmsms_service_format) { 
    $cmsms_service_format = 'slider'; 
}

$cmsms_service_author_box = get_post_meta(get_the_ID(), 'cmsms_service_author_box', true);
$cmsms_service_more_posts = get_post_meta(get_the_ID(), 'cmsms_service_more_posts', true);
$cmsms_service_features = get_post_meta(get_the_ID(), 'cmsms_service_features', true);
$cmsms_service_sharing_box = get_post_meta(get_the_ID(), 'cmsms_service_sharing_box', true);

$service_tags = get_the_terms(get_the_ID(), 's-tags');


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<section id="middle_content" role="main">' . "\n";

if (have_posts()) : the_post();
	echo "\t" . '<div class="entry">' . "\n\t\t" . 
		'<section class="opened-article">' . "\n";
	
	get_template_part('framework/postType/services/post/' . $cmsms_service_format);
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_services_service_nav_box']) {
     		echo '<aside class="service_navi">' . "\n\t";

     		previous_post_link('<span class="square_prev"></span><span class="prev_link_wrap">%link</span>');

     		next_post_link('<span class="next_link_wrap">%link</span><span class="square_next"></span>');

     		echo '</aside>' . "\n";
     	}

	if ($cmsms_service_sharing_box == 'true') {
		echo '<aside class="share_posts">' . "\n\t" . 
			'<h3>' . __('Like this service?', 'cmsmasters') . '</h3>' . "\n";
?>	
			
				<?php
					echo '<div class="cmsms_like">';
					
					cmsmsLike();
					
					echo '</div>' . "\n\t\t\t";
				?>
		
			<div class="fl">
				<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en"><?php _e('Tweet', 'cmsmasters'); ?></a>
				<script type="text/javascript">
					!function (d, s, id) { 
						var js = undefined, 
							fjs = d.getElementsByTagName(s)[0];
						
						if (d.getElementById(id)) { 
							d.getElementById(id).parentNode.removeChild(d.getElementById(id));
						}
						
						js = d.createElement(s);
						js.id = id;
						js.src = '//platform.twitter.com/widgets.js';
						
						fjs.parentNode.insertBefore(js, fjs);
					} (document, 'script', 'twitter-wjs');
				</script>
			</div>
			<div class="fl">
				<div class="g-plusone" data-size="medium"></div>
				<script type="text/javascript">
					(function () { 
						var po = document.createElement('script'), 
							s = document.getElementsByTagName('script')[0];
						
						po.type = 'text/javascript';
						po.async = true;
						po.src = 'https://apis.google.com/js/plusone.js';
						
						s.parentNode.insertBefore(po, s);
					} )();
				</script>
			</div>
			<div class="fl">
				<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink(get_the_ID())); ?>" class="pin-it-button" count-layout="horizontal">
					<img border="0" src="//assets.pinterest.com/images/PinExt.png" title="<?php _e('Pin It', 'cmsmasters'); ?>" />
				</a>
				<script type="text/javascript">
					(function (d, s, id) { 
						var js = undefined, 
							fjs = d.getElementsByTagName(s)[0];
						
						if (d.getElementById(id)) { 
							d.getElementById(id).parentNode.removeChild(d.getElementById(id));
						}
						
						js = d.createElement(s);
						js.id = id;
						js.src = '//assets.pinterest.com/js/pinit.js';
						
						fjs.parentNode.insertBefore(js, fjs);
					} (document, 'script', 'pinterest-wjs'));
				</script>
			</div>
			<div class="fl">
				<div class="fb-like" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial"></div>
				<script type="text/javascript">
					(function (d, s, id) { 
						var js = undefined, 
							fjs = d.getElementsByTagName(s)[0];
						
						if (d.getElementById(id)) { 
							d.getElementById(id).parentNode.removeChild(d.getElementById(id));
						}
						
						js = d.createElement(s);
						js.id = id;
						js.src = '//connect.facebook.net/en_US/all.js#xfbml=1';
						
						fjs.parentNode.insertBefore(js, fjs);
					} (document, 'script', 'facebook-jssdk'));
				</script>
			</div>
			<div class="cl"></div>
			<a class="cmsms_share" href="#"><span><?php _e('More sharing options', 'cmsmasters'); ?></span></a>
			<div class="cmsms_social cl"></div><br /><br />
<?php 
		echo '<div class="divider"></div>';
		echo '</aside>' . "\n";
	}
		
	if ($cmsms_service_author_box == 'true') {
		$user_email = get_the_author_meta('user_email') ? get_the_author_meta('user_email') : false;
		$user_nicename = get_the_author_meta('user_nicename') ? get_the_author_meta('user_nicename') : false;
		$user_first_name = get_the_author_meta('first_name') ? get_the_author_meta('first_name') : false;
		$user_last_name = get_the_author_meta('last_name') ? get_the_author_meta('last_name') : false;
		$user_description = get_the_author_meta('description') ? get_the_author_meta('description') : false;
		
		echo '<aside class="about_author">' . "\n\t" . 
			'<h3>' . __('About author', 'cmsmasters') . '</h3>' . "\n\t" .
			'<div class="about_author_inner">' . "\n\t\t";
		
		$out = '';
		
		if ($user_first_name) {
			$out .= $user_first_name;
		}
		
		if ($user_first_name && $user_last_name) {
			$out .= ' ' . $user_last_name;
		} elseif ($user_last_name) {
			$out .= $user_last_name;
		}
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ' (';
		}
		
		if (get_the_author()) {
			$out .= get_the_author();
		}
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ')';
		}
		
		echo '<figure class="alignleft">' . "\n\t\t\t" . 
			get_avatar($user_email, 100, $default='<path_to_url>', $user_nicename) . "\r\t\t" . 
		'</figure>' . "\n\t\t";
		
		if ($out != '') {
			echo '<h5>' . $out . '</h5>' . "\n\t\t";
		}
		
		if ($user_description) {
			echo '<p>' . str_replace("\n", '<br />', $user_description) . '</p>' . "\r\t";
		}
		
		echo '</div>' . "\r" . 
		'</aside><div class="divider"></div>' . "\n";
	}
	
	if ($service_tags) {
		$tgsarray = array();
		
		foreach ($service_tags as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}  
	} else {
		$tgsarray = null;
	}
	
	if (is_array($cmsms_service_more_posts)) {
		cmsms_related( 
			in_array('related', $cmsms_service_more_posts), 
			$tgsarray, 
			in_array('popular', $cmsms_service_more_posts), 
			in_array('recent', $cmsms_service_more_posts), 
			$cmsms_option[CMSMS_SHORTNAME . '_services_service_r_p_l_number'], 
			'service', 
			's-tags' 
		);
	}

	echo '<div class="divider"></div>';
	
	comments_template(); 
	?>
	</div>
	<?php 
	echo '</section>' . "\r\t" . 
	'</div>' . "\n";
endif;

echo '</section>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

