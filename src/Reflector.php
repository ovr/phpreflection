<?php

namespace Ovr\PHPReflection;

class Reflector
{
    /**
     * @var Manualy\CoreInterface
     */
    protected $manualy;

    /**
     * @param Manualy\CoreInterface $manualy
     */
    public function __construct(Manualy\CoreInterface $manualy)
    {
        $this->manualy = $manualy;
    }

    /**
     * @param $name
     * @return bool
     */
    public function getFunction($name)
    {
        $reflection = $this->manualy->getFunction($name);
        if ($reflection) {
            return $reflection;
        }

        return false;
    }
}