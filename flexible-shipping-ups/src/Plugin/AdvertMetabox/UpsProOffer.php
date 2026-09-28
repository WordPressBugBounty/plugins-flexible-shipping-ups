<?php

namespace WPDesk\FlexibleShippingUps\AdvertMetabox;

/**
 * Provides the UPS PRO offer for the free plugin.
 */
final class UpsProOffer {

	/**
	 * @return array<string, mixed>
	 */
	public function create( string $url ): array {
		return [
			'eyebrow'      => __( 'UPS PRO', 'flexible-shipping-ups' ),
			'headline'     => __( 'Do not pay for three parcels when shipping one', 'flexible-shipping-ups' ),
			'description'  => __( 'The free version shows live UPS rates. PRO combines several products into one carton and adds a precise handling fee.', 'flexible-shipping-ups' ),
			'current'      => [
				'label' => __( '3 products, 3 separate rates', 'flexible-shipping-ups' ),
				'badge' => __( 'NOW', 'flexible-shipping-ups' ),
			],
			'upgrade'      => [
				'label' => __( '3 products, 1 combined rate', 'flexible-shipping-ups' ),
				'badge' => __( 'PRO', 'flexible-shipping-ups' ),
			],
			'benefits'     => [
				[
					'icon' => 'box',
					'text' => __( 'Combine several products into one carton instead of paying for separate shipments', 'flexible-shipping-ups' ),
				],
				[
					'icon' => 'percent',
					'text' => __( 'Add fixed or percentage handling fees to UPS rates', 'flexible-shipping-ups' ),
				],
				[
					'icon' => 'calendar',
					'text' => __( 'Show the estimated delivery date right in the cart', 'flexible-shipping-ups' ),
				],
			],
			'social_proof' => __( 'Trusted by 250,000+ WooCommerce stores', 'flexible-shipping-ups' ),
			'guarantee'    => __( '30-day money-back guarantee - risk-free', 'flexible-shipping-ups' ),
			'cta_label'    => __( 'Unlock packing', 'flexible-shipping-ups' ),
			'cta_url'      => $url,
		];
	}
}
