<?php

/**
 * Template Name: Front Page
 */
get_header();
if (have_posts()) :



	$category_posts = get_transient('homepage_category_posts');

	get_template_part('template-parts/front-page/hero', 'banner');
	get_template_part('template-parts/front-page/latest', 'stories');


	$section = 1;
	if (is_array($category_posts) && count($category_posts) > 0):
		foreach ($category_posts as $catData):
			get_template_part('template-parts/front-page/category', 'stories', $catData);

			if ($section == 1):
				get_template_part('template-parts/front-page/visual', 'stories');
			elseif ($section == 2):
				get_template_part('template-parts/front-page/video', 'shorts');
			elseif ($section == 3):
				get_template_part('template-parts/front-page/video', 'stories');
			elseif ($section == 4):
				get_template_part('template-parts/front-page/brand', 'campaign');
			elseif ($section == 5):
				get_template_part('template-parts/front-page/our', 'impact');
			elseif ($section == 6):
				get_template_part('template-parts/front-page/event', 'awards');
			elseif ($section == 7):
				get_template_part('template-parts/front-page/contribution');
			elseif ($section == 8):
				get_template_part('template-parts/front-page/our', 'impact');
			endif;
			$section++;
		endforeach;
	endif;

	//get_template_part('template-parts/front-page/newsletter');
?>
	<section class="section-block seo-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
<?php
endif;
get_footer();
