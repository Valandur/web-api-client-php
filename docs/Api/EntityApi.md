# Swagger\Client\EntityApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeEntity**](EntityApi.md#changeEntity) | **PUT** /entity/{uuid} | Edit entity
[**createEntity**](EntityApi.md#createEntity) | **POST** /entity | Create an entity
[**destroyEntity**](EntityApi.md#destroyEntity) | **DELETE** /entity/{uuid} | Destroy an entity
[**executeEntityMethod**](EntityApi.md#executeEntityMethod) | **POST** /entity/{uuid} | Execute entity method
[**getEntities**](EntityApi.md#getEntities) | **GET** /entity | Entities list
[**getEntity**](EntityApi.md#getEntity) | **GET** /entity/{uuid} | Detailed entity info


# **changeEntity**
> \Swagger\Client\Model\EntityResponse changeEntity($uuid, $update_entity_request)

Edit entity

Update the properties of an existing entity.  > Required permission: entity.change

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

$api_instance = new Swagger\Client\Api\EntityApi();
$uuid = "uuid_example"; // string | The uuid of the entity.
$update_entity_request = new \Swagger\Client\Model\UpdateEntityRequest(); // \Swagger\Client\Model\UpdateEntityRequest | The new properties of the entity

try {
    $result = $api_instance->changeEntity($uuid, $update_entity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityApi->changeEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the entity. |
 **update_entity_request** | [**\Swagger\Client\Model\UpdateEntityRequest**](../Model/UpdateEntityRequest.md)| The new properties of the entity |

### Return type

[**\Swagger\Client\Model\EntityResponse**](../Model/EntityResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEntity**
> \Swagger\Client\Model\EntityResponse createEntity($create_entity_request)

Create an entity

Creates & Spawns a new entity with the specified properties.  > Required permission: entity.create

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

$api_instance = new Swagger\Client\Api\EntityApi();
$create_entity_request = new \Swagger\Client\Model\CreateEntityRequest(); // \Swagger\Client\Model\CreateEntityRequest | 

try {
    $result = $api_instance->createEntity($create_entity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityApi->createEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_entity_request** | [**\Swagger\Client\Model\CreateEntityRequest**](../Model/CreateEntityRequest.md)|  |

### Return type

[**\Swagger\Client\Model\EntityResponse**](../Model/EntityResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destroyEntity**
> \Swagger\Client\Model\EntityResponse destroyEntity($uuid)

Destroy an entity

Destroys an entity.  > Required permission: entity.delete

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

$api_instance = new Swagger\Client\Api\EntityApi();
$uuid = "uuid_example"; // string | The uuid of the entity.

try {
    $result = $api_instance->destroyEntity($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityApi->destroyEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the entity. |

### Return type

[**\Swagger\Client\Model\EntityResponse**](../Model/EntityResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeEntityMethod**
> \Swagger\Client\Model\EntityMethodResult executeEntityMethod($uuid, $request)

Execute entity method

Provides direct access to the underlaying entity object and can execute any method on it.  > Required permission: entity.method

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

$api_instance = new Swagger\Client\Api\EntityApi();
$uuid = "uuid_example"; // string | The uuid of the entity.
$request = new \Swagger\Client\Model\RawRequest(); // \Swagger\Client\Model\RawRequest | Information about which method to execute.

try {
    $result = $api_instance->executeEntityMethod($uuid, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityApi->executeEntityMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the entity. |
 **request** | [**\Swagger\Client\Model\RawRequest**](../Model/RawRequest.md)| Information about which method to execute. |

### Return type

[**\Swagger\Client\Model\EntityMethodResult**](../Model/EntityMethodResult.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntities**
> \Swagger\Client\Model\EntitiesList getEntities($details)

Entities list

Get a list of all entities on the server (in all worlds).  > Required permission: entity.list

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

$api_instance = new Swagger\Client\Api\EntityApi();
$details = "details_example"; // string | Pass this parameter to receive the full details for each entity.

try {
    $result = $api_instance->getEntities($details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityApi->getEntities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **details** | **string**| Pass this parameter to receive the full details for each entity. | [optional]

### Return type

[**\Swagger\Client\Model\EntitiesList**](../Model/EntitiesList.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntity**
> \Swagger\Client\Model\EntityResponse getEntity($uuid, $fields, $methods)

Detailed entity info

Get detailed information about an entity.  > Required permission: entity.one

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

$api_instance = new Swagger\Client\Api\EntityApi();
$uuid = "uuid_example"; // string | The uuid of the entity to get detailed information about.
$fields = "fields_example"; // string | An optional list of additional fields to get.
$methods = "methods_example"; // string | An optional list of additional methods to get.

try {
    $result = $api_instance->getEntity($uuid, $fields, $methods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityApi->getEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the entity to get detailed information about. |
 **fields** | **string**| An optional list of additional fields to get. | [optional]
 **methods** | **string**| An optional list of additional methods to get. | [optional]

### Return type

[**\Swagger\Client\Model\EntityResponse**](../Model/EntityResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

