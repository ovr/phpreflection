<?php

namespace Ovr\PHPReflection\Manually;

use Ovr\PHPReflection\FunctionReflection;

interface CoreInterface
{
    /**
     * @param $name
     * @return bool|FunctionReflection
     */
    public function getFunction($name);
}
