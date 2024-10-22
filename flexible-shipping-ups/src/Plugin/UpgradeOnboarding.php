<?php

namespace WPDesk\FlexibleShippingUps;

use UpsFreeVendor\Octolize\Onboarding\PluginUpgrade\MessageFactory\LiveRatesFsRulesTable;
use UpsFreeVendor\Octolize\Onboarding\PluginUpgrade\PluginUpgradeOnboardingFactory;
use UpsFreeVendor\WPDesk_Plugin_Info;

class UpgradeOnboarding {

	private WPDesk_Plugin_Info $plugin_info;

	public function __construct( WPDesk_Plugin_Info $plugin_info ) {
		$this->plugin_info = $plugin_info;
	}

	public function init_upgrade_onboarding(): void {
		$upgrade_onboarding = new PluginUpgradeOnboardingFactory(
			$this->plugin_info->get_plugin_name(),
			$this->plugin_info->get_version(),
			$this->plugin_info->get_plugin_file_name()
		);
		$upgrade_onboarding->add_upgrade_message(
			( new LiveRatesFsRulesTable() )->create_message( '3.0.0', $this->plugin_info->get_plugin_url() )
		);
		$upgrade_onboarding->create_onboarding();
	}

}
