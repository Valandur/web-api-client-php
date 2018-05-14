# CreateBlockOperationRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**max** | [**\Swagger\Client\Model\Vector3i**](Vector3i.md) | The maximum world coordinates spanning the cube where the operation is run | 
**min** | [**\Swagger\Client\Model\Vector3i**](Vector3i.md) | The minimum world coordinates spanning the cube where the operation is run | 
**type** | **string** | The type of the block operation | 
**world** | **string** | The world that the operation is run in | 
**block** | [**\Swagger\Client\Model\BlockState**](BlockState.md) | The block that we want to change all other blocks into (when using an UPDATE operation | [optional] 
**blocks** | [**\Swagger\Client\Model\BlockState[][][]**](array.md) | An array of blocks defining what each block in the spanned cube | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


