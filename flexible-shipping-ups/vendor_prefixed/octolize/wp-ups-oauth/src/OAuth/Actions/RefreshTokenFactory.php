<?php

namespace UpsFreeVendor\Octolize\WooCommerceShipping\Ups\OAuth\Actions;

use UpsFreeVendor\Octolize\Ups\RestApi\RestApiClient;
use UpsFreeVendor\Octolize\WooCommerceShipping\Ups\OAuth\OAuthUrl;
use UpsFreeVendor\Octolize\WooCommerceShipping\Ups\OAuth\TokenOption;
use UpsFreeVendor\WPDesk\UpsShippingService\UpsSettingsDefinition;
/**
 * Can create RefreshToken object.
 *
 * @package Octolize\WooCommerceShipping\Ups\OAuth\Actions
 */
class RefreshTokenFactory
{
    public function create(string $authorization_type, string $client_id, string $client_secret, TokenOption $token_option): RefreshToken
    {
        if ($authorization_type === UpsSettingsDefinition::CLIENT_CREDENTIALS) {
            return new RefreshTokenWithCredentials($token_option, $client_id, $client_secret, RestApiClient::create());
        }
        return new RefreshTokenWithRefreshToken($token_option, (new OAuthUrl())->get_url());
    }
}
