<?php
namespace router;

interface IRouter{
    public function __construct($method, $routes);
    public function getRoute();
    
}

