<?php
/**
 * @Author: Niku Hietanen
 * @Date: 2020-02-18 15:05:35
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2021-05-04 11:13:17
 *
 * @package eom-aca
 */

namespace Eom_Aca;

/**
 * Registers the Your Taxonomy taxonomy.
 *
 * @param Array $post_types Optional. Post types in
 * which the taxonomy should be registered.
 */
class Your_Taxonomy extends Taxonomy {


  public function register( array $post_types = [] ) {
    // Taxonomy labels.
    $labels = [
      'name'                  => _x( 'Your Taxonomies', 'Taxonomy plural name', 'eom-aca' ),
      'singular_name'         => _x( 'Your Taxonomy', 'Taxonomy singular name', 'eom-aca' ),
      'search_items'          => __( 'Search Your Taxonomies', 'eom-aca' ),
      'popular_items'         => __( 'Popular Your Taxonomies', 'eom-aca' ),
      'all_items'             => __( 'All Your Taxonomies', 'eom-aca' ),
      'parent_item'           => __( 'Parent Your Taxonomy', 'eom-aca' ),
      'parent_item_colon'     => __( 'Parent Your Taxonomy', 'eom-aca' ),
      'edit_item'             => __( 'Edit Your Taxonomy', 'eom-aca' ),
      'update_item'           => __( 'Update Your Taxonomy', 'eom-aca' ),
      'add_new_item'          => __( 'Add New Your Taxonomy', 'eom-aca' ),
      'new_item_name'         => __( 'New Your Taxonomy', 'eom-aca' ),
      'add_or_remove_items'   => __( 'Add or remove Your Taxonomies', 'eom-aca' ),
      'choose_from_most_used' => __( 'Choose from most used Taxonomies', 'eom-aca' ),
      'menu_name'             => __( 'Your Taxonomy', 'eom-aca' ),
    ];

    $args = [
      'labels'            => $labels,
      'public'            => false,
      'show_in_nav_menus' => true,
      'show_admin_column' => true,
      'hierarchical'      => true,
      'show_tagcloud'     => false,
      'show_ui'           => true,
      'query_var'         => false,
      'rewrite'           => [
        'slug' => 'your-taxonomy',
      ],
    ];

    $this->register_wp_taxonomy( $this->slug, $post_types, $args );
  }

}
