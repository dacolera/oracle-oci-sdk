<?php

namespace Dacolera\OCI\services\core\instances\responses;


class LaunchInstance extends GetInstance
{
    public function getOpcWorkRequestId()
    {
        return $this->response->getHeader('opc-work-request-id');
    }
}
