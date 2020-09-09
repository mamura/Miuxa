<?php
use Psr\Container\ContainerInterface;
use Miuxa\App;
use Miuxa\Route\Router;
use FastRoute\DataGenerator;
use FastRoute\RouteParser;
use Miuxa\Database\Database;
use Miuxa\Http\Request;
use Miuxa\Http\Response;
use FastRoute\RouteParser\Std;
use FastRoute\DataGenerator\GroupCountBased;

return [
    'settings' => function() {
        return require __DIR__ . '/settings.php';
    },

    Request::class => function()
    {
        return new Request();
    },

    Response::class => function() {
        return new Response();
    },
    
    Router::class => function(ContainerInterface $container)
    {
        return new Router(new Std(), new GroupCountBased(), $container->get(Request::class));
    },

    App::class => function(ContainerInterface $container, Router $router)
    {
        return new App($container);
    },

    PDO::class => function(ContainerInterface $container)
    {
        $settings = $container->get('settings')['db'];

        $host       = $settings['host'];
        $dbname     = $settings['database'];
        $username   = $settings['username'];
        $password   = $settings['password'];
        $charset    = $settings['charset'];
        $flags      = $settings['flags'];
        $dsn        = "mysql:host=$host;dbname=$dbname;charset=$charset";

        return new PDO($dsn, $username, $password, $flags);
    },

    Database::class => function(ContainerInterface $container) 
    {
        return new Database($container->get(PDO::class));
    }
];