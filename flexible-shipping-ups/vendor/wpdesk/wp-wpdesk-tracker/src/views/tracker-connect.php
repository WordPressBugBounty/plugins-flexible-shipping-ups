<?php if ( ! defined( 'ABSPATH' ) ) {
	exit; } ?>
<div id="wpdesk_tracker_connect" class="plugin-card">
	<div class="message plugin-card-top">
		<span class="wpdesk-logo"></span>

		<p>
			<?php printf( esc_html__( 'Hey %s,', 'wpdesk-tracker' ), esc_html( $username ) ); ?><br/>
			<?php esc_html_e( 'Please help us improve our plugins! If you opt-in, we will collect some non-sensitive data and usage information anonymously. If you skip this, that\'s okay! All plugins will work just fine.', 'wpdesk-tracker' ); ?>
		</p>
	</div>

	<div class="actions plugin-card-bottom">
		<a id="wpdesk_tracker_allow_button" href="<?php echo esc_url( $allow_url ); ?>" class="button button-primary button-allow button-large"><?php esc_html_e( 'Allow & Continue &rarr;', 'wpdesk-tracker' ); ?></a>
		<a href="<?php echo esc_url( $skip_url ); ?>" class="button button-secondary"><?php esc_html_e( 'Skip', 'wpdesk-tracker' ); ?></a>
		<div class="clear"></div>
	</div>

	<div class="permissions">
		<a class="trigger" href="#"><?php esc_html_e( 'What permissions are being granted?', 'wpdesk-tracker' ); ?></a>

		<div class="permissions-details">
			<ul>
				<li id="permission-site" class="permission site">
					<i class="dashicons dashicons-admin-settings"></i>
					<div>
						<span><?php esc_html_e( 'Your Site Overview', 'wpdesk-tracker' ); ?></span>
						<p><?php esc_html_e( 'WP version, PHP info', 'wpdesk-tracker' ); ?></p>
					</div>
				</li>
				<li id="permission-events" class="permission events">
					<i class="dashicons dashicons-admin-plugins"></i>
					<div>
						<span><?php esc_html_e( 'Plugin Usage', 'wpdesk-tracker' ); ?></span>
						<p><?php esc_html_e( 'Current settings and usage information of WP Desk plugins', 'wpdesk-tracker' ); ?></p>
					</div>
				</li>
				<li id="permission-store" class="permission store">
					<i class="dashicons dashicons-store"></i>
					<div>
						<span><?php esc_html_e( 'Your Store Overview', 'wpdesk-tracker' ); ?></span>
						<p><?php esc_html_e( 'Anonymized and non-sensitive store usage information', 'wpdesk-tracker' ); ?></p>
					</div>
				</li>
			</ul>

			<div class="terms">
				<a href="<?php echo esc_url( $terms_url ); ?>" target="_blank"><?php esc_html_e( 'Find out more &raquo;', 'wpdesk-tracker' ); ?></a>
			</div>
		</div>
	</div>
</div>
