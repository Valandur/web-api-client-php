<?php
/**
 * InvisibilityData
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
 * InvisibilityData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvisibilityData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvisibilityData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ignore_collision' => 'bool',
        'invisible' => 'bool',
        'untargetable' => 'bool',
        'vanish' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ignore_collision' => null,
        'invisible' => null,
        'untargetable' => null,
        'vanish' => null
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
        'ignore_collision' => 'ignoreCollision',
        'invisible' => 'invisible',
        'untargetable' => 'untargetable',
        'vanish' => 'vanish'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ignore_collision' => 'setIgnoreCollision',
        'invisible' => 'setInvisible',
        'untargetable' => 'setUntargetable',
        'vanish' => 'setVanish'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ignore_collision' => 'getIgnoreCollision',
        'invisible' => 'getInvisible',
        'untargetable' => 'getUntargetable',
        'vanish' => 'getVanish'
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
        $this->container['ignore_collision'] = isset($data['ignore_collision']) ? $data['ignore_collision'] : null;
        $this->container['invisible'] = isset($data['invisible']) ? $data['invisible'] : null;
        $this->container['untargetable'] = isset($data['untargetable']) ? $data['untargetable'] : null;
        $this->container['vanish'] = isset($data['vanish']) ? $data['vanish'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ignore_collision'] === null) {
            $invalidProperties[] = "'ignore_collision' can't be null";
        }
        if ($this->container['invisible'] === null) {
            $invalidProperties[] = "'invisible' can't be null";
        }
        if ($this->container['untargetable'] === null) {
            $invalidProperties[] = "'untargetable' can't be null";
        }
        if ($this->container['vanish'] === null) {
            $invalidProperties[] = "'vanish' can't be null";
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

        if ($this->container['ignore_collision'] === null) {
            return false;
        }
        if ($this->container['invisible'] === null) {
            return false;
        }
        if ($this->container['untargetable'] === null) {
            return false;
        }
        if ($this->container['vanish'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets ignore_collision
     *
     * @return bool
     */
    public function getIgnoreCollision()
    {
        return $this->container['ignore_collision'];
    }

    /**
     * Sets ignore_collision
     *
     * @param bool $ignore_collision True if this entity ignores collisions, false otherwise
     *
     * @return $this
     */
    public function setIgnoreCollision($ignore_collision)
    {
        $this->container['ignore_collision'] = $ignore_collision;

        return $this;
    }

    /**
     * Gets invisible
     *
     * @return bool
     */
    public function getInvisible()
    {
        return $this->container['invisible'];
    }

    /**
     * Sets invisible
     *
     * @param bool $invisible True if this entity is invisible, false otherwise
     *
     * @return $this
     */
    public function setInvisible($invisible)
    {
        $this->container['invisible'] = $invisible;

        return $this;
    }

    /**
     * Gets untargetable
     *
     * @return bool
     */
    public function getUntargetable()
    {
        return $this->container['untargetable'];
    }

    /**
     * Sets untargetable
     *
     * @param bool $untargetable True if this entity is not targetable, false otherwise
     *
     * @return $this
     */
    public function setUntargetable($untargetable)
    {
        $this->container['untargetable'] = $untargetable;

        return $this;
    }

    /**
     * Gets vanish
     *
     * @return bool
     */
    public function getVanish()
    {
        return $this->container['vanish'];
    }

    /**
     * Sets vanish
     *
     * @param bool $vanish True if this entity is vanished, false otherwise
     *
     * @return $this
     */
    public function setVanish($vanish)
    {
        $this->container['vanish'] = $vanish;

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


