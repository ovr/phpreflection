<?php

namespace Ovr\PHPReflection\Manually\PHP56;

use Ovr\PHPReflection\Manually\AbstractExtension;
use Ovr\PHPReflection\Types;

class JSON extends AbstractExtension
{
    protected $name = 'json';

    /**
     * @var array
     */
    protected $functions = array(
        'json_decode' => array(
            'return-type' => Types::MIXED,
            'parameters' => array(
                array(
                    'type' => Types::INT_TYPE,
                    'required' => true
                ),
                array(
                    'type' => Types::BOOLEAN_TYPE,
                    'required' => false,
                    'default' => false
                ),
                array(
                    'type' => Types::INT_TYPE,
                    'required' => false,
                    'default' => 512
                ),
                array(
                    'type' => Types::INT_TYPE,
                    'required' => false,
                    'default' => 0
                )
            )
        ),
        'json_encode' => array(
            'return-type' => Types::STRING_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::MIXED,
                    'required' => true,
                ),
                array(
                    'type' => Types::INT_TYPE,
                    'required' => false,
                    'default' => 0
                ),
                array(
                    'type' => Types::INT_TYPE,
                    'required' => false,
                    'default' => 512
                )
            )
        ),
    );
}
