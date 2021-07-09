<?php
/**
 * NotificationSetting
 *
 * PHP version 5
 *
 * @category Class
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydrogen Nucleus API
 *
 * The Hydrogen Nucleus API
 *
 * OpenAPI spec version: 1.9.2
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com\hydrogen\nucleus\Model;

use \ArrayAccess;
use \com\hydrogen\nucleus\ObjectSerializer;

/**
 * NotificationSetting Class Doc Comment
 *
 * @category Class
 * @description Notification Setting Object
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_id' => 'string',
        'create_date' => '\DateTime',
        'frequency' => 'int',
        'frequency_unit' => 'string',
        'id' => 'string',
        'is_receive' => 'bool',
        'last_run_date' => '\DateTime',
        'metadata' => 'map[string,string]',
        'notification_id' => 'string',
        'secondary_id' => 'string',
        'threshold_value' => 'double',
        'update_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_id' => 'uuid',
        'create_date' => 'date-time',
        'frequency' => 'int32',
        'frequency_unit' => null,
        'id' => 'uuid',
        'is_receive' => null,
        'last_run_date' => 'date-time',
        'metadata' => null,
        'notification_id' => 'uuid',
        'secondary_id' => null,
        'threshold_value' => 'double',
        'update_date' => 'date-time'
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
        'client_id' => 'client_id',
        'create_date' => 'create_date',
        'frequency' => 'frequency',
        'frequency_unit' => 'frequency_unit',
        'id' => 'id',
        'is_receive' => 'is_receive',
        'last_run_date' => 'last_run_date',
        'metadata' => 'metadata',
        'notification_id' => 'notification_id',
        'secondary_id' => 'secondary_id',
        'threshold_value' => 'threshold_value',
        'update_date' => 'update_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'create_date' => 'setCreateDate',
        'frequency' => 'setFrequency',
        'frequency_unit' => 'setFrequencyUnit',
        'id' => 'setId',
        'is_receive' => 'setIsReceive',
        'last_run_date' => 'setLastRunDate',
        'metadata' => 'setMetadata',
        'notification_id' => 'setNotificationId',
        'secondary_id' => 'setSecondaryId',
        'threshold_value' => 'setThresholdValue',
        'update_date' => 'setUpdateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'create_date' => 'getCreateDate',
        'frequency' => 'getFrequency',
        'frequency_unit' => 'getFrequencyUnit',
        'id' => 'getId',
        'is_receive' => 'getIsReceive',
        'last_run_date' => 'getLastRunDate',
        'metadata' => 'getMetadata',
        'notification_id' => 'getNotificationId',
        'secondary_id' => 'getSecondaryId',
        'threshold_value' => 'getThresholdValue',
        'update_date' => 'getUpdateDate'
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
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['frequency_unit'] = isset($data['frequency_unit']) ? $data['frequency_unit'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_receive'] = isset($data['is_receive']) ? $data['is_receive'] : null;
        $this->container['last_run_date'] = isset($data['last_run_date']) ? $data['last_run_date'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['notification_id'] = isset($data['notification_id']) ? $data['notification_id'] : null;
        $this->container['secondary_id'] = isset($data['secondary_id']) ? $data['secondary_id'] : null;
        $this->container['threshold_value'] = isset($data['threshold_value']) ? $data['threshold_value'] : null;
        $this->container['update_date'] = isset($data['update_date']) ? $data['update_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        if ($this->container['notification_id'] === null) {
            $invalidProperties[] = "'notification_id' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id client_id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return int
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param int $frequency frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets frequency_unit
     *
     * @return string
     */
    public function getFrequencyUnit()
    {
        return $this->container['frequency_unit'];
    }

    /**
     * Sets frequency_unit
     *
     * @param string $frequency_unit frequency_unit
     *
     * @return $this
     */
    public function setFrequencyUnit($frequency_unit)
    {
        $this->container['frequency_unit'] = $frequency_unit;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_receive
     *
     * @return bool
     */
    public function getIsReceive()
    {
        return $this->container['is_receive'];
    }

    /**
     * Sets is_receive
     *
     * @param bool $is_receive is_receive
     *
     * @return $this
     */
    public function setIsReceive($is_receive)
    {
        $this->container['is_receive'] = $is_receive;

        return $this;
    }

    /**
     * Gets last_run_date
     *
     * @return \DateTime
     */
    public function getLastRunDate()
    {
        return $this->container['last_run_date'];
    }

    /**
     * Sets last_run_date
     *
     * @param \DateTime $last_run_date last_run_date
     *
     * @return $this
     */
    public function setLastRunDate($last_run_date)
    {
        $this->container['last_run_date'] = $last_run_date;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,string]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,string] $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets notification_id
     *
     * @return string
     */
    public function getNotificationId()
    {
        return $this->container['notification_id'];
    }

    /**
     * Sets notification_id
     *
     * @param string $notification_id notification_id
     *
     * @return $this
     */
    public function setNotificationId($notification_id)
    {
        $this->container['notification_id'] = $notification_id;

        return $this;
    }

    /**
     * Gets secondary_id
     *
     * @return string
     */
    public function getSecondaryId()
    {
        return $this->container['secondary_id'];
    }

    /**
     * Sets secondary_id
     *
     * @param string $secondary_id secondary_id
     *
     * @return $this
     */
    public function setSecondaryId($secondary_id)
    {
        $this->container['secondary_id'] = $secondary_id;

        return $this;
    }

    /**
     * Gets threshold_value
     *
     * @return double
     */
    public function getThresholdValue()
    {
        return $this->container['threshold_value'];
    }

    /**
     * Sets threshold_value
     *
     * @param double $threshold_value threshold_value
     *
     * @return $this
     */
    public function setThresholdValue($threshold_value)
    {
        $this->container['threshold_value'] = $threshold_value;

        return $this;
    }

    /**
     * Gets update_date
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     *
     * @param \DateTime $update_date update_date
     *
     * @return $this
     */
    public function setUpdateDate($update_date)
    {
        $this->container['update_date'] = $update_date;

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


