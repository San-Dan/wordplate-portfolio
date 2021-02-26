<?php

declare(strict_types=1);

if (function_exists('acf_add_options_page')) {
  acf_add_options_page([
    'page_title'   => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ]);
}

if (function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group([
    'key' => 'footer_fields',
    'title' => 'Footer',
    'fields' => [
      [
        'key' => 'email',
        'name' => 'email',
        'label' => 'Email',
        'type' => 'text',
        'wrapper' => [
          'width' => 50,
        ],
      ],
      [
        'key' => 'github',
        'name' => 'github',
        'label' => 'Github',
        'type' => 'url',
        'wrapper' => [
          'width' => 50,
        ],
      ],
      [
        'key' => 'linkedin',
        'name' => 'linkedin',
        'label' => 'LinkedIn',
        'type' => 'url',
        'wrapper' => [
          'width' => 50,
        ],
      ],
      [
        'key' => 'insta',
        'name' => 'insta',
        'label' => 'Instagram',
        'type' => 'url',
        'wrapper' => [
          'width' => 50,
        ],
      ],
      [
        'key' => 'contact_label',
        'name' => 'contact_label',
        'label' => 'Contact',
        'type' => 'text',
        'wrapper' => [
        'width' => 50,
       ],
      ],
      [
        'key' => 'copyright_text',
        'name' => 'copyright_text',
        'label' => 'Copyright',
        'type' => 'text',
        'wrapper' => [
          'width' => 50,
        ],
      ],
    ],
    'location' => [
      [
        [
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'theme-general-settings',
        ],
      ],
    ],
]);
}
