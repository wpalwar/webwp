<?php

/**
 * Template Name: Full Width
 */
get_header();
if ( have_posts() ) :
	?>
	<section class="webwp__section--inner-banner webwp__banner">
		<div class="container">
			<div class="heading">
				<div class="entry-content">
					<h1 class="entry-title text-uppercase"><?php the_title(); ?></h1>
					<div class="webwp__page--content">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
		<div class="bgAnimation">
			<div class="circle_box">
				<div class="circle delay1"></div>
				<div class="circle delay2"></div>
				<div class="circle delay3"></div>
				<div class="circle delay4"></div>
			</div>
		</div>
	</section>
	<main class="webwp__full-width space__top">
		<?php the_content(); ?>
	</main>
	<!-- /.webwp__full-width -->
	<?php
endif;
get_footer();
