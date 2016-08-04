<?php

namespace Skeleton\tests\units;

use mageekguy\atoum;

//require __DIR__ . '/../../vendor/autoload.php';

/**
 * To ignore class choose 'on'
 * @ignore on/off
 */
class Skeleton extends atoum\test
{
    public function testWithMock()
    {
        $head = new \mock\Skeleton\Head;

        $this->calling($head)->howManyEyes = 3;

        $this
            ->object($this->newTestedInstance)->isInstanceOf('\Skeleton\Skeleton')
            ->integer($this->testedInstance->useAnotherClass($head))->isEqualTo(3)
        ;
    }

    public function testWithMockParentMethod()
    {
        $brain = new \mock\Skeleton\Brain;

        $this->calling($brain)->howManyEyes = 20;

        $this
            ->object($this->newTestedInstance)->isInstanceOf('\Skeleton\Skeleton')
            ->integer($this->testedInstance->addABrain($brain))->isEqualTo(20)
        ;
    }
}
