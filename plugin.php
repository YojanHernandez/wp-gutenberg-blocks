<?php

/**
 * Plugin Name: Mi Bloque Gutenberg
 * Description: Un plugin de ejemplo para crear bloques de Gutenberg en WordPress.
 * Version: 0.1.0
 * 
 * Author: Yojan Hernandez
 * Author URI:        https://github.com/YojanHernandez
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-gutenberg-blocks
 */

function init_blocks()
{
    $blocks = [
        'hello-world'
    ];

    foreach ($blocks as $block_name) {

        $block_path = plugin_dir_path(__FILE__) . 'build/blocks/' . $block_name;

        if (is_dir($block_path) && file_exists($block_path . '/block.json')) {
            register_block_type($block_path);
        } else {
            error_log("Block not found or invalid: {$block_name} at {$block_path}");
        }
    }
}

add_action('init', 'init_blocks');
