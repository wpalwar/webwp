<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebWP
 * @since Web WP 1.0
 */

get_header();

if (have_posts()) :

	// Load posts loop.
	while (have_posts()) :
		the_post();
?>
		<section class="webwp__section--banner">
			<div class="container">
				<div class="heading">
					<div class="entry-content">
						<h1 class="entry-title text-uppercase"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</section>

		<section class="webwp__section">
			<div class="container">
				<?php the_content(); ?>
			</div>
			<!-- /.container -->
		</section>
<?php
	endwhile;
endif;

get_footer();
