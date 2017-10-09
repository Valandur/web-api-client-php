# Swagger\Client\TileEntityApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeTileEntityMethod**](TileEntityApi.md#executeTileEntityMethod) | **POST** /tile-entity/{worldUuid}/{x}/{y}/{z} | Execute tile entity methods
[**getTileEntities**](TileEntityApi.md#getTileEntities) | **GET** /tile-entity | Tile entities list
[**getTileEntity**](TileEntityApi.md#getTileEntity) | **GET** /tile-entity/{worldUuid}/{x}/{y}/{z} | Detailed tile entity info


# **executeTileEntityMethod**
> \Swagger\Client\Model\ExecuteTileEntityMethodResponse executeTileEntityMethod($world_uuid, $x, $y, $z, $request)

Execute tile entity methods

Provides direct access to the underlaying tile entity object and can execute any method on it.  > Required permission: tile-entity.method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: headerKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-webapi-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-webapi-key', 'Bearer');
// Configure API key authorization: queryKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$api_instance = new Swagger\Client\Api\TileEntityApi();
$world_uuid = "world_uuid_example"; // string | The uuid of the world the tile entity is in.
$x = "x_example"; // string | The x-coordinate of the tile entity.
$y = "y_example"; // string | The y-coordinate of the tile entity.
$z = "z_example"; // string | The z-coordinate of the tile entity.
$request = new \Swagger\Client\Model\RawRequest(); // \Swagger\Client\Model\RawRequest | Information about which method to execute.

try {
    $result = $api_instance->executeTileEntityMethod($world_uuid, $x, $y, $z, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TileEntityApi->executeTileEntityMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **world_uuid** | **string**| The uuid of the world the tile entity is in. |
 **x** | **string**| The x-coordinate of the tile entity. |
 **y** | **string**| The y-coordinate of the tile entity. |
 **z** | **string**| The z-coordinate of the tile entity. |
 **request** | [**\Swagger\Client\Model\RawRequest**](../Model/RawRequest.md)| Information about which method to execute. |

### Return type

[**\Swagger\Client\Model\ExecuteTileEntityMethodResponse**](../Model/ExecuteTileEntityMethodResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTileEntities**
> \Swagger\Client\Model\TileEntitiesResponse getTileEntities($world, $type, $limit)

Tile entities list

Get a list of all tile entities on the server (in all worlds, unless specified).  > Required permission: tile-entity.list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: headerKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-webapi-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-webapi-key', 'Bearer');
// Configure API key authorization: queryKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$api_instance = new Swagger\Client\Api\TileEntityApi();
$world = "world_example"; // string | The uuid of the world to filter entities by.
$type = "type_example"; // string | The TileEntityType id to filter the tile entities by.
$limit = "limit_example"; // string | The maximum amount of tile entities to return.

try {
    $result = $api_instance->getTileEntities($world, $type, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TileEntityApi->getTileEntities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **world** | **string**| The uuid of the world to filter entities by. | [optional]
 **type** | **string**| The TileEntityType id to filter the tile entities by. | [optional]
 **limit** | **string**| The maximum amount of tile entities to return. | [optional]

### Return type

[**\Swagger\Client\Model\TileEntitiesResponse**](../Model/TileEntitiesResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTileEntity**
> \Swagger\Client\Model\TileEntityResponse getTileEntity($world_uuid, $x, $y, $z, $fields, $methods)

Detailed tile entity info

Get detailed information about a tile entity.  > Required permission: tile-entity.one

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: headerKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-webapi-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-webapi-key', 'Bearer');
// Configure API key authorization: queryKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$api_instance = new Swagger\Client\Api\TileEntityApi();
$world_uuid = "world_uuid_example"; // string | The uuid of the world the tile entity is in.
$x = "x_example"; // string | The x-coordinate of the tile entity.
$y = "y_example"; // string | The y-coordinate of the tile entity.
$z = "z_example"; // string | The z-coordinate of the tile entity.
$fields = "fields_example"; // string | An optional list of additional fields to get.
$methods = "methods_example"; // string | An optional list of additional methods to get.

try {
    $result = $api_instance->getTileEntity($world_uuid, $x, $y, $z, $fields, $methods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TileEntityApi->getTileEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **world_uuid** | **string**| The uuid of the world the tile entity is in. |
 **x** | **string**| The x-coordinate of the tile entity. |
 **y** | **string**| The y-coordinate of the tile entity. |
 **z** | **string**| The z-coordinate of the tile entity. |
 **fields** | **string**| An optional list of additional fields to get. | [optional]
 **methods** | **string**| An optional list of additional methods to get. | [optional]

### Return type

[**\Swagger\Client\Model\TileEntityResponse**](../Model/TileEntityResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

