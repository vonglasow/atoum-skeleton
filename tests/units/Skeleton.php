<?php

namespace Skeleton\tests\units;

use mageekguy\atoum;

//require __DIR__ . '/../../vendor/autoload.php';

class Skeleton extends atoum\test
{
    public function testClass()
    {
        $this->object(new \Skeleton\Skeleton)->isInstanceOf('\Skeleton\Skeleton')
        ;
    }
}
