<?php

namespace Augusl\OCI\services\core\instances\responses;

use Augusl\OCI\contract\Response;
use Augusl\OCI\services\core\datatypes\Instance;

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
