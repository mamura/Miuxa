<?php
namespace Miuxa\Http;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

class Request
{
    use MessageTrait;

    private $method = 'GET';
    private $uri;

    public function __construct($uri = null, string $method, $body = 'php://temp', array $headers = [])
    {
        if($method !== null) {
            $this->method = $this->setMethod($method);
        }
        $this->uri = $this->createUri($uri);
        $this->setHeaders($headers);

        if(!$this->hasHeader('Host') && $this->uri->getHost()) {
            $this->headerNames['host']  = 'Host';
            $this->headers['Host']      = [$this->getHostFromUri()];
        }
    }

    public function getRequestTarget(){}


    public function withRequestTarget($requestTarget){}

    
    public function getMethod(){}

    
    public function withMethod($method){}

    
    public function getUri(){}

    
    public function withUri(UriInterface $uri, $preserveHost = false){}

    /**
     * Set a valid HTTP method
     */
    private function setMethod($method) : void
    {
        if (!is_string($method)) {
            throw new Exception\InvalidArgumentException(sprintf(
                'Unsupported HTTP method; must be a string, received %s',
                is_object($method) ? get_class($method) : gettype($method)
            ));
        }

        if (! preg_match('/^[!#$%&\'*+.^_`\|~0-9a-z-]+$/i', $method)) {
            throw new Exception\InvalidArgumentException(sprintf(
                'Unsupported HTTP method "%s" provided',
                $method
            ));
        }
        $this->method = $method;
    }

    /**
     * Create a new URI instance
     */
    private function createUri($uri) : UriInterface
    {
        if($uri instanceof UriInterface) {
            return $uri;
        }

        if(is_string($uri)) {
            return new Uri($uri);
        }

        if($uri === null) {
            return new Uri();
        }

        throw new Exception\InvalidArgumentException(
            'Invalid URI provided; must be null, a string, or a Psr\Http\Message\UriInterface instance'
        );
    }
}