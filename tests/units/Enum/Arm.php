<?php

namespace Skeleton\tests\units\Enum;

use mageekguy\atoum;

//require __DIR__ . '/../../vendor/autoload.php';

/**
 * To ignore class choose 'on'
 * @ignore on/off
 */
class Arm extends atoum\test
{
    public function testClass()
    {
        $this->assert('Assert if class has constants')
            ->class('Skeleton\Enum\Arm')
            ->hasConstant('HELLO')
            ->isEqualTo('hello')
        ;
    }
}
