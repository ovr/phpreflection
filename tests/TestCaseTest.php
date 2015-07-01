<?php

namespace Tests;

use Ovr\PHPReflection\Reflector;

class TestCaseTest extends TestCase
{
    protected $reflector;
    
    protected function getReflector()
    {
        if ($this->reflector) {
            return $this->reflector;
        }

        return $this->reflector = new Reflector(Reflector::manuallyFactory());
    }

    public function getFunctions()
    {
        $dataProvider = array();

        if (defined('HHVM_VERSION')) {
            $this->markTestSkipped('HHVM is not supported for testing now');
        }

        foreach (get_extension_funcs('standard') as $function) {
            $dataProvider[] = array($function);
        }

        return $dataProvider;
    }

    /**
     * @dataProvider getFunctions
     *
     * @param $functionName
     */
    public function testManuallyDb($functionName)
    {
        $reflection = $this->getReflector()->getFunction($functionName);
        if ($reflection) {
            $standartFunctionReflection = new \ReflectionFunction($functionName);

            $this->assertSame($standartFunctionReflection->getNumberOfRequiredParameters(), $reflection->getNumberOfRequiredParameters());
            $this->assertSame($standartFunctionReflection->getNumberOfParameters(), $reflection->getNumberOfParameters());

            return true;
        }

        $this->markTestSkipped('Unknown manually reflection for function: ' . $functionName);
    }
}
