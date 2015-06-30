<?php

namespace Ovr\PHPReflection\Manualy\PHP56;

class Core
{
    protected $extensions;

    public function __construct()
    {
        $this->extensions = new \SplObjectStorage();
        $this->extensions
            ->attach(new Standard());
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
