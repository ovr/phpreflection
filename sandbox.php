<?php

use Ovr\PHPReflection\Reflector;

include_once __DIR__ . '/vendor/autoload.php';

$reflector = new Reflector(Reflector::manuallyFactory());
$freflection = $reflector->getFunction('floatval');
var_dump($freflection->getNumberOfParameters());
var_dump($freflection->getNumberOfRequiredParameters());
var_dump($freflection->run(array(1)));

$freflection = new ReflectionFunction('floatval');
var_dump($freflection->getNumberOfParameters());
var_dump($freflection->getNumberOfRequiredParameters());
