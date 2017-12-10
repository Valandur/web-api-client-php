# Swagger\Client\PluginApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPlugin**](PluginApi.md#getPlugin) | **GET** /plugin/{id} | Detailed plugin info
[**getPlugins**](PluginApi.md#getPlugins) | **GET** /plugin | Plugin list


# **getPlugin**
> \Swagger\Client\Model\PluginResponse getPlugin($id)

Detailed plugin info

Gets detailed information about a plugin.  > Required permission: plugin.one

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

$api_instance = new Swagger\Client\Api\PluginApi();
$id = "id_example"; // string | The id of the plugin to get detailed information about.

try {
    $result = $api_instance->getPlugin($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->getPlugin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the plugin to get detailed information about. |

### Return type

[**\Swagger\Client\Model\PluginResponse**](../Model/PluginResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlugins**
> \Swagger\Client\Model\PluginsResponse getPlugins()

Plugin list

Get a list of all the plugins running on the server.  > Required permission: plugin.list

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

$api_instance = new Swagger\Client\Api\PluginApi();

try {
    $result = $api_instance->getPlugins();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->getPlugins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PluginsResponse**](../Model/PluginsResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

