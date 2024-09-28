<?php

/**
 * Functions and definitions
 *
 * @package WebWP
 * @since Web WP 1.0.0
 */

if (! function_exists('webwp_setup')) {
	function webwp_setup()
	{
		register_nav_menus(
			array(
				'primary'   => esc_html__('Primary', 'webwp'),
				'secondary' => esc_html__('Secondary', 'webwp'),
			)
		);

		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
				'search-form',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('customize-selective-refresh-widgets');
		add_theme_support('amp');
		add_theme_support('wp-block-styles');
		add_theme_support('align-wide');
		add_theme_support('editor-styles');
		add_theme_support('responsive-embeds');
		add_theme_support('custom-line-height');
		add_theme_support('experimental-link-color');
		add_post_type_support('page', 'excerpt');
	}
}
add_action('after_setup_theme', 'webwp_setup');

(defined('WEBWP_URL')) || define('WEBWP_URL', trailingslashit(get_template_directory_uri()));
(defined('WEBWP_PATH')) || define('WEBWP_PATH', trailingslashit(get_template_directory()));
(defined('WEBWP_BASE')) || define('WEBWP_BASE', trailingslashit(WEBWP_URL . 'public'));

/**
 * Supporting Files
 */

require_once WEBWP_PATH . 'includes/index.php';
require_once WEBWP_PATH . 'includes/ajax-handlers/index.php';


/**
 * Enqueue scripts and styles.
 *
 * @since Web WP 1.0.0
 *
 * @return void
 */
function webwp_scripts()
{
	require_once WEBWP_PATH . 'includes/enqueue.php';
}
add_action('wp_enqueue_scripts', 'webwp_scripts');


/**
 * Render Footer Addon Data
 *
 * @since Web WP 1.0.0
 *
 * @return void
 */
function webwp_render_footer_addons()
{
?>
	<script>
		if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
			document.body.classList.add('is-IE');
		}
	</script>
<?php
}
add_action('wp_footer', 'webwp_render_footer_addons');


/**
 * Allow SVG File Upload
 */
function webwp_allow_img_types($mimes)
{
	$mimes['svg'] = 'image/svg';
	return $mimes;
}

add_filter('upload_mimes', 'webwp_allow_img_types');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function webwp_excerpt_length($length)
{
	if (is_admin()) {
		return $length;
	}
	return 30;
}
add_filter('excerpt_length', 'webwp_excerpt_length', 999);

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
add_filter('excerpt_more', function () {
	return '';
});


/**
 * Admin Block CSS
 */
function webwp_render_block_style()
{
	echo '<style>.wp-block{border: 1px solid #c1c1c1;padding:5px;} </style>';
}
add_action('admin_head', 'webwp_render_block_style');



/**
 * Nav Menu Item
 *
 * @param [type] $classes
 * @param [type] $item
 * @param [type] $args
 * @param [type] $depth
 * @return void
 */
function webwp__nav_class($classes, $item, $args, $depth)
{
	if ('primary' === $args->theme_location) :
		$classes[] = 'primary-menu-item';
	elseif ('secondary' === $args->theme_location) :
		$classes[] = 'secondary-menu-item';
	elseif ('mobile' === $args->theme_location) :
		$classes[] = 'mobile-menu-item';
	elseif ('footer' === $args->theme_location) :
		$classes[] = 'footer-menu-item';
	endif;

	return $classes;
}
add_filter('nav_menu_css_class', 'webwp__nav_class', 10, 4);
