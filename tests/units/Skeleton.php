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
    public function testClass()
    {
        $this->assert('Assert if object is good instance')
            // No new needed can use $this->newTestedInstance(param1, param2, …)
            ->object($this->newTestedInstance)->isInstanceOf('\Skeleton\Skeleton')
            ->assert('Assert if object return good string')
            // So as for getting object $this->testedInstance
            ->string($this->testedInstance->getClass())->isEqualTo('Skeleton\Skeleton')
        ;
    }

    /**
     * To ignore test choose 'on'
     * @ignore on/off
     */
    public function testCountArray()
    {
        $this->assert('Assert if we can mock count PHP function')
            ->object($this->newTestedInstance)->isInstanceOf('\Skeleton\Skeleton')
            // Mock PHP Function
            ->if($this->function->count = 2)
            ->integer($this->testedInstance->countArray())->isEqualTo(2)
        ;
    }


    public function refactoFalse()
    {
        return array(
            array(true, 0, 0),
            array(false, 0, 5),
            array(false, 5, 0),
            array(true, 5, 5),
            array(false, -5, 6),
            array(true, 6, -5),
        );
    }

    /**
     * @dataProvider refactoFalse
     */
    public function testRefactoIfFalse($isExpired, $countInProgress, $countToCome)
    {
        $this
            ->object($this->newTestedInstance)->isInstanceOf('\Skeleton\Skeleton')
            ->boolean($this->testedInstance->conditional($isExpired, $countInProgress, $countToCome))->isFalse()
        ;
    }

    public function refactoTrue()
    {
        return array(
            array(true, -1, 0),
            array(false, 0, 0),
            array(true, -6, 5),
        );
    }

    /**
     * @dataProvider refactoTrue
     */
    public function testRefactoIfTrue($isExpired, $countInProgress, $countToCome)
    {
        $this
            ->object($this->newTestedInstance)->isInstanceOf('\Skeleton\Skeleton')
            ->boolean($this->testedInstance->conditional($isExpired, $countInProgress, $countToCome))->isTrue()
        ;
    }

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
