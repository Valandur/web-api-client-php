# Swagger\Client\RegistryApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCatalogValues**](RegistryApi.md#getCatalogValues) | **GET** /registry/{className} | List catalog values


# **getCatalogValues**
> \Swagger\Client\Model\CatalogTypesResponse getCatalogValues($class_name)

List catalog values

Lists all the catalog values of a specified CatalogType.  > Required permission: registry.one

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

$api_instance = new Swagger\Client\Api\RegistryApi();
$class_name = "class_name_example"; // string | The fully qualified class name of the CatalogType to get.

try {
    $result = $api_instance->getCatalogValues($class_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistryApi->getCatalogValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class_name** | **string**| The fully qualified class name of the CatalogType to get. |

### Return type

[**\Swagger\Client\Model\CatalogTypesResponse**](../Model/CatalogTypesResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

