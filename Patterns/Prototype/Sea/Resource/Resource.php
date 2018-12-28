<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 28.12.18
 * Time: 23:05
 */

namespace Patterns\Prototype\Sea\Resource;


abstract class Resource
{
    protected $total;
    abstract public function addValue();

    public function getTotal(){
        return $this->total;
    }
}