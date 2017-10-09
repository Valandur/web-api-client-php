<?php
/**
 * UpdateWorldRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WebAPI
 *
 * Access Sponge powered Minecraft servers through a WebAPI  #/ Introduction This is the documentation of the various API routes offered by the WebAPI plugin.  This documentation assumes that you are familiar with the basic concepts of Web API's, such as `GET`, `PUT`, `POST` and `DELETE` methods, request `HEADERS` and `RESPONSE CODES` and `JSON` data.  By default this documentation can be found at http:/localhost:8080 (while your minecraft server is running) and the various routes start with http:/localhost:8080/api/...  As a quick test try reaching the route http:/localhost:8080/api/info (remember that you can only access \"localhost\" routes on the server on which you are running minecraft). This route should show you basic information about your server, like the motd and player count.  #/ Additional data Certain endpoints (such as `/player`, `/entity` and `/tile-entity` have additional properties which are not documented here, because the data depends on the concrete object type (eg. `Sheep` have a wool color, others do not) and on the other plugins/mods that are running on your server which might add additional data.  You can also find more information in the github docs (https:/github.com/Valandur/Web-API/tree/master/docs/DATA.md)
 *
 * OpenAPI spec version: <version>
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * UpdateWorldRequest Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateWorldRequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UpdateWorldRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'seed' => 'float',
        'generator' => 'string',
        'game_mode' => 'string',
        'difficulty' => 'string',
        'load_on_startup' => 'bool',
        'keep_spawn_loaded' => 'bool',
        'allow_commands' => 'bool',
        'uses_map_features' => 'bool',
        'loaded' => 'bool',
        'game_rules' => 'object'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'name' => 'name',
        'seed' => 'seed',
        'generator' => 'generator',
        'game_mode' => 'gameMode',
        'difficulty' => 'difficulty',
        'load_on_startup' => 'loadOnStartup',
        'keep_spawn_loaded' => 'keepSpawnLoaded',
        'allow_commands' => 'allowCommands',
        'uses_map_features' => 'usesMapFeatures',
        'loaded' => 'loaded',
        'game_rules' => 'gameRules'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'name' => 'setName',
        'seed' => 'setSeed',
        'generator' => 'setGenerator',
        'game_mode' => 'setGameMode',
        'difficulty' => 'setDifficulty',
        'load_on_startup' => 'setLoadOnStartup',
        'keep_spawn_loaded' => 'setKeepSpawnLoaded',
        'allow_commands' => 'setAllowCommands',
        'uses_map_features' => 'setUsesMapFeatures',
        'loaded' => 'setLoaded',
        'game_rules' => 'setGameRules'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'name' => 'getName',
        'seed' => 'getSeed',
        'generator' => 'getGenerator',
        'game_mode' => 'getGameMode',
        'difficulty' => 'getDifficulty',
        'load_on_startup' => 'getLoadOnStartup',
        'keep_spawn_loaded' => 'getKeepSpawnLoaded',
        'allow_commands' => 'getAllowCommands',
        'uses_map_features' => 'getUsesMapFeatures',
        'loaded' => 'getLoaded',
        'game_rules' => 'getGameRules'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['seed'] = isset($data['seed']) ? $data['seed'] : null;
        $this->container['generator'] = isset($data['generator']) ? $data['generator'] : null;
        $this->container['game_mode'] = isset($data['game_mode']) ? $data['game_mode'] : null;
        $this->container['difficulty'] = isset($data['difficulty']) ? $data['difficulty'] : null;
        $this->container['load_on_startup'] = isset($data['load_on_startup']) ? $data['load_on_startup'] : null;
        $this->container['keep_spawn_loaded'] = isset($data['keep_spawn_loaded']) ? $data['keep_spawn_loaded'] : null;
        $this->container['allow_commands'] = isset($data['allow_commands']) ? $data['allow_commands'] : null;
        $this->container['uses_map_features'] = isset($data['uses_map_features']) ? $data['uses_map_features'] : null;
        $this->container['loaded'] = isset($data['loaded']) ? $data['loaded'] : null;
        $this->container['game_rules'] = isset($data['game_rules']) ? $data['game_rules'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name of the world.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets seed
     * @return float
     */
    public function getSeed()
    {
        return $this->container['seed'];
    }

    /**
     * Sets seed
     * @param float $seed The seed number. A random seed is generated if not provided.
     * @return $this
     */
    public function setSeed($seed)
    {
        $this->container['seed'] = $seed;

        return $this;
    }

    /**
     * Gets generator
     * @return string
     */
    public function getGenerator()
    {
        return $this->container['generator'];
    }

    /**
     * Sets generator
     * @param string $generator The id of the generator type to use. Check `/registry/org.spongepowered.api.world.GeneratorType`.
     * @return $this
     */
    public function setGenerator($generator)
    {
        $this->container['generator'] = $generator;

        return $this;
    }

    /**
     * Gets game_mode
     * @return string
     */
    public function getGameMode()
    {
        return $this->container['game_mode'];
    }

    /**
     * Sets game_mode
     * @param string $game_mode The id of the game mode to use. Check `/registry/org.spongepowered.api.entity.living.player.gamemode.GameMode`.
     * @return $this
     */
    public function setGameMode($game_mode)
    {
        $this->container['game_mode'] = $game_mode;

        return $this;
    }

    /**
     * Gets difficulty
     * @return string
     */
    public function getDifficulty()
    {
        return $this->container['difficulty'];
    }

    /**
     * Sets difficulty
     * @param string $difficulty The id of the difficutly to use. Check `/registry/org.spongepowered.api.world.difficulty.Difficulty`.
     * @return $this
     */
    public function setDifficulty($difficulty)
    {
        $this->container['difficulty'] = $difficulty;

        return $this;
    }

    /**
     * Gets load_on_startup
     * @return bool
     */
    public function getLoadOnStartup()
    {
        return $this->container['load_on_startup'];
    }

    /**
     * Sets load_on_startup
     * @param bool $load_on_startup True if the world is loaded when the server starts, false otherwise.
     * @return $this
     */
    public function setLoadOnStartup($load_on_startup)
    {
        $this->container['load_on_startup'] = $load_on_startup;

        return $this;
    }

    /**
     * Gets keep_spawn_loaded
     * @return bool
     */
    public function getKeepSpawnLoaded()
    {
        return $this->container['keep_spawn_loaded'];
    }

    /**
     * Sets keep_spawn_loaded
     * @param bool $keep_spawn_loaded True to keep the spawn area of the world loaded, even if it is empty.
     * @return $this
     */
    public function setKeepSpawnLoaded($keep_spawn_loaded)
    {
        $this->container['keep_spawn_loaded'] = $keep_spawn_loaded;

        return $this;
    }

    /**
     * Gets allow_commands
     * @return bool
     */
    public function getAllowCommands()
    {
        return $this->container['allow_commands'];
    }

    /**
     * Sets allow_commands
     * @param bool $allow_commands True if executing commands is allowed in the world.
     * @return $this
     */
    public function setAllowCommands($allow_commands)
    {
        $this->container['allow_commands'] = $allow_commands;

        return $this;
    }

    /**
     * Gets uses_map_features
     * @return bool
     */
    public function getUsesMapFeatures()
    {
        return $this->container['uses_map_features'];
    }

    /**
     * Sets uses_map_features
     * @param bool $uses_map_features True to use map features of the generator (such as villages).
     * @return $this
     */
    public function setUsesMapFeatures($uses_map_features)
    {
        $this->container['uses_map_features'] = $uses_map_features;

        return $this;
    }

    /**
     * Gets loaded
     * @return bool
     */
    public function getLoaded()
    {
        return $this->container['loaded'];
    }

    /**
     * Sets loaded
     * @param bool $loaded True to load the world, false to unload it.
     * @return $this
     */
    public function setLoaded($loaded)
    {
        $this->container['loaded'] = $loaded;

        return $this;
    }

    /**
     * Gets game_rules
     * @return object
     */
    public function getGameRules()
    {
        return $this->container['game_rules'];
    }

    /**
     * Sets game_rules
     * @param object $game_rules A map of keys to values for the game rules of the world.
     * @return $this
     */
    public function setGameRules($game_rules)
    {
        $this->container['game_rules'] = $game_rules;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


