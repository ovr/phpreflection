<?php

namespace Ovr\PHPReflection\Manually\PHP56;

use Ovr\PHPReflection\Manually\CoreInterface;

class Core implements CoreInterface
{
    /**
     * @var \Ovr\PHPReflection\Manually\AbstractExtension[]
     */
    protected $extensions = [];

    public function __construct()
    {
        $ext = new Standard();
        $this->extensions[$ext->getName()] = $ext;

        $ext = new JSON();
        $this->extensions[$ext->getName()] = $ext;

        $ext = new Curl();
        $this->extensions[$ext->getName()] = $ext;
    }

    /**
     * @param string $name
     * @return \Ovr\PHPReflection\Manually\AbstractExtension
     * @throws \ReflectionException
     */
    public function getExtension($name)
    {
        if (isset($this->extensions[$name])) {
            return $this->extensions[$name];
        }

        throw new \ReflectionException('Extension ' . $name . ' is not defined');
    }

    public function getFunction($name)
    {
        /** @var Standard $ext */
        foreach ($this->extensions as $ext) {
            $result = $ext->getFunction($name);
            if ($result) {
                return $result;
            }
        }

        return false;
    }
}
