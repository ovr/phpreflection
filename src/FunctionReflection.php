<?php

namespace Ovr\PHPReflection;

class FunctionReflection
{
    public $name;

    public $parameters;

    public $returnType;

    public $returnPossibleValue;

    public function __construct($name, $parameters, $returnType, $returnPossibleValue)
    {
        $this->name = $name;
        $this->parameters = $parameters;
        $this->returnType = $returnType;
        $this->returnPossibleValue = $returnPossibleValue;
    }
}
