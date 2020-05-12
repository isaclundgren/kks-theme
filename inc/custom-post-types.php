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
