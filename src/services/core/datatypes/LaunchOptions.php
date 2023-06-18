<?php

namespace Augusl\OCI\services\core\datatypes;

use Augusl\OCI\contract\DataTypes;

class LaunchOptions extends DataTypes
{
    private $bootVolumeType;
    private $firmware;
    private $isConsistentVolumeNamingEnabled;
    private $isPvEncryptionInTransitEnabled;
    private $networkType;
    private $remoteDataVolumeType;
}
