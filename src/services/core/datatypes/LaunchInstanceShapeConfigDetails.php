<?php

namespace Dacolera\OCI\services\core\datatypes;

use Dacolera\OCI\contract\DataTypes;

class LaunchInstanceShapeConfigDetails extends DataTypes
{

    private $memoryInGBs;
    private $ocpus;

    /**
     * @param mixed $memoryInGBs
     * @return LaunchInstanceShapeConfigDetails
     */
    public function setMemoryInGBs($memoryInGBs)
    {
        $this->memoryInGBs = $memoryInGBs;
        return $this;
    }

    /**
     * @param mixed $ocpus
     * @return LaunchInstanceShapeConfigDetails
     */
    public function setOcpus($ocpus)
    {
        $this->ocpus = $ocpus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOcpus()
    {
        return $this->ocpus;
    }

    /**
     * @return mixed
     */
    public function getMemoryInGBs()
    {
        return $this->memoryInGBs;
    }
}

