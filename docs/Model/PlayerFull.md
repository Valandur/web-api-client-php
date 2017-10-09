# PlayerFull

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of player, usually &#x60;minecraft:player&#x60; | [optional] 
**uuid** | **string** | The unique identifier of the player. | [optional] 
**online** | **bool** | True if the player is currently online, false otherwise. | [optional] 
**location** | [**\Swagger\Client\Model\Location**](Location.md) |  | [optional] 
**name** | **string** | The name of the player. | [optional] 
**link** | **string** | The API URL which contains detailed information about this player. | [optional] 
**class** | **string** | The fully qualified class name of the object representing the player. Usually &#x60;net.minecraft.entity.player.EntityPlayerMP&#x60;. | [optional] 
**velocity** | [**\Swagger\Client\Model\Vector3**](Vector3.md) |  | [optional] 
**rotation** | [**\Swagger\Client\Model\Vector3**](Vector3.md) |  | [optional] 
**scale** | [**\Swagger\Client\Model\Vector3**](Vector3.md) |  | [optional] 
**inventory** | [**\Swagger\Client\Model\Inventory**](Inventory.md) |  | [optional] 
**connection** | [**\Swagger\Client\Model\PlayerFullConnection**](PlayerFullConnection.md) |  | [optional] 
**armour** | [**\Swagger\Client\Model\PlayerFullArmour**](PlayerFullArmour.md) |  | [optional] 
**achievements** | [**\Swagger\Client\Model\PlayerFullAchievements[]**](PlayerFullAchievements.md) | An array of achievements the player has been awarded. | [optional] 
**experience** | [**\Swagger\Client\Model\PlayerFullExperience**](PlayerFullExperience.md) |  | [optional] 
**game_mode** | **string** | The current game mode the player is in. | [optional] 
**joined** | [**\Swagger\Client\Model\PlayerFullJoined**](PlayerFullJoined.md) |  | [optional] 
**health** | [**\Swagger\Client\Model\PlayerFullHealth**](PlayerFullHealth.md) |  | [optional] 
**food** | [**\Swagger\Client\Model\PlayerFullFood**](PlayerFullFood.md) |  | [optional] 
**statistics** | **object** | A map from statistics id to value, keeping track of the players actions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


