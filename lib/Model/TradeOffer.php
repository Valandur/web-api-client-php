<?php
/**
 * TradeOffer
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
 * TradeOffer Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TradeOffer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TradeOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'expired' => 'bool',
        'grants_exp' => 'bool',
        'uses' => 'int',
        'max_uses' => 'int',
        'first_buying_item' => '\Swagger\Client\Model\ItemStack',
        'second_buying_item' => '\Swagger\Client\Model\ItemStack',
        'selling_item' => '\Swagger\Client\Model\ItemStack'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'expired' => null,
        'grants_exp' => null,
        'uses' => 'int32',
        'max_uses' => 'int32',
        'first_buying_item' => null,
        'second_buying_item' => null,
        'selling_item' => null
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
        'expired' => 'expired',
        'grants_exp' => 'grantsExp',
        'uses' => 'uses',
        'max_uses' => 'maxUses',
        'first_buying_item' => 'firstBuyingItem',
        'second_buying_item' => 'secondBuyingItem',
        'selling_item' => 'sellingItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expired' => 'setExpired',
        'grants_exp' => 'setGrantsExp',
        'uses' => 'setUses',
        'max_uses' => 'setMaxUses',
        'first_buying_item' => 'setFirstBuyingItem',
        'second_buying_item' => 'setSecondBuyingItem',
        'selling_item' => 'setSellingItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expired' => 'getExpired',
        'grants_exp' => 'getGrantsExp',
        'uses' => 'getUses',
        'max_uses' => 'getMaxUses',
        'first_buying_item' => 'getFirstBuyingItem',
        'second_buying_item' => 'getSecondBuyingItem',
        'selling_item' => 'getSellingItem'
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
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['grants_exp'] = isset($data['grants_exp']) ? $data['grants_exp'] : null;
        $this->container['uses'] = isset($data['uses']) ? $data['uses'] : null;
        $this->container['max_uses'] = isset($data['max_uses']) ? $data['max_uses'] : null;
        $this->container['first_buying_item'] = isset($data['first_buying_item']) ? $data['first_buying_item'] : null;
        $this->container['second_buying_item'] = isset($data['second_buying_item']) ? $data['second_buying_item'] : null;
        $this->container['selling_item'] = isset($data['selling_item']) ? $data['selling_item'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['expired'] === null) {
            $invalidProperties[] = "'expired' can't be null";
        }
        if ($this->container['grants_exp'] === null) {
            $invalidProperties[] = "'grants_exp' can't be null";
        }
        if ($this->container['uses'] === null) {
            $invalidProperties[] = "'uses' can't be null";
        }
        if ($this->container['max_uses'] === null) {
            $invalidProperties[] = "'max_uses' can't be null";
        }
        if ($this->container['first_buying_item'] === null) {
            $invalidProperties[] = "'first_buying_item' can't be null";
        }
        if ($this->container['selling_item'] === null) {
            $invalidProperties[] = "'selling_item' can't be null";
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

        if ($this->container['expired'] === null) {
            return false;
        }
        if ($this->container['grants_exp'] === null) {
            return false;
        }
        if ($this->container['uses'] === null) {
            return false;
        }
        if ($this->container['max_uses'] === null) {
            return false;
        }
        if ($this->container['first_buying_item'] === null) {
            return false;
        }
        if ($this->container['selling_item'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets expired
     *
     * @return bool
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     *
     * @param bool $expired True if this offer is expired, false otherwise
     *
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;

        return $this;
    }

    /**
     * Gets grants_exp
     *
     * @return bool
     */
    public function getGrantsExp()
    {
        return $this->container['grants_exp'];
    }

    /**
     * Sets grants_exp
     *
     * @param bool $grants_exp True if this trade grants experience when completed, false otherwise
     *
     * @return $this
     */
    public function setGrantsExp($grants_exp)
    {
        $this->container['grants_exp'] = $grants_exp;

        return $this;
    }

    /**
     * Gets uses
     *
     * @return int
     */
    public function getUses()
    {
        return $this->container['uses'];
    }

    /**
     * Sets uses
     *
     * @param int $uses The amount of times this trade has been used
     *
     * @return $this
     */
    public function setUses($uses)
    {
        $this->container['uses'] = $uses;

        return $this;
    }

    /**
     * Gets max_uses
     *
     * @return int
     */
    public function getMaxUses()
    {
        return $this->container['max_uses'];
    }

    /**
     * Sets max_uses
     *
     * @param int $max_uses The maximum amount of times that this trade can be used
     *
     * @return $this
     */
    public function setMaxUses($max_uses)
    {
        $this->container['max_uses'] = $max_uses;

        return $this;
    }

    /**
     * Gets first_buying_item
     *
     * @return \Swagger\Client\Model\ItemStack
     */
    public function getFirstBuyingItem()
    {
        return $this->container['first_buying_item'];
    }

    /**
     * Sets first_buying_item
     *
     * @param \Swagger\Client\Model\ItemStack $first_buying_item The first item that is required for the trade
     *
     * @return $this
     */
    public function setFirstBuyingItem($first_buying_item)
    {
        $this->container['first_buying_item'] = $first_buying_item;

        return $this;
    }

    /**
     * Gets second_buying_item
     *
     * @return \Swagger\Client\Model\ItemStack
     */
    public function getSecondBuyingItem()
    {
        return $this->container['second_buying_item'];
    }

    /**
     * Sets second_buying_item
     *
     * @param \Swagger\Client\Model\ItemStack $second_buying_item The second item that is required for the trade
     *
     * @return $this
     */
    public function setSecondBuyingItem($second_buying_item)
    {
        $this->container['second_buying_item'] = $second_buying_item;

        return $this;
    }

    /**
     * Gets selling_item
     *
     * @return \Swagger\Client\Model\ItemStack
     */
    public function getSellingItem()
    {
        return $this->container['selling_item'];
    }

    /**
     * Sets selling_item
     *
     * @param \Swagger\Client\Model\ItemStack $selling_item The item that is received when trading
     *
     * @return $this
     */
    public function setSellingItem($selling_item)
    {
        $this->container['selling_item'] = $selling_item;

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


