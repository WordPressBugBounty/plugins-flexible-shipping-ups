<?php

namespace UpsFreeVendor\WPDesk\WooCommerceShipping\Ups;

use UpsFreeVendor\WPDesk\Notice\Notice;
use UpsFreeVendor\WPDesk\PluginBuilder\Plugin\Hookable;
use UpsFreeVendor\WPDesk\UpsShippingService\UpsSettingsDefinition;
class XmlApiNotice implements Hookable
{
    private array $ups_settings;
    public function __construct(array $ups_settings)
    {
        $this->ups_settings = $ups_settings;
    }
    public function hooks()
    {
        add_action('admin_notices', array($this, 'ups_xml_api_notice'));
    }
    public function ups_xml_api_notice()
    {
        if ($this->should_display_notice()) {
            $settings_url = admin_url('admin.php?page=wc-settings&tab=shipping&section=flexible_shipping_ups');
            ob_start();
            include __DIR__ . '/view/xml-api-notice.php';
            $content = ob_get_contents();
            ob_end_clean();
            new Notice($content, 'warning');
        }
    }
    protected function should_display_notice(): bool
    {
        $api_type = $this->ups_settings[UpsSettingsDefinition::API_TYPE] ?? '';
        if ('' !== $api_type) {
            return UpsSettingsDefinition::API_TYPE_XML === $api_type;
        }
        return $this->has_legacy_xml_credentials();
    }
    private function has_legacy_xml_credentials(): bool
    {
        return !empty($this->ups_settings[UpsSettingsDefinition::USER_ID]) || !empty($this->ups_settings[UpsSettingsDefinition::PASSWORD]) || !empty($this->ups_settings[UpsSettingsDefinition::ACCESS_KEY]);
    }
}
