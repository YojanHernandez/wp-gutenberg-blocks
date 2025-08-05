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

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(__FILE__) . 'inc/helpers.php';

/**
 * Plugin initialization
 * This function is called when WordPress is ready to register blocks.
 */
function init_blocks()
{
    // Auto-detectar carpetas de bloques
    $blocks_src_dir = plugin_dir_path(__FILE__) . 'src/blocks';
    $block_folders = wpgb_get_block_folders($blocks_src_dir);

    if (empty($block_folders)) {
        error_log("No blocks found in: {$blocks_src_dir}");
        return;
    }

    foreach ($block_folders as $block_name) {
        $block_build_path = plugin_dir_path(__FILE__) . '/build/blocks/' . $block_name;

        if (file_exists($block_build_path . '/block.json')) {
            register_block_type($block_build_path);
        } else {
            error_log("Block missing block.json: {$block_name} at {$block_build_path}");
        }
    }
}

add_action('init', 'init_blocks');
