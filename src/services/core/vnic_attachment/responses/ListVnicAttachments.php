<?php

namespace Dacolera\OCI\services\core\vnic_attachment\responses;

use Dacolera\OCI\contract\Response;
use Dacolera\OCI\services\core\datatypes\VnicAttachment;

class ListVnicAttachments extends Response
{


    /**
     * @return VnicAttachment[]
     */
    public function getList()
    {
        $data = $this->getContents();
        $arr = json_decode($data, true);
        $list = [];
        foreach ($arr as $item) {
            $va = new VnicAttachment();
            $va->fromArray($item);
            $list[] = $va;
        }
        return $list;
    }
}
