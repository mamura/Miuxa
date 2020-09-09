<?php
namespace App\Users\Domain\Service;

use App\Users\Domain\Repository\UsersRepository as Repository;
use Miuxa\Payload\Payload;

class UsersService
{
    protected $payload;
    protected $repository;

    public function __construct(Payload $payload, Repository $repository)
    {
        $this->payload      = $payload;
        $this->repository   = $repository;
    }

    public function handle()
    {
        $users = $this->repository->getUsers();
        $this->payload->setHeader('Content-type', 'application/json');
        $this->payload->setData(json_encode($users));
        return $this->payload;
    }
}