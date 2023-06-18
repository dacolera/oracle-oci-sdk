<?php

namespace Augusl\OCI\contract;

use Augusl\OCI\Client;

abstract class Services
{

    protected array $services = [];

    /**
     * @var Client
     */
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * service Subdomain name
     * @return string
     */
    abstract public function getSubdomainName(): string;

    /**
     * api version
     * @return string
     */
    abstract public function getVersion(): string;

    /**
     * @return string
     */
    public function getDomainName(): string
    {
        return 'oraclecloud.com';
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @return mixed
     */
    abstract public function getServiceName();


}
