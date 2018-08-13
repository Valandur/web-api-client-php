# Swagger\Client\UserApi

All URIs are relative to *https://localhost/api/v5*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser**](UserApi.md#createUser) | **POST** /user | Create a user
[**deleteUser**](UserApi.md#deleteUser) | **DELETE** /user/{name} | Delete a user
[**getMe**](UserApi.md#getMe) | **GET** /user/me | Check info
[**getUsers**](UserApi.md#getUsers) | **GET** /user | List users
[**login**](UserApi.md#login) | **POST** /user/login | Login
[**logout**](UserApi.md#logout) | **POST** /user/logout | Logout
[**logoutRedirect**](UserApi.md#logoutRedirect) | **GET** /user/logout | 
[**modifyUser**](UserApi.md#modifyUser) | **PUT** /user/{name} | Update a user


# **createUser**
> \Swagger\Client\Model\UserPermissionStruct createUser($body, $details, $accept, $pretty)

Create a user

Creates a new Web-API user with the specified username and password.     **Required permissions:**    - **user.create**

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

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateUserRequest(); // \Swagger\Client\Model\CreateUserRequest | 
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->createUser($body, $details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateUserRequest**](../Model/CreateUserRequest.md)|  | [optional]
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

[**\Swagger\Client\Model\UserPermissionStruct**](../Model/UserPermissionStruct.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> \Swagger\Client\Model\UserPermissionStruct deleteUser($name, $details, $accept, $pretty)

Delete a user

Removes a Web-API user.     **Required permissions:**    - **user.delete**

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

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The username of the user to delete
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->deleteUser($name, $details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The username of the user to delete |
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

[**\Swagger\Client\Model\UserPermissionStruct**](../Model/UserPermissionStruct.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMe**
> \Swagger\Client\Model\PermissionStruct getMe($details, $accept, $pretty)

Check info

Checks to see if the passed api key is still valid and retrieves the user info and permissions associated with this key     **Required permissions:**    - **user.**

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

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->getMe($details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getMe: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\PermissionStruct**](../Model/PermissionStruct.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \Swagger\Client\Model\UserPermissionStruct[] getUsers($details, $accept, $pretty)

List users

Gets a list of all the Web-API users.     **Required permissions:**    - **user.list**

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

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->getUsers($details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsers: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\UserPermissionStruct[]**](../Model/UserPermissionStruct.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **login**
> \Swagger\Client\Model\PermissionStruct login($body, $details, $accept, $pretty)

Login

Tries to acquire an api key with the passed credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\AuthenticationRequest(); // \Swagger\Client\Model\AuthenticationRequest | 
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->login($body, $details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AuthenticationRequest**](../Model/AuthenticationRequest.md)|  | [optional]
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

[**\Swagger\Client\Model\PermissionStruct**](../Model/PermissionStruct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logout**
> \Swagger\Client\Model\PermissionStruct logout($details, $accept, $pretty)

Logout

Invalidate the current API key, logging out the active user.     **Required permissions:**    - **user.**

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

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->logout($details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->logout: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\PermissionStruct**](../Model/PermissionStruct.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logoutRedirect**
> logoutRedirect($redirect, $details, $accept, $pretty)



null     **Required permissions:**    - **user.**

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

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redirect = "redirect_example"; // string | The URL the client should be redirect to after logout
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $apiInstance->logoutRedirect($redirect, $details, $accept, $pretty);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->logoutRedirect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **redirect** | **string**| The URL the client should be redirect to after logout | [optional]
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyUser**
> \Swagger\Client\Model\UserPermissionStruct modifyUser($name, $body, $details, $accept, $pretty)

Update a user

Changes the properties of a Web-API user     **Required permissions:**    - **user.modify**

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

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The username of the user to delete
$body = new \Swagger\Client\Model\ModifyUserRequest(); // \Swagger\Client\Model\ModifyUserRequest | 
$details = true; // bool | Add to include additional details, omit or false otherwise
$accept = "accept_example"; // string | Override the 'Accept' request header (useful for debugging your requests)
$pretty = true; // bool | Add to make the Web-API pretty print the response (useful for debugging your requests)

try {
    $result = $apiInstance->modifyUser($name, $body, $details, $accept, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->modifyUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The username of the user to delete |
 **body** | [**\Swagger\Client\Model\ModifyUserRequest**](../Model/ModifyUserRequest.md)|  | [optional]
 **details** | **bool**| Add to include additional details, omit or false otherwise | [optional]
 **accept** | **string**| Override the &#39;Accept&#39; request header (useful for debugging your requests) | [optional]
 **pretty** | **bool**| Add to make the Web-API pretty print the response (useful for debugging your requests) | [optional]

### Return type

[**\Swagger\Client\Model\UserPermissionStruct**](../Model/UserPermissionStruct.md)

### Authorization

[ApiKeyHeader](../../README.md#ApiKeyHeader), [ApiKeyQuery](../../README.md#ApiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

