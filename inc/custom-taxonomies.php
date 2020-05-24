<?php

function cptui_register_my_taxes_gender() {

/**
 * Taxonomy: genders.
 */

$labels = [
    "name" => __( "genders", "kks-theme" ),
    "singular_name" => __( "gender", "kks-theme" ),
    "menu_name" => __( "genders", "kks-theme" ),
    "all_items" => __( "All genders", "kks-theme" ),
    "edit_item" => __( "Edit gender", "kks-theme" ),
    "view_item" => __( "View gender", "kks-theme" ),
    "update_item" => __( "Update gender name", "kks-theme" ),
    "add_new_item" => __( "Add new gender", "kks-theme" ),
    "new_item_name" => __( "New gender name", "kks-theme" ),
    "parent_item" => __( "Parent gender", "kks-theme" ),
    "parent_item_colon" => __( "Parent gender:", "kks-theme" ),
    "search_items" => __( "Search genders", "kks-theme" ),
    "popular_items" => __( "Popular genders", "kks-theme" ),
    "separate_items_with_commas" => __( "Separate genders with commas", "kks-theme" ),
    "add_or_remove_items" => __( "Add or remove genders", "kks-theme" ),
    "choose_from_most_used" => __( "Choose from the most used genders", "kks-theme" ),
    "not_found" => __( "No genders found", "kks-theme" ),
    "no_terms" => __( "No genders", "kks-theme" ),
    "items_list_navigation" => __( "genders list navigation", "kks-theme" ),
    "items_list" => __( "genders list", "kks-theme" ),
];

$args = [
    "label" => __( "genders", "kks-theme" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'gender', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "gender",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
register_taxonomy( "gender", [ "cat_portfolio" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_gender' );

function cptui_register_my_taxes_city() {

	/**
	 * Taxonomy: citys.
	 */

	$labels = [
		"name" => __( "citys", "kks-theme" ),
		"singular_name" => __( "city", "kks-theme" ),
		"menu_name" => __( "citys", "kks-theme" ),
		"all_items" => __( "All citys", "kks-theme" ),
		"edit_item" => __( "Edit city", "kks-theme" ),
		"view_item" => __( "View city", "kks-theme" ),
		"update_item" => __( "Update city name", "kks-theme" ),
		"add_new_item" => __( "Add new city", "kks-theme" ),
		"new_item_name" => __( "New city name", "kks-theme" ),
		"parent_item" => __( "Parent city", "kks-theme" ),
		"parent_item_colon" => __( "Parent city:", "kks-theme" ),
		"search_items" => __( "Search citys", "kks-theme" ),
		"popular_items" => __( "Popular citys", "kks-theme" ),
		"separate_items_with_commas" => __( "Separate citys with commas", "kks-theme" ),
		"add_or_remove_items" => __( "Add or remove citys", "kks-theme" ),
		"choose_from_most_used" => __( "Choose from the most used citys", "kks-theme" ),
		"not_found" => __( "No citys found", "kks-theme" ),
		"no_terms" => __( "No citys", "kks-theme" ),
		"items_list_navigation" => __( "citys list navigation", "kks-theme" ),
		"items_list" => __( "citys list", "kks-theme" ),
	];

	$args = [
		"label" => __( "citys", "kks-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'city', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "city",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "city", [ "cat_portfolio" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_city' );

