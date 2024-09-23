<?php

namespace UpsFreeVendor\Octolize\ShippingExtensions;

use UpsFreeVendor\Octolize\ShippingExtensions\Tracker\Tracker;
use UpsFreeVendor\Octolize\ShippingExtensions\Tracker\ViewPageTracker;
use UpsFreeVendor\WPDesk\PluginBuilder\Plugin\Hookable;
use UpsFreeVendor\WPDesk\PluginBuilder\Plugin\HookableParent;
use UpsFreeVendor\WPDesk_Plugin_Info;
/**
 * .
 */
class ShippingExtensions implements \UpsFreeVendor\WPDesk\PluginBuilder\Plugin\Hookable
{
    use HookableParent;
    private const VERSION = 2;
    private const OCTOLIZE_WP_SHIPPING_EXTENSIONS_INITIATED_FILTER = 'octolize/shipping-extensions/initiated';
    /**
     * @var WPDesk_Plugin_Info .
     */
    private $plugin_info;
    /**
     * @var bool
     */
    private $add_plugin_links;
    /**
     * @param WPDesk_Plugin_Info $plugin_info .
     * @param bool               $add_plugin_links .
     */
    public function __construct(\UpsFreeVendor\WPDesk_Plugin_Info $plugin_info, $add_plugin_links = \false)
    {
        $this->plugin_info = $plugin_info;
        $this->add_plugin_links = $add_plugin_links;
    }
    /**
     * @return void
     */
    public function hooks() : void
    {
        if ($this->add_plugin_links) {
            $this->add_hookable(new \UpsFreeVendor\Octolize\ShippingExtensions\PluginLinks($this->plugin_info));
        }
        if (\apply_filters(self::OCTOLIZE_WP_SHIPPING_EXTENSIONS_INITIATED_FILTER, \false) === \false) {
            \add_filter(self::OCTOLIZE_WP_SHIPPING_EXTENSIONS_INITIATED_FILTER, '__return_true');
            $tracker = new \UpsFreeVendor\Octolize\ShippingExtensions\Tracker\ViewPageTracker();
            $this->add_hookable(new \UpsFreeVendor\Octolize\ShippingExtensions\Page($this->get_assets_url(), $tracker));
            $this->add_hookable(new \UpsFreeVendor\Octolize\ShippingExtensions\Assets($this->get_assets_url(), self::VERSION));
            $this->add_hookable(new \UpsFreeVendor\Octolize\ShippingExtensions\Tracker\Tracker($tracker));
            $this->add_hookable(new \UpsFreeVendor\Octolize\ShippingExtensions\PageViewTracker($tracker));
            $this->add_hookable(new \UpsFreeVendor\Octolize\ShippingExtensions\WooCommerceSuggestions());
        }
        $this->hooks_on_hookable_objects();
    }
    /**
     * @return string
     */
    private function get_assets_url() : string
    {
        return \plugin_dir_url(__DIR__ . '/../../../') . 'assets/';
    }
}
