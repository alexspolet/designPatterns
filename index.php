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


use Patterns\Prototype\TerrainFactory\TerrainFactory;
use Patterns\Prototype\Sea;
use Patterns\Prototype\Forest;
use Patterns\Prototype\Plain;

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
echo $megaManager->make(1)->caps() . '<br>';
echo $megaManager->make(2)->encode() . '<br>';
echo $megaManager->make(3)->encript() . '<br>';

echo $megaManager->printEndLine() . '<br>';

$blogManager = new BlogCommsManager();

echo '<hr>';

echo $blogManager->printStartLine() . '<br>';
echo $blogManager->make(1)->caps() . '<br>';
echo $blogManager->make(2)->encode() . '<br>';
echo $blogManager->make(3)->encript() . '<br>';
echo $blogManager->printEndLine() . '<br>';


echo '<hr>';

$fish = new Sea\Resource\FishResource();

$factory = new TerrainFactory(new Sea\MarsSea( 2 , $fish)  , new Plain\EarthPlain() , new Forest\EarthForest());

echo $factory->getSea()->getResource()->getTotal();

$sea = new Sea\MarsSea(4 , $fish);
echo '<br>';
echo $sea->getResource()->getTotal();


$sea2 = clone $sea;
$sea2->getResource()->addValue();
echo '<br>';
echo $sea->getResource()->getTotal();
echo '<br>';
echo $sea2->getResource()->getTotal();


echo '<hr>';

use \Patterns\Composite\Unit\Archer;
use \Patterns\Composite\Unit\LaserCannonUnit;


$army = new \Patterns\Composite\Unit\Army([new Archer(), new LaserCannonUnit(), new Archer(), new Archer()]);

var_dump($army);

echo $army->getPower();

echo '<br>';
echo $army->getDescription();