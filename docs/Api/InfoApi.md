# Swagger\Client\InfoApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInfo**](InfoApi.md#getInfo) | **GET** /info | Server info
[**getServerProperties**](InfoApi.md#getServerProperties) | **GET** /info/properties | Server properties
[**getStats**](InfoApi.md#getStats) | **GET** /info/stats | Server stats


# **getInfo**
> object getInfo()

Server info

Get general information about the minecraft server.  > Required permission: info.get

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

$api_instance = new Swagger\Client\Api\InfoApi();

try {
    $result = $api_instance->getInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerProperties**
> \Swagger\Client\Model\ServerPropertiesList getServerProperties()

Server properties

Get the main server properties (server.properties file)  > Required permission: properties.list

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

$api_instance = new Swagger\Client\Api\InfoApi();

try {
    $result = $api_instance->getServerProperties();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getServerProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ServerPropertiesList**](../Model/ServerPropertiesList.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStats**
> \Swagger\Client\Model\StatsResponse getStats()

Server stats

Get statistical information about the server, such as player count, cpu and memory usage over time.  > Required permission: info.stats

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

$api_instance = new Swagger\Client\Api\InfoApi();

try {
    $result = $api_instance->getStats();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\StatsResponse**](../Model/StatsResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

