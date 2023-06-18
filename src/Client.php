<?php

namespace Augusl\OCI;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use Hitrov\OCI\Exception\PrivateKeyFileNotFoundException;
use Hitrov\OCI\Exception\SignerValidateException;
use Hitrov\OCI\Exception\SigningValidationFailedException;
use Hitrov\OCI\Signer;
use Monolog\Handler\StreamHandler as MonologStreamHandler;
use Monolog\Logger;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;


class Client
{
    const LIBVER = "1.0.0";
    const USER_AGENT_SUFFIX = "Oracle-PHPSDK";

    /** @var Signer */
    private Signer $signer;
    private ?string $ociTenancyId;
    private ?string $ociUserId;
    private ?string $keyFingerPrint;
    private ?string $privateKeyLocation;
    private ?string $region;
    /**
     * @var Logger|LoggerInterface
     */
    private $logger;

    public function __construct(?string $region, ?string $ociTenancyId = null, ?string $ociUserId = null, ?string $keyFingerPrint = null, ?string $privateKeyLocation = null)
    {
        $this->region = $region;
        $this->ociTenancyId = $ociTenancyId;
        $this->ociUserId = $ociUserId;
        $this->keyFingerPrint = $keyFingerPrint;
        $this->privateKeyLocation = $privateKeyLocation;
    }

    /**
     * @var $httpClient ClientInterface
     */
    private ClientInterface $httpClient;

    protected array $services = [];

    /**
     * @param ClientInterface $httpClient
     * @return Client
     */
    public function setHttpClient(ClientInterface $httpClient): Client
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * @return ClientInterface
     */
    public function getHttpClient(): ClientInterface
    {
        if (!$this->httpClient) {
            $this->httpClient = new \GuzzleHttp\Client();
        }
        return $this->httpClient;
    }

    /**
     * @return Signer
     */
    public function getSigner(): Signer
    {
        if ($this->signer)
            return $this->signer;
        return $this->signer = new Signer($this->ociTenancyId, $this->ociUserId,
            $this->keyFingerPrint, $this->privateKeyLocation);
    }

    /**
     * @param Signer $signer
     * @return Client
     */
    public function setSigner(Signer $signer): Client
    {
        $this->signer = $signer;
        return $this;
    }

    /**
     * @param string|null $privateKeyLocation
     * @return Client
     */
    public function setPrivateKeyLocation(?string $privateKeyLocation): Client
    {
        $this->privateKeyLocation = $privateKeyLocation;
        return $this;
    }

    /**
     * @param string|null $keyFingerPrint
     * @return Client
     */
    public function setKeyFingerPrint(?string $keyFingerPrint): Client
    {
        $this->keyFingerPrint = $keyFingerPrint;
        return $this;
    }

    /**
     * @param string|null $ociUserId
     * @return Client
     */
    public function setOciUserId(?string $ociUserId): Client
    {
        $this->ociUserId = $ociUserId;
        return $this;
    }

    /**
     * @param string|null $ociTenancyId
     * @return Client
     */
    public function setOciTenancyId(?string $ociTenancyId): Client
    {
        $this->ociTenancyId = $ociTenancyId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string|null $region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }


    /**
     * @throws SigningValidationFailedException
     * @throws SignerValidateException
     * @throws GuzzleException
     * @throws PrivateKeyFileNotFoundException
     */
    public function request($uri, $method = 'GET', $data = [], $options = []): ResponseInterface
    {
        $httpClient = $this->getHttpClient();
        ksort($data, SORT_STRING);
        $headers = $this->signer->getHeaders($uri, $method, json_encode($data) ?: null);

        $options['headers'] = $headers;
        return $httpClient->request($method, $uri, array_merge([
            'data' => $data,
        ], $options));
    }

    /**
     * Set the Logger object
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        if (!isset($this->logger)) {
            $this->logger = $this->createDefaultLogger();
        }

        return $this->logger;
    }

    /**
     * @return Logger
     */
    protected function createDefaultLogger(): Logger
    {
        $logger = new Logger('oci-api-php-client');

        $handler = new MonologStreamHandler('php://stderr', Logger::NOTICE);

        $logger->pushHandler($handler);

        return $logger;
    }

    /**
     * Get a string containing the version of the library.
     *
     * @return string
     */
    public function getLibraryVersion(): string
    {
        return self::LIBVER;
    }


    /**
     * @param RequestInterface $request
     * @param array $options
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function execute(RequestInterface $request, array $options = []): ResponseInterface
    {
        // Oracle-GoSDK/60.0.0 (windows/amd64; go/go1.18beta1)
        $request = $request
            ->withHeader(
                'User-Agent',
                sprintf(
                    '%s/%s (%s; %s)',
                    self::USER_AGENT_SUFFIX,
                    $this->getLibraryVersion(),
                    PHP_OS,
                    PHP_VERSION
                )
            );

        // call the authorize method
        // this is where most of the grunt work is done
        $http = $this->getHttpClient();

        return $http->send($request, $options);
    }

    /**
     * @return string|null
     */
    public function getOciTenancyId(): ?string
    {
        return $this->ociTenancyId;
    }
}
