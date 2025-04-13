<?php

/**
 * Blocksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blocksy
 */

if (version_compare(PHP_VERSION, '5.7.0', '<')) {
	require get_template_directory() . '/inc/php-fallback.php';
	return;
}

require get_template_directory() . '/inc/init.php';

function blocksy_register_new_navigation()
{
	register_nav_menu('social_navigation', __('Social Navigation', 'blocksy'));
}
add_action('after_setup_theme', 'blocksy_register_new_navigation');
