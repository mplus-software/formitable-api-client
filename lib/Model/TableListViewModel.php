<?php
/**
 * TableListViewModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Formitable Api v1.2
 *
 * New in this version: <ul><li>Added Get Single restaurant operation.</li><li>Verify availability for a datetime / partysize.</li><li>Select tables with create and update booking.</li><li>Get tables and areas by the POS identifiers</li></ul>
 *
 * OpenAPI spec version: v1.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
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
 * TableListViewModel Class Doc Comment
 *
 * @category Class
 * @description Provides information about a restaurant table.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TableListViewModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TableListViewModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'pos_id' => 'string',
'name' => 'string',
'min_people' => 'int',
'max_people' => 'int',
'area_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'pos_id' => null,
'name' => null,
'min_people' => 'int32',
'max_people' => 'int32',
'area_id' => 'int32'    ];

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
        'id' => 'id',
'pos_id' => 'posId',
'name' => 'name',
'min_people' => 'minPeople',
'max_people' => 'maxPeople',
'area_id' => 'areaId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'pos_id' => 'setPosId',
'name' => 'setName',
'min_people' => 'setMinPeople',
'max_people' => 'setMaxPeople',
'area_id' => 'setAreaId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'pos_id' => 'getPosId',
'name' => 'getName',
'min_people' => 'getMinPeople',
'max_people' => 'getMaxPeople',
'area_id' => 'getAreaId'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['pos_id'] = isset($data['pos_id']) ? $data['pos_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['min_people'] = isset($data['min_people']) ? $data['min_people'] : null;
        $this->container['max_people'] = isset($data['max_people']) ? $data['max_people'] : null;
        $this->container['area_id'] = isset($data['area_id']) ? $data['area_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The identitifier of the table.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets pos_id
     *
     * @return string
     */
    public function getPosId()
    {
        return $this->container['pos_id'];
    }

    /**
     * Sets pos_id
     *
     * @param string $pos_id The external reference of the Point of Sale system
     *
     * @return $this
     */
    public function setPosId($pos_id)
    {
        $this->container['pos_id'] = $pos_id;

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
     * @param string $name The name of the table.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets min_people
     *
     * @return int
     */
    public function getMinPeople()
    {
        return $this->container['min_people'];
    }

    /**
     * Sets min_people
     *
     * @param int $min_people The minimum number of people that may be seated at this table.
     *
     * @return $this
     */
    public function setMinPeople($min_people)
    {
        $this->container['min_people'] = $min_people;

        return $this;
    }

    /**
     * Gets max_people
     *
     * @return int
     */
    public function getMaxPeople()
    {
        return $this->container['max_people'];
    }

    /**
     * Sets max_people
     *
     * @param int $max_people The maximum number of people that may be seated at this table.
     *
     * @return $this
     */
    public function setMaxPeople($max_people)
    {
        $this->container['max_people'] = $max_people;

        return $this;
    }

    /**
     * Gets area_id
     *
     * @return int
     */
    public function getAreaId()
    {
        return $this->container['area_id'];
    }

    /**
     * Sets area_id
     *
     * @param int $area_id area_id
     *
     * @return $this
     */
    public function setAreaId($area_id)
    {
        $this->container['area_id'] = $area_id;

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
