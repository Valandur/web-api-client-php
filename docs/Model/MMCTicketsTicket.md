# MMCTicketsTicket

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique id of this ticket | 
**link** | **string** | The API link that can be used to obtain more information about this object | 
**message** | **string** | The message sent along with this ticket | 
**status** | **string** | The current status of the ticket | 
**timestamp** | **int** | The unix timestamp (in seconds) when this ticket was submitted | 
**comment** | **string** | The comment added by staff to this ticket | [optional] 
**location** | [**\Swagger\Client\Model\Location**](Location.md) | The location at which this ticket was submitted | [optional] 
**notified** | **int** | True if staff has been notified about this ticket, false otherwise | [optional] 
**sender** | [**\Swagger\Client\Model\PlayerFull**](PlayerFull.md) | The sender of this ticket | [optional] 
**staff** | [**\Swagger\Client\Model\Player**](Player.md) | The staff member that was assigned to this ticket | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


