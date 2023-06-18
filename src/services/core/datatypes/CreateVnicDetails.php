<?php

namespace Augusl\OCI\services\core\datatypes;

use Augusl\OCI\contract\DataTypes;

class CreateVnicDetails extends DataTypes
{
    protected $assignPrivateDnsRecord;
    protected $assignPublicIp;
    protected $definedTags;
    protected $displayName;
    protected $freeformTags;
    protected $hostnameLabel;
    protected $nsgIds;
    protected $privateIp;
    protected $skipSourceDestCheck;
    protected $subnetId;
    protected $vlanId;

    /**
     * @param mixed $assignPublicIp
     * @return CreateVnicDetails
     */
    public function setAssignPublicIp($assignPublicIp): CreateVnicDetails
    {
        $this->assignPublicIp = $assignPublicIp;
        return $this;
    }

    /**
     * @param mixed $subnetId
     * @return CreateVnicDetails
     */
    public function setSubnetId($subnetId): CreateVnicDetails
    {
        $this->subnetId = $subnetId;
        return $this;
    }
}
