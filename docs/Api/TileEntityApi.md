# Swagger\Client\TileEntityApi

All URIs are relative to *https://localhost/api/v5*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeMethod**](TileEntityApi.md#executeMethod) | **POST** /tile-entity/{world}/{x}/{y}/{z}/method | Execute a method
[**getTileEntity**](TileEntityApi.md#getTileEntity) | **GET** /tile-entity/{world}/{x}/{y}/{z} | Get tile entity
[**listTileEntities**](TileEntityApi.md#listTileEntities) | **GET** /tile-entity | List tile entities
[**modifyTileEntity**](TileEntityApi.md#modifyTileEntity) | **PUT** /tile-entity/{world}/{x}/{y}/{z} | Modify tile entity


# **executeMethod**
> \Swagger\Client\Model\ExecuteMethodResponse executeMethod($world, $x, $y, $z, $body, $details, $accept, $pretty)

Execute a method

Provides direct access to the underlaying tile entity object and can execute any method on it.     **Required permissions:**    - **tile-entity.method**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-WebAPI-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-WebAPI-Key', 'Bearer');
// Configure API key authorization: ApiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\TileEntityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$world = "world_example"; // string | The world the tile entity is in
$x = 56; // int | The x-coordinate of the tile-entity
$y = 56; // int | The x-coordinate of the tile-entity
$z = 56; // int | The x-coordinate of the tile-entity
$body = new \Swagger\Client\Model\ExecuteMethodRequest(); // \Swagger\Client\Model\ExecuteMethodRequest | 
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->executeMethod($world, $x, $y, $z, $body, $details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TileEntityApi->executeMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **world** | **string**| The world the tile entity is in |
 **x** | **int**| The x-coordinate of the tile-entity |
 **y** | **int**| The x-coordinate of the tile-entity |
 **z** | **int**| The x-coordinate of the tile-entity |
 **body** | [**\Swagger\Client\Model\ExecuteMethodRequest**](../Model/ExecuteMethodRequest.md)|  | [optional]
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

[**\Swagger\Client\Model\ExecuteMethodResponse**](../Model/ExecuteMethodResponse.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTileEntity**
> \Swagger\Client\Model\TileEntity getTileEntity($world, $x, $y, $z, $details, $accept, $pretty)

Get tile entity

Get detailed information about a tile entity.     **Required permissions:**    - **tile-entity.one**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-WebAPI-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-WebAPI-Key', 'Bearer');
// Configure API key authorization: ApiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\TileEntityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$world = "world_example"; // string | The world the tile entity is in
$x = 56; // int | The x-coordinate of the tile-entity
$y = 56; // int | The y-coordinate of the tile-entity
$z = 56; // int | The z-coordinate of the tile-entity
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->getTileEntity($world, $x, $y, $z, $details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TileEntityApi->getTileEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **world** | **string**| The world the tile entity is in |
 **x** | **int**| The x-coordinate of the tile-entity |
 **y** | **int**| The y-coordinate of the tile-entity |
 **z** | **int**| The z-coordinate of the tile-entity |
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

[**\Swagger\Client\Model\TileEntity**](../Model/TileEntity.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTileEntities**
> \Swagger\Client\Model\TileEntity[] listTileEntities($world, $type, $min, $max, $limit, $details, $accept, $pretty)

List tile entities

Get a list of all tile entities on the server (in all worlds, unless specified).     **Required permissions:**    - **tile-entity.list**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-WebAPI-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-WebAPI-Key', 'Bearer');
// Configure API key authorization: ApiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\TileEntityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$world = "world_example"; // string | The world to filter tile entities by
$type = "type_example"; // string | The type if of tile entities to filter by
$min = "min_example"; // string | The minimum coordinates at which the tile entity must be, min=x|y|z
$max = "max_example"; // string | The maximum coordinates at which the tile entity must be, max=x|y|z
$limit = 56; // int | The maximum amount of tile entities returned
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->listTileEntities($world, $type, $min, $max, $limit, $details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TileEntityApi->listTileEntities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **world** | **string**| The world to filter tile entities by | [optional]
 **type** | **string**| The type if of tile entities to filter by | [optional]
 **min** | **string**| The minimum coordinates at which the tile entity must be, min&#x3D;x|y|z | [optional]
 **max** | **string**| The maximum coordinates at which the tile entity must be, max&#x3D;x|y|z | [optional]
 **limit** | **int**| The maximum amount of tile entities returned | [optional]
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

[**\Swagger\Client\Model\TileEntity[]**](../Model/TileEntity.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyTileEntity**
> \Swagger\Client\Model\TileEntity modifyTileEntity($world, $x, $y, $z, $body, $details, $accept, $pretty)

Modify tile entity

Modify the properties of an existing tile entity.     **Required permissions:**    - **tile-entity.modify**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-WebAPI-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-WebAPI-Key', 'Bearer');
// Configure API key authorization: ApiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\TileEntityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$world = "world_example"; // string | The world the tile entity is in
$x = 56; // int | The x-coordinate of the tile-entity
$y = 56; // int | The y-coordinate of the tile-entity
$z = 56; // int | The z-coordinate of the tile-entity
$body = new \Swagger\Client\Model\UpdateTileEntityRequest(); // \Swagger\Client\Model\UpdateTileEntityRequest | 
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->modifyTileEntity($world, $x, $y, $z, $body, $details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TileEntityApi->modifyTileEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **world** | **string**| The world the tile entity is in |
 **x** | **int**| The x-coordinate of the tile-entity |
 **y** | **int**| The y-coordinate of the tile-entity |
 **z** | **int**| The z-coordinate of the tile-entity |
 **body** | [**\Swagger\Client\Model\UpdateTileEntityRequest**](../Model/UpdateTileEntityRequest.md)|  | [optional]
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

[**\Swagger\Client\Model\TileEntity**](../Model/TileEntity.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

