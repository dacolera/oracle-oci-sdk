<?php

namespace Augusl\OCI\services\core\instances\responses;

use Augusl\OCI\contract\Response;
use Augusl\OCI\services\core\datatypes\Instance;

class GetInstance extends Response
{
    /**
     * @return Instance
     */
    public function getInstance(): Instance
    {
        $data = $this->getContents();
        $arr = json_decode($data, true);
        $instance = new Instance();
        $instance->fromArray($arr);
        return $instance;
    }
}
