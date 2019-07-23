<?php
/**
 * FurnaceData
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
 * OpenAPI spec version: 5.4.2-S7.1.0
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
 * FurnaceData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FurnaceData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FurnaceData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_burn_time' => 'int',
        'max_cook_time' => 'int',
        'passed_burn_time' => 'int',
        'passed_cook_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_burn_time' => 'int32',
        'max_cook_time' => 'int32',
        'passed_burn_time' => 'int32',
        'passed_cook_time' => 'int32'
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
        'max_burn_time' => 'maxBurnTime',
        'max_cook_time' => 'maxCookTime',
        'passed_burn_time' => 'passedBurnTime',
        'passed_cook_time' => 'passedCookTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_burn_time' => 'setMaxBurnTime',
        'max_cook_time' => 'setMaxCookTime',
        'passed_burn_time' => 'setPassedBurnTime',
        'passed_cook_time' => 'setPassedCookTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_burn_time' => 'getMaxBurnTime',
        'max_cook_time' => 'getMaxCookTime',
        'passed_burn_time' => 'getPassedBurnTime',
        'passed_cook_time' => 'getPassedCookTime'
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
        $this->container['max_burn_time'] = isset($data['max_burn_time']) ? $data['max_burn_time'] : null;
        $this->container['max_cook_time'] = isset($data['max_cook_time']) ? $data['max_cook_time'] : null;
        $this->container['passed_burn_time'] = isset($data['passed_burn_time']) ? $data['passed_burn_time'] : null;
        $this->container['passed_cook_time'] = isset($data['passed_cook_time']) ? $data['passed_cook_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['max_burn_time'] === null) {
            $invalidProperties[] = "'max_burn_time' can't be null";
        }
        if ($this->container['max_cook_time'] === null) {
            $invalidProperties[] = "'max_cook_time' can't be null";
        }
        if ($this->container['passed_burn_time'] === null) {
            $invalidProperties[] = "'passed_burn_time' can't be null";
        }
        if ($this->container['passed_cook_time'] === null) {
            $invalidProperties[] = "'passed_cook_time' can't be null";
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

        if ($this->container['max_burn_time'] === null) {
            return false;
        }
        if ($this->container['max_cook_time'] === null) {
            return false;
        }
        if ($this->container['passed_burn_time'] === null) {
            return false;
        }
        if ($this->container['passed_cook_time'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets max_burn_time
     *
     * @return int
     */
    public function getMaxBurnTime()
    {
        return $this->container['max_burn_time'];
    }

    /**
     * Sets max_burn_time
     *
     * @param int $max_burn_time The maximum amount of time (in ticks) the current fuel item lasts
     *
     * @return $this
     */
    public function setMaxBurnTime($max_burn_time)
    {
        $this->container['max_burn_time'] = $max_burn_time;

        return $this;
    }

    /**
     * Gets max_cook_time
     *
     * @return int
     */
    public function getMaxCookTime()
    {
        return $this->container['max_cook_time'];
    }

    /**
     * Sets max_cook_time
     *
     * @param int $max_cook_time The total amount of time (in ticks) the stack has to cook for to be done
     *
     * @return $this
     */
    public function setMaxCookTime($max_cook_time)
    {
        $this->container['max_cook_time'] = $max_cook_time;

        return $this;
    }

    /**
     * Gets passed_burn_time
     *
     * @return int
     */
    public function getPassedBurnTime()
    {
        return $this->container['passed_burn_time'];
    }

    /**
     * Sets passed_burn_time
     *
     * @param int $passed_burn_time The amount of time (in ticks) that has passed since this fuel item started burning
     *
     * @return $this
     */
    public function setPassedBurnTime($passed_burn_time)
    {
        $this->container['passed_burn_time'] = $passed_burn_time;

        return $this;
    }

    /**
     * Gets passed_cook_time
     *
     * @return int
     */
    public function getPassedCookTime()
    {
        return $this->container['passed_cook_time'];
    }

    /**
     * Sets passed_cook_time
     *
     * @param int $passed_cook_time The amount of time (in ticks) that has passed since the item stack started cooking
     *
     * @return $this
     */
    public function setPassedCookTime($passed_cook_time)
    {
        $this->container['passed_cook_time'] = $passed_cook_time;

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


