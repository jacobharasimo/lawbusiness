<?php
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Single Testimonial Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


get_header();


$cmsms_layout = get_post_meta(get_the_ID(), 'cmsms_layout', true);

if (!$cmsms_layout) {
    $cmsms_layout = 'r_sidebar';
}


$cmsms_testimonial_post_share_box = get_post_meta(get_the_ID(), 'cmsms_testimonial_post_share_box', true);
$cmsms_testimonial_more_posts = get_post_meta(get_the_ID(), 'cmsms_testimonial_more_posts', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n";
if ($cmsms_layout == 'r_sidebar') {
	echo '<section id="content" role="main">' . "\n";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo '<section id="content" class="fr" role="main">' . "\n";
} else {
	echo '<section id="middle_content" role="main">' . "\n";
}

if (have_posts()) : the_post();
	echo "\t" . '<div class="entry">' . "\n\t\t" . 
		'<section class="opened-article">' . "\n";
?>
<!--_________________________ Start Testimonial Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
	$cmsms_testimonial_author = get_post_meta(get_the_ID(), 'cmsms_testimonial_author', true);
	$cmsms_testimonial_author_link = get_post_meta(get_the_ID(), 'cmsms_testimonial_author_link', true);
	$cmsms_testimonial_company = get_post_meta(get_the_ID(), 'cmsms_testimonial_company', true);
	
	echo '<blockquote>';
		the_content();
	echo '</blockquote>' . "\n";

	if ($cmsms_option[CMSMS_SHORTNAME . '_testimonial_post_author_avatar'] && has_post_thumbnail() != '') {
	    echo '<div class="tl_about_author">';
		echo '<figure class="tl_author_img">' . get_the_post_thumbnail(get_the_ID(), 'testim-thumb', array(
			'alt' => cmsms_title(get_the_ID(), false),
			'title' => cmsms_title(get_the_ID(), false)
		));
		echo '</figure>' . "\n";
	    cmsms_tl_descr(get_the_ID(), 'post');
        echo '</div>' . "\n";
	}

	echo '<footer class="entry-meta">' . "\n" . 
	'<div class="meta_wrap">';
	
	cmsms_tl_cat(get_the_ID(), 'tl-categs', 'post');
	
	cmsms_post_date('testimonial', 'post');
	
	echo '<div class="wrap_comments">';
		if (!post_password_required()) {
			echo cmsms_comments('post', 'testimonial');		
		}
		
		cmsmsLike(false);
	echo '</div>';
	
	
	echo '</footer>' . "\n";
?>
</article>
<!--_________________________ Start Testimonial Article _________________________ -->
<?php
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_testimonial_post_nav_box']) {
		echo '<aside class="service_navi">' . "\n\t";
		
		previous_post_link('<span class="square_prev"></span><span class="prev_link_wrap">%link</span>');
		
		next_post_link('<span class="next_link_wrap">%link</span><span class="square_next"></span>');
		
		echo '</aside>' . "\n";
	}
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_testimonial_post_share_box']) { 
		echo '<aside class="share_posts">' . "\n\t" . 
			'<h3>' . __('Like this post?', 'cmsmasters') . '</h3>' . "\n";
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
	<div class="cmsms_social cl"></div>
	<div class="divider"></div>
<?php 
		echo '</aside>' . "\n";
	}
	
	if (is_array($cmsms_testimonial_more_posts)) {
		cmsms_related( 
			false, 
			null, 
			in_array('popular', $cmsms_testimonial_more_posts), 
			in_array('recent', $cmsms_testimonial_more_posts), 
			$cmsms_option[CMSMS_SHORTNAME . '_testimonial_post_p_l_number'], 
			'testimonial' 
		);
		echo '<div class="divider"></div>';
	}
	
	comments_template(); 
	
	echo '</section>' . "\r\t" . 
	'</div>' . "\n";
endif;

echo '</section>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


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

