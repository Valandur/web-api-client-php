<?php
/**
 * NucleusKit
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
 * NucleusKit Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NucleusKit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NucleusKit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commands' => 'string[]',
        'cooldown' => 'int',
        'cost' => 'double',
        'first_join_kit' => 'bool',
        'link' => 'string',
        'name' => 'string',
        'one_time' => 'bool',
        'stacks' => '\Swagger\Client\Model\ItemStack[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'commands' => null,
        'cooldown' => 'int64',
        'cost' => 'double',
        'first_join_kit' => null,
        'link' => null,
        'name' => null,
        'one_time' => null,
        'stacks' => null
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
        'commands' => 'commands',
        'cooldown' => 'cooldown',
        'cost' => 'cost',
        'first_join_kit' => 'firstJoinKit',
        'link' => 'link',
        'name' => 'name',
        'one_time' => 'oneTime',
        'stacks' => 'stacks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commands' => 'setCommands',
        'cooldown' => 'setCooldown',
        'cost' => 'setCost',
        'first_join_kit' => 'setFirstJoinKit',
        'link' => 'setLink',
        'name' => 'setName',
        'one_time' => 'setOneTime',
        'stacks' => 'setStacks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commands' => 'getCommands',
        'cooldown' => 'getCooldown',
        'cost' => 'getCost',
        'first_join_kit' => 'getFirstJoinKit',
        'link' => 'getLink',
        'name' => 'getName',
        'one_time' => 'getOneTime',
        'stacks' => 'getStacks'
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
        $this->container['commands'] = isset($data['commands']) ? $data['commands'] : null;
        $this->container['cooldown'] = isset($data['cooldown']) ? $data['cooldown'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['first_join_kit'] = isset($data['first_join_kit']) ? $data['first_join_kit'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['one_time'] = isset($data['one_time']) ? $data['one_time'] : null;
        $this->container['stacks'] = isset($data['stacks']) ? $data['stacks'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['commands'] === null) {
            $invalidProperties[] = "'commands' can't be null";
        }
        if ($this->container['cooldown'] === null) {
            $invalidProperties[] = "'cooldown' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['first_join_kit'] === null) {
            $invalidProperties[] = "'first_join_kit' can't be null";
        }
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['one_time'] === null) {
            $invalidProperties[] = "'one_time' can't be null";
        }
        if ($this->container['stacks'] === null) {
            $invalidProperties[] = "'stacks' can't be null";
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

        if ($this->container['commands'] === null) {
            return false;
        }
        if ($this->container['cooldown'] === null) {
            return false;
        }
        if ($this->container['cost'] === null) {
            return false;
        }
        if ($this->container['first_join_kit'] === null) {
            return false;
        }
        if ($this->container['link'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['one_time'] === null) {
            return false;
        }
        if ($this->container['stacks'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets commands
     *
     * @return string[]
     */
    public function getCommands()
    {
        return $this->container['commands'];
    }

    /**
     * Sets commands
     *
     * @param string[] $commands The commands that are executed when this kit is purchased/acquired by a player
     *
     * @return $this
     */
    public function setCommands($commands)
    {
        $this->container['commands'] = $commands;

        return $this;
    }

    /**
     * Gets cooldown
     *
     * @return int
     */
    public function getCooldown()
    {
        return $this->container['cooldown'];
    }

    /**
     * Sets cooldown
     *
     * @param int $cooldown The cooldown (in seconds) this kit is on after buying it (per player)
     *
     * @return $this
     */
    public function setCooldown($cooldown)
    {
        $this->container['cooldown'] = $cooldown;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return double
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param double $cost The cost to buy this kit
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets first_join_kit
     *
     * @return bool
     */
    public function getFirstJoinKit()
    {
        return $this->container['first_join_kit'];
    }

    /**
     * Sets first_join_kit
     *
     * @param bool $first_join_kit True if this kit is awarded for joining the server the first time, false otherwise
     *
     * @return $this
     */
    public function setFirstJoinKit($first_join_kit)
    {
        $this->container['first_join_kit'] = $first_join_kit;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link The API link that can be used to obtain more information about this object
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
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
     * @param string $name The unique name of this kit
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets one_time
     *
     * @return bool
     */
    public function getOneTime()
    {
        return $this->container['one_time'];
    }

    /**
     * Sets one_time
     *
     * @param bool $one_time True if this kit can only be purchased/acquired once, false otherwise
     *
     * @return $this
     */
    public function setOneTime($one_time)
    {
        $this->container['one_time'] = $one_time;

        return $this;
    }

    /**
     * Gets stacks
     *
     * @return \Swagger\Client\Model\ItemStack[]
     */
    public function getStacks()
    {
        return $this->container['stacks'];
    }

    /**
     * Sets stacks
     *
     * @param \Swagger\Client\Model\ItemStack[] $stacks The ItemStacks that are awarded to the player who buys/acquires this kit
     *
     * @return $this
     */
    public function setStacks($stacks)
    {
        $this->container['stacks'] = $stacks;

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


