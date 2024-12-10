<?php

namespace UpsFreeVendor\Octolize\WooCommerceShipping\Ups\OAuth;

use UpsFreeVendor\Octolize\WooCommerceShipping\Ups\OAuth\Actions\RefreshTokenFactory;
use UpsFreeVendor\Psr\Log\LoggerInterface;
use UpsFreeVendor\WPDesk\PluginBuilder\Plugin\HookableParent;
use UpsFreeVendor\WPDesk\UpsShippingService\UpsSettingsDefinition;
use UpsFreeVendor\WPDesk\UpsShippingService\UpsShippingService;
class RestApiTokenFactory
{
    use HookableParent;
    public function create($authorization_type, string $client_id, string $client_secret, LoggerInterface $logger): RestApiToken
    {
        $token_option = new TokenOption($authorization_type === UpsSettingsDefinition::AUTH_CODE ? 'fs_ups_token' : 'fs_ups_token_client_credentials');
        $refresh_token_action = (new RefreshTokenFactory())->create($authorization_type, $client_id, $client_secret, $token_option, $logger);
        $rest_api_token = new RestApiToken($token_option, $refresh_token_action, $logger);
        $this->add_hookable(new HookableObjects(new OAuthUrl(), $token_option, $rest_api_token, $logger, 'admin.php?page=wc-settings&tab=shipping&section=' . UpsShippingService::UNIQUE_ID));
        $this->hooks_on_hookable_objects();
        return new RestApiToken($token_option, $refresh_token_action, $logger);
    }
}
