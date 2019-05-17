<?php

class BaseBlock {
    public function __construct($block_name = '', $block_params = array(), $group_params = array(), $fields_params = array()){

        if (empty($block_name) || empty($block_params) || empty($group_params) || empty($fields_params)) {
            return;
        }

        if( function_exists('create_acf_block') ) {
            create_acf_block($block_name, $block_params);
        }

        if( function_exists('acf_add_local_field_group') ) {
            acf_add_local_field_group($group_params);
        }

        if( function_exists('acf_add_local_field') ) {
            acf_add_local_field($fields_params);

        }
    }

    public function blocks_styles() {
        wp_register_style("blocks", stylesheet_url("blocks"), false, false);
        wp_enqueue_style("blocks");
    }
}
