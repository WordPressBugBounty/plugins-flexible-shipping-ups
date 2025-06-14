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

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WPDesk_Tracker_Data_Provider_Gateways' ) ) {

	/**
	 * Class WPDesk_Tracker_Data_Provider_Gateways
	 */
	class WPDesk_Tracker_Data_Provider_Gateways implements WPDesk_Tracker_Data_Provider {

		/**
		 * Get a list of all active payment gateways.
		 *
		 * @return array Data provided to tracker.
		 */
		public function get_data() {
			$active_gateways = [];
			$gateways        = WC()->payment_gateways->payment_gateways();
			foreach ( $gateways as $id => $gateway ) {
				if ( isset( $gateway->enabled ) && 'yes' === $gateway->enabled ) {
					$active_gateways[ $id ] = [
						'title'    => $gateway->title,
						'supports' => $gateway->supports,
					];
				}
			}

			return [ 'gateways' => $active_gateways ];
		}
	}

}
