<?php

namespace Ovr\PHPReflection\Manually\PHP56;

use Ovr\PHPReflection\Manually\AbstractExtension;
use Ovr\PHPReflection\Types;

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
            'return-type' => Types::MIXED,
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
                    'type' => Types::INT_TYPE,
                    'required' => true
                )
            )
        ),
        'floatval' => array(
            'return-type' => Types::DOUBLE_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::MIXED,
                    'required' => true
                )
            )
        ),
        'boolval' => array(
            'return-type' => Types::BOOLEAN_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::MIXED,
                    'required' => true
                )
            )
        )
    );
}
