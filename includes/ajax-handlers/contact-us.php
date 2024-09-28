<?php
function webwp__contact__callback() {
	check_ajax_referer( 'WEBWP_NONCE', 'security' );
	if ( isset( $_POST['name'] ) && isset( $_POST['email'] ) ) :

		$name    = sanitize_text_field( $_POST['name'] );
		$email   = sanitize_email( $_POST['email'] );
		$phone   = sanitize_text_field( $_POST['phone'] );
		$message = sanitize_textarea_field( $_POST['message'] );

		global $wpdb;
		$tblContactUs = $wpdb->prefix . 'contact_us';

		$wpdb->insert(
			$tblContactUs,
			array(
				'name'       => webwp__txt( $name ),
				'email'      => webwp__txt( $email ),
				'contactno'  => webwp__txt( $phone ),
				'message'    => webwp__txt( $message ),
				'created_at' => date( 'Y-m-d H:i:s', time() ),
			)
		);

		add_filter( 'wp_mail_content_type', 'webwp__set_html_mail_content_type' );

		ob_start();
		get_template_part(
			'includes/email-templates/contact',
			'us',
			array(
				'name'    => $name,
				'email'   => $email,
				'phone'   => $phone,
				'message' => $message,
			)
		);
		$output = ob_get_clean();

		wp_mail(get_option('admin_email'),'Contact Us | Web WP',$output);
		remove_filter( 'wp_mail_content_type', 'webwp__set_html_mail_content_type' );

	endif;

	wp_die( 'Thank you for your message. We will be in touch with you shortly!' );
}
add_action( 'wp_ajax_nopriv_webwp__contact', 'webwp__contact__callback' );
add_action( 'wp_ajax_webwp__contact', 'webwp__contact__callback' );
