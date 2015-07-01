<?php

use Ovr\PHPReflection\Reflector;

include_once __DIR__ . '/vendor/autoload.php';

$reflector = new Reflector(Reflector::manuallyFactory());
$freflection = $reflector->getFunction('floatval');
var_dump($freflection->getNumberOfParameters());
var_dump($freflection->getNumberOfRequiredParameters());

$freflection = new ReflectionFunction('floatval');
var_dump($freflection->getNumberOfParameters());
var_dump($freflection->getNumberOfRequiredParameters());
