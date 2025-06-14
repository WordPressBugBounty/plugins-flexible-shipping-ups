<?php
/**
 * WP Desk Tracker
 *
 * @class        WPDESK_Tracker
 * @version        1.3.2
 * @package        WPDESK/Helper
 * @category    Class
 * @author        WP Desk
 */

use Psr\Log\LoggerInterface;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WPDesk_Tracker_Factory_Prefixed' ) ) {

	/**
	 * Can create and build tracker instance.
	 *
	 * Class WPDesk_Tracker_Factory
	 */
	class WPDesk_Tracker_Factory_Prefixed {

		/** @var LoggerInterface|null */
		private $logger;

		public function __construct( ?LoggerInterface $logger = null ) {
			$this->logger = $logger;
		}

		/**
		 * Builds tracker instance.
		 *
		 * @param string $basename Plugin basename.
		 *
		 * @return WPDesk_Tracker built tracker.
		 */
		private function build_tracker( $basename ) {
			$sender = apply_filters( 'wpdesk/tracker/sender/' . $basename, new WPDesk_Tracker_Sender_Wordpress_To_WPDesk() );
			$sender = new WPDesk_Tracker_Sender_Logged(
				$sender instanceof WPDesk_Tracker_Sender ? $sender : new WPDesk_Tracker_Sender_Wordpress_To_WPDesk(),
				$this->logger
			);

			$tracker = new WPDesk_Tracker(
				$basename,
				$sender
			);
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Gateways() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Identification() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Identification_Gdpr() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Jetpack() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_License_Emails() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Orders() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Orders_Country() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Orders_Month() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Plugins() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Products() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Products_Variations() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Server() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Settings() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Shipping_Classes() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Shipping_Methods() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Shipping_Methods_Zones() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Templates() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Theme() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_User_Agent() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Users() );
			$tracker->add_data_provider( new WPDesk_Tracker_Data_Provider_Wordpress() );

			$tracker->init_hooks();

			return $tracker;
		}

		/**
		 * Creates tracker instance.
		 *
		 * @param string $basename Plugin basename.
		 *
		 * @return WPDesk_Tracker created tracker.
		 */
		public function create_tracker( $basename ) {
			$tracker = $this->build_tracker( $basename );
			do_action( 'wpdesk_tracker_initialized', $this );
			return $tracker;
		}
	}
}
