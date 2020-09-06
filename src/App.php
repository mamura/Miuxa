<?php
declare(strict_types=1);

namespace Miuxa;

use FastRoute\Dispatcher\GroupCountBased as Dispatcher;
use Miuxa\Route\Router;
use Psr\Container\ContainerInterface;

class App
{
    private $container;
    private $router;
    private $dispatcher;

    public function __construct(
        ?ContainerInterface $container  = null, 
        ?Router $router                 = null)
    {
        $this->container    = $container;
        $this->router       = $router ?? new Router();
    }

    public function getRouter()
    {
        return $this->router;
    }

    public function getContainer()
    {
        return $this->container;
    }
    
    public function run() : void
    {
        $this->dispatcher   = $dispatcher ?? new Dispatcher($this->router->getData()); 
        $dispatch           = $this->dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

        switch($dispatch[0]) {
            case 0:
                //404
            break;

            case 1:
                $handler    = $dispatch[1];
                $vars       = $dispatch[2];
                
                list($class, $method) = explode("/", $handler, 2);
                call_user_func_array($this->container->get($class), $vars)->send();

            break;

            case 2:
                //MEthod not allowed
            break;
        }
    }
}