<?php

namespace PosledniSobota\Tests;

use PosledniSobota\HelloWorld;

class HelloWorldTest extends \PHPUnit\Framework\TestCase
{
    public function testHelloWorld()
    {
        $helloWorld = new HelloWorld('myName');
        $this->assertEquals('Hello myName', $helloWorld->sayHello());
    }
}
