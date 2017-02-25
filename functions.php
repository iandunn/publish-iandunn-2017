<?php

namespace Ian_Dunn_Name\Publish_2017;
use WP_Post;

add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts'       );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts'          );
add_action( 'widgets_init',       __NAMESPACE__ . '\register_widget_areas'    );
add_filter( 'the_content',        __NAMESPACE__ . '\show_excerpts'            );
add_filter( 'body_class',         __NAMESPACE__ . '\add_comment_body_classes' );

/**
 * Enqueue scripts and styles
 */
function enqueue_scripts() {
	if ( ! is_admin() ) {
		wp_enqueue_style(
			'publish-parent-style',
			get_template_directory_uri() . '/style.css'
		);
	}

	wp_enqueue_style(
		'iandunn-google-fonts',
		'https://fonts.googleapis.com/css?family=Libre+Baskerville|Muli:300,300i,700,700i'
	);
}

/**
 * Register widget areas
 */
function register_widget_areas() {
	register_sidebar( array(
		'name'          => 'Footer - Left',
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => 'Footer - Right',
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

/**
 * Show excerpts instead of full posts on non-singular screens
 *
 * Doing this with a filter allows us to avoid having to overwrite the entire `content.php` template.
 *
 * @param string $content
 *
 * @return string
 */
function show_excerpts( $content ) {
	if ( is_singular() ) {
		return $content;
	}

	remove_filter( 'the_content', __NAMESPACE__ . '\show_excerpts' ); // avoid infinite recursion
	$content = get_the_excerpt();
	add_filter( 'the_content', __NAMESPACE__ . '\show_excerpts' );

	$words_array = preg_split( "/[\n\r\t ]+/", $content, -1, PREG_SPLIT_NO_EMPTY );

	if ( count( $words_array ) > apply_filters( 'excerpt_length', 55 ) ) {
		$content .= sprintf( '<p class="read-more"><a href="%s">Continue reading...</a></p>', get_the_permalink() );
	}

	return $content;
}

/**
 * Add CSS classes to the <body> element related to comments
 *
 * @param array $classes
 *
 * @return array
 */
function add_comment_body_classes( $classes ) {
	global $post;

	/*
	 * `body_class()` escapes `$classes`, but _before_ it applies the filter, so we need to escape anything we
	 * add to the array.
	 */
	if ( $post instanceof WP_Post ) {
		$classes[] = esc_attr( "comment-status-{$post->comment_status}" );
		$classes[] = esc_attr( "comment-count-{$post->comment_count}"   );
	}

	return $classes;
}
