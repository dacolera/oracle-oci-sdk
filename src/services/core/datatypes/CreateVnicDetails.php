<?php

namespace Augusl\OCI\services\core\datatypes;

use Augusl\OCI\contract\DataTypes;

class CreateVnicDetails extends DataTypes
{
    private $assignPrivateDnsRecord;
    private $assignPublicIp;
    private $definedTags;
    private $displayName;
    private $freeformTags;
    private $hostnameLabel;
    private $nsgIds;
    private $privateIp;
    private $skipSourceDestCheck;
    private $subnetId;
    private $vlanId;

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
