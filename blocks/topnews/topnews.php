<?php

class Topnews extends BaseBlock {
    const NAME = 'topnews';
    const PARAMS = [
        'title' => 'Top News',
        'description' => 'Top News',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => [ 'image', self::NAME ]
    ];
    const FIELD_GROUP_PARAMS = [
        'key' => self::NAME,
        'title' => 'Top News',
        'active' => true,
        'fields' => [],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => "acf/". self::NAME]]]
    ];

    const FIELDS_PARAMS = [[
        'parent' => self::NAME,
        'key' => 'topnews',
        'label' => 'Top News',
        'name' => 'topnews',
        'type' => 'relationship',
        'required' => 1,
        'post_type' => [0 => 'post'],
        'filters' => [0 => 'search'],
        'elements' => [0 => 'featured_image'],
        'min' => 3,
        'max' => 3,
        'return_format' => 'object',
    ]];
}

