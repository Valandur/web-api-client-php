<?php
/**
 * PlayerFull
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
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
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * PlayerFull Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PlayerFull implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PlayerFull';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'uuid' => 'string',
        'online' => 'bool',
        'location' => '\Swagger\Client\Model\Location',
        'name' => 'string',
        'link' => 'string',
        'class' => 'string',
        'velocity' => '\Swagger\Client\Model\Vector3',
        'rotation' => '\Swagger\Client\Model\Vector3',
        'scale' => '\Swagger\Client\Model\Vector3',
        'inventory' => '\Swagger\Client\Model\Inventory',
        'connection' => '\Swagger\Client\Model\PlayerFullConnection',
        'armour' => '\Swagger\Client\Model\PlayerFullArmour',
        'achievements' => '\Swagger\Client\Model\PlayerFullAchievements[]',
        'experience' => '\Swagger\Client\Model\PlayerFullExperience',
        'game_mode' => 'string',
        'joined' => '\Swagger\Client\Model\PlayerFullJoined',
        'health' => '\Swagger\Client\Model\PlayerFullHealth',
        'food' => '\Swagger\Client\Model\PlayerFullFood',
        'statistics' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'uuid' => null,
        'online' => null,
        'location' => null,
        'name' => null,
        'link' => null,
        'class' => null,
        'velocity' => null,
        'rotation' => null,
        'scale' => null,
        'inventory' => null,
        'connection' => null,
        'armour' => null,
        'achievements' => null,
        'experience' => null,
        'game_mode' => null,
        'joined' => null,
        'health' => null,
        'food' => null,
        'statistics' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'uuid' => 'uuid',
        'online' => 'online',
        'location' => 'location',
        'name' => 'name',
        'link' => 'link',
        'class' => 'class',
        'velocity' => 'velocity',
        'rotation' => 'rotation',
        'scale' => 'scale',
        'inventory' => 'inventory',
        'connection' => 'connection',
        'armour' => 'armour',
        'achievements' => 'achievements',
        'experience' => 'experience',
        'game_mode' => 'gameMode',
        'joined' => 'joined',
        'health' => 'health',
        'food' => 'food',
        'statistics' => 'statistics'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'uuid' => 'setUuid',
        'online' => 'setOnline',
        'location' => 'setLocation',
        'name' => 'setName',
        'link' => 'setLink',
        'class' => 'setClass',
        'velocity' => 'setVelocity',
        'rotation' => 'setRotation',
        'scale' => 'setScale',
        'inventory' => 'setInventory',
        'connection' => 'setConnection',
        'armour' => 'setArmour',
        'achievements' => 'setAchievements',
        'experience' => 'setExperience',
        'game_mode' => 'setGameMode',
        'joined' => 'setJoined',
        'health' => 'setHealth',
        'food' => 'setFood',
        'statistics' => 'setStatistics'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'uuid' => 'getUuid',
        'online' => 'getOnline',
        'location' => 'getLocation',
        'name' => 'getName',
        'link' => 'getLink',
        'class' => 'getClass',
        'velocity' => 'getVelocity',
        'rotation' => 'getRotation',
        'scale' => 'getScale',
        'inventory' => 'getInventory',
        'connection' => 'getConnection',
        'armour' => 'getArmour',
        'achievements' => 'getAchievements',
        'experience' => 'getExperience',
        'game_mode' => 'getGameMode',
        'joined' => 'getJoined',
        'health' => 'getHealth',
        'food' => 'getFood',
        'statistics' => 'getStatistics'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['velocity'] = isset($data['velocity']) ? $data['velocity'] : null;
        $this->container['rotation'] = isset($data['rotation']) ? $data['rotation'] : null;
        $this->container['scale'] = isset($data['scale']) ? $data['scale'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['connection'] = isset($data['connection']) ? $data['connection'] : null;
        $this->container['armour'] = isset($data['armour']) ? $data['armour'] : null;
        $this->container['achievements'] = isset($data['achievements']) ? $data['achievements'] : null;
        $this->container['experience'] = isset($data['experience']) ? $data['experience'] : null;
        $this->container['game_mode'] = isset($data['game_mode']) ? $data['game_mode'] : null;
        $this->container['joined'] = isset($data['joined']) ? $data['joined'] : null;
        $this->container['health'] = isset($data['health']) ? $data['health'] : null;
        $this->container['food'] = isset($data['food']) ? $data['food'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of player, usually `minecraft:player`
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid The unique identifier of the player.
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets online
     * @return bool
     */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     * @param bool $online True if the player is currently online, false otherwise.
     * @return $this
     */
    public function setOnline($online)
    {
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets location
     * @return \Swagger\Client\Model\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param \Swagger\Client\Model\Location $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
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
     * @param string $name The name of the player.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets link
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     * @param string $link The API URL which contains detailed information about this player.
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets class
     * @return string
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     * @param string $class The fully qualified class name of the object representing the player. Usually `net.minecraft.entity.player.EntityPlayerMP`.
     * @return $this
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets velocity
     * @return \Swagger\Client\Model\Vector3
     */
    public function getVelocity()
    {
        return $this->container['velocity'];
    }

    /**
     * Sets velocity
     * @param \Swagger\Client\Model\Vector3 $velocity
     * @return $this
     */
    public function setVelocity($velocity)
    {
        $this->container['velocity'] = $velocity;

        return $this;
    }

    /**
     * Gets rotation
     * @return \Swagger\Client\Model\Vector3
     */
    public function getRotation()
    {
        return $this->container['rotation'];
    }

    /**
     * Sets rotation
     * @param \Swagger\Client\Model\Vector3 $rotation
     * @return $this
     */
    public function setRotation($rotation)
    {
        $this->container['rotation'] = $rotation;

        return $this;
    }

    /**
     * Gets scale
     * @return \Swagger\Client\Model\Vector3
     */
    public function getScale()
    {
        return $this->container['scale'];
    }

    /**
     * Sets scale
     * @param \Swagger\Client\Model\Vector3 $scale
     * @return $this
     */
    public function setScale($scale)
    {
        $this->container['scale'] = $scale;

        return $this;
    }

    /**
     * Gets inventory
     * @return \Swagger\Client\Model\Inventory
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     * @param \Swagger\Client\Model\Inventory $inventory
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets connection
     * @return \Swagger\Client\Model\PlayerFullConnection
     */
    public function getConnection()
    {
        return $this->container['connection'];
    }

    /**
     * Sets connection
     * @param \Swagger\Client\Model\PlayerFullConnection $connection
     * @return $this
     */
    public function setConnection($connection)
    {
        $this->container['connection'] = $connection;

        return $this;
    }

    /**
     * Gets armour
     * @return \Swagger\Client\Model\PlayerFullArmour
     */
    public function getArmour()
    {
        return $this->container['armour'];
    }

    /**
     * Sets armour
     * @param \Swagger\Client\Model\PlayerFullArmour $armour
     * @return $this
     */
    public function setArmour($armour)
    {
        $this->container['armour'] = $armour;

        return $this;
    }

    /**
     * Gets achievements
     * @return \Swagger\Client\Model\PlayerFullAchievements[]
     */
    public function getAchievements()
    {
        return $this->container['achievements'];
    }

    /**
     * Sets achievements
     * @param \Swagger\Client\Model\PlayerFullAchievements[] $achievements An array of achievements the player has been awarded.
     * @return $this
     */
    public function setAchievements($achievements)
    {
        $this->container['achievements'] = $achievements;

        return $this;
    }

    /**
     * Gets experience
     * @return \Swagger\Client\Model\PlayerFullExperience
     */
    public function getExperience()
    {
        return $this->container['experience'];
    }

    /**
     * Sets experience
     * @param \Swagger\Client\Model\PlayerFullExperience $experience
     * @return $this
     */
    public function setExperience($experience)
    {
        $this->container['experience'] = $experience;

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
     * @param string $game_mode The current game mode the player is in.
     * @return $this
     */
    public function setGameMode($game_mode)
    {
        $this->container['game_mode'] = $game_mode;

        return $this;
    }

    /**
     * Gets joined
     * @return \Swagger\Client\Model\PlayerFullJoined
     */
    public function getJoined()
    {
        return $this->container['joined'];
    }

    /**
     * Sets joined
     * @param \Swagger\Client\Model\PlayerFullJoined $joined
     * @return $this
     */
    public function setJoined($joined)
    {
        $this->container['joined'] = $joined;

        return $this;
    }

    /**
     * Gets health
     * @return \Swagger\Client\Model\PlayerFullHealth
     */
    public function getHealth()
    {
        return $this->container['health'];
    }

    /**
     * Sets health
     * @param \Swagger\Client\Model\PlayerFullHealth $health
     * @return $this
     */
    public function setHealth($health)
    {
        $this->container['health'] = $health;

        return $this;
    }

    /**
     * Gets food
     * @return \Swagger\Client\Model\PlayerFullFood
     */
    public function getFood()
    {
        return $this->container['food'];
    }

    /**
     * Sets food
     * @param \Swagger\Client\Model\PlayerFullFood $food
     * @return $this
     */
    public function setFood($food)
    {
        $this->container['food'] = $food;

        return $this;
    }

    /**
     * Gets statistics
     * @return object
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     * @param object $statistics A map from statistics id to value, keeping track of the players actions.
     * @return $this
     */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;

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


