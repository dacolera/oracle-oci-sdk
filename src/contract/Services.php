<?php

namespace Augusl\OCI\contract;

use Augusl\OCI\Client;

abstract class Services
{

    protected $services = [];

    /**
     * @var Client
     */
    protected $client;

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
    public function getDomainName()
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
