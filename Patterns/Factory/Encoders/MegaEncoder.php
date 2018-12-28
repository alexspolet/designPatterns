<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 27.12.18
 * Time: 21:30
 */

namespace Patterns\Factory\Encoders;


class MegaEncoder extends Encoder
{
    public function encode()
    {
        echo 'Encoding in MegaFormat';
    }
}