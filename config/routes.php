<?php
use Miuxa\App;

return function(App $app) {
    $route = $app->getRouter();

    $route->get('/', \App\Action\Home\HomeAction::class)->setName('home');
};