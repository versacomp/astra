<?php
/**
 * Index Functions.
 *
 * @package Astra
 * @since 1.0.0
 */


/**
 * Index Template Part
 *
 * => Used in files:
 *
 * /index.php
 *
 * @since 1.0.0
 */
function astra_index_content_template() {
	/*
	 * Include the Post-Format-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	 */
	get_template_part( 'template-parts/content', astra_get_post_format() );
}

/**
 * Index Template Else Part
 *
 * => Used in files:
 *
 * /index.php
 *
 * @since 1.0.0
 */
function astra_index_content_else_template() {

	get_template_part( 'template-parts/content', 'none' );
}