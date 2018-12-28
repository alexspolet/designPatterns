<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 27.12.18
 * Time: 23:36
 */

namespace Patterns\Factory\Encriptors;


class BlogEncriptor extends  Encriptor
{
public function encript()
{
    return 'Encripted string in BlogFormat';
}
}