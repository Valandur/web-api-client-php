<?php
/**
 * CommandData
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
 * CommandData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommandData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommandData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tracks_output' => 'bool',
        'last_output' => 'string',
        'stored_command' => 'string',
        'success_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tracks_output' => null,
        'last_output' => null,
        'stored_command' => null,
        'success_count' => 'int32'
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
        'tracks_output' => 'tracksOutput',
        'last_output' => 'lastOutput',
        'stored_command' => 'storedCommand',
        'success_count' => 'successCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tracks_output' => 'setTracksOutput',
        'last_output' => 'setLastOutput',
        'stored_command' => 'setStoredCommand',
        'success_count' => 'setSuccessCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tracks_output' => 'getTracksOutput',
        'last_output' => 'getLastOutput',
        'stored_command' => 'getStoredCommand',
        'success_count' => 'getSuccessCount'
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
        $this->container['tracks_output'] = isset($data['tracks_output']) ? $data['tracks_output'] : null;
        $this->container['last_output'] = isset($data['last_output']) ? $data['last_output'] : null;
        $this->container['stored_command'] = isset($data['stored_command']) ? $data['stored_command'] : null;
        $this->container['success_count'] = isset($data['success_count']) ? $data['success_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tracks_output'] === null) {
            $invalidProperties[] = "'tracks_output' can't be null";
        }
        if ($this->container['stored_command'] === null) {
            $invalidProperties[] = "'stored_command' can't be null";
        }
        if ($this->container['success_count'] === null) {
            $invalidProperties[] = "'success_count' can't be null";
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

        if ($this->container['tracks_output'] === null) {
            return false;
        }
        if ($this->container['stored_command'] === null) {
            return false;
        }
        if ($this->container['success_count'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets tracks_output
     *
     * @return bool
     */
    public function getTracksOutput()
    {
        return $this->container['tracks_output'];
    }

    /**
     * Sets tracks_output
     *
     * @param bool $tracks_output True if the output is tracked, false otherwise
     *
     * @return $this
     */
    public function setTracksOutput($tracks_output)
    {
        $this->container['tracks_output'] = $tracks_output;

        return $this;
    }

    /**
     * Gets last_output
     *
     * @return string
     */
    public function getLastOutput()
    {
        return $this->container['last_output'];
    }

    /**
     * Sets last_output
     *
     * @param string $last_output The last output produced
     *
     * @return $this
     */
    public function setLastOutput($last_output)
    {
        $this->container['last_output'] = $last_output;

        return $this;
    }

    /**
     * Gets stored_command
     *
     * @return string
     */
    public function getStoredCommand()
    {
        return $this->container['stored_command'];
    }

    /**
     * Sets stored_command
     *
     * @param string $stored_command The stored command
     *
     * @return $this
     */
    public function setStoredCommand($stored_command)
    {
        $this->container['stored_command'] = $stored_command;

        return $this;
    }

    /**
     * Gets success_count
     *
     * @return int
     */
    public function getSuccessCount()
    {
        return $this->container['success_count'];
    }

    /**
     * Sets success_count
     *
     * @param int $success_count The amount of successfull executions
     *
     * @return $this
     */
    public function setSuccessCount($success_count)
    {
        $this->container['success_count'] = $success_count;

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

