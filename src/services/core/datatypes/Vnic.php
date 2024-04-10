<?php

namespace Dacolera\OCI\services\core\datatypes;

use Dacolera\OCI\contract\DataTypes;

class Vnic extends DataTypes
{
    private $availabilityDomain;
    private $compartmentId;
    private $definedTags;
    private $displayName;
    private $freeformTags;
    private $hostnameLabel;
    private $id;
    private $isPrimary;
    private $lifecycleState;
    private $macAddress;
    private $nsgIds;
    private $privateIp;
    private $publicIp;
    private $skipSourceDestCheck;
    private $subnetId;
    private $timeCreated;
    private $vlanId;

    /**
     * @return mixed
     */
    public function getVlanId()
    {
        return $this->vlanId;
    }

    /**
     * @return mixed
     */
    public function getTimeCreated()
    {
        return $this->timeCreated;
    }

    /**
     * @return mixed
     */
    public function getSubnetId()
    {
        return $this->subnetId;
    }

    /**
     * @return mixed
     */
    public function getSkipSourceDestCheck()
    {
        return $this->skipSourceDestCheck;
    }

    /**
     * @return mixed
     */
    public function getPublicIp()
    {
        return $this->publicIp;
    }

    /**
     * @return mixed
     */
    public function getPrivateIp()
    {
        return $this->privateIp;
    }

    /**
     * @return mixed
     */
    public function getNsgIds()
    {
        return $this->nsgIds;
    }

    /**
     * @return mixed
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }

    /**
     * @return mixed
     */
    public function getLifecycleState()
    {
        return $this->lifecycleState;
    }

    /**
     * @return mixed
     */
    public function getIsPrimary()
    {
        return $this->isPrimary;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getHostnameLabel()
    {
        return $this->hostnameLabel;
    }

    /**
     * @return mixed
     */
    public function getFreeformTags()
    {
        return $this->freeformTags;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @return mixed
     */
    public function getDefinedTags()
    {
        return $this->definedTags;
    }

    /**
     * @return mixed
     */
    public function getCompartmentId()
    {
        return $this->compartmentId;
    }

    /**
     * @return mixed
     */
    public function getAvailabilityDomain()
    {
        return $this->availabilityDomain;
    }
}
