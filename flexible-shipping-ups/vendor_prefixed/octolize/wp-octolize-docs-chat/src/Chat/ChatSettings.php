<?php

namespace UpsFreeVendor\Octolize\Docs\Chat;

class ChatSettings
{
    private const WEBHOOK_URL = 'webhook_url';
    private const INITIAL_MESSAGES = 'initial_messages';
    private const TITLE = 'title';
    private const SUBTITLE = 'subtitle';
    private const FOOTER = 'footer';
    private const INPUT_PLACEHOLDER = 'input_placeholder';
    private const GET_STARTED = 'get_started';
    private const METADATA = 'metadata';
    private string $plugin = 'Octolize';
    private array $plugin_settings = [];
    private array $plugin_settings_masked_fields = ['api_key', 'api_secret', 'client_id', 'client_secret', 'user_id', 'password', 'access_key', 'account_numer'];
    private array $shipping_method_settings = [];
    private string $current_page = "Plugin settings";
    private array $settings = [];
    public function set_webhook_url(string $url): void
    {
        $this->settings[self::WEBHOOK_URL] = $url;
    }
    public function set_initial_messages(array $messages): void
    {
        $this->settings[self::INITIAL_MESSAGES] = $messages;
    }
    public function set_title(string $title): void
    {
        $this->settings[self::TITLE] = $title;
    }
    public function set_subtitle(string $subtitle): void
    {
        $this->settings[self::SUBTITLE] = $subtitle;
    }
    public function set_footer(string $footer): void
    {
        $this->settings[self::FOOTER] = $footer;
    }
    public function set_input_placeholder(string $placeholder): void
    {
        $this->settings[self::INPUT_PLACEHOLDER] = $placeholder;
    }
    public function set_metadata(array $metadata): void
    {
        $this->settings[self::METADATA] = $metadata;
    }
    /**
     * @param string $key
     * @param $value
     * @return void
     */
    public function add_metadata(string $key, $value): void
    {
        $this->settings[self::METADATA][$key] = $value;
    }
    public function set_plugin_settings(array $settings): void
    {
        $this->plugin_settings = $settings;
    }
    public function set_get_started(string $get_started): void
    {
        $this->settings[self::GET_STARTED] = $get_started;
    }
    public function set_shipping_method_settings(array $settings): void
    {
        $this->shipping_method_settings = $settings;
    }
    public function set_plugin(string $plugin): void
    {
        $this->plugin = $plugin;
    }
    public function set_current_page(string $page): void
    {
        $this->current_page = $page;
    }
    public function get_settings(): array
    {
        return $this->add_metadata_to_settings($this->prepare_settings());
    }
    private function prepare_settings(): array
    {
        $settings = $this->settings;
        if (empty($settings[self::WEBHOOK_URL])) {
            $settings[self::WEBHOOK_URL] = 'https://n8n.octolize.dev/webhook/5f60a382-151a-49bf-8baa-52b070c11179/chat';
        }
        if (empty($settings[self::INITIAL_MESSAGES])) {
            $settings[self::INITIAL_MESSAGES] = [__('Hi there! 👋 I’m here to help you set up and use the plugin.', 'flexible-shipping-ups'), __('You can ask me about:
- settings and configuration,
- common errors and how to fix them,
- integrations with other tools.

Just tell me what you need help with 🙂', 'flexible-shipping-ups')];
        }
        if (empty($settings[self::TITLE])) {
            $settings[self::TITLE] = __('Hi there! 👋', 'flexible-shipping-ups');
        }
        if (empty($settings[self::SUBTITLE])) {
            $settings[self::SUBTITLE] = __('I’m your AI Assistant. I’ll help you quickly configure the plugin and solve any issues.', 'flexible-shipping-ups');
        }
        if (empty($settings[self::INPUT_PLACEHOLDER])) {
            $settings[self::INPUT_PLACEHOLDER] = __('Type your question to get instant answer..', 'flexible-shipping-ups');
        }
        if (empty($settings[self::FOOTER])) {
            $settings[self::FOOTER] = __('AI can make mistakes. Octolize has access to the conversation held in this chat.', 'flexible-shipping-ups');
        }
        if (empty($settings[self::GET_STARTED])) {
            $settings[self::GET_STARTED] = __('New conversation', 'flexible-shipping-ups');
        }
        return $settings;
    }
    private function add_metadata_to_settings(array $settings): array
    {
        return array_merge($settings, [self::METADATA => $this->get_metadata()]);
    }
    private function get_metadata(): array
    {
        $metadata = $this->settings[self::METADATA] ?? [];
        $metadata['plugin'] = $this->plugin;
        $metadata['plugin_settings'] = $this->mask_settings($this->plugin_settings);
        $metadata['shipping_method_settings'] = $this->shipping_method_settings;
        $metadata['user_id'] = $this->user_id ?? md5(site_url());
        $metadata['current_page'] = $this->current_page;
        return $metadata;
    }
    private function mask_settings(array $settings): array
    {
        foreach ($settings as $key => $value) {
            if (in_array($key, $this->plugin_settings_masked_fields, \true)) {
                $settings[$key] = '********';
            }
        }
        return $settings;
    }
}
