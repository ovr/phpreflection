<?php

namespace Ovr\PHPReflection\Manualy\PHP56;

use Ovr\PHPReflection\FunctionReflection;

class Standard
{
    protected $name = 'standard';

    public function isEnabled()
    {
        return true;
    }

    /**
     * @var array
     */
    protected $functions = array(
        'gettype' => array(
            'return-type' => 'mixed',
            'return-possible-values' => array(
                'boolean',
                'integer',
                'double',
                'string',
                'array',
                'object',
                'resource',
                'NULL',
                'unknown type'
            ),
            'parameters' => array(
                array(
                    'type' => 'int',
                    'required' => true
                )
            )
        ),
        'floatval' => array(
            'return-type' => 'double',
            'parameters' => array(
                array(
                    'type' => 'mixed',
                    'required' => true
                )
            )
        ),
        'boolval' => array(
            'return-type' => 'boolean',
            'parameters' => array(
                array(
                    'type' => 'mixed',
                    'required' => true
                )
            )
        )
    );

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
