<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 29.12.18
 * Time: 0:01
 */

namespace Patterns\Composite\Unit;


abstract class CompositeUnit extends Unit
{
    protected $units = [];

    public function addUnit(Unit $unit)
    {
        $this->units[] = $unit;
    }

    abstract function getDescription();

}