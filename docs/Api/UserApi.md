# Swagger\Client\UserApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkUser**](UserApi.md#checkUser) | **GET** /user | Check a user key
[**login**](UserApi.md#login) | **POST** /user | Login


# **checkUser**
> \Swagger\Client\Model\UserResponse checkUser()

Check a user key

Checks to see if the passed api key is still valid.

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

$api_instance = new Swagger\Client\Api\UserApi();

try {
    $result = $api_instance->checkUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->checkUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **login**
> \Swagger\Client\Model\LoginResponse login($login_request)

Login

Tries to aquire an api key with the passed credentials.

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

$api_instance = new Swagger\Client\Api\UserApi();
$login_request = new \Swagger\Client\Model\LoginRequest(); // \Swagger\Client\Model\LoginRequest | 

try {
    $result = $api_instance->login($login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_request** | [**\Swagger\Client\Model\LoginRequest**](../Model/\Swagger\Client\Model\LoginRequest.md)|  |

### Return type

[**\Swagger\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

[queryKey](../../README.md#queryKey), [headerKey](../../README.md#headerKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

