<?php

namespace Augusl\OCI\services\core\datatypes;

use Augusl\OCI\contract\DataTypes;

class Instance extends DataTypes
{
    /** @var InstanceAgentConfig */
    protected InstanceAgentConfig $agentConfig;
    /** @var InstanceAvailabilityConfig */
    protected InstanceAvailabilityConfig $availabilityConfig;
    /** @var string */
    protected string $availabilityDomain;
    /** @var string */
    protected string $capacityReservationId;
    /** @var string */
    protected string $compartmentId;
    /** @var string */
    protected string $dedicatedVmHostId;
    protected $definedTags;
    /** @var string */
    protected string $displayName;
    /** @var Metadata */
    protected Metadata $extendedMetadata;
    /** @var string */
    protected string $faultDomain;
    /**
     * @var Metadata
     */
    protected Metadata $freeformTags;
    /** @var string */
    protected string $id;
    /** @var string */
    protected string $imageId;
    /** @var InstanceOptions */
    protected InstanceOptions $instanceOptions;
    /** @var string */
    protected string $ipxeScript;
    /** @var string */
    protected string $launchMode;
    /** @var LaunchOptions */
    protected LaunchOptions $launchOptions;
    /** @var string */
    protected string $lifecycleState;
    /** @var Metadata */
    protected Metadata $metadata;
    /** @var PlatformConfig */
    protected PlatformConfig $platformConfig;
    /** @var PreemptibleInstanceConfigDetails */
    protected PreemptibleInstanceConfigDetails $preemptibleInstanceConfig;
    /** @var string */
    protected string $region;
    /** @var string */
    protected string $shape;
    /** @var InstanceShapeConfig */
    protected InstanceShapeConfig $shapeConfig;
    /** @var InstanceSourceDetails */
    protected InstanceSourceDetails $sourceDetails;
    /** @var string */
    protected string $timeCreated;
    /** @var string */
    protected string $timeMaintenanceRebootDue;
    /** @var array[] */
    protected array $systemTags;
    protected $timeStopScheduled;
    protected $preferredMaintenanceAction;

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
    public function getAgentConfig(): InstanceAgentConfig
    {
        return $this->agentConfig;
    }

    /**
     * @return InstanceAvailabilityConfig
     */
    public function getAvailabilityConfig(): InstanceAvailabilityConfig
    {
        return $this->availabilityConfig;
    }

    /**
     * @return string
     */
    public function getAvailabilityDomain(): string
    {
        return $this->availabilityDomain;
    }

    /**
     * @return string
     */
    public function getCapacityReservationId(): string
    {
        return $this->capacityReservationId;
    }

    /**
     * @return LaunchOptions
     */
    public function getLaunchOptions(): LaunchOptions
    {
        return $this->launchOptions;
    }

    /**
     * @return string
     */
    public function getCompartmentId(): string
    {
        return $this->compartmentId;
    }

    /**
     * @return string
     */
    public function getDedicatedVmHostId(): string
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
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @return Metadata
     */
    public function getExtendedMetadata(): Metadata
    {
        return $this->extendedMetadata;
    }

    /**
     * @return string
     */
    public function getFaultDomain(): string
    {
        return $this->faultDomain;
    }

    /**
     * @return Metadata
     */
    public function getFreeformTags(): Metadata
    {
        return $this->freeformTags;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getImageId(): string
    {
        return $this->imageId;
    }

    /**
     * @return InstanceOptions
     */
    public function getInstanceOptions(): InstanceOptions
    {
        return $this->instanceOptions;
    }

    /**
     * @return string
     */
    public function getIpxeScript(): string
    {
        return $this->ipxeScript;
    }

    /**
     * @return string
     */
    public function getLaunchMode(): string
    {
        return $this->launchMode;
    }

    /**
     * @return string
     */
    public function getLifecycleState(): string
    {
        return $this->lifecycleState;
    }

    /**
     * @return Metadata
     */
    public function getMetadata(): Metadata
    {
        return $this->metadata;
    }

    /**
     * @return PlatformConfig
     */
    public function getPlatformConfig(): PlatformConfig
    {
        return $this->platformConfig;
    }

    /**
     * @return PreemptibleInstanceConfigDetails
     */
    public function getPreemptibleInstanceConfig(): PreemptibleInstanceConfigDetails
    {
        return $this->preemptibleInstanceConfig;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getShape(): string
    {
        return $this->shape;
    }

    /**
     * @return InstanceShapeConfig
     */
    public function getShapeConfig(): InstanceShapeConfig
    {
        return $this->shapeConfig;
    }

    /**
     * @return InstanceSourceDetails
     */
    public function getSourceDetails(): InstanceSourceDetails
    {
        return $this->sourceDetails;
    }

    /**
     * @return string
     */
    public function getTimeCreated(): string
    {
        return $this->timeCreated;
    }

    /**
     * @return string
     */
    public function getTimeMaintenanceRebootDue(): string
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
