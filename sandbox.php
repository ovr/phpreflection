<?php

include_once __DIR__ . '/vendor/autoload.php';

$core = new Ovr\PHPReflection\Manualy\PHP56\Core();
$functionDefinition = $core->getFunction('gettype');
var_dump($functionDefinition);
