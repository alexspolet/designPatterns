<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 27.12.18
 * Time: 20:39
 */

namespace Patterns;


class Singleton
{
public static $instance = null;
private $values = [];

private function __construct(){}

public static function getInstance(){
    if (is_null(self::$instance)){
        self::$instance = new self();
    }
    return self::$instance;
}

public function setValue($name , $value){
    $this->values[$name] = $value;
}

public function getValue($name){
    return $this->values[$name];
}
}