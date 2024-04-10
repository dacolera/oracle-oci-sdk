<?php

namespace Dacolera\OCI\services\core\datatypes;

use Dacolera\OCI\contract\DataTypes;

class LaunchInstanceDetails extends DataTypes
{
    /**
     * Required: no
     * Type: LaunchInstanceAgentConfigDetails
     * @var LaunchInstanceAgentConfigDetails
     */
    private $agentConfig;
    /**
     * Required: no
     * Type: LaunchInstanceAvailabilityConfigDetails
     * @var LaunchInstanceAvailabilityConfigDetails
     */
    private $availabilityConfig;
    /**
     * availabilityDomain
     * Required: yes </br>
     * Type: string </br>
     * Min Length: 1 </br>
     * Max Length: 255 </br>
     */
    private $availabilityDomain;

    /**
     * Required: no
     * Type: string
     * Default: A default reservation refers to the reservation into which all instance launches are first attempted. If an instance is launched without specifying a reservation ID or if a reservation ID is not present in the JSON input, the instance is automatically launched under this reservation. To opt out, include capacityReservationId: "" in your JSON input. Using an empty string for this field value causes the instance to be launched as a normal instance and not under the default reservation.
     * Min Length: 0
     * Max Length: 255
     * The OCID of the compute capacity reservation this instance is launched under. You can opt out of all default reservations by specifying an empty string as input for this field. For more information, see Capacity Reservations.
     */
    protected $capacityReservationId;
    /** @var string */
    private $compartmentId;
    /** @var CreateVnicDetails */
    private $createVnicDetails;
    /** @var string */
    private $dedicatedVmHostId;

    private $definedTags;
    /** @var string */
    private $displayName;
    /** @var array */
    private $extendedMetadata;
    /** @var string */
    private $faultDomain;
    /** @var array */
    private $freeformTags;
    /** @var string */
    private $hostnameLabel;
    /** @var string */
    private $imageId;
    /** @var InstanceOptions */
    private $instanceOptions;
    /** @var string */
    private $ipxeScript;
    /** @var boolean */
    private $isPvEncryptionInTransitEnabled;
    private $launchMode;
    /**
     * ENUM
     *
     * NATIVE
     * EMULATED
     * PARAVIRTUALIZED
     * CUSTOM
     */
    private $launchOptions;
    /** @var Metadata */
    private $metadata;
    /** @var LaunchInstancePlatformConfig */
    private $platformConfig;
    /** @var PreemptibleInstanceConfigDetails */
    private $preemptibleInstanceConfig;
    private $shape;
    /** @var LaunchInstanceShapeConfigDetails */
    private $shapeConfig;
    /** @var InstanceSourceDetails */
    private $sourceDetails;
    private $subnetId;

    /**
     * @param string $displayName
     * @return LaunchInstanceDetails
     */
    public function setDisplayName(string $displayName): LaunchInstanceDetails
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDedicatedVmHostId(): string
    {
        return $this->dedicatedVmHostId;
    }

    /**
     * @param string $dedicatedVmHostId
     */
    public function setDedicatedVmHostId(string $dedicatedVmHostId): void
    {
        $this->dedicatedVmHostId = $dedicatedVmHostId;
    }

    /**
     * @param LaunchInstanceAvailabilityConfigDetails $availabilityConfig
     * @return LaunchInstanceDetails
     */
    public function setAvailabilityConfig(LaunchInstanceAvailabilityConfigDetails $availabilityConfig): LaunchInstanceDetails
    {
        $this->availabilityConfig = $availabilityConfig;
        return $this;
    }

    /**
     * @return LaunchInstanceAvailabilityConfigDetails
     */
    public function getAvailabilityConfig(): LaunchInstanceAvailabilityConfigDetails
    {
        return $this->availabilityConfig;
    }

    /**
     * @param string $availabilityDomain
     */
    public function setAvailabilityDomain(string $availabilityDomain): LaunchInstanceDetails
    {
        $this->availabilityDomain = $availabilityDomain;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvailabilityDomain()
    {
        return $this->availabilityDomain;
    }

    /**
     * @param string $compartmentId
     * @return LaunchInstanceDetails
     */
    public function setCompartmentId(string $compartmentId): LaunchInstanceDetails
    {
        $this->compartmentId = $compartmentId;
        return $this;
    }

    /**
     * @param CreateVnicDetails $createVnicDetails
     * @return LaunchInstanceDetails
     */
    public function setCreateVnicDetails(CreateVnicDetails $createVnicDetails): LaunchInstanceDetails
    {
        $this->createVnicDetails = $createVnicDetails;
        return $this;
    }

    /**
     * @param mixed $definedTags
     * @return LaunchInstanceDetails
     */
    public function setDefinedTags($definedTags)
    {
        $this->definedTags = $definedTags;
        return $this;
    }

    /**
     * @param array $extendedMetadata
     * @return LaunchInstanceDetails
     */
    public function setExtendedMetadata(array $extendedMetadata): LaunchInstanceDetails
    {
        $this->extendedMetadata = $extendedMetadata;
        return $this;
    }

    /**
     * @param string $faultDomain
     * @return LaunchInstanceDetails
     */
    public function setFaultDomain(string $faultDomain): LaunchInstanceDetails
    {
        $this->faultDomain = $faultDomain;
        return $this;
    }

    /**
     * @param array $freeformTags
     * @return LaunchInstanceDetails
     */
    public function setFreeformTags(array $freeformTags): LaunchInstanceDetails
    {
        $this->freeformTags = $freeformTags;
        return $this;
    }

    /**
     * @param string $hostnameLabel
     * @return LaunchInstanceDetails
     */
    public function setHostnameLabel(string $hostnameLabel): LaunchInstanceDetails
    {
        $this->hostnameLabel = $hostnameLabel;
        return $this;
    }

    /**
     * @param string $imageId
     * @return LaunchInstanceDetails
     */
    public function setImageId(string $imageId): LaunchInstanceDetails
    {
        $this->imageId = $imageId;
        return $this;
    }

    /**
     * @param InstanceOptions $instanceOptions
     * @return LaunchInstanceDetails
     */
    public function setInstanceOptions(InstanceOptions $instanceOptions): LaunchInstanceDetails
    {
        $this->instanceOptions = $instanceOptions;
        return $this;
    }

    /**
     * @param string $ipxeScript
     * @return LaunchInstanceDetails
     */
    public function setIpxeScript(string $ipxeScript): LaunchInstanceDetails
    {
        $this->ipxeScript = $ipxeScript;
        return $this;
    }

    /**
     * @param bool $isPvEncryptionInTransitEnabled
     * @return LaunchInstanceDetails
     */
    public function setIsPvEncryptionInTransitEnabled(bool $isPvEncryptionInTransitEnabled): LaunchInstanceDetails
    {
        $this->isPvEncryptionInTransitEnabled = $isPvEncryptionInTransitEnabled;
        return $this;
    }

    /**
     * @param mixed $launchMode
     * @return LaunchInstanceDetails
     */
    public function setLaunchMode($launchMode)
    {
        $this->launchMode = $launchMode;
        return $this;
    }

    /**
     * @param $subnetId
     * @return LaunchInstanceDetails
     */
    public function setSubnetId($subnetId)
    {
        $this->subnetId = $subnetId;
        return $this;
    }

    /**
     * @param InstanceSourceDetails $sourceDetails
     * @return LaunchInstanceDetails
     */
    public function setSourceDetails(InstanceSourceDetails $sourceDetails): LaunchInstanceDetails
    {
        $this->sourceDetails = $sourceDetails;
        return $this;
    }

    /**
     * @param LaunchInstanceShapeConfigDetails $shapeConfig
     * @return LaunchInstanceDetails
     */
    public function setShapeConfig(LaunchInstanceShapeConfigDetails $shapeConfig): LaunchInstanceDetails
    {
        $this->shapeConfig = $shapeConfig;
        return $this;
    }

    /**
     * @param PreemptibleInstanceConfigDetails $preemptibleInstanceConfig
     * @return LaunchInstanceDetails
     */
    public function setPreemptibleInstanceConfig(PreemptibleInstanceConfigDetails $preemptibleInstanceConfig): LaunchInstanceDetails
    {
        $this->preemptibleInstanceConfig = $preemptibleInstanceConfig;
        return $this;
    }

    /**
     * @param string $shape
     * @return LaunchInstanceDetails
     */
    public function setShape($shape)
    {
        $this->shape = $shape;
        return $this;
    }

    /**
     * @param LaunchInstancePlatformConfig $platformConfig
     * @return LaunchInstanceDetails
     */
    public function setPlatformConfig(LaunchInstancePlatformConfig $platformConfig): LaunchInstanceDetails
    {
        $this->platformConfig = $platformConfig;
        return $this;
    }

    /**
     * @param Metadata $metadata
     * @return LaunchInstanceDetails
     */
    public function setMetadata(Metadata $metadata): LaunchInstanceDetails
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * @param $launchOptions
     * @return LaunchInstanceDetails
     */
    public function setLaunchOptions($launchOptions)
    {
        $this->launchOptions = $launchOptions;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubnetId()
    {
        return $this->subnetId;
    }

    /**
     * @return InstanceSourceDetails
     */
    public function getSourceDetails(): InstanceSourceDetails
    {
        return $this->sourceDetails;
    }

    /**
     * @return LaunchInstanceShapeConfigDetails
     */
    public function getShapeConfig(): LaunchInstanceShapeConfigDetails
    {
        return $this->shapeConfig;
    }

    /**
     * @return mixed
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * @return PreemptibleInstanceConfigDetails
     */
    public function getPreemptibleInstanceConfig(): PreemptibleInstanceConfigDetails
    {
        return $this->preemptibleInstanceConfig;
    }

    /**
     * @return LaunchInstancePlatformConfig
     */
    public function getPlatformConfig(): LaunchInstancePlatformConfig
    {
        return $this->platformConfig;
    }

    /**
     * @return Metadata
     */
    public function getMetadata(): Metadata
    {
        return $this->metadata;
    }

    /**
     * @return mixed
     */
    public function getLaunchOptions()
    {
        return $this->launchOptions;
    }

    /**
     * @return mixed
     */
    public function getLaunchMode()
    {
        return $this->launchMode;
    }

    /**
     * @return bool
     */
    public function isPvEncryptionInTransitEnabled(): bool
    {
        return $this->isPvEncryptionInTransitEnabled;
    }

    /**
     * @return string
     */
    public function getIpxeScript(): string
    {
        return $this->ipxeScript;
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
    public function getImageId(): string
    {
        return $this->imageId;
    }

    /**
     * @return string
     */
    public function getHostnameLabel(): string
    {
        return $this->hostnameLabel;
    }

    /**
     * @return array
     */
    public function getFreeformTags()
    {
        return $this->freeformTags;
    }

    /**
     * @return string
     */
    public function getFaultDomain(): string
    {
        return $this->faultDomain;
    }

    /**
     * @return array
     */
    public function getExtendedMetadata()
    {
        return $this->extendedMetadata;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
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
     * @return CreateVnicDetails
     */
    public function getCreateVnicDetails(): CreateVnicDetails
    {
        return $this->createVnicDetails;
    }

    /**
     * @return string
     */
    public function getCompartmentId(): string
    {
        return (string)$this->compartmentId;
    }
}
