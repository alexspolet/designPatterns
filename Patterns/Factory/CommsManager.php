<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 27.12.18
 * Time: 21:12
 */

namespace Patterns\Factory;


abstract class CommsManager
{
    abstract public function printStartLine();
    abstract public function printEndLine();
    abstract public function getEncoder();
}