<?php

namespace UpsFreeVendor\WPDesk\ShowDecision;

class OrStrategy implements \UpsFreeVendor\WPDesk\ShowDecision\ShouldShowStrategy
{
    /**
     * @var ShouldShowStrategy[]
     */
    private array $conditions = [];
    public function __construct(\UpsFreeVendor\WPDesk\ShowDecision\ShouldShowStrategy $strategy)
    {
        $this->conditions[] = $strategy;
    }
    public function addCondition(\UpsFreeVendor\WPDesk\ShowDecision\ShouldShowStrategy $condition) : self
    {
        $this->conditions[] = $condition;
        return $this;
    }
    public function shouldDisplay() : bool
    {
        foreach ($this->conditions as $condition) {
            if ($condition->shouldDisplay()) {
                return \true;
            }
        }
        return \false;
    }
}
