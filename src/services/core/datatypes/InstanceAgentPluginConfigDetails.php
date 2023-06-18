<?php

namespace Augusl\OCI\services\core\datatypes;

use Augusl\OCI\contract\DataTypes;

class InstanceAgentPluginConfigDetails extends DataTypes
{
    private $desiredState;
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDesiredState()
    {
        return $this->desiredState;
    }
}
