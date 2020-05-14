<?

function cptui_register_my_cpts() {

/**
 * Post Type: cats.
 */

$labels = [
    "name" => __( "cats", "kks-theme" ),
    "singular_name" => __( "cat", "kks-theme" ),
    "menu_name" => __( "My cats", "kks-theme" ),
    "all_items" => __( "All cats", "kks-theme" ),
    "add_new" => __( "Add new", "kks-theme" ),
    "add_new_item" => __( "Add new cat", "kks-theme" ),
    "edit_item" => __( "Edit cat", "kks-theme" ),
    "new_item" => __( "New cat", "kks-theme" ),
    "view_item" => __( "View cat", "kks-theme" ),
    "view_items" => __( "View cats", "kks-theme" ),
    "search_items" => __( "Search cats", "kks-theme" ),
    "not_found" => __( "No cats found", "kks-theme" ),
    "not_found_in_trash" => __( "No cats found in trash", "kks-theme" ),
    "parent" => __( "Parent cat:", "kks-theme" ),
    "featured_image" => __( "Featured image for this cat", "kks-theme" ),
    "set_featured_image" => __( "Set featured image for this cat", "kks-theme" ),
    "remove_featured_image" => __( "Remove featured image for this cat", "kks-theme" ),
    "use_featured_image" => __( "Use as featured image for this cat", "kks-theme" ),
    "archives" => __( "cat archives", "kks-theme" ),
    "insert_into_item" => __( "Insert into cat", "kks-theme" ),
    "uploaded_to_this_item" => __( "Upload to this cat", "kks-theme" ),
    "filter_items_list" => __( "Filter cats list", "kks-theme" ),
    "items_list_navigation" => __( "cats list navigation", "kks-theme" ),
    "items_list" => __( "cats list", "kks-theme" ),
    "attributes" => __( "cats attributes", "kks-theme" ),
    "name_admin_bar" => __( "cat", "kks-theme" ),
    "item_published" => __( "cat published", "kks-theme" ),
    "item_published_privately" => __( "cat published privately.", "kks-theme" ),
    "item_reverted_to_draft" => __( "cat reverted to draft.", "kks-theme" ),
    "item_scheduled" => __( "cat scheduled", "kks-theme" ),
    "item_updated" => __( "cat updated.", "kks-theme" ),
    "parent_item_colon" => __( "Parent cat:", "kks-theme" ),
];

$args = [
    "label" => __( "cats", "kks-theme" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "cats", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
];

register_post_type( "cat_portfolio", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_cpts_cat_adoption() {

	/**
	 * Post Type: adoptions.
	 */

	$labels = [
		"name" => __( "adoptions", "kks-theme" ),
		"singular_name" => __( "adoption", "kks-theme" ),
		"menu_name" => __( "My adoptions", "kks-theme" ),
		"all_items" => __( "All adoptions", "kks-theme" ),
		"add_new" => __( "Add new", "kks-theme" ),
		"add_new_item" => __( "Add new adoption", "kks-theme" ),
		"edit_item" => __( "Edit adoption", "kks-theme" ),
		"new_item" => __( "New adoption", "kks-theme" ),
		"view_item" => __( "View adoption", "kks-theme" ),
		"view_items" => __( "View adoptions", "kks-theme" ),
		"search_items" => __( "Search adoptions", "kks-theme" ),
		"not_found" => __( "No adoptions found", "kks-theme" ),
		"not_found_in_trash" => __( "No adoptions found in trash", "kks-theme" ),
		"parent" => __( "Parent adoption:", "kks-theme" ),
		"featured_image" => __( "Featured image for this adoption", "kks-theme" ),
		"set_featured_image" => __( "Set featured image for this adoption", "kks-theme" ),
		"remove_featured_image" => __( "Remove featured image for this adoption", "kks-theme" ),
		"use_featured_image" => __( "Use as featured image for this adoption", "kks-theme" ),
		"archives" => __( "adoption archives", "kks-theme" ),
		"insert_into_item" => __( "Insert into adoption", "kks-theme" ),
		"uploaded_to_this_item" => __( "Upload to this adoption", "kks-theme" ),
		"filter_items_list" => __( "Filter adoptions list", "kks-theme" ),
		"items_list_navigation" => __( "adoptions list navigation", "kks-theme" ),
		"items_list" => __( "adoptions list", "kks-theme" ),
		"attributes" => __( "adoptions attributes", "kks-theme" ),
		"name_admin_bar" => __( "adoption", "kks-theme" ),
		"item_published" => __( "adoption published", "kks-theme" ),
		"item_published_privately" => __( "adoption published privately.", "kks-theme" ),
		"item_reverted_to_draft" => __( "adoption reverted to draft.", "kks-theme" ),
		"item_scheduled" => __( "adoption scheduled", "kks-theme" ),
		"item_updated" => __( "adoption updated.", "kks-theme" ),
		"parent_item_colon" => __( "Parent adoption:", "kks-theme" ),
	];

	$args = [
		"label" => __( "adoptions", "kks-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "adoption", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
	];

	register_post_type( "cat_adoption", $args );
}

add_action( 'init', 'cptui_register_my_cpts_cat_adoption' );


function cptui_register_my_cpts_success_story() {

	/**
	 * Post Type: success_stories.
	 */

	$labels = [
		"name" => __( "success_stories", "kks-theme" ),
		"singular_name" => __( "success_story", "kks-theme" ),
		"menu_name" => __( "My sucess_stories", "kks-theme" ),
		"all_items" => __( "All sucess_stories", "kks-theme" ),
		"add_new" => __( "Add new", "kks-theme" ),
		"add_new_item" => __( "Add new success_story", "kks-theme" ),
		"edit_item" => __( "Edit success_story", "kks-theme" ),
		"new_item" => __( "New success_story", "kks-theme" ),
		"view_item" => __( "View success_story", "kks-theme" ),
		"view_items" => __( "View sucess_stories", "kks-theme" ),
		"search_items" => __( "Search sucess_stories", "kks-theme" ),
		"not_found" => __( "No sucess_stories found", "kks-theme" ),
		"not_found_in_trash" => __( "No sucess_stories found in trash", "kks-theme" ),
		"parent" => __( "Parent success_story:", "kks-theme" ),
		"featured_image" => __( "Featured image for this success_story", "kks-theme" ),
		"set_featured_image" => __( "Set featured image for this success_story", "kks-theme" ),
		"remove_featured_image" => __( "Remove featured image for this success_story", "kks-theme" ),
		"use_featured_image" => __( "Use as featured image for this success_story", "kks-theme" ),
		"archives" => __( "success_story archives", "kks-theme" ),
		"insert_into_item" => __( "Insert into success_story", "kks-theme" ),
		"uploaded_to_this_item" => __( "Upload to this success_story", "kks-theme" ),
		"filter_items_list" => __( "Filter sucess_stories list", "kks-theme" ),
		"items_list_navigation" => __( "sucess_stories list navigation", "kks-theme" ),
		"items_list" => __( "sucess_stories list", "kks-theme" ),
		"attributes" => __( "sucess_stories attributes", "kks-theme" ),
		"name_admin_bar" => __( "success_story", "kks-theme" ),
		"item_published" => __( "success_story published", "kks-theme" ),
		"item_published_privately" => __( "success_story published privately.", "kks-theme" ),
		"item_reverted_to_draft" => __( "success_story reverted to draft.", "kks-theme" ),
		"item_scheduled" => __( "success_story scheduled", "kks-theme" ),
		"item_updated" => __( "success_story updated.", "kks-theme" ),
		"parent_item_colon" => __( "Parent success_story:", "kks-theme" ),
	];

	$args = [
		"label" => __( "success_stories", "kks-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "success-stories", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
	];

	register_post_type( "success_story", $args );
}

add_action( 'init', 'cptui_register_my_cpts_success_story' );

