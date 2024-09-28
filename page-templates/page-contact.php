<?php

/**
 * Template Name: Contact Us
 */
get_header();
if (have_posts()) :
?>
	<section class="webwp__section--inner-blue-banner">
		<div class="container">
			<div class="webwp__row  d-flex flex-wrap">
				<div class="blue-banner-heading _contact-heading">
					<h1 class="entry-title">Get in Touch!</h1>
					<p class="sub-heading">Have something really inspiring to talk about? </p>
					<div class="contact-information">

						<div class="info">
							<a href="https://community.webwp.com/" class="info-community d-block text-white mb-2">
								<div class="info-heading mb-0">
									<div class="icon"><img src="<?php echo esc_url(WEBWP_BASE); ?>/icons/community-2.png" alt="Web WP Community icon" title="Web WP Community" width="32" height="32" /></div>
									<h5>Join Community</h5>
								</div>
								<p class="mb-0">Start Conversation</p>
							</a>
							<a href="mailto:contact@webwp.com" class="text-white info-email">
								<div class="info-heading">
									<div class="icon"><img src="<?php echo esc_url(WEBWP_BASE); ?>noun-email.svg" alt="Web WP email icon" title="Web WP" width="36" height="26" /></div>
									<h5>Email us</h5>
								</div>
								<p>contact@webwp.com</p>
							</a>
						</div>
						<div class="info">
							<div class="info-heading">
								<div class="icon"><img src="<?php echo esc_url(WEBWP_BASE); ?>noun-location.svg" alt="" title="Web WP" width="25" height="33" /></div>
								<h5>Our location</h5>
							</div>
							<p>
								WeWork Latitude, 9th floor, RMZ Latitude Commercial,
								Bellary Road, Hebbal, Near Godrej Apt,
								Bangalore Karnataka 560024
							</p>
						</div>
						<!--end-->
					</div>
					<!--end-->
				</div>
			</div>
		</div>
		<!-- /.container -->
	</section>

	<section class="webwp__section webwp__section--contact-page space__top mb-0">
		<div class="container">
			<div class="webwp__row">
				<h2 class="primary-color text-center mb-2">Reach Out To Us Privately!</h2>
				<div class="contact-form mt-1 d-flex flex-wrap">
					<div class="tabs strach-full float-left">
						<form action="<?php echo esc_url(home_url('/')); ?>" class="_form strach-full d-flex" method="POST" id="webwp__contact--form">
							<div class="field strach-full mb-1">
								<label class="strach-full float-left mb-1" for="">Name</label>
								<input type="text" placeholder="Your Name" class="webwp__contact--field strach-full" name="txtname" id="txtname" required>
							</div>
							<!--end-->
							<div class="field strach-full mb-1">
								<label class="strach-full float-left mb-1" for="">Email</label>
								<input type="email" placeholder="Your Working Email" class="webwp__contact--field strach-full" name="txtemail" id="txtemail" required>
							</div>
							<!--end-->
							<div class="field strach-full mb-1">
								<label class="strach-full float-left mb-1" for="">Phone No.</label>
								<input type="text" placeholder="Your Phone No." class="webwp__contact--field strach-full" name="txtphone" id="txtphone" required>
							</div>
							<!--end-->
							<div class="field strach-full  mb-1 _full">
								<label class="strach-full float-left mb-1" for="">Your Message</label>
								<textarea placeholder="Type your message here…" class="webwp__contact--field strach-full" name="txtmessage" id="txtmessage" required></textarea>
							</div>
							<div class="field strach-full  mb-1 _full">
								<p>For all advertisement related queries, please <a href="<?php echo home_url('/advertise-with-us'); ?>">click here</a></p>
							</div>
							<div class="field strach-full  mb-1 _full">
								<button class="webwp__btn--link contact-form-submit mb-2" data-contact="submit">SUBMIT</button>
							</div>
							<div class="field strach-full  mb-1 _full" data-contact="message">
							</div>

						</form>

					</div>
					<!--end-->
				</div>
			</div>

		</div>
		<!-- /.container -->
	</section>

<?php
endif;
get_footer();
