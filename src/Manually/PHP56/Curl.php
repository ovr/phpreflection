<?php

namespace Ovr\PHPReflection\Manually\PHP56;

use Ovr\PHPReflection\FunctionReflection;
use Ovr\PHPReflection\Manually\AbstractExtension;
use Ovr\PHPReflection\Types;

class Curl extends AbstractExtension
{
    protected $name = 'curl';

    /**
     * @var array
     */
    protected $functions = array(
        'curl_close' => array(
            'type' => FunctionReflection::TYPE_UNDEFINED,
            'return-type' => Types::VOID_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::RESOURCE_TYPE,
                    'required' => true,
                    'name' => 'ch'
                )
            )
        ),
        'curl_copy_handle' => array(
            'type' => FunctionReflection::TYPE_UNDEFINED,
            'return-type' => Types::RESOURCE_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::RESOURCE_TYPE,
                    'required' => true,
                    'name' => 'ch'
                )
            )
        ),
        'curl_errno' => array(
            'type' => FunctionReflection::TYPE_UNDEFINED,
            'return-type' => Types::INT_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::RESOURCE_TYPE,
                    'required' => true,
                    'name' => 'ch'
                )
            )
        ),
        'curl_error' => array(
            'type' => FunctionReflection::TYPE_UNDEFINED,
            'return-type' => Types::STRING_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::RESOURCE_TYPE,
                    'required' => true,
                    'name' => 'ch'
                )
            )
        ),
        'curl_escape' => array(
            'type' => FunctionReflection::TYPE_UNDEFINED,
            'return-type' => Types::STRING_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::RESOURCE_TYPE,
                    'required' => true,
                    'name' => 'ch'
                ),
                array(
                    'type' => Types::STRING_TYPE,
                    'required' => true,
                    'name' => 'str'
                )
            )
        ),
        'curl_exec' => array(
            'type' => FunctionReflection::TYPE_UNDEFINED,
            'return-type' => Types::MIXED,
            'parameters' => array(
                array(
                    'type' => Types::RESOURCE_TYPE,
                    'required' => true,
                    'name' => 'ch'
                )
            )
        ),
        //curl_file_create
        'curl_getinfo' => array(
            'type' => FunctionReflection::TYPE_UNDEFINED,
            'return-type' => Types::MIXED,
            'parameters' => array(
                array(
                    'type' => Types::RESOURCE_TYPE,
                    'required' => true,
                    'name' => 'ch'
                ),
                array(
                    'type' => Types::INT_TYPE,
                    'required' => false,
                    'name' => 'opt',
                    'default' => 0
                )
            )
        ),
        'curl_init' => array(
            'type' => FunctionReflection::TYPE_UNDEFINED,
            'return-type' => Types::RESOURCE_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::STRING_TYPE,
                    'required' => false,
                    'name' => 'url',
                    'default' => null
                )
            )
        ),
        'curl_version' => array(
            'type' => FunctionReflection::TYPE_UNDEFINED,
            'return-type' => Types::ARRAY_TYPE,
            'parameters' => array(
                array(
                    'type' => Types::INT_TYPE,
                    'required' => false,
                    'name' => 'age',
                    'default' => 3 // CURLVERSION_NOW
                )
            )
        ),
    );
}
