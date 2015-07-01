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

    /**
     * Gets number of parameters
     *
     * @return int
     */
    public function getNumberOfParameters()
    {
        return count($this->parameters);
    }

    /**
     * Gets number of required parameters
     *
     * @return int
     */
    public function getNumberOfRequiredParameters()
    {
        if (count($this->parameters) == 0) {
            return 0;
        }

        $count = 0;

        foreach ($this->parameters as $parameter) {
            if (isset($parameter['required']) && $parameter['required']) {
                $count++;
            }
        }

        return $count;
    }
}
