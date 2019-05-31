<?php
// Includes all blocks files
Wordless::require_once_dir(Wordless::join_paths(__DIR__, 'blocks'));

function create_blocks() {
    // Put here the blocks activation lines, e.g.:
    // new MyCustomBlock()

    // load blocks stylesheets
    BaseBlock::enqueue_styles();
}


add_action('acf/init', 'create_blocks');
