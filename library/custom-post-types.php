<?php
if (!function_exists('massage_create_post_types')) :
    function massage_create_post_types()
    {
        register_post_type(
            'massage_service',
            array('labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail'),
             'taxonomies' => array('genres'),
            // 'taxonomies' => array('category', 'post_tag'),
            // 'register_meta_box_cb' => 'dance_post_class_meta_box'
        )
        );
        register_post_type(
            'massage_team',
            array('labels' => array(
                'name' => __('Workers'),
                'singular_name' => __('Team')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail'),
             'taxonomies' => array('genres'),
        )
        );
    }
endif;
add_action('init', 'massage_create_post_types');

?>


