<?php
namespace App\Home\Action;

use App\Home\Domain\Service\HomeService as Service;
use App\Home\Responder\HomeResponder as Responder;

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