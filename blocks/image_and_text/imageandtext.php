<?php

class Imageandtext extends BaseBlock {
    const NAME = 'Imageandtext';
    const PARAMS = [
        'title' => 'Image plus Text',
        'description' => 'Image plus Text',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => [ 'image', self::NAME ]
    ];
    const FIELD_GROUP_PARAMS = [
        'key' => self::NAME,
        'title' => 'Image + Text',
        'active' => true,
        'fields' => [],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => "acf/". self::NAME]]]
    ];
    const FIELDS_PARAMS = [[
        'parent' => self::NAME,
        'key' => 'imgtxtimage',
        'label' => 'Image',
        'name' => 'imgtxtimage',
        'type' => 'image'
    ],[
        'parent' => self::NAME,
        'key' => 'imgtxttitle',
        'label' => 'Title',
        'name' => 'imgtxttitle',
        'type' => 'text'
    ],[
        'parent' => self::NAME,
        'key' => 'imgtxtsubtitle',
        'label' => 'Subtitle',
        'name' => 'imgtxtsubtitle',
        'type' => 'text'
    ],[
        'parent' => self::NAME,
        'key' => 'imgtxthighlight',
        'label' => 'Highlight',
        'name' => 'imgtxthighlight',
        'type' => 'textarea'
    ],[
        'parent' => self::NAME,
        'key' => 'imgtxtcontent',
        'label' => 'Content',
        'name' => 'imgtxtcontent',
        'type' => 'textarea'
    ], [
        'parent' => self::NAME,
        'key' => 'imgtxtorder',
        'label' => 'Order',
        'name' => 'imgtxtorder',
        'type' => 'radio',
        'choices' => [
            'imgtext' => 'Image and text',
            'textimg' => 'Text and image'
        ]
    ]];
}
