<?php
namespace Miuxa\Route;

use FastRoute\DataGenerator\GroupCountBased;
use FastRoute\RouteCollector;
use FastRoute\RouteParser;
use FastRoute\DataGenerator;
use FastRoute\RouteParser\Std;
use Miuxa\Route\Route;

class Router extends RouteCollector
{
    private $dispatcher;

    public function __construct(?RouteParser $routeParser = null, ?DataGenerator $dataGenerator = null)
    {
        $this->routeParser = $routeParser ?? new Std();
        $this->dataGenerator = $dataGenerator ?? new GroupCountBased();
        $this->currentGroupPrefix = '';
    }

    public function get($route, $handler)
    {
        parent::get($route, $handler);
        return new Route($route, $handler);
    }

    public function dispatch()
    {
        $this->dispatcher   = $dispatcher ?? new GroupCountBased($this->router->getData()); 
        $dispatch = $this->dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

        var_dump($dispatch);
    }
}