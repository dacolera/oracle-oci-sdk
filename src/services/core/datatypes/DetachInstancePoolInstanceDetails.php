<?php

namespace Augusl\OCI\services\core\datatypes;

use Augusl\OCI\contract\DataTypes;

class DetachInstancePoolInstanceDetails extends DataTypes
{

    private string $instanceId;

    private bool $isAutoTerminate;

    private bool $isDecrementSize;

    /**
     * @param string $instanceId
     * @return $this
     */
    public function setInstanceId(string $instanceId): DetachInstancePoolInstanceDetails
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * @param bool $isAutoTerminate
     * @return $this
     */
    public function setIsAutoTerminate(bool $isAutoTerminate): DetachInstancePoolInstanceDetails
    {
        $this->isAutoTerminate = $isAutoTerminate;
        return $this;
    }

    /**
     * @param bool $isDecrementSize
     * @return $this
     */
    public function setIsDecrementSize(bool $isDecrementSize): DetachInstancePoolInstanceDetails
    {
        $this->isDecrementSize = $isDecrementSize;
        return $this;
    }
}