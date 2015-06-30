<?php

namespace Ovr\PHPReflection\Manually;

use Ovr\PHPReflection\FunctionReflection;

class AbstractExtension
{
    protected $name = 'unknown';

    protected $functions = array();

    public function isEnabled()
    {
        return extension_loaded($this->name);
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
