<?php

/**
 * Plugin Name: Mi Bloque Gutenberg
 */

function init_blocks()
{
    register_block_type(__DIR__ . '/build/blocks/hello-world');
}

add_action('init', 'init_blocks');
