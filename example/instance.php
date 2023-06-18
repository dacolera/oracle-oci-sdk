<?php


include __DIR__ . '/../vendor/autoload.php';

### init
$filename = implode(DIRECTORY_SEPARATOR, [__DIR__, 'oracle.private.pem']);
$client = new \Augusl\OCI\Client('ap-seoul-1',
    'ocid1.tenancy.oc1..xxxxx',
    'ocid1.user.oc1..xxxxx',
    'xx:xx:xx:xx:xx:xx:xx:xx:xx:xx:xx:xx:xx:xx:xx:xx',
    $filename
);

$coreServices = new \Augusl\OCI\services\Core($client);

### list


$res = $coreServices->instances->listInstances();

var_dump($res->getList());


### launch

$launchInstanceRequest = new \Augusl\OCI\services\core\datatypes\LaunchInstanceDetails();
$launchInstanceRequest->setDisplayName('displayName');
$launchInstanceRequest->setAvailabilityDomain('TbBB:AP-SEOUL-1-AD-1');
$launchInstanceRequest->setShape('VM.Standard.E2.1.Micro');
$launchInstanceRequest->setCompartmentId('ocid1.tenancy.oc1..xxx');
$launchInstanceRequest->setImageId('ocid1.image.oc1.ap-seoul-1.xxx');
//        $metadata = new \Augusl\OCI\datatypes\Metadata();
//        $metadata->setItem('ssh_authorized_keys', 'ssh-rsa xxx ssh-key-2022-03-05');
//        $launchInstanceRequest->setMetadata($metadata);
$createVnic = new \Augusl\OCI\services\core\datatypes\CreateVnicDetails();
$createVnic->setAssignPublicIp(true)
    ->setSubnetId('ocid1.subnet.oc1.ap-seoul-1.xxx');
$launchInstanceRequest->setCreateVnicDetails($createVnic);


$res = $coreServices->instances->launchInstance($launchInstanceRequest);
var_dump($res->getInstance());
