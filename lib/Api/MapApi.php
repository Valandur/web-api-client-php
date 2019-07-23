<?php
/**
 * MapApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Web-API
 *
 * Access Sponge powered Minecraft servers through a WebAPI  # Introduction This is the documentation of the various API routes offered by the WebAPI plugin.  This documentation assumes that you are familiar with the basic concepts of Web API's, such as `GET`, `PUT`, `POST` and `DELETE` methods, request `HEADERS` and `RESPONSE CODES` and `JSON` data.  By default this documentation can be found at http:/localhost:8080 (while your minecraft server is running) and the various routes start with http:/localhost:8080/api/v5...  As a quick test try reaching the route http:/localhost:8080/api/v5/info (remember that you can only access \\\"localhost\\\" routes on the server on which you are running minecraft). This route should show you basic information about your server, like the motd and player count.  # List endpoints Lots of objects offer an endpoint to list all objects (e.g. `GET: /world` to get all worlds). These endpoints return only the properties marked 'required' by default, because the list might be quite large. If you want to return ALL data for a list endpoint add the query parameter `details`, (e.g. `GET: /world?details`).  > Remember that in this case the data returned by the endpoint might be quite large.  # Debugging endpoints Apart from the `?details` flag you can also pass some other flags for debugging purposes. Remember that you must include the first query parameter with `?`, and further ones with `&`:  `details`: Includes details for list endpoints  `accept=[json/xml]`: Manually set the accept content type. This is good for browser testing, **BUT DON'T USE THIS IN PRODUCTION, YOU CAN SUPPLY THE `Accepts` HEADER FOR THAT**  `pretty`: Pretty prints the data, also good for debugging in the browser.  An example request might look like this: `http://localhost:8080/api/v5/world?details&accpet=json&pretty&key=MY-API-KEY`  # Additional data Certain endpoints (such as `/player`, `/entity` and `/tile-entity` have additional properties which are not documented here, because the data depends on the concrete object type (eg. `Sheep` have a wool color, others do not) and on the other plugins/mods that are running on your server which might add additional data.  You can also find more information in the github docs (https:/github.com/Valandur/Web-API/tree/master/docs/DATA.md)
 *
 * OpenAPI spec version: 5.4.2-S7.1.0
 * Contact: inithilian@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * MapApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MapApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getMap
     *
     * Get a map tile
     *
     * @param  string $world The world to get the map tile from (required)
     * @param  int $x The x-coordinate of the tile (is multiplied by the TILE_SIZE) (required)
     * @param  int $z The z-coordinate of the tile (is multiplied by the TILE_SIZE) (required)
     * @param  bool $details Add to include additional details, omit or false otherwise (optional)
     * @param  string $accept Override the &#39;Accept&#39; request header (useful for debugging your requests) (optional)
     * @param  bool $pretty Add to make the Web-API pretty print the response (useful for debugging your requests) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getMap($world, $x, $z, $details = null, $accept = null, $pretty = null)
    {
        $this->getMapWithHttpInfo($world, $x, $z, $details, $accept, $pretty);
    }

    /**
     * Operation getMapWithHttpInfo
     *
     * Get a map tile
     *
     * @param  string $world The world to get the map tile from (required)
     * @param  int $x The x-coordinate of the tile (is multiplied by the TILE_SIZE) (required)
     * @param  int $z The z-coordinate of the tile (is multiplied by the TILE_SIZE) (required)
     * @param  bool $details Add to include additional details, omit or false otherwise (optional)
     * @param  string $accept Override the &#39;Accept&#39; request header (useful for debugging your requests) (optional)
     * @param  bool $pretty Add to make the Web-API pretty print the response (useful for debugging your requests) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMapWithHttpInfo($world, $x, $z, $details = null, $accept = null, $pretty = null)
    {
        $returnType = '';
        $request = $this->getMapRequest($world, $x, $z, $details, $accept, $pretty);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMapAsync
     *
     * Get a map tile
     *
     * @param  string $world The world to get the map tile from (required)
     * @param  int $x The x-coordinate of the tile (is multiplied by the TILE_SIZE) (required)
     * @param  int $z The z-coordinate of the tile (is multiplied by the TILE_SIZE) (required)
     * @param  bool $details Add to include additional details, omit or false otherwise (optional)
     * @param  string $accept Override the &#39;Accept&#39; request header (useful for debugging your requests) (optional)
     * @param  bool $pretty Add to make the Web-API pretty print the response (useful for debugging your requests) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMapAsync($world, $x, $z, $details = null, $accept = null, $pretty = null)
    {
        return $this->getMapAsyncWithHttpInfo($world, $x, $z, $details, $accept, $pretty)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMapAsyncWithHttpInfo
     *
     * Get a map tile
     *
     * @param  string $world The world to get the map tile from (required)
     * @param  int $x The x-coordinate of the tile (is multiplied by the TILE_SIZE) (required)
     * @param  int $z The z-coordinate of the tile (is multiplied by the TILE_SIZE) (required)
     * @param  bool $details Add to include additional details, omit or false otherwise (optional)
     * @param  string $accept Override the &#39;Accept&#39; request header (useful for debugging your requests) (optional)
     * @param  bool $pretty Add to make the Web-API pretty print the response (useful for debugging your requests) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMapAsyncWithHttpInfo($world, $x, $z, $details = null, $accept = null, $pretty = null)
    {
        $returnType = '';
        $request = $this->getMapRequest($world, $x, $z, $details, $accept, $pretty);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMap'
     *
     * @param  string $world The world to get the map tile from (required)
     * @param  int $x The x-coordinate of the tile (is multiplied by the TILE_SIZE) (required)
     * @param  int $z The z-coordinate of the tile (is multiplied by the TILE_SIZE) (required)
     * @param  bool $details Add to include additional details, omit or false otherwise (optional)
     * @param  string $accept Override the &#39;Accept&#39; request header (useful for debugging your requests) (optional)
     * @param  bool $pretty Add to make the Web-API pretty print the response (useful for debugging your requests) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMapRequest($world, $x, $z, $details = null, $accept = null, $pretty = null)
    {
        // verify the required parameter 'world' is set
        if ($world === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $world when calling getMap'
            );
        }
        // verify the required parameter 'x' is set
        if ($x === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x when calling getMap'
            );
        }
        // verify the required parameter 'z' is set
        if ($z === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $z when calling getMap'
            );
        }

        $resourcePath = '/map/{world}/{x}/{z}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($details !== null) {
            $queryParams['details'] = ObjectSerializer::toQueryValue($details);
        }
        // query params
        if ($accept !== null) {
            $queryParams['accept'] = ObjectSerializer::toQueryValue($accept);
        }
        // query params
        if ($pretty !== null) {
            $queryParams['pretty'] = ObjectSerializer::toQueryValue($pretty);
        }

        // path params
        if ($world !== null) {
            $resourcePath = str_replace(
                '{' . 'world' . '}',
                ObjectSerializer::toPathValue($world),
                $resourcePath
            );
        }
        // path params
        if ($x !== null) {
            $resourcePath = str_replace(
                '{' . 'x' . '}',
                ObjectSerializer::toPathValue($x),
                $resourcePath
            );
        }
        // path params
        if ($z !== null) {
            $resourcePath = str_replace(
                '{' . 'z' . '}',
                ObjectSerializer::toPathValue($z),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['image/png']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['image/png'],
                ['application/json', 'application/xml']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-WebAPI-Key');
        if ($apiKey !== null) {
            $headers['X-WebAPI-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
