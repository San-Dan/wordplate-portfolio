<?php

declare(strict_types=1);

/**
 * Register the latest posts block
 */

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name'              => 'latest-posts',
            'title'             => __('Latest posts'),
            'description'       => __('A block that displays a selected number of posts, in descending order.'),
            'render_template'   => 'block-templates/latest-posts.php',
            'category'          => 'formatting',
            'icon'              => 'megaphone',
            'keywords'          => ['posts'],
        ]);
    }
});

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        'key' => 'latest_posts',
        'title' => 'Latest Posts',
        'fields' => [
            [
                'key' => 'latest_posts_post_type',
                'name' => 'latest_posts_post_type',
                'label' => 'Post Type',
                'type' => 'select',
                'choices' => [
                    'post' => 'post',
                    'project' => 'project',
                ],
            ],
            [
                'key' => 'latest_posts_number_of_posts',
                'name' => 'latest_posts_number_of_posts',
                'label' => 'Number of Posts',
                'type' => 'number',
                'default_value' => 3,
                'min' => 1,
                'max' => 3,
            ],
            /*[
                'key' => 'latest_posts_bg_color',
                'name' => 'latest_posts_bg_color',
                'label' => 'Blocks Background Color',
                'type' => 'select',
                'choices' => [
                    'grey' => 'Grey',
                    'white' => 'White',
                ],
            ],*/
            [
                'key' => 'latest_posts_link_to_archive',
                'name' => 'latest_posts_link_to_archive',
                'label' => 'Link to post type archive',
                'type' => 'page_link',
                'post_type' => 'page',
                'allow_null' => true,
            ],
            [
                'key' => 'latest_posts_link_label',
                'name' => 'latest_posts_link_label',
                'label' => 'Link Label',
                'type' => 'text',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/latest-posts',
                ],
            ],
        ],
    ]);
}
