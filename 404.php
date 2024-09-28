<?php

/**
 * The template for displaying 404 pages (Not Found)
 */
get_header();
?>

<section class="webwp__section webwp__page--404 text-center">
	<div class="container">
		<div class="description text-center">
			<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'webwp' ); ?></h2>
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'webwp' ); ?></p>
			<div class="btn-wrapper text-center">
				<a href="<?php echo home_url( '/' ); ?>" class="link">Back to Home</a>
			</div>
		</div>

	</div>
</section>
<?php
get_footer();
