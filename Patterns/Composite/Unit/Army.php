<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 29.12.18
 * Time: 0:00
 */

namespace Patterns\Composite\Unit;


class Army extends CompositeUnit
{

    public function __construct(array $units)
    {
        foreach ($units as $unit){
            $this->addUnit($unit);
        }

    }

    public function getPower()
    {
        $total = 0;
        foreach ($this->units as $unit){
            $power = $unit->getPower();
            $total += $power;
        }
        return $total;
    }

    public function getDescription()
    {
        $total = 0;
        $string = '';
        foreach ($this->units as $unit){
            $power = $unit->getPower();
            $total += $power;
            $string .= get_class($unit) . ': ' . $power . '<br>';
        }
        $string.= 'TotalPower: ' . $total;
        return $string;
    }


}