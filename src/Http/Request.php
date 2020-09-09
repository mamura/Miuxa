<?php
namespace Miuxa\Http;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

class Request
{
    //use MessageTrait;

    protected $params = [];
    protected $method;
    protected $pathInfo;
    protected $requestUri;
    protected $baseUrl;
    protected $basePath;

    public function __construct()
    {
        $this->method   = $_SERVER['REQUEST_METHOD'];
        $this->pathInfo = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $dirname        = dirname($_SERVER['SCRIPT_NAME']);
        
        if($dirname != '/') {
            $this->pathInfo = str_replace($dirname, '', $this->pathInfo);
        }

        if (empty($this->pathInfo)) {
            $this->pathInfo = '/';
        } elseif (!$this->pathInfo != '/') {
            $this->pathInfo = '/' . $this->pathInfo . '/';
        }
        
        $this->pathInfo = preg_replace('/\/+/', '/', $this->pathInfo);
        
        switch ($this->method) {
            case 'GET':
                $this->params = $_GET;
                break;

            case 'POST':
                $this->params = $_POST;

                if (!empty($_GET)) {
                    $this->params = array_merge($_GET, $this->params);
                }
                break;
        }
        
    }

    public function url()
    {
        //$page
    }

    public function bindParams(array $parameters)
    {
        $this->params = array_merge($this->params, $parameters);

        return $this;
    }

    public function getParam(string $name, $default = null)
    {
        $result = $this->params[$name] ?? $default;
        return is_string($result) ? trim($result) : $result;
    }
    
    public function getRequestTarget(){}


    public function withRequestTarget($requestTarget){}

    
    public function getMethod(){}

    
    public function withMethod($method){}

    
    public function getUri(){}

    
    public function withUri(UriInterface $uri, $preserveHost = false){}

    /** Message Interface */
    public function getProtocolVersion(){}

    public function withProtocolVersion($version){}

    public function getHeaders(){}

    public function hasHeader($name){}

    public function getHeader($name){}

    public function getHeaderLine($name){}

    public function withHeader($name, $value){}

    public function withAddedHeader($name, $value){}

    public function withoutHeader($name){}

    public function getBody(){}

    //public function withBody(StreamInterface $body){}

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