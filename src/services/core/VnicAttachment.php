<?php

namespace Augusl\OCI\services\core;

use Augusl\OCI\Exception;
use Augusl\OCI\service\Resource;
use Augusl\OCI\services\core\vnic_attachment\responses\ListVnicAttachments;

class VnicAttachment extends Resource
{
    /**
     * @param $queryParams
     *                    availabilityDomain
     *                    query
     *
     * Required: no
     * Type: string
     * The name of the availability domain.
     *
     * Example: Uocm:PHX-AD-1
     *
     * compartmentId
     * query
     *
     * Required: yes
     * Type: string
     * Min Length: 1
     * Max Length: 255
     * The OCID of the compartment.
     *
     * instanceId
     * query
     *
     * Required: no
     * Type: string
     * The OCID of the instance.
     *
     * limit
     * query
     *
     * Required: no
     * Type: integer
     * Default: The default maximum results per page varies by API.
     * Minimum: 1
     * Maximum: 1000
     * For list pagination. The maximum number of results per page, or items to return in a paginated "List" call. For important details about how pagination works, see List Pagination.
     *
     * Example: 50
     *
     * page
     * query
     *
     * Required: no
     * Type: string
     * Min Length: 1
     * Max Length: 4096
     * For list pagination. The value of the opc-next-page response header from the previous "List" call. For important details about how pagination works, see List Pagination.
     *
     * vnicId
     * query
     *
     * Required: no
     * Type: string
     * The OCID of the VNIC.
     * @return ListVnicAttachments
     * @throws Exception
     * @link https://docs.oracle.com/en-us/iaas/api/#/en/iaas/20160918/VnicAttachment/ListVnicAttachments
     */
    public function ListVnicAttachments($queryParams)
    {
        if (empty($queryParams['compartmentId'])) {
            $queryParams['compartmentId'] = $this->service->getClient()->getOciTenancyId();
        }
        return new ListVnicAttachments($this->call(__METHOD__, [
            'httpPath' => '/20160918/vnicAttachments/',
            'queryParams' => $queryParams,
        ]));
    }
}
