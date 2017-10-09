# Swagger\Client\CommandApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeCommand**](CommandApi.md#executeCommand) | **POST** /cmd | Execute command
[**getCommand**](CommandApi.md#getCommand) | **GET** /cmd/{name} | Detailed command info
[**getCommands**](CommandApi.md#getCommands) | **GET** /cmd | Command list


# **executeCommand**
> \Swagger\Client\Model\ExecuteCommandResponse executeCommand($request)

Execute command

Execute a command on the server. (Almost the same as running it from the console). Pass a list of commands to execute them in succession, if only passing one command the array is not required.  > Required permission: cmd.run > Required permission: cmd.run.[command]

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

$api_instance = new Swagger\Client\Api\CommandApi();
$request = array(new CommandRequest()); // \Swagger\Client\Model\CommandRequest[] | The command and arguments sent to the server

try {
    $result = $api_instance->executeCommand($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->executeCommand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CommandRequest[]**](../Model/CommandRequest.md)| The command and arguments sent to the server |

### Return type

[**\Swagger\Client\Model\ExecuteCommandResponse**](../Model/ExecuteCommandResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommand**
> \Swagger\Client\Model\CommandResponse1 getCommand($name)

Detailed command info

Get detailed information about a command.  > Required permission: cmd.one

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

$api_instance = new Swagger\Client\Api\CommandApi();
$name = "name_example"; // string | The name (main alias) of the command

try {
    $result = $api_instance->getCommand($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->getCommand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name (main alias) of the command |

### Return type

[**\Swagger\Client\Model\CommandResponse1**](../Model/CommandResponse1.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommands**
> \Swagger\Client\Model\CommandsResponse getCommands()

Command list

Gets a list of all the commands available on the server.  > Required permission: cmd.list

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

$api_instance = new Swagger\Client\Api\CommandApi();

try {
    $result = $api_instance->getCommands();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->getCommands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CommandsResponse**](../Model/CommandsResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

