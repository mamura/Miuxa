<?php
use Miuxa\App;

return function(App $app) {
    $route = $app->getRouter();

    $route->get('/', \App\Home\Action\HomeAction::class)->setName('home');
    $route->resource('users');
    //$route->get('/users', \App\Users\Action\UsersAction::class)->setName('users');
};