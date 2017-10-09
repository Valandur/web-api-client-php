# UpdateWorldRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the world. | [optional] 
**seed** | **float** | The seed number. A random seed is generated if not provided. | [optional] 
**generator** | **string** | The id of the generator type to use. Check &#x60;/registry/org.spongepowered.api.world.GeneratorType&#x60;. | [optional] 
**game_mode** | **string** | The id of the game mode to use. Check &#x60;/registry/org.spongepowered.api.entity.living.player.gamemode.GameMode&#x60;. | [optional] 
**difficulty** | **string** | The id of the difficutly to use. Check &#x60;/registry/org.spongepowered.api.world.difficulty.Difficulty&#x60;. | [optional] 
**load_on_startup** | **bool** | True if the world is loaded when the server starts, false otherwise. | [optional] 
**keep_spawn_loaded** | **bool** | True to keep the spawn area of the world loaded, even if it is empty. | [optional] 
**allow_commands** | **bool** | True if executing commands is allowed in the world. | [optional] 
**uses_map_features** | **bool** | True to use map features of the generator (such as villages). | [optional] 
**loaded** | **bool** | True to load the world, false to unload it. | [optional] 
**game_rules** | **object** | A map of keys to values for the game rules of the world. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

