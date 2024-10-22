<?php

namespace UpsFreeVendor\Octolize\Onboarding\Field;

use UpsFreeVendor\WPDesk\Forms\Field\BasicField;
/**
 * Html field.
 */
class Html extends BasicField
{
    const DEFAULT_PRIORITY = 10;
    protected $meta = ['priority' => self::DEFAULT_PRIORITY, 'default_value' => '', 'label' => '', 'description' => '', 'description_tip' => '', 'data' => [], 'type' => 'html'];
    public function get_template_name(): string
    {
        return 'html';
    }
    public function get_type(): string
    {
        return $this->meta['type'];
    }
}
