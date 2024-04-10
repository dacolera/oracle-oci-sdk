<?php

namespace Dacolera\OCI\services\core;

use Dacolera\OCI\Exception;
use Dacolera\OCI\service\Resource;
use Dacolera\OCI\services\core\datatypes\DetachInstancePoolInstanceDetails;
use Dacolera\OCI\services\core\datatypes\InstancePowerActionDetails;
use Dacolera\OCI\services\core\datatypes\LaunchInstanceDetails;
use Dacolera\OCI\services\core\instances\responses\DeleteInstance;
use Dacolera\OCI\services\core\instances\responses\DetachInstancePoolInstance;
use Dacolera\OCI\services\core\instances\responses\GetInstance;
use Dacolera\OCI\services\core\instances\responses\InstanceAction;
use Dacolera\OCI\services\core\instances\responses\LaunchInstance;
use Dacolera\OCI\services\core\instances\responses\ListInstance;

class Instances extends Resource
{
    /**
     * @param LaunchInstanceDetails $postBody
     * @return LaunchInstance
     * @throws Exception
     * @link https://docs.oracle.com/en-us/iaas/api/#/en/iaas/20160918  /Instance/LaunchInstance
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
     * @throws Exception
     */
    public function instanceAction(string $instanceId, string $action, InstancePowerActionDetails $postBody): InstanceAction
    {
        return new InstanceAction($this->call(__METHOD__, [
            'httpPath' => '/20160918/instances/{instanceId}',
            'httpMethod' => 'POST',
            'pathParams' => [
                'instanceId' => $instanceId,
            ],
            'queryParams' => [
                'action' => $action,
            ],
            'postBody' => $postBody->toArray(),
        ]));
    }

    /**
     * @param $instanceId
     * @return GetInstance
     * @throws Exception
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

    public function listInstances($queryParams = []): ListInstance
    {
        if (empty($queryParams['compartmentId'])) {
            $queryParams['compartmentId'] = $this->service->getClient()->getOciTenancyId();
        }
        return new ListInstance($this->call(__METHOD__, [
            'httpPath' => '/20160918/instances/',
            'httpMethod' => 'GET',
            'queryParams' => $queryParams
        ]));
    }

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

    public function detachInstancePoolInstance(string $instancePoolId, DetachInstancePoolInstanceDetails $postBody): DetachInstancePoolInstance
    {
        return new DetachInstancePoolInstance($this->call(__METHOD__, [
            'httpPath' => '/20160918/instancePools/{instancePoolId}/actions/detachInstance',
            'httpMethod' => 'POST',
            'pathParams' => [
                'instancePoolId' => $instancePoolId,
            ],
            'postBody' => $postBody->toArray(),
        ]));
    }
}
