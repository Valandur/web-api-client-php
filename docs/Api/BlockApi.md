# Swagger\Client\BlockApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelBlockOperation**](BlockApi.md#cancelBlockOperation) | **DELETE** /block/op/{uuid} | Cancel block operation
[**changeBlockOperation**](BlockApi.md#changeBlockOperation) | **PUT** /block/op/{uuid} | Modify block operation
[**getBlock**](BlockApi.md#getBlock) | **GET** /block/{world}/{x}/{y}/{z} | Get one block
[**getBlockOperation**](BlockApi.md#getBlockOperation) | **GET** /block/op/{uuid} | Block operation details
[**getBlockOperations**](BlockApi.md#getBlockOperations) | **GET** /block/op | List block operations
[**startBlockOperation**](BlockApi.md#startBlockOperation) | **POST** /block/op | Create block operation


# **cancelBlockOperation**
> \Swagger\Client\Model\BlockOperationResponse cancelBlockOperation($uuid)

Cancel block operation

Cancel a pending or running block operation. **THIS DOES NOT UNDO THE BLOCK CHANGES**  > Required permission: block.op.delete

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

$api_instance = new Swagger\Client\Api\BlockApi();
$uuid = "uuid_example"; // string | The uuid of the block operation.

try {
    $result = $api_instance->cancelBlockOperation($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->cancelBlockOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the block operation. |

### Return type

[**\Swagger\Client\Model\BlockOperationResponse**](../Model/BlockOperationResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeBlockOperation**
> \Swagger\Client\Model\BlockOperationResponse changeBlockOperation($uuid, $data)

Modify block operation

Modify an existing block operation to either pause or continue it.  > Required permission: block.op.change

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

$api_instance = new Swagger\Client\Api\BlockApi();
$uuid = "uuid_example"; // string | The uuid of the block operation.
$data = new \Swagger\Client\Model\Data(); // \Swagger\Client\Model\Data | The new data applied to the block operation.

try {
    $result = $api_instance->changeBlockOperation($uuid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->changeBlockOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the block operation. |
 **data** | [**\Swagger\Client\Model\Data**](../Model/\Swagger\Client\Model\Data.md)| The new data applied to the block operation. |

### Return type

[**\Swagger\Client\Model\BlockOperationResponse**](../Model/BlockOperationResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlock**
> \Swagger\Client\Model\SingleBlock getBlock($world, $x, $y, $z)

Get one block

Gets information about one block in the world.  > Required permission: block.one

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

$api_instance = new Swagger\Client\Api\BlockApi();
$world = "world_example"; // string | The uuid of the world the block is in.
$x = "x_example"; // string | The x-coordinate of the block.
$y = "y_example"; // string | The y-coordinate of the block.
$z = "z_example"; // string | The z-coordinate of the block.

try {
    $result = $api_instance->getBlock($world, $x, $y, $z);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->getBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **world** | **string**| The uuid of the world the block is in. |
 **x** | **string**| The x-coordinate of the block. |
 **y** | **string**| The y-coordinate of the block. |
 **z** | **string**| The z-coordinate of the block. |

### Return type

[**\Swagger\Client\Model\SingleBlock**](../Model/SingleBlock.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlockOperation**
> \Swagger\Client\Model\BlockOperationResponse getBlockOperation($uuid)

Block operation details

Gets details about a specific block operation  > Required permission: block.op.one

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

$api_instance = new Swagger\Client\Api\BlockApi();
$uuid = "uuid_example"; // string | The uuid of the block operation.

try {
    $result = $api_instance->getBlockOperation($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->getBlockOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the block operation. |

### Return type

[**\Swagger\Client\Model\BlockOperationResponse**](../Model/BlockOperationResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlockOperations**
> \Swagger\Client\Model\BlockOperationsList getBlockOperations()

List block operations

Returns a list of all the currently running block operations.  > Required permission: block.op.list

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

$api_instance = new Swagger\Client\Api\BlockApi();

try {
    $result = $api_instance->getBlockOperations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->getBlockOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BlockOperationsList**](../Model/BlockOperationsList.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startBlockOperation**
> \Swagger\Client\Model\BlockOperationResponse startBlockOperation($request)

Create block operation

Start a request to get or change blocks on the server.  > Required permission: block.op.create

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

$api_instance = new Swagger\Client\Api\BlockApi();
$request = array(new BlockOperationNew()); // \Swagger\Client\Model\BlockOperationNew[] | The requested changes to blocks

try {
    $result = $api_instance->startBlockOperation($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->startBlockOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\BlockOperationNew[]**](../Model/BlockOperationNew.md)| The requested changes to blocks |

### Return type

[**\Swagger\Client\Model\BlockOperationResponse**](../Model/BlockOperationResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

