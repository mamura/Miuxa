<?php
namespace App\Users\Action;

use App\Users\Domain\Service\UsersService as Service;
use Miuxa\ViewResponder as Responder;
use App\Users\Domain\Repository\UsersRepository as Repository;

class UsersAction
{
    protected $service;
    protected $response;
    protected $repository;

    public function __construct(Service $service, Responder $response, Repository $repository)
    {
        $this->service      = $service;
        $this->response     = $response;
        $this->repository   = $repository;
    }

    public function __invoke()
    {
        return $this->response->respond($this->service->handle());
    }
}