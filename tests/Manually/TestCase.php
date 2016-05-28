<?php

namespace Tests\Manully;

use Ovr\PHPReflection\Reflector;

abstract class TestCase extends \Tests\TestCase
{
    /**
     * @var Reflector|null
     */
    protected $reflector;

    /**
     * @return string
     */
    abstract protected function getExtensionName();

    /**
     * @return 
     */
    protected function getReflector()
    {
        if ($this->reflector) {
            return $this->reflector;
        }

        return $this->reflector = new Reflector(Reflector::manuallyFactory());
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        if (defined('HHVM_VERSION')) {
            $extension = $this->getReflector()->getCore()->getExtension($this->getExtensionName());
            foreach ($extension->getFunctionNames() as $function) {
                yield [$function];
            }
        } else {
            foreach (get_extension_funcs($this->getExtensionName()) as $function) {
                yield [$function];
            }
        }
    }

    /**
     * @dataProvider getFunctions
     *
     * @param string $functionName
     */
    public function testManuallyDb($functionName)
    {
        $reflection = $this->getReflector()->getFunction($functionName);
        if ($reflection) {
            try {
                $standardFunctionReflection = new \ReflectionFunction($functionName);
            } catch (\ReflectionException $e) {
                parent::markTestSkipped('Function doest not exist');
                return;
            }

            parent::assertSame(
                $standardFunctionReflection->getNumberOfRequiredParameters(),
                $reflection->getNumberOfRequiredParameters()
            );

            parent::assertSame(
                $standardFunctionReflection->getNumberOfParameters(),
                $reflection->getNumberOfParameters()
            );

            if ($reflection->getNumberOfParameters()) {
                foreach ($reflection->getParameters() as $key => $parameter) {
                    parent::assertSame($parameter, $reflection->getParameter($key));

                    parent::assertNotEmpty($parameter->getName());
                    parent::assertInternalType('integer', $parameter->getType());
                    parent::assertInternalType('boolean', $parameter->isRequired());
                }
            }

            return;
        }

        parent::markTestSkipped('Unknown manually reflection for function: ' . $functionName);
    }
}
