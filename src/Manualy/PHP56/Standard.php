<?php

namespace Ovr\PHPReflection\Manually\PHP56;

use Ovr\PHPReflection\Manually\AbstractExtension;

class Standard extends AbstractExtension
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
}
