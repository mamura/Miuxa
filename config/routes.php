<?php
use Miuxa\App;

return function (App $app) {
    $route = $app->getRouter();

    $route->get('/', \app\Home\Action\HomeAction::class)->setName('home');
};
