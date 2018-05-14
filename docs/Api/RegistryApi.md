# Swagger\Client\RegistryApi

All URIs are relative to *https://localhost/api/v5*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRegistry**](RegistryApi.md#getRegistry) | **GET** /registry/{class} | Get a catalog type


# **getRegistry**
> \Swagger\Client\Model\CatalogType[] getRegistry($class, $details, $accept, $pretty)

Get a catalog type

Lists all the catalog values of a specified CatalogType.     **Required permissions:**    - **registry.one**

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

$apiInstance = new Swagger\Client\Api\RegistryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = "class_example"; // string | The fully qualified classname of the catalog type
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->getRegistry($class, $details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistryApi->getRegistry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| The fully qualified classname of the catalog type |
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

[**\Swagger\Client\Model\CatalogType[]**](../Model/CatalogType.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

