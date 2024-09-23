<?php

namespace UpsFreeVendor;

use UpsFreeVendor\Psr\Log\LoggerInterface;
if (!\defined('ABSPATH')) {
    exit;
}
if (!\class_exists('UpsFreeVendor\\WPDesk_Tracker_Sender_Logged')) {
    class WPDesk_Tracker_Sender_Logged implements \WPDesk_Tracker_Sender
    {
        const LOGGER_SOURCE = 'wpdesk-sender';
        /**
         * Decorated sender.
         *
         * @var WPDesk_Tracker_Sender
         */
        private $sender;
        /** @var ?LoggerInterface */
        private $logger;
        /**
         * WPDesk_Tracker_Sender_Logged constructor.
         *
         * @param WPDesk_Tracker_Sender $sender Sender to decorate.
         * @param ?LoggerInterface $logger
         */
        public function __construct(\WPDesk_Tracker_Sender $sender, ?\UpsFreeVendor\Psr\Log\LoggerInterface $logger = null)
        {
            $this->sender = $sender;
            $this->logger = $logger;
        }
        /**
         * Sends payload logging payload and the response.
         *
         * @param array $payload Payload to send.
         *
         * @throws WPDesk_Tracker_Sender_Exception_WpError Error if send failed.
         *
         * @return array If succeeded. Array containing 'headers', 'body', 'response', 'cookies', 'filename'.
         */
        public function send_payload(array $payload)
        {
            if ($this->logger instanceof \UpsFreeVendor\Psr\Log\LoggerInterface) {
                return $this->do_send($payload);
            }
            return $this->do_send_deprecated($payload);
        }
        private function do_send(array $payload) : array
        {
            $this->logger->debug('Sender payload', ['payload' => $payload]);
            try {
                $response = $this->sender->send_payload($payload);
                $this->logger->debug('Sender response', ['response' => $response]);
                return $response;
            } catch (\UpsFreeVendor\WPDesk_Tracker_Sender_Exception_WpError $e) {
                $this->logger->error('Sender error', ['error' => $e]);
                throw $e;
            }
        }
        /**
         * For backward compatibility this function uses static access on `wp-logs` library.
         */
        private function do_send_deprecated(array $payload) : array
        {
            if (\class_exists('UpsFreeVendor\\WPDesk_Logger_Factory')) {
                \UpsFreeVendor\WPDesk_Logger_Factory::log_message('Sender payload: ' . \json_encode($payload), self::LOGGER_SOURCE, \UpsFreeVendor\WPDesk_Logger::DEBUG);
                try {
                    $response = $this->sender->send_payload($payload);
                    \UpsFreeVendor\WPDesk_Logger_Factory::log_message('Sender response: ' . \json_encode($response), self::LOGGER_SOURCE, \UpsFreeVendor\WPDesk_Logger::DEBUG);
                    return $response;
                } catch (\UpsFreeVendor\WPDesk_Tracker_Sender_Exception_WpError $exception) {
                    \UpsFreeVendor\WPDesk_Logger_Factory::log_exception($exception);
                    throw $exception;
                }
            } else {
                return $this->sender->send_payload($payload);
            }
        }
    }
}
