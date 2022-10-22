<?php
/**
Plugin Name: Snippethof
**/

function snippets_post_type() {
    register_post_type( 'snippets',
        array(
            'labels' => array(
                'name' => __( 'snippets' ),
                'singular_name' => __( 'Snippet' )
            ),
            'public' => true,
            'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite'   => array( 'slug' => 'snippets' ),
            'menu_position' => 5,
        'menu_icon' => 'dashicons-editor-code',
        // 'taxonomies' => array('cuisines', 'post_tag') // this is IMPORTANT
        )
    );
}
add_action( 'init', 'snippets_post_type' );
