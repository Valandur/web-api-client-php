# ChunkFull

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | The unique identifier of the chunk. | [optional] 
**position** | [**\Swagger\Client\Model\Vector3**](Vector3.md) |  | [optional] 
**world** | [**\Swagger\Client\Model\World**](World.md) |  | [optional] 
**block_min** | [**\Swagger\Client\Model\Vector3**](Vector3.md) |  | [optional] 
**block_max** | [**\Swagger\Client\Model\Vector3**](Vector3.md) |  | [optional] 
**is_loaded** | **bool** | True if the chunk is currently loaded in the world, false otherwise. | [optional] 
**inhabited_time** | **float** | The number of ticks a player has been present in this chunk. | [optional] 
**difficulty_factor** | **double** | Gets the regional difficulty factor for this chunk. | [optional] 
**difficulty_percentage** | **double** | Gets the regional difficulty as a percentage for this chunk. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


