<?php

/**
 * Meta data interpreter.
 *
 * @package WPDesk\WooCommerceShipping\Ups
 */
namespace UpsFreeVendor\WPDesk\WooCommerceShipping\Ups;

use UpsFreeVendor\WPDesk\UpsShippingService\UpsShippingService;
use UpsFreeVendor\WPDesk\WooCommerceShipping\OrderMetaData\AdminOrderMetaDataDisplay;
use UpsFreeVendor\WPDesk\WooCommerceShipping\OrderMetaData\SingleAdminOrderMetaDataInterpreterImplementation;
use UpsFreeVendor\WPDesk\WooCommerceShipping\ShippingBuilder\WooCommerceShippingMetaDataBuilder;
/**
 * Can interpret UPS meta data on order.
 */
class UpsAdminOrderMetaDataDisplay extends AdminOrderMetaDataDisplay
{
    const META_FALLBACK_REASON = 'fallback_reason';
    /**
     * UpsOrderMetaDataInterpreter constructor.
     */
    public function __construct()
    {
        parent::__construct(UpsShippingService::UNIQUE_ID);
        $this->add_hidden_order_item_meta_key(UpsMetaDataBuilder::COLLECTION_POINT_ID);
        $this->add_hidden_order_item_meta_key(UpsMetaDataBuilder::COLLECTION_POINT_ADDRESS);
        $this->add_hidden_order_item_meta_key(WooCommerceShippingMetaDataBuilder::COLLECTION_POINT);
        $this->add_hidden_order_item_meta_key(WooCommerceShippingMetaDataBuilder::SERVICE_TYPE);
    }
    /**
     * Init interpreters.
     */
    public function init_interpreters()
    {
        $this->add_interpreter(new SingleAdminOrderMetaDataInterpreterImplementation(UpsMetaDataBuilder::META_UPS_ACCESS_POINT, __('UPS Access Point', 'flexible-shipping-ups')));
        $this->add_interpreter(new SingleAdminOrderMetaDataInterpreterImplementation(UpsMetaDataBuilder::META_UPS_SERVICE_CODE, __('UPS Service Code', 'flexible-shipping-ups')));
        $this->add_interpreter(new SingleAdminOrderMetaDataInterpreterImplementation(self::META_FALLBACK_REASON, __('Fallback reason', 'flexible-shipping-ups')));
        $this->add_interpreter(new SingleAdminOrderMetaDataInterpreterImplementation(UpsMetaDataBuilder::META_UPS_ACCESS_POINT_ADDRESS, __('UPS Access Point Address', 'flexible-shipping-ups')));
    }
}
