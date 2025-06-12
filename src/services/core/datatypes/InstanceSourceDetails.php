<?php

namespace Dacolera\OCI\services\core\datatypes;

use Dacolera\OCI\contract\DataTypes;

class InstanceSourceDetails extends DataTypes
{

    private $sourceType;
    private $bootVolumeSizeInGBs;
    private $imageId;
    private $kmsKeyId;
    private $bootVolumeVpusPerGB;
    private $instanceSourceImageFilterDetails;

    /**
     * @return mixed
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * @return mixed
     */
    public function getBootVolumeSizeInGBs()
    {
        return $this->bootVolumeSizeInGBs;
    }

    /**
     * @return mixed
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * @return mixed
     */
    public function getKmsKeyId()
    {
        return $this->kmsKeyId;
    }

    /**
     * @return mixed
     */
    public function getBootVolumeVpusPerGB()
    {
        return $this->bootVolumeVpusPerGB;
    }
}
