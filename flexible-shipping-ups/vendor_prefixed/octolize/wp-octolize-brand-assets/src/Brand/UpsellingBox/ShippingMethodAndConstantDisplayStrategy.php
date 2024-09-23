<?php

namespace UpsFreeVendor\Octolize\Brand\UpsellingBox;

use UpsFreeVendor\WPDesk\ShowDecision\AndStrategy;
class ShippingMethodAndConstantDisplayStrategy extends \UpsFreeVendor\WPDesk\ShowDecision\AndStrategy
{
    public function __construct(string $method_id, string $constant)
    {
        parent::__construct(new \UpsFreeVendor\Octolize\Brand\UpsellingBox\ConstantShouldShowStrategy($constant));
        $this->addCondition(new \UpsFreeVendor\Octolize\Brand\UpsellingBox\ShippingMethodShouldShowStrategy($method_id));
    }
}
