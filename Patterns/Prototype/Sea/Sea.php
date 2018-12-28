<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 28.12.18
 * Time: 22:16
 */

namespace Patterns\Prototype\Sea;


use Patterns\Prototype\Sea\Resource\Resource;

abstract class Sea
{
    private $navigability;
    private $resource;

    public function __construct($navigability , Resource $resource)
    {
        $this->navigability = $navigability;
        $this->resource = $resource;
    }

    public function getNavigability(){
        return $this->navigability;
    }

    public function getResource(){
        return $this->resource;
    }

    public function __clone()
    {
        $this->resource = clone $this->resource;
    }
}