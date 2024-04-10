<?php

namespace Dacolera\OCI\services\core\datatypes;

use Dacolera\OCI\contract\DataTypes;

class InstanceAgentConfig extends DataTypes
{
    private $areAllPluginsDisabled;
    private $isManagementDisabled;
    private $isMonitoringDisabled;
    /** @var InstanceAgentPluginConfigDetails[] */
    private $pluginsConfig;

    protected const FROM_ARRAY_TEMPLATE = [
        'pluginsConfig' => InstanceAgentPluginConfigDetails::class
    ];

    /**
     * @return InstanceAgentPluginConfigDetails[]
     */
    public function getPluginsConfig()
    {
        return $this->pluginsConfig;
    }

    /**
     * @return mixed
     */
    public function getIsMonitoringDisabled()
    {
        return $this->isMonitoringDisabled;
    }

    /**
     * @return mixed
     */
    public function getIsManagementDisabled()
    {
        return $this->isManagementDisabled;
    }

    /**
     * @return mixed
     */
    public function getAreAllPluginsDisabled()
    {
        return $this->areAllPluginsDisabled;
    }
}
