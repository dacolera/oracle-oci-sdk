<?php

namespace Augusl\OCI\services\core;

use Augusl\OCI\Exception;
use Augusl\OCI\service\Resource;
use Augusl\OCI\services\core\datatypes\LaunchInstanceDetails;
use Augusl\OCI\services\core\instances\responses\DeleteInstance;
use Augusl\OCI\services\core\instances\responses\GetInstance;
use Augusl\OCI\services\core\instances\responses\InstanceAction;
use Augusl\OCI\services\core\instances\responses\LaunchInstance;
use Augusl\OCI\services\core\instances\responses\ListInstance;
use GuzzleHttp\Exception\GuzzleException;
use Hitrov\OCI\Exception\PrivateKeyFileNotFoundException;
use Hitrov\OCI\Exception\SignerValidateException;
use Hitrov\OCI\Exception\SigningValidationFailedException;

class Instances extends Resource
{

    /**
     * @param LaunchInstanceDetails $postBody
     * @return LaunchInstance
     * @throws GuzzleException
     * @throws PrivateKeyFileNotFoundException
     * @throws SignerValidateException
     * @throws SigningValidationFailedException
     */
    public function launchInstance(LaunchInstanceDetails $postBody): LaunchInstance
    {
        if (empty($postBody->getCompartmentId())) {
            $postBody->setCompartmentId($this->service->getClient()->getOciTenancyId());
        }
        return new LaunchInstance($this->call(__METHOD__, [
            'httpPath' => '/20160918/instances/',
            'httpMethod' => 'POST',
            'postBody' => $postBody->toArray(),
        ]));
    }


    const InstanceAction_STOP = 'STOP';
    const InstanceAction_START = 'START';
    const InstanceAction_SOFTRESET = 'SOFTRESET';
    const InstanceAction_RESET = 'RESET';
    const InstanceAction_SOFTSTOP = 'SOFTSTOP';
    const InstanceAction_SENDDIAGNOSTICINTERRUPT = 'SENDDIAGNOSTICINTERRUPT';


    /**
     * @param string $instanceId
     * @param string $action
     * @return InstanceAction
     * @throws GuzzleException
     * @throws PrivateKeyFileNotFoundException
     * @throws SignerValidateException
     * @throws SigningValidationFailedException
     */
    public function instanceAction(string $instanceId, string $action): InstanceAction
    {
        return new InstanceAction($this->call(__METHOD__, [
            'httpPath' => '/20160918/instances/{instanceId}',
            'httpMethod' => 'POST',
            'pathParams' => [
                'instanceId' => $instanceId,
            ],
            'queryParams' => [
                'action' => $action,
            ]
        ]));
    }


    /**
     * @param $instanceId
     * @return GetInstance
     * @throws GuzzleException
     * @throws PrivateKeyFileNotFoundException
     * @throws SignerValidateException
     * @throws SigningValidationFailedException
     */
    public function getInstance($instanceId): GetInstance
    {
        return new GetInstance($this->call(__METHOD__, [
            'httpPath' => '/20160918/instances/{instanceId}',
            'httpMethod' => 'GET',
            'pathParams' => [
                'instanceId' => $instanceId,
            ],
        ]));
    }

    /**
     * @param array $queryParams
     * @return ListInstance
     * @throws GuzzleException
     * @throws PrivateKeyFileNotFoundException
     * @throws SignerValidateException
     * @throws SigningValidationFailedException
     */
    public function listInstances(array $queryParams = []): ListInstance
    {
        $queryParams['compartmentId'] = $this->service->getClient()->getOciTenancyId();
        return new ListInstance($this->call(__METHOD__, [
            'httpPath' => '/20160918/instances/',
            'httpMethod' => 'GET',
            'queryParams' => $queryParams
        ]));
    }

    /**
     * @param $instanceId
     * @return DeleteInstance
     * @throws GuzzleException
     * @throws PrivateKeyFileNotFoundException
     * @throws SignerValidateException
     * @throws SigningValidationFailedException
     */
    public function deleteInstance($instanceId): DeleteInstance
    {
        return new DeleteInstance($this->call(__METHOD__, [
            'httpPath' => '/20160918/instances/{instanceId}',
            'httpMethod' => 'DELETE',
            'pathParams' => [
                'instanceId' => $instanceId
            ]
        ]));
    }
}
