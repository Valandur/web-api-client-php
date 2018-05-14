<?php
/**
 * UpdateWorldRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Web-API
 *
 * Access Sponge powered Minecraft servers through a WebAPI  # Introduction This is the documentation of the various API routes offered by the WebAPI plugin.  This documentation assumes that you are familiar with the basic concepts of Web API's, such as `GET`, `PUT`, `POST` and `DELETE` methods, request `HEADERS` and `RESPONSE CODES` and `JSON` data.  By default this documentation can be found at http:/localhost:8080 (while your minecraft server is running) and the various routes start with http:/localhost:8080/api/v5...  As a quick test try reaching the route http:/localhost:8080/api/v5/info (remember that you can only access \\\"localhost\\\" routes on the server on which you are running minecraft). This route should show you basic information about your server, like the motd and player count.  # List endpoints Lots of objects offer an endpoint to list all objects (e.g. `GET: /world` to get all worlds). These endpoints return only the properties marked 'required' by default, because the list might be quite large. If you want to return ALL data for a list endpoint add the query parameter `details`, (e.g. `GET: /world?details`).  > Remember that in this case the data returned by the endpoint might be quite large.  # Debugging endpoints Apart from the `?details` flag you can also pass some other flags for debugging purposes. Remember that you must include the first query parameter with `?`, and further ones with `&`:  `details`: Includes details for list endpoints  `accept=[json/xml]`: Manually set the accept content type. This is good for browser testing, **BUT DON'T USE THIS IN PRODUCTION, YOU CAN SUPPLY THE `Accepts` HEADER FOR THAT**  `pretty`: Pretty prints the data, also good for debugging in the browser.  An example request might look like this: `http://localhost:8080/api/v5/world?details&accpet=json&pretty&key=MY-API-KEY`  # Additional data Certain endpoints (such as `/player`, `/entity` and `/tile-entity` have additional properties which are not documented here, because the data depends on the concrete object type (eg. `Sheep` have a wool color, others do not) and on the other plugins/mods that are running on your server which might add additional data.  You can also find more information in the github docs (https:/github.com/Valandur/Web-API/tree/master/docs/DATA.md)
 *
 * OpenAPI spec version: @version@
 * Contact: inithilian@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * UpdateWorldRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateWorldRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateWorldRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'allow_commands' => 'bool',
        'difficulty' => '\Swagger\Client\Model\CatalogType',
        'game_mode' => '\Swagger\Client\Model\GameMode',
        'game_rules' => 'map[string,string]',
        'generator' => '\Swagger\Client\Model\CatalogType',
        'keep_spawn_loaded' => 'bool',
        'load_on_startup' => 'bool',
        'loaded' => 'bool',
        'seed' => 'int',
        'uses_map_features' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'allow_commands' => null,
        'difficulty' => null,
        'game_mode' => null,
        'game_rules' => null,
        'generator' => null,
        'keep_spawn_loaded' => null,
        'load_on_startup' => null,
        'loaded' => null,
        'seed' => 'int64',
        'uses_map_features' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'allow_commands' => 'allowCommands',
        'difficulty' => 'difficulty',
        'game_mode' => 'gameMode',
        'game_rules' => 'gameRules',
        'generator' => 'generator',
        'keep_spawn_loaded' => 'keepSpawnLoaded',
        'load_on_startup' => 'loadOnStartup',
        'loaded' => 'loaded',
        'seed' => 'seed',
        'uses_map_features' => 'usesMapFeatures'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'allow_commands' => 'setAllowCommands',
        'difficulty' => 'setDifficulty',
        'game_mode' => 'setGameMode',
        'game_rules' => 'setGameRules',
        'generator' => 'setGenerator',
        'keep_spawn_loaded' => 'setKeepSpawnLoaded',
        'load_on_startup' => 'setLoadOnStartup',
        'loaded' => 'setLoaded',
        'seed' => 'setSeed',
        'uses_map_features' => 'setUsesMapFeatures'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'allow_commands' => 'getAllowCommands',
        'difficulty' => 'getDifficulty',
        'game_mode' => 'getGameMode',
        'game_rules' => 'getGameRules',
        'generator' => 'getGenerator',
        'keep_spawn_loaded' => 'getKeepSpawnLoaded',
        'load_on_startup' => 'getLoadOnStartup',
        'loaded' => 'getLoaded',
        'seed' => 'getSeed',
        'uses_map_features' => 'getUsesMapFeatures'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['allow_commands'] = isset($data['allow_commands']) ? $data['allow_commands'] : null;
        $this->container['difficulty'] = isset($data['difficulty']) ? $data['difficulty'] : null;
        $this->container['game_mode'] = isset($data['game_mode']) ? $data['game_mode'] : null;
        $this->container['game_rules'] = isset($data['game_rules']) ? $data['game_rules'] : null;
        $this->container['generator'] = isset($data['generator']) ? $data['generator'] : null;
        $this->container['keep_spawn_loaded'] = isset($data['keep_spawn_loaded']) ? $data['keep_spawn_loaded'] : null;
        $this->container['load_on_startup'] = isset($data['load_on_startup']) ? $data['load_on_startup'] : null;
        $this->container['loaded'] = isset($data['loaded']) ? $data['loaded'] : null;
        $this->container['seed'] = isset($data['seed']) ? $data['seed'] : null;
        $this->container['uses_map_features'] = isset($data['uses_map_features']) ? $data['uses_map_features'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the world
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets allow_commands
     *
     * @return bool
     */
    public function getAllowCommands()
    {
        return $this->container['allow_commands'];
    }

    /**
     * Sets allow_commands
     *
     * @param bool $allow_commands allow_commands
     *
     * @return $this
     */
    public function setAllowCommands($allow_commands)
    {
        $this->container['allow_commands'] = $allow_commands;

        return $this;
    }

    /**
     * Gets difficulty
     *
     * @return \Swagger\Client\Model\CatalogType
     */
    public function getDifficulty()
    {
        return $this->container['difficulty'];
    }

    /**
     * Sets difficulty
     *
     * @param \Swagger\Client\Model\CatalogType $difficulty Which difficulty the world is set to
     *
     * @return $this
     */
    public function setDifficulty($difficulty)
    {
        $this->container['difficulty'] = $difficulty;

        return $this;
    }

    /**
     * Gets game_mode
     *
     * @return \Swagger\Client\Model\GameMode
     */
    public function getGameMode()
    {
        return $this->container['game_mode'];
    }

    /**
     * Sets game_mode
     *
     * @param \Swagger\Client\Model\GameMode $game_mode Which game mode the world defaults to
     *
     * @return $this
     */
    public function setGameMode($game_mode)
    {
        $this->container['game_mode'] = $game_mode;

        return $this;
    }

    /**
     * Gets game_rules
     *
     * @return map[string,string]
     */
    public function getGameRules()
    {
        return $this->container['game_rules'];
    }

    /**
     * Sets game_rules
     *
     * @param map[string,string] $game_rules The game rule settings of this world
     *
     * @return $this
     */
    public function setGameRules($game_rules)
    {
        $this->container['game_rules'] = $game_rules;

        return $this;
    }

    /**
     * Gets generator
     *
     * @return \Swagger\Client\Model\CatalogType
     */
    public function getGenerator()
    {
        return $this->container['generator'];
    }

    /**
     * Sets generator
     *
     * @param \Swagger\Client\Model\CatalogType $generator Which generator to use for the world
     *
     * @return $this
     */
    public function setGenerator($generator)
    {
        $this->container['generator'] = $generator;

        return $this;
    }

    /**
     * Gets keep_spawn_loaded
     *
     * @return bool
     */
    public function getKeepSpawnLoaded()
    {
        return $this->container['keep_spawn_loaded'];
    }

    /**
     * Sets keep_spawn_loaded
     *
     * @param bool $keep_spawn_loaded keep_spawn_loaded
     *
     * @return $this
     */
    public function setKeepSpawnLoaded($keep_spawn_loaded)
    {
        $this->container['keep_spawn_loaded'] = $keep_spawn_loaded;

        return $this;
    }

    /**
     * Gets load_on_startup
     *
     * @return bool
     */
    public function getLoadOnStartup()
    {
        return $this->container['load_on_startup'];
    }

    /**
     * Sets load_on_startup
     *
     * @param bool $load_on_startup load_on_startup
     *
     * @return $this
     */
    public function setLoadOnStartup($load_on_startup)
    {
        $this->container['load_on_startup'] = $load_on_startup;

        return $this;
    }

    /**
     * Gets loaded
     *
     * @return bool
     */
    public function getLoaded()
    {
        return $this->container['loaded'];
    }

    /**
     * Sets loaded
     *
     * @param bool $loaded True if the world should be loaded, false otherwise
     *
     * @return $this
     */
    public function setLoaded($loaded)
    {
        $this->container['loaded'] = $loaded;

        return $this;
    }

    /**
     * Gets seed
     *
     * @return int
     */
    public function getSeed()
    {
        return $this->container['seed'];
    }

    /**
     * Sets seed
     *
     * @param int $seed The seed of the world
     *
     * @return $this
     */
    public function setSeed($seed)
    {
        $this->container['seed'] = $seed;

        return $this;
    }

    /**
     * Gets uses_map_features
     *
     * @return bool
     */
    public function getUsesMapFeatures()
    {
        return $this->container['uses_map_features'];
    }

    /**
     * Sets uses_map_features
     *
     * @param bool $uses_map_features uses_map_features
     *
     * @return $this
     */
    public function setUsesMapFeatures($uses_map_features)
    {
        $this->container['uses_map_features'] = $uses_map_features;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


