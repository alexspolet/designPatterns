<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 27.12.18
 * Time: 21:12
 */

namespace Patterns\Factory\CommsManagers;


abstract class CommsManager
{

    const CAPSER = 1;
    const ENCODER = 2;
    const ENCRIPTOR =3;



    abstract public function printStartLine();
    abstract public function printEndLine();
    abstract public function getEncoder();
    abstract public function getEncriptor();
    abstract public function getCapser();
}