<?php

namespace Dacolera\OCI\services\core\instances\responses;

use Dacolera\OCI\contract\Response;
use Dacolera\OCI\services\core\datatypes\Instance;

class ListInstance extends Response
{
    /**
     * @return Instance[]
     */
    public function getList()
    {
        $content = $this->getContents();
        $arr = json_decode($content, true);
        return Instance::fromIndexArray($arr);
    }
}
