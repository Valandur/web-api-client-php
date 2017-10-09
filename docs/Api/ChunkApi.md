# Swagger\Client\ChunkApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChunk**](ChunkApi.md#getChunk) | **GET** /world/{uuid}/chunk/{x}/{z} | Detailed chunk info
[**getChunks**](ChunkApi.md#getChunks) | **GET** /world/{uuid}/chunk | Loaded chunk list


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

$api_instance = new Swagger\Client\Api\ChunkApi();
$uuid = "uuid_example"; // string | The uuid of the world.
$x = "x_example"; // string | The x-coordinate of the chunk.
$z = "z_example"; // string | The z-coordinate of the chunk.

try {
    $result = $api_instance->getChunk($uuid, $x, $z);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChunkApi->getChunk: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\ChunkApi();
$uuid = "uuid_example"; // string | The uuid of the world.

try {
    $result = $api_instance->getChunks($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChunkApi->getChunks: ', $e->getMessage(), PHP_EOL;
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

