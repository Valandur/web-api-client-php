# Swagger\Client\InteractiveMessageApi

All URIs are relative to *https://localhost/api/v5*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMessage**](InteractiveMessageApi.md#getMessage) | **GET** /interactive-message/{uuid} | Get a message
[**listMessages**](InteractiveMessageApi.md#listMessages) | **GET** /interactive-message | List messages
[**sendMessage**](InteractiveMessageApi.md#sendMessage) | **POST** /interactive-message | Send a message


# **getMessage**
> \Swagger\Client\Model\InteractiveMessage getMessage($uuid, $details, $accept, $pretty)

Get a message

Get detailed information about a message.     **Required permissions:**    - **interactive-message.one**

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

$apiInstance = new Swagger\Client\Api\InteractiveMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the sent message
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->getMessage($uuid, $details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractiveMessageApi->getMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| The uuid of the sent message |
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

[**\Swagger\Client\Model\InteractiveMessage**](../Model/InteractiveMessage.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMessages**
> \Swagger\Client\Model\InteractiveMessage[] listMessages($details, $accept, $pretty)

List messages

Get a list of all the messages that were sent through the message endpoint since the server started.     **Required permissions:**    - **interactive-message.list**

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

$apiInstance = new Swagger\Client\Api\InteractiveMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->listMessages($details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractiveMessageApi->listMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

[**\Swagger\Client\Model\InteractiveMessage[]**](../Model/InteractiveMessage.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMessage**
> \Swagger\Client\Model\InteractiveMessage sendMessage($body, $details, $accept, $pretty)

Send a message

Send an interactive message to a player. Make sure to have an event hook for \"custom_message\" to receive the response.     **Required permissions:**    - **interactive-message.create**

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

$apiInstance = new Swagger\Client\Api\InteractiveMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\InteractiveMessage(); // \Swagger\Client\Model\InteractiveMessage | 
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->sendMessage($body, $details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractiveMessageApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InteractiveMessage**](../Model/InteractiveMessage.md)|  | [optional]
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

[**\Swagger\Client\Model\InteractiveMessage**](../Model/InteractiveMessage.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

