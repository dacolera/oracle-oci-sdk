<?php

namespace Dacolera\OCI\services\core;

use Dacolera\OCI\Exception;
use Dacolera\OCI\service\Resource;
use Dacolera\OCI\services\core\vnic\responses\GetVnic;

class Vnic extends Resource
{
    /**
     * @param $vnicId
     * @return GetVnic
     * @throws Exception
     */
    public function GetVnic($vnicId)
    {
        return new GetVnic($this->call(__METHOD__, [
            'httpPath' => '/20160918/vnics/{vnicId}',
            'pathParams' => [
                'vnicId' => $vnicId,
            ]
        ]));
    }
}
