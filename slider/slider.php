<?php

class Slider extends BaseBlock {
    const BLOCK_NAME = 'slider';
    const BLOCK_PARAMS = array('title' => 'Slider',
                               'description' => 'Slider',
                               'category' => 'formatting',
                               'icon' => 'admin-comments',
                               'keywords' => [ 'image', self::BLOCK_NAME ]);
    const FIELD_GROUP_PARAMS = array('key' => self::BLOCK_NAME,
                                     'title' => 'Slider',
                                     'fields' => [],
                                     'location' => [[['param' => 'block', 'operator' => '==', 'value' => "acf/". self::BLOCK_NAME]]]);
    const FIELDS_PARAMS = array('parent' => self::BLOCK_NAME,
                                'key' => 'slide',
                                'label' => 'slide',
                                'name' => 'slide',
                                'type' => 'repeater',
                                'required' => 1,
                                'min' => 1,
                                'layout' => 'table',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'slide_image',
                                        'label' => 'Image',
                                        'name' => 'image',
                                        'type' => 'image',
                                        'required' => 1,
                                        'return_format' => 'ID',
                                        'preview_size' => 'thumbnail',
                                    ),
                                    array(
                                        'key' => 'slide_title',
                                        'label' => 'Title',
                                        'name' => 'title',
                                        'type' => 'text',
                                        'required' => 1,
                                    )
                                ));

    public function __construct(){
        parent::__construct(self::BLOCK_NAME, self::BLOCK_PARAMS,
                            self::FIELD_GROUP_PARAMS, self::FIELDS_PARAMS);
    }
}
