<?php

/**
 * Helper functions for WP Gutenberg Blocks plugin
 * 
 * @package WP_Gutenberg_Blocks
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get the names of the block folders
 * 
 * @param string $directory Directory path
 * @return array List of folder names
 */
function wpgb_get_block_folders($directory)
{
    $folders = [];

    if (!is_dir($directory)) {
        return $folders;
    }

    $items = scandir($directory);

    foreach ($items as $item) {
        if ($item !== '.' && $item !== '..' && is_dir($directory . '/' . $item)) {
            $folders[] = $item;
        }
    }

    return $folders;
}
