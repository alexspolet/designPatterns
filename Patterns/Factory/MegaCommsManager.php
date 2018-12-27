<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 27.12.18
 * Time: 21:19
 */

namespace Patterns\Factory;


use Patterns\Encoders\MegaEncoder;

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

}