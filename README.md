# SwaggerClient-php
Access Sponge powered Minecraft servers through a WebAPI  # Introduction This is the documentation of the various API routes offered by the WebAPI plugin.  This documentation assumes that you are familiar with the basic concepts of Web API's, such as `GET`, `PUT`, `POST` and `DELETE` methods, request `HEADERS` and `RESPONSE CODES` and `JSON` data.  By default this documentation can be found at http:/localhost:8080 (while your minecraft server is running) and the various routes start with http:/localhost:8080/api/...  As a quick test try reaching the route http:/localhost:8080/api/info (remember that you can only access \"localhost\" routes on the server on which you are running minecraft). This route should show you basic information about your server, like the motd and player count.  # Additional data Certain endpoints (such as `/player`, `/entity` and `/tile-entity` have additional properties which are not documented here, because the data depends on the concrete object type (eg. `Sheep` have a wool color, others do not) and on the other plugins/mods that are running on your server which might add additional data.  You can also find more information in the github docs (https:/github.com/Valandur/Web-API/tree/master/docs/DATA.md)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: &lt;version&gt;
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

$api_instance = new Swagger\Client\Api\BlockApi();
$uuid = "uuid_example"; // string | The uuid of the block operation.

try {
    $result = $api_instance->cancelBlockOperation($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->cancelBlockOperation: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://&lt;host&gt;/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BlockApi* | [**cancelBlockOperation**](docs/Api/BlockApi.md#cancelblockoperation) | **DELETE** /block/op/{uuid} | Cancel block operation
*BlockApi* | [**changeBlockOperation**](docs/Api/BlockApi.md#changeblockoperation) | **PUT** /block/op/{uuid} | Modify block operation
*BlockApi* | [**getBlock**](docs/Api/BlockApi.md#getblock) | **GET** /block/{world}/{x}/{y}/{z} | Get one block
*BlockApi* | [**getBlockOperation**](docs/Api/BlockApi.md#getblockoperation) | **GET** /block/op/{uuid} | Block operation details
*BlockApi* | [**getBlockOperations**](docs/Api/BlockApi.md#getblockoperations) | **GET** /block/op | List block operations
*BlockApi* | [**startBlockOperation**](docs/Api/BlockApi.md#startblockoperation) | **POST** /block/op | Create block operation
*ChunkApi* | [**getChunk**](docs/Api/ChunkApi.md#getchunk) | **GET** /world/{uuid}/chunk/{x}/{z} | Detailed chunk info
*ChunkApi* | [**getChunks**](docs/Api/ChunkApi.md#getchunks) | **GET** /world/{uuid}/chunk | Loaded chunk list
*CommandApi* | [**executeCommand**](docs/Api/CommandApi.md#executecommand) | **POST** /cmd | Execute command
*CommandApi* | [**getCommand**](docs/Api/CommandApi.md#getcommand) | **GET** /cmd/{name} | Detailed command info
*CommandApi* | [**getCommands**](docs/Api/CommandApi.md#getcommands) | **GET** /cmd | Command list
*EntityApi* | [**changeEntity**](docs/Api/EntityApi.md#changeentity) | **PUT** /entity/{uuid} | Edit entity
*EntityApi* | [**createEntity**](docs/Api/EntityApi.md#createentity) | **POST** /entity | Create an entity
*EntityApi* | [**destroyEntity**](docs/Api/EntityApi.md#destroyentity) | **DELETE** /entity/{uuid} | Destroy an entity
*EntityApi* | [**executeEntityMethod**](docs/Api/EntityApi.md#executeentitymethod) | **POST** /entity/{uuid} | Execute entity method
*EntityApi* | [**getEntities**](docs/Api/EntityApi.md#getentities) | **GET** /entity | Entities list
*EntityApi* | [**getEntity**](docs/Api/EntityApi.md#getentity) | **GET** /entity/{uuid} | Detailed entity info
*HistoryApi* | [**getChatHistory**](docs/Api/HistoryApi.md#getchathistory) | **GET** /history/chat | Chat History
*HistoryApi* | [**getCommandHistory**](docs/Api/HistoryApi.md#getcommandhistory) | **GET** /history/cmd | Command History
*HuskyCratesApi* | [**getCrate**](docs/Api/HuskyCratesApi.md#getcrate) | **GET** /husky/crate/{id} | Detailed crate info
*HuskyCratesApi* | [**getCrates**](docs/Api/HuskyCratesApi.md#getcrates) | **GET** /husky/crate | Crate list
*InfoApi* | [**getInfo**](docs/Api/InfoApi.md#getinfo) | **GET** /info | Server info
*InfoApi* | [**getServerProperties**](docs/Api/InfoApi.md#getserverproperties) | **GET** /info/properties | Server properties
*InfoApi* | [**getStats**](docs/Api/InfoApi.md#getstats) | **GET** /info/stats | Server stats
*MMCTicketsApi* | [**changeTicket**](docs/Api/MMCTicketsApi.md#changeticket) | **PUT** /mmctickets/ticket/{id} | Edit ticket
*MMCTicketsApi* | [**getTicket**](docs/Api/MMCTicketsApi.md#getticket) | **GET** /mmctickets/ticket/{id} | Detailed ticket info
*MMCTicketsApi* | [**getTickets**](docs/Api/MMCTicketsApi.md#gettickets) | **GET** /mmctickets/ticket | Ticket list
*MessageApi* | [**getMessage**](docs/Api/MessageApi.md#getmessage) | **GET** /message/{uuid} | Detailed message info
*MessageApi* | [**getMessages**](docs/Api/MessageApi.md#getmessages) | **GET** /message | Message list
*MessageApi* | [**sendMessage**](docs/Api/MessageApi.md#sendmessage) | **POST** /message | Send an interactive message
*NucleusApi* | [**getJail**](docs/Api/NucleusApi.md#getjail) | **GET** /nucleus/jail/{name} | Detailed jail info
*NucleusApi* | [**getJails**](docs/Api/NucleusApi.md#getjails) | **GET** /nucleus/jail | Jail list
*NucleusApi* | [**getKit**](docs/Api/NucleusApi.md#getkit) | **GET** /nucleus/kit/{name} | Detailed kit info
*NucleusApi* | [**getKits**](docs/Api/NucleusApi.md#getkits) | **GET** /nucleus/kit | Kit list
*PlayerApi* | [**changePlayer**](docs/Api/PlayerApi.md#changeplayer) | **PUT** /player/{uuid} | Edit player
*PlayerApi* | [**executePlayerMethod**](docs/Api/PlayerApi.md#executeplayermethod) | **POST** /player/{uuid} | Execute player method
*PlayerApi* | [**getPlayer**](docs/Api/PlayerApi.md#getplayer) | **GET** /player/{uuid} | Detailed player info
*PlayerApi* | [**getPlayers**](docs/Api/PlayerApi.md#getplayers) | **GET** /player | Player list
*PluginApi* | [**getPlugin**](docs/Api/PluginApi.md#getplugin) | **GET** /plugin/{id} | Detailed plugin info
*PluginApi* | [**getPlugins**](docs/Api/PluginApi.md#getplugins) | **GET** /plugin | Plugin list
*RegistryApi* | [**getCatalogValues**](docs/Api/RegistryApi.md#getcatalogvalues) | **GET** /registry/{className} | List catalog values
*ServletApi* | [**getLoadedServlets**](docs/Api/ServletApi.md#getloadedservlets) | **GET** /servlet | Loaded servlets
*TileEntityApi* | [**executeTileEntityMethod**](docs/Api/TileEntityApi.md#executetileentitymethod) | **POST** /tile-entity/{worldUuid}/{x}/{y}/{z} | Execute tile entity methods
*TileEntityApi* | [**getTileEntities**](docs/Api/TileEntityApi.md#gettileentities) | **GET** /tile-entity | Tile entities list
*TileEntityApi* | [**getTileEntity**](docs/Api/TileEntityApi.md#gettileentity) | **GET** /tile-entity/{worldUuid}/{x}/{y}/{z} | Detailed tile entity info
*UserApi* | [**checkUser**](docs/Api/UserApi.md#checkuser) | **GET** /user | Check a user key
*UserApi* | [**login**](docs/Api/UserApi.md#login) | **POST** /user | Login
*WebBooksApi* | [**createBook**](docs/Api/WebBooksApi.md#createbook) | **POST** /webbooks/book | Create web book
*WebBooksApi* | [**deleteBook**](docs/Api/WebBooksApi.md#deletebook) | **DELETE** /webbooks/book/{id} | Delete a web book
*WebBooksApi* | [**getBook**](docs/Api/WebBooksApi.md#getbook) | **GET** /webbooks/book/{id} | Detailed web book info
*WebBooksApi* | [**getBookHtml**](docs/Api/WebBooksApi.md#getbookhtml) | **GET** /webbooks/book/{id}/html | Web Book HTML
*WebBooksApi* | [**getBookHtmlPost**](docs/Api/WebBooksApi.md#getbookhtmlpost) | **POST** /webbooks/book/{id}/html | Web Book HTML
*WebBooksApi* | [**getBooks**](docs/Api/WebBooksApi.md#getbooks) | **GET** /webbooks/book | Books list
*WorldApi* | [**changeWorld**](docs/Api/WorldApi.md#changeworld) | **PUT** /world/{uuid} | Edit world
*WorldApi* | [**createWorld**](docs/Api/WorldApi.md#createworld) | **POST** /world | Create a world
*WorldApi* | [**deleteWorld**](docs/Api/WorldApi.md#deleteworld) | **DELETE** /world/{uuid} | Delete a world
*WorldApi* | [**executeWorldMethod**](docs/Api/WorldApi.md#executeworldmethod) | **POST** /world/{uuid} | Execute world methods
*WorldApi* | [**getChunk**](docs/Api/WorldApi.md#getchunk) | **GET** /world/{uuid}/chunk/{x}/{z} | Detailed chunk info
*WorldApi* | [**getChunks**](docs/Api/WorldApi.md#getchunks) | **GET** /world/{uuid}/chunk | Loaded chunk list
*WorldApi* | [**getWorld**](docs/Api/WorldApi.md#getworld) | **GET** /world/{uuid} | Detailed world info
*WorldApi* | [**getWorlds**](docs/Api/WorldApi.md#getworlds) | **GET** /world | World list


## Documentation For Models

 - [BlockFull](docs/Model/BlockFull.md)
 - [BlockOperation](docs/Model/BlockOperation.md)
 - [BlockOperationNew](docs/Model/BlockOperationNew.md)
 - [BlockOperationResponse](docs/Model/BlockOperationResponse.md)
 - [BlockOperationsList](docs/Model/BlockOperationsList.md)
 - [CatalogType](docs/Model/CatalogType.md)
 - [CatalogTypesResponse](docs/Model/CatalogTypesResponse.md)
 - [ChatHistoryResponse](docs/Model/ChatHistoryResponse.md)
 - [ChatMessage](docs/Model/ChatMessage.md)
 - [Chunk](docs/Model/Chunk.md)
 - [ChunkResponse](docs/Model/ChunkResponse.md)
 - [ChunksResponse](docs/Model/ChunksResponse.md)
 - [Command](docs/Model/Command.md)
 - [CommandCall](docs/Model/CommandCall.md)
 - [CommandHistoryResponse](docs/Model/CommandHistoryResponse.md)
 - [CommandRequest](docs/Model/CommandRequest.md)
 - [CommandResponse](docs/Model/CommandResponse.md)
 - [CommandResponse1](docs/Model/CommandResponse1.md)
 - [CommandResult](docs/Model/CommandResult.md)
 - [CommandsResponse](docs/Model/CommandsResponse.md)
 - [CreateEntityRequest](docs/Model/CreateEntityRequest.md)
 - [CreateWebBookRequest](docs/Model/CreateWebBookRequest.md)
 - [CreateWorldRequest](docs/Model/CreateWorldRequest.md)
 - [DamageRequest](docs/Model/DamageRequest.md)
 - [DamageRequest1](docs/Model/DamageRequest1.md)
 - [Data](docs/Model/Data.md)
 - [EntitiesList](docs/Model/EntitiesList.md)
 - [Entity](docs/Model/Entity.md)
 - [EntityMethodResult](docs/Model/EntityMethodResult.md)
 - [EntityResponse](docs/Model/EntityResponse.md)
 - [Error400](docs/Model/Error400.md)
 - [ExecuteCommandResponse](docs/Model/ExecuteCommandResponse.md)
 - [ExecutePlayerMethodResponse](docs/Model/ExecutePlayerMethodResponse.md)
 - [ExecuteTileEntityMethodResponse](docs/Model/ExecuteTileEntityMethodResponse.md)
 - [ExecuteWorldMethodResponse](docs/Model/ExecuteWorldMethodResponse.md)
 - [HuskyCrate](docs/Model/HuskyCrate.md)
 - [HuskyCrateFullRewards](docs/Model/HuskyCrateFullRewards.md)
 - [HuskyCrateResponse](docs/Model/HuskyCrateResponse.md)
 - [HuskyCratesResponse](docs/Model/HuskyCratesResponse.md)
 - [Inventory](docs/Model/Inventory.md)
 - [ItemStack](docs/Model/ItemStack.md)
 - [Location](docs/Model/Location.md)
 - [LoginRequest](docs/Model/LoginRequest.md)
 - [LoginResponse](docs/Model/LoginResponse.md)
 - [MMCTicket](docs/Model/MMCTicket.md)
 - [MMCTicketsTicketResponse](docs/Model/MMCTicketsTicketResponse.md)
 - [MMCTicketsTicketsResponse](docs/Model/MMCTicketsTicketsResponse.md)
 - [MMCUpdateTicketRequest](docs/Model/MMCUpdateTicketRequest.md)
 - [Message](docs/Model/Message.md)
 - [MessageOption](docs/Model/MessageOption.md)
 - [MessageRequest](docs/Model/MessageRequest.md)
 - [MessageResponse](docs/Model/MessageResponse.md)
 - [MessagesResponse](docs/Model/MessagesResponse.md)
 - [NucleusJailFull](docs/Model/NucleusJailFull.md)
 - [NucleusJailResponse](docs/Model/NucleusJailResponse.md)
 - [NucleusJailsResponse](docs/Model/NucleusJailsResponse.md)
 - [NucleusKit](docs/Model/NucleusKit.md)
 - [NucleusKitResponse](docs/Model/NucleusKitResponse.md)
 - [NucleusKitsResponse](docs/Model/NucleusKitsResponse.md)
 - [Ok](docs/Model/Ok.md)
 - [Player](docs/Model/Player.md)
 - [PlayerFullAchievements](docs/Model/PlayerFullAchievements.md)
 - [PlayerFullArmour](docs/Model/PlayerFullArmour.md)
 - [PlayerFullConnection](docs/Model/PlayerFullConnection.md)
 - [PlayerFullExperience](docs/Model/PlayerFullExperience.md)
 - [PlayerFullFood](docs/Model/PlayerFullFood.md)
 - [PlayerFullHealth](docs/Model/PlayerFullHealth.md)
 - [PlayerFullJoined](docs/Model/PlayerFullJoined.md)
 - [PlayerResponse](docs/Model/PlayerResponse.md)
 - [PlayersList](docs/Model/PlayersList.md)
 - [Plugin](docs/Model/Plugin.md)
 - [PluginResponse](docs/Model/PluginResponse.md)
 - [PluginsResponse](docs/Model/PluginsResponse.md)
 - [Property](docs/Model/Property.md)
 - [RawRequest](docs/Model/RawRequest.md)
 - [RawRequestParam](docs/Model/RawRequestParam.md)
 - [RawResponse](docs/Model/RawResponse.md)
 - [ServerInfo](docs/Model/ServerInfo.md)
 - [ServerInfoDetail](docs/Model/ServerInfoDetail.md)
 - [ServerPropertiesList](docs/Model/ServerPropertiesList.md)
 - [ServletsResponse](docs/Model/ServletsResponse.md)
 - [SingleBlock](docs/Model/SingleBlock.md)
 - [Stat](docs/Model/Stat.md)
 - [StatsResponse](docs/Model/StatsResponse.md)
 - [TileEntitiesResponse](docs/Model/TileEntitiesResponse.md)
 - [TileEntity](docs/Model/TileEntity.md)
 - [TileEntityResponse](docs/Model/TileEntityResponse.md)
 - [UpdateEntityRequest](docs/Model/UpdateEntityRequest.md)
 - [UpdatePlayerRequest](docs/Model/UpdatePlayerRequest.md)
 - [UpdateWorldRequest](docs/Model/UpdateWorldRequest.md)
 - [User](docs/Model/User.md)
 - [UserResponse](docs/Model/UserResponse.md)
 - [Vector3](docs/Model/Vector3.md)
 - [WebBook](docs/Model/WebBook.md)
 - [WebBooksResponse](docs/Model/WebBooksResponse.md)
 - [WebBooksResponse1](docs/Model/WebBooksResponse1.md)
 - [World](docs/Model/World.md)
 - [WorldFullBorder](docs/Model/WorldFullBorder.md)
 - [WorldFullDimension](docs/Model/WorldFullDimension.md)
 - [WorldFullDimensionType](docs/Model/WorldFullDimensionType.md)
 - [WorldFullGenerator](docs/Model/WorldFullGenerator.md)
 - [WorldResponse](docs/Model/WorldResponse.md)
 - [WorldsResponse](docs/Model/WorldsResponse.md)
 - [BlockOperationFull](docs/Model/BlockOperationFull.md)
 - [ChunkFull](docs/Model/ChunkFull.md)
 - [CommandFull](docs/Model/CommandFull.md)
 - [EntityFull](docs/Model/EntityFull.md)
 - [HuskyCrateFull](docs/Model/HuskyCrateFull.md)
 - [MMCTicketFull](docs/Model/MMCTicketFull.md)
 - [MessageFull](docs/Model/MessageFull.md)
 - [NucleusKitFull](docs/Model/NucleusKitFull.md)
 - [PlayerFull](docs/Model/PlayerFull.md)
 - [PluginFull](docs/Model/PluginFull.md)
 - [TileEntityFull](docs/Model/TileEntityFull.md)
 - [WebBookFull](docs/Model/WebBookFull.md)
 - [WorldFull](docs/Model/WorldFull.md)


## Documentation For Authorization


## headerKey

- **Type**: API key
- **API key parameter name**: x-webapi-key
- **Location**: HTTP header

## queryKey

- **Type**: API key
- **API key parameter name**: key
- **Location**: URL query string


## Author




