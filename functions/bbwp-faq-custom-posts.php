<?php
function bbwp_faq_post_type() {
$labels = array(
  'name'               => _x( 'FAQ', 'Post Type General Name', 'bbwp-faq-languaje' ),
  'singular_name'      => _x( 'FAQ', 'Post Type Singular Name', 'bbwp-faq-languaje' ),
  'menu_name'          => __( 'FAQ', 'bbwp-faq-languaje' ),
  'name_admin_bar'     => __( 'FAQ', 'bbwp-faq-languaje' ),
  'parent_item_colon'  => __( 'Parent FAQ', 'bbwp-faq-languaje' ),
  'all_items'          => __( 'All FAQs', 'bbwp-faq-languaje' ),
  'view_item'          => __( 'View New', 'bbwp-faq-languaje' ),
  'new_item'           => __( 'New FAQ', 'bbwp-faq-languaje' ),
  'add_new_item'       => __( 'Add new FAQs', 'bbwp-faq-languaje' ),
  'add_new'            => __( 'Add new', 'bbwp-faq-languaje' ),
  'edit_item'          => __( 'Edit FAQ', 'bbwp-faq-languaje' ),
  'update_item'        => __( 'Update', 'bbwp-faq-languaje' ),
  'search_items'       => __( 'Search FAQs', 'bbwp-faq-languaje' ),
  'not_found'          => __( 'FAQ not found', 'bbwp-faq-languaje' ),
  'not_found_in_trash' => __( 'FAQ not found in trash', 'bbwp-faq-languaje' ),
  );

$rewrite = array(
  'slug'                => 'faq',
  'with_front'          => true,
  'pages'               => true,
  'feeds'               => true,
  );

$args = array(
  'label'               => __( 'faq', 'bbwp-faq-languaje' ),
  'description'         => __( 'FAQs description', 'bbwp-faq-languaje' ),
  'labels'              => $labels,
  'supports'            => array( 'title', 'editor', 'page-attributes'),
  'taxonomies'          => array( ),
  'hierarchical'        => false,
  'public'              => true,
  'show_ui'             => true,
  'show_in_menu'        => true,
  'show_in_nav_menus'   => true,
  'show_in_admin_bar'   => true,
  'menu_position'       => 5,
  'menu_icon'           => plugins_url() . '/bbwp-faq/img/faq.png',
  'can_export'          => true,
  'has_archive'         => 'faq',
  'exclude_from_search' => false,
  'query_var'           => 'faq',
  'rewrite'             => $rewrite,
  'capability_type'     => 'post',
  );
  
register_post_type('faq', $args);
}

add_action('init', 'bbwp_faq_post_type', 0);
?>