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

if ( ! class_exists( 'WPDesk_Tracker_Data_Provider_Shipping_Methods_Zones' ) ) {

	/**
	 * Class WPDesk_Tracker_Data_Provider_Shipping_Methods_Zones
	 */
	class WPDesk_Tracker_Data_Provider_Shipping_Methods_Zones implements WPDesk_Tracker_Data_Provider {

		/**
		 * Info about shipping methods in zones and by title.
		 *
		 * @return array Data provided to tracker.
		 */
		public function get_data() {
			if ( class_exists( 'WC_Shipping_Zones' ) ) {
				$other_zones = WC_Shipping_Zones::get_zones();
				$zones       = [];
				foreach ( $other_zones as $zone ) {
					$zones[] = WC_Shipping_Zones::get_zone_by( 'zone_id', $zone['zone_id'] );
				}
				$zones[]                           = WC_Shipping_Zones::get_zone_by();
				$data['shipping_methods_by_title'] = [];
				$data['shipping_zones_by_name']    = [];
				foreach ( $zones as $zone ) {
					if ( empty( $data['shipping_zones_by_name'][ $zone->get_zone_name() ] ) ) {
						$data['shipping_zones_by_name'][ $zone->get_zone_name() ] = 1;
					} else {
						++$data['shipping_zones_by_name'][ $zone->get_zone_name() ];
					}
					foreach ( $zone->get_shipping_methods() as $shipping_method ) {
						if ( empty( $data['shipping_methods_by_title'][ $shipping_method->method_title ] ) ) {
							$data['shipping_methods_by_title'][ $shipping_method->method_title ] = 1;
						} else {
							++$data['shipping_methods_by_title'][ $shipping_method->method_title ];
						}
					}
				}
			}

			return $data;
		}
	}

}
