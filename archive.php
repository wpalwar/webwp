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
 * @since Web WP 1.0.0
 */

get_header();

if (have_posts()) :

?>
	<main class="page-category" id="page_archive">
		<section class="section-block page-header">
			<div class="container">
				<div class="heading">
					<h1 class="entry-title text-uppercase"><text>Read stories on -</text><br /> <?php the_archive_title(); ?></h1>
				</div>
			</div>
		</section>
		<section class="section-block articles">
			<div class="container">
				<?php if (have_posts()) : ?>
					<div class="row">
						<?php
						while (have_posts()) :
							the_post();

							$categories       = get_the_category();
							$article_name     = get_the_title();
							$author_name      = get_the_author_meta('display_name', get_the_author_meta('ID'));
							$article_id       = get_the_ID();					
							$publish_date     = get_the_date(get_option('date_format'), get_the_ID());					

						?>
							<div class="meetup-card" >
								<div class="thumbnail">
									<a href="<?php the_permalink(); ?>" >
										<?php the_post_thumbnail('full', array('class' => 'thumb-story', 'alt' => $article_name . ' image')); ?>
									</a>
								</div>
								<div class="article-content">
									<div class="content-text">
										<span class="terms text-uppercase">
											<?php echo (isset($categories[0])) ? wp_sprintf('<a href="%s" title="%s" class="terms-title">%s</a>', get_term_link($categories[0]), esc_html($categories[0]->name), esc_attr($categories[0]->name)) : ''; ?>
										</span>
										<h3 class="heading"><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									</div>
									<span class="article-meta d-flex">
										<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date('d M Y'); ?></time>
										<label><?php echo webwp__read_time(get_the_content()); ?> </label>
									</span>
								</div>
							</div>
						<?php endwhile; ?>

					</div>
					<div class="row">
						<div class="page-navigation" data-element="pagination">
							<?php the_posts_pagination(array('mid_size' => 2)); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</section>
		<section class="section-block">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<?php the_archive_description(); ?>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php
endif;
get_footer();
