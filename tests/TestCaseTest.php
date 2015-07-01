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
        return array(
            array('boolval'),
            array('floatval'),
        );
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
