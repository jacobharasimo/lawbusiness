<?php 
/**
 * @package WordPress
 * @subpackage Law Business
 * @since Law Business 1.0
 * 
 * Services Post Type
 * Created by CMSMasters
 * 
 */


class Services {
	function Services() { 
		$service_labels = array( 
			'name' => __('Services', 'cmsmasters'), 
			'singular_name' => __('Service', 'cmsmasters'), 
			'add_new' => __('Add New', 'cmsmasters'), 
			'all_items' => __('All Services', 'cmsmasters'), 
			'add_new_item' => __('Add New Service', 'cmsmasters'), 
			'edit_item' => __('Edit Service', 'cmsmasters'), 
			'new_item' => __('New Service', 'cmsmasters'), 
			'view_item' => __('View Service', 'cmsmasters'), 
			'search_items' => __('Search Services', 'cmsmasters'), 
			'not_found' => __('No Services found', 'cmsmasters'), 
			'not_found_in_trash' => __('No Services found in Trash', 'cmsmasters'), 
			'menu_name' => __('Services', 'cmsmasters') 
		);
		
		$service_args = array( 
			'labels' => $service_labels, 
			'public' => true, 
			'menu_position' => 51, 
			'capability_type' => 'post', 
			'hierarchical' => false, 
			'supports' => array( 
				'title', 
				'editor', 
				'author', 
				'thumbnail', 
				'excerpt', 
				'trackbacks', 
				'custom-fields', 
				'comments', 
				'revisions', 
				'page-attributes' 
			), 
			'query_var' => 'service', 
			'has_archive' => true, 
			'show_ui' => true, 
			'_builtin' => false, 
			'_edit_link' => 'post.php?post=%d', 
			'rewrite' => array( 
				'slug' => 'service', 
				'with_front' => true 
			) 
		);
		
		register_post_type('service', $service_args);
		
		add_filter('manage_edit-service_columns', array(&$this, 'edit_columns'));
		add_filter('manage_edit-service_sortable_columns', array(&$this, 'edit_sortable_columns'));
		
		register_taxonomy('s-sort-categs', array('service'), array(
			'hierarchical' => true, 
			'label' => __('Categories', 'cmsmasters'), 
			'singular_label' => __('Category', 'cmsmasters'), 
			'rewrite' => array( 
				'slug' => 's-sort-categs', 
				'with_front' => true 
			) 
		));
		
		register_taxonomy('s-tags', array('service'), array(
			'hierarchical' => false, 
			'label' => __('Tags', 'cmsmasters'), 
			'singular_label' => __('Tag', 'cmsmasters'), 
			'rewrite' => array( 
				'slug' => 's-tags', 
				'with_front' => true 
			) 
		));
		
		register_taxonomy('s-categs', array('service'), array(
			'hierarchical' => true, 
			'label' => __('Types', 'cmsmasters'), 
			'singular_label' => __('Type', 'cmsmasters'), 
			'rewrite' => array( 
				'slug' => 's-categs', 
				'with_front' => true 
			) 
		));
		
		flush_rewrite_rules(false);
		
		add_action('manage_posts_custom_column', array(&$this, 'custom_columns'));
		add_action('request', array(&$this, 'orderby_sortable_columns'));
	}
	
	function edit_columns($columns) {
		$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => __('Title', 'cmsmasters'),
			's_thumb' => __('Thumbnail', 'cmsmasters'),
			's_format' => __('Format', 'cmsmasters'),
			's_description' => __('Description', 'cmsmasters'),
			's_sort_categ' => __('Categories', 'cmsmasters'),
			's_tags' => __('Tags', 'cmsmasters'),
			'menu_order' => __('Order', 'cmsmasters')
		);
		
		return $columns;
	}
	
	function custom_columns($column) {
		switch ($column) {
			case 's_thumb':
				if (has_post_thumbnail() != '') {
					echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 
						'alt' => cmsms_title(get_the_ID(), false), 
						'title' => cmsms_title(get_the_ID(), false), 
						'style' => 'width:75px; height:75px;' 
					));
				} else {
					echo '<em>' . __('No Thumbnail', 'cmsmasters') . '</em>';
				}
				
				break;
			case 's_format':
				if (get_post_meta(get_the_ID(), 'cmsms_service_format', true) != '') {
					echo '<p>' . __(ucfirst(get_post_meta(get_the_ID(), 'cmsms_service_format', true)), 'cmsmasters') . '</p>';
				} else {
					echo '<em>' . __('Album', 'cmsmasters') . '</em>';
				}
				
				break;
			case 's_description':
				if (has_excerpt() || get_the_content() != '') {
					theme_excerpt(20);
				} else {
					echo '<em>' . __('No Description', 'cmsmasters') . '</em>';
				}
				
				break;
			case 's_sort_categ':
				if (get_the_terms(0, 's-sort-categs') != '') {
					$s_sort_categs = get_the_terms(0, 's-sort-categs');
					$s_sort_categs_html = array();
					
					foreach ($s_sort_categs as $s_sort_categ) {
						array_push($s_sort_categs_html, '<a href="' . get_term_link($s_sort_categ->slug, 's-sort-categs') . '">' . $s_sort_categ->name . '</a>');
					}
					
					echo implode($s_sort_categs_html, ', ');
				} else {
					echo '<em>' . __('Uncategorized', 'cmsmasters') . '</em>';
				}
				
				break;
			case 's_tags':
				if (get_the_terms(0, 's-tags') != '') {
					$s_tags = get_the_terms(0, 's-tags');
					$s_tag_html = array();
					
					foreach ($s_tags as $s_tag) {
						array_push($s_tag_html, '<a href="' . get_term_link($s_tag->slug, 's-tags') . '">' . $s_tag->name . '</a>');
					}
					
					echo implode($s_tag_html, ', ');
				} else {
					echo '<em>' . __('No Tags', 'cmsmasters') . '</em>';
				}
				
				break;
			case 'menu_order':
				$custom_post = get_post(get_the_ID());
				$custom = $custom_post->menu_order;
				
				echo $custom;
				
				break;
		}
	}
	
	function edit_sortable_columns($columns) {
		$columns['menu_order'] = 'menu_order';
		$columns['s_format'] = 's_format';
		
		return $columns;
	}
	
	function orderby_sortable_columns($vars) { 
		if (isset($vars['orderby']) && $vars['orderby'] == 's_format') {
			$vars = array_merge($vars, array( 
				'meta_key' => 'cmsms_service_format', 
				'orderby' => 'meta_value' 
			));
		}
		
		return $vars;
	}
}


function ServicesInit() {
	global $pj;
	
	
	$pj = new Services();
}


add_action('init', 'ServicesInit');

