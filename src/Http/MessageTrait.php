<?php
namespace Miuxa\Http;

trait MessageTrait
{
    protected $headers      = [];
    protected $headerNames  = [];

    /**
     * Checks if a header exists by the given case-insensitive name
     */
    public function hasHeader($header) : bool
    {
        return isset($this->headerNames[strtolower($header)]);
    }

    private function setHeaders(array $originalHeaders) : void
    {
        $headerNames = $headers = [];

        foreach($originalHeaders as $header => $value) {
            $value = $this->filterHeaderValue($value);
            $this->assertHeader($header);

            $headerNames[strtolower($header)]   = $header;
            $headers[$header]                   = $value;
        }

        $this->headerNames  = $headerNames;
        $this->headers      = $headers;
    }

    private function filterHeaderValue($values) : array
    {
        if(!is_array($values)) {
            $values = [$values];
        }

        if($values === []) {
            throw new Exception\InvalidArgumentException(
                'Invalid header value: must be a string or array of strings; '
                . 'cannot be an empty array'
            );
        }

        return array_map(function($value){
            HeaderSecurity::assertValid($value);
            return (string) $value;
        }, array_values($values));
    }

    private function assertHeader($name) : void
    {
        HeaderSecurity::assertValidName($name);
    }

    /**
     * Retrieve the host from the URI instance
     */
    private function getHostFromUri() : string
    {
        $host  = $this->uri->getHost();
        $host .= $this->uri->getPort() ? ':' . $this->uri->getPort() : '';
        return $host;
    }
}