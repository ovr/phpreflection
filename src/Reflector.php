<?php

namespace Ovr\PHPReflection;

class Reflector
{
    /**
     * @var Manually\CoreInterface
     */
    protected $manually;


    /**
     * @param Manually\CoreInterface $manually
     */
    public function __construct(Manually\CoreInterface $manually)
    {
        $this->manually = $manually;
    }

    /**
     * @param $name
     * @return bool
     */
    public function getFunction($name)
    {
        $reflection = $this->manually->getFunction($name);
        if ($reflection) {
            return $reflection;
        }

        return false;
    }

    /**
     * @return Manually\CoreInterface
     */
    static public function manuallyFactory()
    {
        return new Manually\PHP56\Core();
    }
}