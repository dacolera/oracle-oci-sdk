<?php

namespace Augusl\OCI\contract;

use Psr\Http\Message\ResponseInterface;

abstract class Response
{
    /**
     * @var \GuzzleHttp\Psr7\Response
     * @deprecated
     */
    protected $response;

    protected $contents;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
        $this->contents = $response->getBody()->getContents();
    }

    public function getStatusCode()
    {
        return $this->response->getStatusCode();
    }

    public function getETag()
    {
        return $this->response->getHeader('etag');
    }

    /**
     * @return ResponseInterface
     * @deprecated
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function getOpcRequestId()
    {
        return $this->response->getHeader('opc-request-id');
    }

    /**
     * @return string
     */
    public function getContents(): string
    {
        return $this->contents;
    }
}
