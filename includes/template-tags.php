<?php

/**
 * Site Logo
 */
function webwp_logo()
{
	$logo = WEBWP_BASE . 'wpsbs.jpg';
	echo wp_sprintf('<a class="logo" href="%s"><img src="%s" alt="%s" class="site-logo" width="66" height="66" /> <img src="%s" alt="%s" width="66" height="66" class="hover-logo" /></a>', esc_url(home_url('/')), $logo, get_bloginfo('name'), $logo, get_bloginfo('name'));
}

/**
 * Site Logo
 *
 * @return void
 */
function webwp_favicon()
{
	$siteFavIconUrl = WEBWP_URL . 'favicon.png';
	echo wp_sprintf('<link rel="shortcut icon" href="%s" type="image/x-icon"><link rel="icon" href="%s" type="image/x-icon">', $siteFavIconUrl, $siteFavIconUrl);
}



/**
 * Get Clean Text
 */
function webwp__txt($data = '')
{
	return wp_unslash(wp_specialchars_decode(wp_kses_stripslashes($data)));
}

/**
 * Get Clean Text
 */
function webwp__txt_only($data = '')
{
	return wp_strip_all_tags(wp_unslash(wp_specialchars_decode(wp_kses_stripslashes($data))));
}

/**
 * Header Classes
 */
function webwp__header_classes()
{
	if (is_home()) :
		echo 'webwp__header--home';

	elseif (is_front_page()) :
		echo 'webwp__header--front';

	elseif (is_category() || is_tag() || is_author() || is_post_type_archive() || is_tax() || is_archive() || is_search()) :
		echo 'webwp__header--archive';

	else :
		echo 'webwp__header--normal';

	endif;
}


/**
 * Heading
 */
function webwp__heading($label)
{
	echo wp_sprintf('<div class="webwp__title"><h2 class="webwp__title--txt" >%s</h2></div>', esc_attr($label));
}


/**
 * Story Read Time
 */
function webwp__read_time($content)
{
	$wordCount   = str_word_count(strip_tags($content));
	$readingtime = ceil($wordCount / 200);
	return $readingtime . ' Min Read';
}

/**
 * Get trimed text
 */
function webwp__trim_txt($content, $limit = 100)
{
	$txtCount = strlen($content);
	return ($txtCount > $limit) ? substr($content, 0, $limit) . ' ...' : $content;
}
/**
 * Archive Title
 */
function webwp__archive_title($title)
{
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	} elseif (is_tax()) {
		$title = single_term_title('', false);
	}

	return $title;
}

add_filter('get_the_archive_title', 'webwp__archive_title');
