<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 27.12.18
 * Time: 21:33
 */

namespace Patterns\Factory\CommsManagers;


use Patterns\Factory\Capsers\BlogCapser;
use Patterns\Factory\Encoders\BlogEncoder;
use Patterns\Factory\Encriptors\BlogEncriptor;

class BlogCommsManager extends CommsManager
{
    public function printStartLine(){
        return 'blogFormat start';
    }
    public function printEndLine(){
        return 'blogFormat end';
    }

    public function make($type){
        switch ($type){
            case self::CAPSER :
                return new  BlogCapser();
            case self::ENCODER :
                return new BlogEncoder();
            case self::ENCRIPTOR :
                return new BlogEncriptor();
            default :
                return null;
        }
    }
}