<?php

include_once __DIR__ . '/vendor/autoload.php';

$reflector = new Ovr\PHPReflection\Reflector(
    new Ovr\PHPReflection\Manually\PHP56\Core()
);
$functionDefinition = $reflector->getFunction('floatval');
var_dump($functionDefinition);
