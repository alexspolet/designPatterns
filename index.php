<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 27.12.18
 * Time: 20:32
 */

use Patterns\Singleton;

function __autoload($name){
    require str_replace('\\' , DIRECTORY_SEPARATOR , $name) . '.php';
}

$singleton = Singleton::getInstance();
$singleton->setValue('name' , 'Ivan');
$singleton->setValue('surname' , 'Romanov');
echo $singleton->getValue('surname') . '<br>';

$singleton2 =  Singleton::getInstance();
echo  $singleton->getValue('name');

