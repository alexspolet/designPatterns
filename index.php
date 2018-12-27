<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 27.12.18
 * Time: 20:32
 */

use Patterns\Singleton;
use Patterns\Factory\CommsManagers\BlogCommsManager;
use Patterns\Factory\CommsManagers\MegaCommsManager;

function __autoload($name){
    require str_replace('\\' , DIRECTORY_SEPARATOR , $name) . '.php';
}

$singleton = Singleton::getInstance();
$singleton->setValue('name' , 'Ivan');
$singleton->setValue('surname' , 'Romanov');
//echo $singleton->getValue('surname') . '<br>';
$singleton2 =  Singleton::getInstance();
//echo  $singleton->getValue('name');

$megaManager = new MegaCommsManager();

echo $megaManager->printStartLine() . '<br>';
echo $megaManager->getEncoder()->encode() . '<br>';
echo $megaManager->getEncriptor()->encript() . '<br>';
echo $megaManager->getCapser()->caps() . '<br>';

echo $megaManager->printEndLine() . '<br>';

$blogManager = new BlogCommsManager();

echo '<hr>';

echo $blogManager->printStartLine() . '<br>';
echo $blogManager->getEncoder()->encode() . '<br>';
echo $blogManager->getEncriptor()->encript() . '<br>';
echo $blogManager->getCapser()->caps() . '<br>';
echo $blogManager->printEndLine() . '<br>';
