<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package cbasic
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function cbasic_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'cbasic_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function cbasic_jetpack_setup
add_action( 'after_setup_theme', 'cbasic_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function cbasic_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function cbasic_infinite_scroll_render
