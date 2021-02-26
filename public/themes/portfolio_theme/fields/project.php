<?php

declare(strict_types=1);

if (function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group([
    'key' => 'project_info',
    'title' => 'Project info',
    'fields' => [
      [
        'key' => 'project_client',
        'name' => 'project_client',
        'label' => 'Client',
        'type' => 'text',
        'instructions' => 'Fill out the client for this project',
      ],
      [
        'key' => 'project_client_website',
        'name' => 'project_client_website',
        'label' => 'Client Website',
        'type' => 'url',
        'instructions' => 'Fill out the client website',
      ],
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'project',
        ],
      ],
    ],
  ]);
}