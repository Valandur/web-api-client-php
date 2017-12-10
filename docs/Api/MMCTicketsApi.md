# Swagger\Client\MMCTicketsApi

All URIs are relative to *http://&lt;host&gt;/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeTicket**](MMCTicketsApi.md#changeTicket) | **PUT** /mmctickets/ticket/{id} | Edit ticket
[**getTicket**](MMCTicketsApi.md#getTicket) | **GET** /mmctickets/ticket/{id} | Detailed ticket info
[**getTickets**](MMCTicketsApi.md#getTickets) | **GET** /mmctickets/ticket | Ticket list


# **changeTicket**
> \Swagger\Client\Model\MMCTicketsTicketResponse changeTicket($id, $update_ticket_request)

Edit ticket

Update the properties of an existing ticket.  > Required permission: mmctickets.ticket.change

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

$api_instance = new Swagger\Client\Api\MMCTicketsApi();
$id = "id_example"; // string | The id of the ticket.
$update_ticket_request = new \Swagger\Client\Model\MMCUpdateTicketRequest(); // \Swagger\Client\Model\MMCUpdateTicketRequest | The new properties of the ticket

try {
    $result = $api_instance->changeTicket($id, $update_ticket_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MMCTicketsApi->changeTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the ticket. |
 **update_ticket_request** | [**\Swagger\Client\Model\MMCUpdateTicketRequest**](../Model/MMCUpdateTicketRequest.md)| The new properties of the ticket |

### Return type

[**\Swagger\Client\Model\MMCTicketsTicketResponse**](../Model/MMCTicketsTicketResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicket**
> \Swagger\Client\Model\MMCTicketsTicketResponse getTicket($id)

Detailed ticket info

Get detailed information about a ticket.  > Required permission: mmctickets.ticket.one

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

$api_instance = new Swagger\Client\Api\MMCTicketsApi();
$id = "id_example"; // string | The id of the ticket to get detailed information about.

try {
    $result = $api_instance->getTicket($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MMCTicketsApi->getTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the ticket to get detailed information about. |

### Return type

[**\Swagger\Client\Model\MMCTicketsTicketResponse**](../Model/MMCTicketsTicketResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTickets**
> \Swagger\Client\Model\MMCTicketsTicketsResponse getTickets($details)

Ticket list

Get a list of all the tickets on the server.  > Required permission: mmtickets.ticket.list

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

$api_instance = new Swagger\Client\Api\MMCTicketsApi();
$details = "details_example"; // string | Pass this parameter to receive the full details for each ticket.

try {
    $result = $api_instance->getTickets($details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MMCTicketsApi->getTickets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **details** | **string**| Pass this parameter to receive the full details for each ticket. | [optional]

### Return type

[**\Swagger\Client\Model\MMCTicketsTicketsResponse**](../Model/MMCTicketsTicketsResponse.md)

### Authorization

[headerKey](../../README.md#headerKey), [queryKey](../../README.md#queryKey)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

