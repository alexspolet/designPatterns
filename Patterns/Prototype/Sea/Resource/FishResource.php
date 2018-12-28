<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 28.12.18
 * Time: 23:06
 */

namespace Patterns\Prototype\Sea\Resource;


class FishResource extends Resource
{
    protected $total = 2;

    public function addValue()
    {
        $this->total += 2;
    }
}