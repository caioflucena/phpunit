<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use ReflectionObject;
use Src\Bar;

/**
 * 
 */
class BarTest extends TestCase
{
    public function test_constructor()
    {
        $bar = new Bar("bar");

        $reflectionInstance = new ReflectionObject($bar);
        $reflectionBar = $reflectionInstance->getProperty("bar");
        $reflectionBar->setAccessible(true);
        $this->assertEquals("bar", $reflectionBar->getValue($bar));
    }
}
