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
 * @subpackage webwp
 * @since webwp 1.0
 */

get_header();

if (have_posts()) :

	while (have_posts()) :
		the_post();

		$article_id = get_the_ID();
		$categories   = get_the_category($article_id);
		$authorID     = get_the_author_meta('ID');
		$article_name = get_the_title();
		$author_name  = get_the_author_meta('display_name', $authorID);
		$publish_date     = get_the_date(get_option('date_format'), $article_id);
?>

		<article <?php post_class(array('article-wrapper')); ?> id="post-<?php the_ID(); ?>" >
			<div class="container">
				<div class="entry-container" id="webwp__article_content">
					<h1 class="entry-title text-center" id="article-title" itemprop="headline"><?php the_title(); ?></h1>
					<div class="article-meta-info text-center">
						<div class="author-bio" itemprop="author" itemscope itemtype="https://schema.org/Person">
							By <a data-element="author" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" title="<?php echo esc_attr(get_the_author()); ?>" itemprop="url">
								<span itemprop="name"><?php the_author(); ?></span>
							</a>
						</div><!-- .author-bio -->
						<div class="post-date">
							<time itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
						</div><!-- /.post-date -->
					</div><!-- /.article-meta-info -->

					<div class="article-thumbnail" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
						<?php

						$thumbnail_id = get_post_thumbnail_id($post->ID);

						if ($thumbnail_id):
							$thumbnail_mobileurl = wp_get_attachment_image_url($thumbnail_id, 'large');
							$thumbnail_desktopurl = wp_get_attachment_image_url($thumbnail_id, 'full');
							$thumbnail_meta = wp_get_attachment_metadata($thumbnail_id);


							if (wp_is_mobile()) {
								echo '<img src="' . $thumbnail_mobileurl . '" alt="' . esc_attr(get_the_title($post->ID)) . '" itemprop="url" loading="lazy" class="thumbnail-item">';
							} else {
								echo '<img src="' . $thumbnail_desktopurl . '" alt="' . esc_attr(get_the_title($post->ID)) . '" itemprop="url" loading="lazy" class="thumbnail-item">';
							}

							echo '<meta itemprop="width" content="' . $thumbnail_meta['width'] . '">';
							echo '<meta itemprop="height" content="' . $thumbnail_meta['height'] . '">';

						endif;
						?>
					</div>

					<div class="entry-content" itemprop="articleBody">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</article>
		<!-- /.webwp__wrapper -->
<?php
	endwhile;
endif;
get_footer();
