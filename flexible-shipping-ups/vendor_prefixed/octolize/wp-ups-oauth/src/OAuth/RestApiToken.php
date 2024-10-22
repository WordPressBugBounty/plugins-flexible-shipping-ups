<?php

namespace UpsFreeVendor\Octolize\WooCommerceShipping\Ups\OAuth;

use UpsFreeVendor\Octolize\Ups\RestApi\RestApiToken as UpsRestApiToken;
use UpsFreeVendor\Octolize\WooCommerceShipping\Ups\OAuth\Actions\RefreshToken;
use UpsFreeVendor\Psr\Log\LoggerInterface;
use UpsFreeVendor\WPDesk\Mutex\WordpressMySQLLockMutex;
class RestApiToken implements UpsRestApiToken
{
    private const LOCK_NAME = 'ups_refresh_token';
    /**
     * @var TokenOption
     */
    private $token_option;
    /**
     * @var RefreshToken
     */
    private $refresh_token_action;
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;
    public function __construct(TokenOption $token_option, RefreshToken $refresh_token_action, LoggerInterface $logger)
    {
        $this->token_option = $token_option;
        $this->refresh_token_action = $refresh_token_action;
        $this->logger = $logger;
    }
    public function get_token(): string
    {
        if (empty($this->token_option->get_access_token())) {
            return '';
        }
        if ($this->token_option->is_token_expired()) {
            $mutex = new WordpressMySQLLockMutex(self::LOCK_NAME);
            if ($mutex->acquireLock()) {
                try {
                    $this->token_option->clear_wp_cache();
                    if ($this->token_option->is_token_expired()) {
                        $this->refresh_token_action->handle();
                        $this->logger->debug('Token refreshed', ['token' => $this->token_option->get_access_token()]);
                    } else {
                        $this->logger->debug('Token refreshed in other thread');
                    }
                } catch (\Exception $e) {
                    $this->logger->error('Refresh token error', ['error' => $e->getMessage()]);
                } finally {
                    $mutex->releaseLock();
                }
            } else {
                $this->logger->debug('Token refresh skipped', ['reason' => 'Lock not acquired']);
            }
        }
        return $this->token_option->get_access_token();
    }
}
