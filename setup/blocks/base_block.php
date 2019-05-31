<?php

abstract class BaseBlock {
    public function __construct(){
        $this->validate_required_constants();
        $this->register();
    }

    protected function register(){
        if( function_exists('create_acf_block') ) {
            create_acf_block($this->name(), $this->params());
        }

        if( function_exists('acf_add_local_field_group') ) {
            acf_add_local_field_group($this->groupParams());
        }

        if( function_exists('acf_add_local_field') ) {
            acf_add_local_field($this->fieldsParams());
        }
    }

    protected function validate_required_constants() {
        $caller = get_called_class();
        $required = ["$caller::NAME", "$caller::PARAMS", "$caller::FIELD_GROUP_PARAMS", "$caller::FIELDS_PARAMS"];

        foreach ($required as $const) {
            if (!defined($const)) {
                throw new Exception("$const constant must be implemented in $caller class.");
            }
        }

        return true;
    }

    protected function name(): string {
        return self::NAME;
    }
    protected function params(): array {
        return self::PARAMS;
    }
    protected function groupParams(): array {
        return self::FIELD_GROUP_PARAMS;
    }
    protected function fieldsParams(): array {
        return self::FIELDS_PARAMS;
    }

    public static function enqueue_styles() {
        wp_register_style("wordless-gutenberg-blocks", stylesheet_url("blocks"), false, false);
        wp_enqueue_style("wordless-gutenberg-blocks");
    }
}
