<?php

namespace Src;

class Foo
{
    private $foo;
    private $bar;

    public function __construct($foo, $bar)
    {
        $this->foo = $foo;
        $this->bar = $bar;
        $this->bar = ["qwe", "asd"];
        var_dump($this->bar);
        (object)$this->bar;
        var_dump($this->bar);
    }

    public function getFoo()
    {
        return $this->foo;
    }

    public function getBar()
    {
        return $this->bar;
    }
}
