<?php

namespace Dacolera\OCI\services\core\vnic\responses;

use Dacolera\OCI\contract\Response;
use Dacolera\OCI\services\core\datatypes\Vnic;

class GetVnic extends Response
{
    /**
     * @return mixed
     */
    public function getVnic()
    {
        $data = $this->getContents();
        $arr = json_decode($data, true);
        $vnic = new Vnic();
        $vnic->fromArray($arr);
        return $vnic;
    }
}
