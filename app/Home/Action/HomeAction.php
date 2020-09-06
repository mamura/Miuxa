<?php
namespace App\Home\Action;

use App\Home\Domains\Services\HomeService as Service;
use App\Home\Responders\HomeResponder as Responder;

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
        //var_dump($this->service->handle());
        return $this->response->respond($this->service->handle());
    }
}