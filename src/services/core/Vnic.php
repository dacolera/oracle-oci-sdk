<?php

namespace Augusl\OCI\services\core;

use Augusl\OCI\Exception;
use Augusl\OCI\service\Resource;
use Augusl\OCI\services\core\vnic\responses\GetVnic;
use GuzzleHttp\Exception\GuzzleException;
use Hitrov\OCI\Exception\PrivateKeyFileNotFoundException;
use Hitrov\OCI\Exception\SignerValidateException;
use Hitrov\OCI\Exception\SigningValidationFailedException;

class Vnic extends Resource
{

    /**
     * @param $vnicId
     * @return GetVnic
     * @throws GuzzleException
     * @throws PrivateKeyFileNotFoundException
     * @throws SignerValidateException
     * @throws SigningValidationFailedException
     */
    public function GetVnic($vnicId): GetVnic
    {
        return new GetVnic($this->call(__METHOD__, [
            'httpPath' => '/20160918/vnics/{vnicId}',
            'pathParams' => [
                'vnicId' => $vnicId,
            ]
        ]));
    }
}
