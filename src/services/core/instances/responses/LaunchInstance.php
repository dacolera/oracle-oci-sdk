<?php

namespace Augusl\OCI\services\core\instances\responses;


class LaunchInstance extends GetInstance
{
    /**
     * @return array
     */
    public function getOpcWorkRequestId(): array
    {
        return $this->response->getHeader('opc-work-request-id');
    }
}
