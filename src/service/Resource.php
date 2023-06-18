<?php

namespace Augusl\OCI\service;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Hitrov\OCI\Exception\PrivateKeyFileNotFoundException;
use Hitrov\OCI\Exception\SignerValidateException;
use Hitrov\OCI\Exception\SigningValidationFailedException;
use Psr\Http\Message\ResponseInterface;
use Augusl\OCI\contract\Services;


class Resource
{

    /** @var Services $client */
    protected Services $service;

    public function __construct(Services $service)
    {
        $this->service = $service;
    }


    /**
     * @param $name
     * @param $arguments
     * @return ResponseInterface
     * @throws PrivateKeyFileNotFoundException
     * @throws SignerValidateException
     * @throws SigningValidationFailedException
     * @throws GuzzleException
     */
    protected function call($name, $arguments): ResponseInterface
    {

        $this->service->getClient()->getLogger()->info(
            'Service Call',
            array(
                'service' => $this->service->getServiceName(),
                'resource' => $name,
                'arguments' => $arguments,
            )
        );

        $httpPath = $arguments['httpPath'] ?? '';
        $postBody = $arguments['postBody'] ?? [];
        $method = $arguments['httpMethod'] ?? (empty($postBody) ? 'GET' : 'POST');
        ksort($postBody);
        $postBodyString = json_encode($postBody);
        $pathParams = $arguments['pathParams'] ?? [];
        $queryParams = $arguments['queryParams'] ?? [];
        if (!empty($queryParams)) {
            $httpPath .= '?' . http_build_query($queryParams);
        }

        $url = $this->createRequestUri($httpPath, $pathParams);

        $headers = $this->service->getClient()->getSigner()->getHeaders($url, $method, $postBodyString);

        $newHeaders = [];
        foreach ($headers as $header) {
            $index = strpos($header, ":");
            $key = substr($header, 0, $index);
            $val = substr($header, $index + 2);
            $newHeaders[$key] = trim($val);
        }

        // NOTE: because we're creating the request by hand,
        // and because the service has a rootUrl property
        // the "base_uri" of the Http Client is not accounted for
        $request = new Request(
            $method,
            $url,
            $newHeaders,
            $postBody ? $postBodyString : ''
        );

        return $this->service->getClient()->execute($request, $arguments['options'] ?? []);
    }


    /**
     * @param string $path
     * @param array $queryParams
     * @return array|string|string[]
     */
    protected function createRequestUri(string $path, array $queryParams = [])
    {
        $uri = 'https://{subdomainName}.{region}.{domainName}{path}';

        $uri = str_replace('{region}', $this->service->getClient()->getRegion(), $uri);
        $uri = str_replace('{path}', $path, $uri);
        $uri = str_replace('{subdomainName}', $this->service->getSubdomainName(), $uri);
        $uri = str_replace('{domainName}', $this->service->getDomainName(), $uri);


        if (!empty($queryParams)) {
            foreach ($queryParams as $key => $val) {
                $uri = str_replace("{{$key}}", $val, $uri);
            }
        }
        return $uri;
    }
}
