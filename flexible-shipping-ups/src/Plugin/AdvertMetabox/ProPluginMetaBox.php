<?php

namespace WPDesk\FlexibleShippingUps\AdvertMetabox;

use UpsFreeVendor\Octolize\Brand\Assets\AdminAssets;
use UpsFreeVendor\Octolize\Brand\UpgradeBox\SettingsSidebarBox;
use UpsFreeVendor\Octolize\Brand\UpsellingBox\ShippingMethodInstanceShouldShowStrategy;
use UpsFreeVendor\WPDesk\PluginBuilder\Plugin\Hookable;
use UpsFreeVendor\WPDesk\PluginBuilder\Plugin\HookableCollection;
use UpsFreeVendor\WPDesk\PluginBuilder\Plugin\HookableParent;
use UpsFreeVendor\WPDesk\ShowDecision\OrStrategy;
use UpsFreeVendor\WPDesk\ShowDecision\WooCommerce\ShippingMethodStrategy;
use UpsFreeVendor\WPDesk\UpsShippingService\UpsShippingService;

/**
 * Displays the UPS PRO offer beside shipping settings.
 */
class ProPluginMetaBox implements Hookable, HookableCollection {

	use HookableParent;

	private string $assets_url;
	private OrStrategy $should_show_strategy;

	public function __construct( string $assets_url ) {
		$this->assets_url = $assets_url;
	}

	public function hooks() {
		$this->should_show_strategy = new OrStrategy( new ShippingMethodStrategy( UpsShippingService::UNIQUE_ID ) );
		$this->should_show_strategy->addCondition( new ShippingMethodInstanceShouldShowStrategy( new \WC_Shipping_Zones(), UpsShippingService::UNIQUE_ID ) );

		$this->add_hookable( new AdminAssets( $this->assets_url, 'ups', $this->should_show_strategy ) );
		$this->add_hookable( new SettingsSidebarBox(
			'flexible_shipping_ups_settings_sidebar',
			$this->should_show_strategy,
			( new UpsProOffer() )->create( 'pl_PL' === get_locale() ? 'https://octol.io/ups-upgrade-box-pl' : 'https://octol.io/ups-upgrade-box' ),
			[
				'min_width'            => 1200,
				'position_right'       => 20,
				'align_top_to_element' => '#mainform h2:first,#mainform h3:first',
			]
		) );
		$this->hooks_on_hookable_objects();

		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_pro_features_script' ] );
	}

	public function enqueue_pro_features_script(): void {
		if ( ! $this->should_show_strategy->shouldDisplay() || defined( 'FLEXIBLE_SHIPPING_UPS_PRO_VERSION' ) ) {
			return;
		}

		if ( filter_input( INPUT_GET, 'page' ) === 'wc-settings'
			&& filter_input( INPUT_GET, 'tab' ) === 'shipping'
			&& filter_input( INPUT_GET, 'instance_id' ) ) {
			wp_enqueue_style( UpsShippingService::UNIQUE_ID );
			wp_enqueue_script( UpsShippingService::UNIQUE_ID );
		}
	}
}
