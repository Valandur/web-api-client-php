# Swagger\Client\HuskyCratesApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCrate**](HuskyCratesApi.md#getCrate) | **GET** /husky/crate/{id} | Detailed crate info
[**getCrates**](HuskyCratesApi.md#getCrates) | **GET** /husky/crate | Crate list


# **getCrate**
> \Swagger\Client\Model\HuskyCrateResponse getCrate($id)

Detailed crate info

Get detailed information about a crate.  > Required permission: husky.crate.one

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

$api_instance = new Swagger\Client\Api\HuskyCratesApi();
$id = "id_example"; // string | The id of the crate to get detailed information about.

try {
    $result = $api_instance->getCrate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HuskyCratesApi->getCrate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the crate to get detailed information about. |

### Return type

[**\Swagger\Client\Model\HuskyCrateResponse**](../Model/HuskyCrateResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCrates**
> \Swagger\Client\Model\HuskyCratesResponse getCrates($details)

Crate list

Get a list of all the crates on the server.  > Required permission: husky.crate.list

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

$api_instance = new Swagger\Client\Api\HuskyCratesApi();
$details = "details_example"; // string | Pass this parameter to receive the full details for each crate.

try {
    $result = $api_instance->getCrates($details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HuskyCratesApi->getCrates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **details** | **string**| Pass this parameter to receive the full details for each crate. | [optional]

### Return type

[**\Swagger\Client\Model\HuskyCratesResponse**](../Model/HuskyCratesResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

