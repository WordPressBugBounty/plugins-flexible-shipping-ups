<?php

namespace UpsFreeVendor\Octolize\Tracker\DeactivationTracker;

use UpsFreeVendor\WPDesk\Tracker\Deactivation\Reason;
use UpsFreeVendor\WPDesk\Tracker\Deactivation\ReasonsFactory;
class OctolizeProReasonsFactory implements \UpsFreeVendor\WPDesk\Tracker\Deactivation\ReasonsFactory
{
    private \UpsFreeVendor\Octolize\Tracker\DeactivationTracker\OctolizeReasonsFactory $reasons_factory;
    public function __construct(string $plugin_docs_url = '', string $contact_us_url = '')
    {
        $this->reasons_factory = new \UpsFreeVendor\Octolize\Tracker\DeactivationTracker\OctolizeReasonsFactory($plugin_docs_url, '', '', $contact_us_url);
    }
    /**
     * Create reasons.
     *
     * @return Reason[]
     */
    public function createReasons() : array
    {
        $reasons = $this->reasons_factory->createReasons();
        $reasons[\UpsFreeVendor\Octolize\Tracker\DeactivationTracker\OctolizeReasonsFactory::MISSING_FEATURE]->setDescription(\__('Can you let us know, what functionality you\'re looking for?', 'flexible-shipping-ups'));
        return $reasons;
    }
}
