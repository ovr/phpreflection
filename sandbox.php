<?php

use Ovr\PHPReflection\Reflector;

include_once __DIR__ . '/vendor/autoload.php';

$reflector = new Reflector(Reflector::manuallyFactory());
$functionDefinition = $reflector->getFunction('floatval');
var_dump($functionDefinition);
