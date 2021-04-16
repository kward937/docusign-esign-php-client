<?php
declare(strict_types=1);

/**
 * NotaryApi.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Api\NotaryApi;


class GetNotaryOptions
{
    /**
      * $include_jurisdictions 
      * @var ?string
      */
    protected ?string $include_jurisdictions = null;

    /**
     * Gets include_jurisdictions
     * @return ?string
     */
    public function getIncludeJurisdictions(): ?string
    {
        return $this->include_jurisdictions;
    }

    /**
     * Sets include_jurisdictions
     * @param ?string $include_jurisdictions 
     * @return self
     */
    public function setIncludeJurisdictions(?string $include_jurisdictions): self
    {
        $this->include_jurisdictions = $include_jurisdictions;
        return $this;
    }
}


class ListNotaryJournalsOptions
{
    /**
      * $count 
      * @var ?string
      */
    protected ?string $count = null;

    /**
     * Gets count
     * @return ?string
     */
    public function getCount(): ?string
    {
        return $this->count;
    }

    /**
     * Sets count
     * @param ?string $count 
     * @return self
     */
    public function setCount(?string $count): self
    {
        $this->count = $count;
        return $this;
    }
    /**
      * $search_text 
      * @var ?string
      */
    protected ?string $search_text = null;

    /**
     * Gets search_text
     * @return ?string
     */
    public function getSearchText(): ?string
    {
        return $this->search_text;
    }

    /**
     * Sets search_text
     * @param ?string $search_text 
     * @return self
     */
    public function setSearchText(?string $search_text): self
    {
        $this->search_text = $search_text;
        return $this;
    }
    /**
      * $start_position 
      * @var ?string
      */
    protected ?string $start_position = null;

    /**
     * Gets start_position
     * @return ?string
     */
    public function getStartPosition(): ?string
    {
        return $this->start_position;
    }

    /**
     * Sets start_position
     * @param ?string $start_position 
     * @return self
     */
    public function setStartPosition(?string $start_position): self
    {
        $this->start_position = $start_position;
        return $this;
    }
}



namespace DocuSign\eSign\Api;

use DocuSign\eSign\Client\ApiClient;
use DocuSign\eSign\Client\ApiException;
use DocuSign\eSign\Configuration;
use DocuSign\eSign\ObjectSerializer;

/**
 * NotaryApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotaryApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     * @return void
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?? new ApiClient();
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return self
     */
    public function setApiClient(ApiClient $apiClient): self
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
    * Update $resourcePath with $
    *
    * @param string $resourcePath
    * @param string $baseName
    * @param string $paramName
    *
    * @return string
    */
    public function updateResourcePath(string $resourcePath, string $baseName, string $paramName): string
    {
        return str_replace(
            "{" . $baseName . "}",
            $this->apiClient->getSerializer()->toPathValue($paramName),
            $resourcePath
        );
    }


    /**
     * Operation createNotary
     *
     * Add a notary to the system
     *
     * @param \DocuSign\eSign\Model\Notary $notary  (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\Notary
     */
    public function createNotary($notary = null): \DocuSign\eSign\Model\Notary
    {
        list($response) = $this->createNotaryWithHttpInfo($notary);
        return $response;
    }

    /**
     * Operation createNotaryWithHttpInfo
     *
     * Add a notary to the system
     *
     * @param \DocuSign\eSign\Model\Notary $notary  (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\Notary, HTTP status code, HTTP response headers (array of strings)
     */
    public function createNotaryWithHttpInfo($notary = null): array
    {
        // parse inputs
        $resourcePath = "/v2.1/current_user/notary";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);



        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($notary)) {
            $_tempBody = $notary;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\Notary',
                '/v2.1/current_user/notary'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\Notary', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\Notary', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createNotaryJurisdictions
     *
     * Add a notary jurisdiction to the system
     *
     * @param \DocuSign\eSign\Model\NotaryJurisdiction $notary_jurisdiction  (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\NotaryJurisdiction
     */
    public function createNotaryJurisdictions($notary_jurisdiction = null): \DocuSign\eSign\Model\NotaryJurisdiction
    {
        list($response) = $this->createNotaryJurisdictionsWithHttpInfo($notary_jurisdiction);
        return $response;
    }

    /**
     * Operation createNotaryJurisdictionsWithHttpInfo
     *
     * Add a notary jurisdiction to the system
     *
     * @param \DocuSign\eSign\Model\NotaryJurisdiction $notary_jurisdiction  (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\NotaryJurisdiction, HTTP status code, HTTP response headers (array of strings)
     */
    public function createNotaryJurisdictionsWithHttpInfo($notary_jurisdiction = null): array
    {
        // parse inputs
        $resourcePath = "/v2.1/current_user/notary/jurisdictions";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);



        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($notary_jurisdiction)) {
            $_tempBody = $notary_jurisdiction;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\NotaryJurisdiction',
                '/v2.1/current_user/notary/jurisdictions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\NotaryJurisdiction', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\NotaryJurisdiction', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteNotaryJurisdiction
     *
     * Delete a notary jurisdiction a specified user.
     *
     * @param ?string $jurisdiction_id 
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function deleteNotaryJurisdiction($jurisdiction_id): mixed
    {
        list($response) = $this->deleteNotaryJurisdictionWithHttpInfo($jurisdiction_id);
        return $response;
    }

    /**
     * Operation deleteNotaryJurisdictionWithHttpInfo
     *
     * Delete a notary jurisdiction a specified user.
     *
     * @param ?string $jurisdiction_id 
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteNotaryJurisdictionWithHttpInfo($jurisdiction_id): array
    {
        // verify the required parameter 'jurisdiction_id' is set
        if ($jurisdiction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $jurisdiction_id when calling deleteNotaryJurisdiction');
        }
        // parse inputs
        $resourcePath = "/v2.1/current_user/notary/jurisdictions/{jurisdictionId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($jurisdiction_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "jurisdictionId", $jurisdiction_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2.1/current_user/notary/jurisdictions/{jurisdictionId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getNotary
     *
     * Get notary settings for a user
     *
     * @param  \DocuSign\eSign\Api\NotaryApi\GetNotaryOptions for modifying the behavior of the function. (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\NotaryResult
     */
    public function getNotary(\DocuSign\eSign\Api\NotaryApi\GetNotaryOptions $options = null): \DocuSign\eSign\Model\NotaryResult
    {
        list($response) = $this->getNotaryWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getNotaryWithHttpInfo
     *
     * Get notary settings for a user
     *
     * @param  \DocuSign\eSign\Api\NotaryApi\GetNotaryOptions for modifying the behavior of the function. (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\NotaryResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNotaryWithHttpInfo(\DocuSign\eSign\Api\NotaryApi\GetNotaryOptions $options = null): array
    {
        // parse inputs
        $resourcePath = "/v2.1/current_user/notary";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
            // query params
            if ($options->getIncludeJurisdictions() != 'null') {
                $queryParams['include_jurisdictions'] = $this->apiClient->getSerializer()->toQueryValue($options->getIncludeJurisdictions());
            }
        }


        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\NotaryResult',
                '/v2.1/current_user/notary'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\NotaryResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\NotaryResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getNotaryJurisdiction
     *
     * Get notary a jurisdiction for a user
     *
     * @param ?string $jurisdiction_id 
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\NotaryJurisdiction
     */
    public function getNotaryJurisdiction($jurisdiction_id): \DocuSign\eSign\Model\NotaryJurisdiction
    {
        list($response) = $this->getNotaryJurisdictionWithHttpInfo($jurisdiction_id);
        return $response;
    }

    /**
     * Operation getNotaryJurisdictionWithHttpInfo
     *
     * Get notary a jurisdiction for a user
     *
     * @param ?string $jurisdiction_id 
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\NotaryJurisdiction, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNotaryJurisdictionWithHttpInfo($jurisdiction_id): array
    {
        // verify the required parameter 'jurisdiction_id' is set
        if ($jurisdiction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $jurisdiction_id when calling getNotaryJurisdiction');
        }
        // parse inputs
        $resourcePath = "/v2.1/current_user/notary/jurisdictions/{jurisdictionId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($jurisdiction_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "jurisdictionId", $jurisdiction_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\NotaryJurisdiction',
                '/v2.1/current_user/notary/jurisdictions/{jurisdictionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\NotaryJurisdiction', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\NotaryJurisdiction', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getNotaryJurisdictionSeal
     *
     * Get notary seal for a jurisdiction
     *
     * @param ?string $jurisdiction_id 
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function getNotaryJurisdictionSeal($jurisdiction_id): mixed
    {
        list($response) = $this->getNotaryJurisdictionSealWithHttpInfo($jurisdiction_id);
        return $response;
    }

    /**
     * Operation getNotaryJurisdictionSealWithHttpInfo
     *
     * Get notary seal for a jurisdiction
     *
     * @param ?string $jurisdiction_id 
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNotaryJurisdictionSealWithHttpInfo($jurisdiction_id): array
    {
        // verify the required parameter 'jurisdiction_id' is set
        if ($jurisdiction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $jurisdiction_id when calling getNotaryJurisdictionSeal');
        }
        // parse inputs
        $resourcePath = "/v2.1/current_user/notary/jurisdictions/{jurisdictionId}/seal";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($jurisdiction_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "jurisdictionId", $jurisdiction_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2.1/current_user/notary/jurisdictions/{jurisdictionId}/seal'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getNotaryJurisdictions
     *
     * Get notary jurisdictions for a user
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\NotaryJurisdictionList
     */
    public function getNotaryJurisdictions(): \DocuSign\eSign\Model\NotaryJurisdictionList
    {
        list($response) = $this->getNotaryJurisdictionsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getNotaryJurisdictionsWithHttpInfo
     *
     * Get notary jurisdictions for a user
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\NotaryJurisdictionList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNotaryJurisdictionsWithHttpInfo(): array
    {
        // parse inputs
        $resourcePath = "/v2.1/current_user/notary/jurisdictions";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);



        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\NotaryJurisdictionList',
                '/v2.1/current_user/notary/jurisdictions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\NotaryJurisdictionList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\NotaryJurisdictionList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listNotaryJournals
     *
     * Get notary jurisdictions for a user
     *
     * @param  \DocuSign\eSign\Api\NotaryApi\ListNotaryJournalsOptions for modifying the behavior of the function. (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\NotaryJournalList
     */
    public function listNotaryJournals(\DocuSign\eSign\Api\NotaryApi\ListNotaryJournalsOptions $options = null): \DocuSign\eSign\Model\NotaryJournalList
    {
        list($response) = $this->listNotaryJournalsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listNotaryJournalsWithHttpInfo
     *
     * Get notary jurisdictions for a user
     *
     * @param  \DocuSign\eSign\Api\NotaryApi\ListNotaryJournalsOptions for modifying the behavior of the function. (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\NotaryJournalList, HTTP status code, HTTP response headers (array of strings)
     */
    public function listNotaryJournalsWithHttpInfo(\DocuSign\eSign\Api\NotaryApi\ListNotaryJournalsOptions $options = null): array
    {
        // parse inputs
        $resourcePath = "/v2.1/current_user/notary/journals";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
            // query params
            if ($options->getCount() != 'null') {
                $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($options->getCount());
            }
            if ($options->getSearchText() != 'null') {
                $queryParams['search_text'] = $this->apiClient->getSerializer()->toQueryValue($options->getSearchText());
            }
            if ($options->getStartPosition() != 'null') {
                $queryParams['start_position'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
            }
        }


        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\NotaryJournalList',
                '/v2.1/current_user/notary/journals'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\NotaryJournalList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\NotaryJournalList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateNotary
     *
     * Update a notary
     *
     * @param \DocuSign\eSign\Model\Notary $notary  (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\Notary
     */
    public function updateNotary($notary = null): \DocuSign\eSign\Model\Notary
    {
        list($response) = $this->updateNotaryWithHttpInfo($notary);
        return $response;
    }

    /**
     * Operation updateNotaryWithHttpInfo
     *
     * Update a notary
     *
     * @param \DocuSign\eSign\Model\Notary $notary  (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\Notary, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateNotaryWithHttpInfo($notary = null): array
    {
        // parse inputs
        $resourcePath = "/v2.1/current_user/notary";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);



        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($notary)) {
            $_tempBody = $notary;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\Notary',
                '/v2.1/current_user/notary'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\Notary', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\Notary', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateNotaryJurisdiction
     *
     * Update a notary jurisdiction
     *
     * @param ?string $jurisdiction_id 
     * @param \DocuSign\eSign\Model\NotaryJurisdiction $notary_jurisdiction  (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\NotaryJurisdiction
     */
    public function updateNotaryJurisdiction($jurisdiction_id, $notary_jurisdiction = null): \DocuSign\eSign\Model\NotaryJurisdiction
    {
        list($response) = $this->updateNotaryJurisdictionWithHttpInfo($jurisdiction_id, $notary_jurisdiction);
        return $response;
    }

    /**
     * Operation updateNotaryJurisdictionWithHttpInfo
     *
     * Update a notary jurisdiction
     *
     * @param ?string $jurisdiction_id 
     * @param \DocuSign\eSign\Model\NotaryJurisdiction $notary_jurisdiction  (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\NotaryJurisdiction, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateNotaryJurisdictionWithHttpInfo($jurisdiction_id, $notary_jurisdiction = null): array
    {
        // verify the required parameter 'jurisdiction_id' is set
        if ($jurisdiction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $jurisdiction_id when calling updateNotaryJurisdiction');
        }
        // parse inputs
        $resourcePath = "/v2.1/current_user/notary/jurisdictions/{jurisdictionId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($jurisdiction_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "jurisdictionId", $jurisdiction_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($notary_jurisdiction)) {
            $_tempBody = $notary_jurisdiction;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\NotaryJurisdiction',
                '/v2.1/current_user/notary/jurisdictions/{jurisdictionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\NotaryJurisdiction', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\NotaryJurisdiction', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
