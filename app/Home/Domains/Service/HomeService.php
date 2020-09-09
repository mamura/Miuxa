<?php
namespace App\Home\Domains\Services;

use Miuxa\Payload\Payload;

class HomeService
{
    protected $payload;

    public function __construct(Payload $payload)
    {
        $this->payload = $payload;
    }

    public function handle()
    { 
        $this->payload->setData('<h1>Miuxa</h1>');
        return $this->payload;
    }
}