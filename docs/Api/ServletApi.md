# Swagger\Client\ServletApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLoadedServlets**](ServletApi.md#getLoadedServlets) | **GET** /servlet | Loaded servlets


# **getLoadedServlets**
> \Swagger\Client\Model\ServletsResponse getLoadedServlets()

Loaded servlets

Get a map of all the servlets loaded on the server. The key is the path under which the servlet is available, and the value is the class name of the implementing class of the servlet.  > Required permission: servlet.list

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

$api_instance = new Swagger\Client\Api\ServletApi();

try {
    $result = $api_instance->getLoadedServlets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServletApi->getLoadedServlets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ServletsResponse**](../Model/ServletsResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

