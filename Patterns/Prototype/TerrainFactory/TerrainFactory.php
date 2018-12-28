<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 28.12.18
 * Time: 22:32
 */

namespace Patterns\Prototype\TerrainFactory;

use Patterns\Prototype\Forest\Forest;
use Patterns\Prototype\Sea\Sea;
use Patterns\Prototype\Plain\Plain;

class TerrainFactory
{
    private $sea;
    private $plain;
    private $forest;

    public function __construct(Sea $sea, Plain $plain, Forest $forest)
    {
        $this->sea = $sea;
        $this->plain = $plain;
        $this->forest = $forest;
    }

    public function getSea()
    {
        return clone $this->sea;
    }

    public function getPlain()
    {
        return clone $this->plain;
    }

    public function getForest()
    {
        return clone $this->forest;
    }

}