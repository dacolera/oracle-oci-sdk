<?php

namespace Augusl\OCI\services\core\datatypes;

use Augusl\OCI\contract\DataTypes;

class InstancePowerActionDetails extends DataTypes
{
    private string $actionType;

    /**
     * @param string $actionType
     * @return $this
     */
    public function setActionType(string $actionType): InstancePowerActionDetails
    {
        $this->actionType = $actionType;
        return $this;
    }
}