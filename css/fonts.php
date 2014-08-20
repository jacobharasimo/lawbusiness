<?php 
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Fonts & Colors Settings File
 * Created by CMSMasters
 * 
 */


header('Content-type: text/css');


require('../../../../wp-load.php');


$cmsms_option = cmsms_get_global_options();

$colors = str_replace('#', '', $cmsms_option[CMSMS_SHORTNAME . '_theme_color']);
$color1 = hexdec(substr($colors, 0, 2));
$color2 = hexdec(substr($colors, 2, 2));
$color3 = hexdec(substr($colors, 4, 2));

$rgba = 'rgba(' . $color1 . ', ' . $color2 . ', ' . $color3 . ', .90)';
?>

/* ===================> Fonts <================== */

/* ====> Content <==== */

body, 
li p,
.testimonial .cmsmsLike, 
.testimonial .cmsms_comments {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_content_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_style']; ?>;
}

.colored_button {
	font-family:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'];
	?>;
}

/* ====> Links <==== */

a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_link_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_link_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_link_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_style']; ?>;
}

/* ====> Navigation <==== */

#navigation > li > a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] . 
		'px/20px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_style']; ?>;
}

#navigation ul li a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_style']; ?>;
}

#navigation ul li {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_bg']; ?>;
}

#navigation ul li a:hover,
#navigation ul li:hover > a,
#navigation ul li.current_page_item > a,
#navigation ul li.current-menu-ancestor > a {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_active_bg']; ?>;
}


/* ====> Headings <==== */

h1,
h1 a,
.logo .title {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_style']; ?>;
}

h2,
h2 a,
.post .entry-title,
.post .entry-title a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h2_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h2_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h2_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_style']; ?>;
}

h3,
h3 a,
#reply-title,
.search .entry-title,
.search .entry-title a,
.archive .entry-title,
.archive .entry-title a,
.cmsms_sitemap > li > a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h3_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_style']; ?>;
}

h4,
h4 a,
.cmsms_sitemap > li > ul > li > a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h4_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_style']; ?>;
	text-transform: uppercase;
}

h5,
h5 a,
.post type-post .entry-title,
.post type-post .entry-title a,
#bottom .widgettitle,
#bottom .widgettitle a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h5_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_style']; ?>;
}

h6,
h6 a, 
.product .entry-title,
.product .entry-title a,
.shop_table.cart thead th,
.cart_totals table th,
.shop_table th,
ul.order_details li > span {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_h6_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h6_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_style']; ?>;
	text-transform:uppercase;
}

.services_inner .entry-title {
	font-family:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo (($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'];
	?>;
}

/* ====> Other <==== */

q, 
blockquote {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_quote_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_quote_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_style']; ?>;
}

span.dropcap2 {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_font_style']; ?>;
}

span.dropcap {
	font-size:28px;
	line-height:54px;
	font-family:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo (($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_system_font'];
	?>;
}

code {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_code_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_code_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_code_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_code_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_code_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_code_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_code_font_font_style']; ?>;
}

small,
small a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_small_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_style']; ?>;
}

.skill_item_colored > span {
	font-family:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo (($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_small_font_system_font'];
	?>;
}
	
input,
input[type="submit"],
textarea,
select,
option {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_input_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_input_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_input_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_input_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_style']; ?>;
}

#footer,
.bottom_inner, 
.bottom_inner code, 
.bottom_inner small, 
.bottom_inner abbr {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_bottom_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_bottom_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_bottom_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_bottom_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_font_font_style']; ?>;
}

q:before, 
blockquote:before {
	font-size:72px;
	line-height:18px;
}

/* ===================> Colors <================== */

/* ====> Content <==== */

body,
.widget del .amount,
.header_html a:hover,
.header_html .contact_widget_email a,
.header_html .contact_widget_email a:hover  {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_color']; ?>;
}

.bottom_inner h1, 
.bottom_inner h2.widgettitle, 
.bottom_inner h3, 
.bottom_inner h4, 
.bottom_inner h5, 
.bottom_inner h6,
.bottom_inner .widget .product_list_widget li > a,
.bottom_inner .widget.widget_shopping_cart .widget_shopping_cart_content .total .amount {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_headings_color']; ?>;
}

.bottom_inner, 
.bottom_inner code, 
.bottom_inner small, 
.bottom_inner abbr,
.bottom_inner .widget del .amount,
#bottom .star-rating:before {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_font_font_color']; ?>;
}

/* ====> Links <==== */

a, 
h1 a:hover,
h2 a:hover,
h3 a:hover,
h4 a:hover,
h5 a:hover,
h6 a:hover,
.tl_author,
.service_navi a:hover,
.cmsms_comments:hover:before,
.cmsmsLike:hover span:after,
.jp-playlist li.jp-playlist-current div a,
.jp-playlist li div a:hover  {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_color']; ?>;
}

a:hover, 
.jp-playlist li div a,
.service_navi a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_link_font_hover']; ?>;
}

#footer a,
.bottom_inner a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_content_link_font_color']; ?>;
	font-size:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_content_link_font_size'] . 'px'; ?>;
	line-height:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_content_link_line_height'] . 'px'; ?>;
}

#footer a:hover,
.bottom_inner a:hover {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_content_link_hover']; ?>;
}

.button,
.button_medium,
.button_large,
.button_small,
#cancel-comment-reply-link,
#submit,
input[type="submit"] {
	font-family:'Playfair Display', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg']; ?>;	
}

q:before, 
blockquote:before,
ul.s_filter_list li a,
.cmsms_details_links a,
.service .cmsms_share,
.more_button,
.service_navi a,
.services_inner .entry-title a,
.services_inner .entry-title,
.cmsms_info .cmsms_month_day,
.cmsms_info .cmsms_year,
.post_inner .entry-title,
.post_inner .entry-title a,
.blog .post .more_button,
.blog .post footer.entry-meta,
.blog .post footer.entry-meta a,
.blog .format-quote .entry-excerpt,
.format-aside .cmsms_post_format_img:before,
.format_link,
.comment-reply-link,
.tabs li a,
.related_posts li a,
.tog,
.tour li a,
.pricing_footer span,
.table thead th,
.table tfoot,
.chart .percentage_inner span,
.chart .percentage_inner small,
.chart .label,
.cmsms_sitemap a,
.cmsms_timeline_title,
.widget .tl-content:before,
.cmsms_latest_bottom_tweets_inner,
.percent_item_colored_wrap,
.post_inner > .published > .cmsms_post_day {
	font-family:'Playfair Display', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
}

/* ====> Navigation <==== */

#navigation li > a, 
#navigation li.current_page_ancestor > a,
#navigation li.current-menu-ancestor > a,
#navigation li.current_page_item > a,
#navigation > li.current_page_item > a,
#navigation > li.current-menu-ancestor > a,
#navigation > li.current_page_item > a:hover,
#navigation > li.current_page_ancestor > a:hover,
#navigation > li.current-menu-ancestor > a:hover,
#navigation li li:hover > a:hover,
#navigation ul li:hover > a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_color']; ?>;
}

#navigation > li > a:hover,
#navigation > li.current_page_ancestor > a,
#navigation > li.current-menu-ancestor > a,
#navigation > li.current-menu-ancestor > a:hover {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_hover']; ?>;
}

#navigation li li > a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_color']; ?>;
}

#navigation > li.current_page_item > a,
#navigation > li.current_page_ancestor > a,
#navigation > li.current-menu-ancestor > a,
#navigation > li.current_page_item > a:hover,
#navigation > li.current_page_ancestor > a:hover,
#navigation > li.current-menu-ancestor > a:hover {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg']; ?>;
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_active']; ?>;
}

#navigation > #line:before {
	border-top-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg']; ?>;
}

a:hover {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_link_font_hover']; ?>;
}

#navigation li > a, 
#navigation li.current_page_ancestor > a,
#navigation li.current-menu-ancestor > a,
#navigation li.current_page_item > a,
#navigation > li.current_page_item > a,
#navigation > li.current_page_ancestor > a,
#navigation > li.current-menu-ancestor > a,
#navigation > li.current_page_item > a:hover,
#navigation > li.current_page_ancestor > a:hover,
#navigation > li.current-menu-ancestor > a:hover,
#navigation li li:hover > a:hover,
#navigation ul li:hover > a {
	border-bottom-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_hover']; ?>;
}

#navigation > #line,
.rev_slider_wrapper .tp-leftarrow.default:hover:before,
.rev_slider_wrapper .tp-rightarrow.default:hover:before,
.tp-bullets.tp-thumbs .bullet.selected {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg']; ?>;
}

/* ====> Headings <==== */

h1,
h1 a, 
.logo {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_color']; ?>;
}

h2,
h2 a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_color']; ?>;
}

h3, 
h3 a,
.cmsms_sitemap > li > a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_color']; ?>;
}

h4,
h4 a,
.cmsms_sitemap > li > ul > li > a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_color']; ?>;
}

h5, 
h5 a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_color']; ?>;
}

h6,
h6 a, 
#reply-title,
.cmsms_timeline .entry-title a,
.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li a,
.cmsms_dynamic_cart .widget_shopping_cart_content .total .amount,
.product .woocommerce-tabs table.shop_attributes th,
.shop_table.cart thead th,
.cart_totals table th,
.widget .product_list_widget li > a,
.widget.widget_shopping_cart .widget_shopping_cart_content .total .amount,
.form-row label,
.shop_table th,
ul.order_details li > span,
.format-quote .entry-excerpt {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_color']; ?>;
}


/* ====> Other <==== */

q, 
blockquote {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_color']; ?>;
}

span.dropcap2,
.tl_company,
.percentage span,
.chart .label {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_font_color']; ?>;
}

span.dropcap,
.tweets_icon:before,
#bottom #wp-calendar #today,
#bottom .button_small:hover,
#bottom .cmsms-form-builder .check_parent input[type="checkbox"]+label:after,
#bottom .wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="checkbox"]:checked + span.wpcf7-list-item-label:before,
#bottom .cmsms-form-builder .check_parent input[type="checkbox"]:checked+label:before,
#bottom .wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="radio"]:checked + span.wpcf7-list-item-label:before {
	color:#ffffff;
}

.cmsms_latest_bottom_tweets_inner a:hover {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_sec_theme_color']; ?>;
}

code {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_code_font_font_color']; ?>;
}

small {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_color']; ?>;
}

input, 
textarea, 
select, 
option, 
select option {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_color']; ?>;
}

.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="checkbox"] + span.wpcf7-list-item-label:after,
.cmsms-form-builder .check_parent input[type="checkbox"]+label:after,
.checkout #shiptobilling input[type="checkbox"]+label:after {
	color:#000;
}

/* ====> Footer Content <==== */

#footer {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_font_font_color']; ?>;
}


/* ===================> Backgrounds and Borders <================== */


.tog:hover .cmsms_plus,
.tog.current .cmsms_plus,
ul.s_filter_list li a.current,
ul.s_filter_list li a:hover,
.cmsms_post_format_img,
ul.page-numbers span,
#cmsms_latest_bottom_tweets,
.related_posts li.current a, 
.related_posts li.current a:hover, 
.tabs.active li.current a, 
.tabs.active li.current a:hover, 
.tabs li.current a,
.tour li.current a,
.tour.active li.current a,
#bottom .button_small:hover,
#bottom .widget_custom_popular_services_entries header, 
#bottom .widget_custom_latest_services_entries header,
.bottom_inner .cmsms_content_prev_slide:hover, 
.bottom_inner .cmsms_content_next_slide:hover,
#navigation > li.current-menu-item:before,
#navigation > li.current-menu-parent:before,
#navigation > li.current-menu-ancestor:before,
.ls-lawbusiness .ls-nav-stop:hover:before,
.ls-lawbusiness .ls-nav-stop:hover:after,
.ls-lawbusiness .ls-nav-stop.ls-nav-stop-active:before,
.ls-lawbusiness .ls-nav-stop.ls-nav-stop-active:after,
.ls-lawbusiness .ls-bottom-slidebuttons a:hover,
.ls-lawbusiness .ls-bottom-slidebuttons a.ls-nav-active,
.widget_custom_recent_testimonials_entries .cmsms_content_prev_slide:hover,
.widget_custom_recent_testimonials_entries .cmsms_content_next_slide:hover,
.widget_custom_latest_services_entries .cmsms_content_prev_slide:hover, 
.widget_custom_latest_services_entries .cmsms_content_next_slide:hover,
.widget_custom_popular_services_entries .cmsms_content_prev_slide:hover, 
.widget_custom_popular_services_entries .cmsms_content_next_slide:hover,
.widget_custom_recent_testimonials_entries .cmsms_content_prev_slide:hover:active:before,
.widget_custom_recent_testimonials_entries .cmsms_content_next_slide:hover:active:before,
.widget_custom_latest_services_entries .cmsms_content_prev_slide:hover:active:before, 
.widget_custom_latest_services_entries .cmsms_content_next_slide:hover:active:before,
.widget_custom_popular_services_entries .cmsms_content_prev_slide:hover:active:before, 
.widget_custom_popular_services_entries .cmsms_content_next_slide:hover:active:before,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active:before, 
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active:before,
.bottom_inner .widget_custom_recent_testimonials_entries .cmsms_content_prev_slide:hover, 
.bottom_inner .widget_custom_recent_testimonials_entries .cmsms_content_next_slide:hover, 
.bottom_inner .widget_custom_latest_services_entries .cmsms_content_prev_slide:hover, 
.bottom_inner .widget_custom_latest_services_entries .cmsms_content_next_slide:hover, 
.bottom_inner .widget_custom_popular_services_entries .cmsms_content_prev_slide:hover, 
.bottom_inner .widget_custom_popular_services_entries .cmsms_content_next_slide:hover,
.post_type_shortcode .cmsms_content_prev_slide:hover,
.post_type_shortcode .cmsms_content_next_slide:hover,
.post_type_shortcode .cmsms_content_prev_slide:hover:active:before,
.post_type_shortcode .cmsms_content_next_slide:hover:active:before,
.cmsms_content_prev_slide:hover,
.cmsms_content_next_slide:hover,
.ie8 .services_inner .services_rollover,
.post_inner > .published > .cmsms_post_day {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?>;
}

#bottom,
.footer_outer_wrap,
.custom_header,
.button:hover,
.button_small:hover,
.button.current,
.button_medium:hover,
.button_large:hover,
.comment-reply-link:hover,
#cancel-comment-reply-link:hover,
#submit:hover,
input[type="submit"]:hover,
.cmsms_info .published,
.tabs.active li a:hover, 
.related_posts li a:hover,
.tabs li a:hover,
.tour li a:hover,
.cmsms_plus,
.button_medium current,
.button_medium.current.reversed,
.service_navi .square_prev,
.service_navi .square_next,
.cmsms_timeline .cmsms_post_format_img,
.post_inner > .published > .cmsms_post_month,
.cmsms_content_slider_parent ul.cmsms_slides_nav li a,
.wrap_person.cmsms_mobile_hover .cmsms_team_rollover,
.widget_custom_recent_testimonials_entries .cmsms_content_prev_slide,
.widget_custom_recent_testimonials_entries .cmsms_content_next_slide,
.widget_custom_latest_services_entries .cmsms_content_prev_slide, 
.widget_custom_latest_services_entries .cmsms_content_next_slide,
.widget_custom_popular_services_entries .cmsms_content_prev_slide, 
.widget_custom_popular_services_entries .cmsms_content_next_slide,
.widget_custom_recent_testimonials_entries .cmsms_content_prev_slide:hover:active,
.widget_custom_recent_testimonials_entries .cmsms_content_next_slide:hover:active,
.widget_custom_latest_services_entries .cmsms_content_prev_slide:hover:active, 
.widget_custom_latest_services_entries .cmsms_content_next_slide:hover:active,
.widget_custom_popular_services_entries .cmsms_content_prev_slide:hover:active, 
.widget_custom_popular_services_entries .cmsms_content_next_slide:hover:active,
.cmsms-form-builder .check_parent input[type="radio"]+label:after,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover, 
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover,
.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="radio"] + span.wpcf7-list-item-label:after,
.post_type_shortcode .cmsms_content_prev_slide,
.post_type_shortcode .cmsms_content_next_slide,
.post_type_shortcode .cmsms_content_prev_slide:hover:active,
.post_type_shortcode .cmsms_content_next_slide:hover:active,
#bottom .widget_custom_popular_services_entries header, 
#bottom .widget_custom_latest_services_entries header {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_sec_theme_color']; ?>;
}

#cmsms_latest_bottom_tweets .cmsms_content_prev_slide, 
#cmsms_latest_bottom_tweets .cmsms_content_next_slide,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:before, 
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:before,
#bottom .cmsms-form-builder .check_parent input[type="radio"]+label:after,
#bottom .wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="radio"] + span.wpcf7-list-item-label:after {
	background-color:#ffffff;
}

#bottom .button, 
#bottom .button_small,
#bottom .button_medium, 
#bottom .button_large {
	background-color:#262626;
	background-color:rgba(200, 200, 200, 0.18);
}

.services_inner .services_rollover {
	background:<?php echo $rgba; ?>;
}

code {border-color:#ededed;}

input[type="text"]:focus,
textarea:focus,
input[type="password"]:focus, 
input[type="email"]:focus, 
input[type="tel"]:focus, 
select:focus,
.related_posts li.current,
.related_posts li.current:hover,
.tabs.active li.current,
.tour li.current,
.tour li.current a,
.tour li.current:hover,
.tour li.current a:hover,
ul.s_filter_list li a.current,
ul.s_filter_list li a:hover,
.payment_methods li input[type="radio"]:checked+label:before,
#bottom .cmsms-form-builder .check_parent input[type="radio"]:checked+label:before,
.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="radio"]:checked + span.wpcf7-list-item-label:before,
.cmsms-form-builder .check_parent input[type="radio"]:checked+label:before,
.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="checkbox"]:checked + span.wpcf7-list-item-label:before,
.checkout #shiptobilling input[type="checkbox"]:checked+label:before,
.cmsms-form-builder .check_parent input[type="checkbox"]:checked+label:before,
#bottom .widget_custom_flickr_entries .flickr_badge_image a:hover {
	border-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?>;
}

.related_posts li:hover,
.tour li:hover,
.tour li a:hover,
.tabs li:hover {
	border-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_sec_theme_color']; ?>;
} 

.widget_author_wrap:before,
#bottom .widget_custom_twitter_entries .tweet_time a:before,
#bottom .wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="checkbox"] + span.wpcf7-list-item-label:after,
.cmsms_our_team_wrap .entry-header .person_subtitle,
.service_title a:hover,
.star-rating span:before,
.pp_inline #commentform .stars span a:before,
.widget .product_list_widget li > a:hover {
	color: <?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?>;
}

q:before, 
blockquote:before,
.cmsms_timeline .entry-title,
.cmsms_timeline .entry-title a,
.cmsmsLike:hover span:before,
.cmsmsLike.active span:before,
.widget .tl-content:before,
#wp-calendar #today,
.pricing_footer span,
label .required,
.error h1,
.color_3 {
	color : <?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?>;
}

code,
#navigation > li > ul,

.cmsms_content_prev_slide:hover:active:after,
.cmsms_content_prev_slide:hover:active span:before,
.cmsms_content_prev_slide:hover:active span:after,
.cmsms_content_next_slide:hover:active:after,
.cmsms_content_next_slide:hover:active span:before,
.cmsms_content_next_slide:hover:active span:after,

#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:after,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide span:before,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide span:after,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:after,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide span:before,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide span:after,

#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active:after,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active span:before,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active span:after,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active:after,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active span:before,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active span:after {
	border-top-color : <?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?>;
}

#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:after,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover span:before,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover span:after,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:after,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover span:before,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover span:after {
	border-top-color :#ffffff;
}

.cmsms_content_prev_slide:hover:active:after,
.cmsms_content_prev_slide:hover:active span:before,
.cmsms_content_prev_slide:hover:active span:after,
.cmsms_content_next_slide:hover:active:after,
.cmsms_content_next_slide:hover:active span:before,
.cmsms_content_next_slide:hover:active span:after,

#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:after,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide span:before,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide span:after,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:after,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide span:before,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide span:after,

#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active:after,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active span:before,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active span:after,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active:after,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active span:before,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active span:after {
	border-bottom-color : <?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?>;
}


#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:after,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover span:before,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover span:after,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:after,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover span:before,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover span:after {
	border-bottom-color :#ffffff;
}

.ls-law business .ls-nav-start:hover,
.ls-law business .ls-nav-stop:hover {
	border-left-color: <?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?> !important;
	border-right-color: <?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?> !important;
}

.ls-lawbusiness .ls-nav-start:hover:before,
.ls-lawbusiness .ls-nav-start.ls-nav-start-active:before {
	border-left-color: <?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?> !important;
}

.button,
.button_small, 
.button_medium, 
.button_large,
span.dropcap,
.title_icon,
.responsive_nav:hover span,
.responsive_nav:hover span:before,
.responsive_nav:hover span:after,
.responsive_nav.active span,
.responsive_nav.active span:before,
.responsive_nav.active span:after,
.cmsms_content_slider_parent ul.cmsms_slides_nav li.active a, 
.cmsms_content_slider_parent ul.cmsms_slides_nav li a:hover,
.cmsms_timeline article:hover .cmsms_post_format_img,
.ls-law business .ls-bottom-slidebuttons a.ls-nav-active,
.ls-law business .ls-bottom-slidebuttons a:hover,
.ls-law business .ls-nav-prev:hover:before,
.ls-law business .ls-nav-next:hover:before,
.cmsms_pricing_table.current .cmsms_price_outer,
#cmsms_latest_bottom_tweets .cmsms_content_next_slide:before,
#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:before,
.comment-reply-link, 
#cancel-comment-reply-link, 
#submit, 
input[type="submit"] {
	background-color : <?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?>;
}

<?php 
$i = 1;

foreach ($cmsms_option[CMSMS_SHORTNAME . '_social_icons'] as $cmsms_social_icons) {
	$cmsms_social_icon = explode('|', str_replace(' ', '', $cmsms_social_icons));
	
	echo '.social_icons li:nth-child(' . $i . '):hover a {background-color:' . $cmsms_social_icon[1] . '}' . "\n";
	
	$i++;
}

$i = 1;

foreach ($cmsms_option[CMSMS_SHORTNAME . '_header_social_icons'] as $cmsms_header_social_icons) {
	$cmsms_header_social_icon = explode('|', str_replace(' ', '', $cmsms_header_social_icons));
	
	echo '.custom_header_inner .social_icons li:nth-child(' . $i . '):hover a {background-color:' . $cmsms_header_social_icon[1] . '}' . "\n";
	
	$i++;
}

?>
@media only screen and (max-width: 1024px) {
	
	#navigation li a {
		font-size:13px;
		font-family:Verdana,arial;
	}

	.cmsms_responsive #navigation > li.current_page_item > a,
	.cmsms_responsive #navigation > li.current_page_ancestor > a,
	.cmsms_responsive #navigation > li.current-menu-ancestor > a,
	.cmsms_responsive #navigation > li.current_page_item > a:hover,
	.cmsms_responsive #navigation > li.current_page_ancestor > a:hover,
	.cmsms_responsive #navigation > li.current-menu-ancestor > a:hover {
		background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_active_bg']; ?>;
	}

	#navigation li a,
	#navigation ul li a {
		color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_color']; ?>!important;
	}
	
	#navigation li a:hover,
	#navigation ul li a:hover, 
	#navigation li.dropdown > a.drop_active span,
	#navigation li.current_page_item > a,
	#navigation li.current-menu-ancestor > a,
	#navigation ul li.current_page_item > a,
	#navigation ul li.current-menu-ancestor > a {
		color: <?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?>!important;
	}
}