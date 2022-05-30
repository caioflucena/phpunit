<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use ReflectionObject;
use Src\Foo;

/**
 * 
 */
class FooTest extends TestCase
{
    public function test_constructor()
    {
        $foo = new Foo("foo", "bar");

        $reflectionInstance = new ReflectionObject($foo);
        $reflectionFoo = $reflectionInstance->getProperty("foo");
        $reflectionFoo->setAccessible(true);
        $this->assertEquals("foo", $reflectionFoo->getValue($foo));

        $reflectionInstance = new ReflectionObject($foo);
        $reflectionBar = $reflectionInstance->getProperty("bar");
        $reflectionBar->setAccessible(true);
        $this->assertEquals("bar", $reflectionBar->getValue($foo));
    }

    public function test_getFoo()
    {
        $foo = new Foo("foo", "bar");
        $this->assertEquals("foo", $foo->getFoo());
    }

    /**
     * 
     */
    public function test_getBar()
    {
        $foo = new Foo("foo", "bar");
        $this->assertEquals("bar", $foo->getBar());
    }
    /**/
}
