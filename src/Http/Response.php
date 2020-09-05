<?php
namespace Miuxa\Http;

use Psr\Http\Message\ResponseInterface;

class Response implements ResponseInterface{
    
    public function getStatusCode(){}

    
    public function withStatus($code, $reasonPhrase = ''){}

    
    public function getReasonPhrase(){}
}