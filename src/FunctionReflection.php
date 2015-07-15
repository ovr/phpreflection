<?php

namespace Ovr\PHPReflection;

use RuntimeException;

class FunctionReflection
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var ReflectionParameter[]
     */
    protected $parameters;

    /**
     * @var int|null
     */
    protected $returnType;

    /**
     * @var int|null
     */
    protected $returnPossibleValue;

    public function __construct($name, array $parameters, $returnType, $returnPossibleValue)
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
     * Run function and return result of it
     *
     * @param array $parameters
     * @return mixed
     */
    public function run(array $parameters = array())
    {
        if (count($parameters) < $this->getNumberOfRequiredParameters()) {
            throw new RuntimeException("It's not possible to run function '{$this->name}' via count of parameters < requiredParameters");
        }

        return call_user_func($this->name, $parameters);
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
            if ($parameter->isRequired()) {
                $count++;
            }
        }

        return $count;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isDisabled()
    {
        $isInDisabledFunctions = false !== strpos(ini_get('disable_functions'), $this->name);

        return !($isInDisabledFunctions);
    }
}
