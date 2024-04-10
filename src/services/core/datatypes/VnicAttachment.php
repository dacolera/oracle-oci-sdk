<?php

namespace Dacolera\OCI\services\core\datatypes;

use Dacolera\OCI\contract\DataTypes;

class VnicAttachment extends DataTypes
{
    private $availabilityDomain;
    private $compartmentId;
    private $displayName;
    private $id;
    private $instanceId;
    private $lifecycleState;
    private $nicIndex;
    private $subnetId;
    private $timeCreated;
    private $vlanId;
    private $vlanTag;
    private $vnicId;

    /**
     * @return mixed
     */
    public function getVlanTag()
    {
        return $this->vlanTag;
    }

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
    public function getVnicId()
    {
        return $this->vnicId;
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
    public function getNicIndex()
    {
        return $this->nicIndex;
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
    public function getInstanceId()
    {
        return $this->instanceId;
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
    public function getDisplayName()
    {
        return $this->displayName;
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
