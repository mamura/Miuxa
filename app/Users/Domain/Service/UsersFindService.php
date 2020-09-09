<?php
namespace App\Users\Domain\Service;

use App\Users\Domain\Repository\UsersRepository as Repository;
use Miuxa\Http\Request;
use Miuxa\Payload\Payload as Payload;

class UsersFindService
{
    protected $payload;
    protected $repository;

    public function __construct(Payload $payload, Repository $repository)
    {
        $this->payload      = $payload;
        $this->repository   = $repository;
    }

    public function handle(Request $request)
    {
        //var_dump($request);die();
        $id = $request->getParam('id');
        $user = $this->repository->getUser($id);
        $this->payload->setData(json_encode($user));

        return $this->payload;
    }
}