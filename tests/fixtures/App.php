<?php
use Pimple\Container;

class App
{
    private $proxy;
    private $name;

    protected $container;

    public function __construct(Proxy $proxy, $name, Container $container)
    {
        $this->proxy = $proxy;
        $this->name  = $name;
        $this->container = $container;
    }

    public function hello()
    {
        return $this->proxy->hello($this->name);
    }
}
