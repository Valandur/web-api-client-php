# BlockOperationFull

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | The UUID of the block update operation. | [optional] 
**type** | **string** | The type of action that is being performed by this operation. | [optional] 
**status** | **string** | The current status of the operation, one of: INIT, RUNNING, PAUSED, DONE, ERRORED. | [optional] 
**progress** | **float** | The update progress of this operation, from 0 (nothing done) to 1 (completely done). | [optional] 
**est_time_remaining** | **float** | The estimated amount of seconds remaining before this operation is completed. | [optional] 
**link** | **string** | The Web-API url to access for details about this operation. | [optional] 
**min** | [**\Swagger\Client\Model\Vector3**](Vector3.md) |  | [optional] 
**max** | [**\Swagger\Client\Model\Vector3**](Vector3.md) |  | [optional] 
**blocks** | [**\Swagger\Client\Model\BlockFull[][][]**](array.md) | This array is only present if this is a BlockGetOperation. Contains the blocks that have already been scanned. All other values (blocks yet to be scanned) are set to null. | [optional] 
**error** | **string** | Any error that occured during execution. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


