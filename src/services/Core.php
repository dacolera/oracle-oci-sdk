<?php

namespace Dacolera\OCI\services;

use Dacolera\OCI\contract\Services;
use Dacolera\OCI\Exception;
use Dacolera\OCI\services\core\Instances;
use Dacolera\OCI\services\core\Vnic;
use Dacolera\OCI\services\core\VnicAttachment;


/**
 * @property instances $instances
 * @property VnicAttachment $vnicAttachment
 * @property Vnic $vnic
 */
class Core extends Services
{


    protected const SERVICES = [
//        'Instances' => Instances::class,
//        'VnicAttachment' => VnicAttachment::class,
    ];

    public function getSubdomainName(): string
    {
        return 'iaas';
    }

    public function getVersion(): string
    {
        return '20160918';
    }

    public function getServiceName()
    {
        return 'core';
    }

    public function __get($name)
    {
        $name = ucfirst($name);
        if (!isset($this->services[$name])) {
            if (isset(self::SERVICES[$name]) && class_exists(self::SERVICES[$name])) {
                $className = self::SERVICES[$name];
                $this->services[$name] = new $className($this);
            } elseif (class_exists(__NAMESPACE__ . '\\core\\' . $name)) {
                $className = (__NAMESPACE__ . '\\core\\' . $name);
                $this->services[$name] = new $className($this);
            } else
                throw new Exception("Not Found Service");
        }
        return $this->services[$name];
    }
}
