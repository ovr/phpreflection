<?php

namespace Ovr\PHPReflection\Manually\PHP56;

use Ovr\PHPReflection\Manually\AbstractExtension;

class JSON extends AbstractExtension
{
    protected $name = 'json';

    /**
     * @var array
     */
    protected $functions = array(
        'json_decode' => array(
            'return-type' => 'mixed',
            'parameters' => array(
                array(
                    'type' => 'string',
                    'required' => true
                ),
                array(
                    'type' => 'assoc',
                    'required' => false,
                    'default' => false
                ),
                array(
                    'type' => 'int',
                    'required' => false,
                    'default' => 512
                ),
                array(
                    'type' => 'options',
                    'required' => false,
                    'default' => 0
                )
            )
        ),
        'json_encode' => array(
            'return-type' => 'string',
            'parameters' => array(
                array(
                    'type' => 'mixed',
                    'required' => true,
                ),
                array(
                    'type' => 'int',
                    'required' => false,
                    'default' => 0
                ),
                array(
                    'type' => 'int',
                    'required' => false,
                    'default' => 512
                )
            )
        ),
    );
}
