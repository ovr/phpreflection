<?php

namespace Ovr\PHPReflection\Manually\PHP56;

use Ovr\PHPReflection\Manually\AbstractExtension;
use Ovr\PHPReflection\Types;

class Standard extends AbstractExtension
{
    protected $name = 'standard';

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return true;
    }

    /**
     * @var array
     */
    protected $functions = array(
        'constant' => array(
            'return-type' => Types::MIXED,
            'parameters' => array(
                array(
                    'type' => Types::STRING_TYPE,
                    'required' => true,
                    'name' => 'name'
                )
            )
        ),
        'bin2hex' => array(
            'return-type' => Types::STRING_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::STRING_TYPE,
                    'required' => true,
                    'name' => 'str'
                )
            )
        ),
        'hex2bin' => array(
            'return-type' => Types::STRING_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::STRING_TYPE,
                    'required' => true,
                    'name' => 'str'
                )
            )
        ),
        'sleep' => array(
            'return-type' => Types::INT_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::INT_TYPE,
                    'required' => true,
                    'name' => 'seconds'
                )
            )
        ),
        'usleep' => array(
            'return-type' => Types::VOID_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::INT_TYPE,
                    'required' => true,
                    'name' => 'micro_seconds'
                )
            )
        ),
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
        ),
        'is_array' => array(
            'return-type' => Types::BOOLEAN_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::MIXED,
                    'required' => true
                )
            )
        ),
        'is_bool' => array(
            'return-type' => Types::BOOLEAN_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::MIXED,
                    'required' => true
                )
            )
        ),
        'is_double' => array(
            'return-type' => Types::BOOLEAN_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::MIXED,
                    'required' => true
                )
            )
        ),
        'is_float' => array(
            'return-type' => Types::BOOLEAN_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::MIXED,
                    'required' => true
                )
            )
        ),
        'is_int' => array(
            'return-type' => Types::BOOLEAN_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::MIXED,
                    'required' => true
                )
            )
        ),
        'is_integer' => array(
            'return-type' => Types::BOOLEAN_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::MIXED,
                    'required' => true
                )
            )
        ),
        'is_long' => array(
            'return-type' => Types::BOOLEAN_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::MIXED,
                    'required' => true
                )
            )
        ),
        'is_null' => array(
            'return-type' => Types::BOOLEAN_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::MIXED,
                    'required' => true
                )
            )
        ),
    );
}
