<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 27.12.18
 * Time: 21:27
 */

namespace Patterns\Encoders;


class BlogEncoder extends Encoder
{

    public function encode(){
        echo 'Encoding in BlogFormat';
    }
}