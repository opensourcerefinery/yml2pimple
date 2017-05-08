<?php

class Curl
{
    public function __construct()
    {
    }
    public function doGet($name)
    {
        return "Hello {$name}";
    }
}
