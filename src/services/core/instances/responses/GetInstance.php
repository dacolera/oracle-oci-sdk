<?php

namespace Dacolera\OCI\services\core\instances\responses;

use Dacolera\OCI\contract\Response;
use Dacolera\OCI\services\core\datatypes\Instance;

class GetInstance extends Response
{
    public function getInstance(): Instance
    {
        $data = $this->getContents();
        $arr = json_decode($data, true);
        $instance = new Instance();
        $instance->fromArray($arr);
        return $instance;
    }
}
