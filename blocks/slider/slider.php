<?php

class Slider extends BaseBlock {
    const NAME = 'slider';
    const PARAMS = [
        'title' => 'Slider',
        'description' => 'Slider',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => [ 'image', self::NAME ]
    ];
    const FIELD_GROUP_PARAMS = [
        'key' => self::NAME,
        'title' => 'Slider',
        'fields' => [],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => "acf/". self::NAME]]]
    ];
    const FIELDS_PARAMS = [[
        'parent' => self::NAME,
        'key' => 'slide',
        'label' => 'slide',
        'name' => 'slide',
        'type' => 'repeater',
        'required' => 1,
        'min' => 1,
        'layout' => 'table',
        'sub_fields' => [
            [
                'key' => 'slide_image',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'required' => 1,
                'return_format' => 'ID',
                'preview_size' => 'thumbnail',
            ],
            [
                'key' => 'slide_title',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'required' => 1,
            ]
        ]
    ]];
}
