# NationsNationFull

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | The unique id of the nation. | [optional] 
**name** | **string** | The name of the nation. | [optional] 
**tag** | **string** | The tag of the nation. | [optional] 
**president** | [**\Swagger\Client\Model\Player**](Player.md) |  | [optional] 
**real_name** | **string** | The real name of the nation. | [optional] 
**upkeep** | **double** | How much upkeep has to be paid for this nation. | [optional] 
**taxes** | **double** | The amount of taxes that citizens are charged. | [optional] 
**flags** | **object** | A map of flags | [optional] 
**citizens** | [**\Swagger\Client\Model\Player[]**](Player.md) | The citizens that belong to this nation. | [optional] 
**ministers** | [**\Swagger\Client\Model\Player[]**](Player.md) | The ministers that belong to this nation. | [optional] 
**staff** | [**\Swagger\Client\Model\Player[]**](Player.md) | The staff that belong to this nation. | [optional] 
**spawns** | **object** | A map of spawn names to spawn locations. | [optional] 
**rects** | [**\Swagger\Client\Model\NationsRect[]**](NationsRect.md) | The rects that define the area of this nation. | [optional] 
**zones** | [**\Swagger\Client\Model\NationsZone[]**](NationsZone.md) | The zones that belong to this nation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


