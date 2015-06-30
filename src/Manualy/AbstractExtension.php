<?php

namespace Ovr\PHPReflection\Manually;

use Ovr\PHPReflection\FunctionReflection;
use ReflectionExtension;

class AbstractExtension
{
    /**
     * @var string
     */
    protected $name = 'unknown';

    /**
     * @var array
     */
    protected $functions = array();

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return extension_loaded($this->name);
    }

    /**
     * @return ReflectionExtension
     */
    public function getReflection()
    {
        return new ReflectionExtension($this->name);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return bool
     */
    public function getFunction($name)
    {
        if (isset($this->functions[$name])) {
            $result = $this->functions[$name];

            return new FunctionReflection(
                $name,
                $result['parameters'],
                $result['return-type'],
                isset($result['return-possible-values']) ? $result['return-possible-values'] : null
            );
        }

        return false;
    }
}
