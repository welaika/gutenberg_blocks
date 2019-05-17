<?php
// Includes all blocks files
foreach (glob(__DIR__ .'/blocks/*.php') as $filename)
{
    include $filename;
}


function create_blocks() {
    // Put here the blocks activation lines

    // load blocks stylesheets
    $base_block = new BaseBlock();
    $base_block->blocks_styles();
}



add_action('acf/init', 'create_blocks');
