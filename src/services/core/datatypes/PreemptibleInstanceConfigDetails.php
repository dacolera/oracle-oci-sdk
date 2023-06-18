<?php

namespace Augusl\OCI\services\core\datatypes;

use Augusl\OCI\contract\DataTypes;

class PreemptibleInstanceConfigDetails extends DataTypes
{
    private $preemptionAction;

    protected const FROM_ARRAY_TEMPLATE = [
        'preemptionAction' => PreemptionAction::class
    ];
}
