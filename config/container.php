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

    PDO::class => function(ContainerInterface $container) {
        $settings = $container->get('settings')['db'];

        $host       = $settings['host'];
        $dbname     = $settings['database'];
        $username   = $settings['username'];
        $password   = $settings['password'];
        $charset    = $settings['charset'];
        $flags      = $settings['flags'];
        $dsn        = "mysql:host=$host;dbname=$dbname;charset=$charset";

        return new PDO($dsn, $username, $password, $flags);
    }

];