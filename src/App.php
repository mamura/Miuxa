<?php
declare(strict_types=1);

namespace Miuxa;

use FastRoute\Dispatcher\GroupCountBased as Dispatcher;
use Miuxa\Database\Database;
use Miuxa\Route\Router;
use PDO;
use Psr\Container\ContainerInterface;
use Miuxa\Http\Request;

class App
{
    private $container;
    private $request;
    private $router;
    private $dispatcher;
    private $db;

    public function __construct(
        ?ContainerInterface $container  = null, 
        ?Router $router                 = null,
        ?Request $request               = null)
    {
        $this->container    = $container;
        $this->request      = $request ?? new Request();
        $this->router       = $router ?? $container->get(Router::class);
        //$this->db           = $container->get(Database::class);
    }

    public function getRouter()
    {
        return $this->router;
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function getDb()
    {
        return $this->db;
    }

    public function run() : void
    {
        $this->dispatcher   = $this->dispatcher ?? new Dispatcher( $this->router->getData() ); 
        $dispatch           = $this->dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

        switch($dispatch[0]) {
            case 0:
                //404
            break;

            case 1:
                $handler    = $dispatch[1];
                $vars       = $dispatch[2];
                $this->request->bindParams($vars);
//var_dump($this->container->get($handler));
                //list($class, $method) = explode("/", $handler, 2);
                //var_dump($this->container->get($handler));
                call_user_func_array($this->container->get($handler), [$this->request])->send();

            break;

            case 2:
                //MEthod not allowed
            break;
        }
    }
}