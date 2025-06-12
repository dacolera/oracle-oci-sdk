<?php

namespace Dacolera\OCI\services\core\datatypes;

use Dacolera\OCI\contract\DataTypes;

class Instance extends DataTypes
{
    /** @var InstanceAgentConfig */
    private $agentConfig;
    /** @var InstanceAvailabilityConfig */
    private $availabilityConfig;
    /** @var string */
    private $availabilityDomain;
    /** @var string */
    private $capacityReservationId;
    /** @var string */
    private $compartmentId;
    /** @var string */
    private $dedicatedVmHostId;
    private $definedTags;
    /** @var string */
    private $displayName;
    /** @var Metadata */
    private $extendedMetadata;
    /** @var string */
    private $faultDomain;
    /**
     * @var Metadata
     */
    private $freeformTags;
    /** @var string */
    private $id;
    /** @var string */
    private $imageId;
    /** @var InstanceOptions */
    private $instanceOptions;
    /** @var string */
    private $ipxeScript;
    /** @var string */
    private $launchMode;
    /** @var LaunchOptions */
    private $launchOptions;
    /** @var string */
    private $lifecycleState;
    /** @var Metadata */
    private $metadata;
    /** @var PlatformConfig */
    private $platformConfig;
    /** @var PreemptibleInstanceConfigDetails */
    private $preemptibleInstanceConfig;
    /** @var string */
    private $region;
    /** @var string */
    private $shape;
    /** @var InstanceShapeConfig */
    private $shapeConfig;
    /** @var InstanceSourceDetails */
    private $sourceDetails;
    /** @var string */
    private $timeCreated;
    /** @var string */
    private $timeMaintenanceRebootDue;
    /** @var array[] */
    private $systemTags;
    private $timeStopScheduled;
    private $preferredMaintenanceAction;

    // new attributes for php 8.3
    private $isCrossNumaNode;
    private $instanceConfigurationId;
    private $licensingConfigs;
    private $securityAttributes;
    private $securityAttributesState;
    private $clusterPlacementGroupId;
    private $placementConstraintDetails;
    private $computeHostGroupId;

    protected const FROM_ARRAY_TEMPLATE = [
        'agentConfig' => InstanceAgentConfig::class,
        'availabilityConfig' => InstanceAvailabilityConfig::class,
        'extendedMetadata' => Metadata::class,
        'instanceOptions' => InstanceOptions::class,
        'launchOptions' => LaunchOptions::class,
        'metadata' => Metadata::class,
        'platformConfig' => PlatformConfig::class,
        'preemptibleInstanceConfig' => PreemptibleInstanceConfigDetails::class,
        'shapeConfig' => InstanceShapeConfig::class,
        'sourceDetails' => InstanceSourceDetails::class,
    ];

    /**
     * @return InstanceAgentConfig
     */
    public function getAgentConfig()
    {
        return $this->agentConfig;
    }

    /**
     * @return InstanceAvailabilityConfig
     */
    public function getAvailabilityConfig()
    {
        return $this->availabilityConfig;
    }

    /**
     * @return string
     */
    public function getAvailabilityDomain()
    {
        return $this->availabilityDomain;
    }

    /**
     * @return string
     */
    public function getCapacityReservationId()
    {
        return $this->capacityReservationId;
    }

    /**
     * @return LaunchOptions
     */
    public function getLaunchOptions()
    {
        return $this->launchOptions;
    }

    /**
     * @return string
     */
    public function getCompartmentId()
    {
        return $this->compartmentId;
    }

    /**
     * @return string
     */
    public function getDedicatedVmHostId()
    {
        return $this->dedicatedVmHostId;
    }

    /**
     * @return mixed
     */
    public function getDefinedTags()
    {
        return $this->definedTags;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @return Metadata
     */
    public function getExtendedMetadata()
    {
        return $this->extendedMetadata;
    }

    /**
     * @return string
     */
    public function getFaultDomain()
    {
        return $this->faultDomain;
    }

    /**
     * @return Metadata
     */
    public function getFreeformTags()
    {
        return $this->freeformTags;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * @return InstanceOptions
     */
    public function getInstanceOptions()
    {
        return $this->instanceOptions;
    }

    /**
     * @return string
     */
    public function getIpxeScript()
    {
        return $this->ipxeScript;
    }

    /**
     * @return string
     */
    public function getLaunchMode()
    {
        return $this->launchMode;
    }

    /**
     * @return string
     */
    public function getLifecycleState()
    {
        return $this->lifecycleState;
    }

    /**
     * @return Metadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @return PlatformConfig
     */
    public function getPlatformConfig()
    {
        return $this->platformConfig;
    }

    /**
     * @return PreemptibleInstanceConfigDetails
     */
    public function getPreemptibleInstanceConfig()
    {
        return $this->preemptibleInstanceConfig;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * @return InstanceShapeConfig
     */
    public function getShapeConfig()
    {
        return $this->shapeConfig;
    }

    /**
     * @return InstanceSourceDetails
     */
    public function getSourceDetails()
    {
        return $this->sourceDetails;
    }

    /**
     * @return string
     */
    public function getTimeCreated()
    {
        return $this->timeCreated;
    }

    /**
     * @return string
     */
    public function getTimeMaintenanceRebootDue()
    {
        return $this->timeMaintenanceRebootDue;
    }

    /**
     * @return array
     */
    public function getSystemTags(): array
    {
        return $this->systemTags;
    }

    /**
     * @return mixed
     */
    public function getTimeStopScheduled()
    {
        return $this->timeStopScheduled;
    }

    /**
     * @return mixed
     */
    public function getPreferredMaintenanceAction()
    {
        return $this->preferredMaintenanceAction;
    }
}
