# UpdateWorldRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the world | 
**allow_commands** | **bool** |  | [optional] 
**difficulty** | [**\Swagger\Client\Model\CatalogType**](CatalogType.md) | Which difficulty the world is set to | [optional] 
**game_mode** | [**\Swagger\Client\Model\GameMode**](GameMode.md) | Which game mode the world defaults to | [optional] 
**game_rules** | **map[string,string]** | The game rule settings of this world | [optional] 
**generator** | [**\Swagger\Client\Model\CatalogType**](CatalogType.md) | Which generator to use for the world | [optional] 
**keep_spawn_loaded** | **bool** |  | [optional] 
**load_on_startup** | **bool** |  | [optional] 
**loaded** | **bool** | True if the world should be loaded, false otherwise | [optional] 
**seed** | **int** | The seed of the world | [optional] 
**uses_map_features** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


