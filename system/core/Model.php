<?php


namespace Application\core;


abstract class Model
{
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function __get($key)
    {
        return $this->app->get($key);
    }

    public function __set($key, $value)
    {
        $this->app->set($key, $value);
    }
}