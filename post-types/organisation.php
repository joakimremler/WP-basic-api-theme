<?php
declare(strict_types=1);
add_action('init', function () {
    register_post_type('organisation', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Organisation'),
            'edit_item' => __('Edit Organisation'),
            'name' => __('Organisation'),
            'search_items' => __('Search Organisation'),
            'singular_name' => __('Organisation'),
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 20,
        'public' => true,
    ]);
});

