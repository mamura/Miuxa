<?php
namespace App\Home\Action;

use app\Home\Domains\Services\HomeService as Service;
use app\Home\Responders\HomeResponder as Responder;

class HomeAction
{
    protected $service;
    protected $response;

    public function __construct(Service $service, Responder $response)
    {
        $this->service  = $service;
        $this->response = $response;
    }

    public function __invoke()
    {
        return $this->response->respond($this->service->handle());
    }
}