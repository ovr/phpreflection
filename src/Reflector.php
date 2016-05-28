<?php

namespace Ovr\PHPReflection;

class Reflector
{
    /**
     * @var Manually\CoreInterface
     */
    protected $core;

    /**
     * @param Manually\CoreInterface $manually
     */
    public function __construct(Manually\CoreInterface $manually)
    {
        $this->core = $manually;
    }

    /**
     * Get FunctionReflection by $name
     *
     * @param $name
     * @return bool|FunctionReflection
     */
    public function getFunction($name)
    {
        return $this->core->getFunction($name);
    }

    /**
     * @return Manually\CoreInterface
     */
    public static function manuallyFactory()
    {
        if (version_compare(PHP_VERSION, '7.0.0') > 0) {
            return new Manually\PHP70\Core();
        }

        return new Manually\PHP56\Core();
    }

    /**
     * @return Manually\CoreInterface
     */
    public function getCore()
    {
        return $this->core;
    }
}
