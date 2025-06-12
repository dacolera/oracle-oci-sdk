<?php

namespace Dacolera\OCI\services\core\datatypes;

use Dacolera\OCI\contract\DataTypes;

class LaunchOptions extends DataTypes
{
    private $bootVolumeType;
    private $firmware;
    private $isConsistentVolumeNamingEnabled;
    private $isPvEncryptionInTransitEnabled;
    private $networkType;
    private $remoteDataVolumeType;
    private $isEncryptionInTransitEnabled;
}
