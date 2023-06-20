<?php

namespace Augusl\OCI\services\core;

use Augusl\OCI\Exception;
use Augusl\OCI\service\Resource;
use Augusl\OCI\services\core\vnic\responses\GetVnic;

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
