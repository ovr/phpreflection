<?php

namespace Ovr\PHPReflection;

class Reflector
{
    /**
     * @var Manualy\PHP56\Core
     */
    protected $manualy;

    /**
     * @param Manualy\PHP56\Core $manualy
     */
    public function __construct(Manualy\PHP56\Core $manualy)
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