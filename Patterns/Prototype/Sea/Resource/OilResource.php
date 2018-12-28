<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 28.12.18
 * Time: 23:05
 */

namespace Patterns\Prototype\Sea\Resource;

class OilResource extends Resource
{
    protected $total = 5;

    public function addValue()
    {
        $this->total++;
    }
}