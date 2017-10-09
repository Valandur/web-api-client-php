# Swagger\Client\WorldApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeWorld**](WorldApi.md#changeWorld) | **PUT** /world/{uuid} | Edit world
[**createWorld**](WorldApi.md#createWorld) | **POST** /world | Create a world
[**deleteWorld**](WorldApi.md#deleteWorld) | **DELETE** /world/{uuid} | Delete a world
[**executeWorldMethod**](WorldApi.md#executeWorldMethod) | **POST** /world/{uuid} | Execute world methods
[**getChunk**](WorldApi.md#getChunk) | **GET** /world/{uuid}/chunk/{x}/{z} | Detailed chunk info
[**getChunks**](WorldApi.md#getChunks) | **GET** /world/{uuid}/chunk | Loaded chunk list
[**getWorld**](WorldApi.md#getWorld) | **GET** /world/{uuid} | Detailed world info
[**getWorlds**](WorldApi.md#getWorlds) | **GET** /world | World list


# **changeWorld**
> \Swagger\Client\Model\WorldResponse changeWorld($uuid, $update_world_request)

Edit world

Update the properties of an existing world.  > Required permission: world.change

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: queryKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');
// Configure API key authorization: headerKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-webapi-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-webapi-key', 'Bearer');

$api_instance = new Swagger\Client\Api\WorldApi();
$uuid = "uuid_example"; // string | The uuid of the world.
$update_world_request = new \Swagger\Client\Model\UpdateWorldRequest(); // \Swagger\Client\Model\UpdateWorldRequest | The new properties of the world

try {
    $result = $api_instance->changeWorld($uuid, $update_world_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->changeWorld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the world. |
 **update_world_request** | [**\Swagger\Client\Model\UpdateWorldRequest**](../Model/\Swagger\Client\Model\UpdateWorldRequest.md)| The new properties of the world |

### Return type

[**\Swagger\Client\Model\WorldResponse**](../Model/WorldResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createWorld**
> \Swagger\Client\Model\WorldResponse createWorld($create_world_request)

Create a world

Creates a new world with the specified settings. This does not yet load the world.  > Required permission: world.create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: queryKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');
// Configure API key authorization: headerKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-webapi-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-webapi-key', 'Bearer');

$api_instance = new Swagger\Client\Api\WorldApi();
$create_world_request = new \Swagger\Client\Model\CreateWorldRequest(); // \Swagger\Client\Model\CreateWorldRequest | 

try {
    $result = $api_instance->createWorld($create_world_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_world_request** | [**\Swagger\Client\Model\CreateWorldRequest**](../Model/\Swagger\Client\Model\CreateWorldRequest.md)|  |

### Return type

[**\Swagger\Client\Model\WorldResponse**](../Model/WorldResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWorld**
> \Swagger\Client\Model\WorldResponse deleteWorld($uuid)

Delete a world

Deletes an existing world. **The world must be unloaded before deleting it**  > Required permission: world.delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: queryKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');
// Configure API key authorization: headerKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-webapi-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-webapi-key', 'Bearer');

$api_instance = new Swagger\Client\Api\WorldApi();
$uuid = "uuid_example"; // string | The uuid of the world.

try {
    $result = $api_instance->deleteWorld($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the world. |

### Return type

[**\Swagger\Client\Model\WorldResponse**](../Model/WorldResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeWorldMethod**
> \Swagger\Client\Model\ExecuteWorldMethodResponse executeWorldMethod($uuid, $request)

Execute world methods

Provides direct access to the underlaying world object and can execute any method on it.  > Required permission: world.method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: queryKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');
// Configure API key authorization: headerKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-webapi-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-webapi-key', 'Bearer');

$api_instance = new Swagger\Client\Api\WorldApi();
$uuid = "uuid_example"; // string | The uuid of the world.
$request = new \Swagger\Client\Model\RawRequest(); // \Swagger\Client\Model\RawRequest | Information about which method to execute.

try {
    $result = $api_instance->executeWorldMethod($uuid, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->executeWorldMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the world. |
 **request** | [**\Swagger\Client\Model\RawRequest**](../Model/\Swagger\Client\Model\RawRequest.md)| Information about which method to execute. |

### Return type

[**\Swagger\Client\Model\ExecuteWorldMethodResponse**](../Model/ExecuteWorldMethodResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChunk**
> \Swagger\Client\Model\ChunkResponse getChunk($uuid, $x, $z)

Detailed chunk info

Get detailed information about a chunk  > Required permission: world.chunk.one

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: queryKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');
// Configure API key authorization: headerKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-webapi-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-webapi-key', 'Bearer');

$api_instance = new Swagger\Client\Api\WorldApi();
$uuid = "uuid_example"; // string | The uuid of the world.
$x = "x_example"; // string | The x-coordinate of the chunk.
$z = "z_example"; // string | The z-coordinate of the chunk.

try {
    $result = $api_instance->getChunk($uuid, $x, $z);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getChunk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the world. |
 **x** | **string**| The x-coordinate of the chunk. |
 **z** | **string**| The z-coordinate of the chunk. |

### Return type

[**\Swagger\Client\Model\ChunkResponse**](../Model/ChunkResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChunks**
> \Swagger\Client\Model\ChunksResponse getChunks($uuid)

Loaded chunk list

Gets a list of all the loaded chunks for the specified world.  > Required permission: world.chunk.list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: queryKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');
// Configure API key authorization: headerKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-webapi-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-webapi-key', 'Bearer');

$api_instance = new Swagger\Client\Api\WorldApi();
$uuid = "uuid_example"; // string | The uuid of the world.

try {
    $result = $api_instance->getChunks($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getChunks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the world. |

### Return type

[**\Swagger\Client\Model\ChunksResponse**](../Model/ChunksResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorld**
> \Swagger\Client\Model\WorldResponse getWorld($uuid, $fields, $methods)

Detailed world info

Get detailed information about a world.  > Required permission: world.one

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: queryKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');
// Configure API key authorization: headerKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-webapi-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-webapi-key', 'Bearer');

$api_instance = new Swagger\Client\Api\WorldApi();
$uuid = "uuid_example"; // string | The uuid of the world to get detailed information about.
$fields = "fields_example"; // string | An optional list of additional fields to get.
$methods = "methods_example"; // string | An optional list of additional methods to get.

try {
    $result = $api_instance->getWorld($uuid, $fields, $methods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the world to get detailed information about. |
 **fields** | **string**| An optional list of additional fields to get. | [optional]
 **methods** | **string**| An optional list of additional methods to get. | [optional]

### Return type

[**\Swagger\Client\Model\WorldResponse**](../Model/WorldResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorlds**
> \Swagger\Client\Model\WorldsResponse getWorlds($details)

World list

Get a list of all the worlds on the server.  > Required permission: world.list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: queryKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');
// Configure API key authorization: headerKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-webapi-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-webapi-key', 'Bearer');

$api_instance = new Swagger\Client\Api\WorldApi();
$details = "details_example"; // string | Pass this parameter to receive the full details for each world.

try {
    $result = $api_instance->getWorlds($details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorlds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **details** | **string**| Pass this parameter to receive the full details for each world. | [optional]

### Return type

[**\Swagger\Client\Model\WorldsResponse**](../Model/WorldsResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

