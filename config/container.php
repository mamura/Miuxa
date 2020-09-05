<?php
use Psr\Container\ContainerInterface;
use Miuxa\App;
use Miuxa\Route\Router;
use FastRoute\DataGenerator;
use FastRoute\RouteParser;

return [
    'settings' => function() {
        return require __DIR__ . '/settings.php';
    },

    App::class => function(ContainerInterface $container, Router $router) {
        return new App($container);
    },

];