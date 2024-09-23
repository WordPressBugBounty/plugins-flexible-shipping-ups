<?php

declare (strict_types=1);
namespace UpsFreeVendor\WPDesk\Logger;

use UpsFreeVendor\Monolog\Handler\FingersCrossedHandler;
use UpsFreeVendor\Monolog\Handler\HandlerInterface;
use UpsFreeVendor\Monolog\Logger;
use UpsFreeVendor\Monolog\Handler\ErrorLogHandler;
use UpsFreeVendor\Monolog\Processor\PsrLogMessageProcessor;
use UpsFreeVendor\Monolog\Processor\UidProcessor;
use UpsFreeVendor\Psr\Log\LogLevel;
use UpsFreeVendor\WPDesk\Logger\WC\WooCommerceHandler;
final class SimpleLoggerFactory implements \UpsFreeVendor\WPDesk\Logger\LoggerFactory
{
    /**
     * @var array{
     *   level?: string,
     *   action_level?: string|null,
     * }
     */
    private $options;
    /** @var string */
    private $channel;
    /** @var Logger */
    private $logger;
    /**
     * Valid options are:
     *   * level (default debug): Default logging level
     *   * action_level: If value is set, it will act as the minimum level at which logger will be triggered using FingersCrossedHandler {@see https://seldaek.github.io/monolog/doc/02-handlers-formatters-processors.html#wrappers--special-handlers}
     */
    public function __construct(string $channel, $options = null)
    {
        $this->channel = $channel;
        $options = $options ?? new \UpsFreeVendor\WPDesk\Logger\Settings();
        if ($options instanceof \UpsFreeVendor\WPDesk\Logger\Settings) {
            $options = $options->to_array();
        }
        $this->options = \array_merge(['level' => \UpsFreeVendor\Psr\Log\LogLevel::DEBUG, 'action_level' => null], $options);
    }
    public function getLogger($name = null) : \UpsFreeVendor\Monolog\Logger
    {
        if ($this->logger) {
            return $this->logger;
        }
        $this->logger = new \UpsFreeVendor\Monolog\Logger($this->channel, [], [new \UpsFreeVendor\Monolog\Processor\PsrLogMessageProcessor(null, \true), new \UpsFreeVendor\Monolog\Processor\UidProcessor()], \wp_timezone());
        if (\function_exists('wc_get_logger') && \did_action('woocommerce_init')) {
            $this->set_wc_handler();
        } else {
            \add_action('woocommerce_init', [$this, 'set_wc_handler']);
        }
        // In the worst-case scenario, when WC logs are not available (yet, or at all),
        // fallback to WP logs, but only when enabled.
        if (empty($this->logger->getHandlers()) && \defined('UpsFreeVendor\\WP_DEBUG_LOG') && WP_DEBUG_LOG) {
            $this->set_handler($this->logger, new \UpsFreeVendor\Monolog\Handler\ErrorLogHandler(\UpsFreeVendor\Monolog\Handler\ErrorLogHandler::OPERATING_SYSTEM, $this->options['level']));
        }
        return $this->logger;
    }
    /**
     * @internal
     */
    public function set_wc_handler() : void
    {
        $this->set_handler($this->logger, new \UpsFreeVendor\WPDesk\Logger\WC\WooCommerceHandler(\wc_get_logger(), $this->channel));
    }
    private function set_handler(\UpsFreeVendor\Monolog\Logger $logger, \UpsFreeVendor\Monolog\Handler\HandlerInterface $handler) : void
    {
        if (\is_string($this->options['action_level'])) {
            $handler = new \UpsFreeVendor\Monolog\Handler\FingersCrossedHandler($handler, $this->options['action_level']);
        }
        // Purposefully replace all existing handlers.
        $logger->setHandlers([$handler]);
    }
}
