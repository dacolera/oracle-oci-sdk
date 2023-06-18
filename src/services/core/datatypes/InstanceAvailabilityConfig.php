<?php

namespace Augusl\OCI\services\core\datatypes;

use Augusl\OCI\contract\DataTypes;

class InstanceAvailabilityConfig extends DataTypes
{
    private $isLiveMigrationPreferred;
    private $recoveryAction;

    /**
     * @return mixed
     */
    public function getIsLiveMigrationPreferred()
    {
        return $this->isLiveMigrationPreferred;
    }

    /**
     * @return mixed
     */
    public function getRecoveryAction()
    {
        return $this->recoveryAction;
    }
}
