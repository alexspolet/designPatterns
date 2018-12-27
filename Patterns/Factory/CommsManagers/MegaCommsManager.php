<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 27.12.18
 * Time: 21:19
 */

namespace Patterns\Factory\CommsManagers;


use Patterns\Factory\Encoders\MegaEncoder;
use Patterns\Factory\Capsers\MegaCapser;
use Patterns\Factory\Encriptors\MegaEncriptor;

class MegaCommsManager extends CommsManager
{
     public function printStartLine(){
         return  'megaFormat start';
     }
     public function printEndLine(){
         return 'megaFormat end';
     }
     public function getEncoder(){
         return new MegaEncoder();
     }

     public function getEncriptor()
     {
         return new MegaEncriptor();
     }

    public function getCapser(){
        return new  MegaCapser();
    }

}