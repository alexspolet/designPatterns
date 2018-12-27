<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 27.12.18
 * Time: 21:33
 */

namespace Patterns\Factory;


use Patterns\Encoders\BlogEncoder;

class BlogCommsManager extends CommsManager
{
    public function printStartLine(){
        return 'blogFormat end';
    }
    public function printEndLine(){
        return 'blogFormat end';
    }
    public function getEncoder(){
        return new BlogEncoder();
    }
}