# Swagger\Client\MessageApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMessage**](MessageApi.md#getMessage) | **GET** /message/{uuid} | Detailed message info
[**getMessages**](MessageApi.md#getMessages) | **GET** /message | Message list
[**sendMessage**](MessageApi.md#sendMessage) | **POST** /message | Send an interactive message


# **getMessage**
> getMessage($uuid)

Detailed message info

Get detailed information about a message.  > Required permission: message.one

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

$api_instance = new Swagger\Client\Api\MessageApi();
$uuid = "uuid_example"; // string | The uuid of the message to get detailed information about.

try {
    $api_instance->getMessage($uuid);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->getMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the message to get detailed information about. |

### Return type

void (empty response body)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessages**
> \Swagger\Client\Model\MessagesResponse getMessages($details)

Message list

Get a list of all the messages that were sent through the message endpoint since the server started.  > Required permission: message.list

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

$api_instance = new Swagger\Client\Api\MessageApi();
$details = "details_example"; // string | Pass this parameter to receive the full details for each message.

try {
    $result = $api_instance->getMessages($details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->getMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **details** | **string**| Pass this parameter to receive the full details for each message. | [optional]

### Return type

[**\Swagger\Client\Model\MessagesResponse**](../Model/MessagesResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMessage**
> \Swagger\Client\Model\MessageResponse sendMessage($request)

Send an interactive message

Send an interactive message to a player. Make sure to have an event hook for \"custom_message\" to receive the response.  > Required permission: message.create

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

$api_instance = new Swagger\Client\Api\MessageApi();
$request = new \Swagger\Client\Model\MessageRequest(); // \Swagger\Client\Model\MessageRequest | Details of the message sent to the player

try {
    $result = $api_instance->sendMessage($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\MessageRequest**](../Model/MessageRequest.md)| Details of the message sent to the player |

### Return type

[**\Swagger\Client\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

