<?php

namespace Dacolera\OCI\services\core\datatypes;

use Dacolera\OCI\contract\DataTypes;

class PreemptibleInstanceConfigDetails extends DataTypes
{
    private $preemptionAction;

    protected const FROM_ARRAY_TEMPLATE = [
        'preemptionAction' => PreemptionAction::class
    ];
}
