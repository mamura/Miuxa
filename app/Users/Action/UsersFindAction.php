<?php
namespace App\Users\Action;

use App\Users\Domain\Service\UsersFindService as Service;
use Miuxa\App;
use Miuxa\Http\Request;
use Miuxa\ViewResponder as Responder;

class UsersFindAction
{
    protected $response;
    protected $service;

    public function __construct(Responder $response, Service $service)
    {
        $this->response = $response;
        $this->service  = $service;
    }

    public function __invoke(Request $request)
    {   
        return $this->response->respond($this->service->handle($request));
    }
}