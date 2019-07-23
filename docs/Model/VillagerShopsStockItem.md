# VillagerShopsStockItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buy_price** | **double** | The amount of money this stack consts to buy as player | 
**currency** | [**\Swagger\Client\Model\CatalogTypeCurrency**](CatalogTypeCurrency.md) | The currency for this item listing | 
**has_stock** | **bool** | Returns wether this shop has a limited stock | 
**item** | [**\Swagger\Client\Model\ItemStack**](ItemStack.md) | The raw ItemStack data for this shop listing | 
**max_stock** | **int** | If this shop has a limited stock, returns how many of these items can be stocked, 0 is unlimited | 
**sell_price** | **double** | The amount of money this stack earns the player when selling | 
**shop_id** | **string** | The shop uuid offering this item listing | 
**stock** | **int** | If this shop has a limited stock, returns how many items are stocked, otherwise returns items stack size | 
**id** | **int** | The index of this item withing the shops inventory | [optional] 
**link** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


