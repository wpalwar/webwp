<?php
$today = strtotime('now');
wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');

wp_enqueue_style('main', WEBWP_BASE . 'styles/main.css', array(), $today);
wp_enqueue_script('app', WEBWP_BASE . 'scripts/app.js', array('jquery'), $today, true);

if (is_single() && is_singular('post')) :
	wp_enqueue_style('story', WEBWP_BASE . 'styles/story.css', array(), $today);
	wp_enqueue_script('articles', WEBWP_BASE . 'scripts/article.js', array('jquery'), $today, true);
elseif (is_front_page()):
	wp_enqueue_style('home', WEBWP_BASE . 'styles/home.css', array(), $today);
elseif (is_archive() || is_home() || is_category() || is_search()):
	wp_enqueue_style('archive', WEBWP_BASE . 'styles/archive.css', array(), $today);
endif;
