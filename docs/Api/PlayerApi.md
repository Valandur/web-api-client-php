# Swagger\Client\PlayerApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changePlayer**](PlayerApi.md#changePlayer) | **PUT** /player/{uuid} | Edit player
[**executePlayerMethod**](PlayerApi.md#executePlayerMethod) | **POST** /player/{uuid} | Execute player method
[**getPlayer**](PlayerApi.md#getPlayer) | **GET** /player/{uuid} | Detailed player info
[**getPlayers**](PlayerApi.md#getPlayers) | **GET** /player | Player list


# **changePlayer**
> \Swagger\Client\Model\PlayerResponse changePlayer($uuid, $update_player_request)

Edit player

Update the properties of an existing player.  > Required permission: player.change

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

$api_instance = new Swagger\Client\Api\PlayerApi();
$uuid = "uuid_example"; // string | The uuid of the player.
$update_player_request = new \Swagger\Client\Model\UpdatePlayerRequest(); // \Swagger\Client\Model\UpdatePlayerRequest | The new properties of the player

try {
    $result = $api_instance->changePlayer($uuid, $update_player_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayerApi->changePlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the player. |
 **update_player_request** | [**\Swagger\Client\Model\UpdatePlayerRequest**](../Model/\Swagger\Client\Model\UpdatePlayerRequest.md)| The new properties of the player |

### Return type

[**\Swagger\Client\Model\PlayerResponse**](../Model/PlayerResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executePlayerMethod**
> \Swagger\Client\Model\PlayerMethodResult executePlayerMethod($uuid, $request)

Execute player method

Provides direct access to the underlaying player object and can execute any method on it.  > Required permission: player.method

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

$api_instance = new Swagger\Client\Api\PlayerApi();
$uuid = "uuid_example"; // string | The uuid of the player.
$request = new \Swagger\Client\Model\RawRequest(); // \Swagger\Client\Model\RawRequest | Information about which method to execute.

try {
    $result = $api_instance->executePlayerMethod($uuid, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayerApi->executePlayerMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the player. |
 **request** | [**\Swagger\Client\Model\RawRequest**](../Model/\Swagger\Client\Model\RawRequest.md)| Information about which method to execute. |

### Return type

[**\Swagger\Client\Model\PlayerMethodResult**](../Model/PlayerMethodResult.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlayer**
> \Swagger\Client\Model\PlayerResponse getPlayer($uuid, $fields, $methods)

Detailed player info

Get detailed information about a player.  > Required permission: player.one

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

$api_instance = new Swagger\Client\Api\PlayerApi();
$uuid = "uuid_example"; // string | The uuid of the player to get detailed information about.
$fields = "fields_example"; // string | An optional list of additional fields to get.
$methods = "methods_example"; // string | An optional list of additional methods to get.

try {
    $result = $api_instance->getPlayer($uuid, $fields, $methods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayerApi->getPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the player to get detailed information about. |
 **fields** | **string**| An optional list of additional fields to get. | [optional]
 **methods** | **string**| An optional list of additional methods to get. | [optional]

### Return type

[**\Swagger\Client\Model\PlayerResponse**](../Model/PlayerResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlayers**
> \Swagger\Client\Model\PlayersList getPlayers()

Player list

Get a list of all the players on the server.  > Required permission: player.list

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

$api_instance = new Swagger\Client\Api\PlayerApi();

try {
    $result = $api_instance->getPlayers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayerApi->getPlayers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PlayersList**](../Model/PlayersList.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

