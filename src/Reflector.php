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
     * Get FunctionReflection by $name
     *
     * @param $name
     * @return bool|FunctionReflection
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
    public static function manuallyFactory()
    {
        return new Manually\PHP56\Core();
    }
}
