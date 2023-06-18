<?php

namespace Augusl\OCI\services;

use Augusl\OCI\contract\Services;
use Augusl\OCI\Exception;
use Augusl\OCI\services\core\Instances;
use Augusl\OCI\services\core\Vnic;
use Augusl\OCI\services\core\VnicAttachment;


/**
 * @property instances      $instances
 * @property VnicAttachment $vnicAttachment
 * @property Vnic           $vnic
 */
class Core extends Services
{


    protected const SERVICES = [
//        'Instances' => Instances::class,
//        'VnicAttachment' => VnicAttachment::class,
    ];

    /**
     * @return string
     */
    public function getSubdomainName(): string
    {
        return 'iaas';
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return '20160918';
    }

    /**
     * @return string
     */
    public function getServiceName(): string
    {
        return 'core';
    }

    /**
     * @param $name
     * @return mixed
     * @throws Exception
     */
    public function __get($name)
    {
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
