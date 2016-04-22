<?php
/**
Plugin Name: Tony's Post Types and Taxonomies
Description: A plugin that adds custom post types and taxonomies
Version:     0.1
Author:      Tony Dushkov
License:     GPL2

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
**/
function my_custom_posttypes() {
        $labels = array(
            'name'               => 'Testimonials',
            'singular_name'      => 'Testimonial',
            'menu_name'          => 'Testimonials',
            'name_admin_bar'     => 'Testimonial',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Testimonial',
            'new_item'           => 'New Testimonial',
            'edit_item'          => 'Edit Testimonial',
            'view_item'          => 'View Testimonial',
            'all_items'          => 'All Testimonials',
            'search_items'       => 'Search Testimonials',
            'parent_item_colon'  => 'Parent Testimonials:',
            'not_found'          => 'No testimonials found.',
            'not_found_in_trash' => 'No testimonials found in Trash.',
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'menu_icon'          => 'dashicons-id-alt',
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'testimonials' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 4,
            'supports'           => array( 'title', 'editor', 'thumbnail' )
        );
        register_post_type( 'testimonial', $args );
    }
    add_action( 'init', 'my_custom_posttypes' );
