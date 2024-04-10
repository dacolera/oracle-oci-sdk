<?php

namespace Dacolera\OCI\services\core\datatypes;

use Dacolera\OCI\contract\DataTypes;

class InstancePowerActionDetails extends DataTypes
{
    private $actionType;

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