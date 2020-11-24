<?php

use FastRoute\DataGenerator\GroupCountBased;
use FastRoute\RouteParser\Std;
use Psr\Container\ContainerInterface;
use miuxa\App;
use miuxa\Route\Router;
use miuxa\Http\Request;
use miuxa\Http\Response;

return [
    'settings' => function () {
        return require __DIR__ . '/settings.php';
    },

    Request::class => function () {
        return new Request();
    },

    Response::class => function () {
        return new Response();
    },

    Router::class => function (ContainerInterface $container) {
        return new Router(new Std(), new GroupCountBased, $container->get(Request::class));
    },

    App::class => function (ContainerInterface $container) {
        return new App($container);
    },
];
