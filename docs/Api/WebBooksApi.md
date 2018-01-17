# Swagger\Client\WebBooksApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBook**](WebBooksApi.md#createBook) | **POST** /webbooks/book | Create web book
[**deleteBook**](WebBooksApi.md#deleteBook) | **DELETE** /webbooks/book/{id} | Delete a web book
[**getBook**](WebBooksApi.md#getBook) | **GET** /webbooks/book/{id} | Detailed web book info
[**getBookHtml**](WebBooksApi.md#getBookHtml) | **GET** /webbooks/book/{id}/html | Web Book HTML
[**getBookHtmlPost**](WebBooksApi.md#getBookHtmlPost) | **POST** /webbooks/book/{id}/html | Web Book HTML
[**getBooks**](WebBooksApi.md#getBooks) | **GET** /webbooks/book | Books list


# **createBook**
> \Swagger\Client\Model\WebBooksResponse1 createBook($create_web_book_request)

Create web book

Create a new web book from the specified data.  > Required permission: webbooks.book.create

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

$api_instance = new Swagger\Client\Api\WebBooksApi();
$create_web_book_request = new \Swagger\Client\Model\CreateWebBookRequest(); // \Swagger\Client\Model\CreateWebBookRequest | 

try {
    $result = $api_instance->createBook($create_web_book_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebBooksApi->createBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_web_book_request** | [**\Swagger\Client\Model\CreateWebBookRequest**](../Model/CreateWebBookRequest.md)|  |

### Return type

[**\Swagger\Client\Model\WebBooksResponse1**](../Model/WebBooksResponse1.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBook**
> deleteBook($id)

Delete a web book

Delete a web book.  > Required permission: webbooks.book.delete

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

$api_instance = new Swagger\Client\Api\WebBooksApi();
$id = "id_example"; // string | The id of the web book to delete.

try {
    $api_instance->deleteBook($id);
} catch (Exception $e) {
    echo 'Exception when calling WebBooksApi->deleteBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the web book to delete. |

### Return type

void (empty response body)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBook**
> \Swagger\Client\Model\WebBooksResponse1 getBook($id)

Detailed web book info

Get detailed information about a web book.  > Required permission: webbooks.book.one

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

$api_instance = new Swagger\Client\Api\WebBooksApi();
$id = "id_example"; // string | The id of the web book to get detailed information about.

try {
    $result = $api_instance->getBook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebBooksApi->getBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the web book to get detailed information about. |

### Return type

[**\Swagger\Client\Model\WebBooksResponse1**](../Model/WebBooksResponse1.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBookHtml**
> string getBookHtml($id)

Web Book HTML

Get the web book content as HTML.  > Required permission: webbooks.book.html

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

$api_instance = new Swagger\Client\Api\WebBooksApi();
$id = "id_example"; // string | The id of the web book to get the html for.

try {
    $result = $api_instance->getBookHtml($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebBooksApi->getBookHtml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the web book to get the html for. |

### Return type

**string**

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBookHtmlPost**
> string getBookHtmlPost($id)

Web Book HTML

Get the web book content as HTML.  > Required permission: webbooks.book.html

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

$api_instance = new Swagger\Client\Api\WebBooksApi();
$id = "id_example"; // string | The id of the web book to get the html for.

try {
    $result = $api_instance->getBookHtmlPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebBooksApi->getBookHtmlPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the web book to get the html for. |

### Return type

**string**

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBooks**
> \Swagger\Client\Model\WebBooksResponse getBooks($details)

Books list

Get a list of all the web books on the server.  > Required permission: webbooks.book.list

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

$api_instance = new Swagger\Client\Api\WebBooksApi();
$details = "details_example"; // string | Pass this parameter to receive the full details for each web book.

try {
    $result = $api_instance->getBooks($details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebBooksApi->getBooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **details** | **string**| Pass this parameter to receive the full details for each web book. | [optional]

### Return type

[**\Swagger\Client\Model\WebBooksResponse**](../Model/WebBooksResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

