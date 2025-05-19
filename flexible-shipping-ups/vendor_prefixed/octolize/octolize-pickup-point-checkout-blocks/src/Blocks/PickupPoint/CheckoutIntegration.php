<?php

namespace UpsFreeVendor\Octolize\Blocks\PickupPoint;

use Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface;
class CheckoutIntegration extends \UpsFreeVendor\Octolize\Blocks\CheckoutIntegration
{
    const SINGLE_CSS_FILE_PATH = '/build/style-point-selection-block.css';
    const FRONTEND_CSS_FILE_PATH = '/build/point-selection-block-frontend.css';
    const EDITOR_CSS_FILE_PATH = '/build/point-selection-block.css';
    private string $integration_name;
    private string $plugin_dir;
    private string $plugin_file;
    private IntegrationData $integration_data;
    private bool $single_css;
    public function __construct(IntegrationData $integration_data, string $plugin_dir, string $plugin_file, bool $single_css = \true)
    {
        $this->integration_data = $integration_data;
        $this->integration_name = $integration_data->get_integration_name();
        $this->plugin_dir = $plugin_dir;
        $this->plugin_file = $plugin_file;
        $this->single_css = $single_css;
    }
    public function get_name(): string
    {
        return $this->integration_name;
    }
    public function initialize(): void
    {
        $this->register_shipping_workshop_block_frontend_scripts();
        $this->register_shipping_workshop_block_frontend_styles();
        $this->register_shipping_workshop_block_editor_scripts();
        $this->register_shipping_workshop_block_editor_styles();
        $this->register_main_integration();
    }
    private function register_main_integration(): void
    {
        $script_path = '/build/index.js';
        $style_path = $this->single_css ? self::SINGLE_CSS_FILE_PATH : self::FRONTEND_CSS_FILE_PATH;
        $script_url = plugins_url($script_path, $this->plugin_file);
        $style_url = plugins_url($style_path, $this->plugin_file);
        $script_asset_path = $this->plugin_dir . '/build/index.asset.php';
        $script_asset = file_exists($script_asset_path) ? require $script_asset_path : ['dependencies' => [], 'version' => $this->get_file_version($script_path)];
        wp_register_script($this->integration_name . '-blocks-integration', $script_url, $script_asset['dependencies'], $script_asset['version'], \true);
        wp_set_script_translations($this->integration_name . '-blocks-integration', 'flexible-shipping-ups', $this->plugin_dir . '/lang');
    }
    public function get_script_handles(): array
    {
        return [$this->integration_name . '-blocks-integration', $this->integration_name . '-blocks-integration-frontend'];
    }
    public function get_editor_script_handles(): array
    {
        return [$this->integration_name . '-blocks-integration', $this->integration_name . '-blocks-integration-editor'];
    }
    public function get_script_data(): array
    {
        $nonce_name = $this->integration_data->get_nonce_name();
        if ($nonce_name) {
            $this->integration_data->set_nonce(\wp_create_nonce($nonce_name));
        }
        return $this->integration_data->get_script_data();
    }
    public function register_shipping_workshop_block_frontend_styles(): void
    {
        $style_path = $this->single_css ? self::SINGLE_CSS_FILE_PATH : self::FRONTEND_CSS_FILE_PATH;
        $style_url = plugins_url($style_path, $this->plugin_file);
        wp_enqueue_style($this->integration_name . '-blocks-integration-frontend', $style_url, ['wp-components'], $this->get_file_version($style_path));
    }
    public function register_shipping_workshop_block_editor_styles(): void
    {
        $style_path = $this->single_css ? self::SINGLE_CSS_FILE_PATH : self::EDITOR_CSS_FILE_PATH;
        $style_url = plugins_url($style_path, $this->plugin_file);
        wp_enqueue_style($this->integration_name . '-blocks-integration-editor', $style_url, ['wp-components'], $this->get_file_version($style_path));
    }
    public function register_shipping_workshop_block_editor_scripts(): void
    {
        $script_path = '/build/point-selection-block.js';
        $script_url = plugins_url($script_path, $this->plugin_file);
        $script_asset_path = $this->plugin_dir . '/build/point-selection-block.asset.php';
        $script_asset = file_exists($script_asset_path) ? require $script_asset_path : ['dependencies' => [], 'version' => $this->get_file_version($script_path)];
        wp_register_script($this->integration_name . '-blocks-integration-editor', $script_url, $script_asset['dependencies'], $script_asset['version'], \true);
        wp_set_script_translations($this->integration_name . '-blocks-integration-editor', 'flexible-shipping-ups', $this->plugin_dir . '/lang');
    }
    public function register_shipping_workshop_block_frontend_scripts(): void
    {
        $script_path = '/build/point-selection-block-frontend.js';
        $script_url = plugins_url($script_path, $this->plugin_file);
        $script_asset_path = $this->plugin_dir . '/build/point-selection-block-frontend.asset.php';
        $script_asset = file_exists($script_asset_path) ? require $script_asset_path : ['dependencies' => [], 'version' => $this->get_file_version($script_path)];
        wp_register_script($this->integration_name . '-blocks-integration-frontend', $script_url, $script_asset['dependencies'], $script_asset['version'], \true);
        wp_set_script_translations($this->integration_name . '-blocks-integration-frontend', 'flexible-shipping-ups', $this->plugin_dir . '/lang');
    }
    protected function get_file_version(string $file): string
    {
        if (file_exists($this->plugin_dir . $file)) {
            return filemtime($this->plugin_dir . $file);
        }
        return filemtime(__FILE__);
    }
}
