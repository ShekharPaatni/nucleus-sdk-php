<?php
/**
 * TransactionCode
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
 * Swagger Codegen version: 2.4.20
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
 * TransactionCode Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionCode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionCode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category' => 'string',
        'create_date' => '\DateTime',
        'id' => 'string',
        'is_buy' => 'bool',
        'is_deposit' => 'bool',
        'is_fee' => 'bool',
        'is_transfer' => 'bool',
        'metadata' => 'map[string,string]',
        'secondary_id' => 'string',
        'subcategory' => 'string',
        'transaction_code' => 'string',
        'transaction_code_description' => 'string',
        'transaction_type' => 'string',
        'update_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category' => null,
        'create_date' => 'date-time',
        'id' => 'uuid',
        'is_buy' => null,
        'is_deposit' => null,
        'is_fee' => null,
        'is_transfer' => null,
        'metadata' => null,
        'secondary_id' => null,
        'subcategory' => null,
        'transaction_code' => null,
        'transaction_code_description' => null,
        'transaction_type' => null,
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
        'category' => 'category',
        'create_date' => 'create_date',
        'id' => 'id',
        'is_buy' => 'is_buy',
        'is_deposit' => 'is_deposit',
        'is_fee' => 'is_fee',
        'is_transfer' => 'is_transfer',
        'metadata' => 'metadata',
        'secondary_id' => 'secondary_id',
        'subcategory' => 'subcategory',
        'transaction_code' => 'transaction_code',
        'transaction_code_description' => 'transaction_code_description',
        'transaction_type' => 'transaction_type',
        'update_date' => 'update_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'create_date' => 'setCreateDate',
        'id' => 'setId',
        'is_buy' => 'setIsBuy',
        'is_deposit' => 'setIsDeposit',
        'is_fee' => 'setIsFee',
        'is_transfer' => 'setIsTransfer',
        'metadata' => 'setMetadata',
        'secondary_id' => 'setSecondaryId',
        'subcategory' => 'setSubcategory',
        'transaction_code' => 'setTransactionCode',
        'transaction_code_description' => 'setTransactionCodeDescription',
        'transaction_type' => 'setTransactionType',
        'update_date' => 'setUpdateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'create_date' => 'getCreateDate',
        'id' => 'getId',
        'is_buy' => 'getIsBuy',
        'is_deposit' => 'getIsDeposit',
        'is_fee' => 'getIsFee',
        'is_transfer' => 'getIsTransfer',
        'metadata' => 'getMetadata',
        'secondary_id' => 'getSecondaryId',
        'subcategory' => 'getSubcategory',
        'transaction_code' => 'getTransactionCode',
        'transaction_code_description' => 'getTransactionCodeDescription',
        'transaction_type' => 'getTransactionType',
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_buy'] = isset($data['is_buy']) ? $data['is_buy'] : null;
        $this->container['is_deposit'] = isset($data['is_deposit']) ? $data['is_deposit'] : null;
        $this->container['is_fee'] = isset($data['is_fee']) ? $data['is_fee'] : null;
        $this->container['is_transfer'] = isset($data['is_transfer']) ? $data['is_transfer'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['secondary_id'] = isset($data['secondary_id']) ? $data['secondary_id'] : null;
        $this->container['subcategory'] = isset($data['subcategory']) ? $data['subcategory'] : null;
        $this->container['transaction_code'] = isset($data['transaction_code']) ? $data['transaction_code'] : null;
        $this->container['transaction_code_description'] = isset($data['transaction_code_description']) ? $data['transaction_code_description'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
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

        if ($this->container['transaction_code'] === null) {
            $invalidProperties[] = "'transaction_code' can't be null";
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
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * Gets is_buy
     *
     * @return bool
     */
    public function getIsBuy()
    {
        return $this->container['is_buy'];
    }

    /**
     * Sets is_buy
     *
     * @param bool $is_buy is_buy
     *
     * @return $this
     */
    public function setIsBuy($is_buy)
    {
        $this->container['is_buy'] = $is_buy;

        return $this;
    }

    /**
     * Gets is_deposit
     *
     * @return bool
     */
    public function getIsDeposit()
    {
        return $this->container['is_deposit'];
    }

    /**
     * Sets is_deposit
     *
     * @param bool $is_deposit is_deposit
     *
     * @return $this
     */
    public function setIsDeposit($is_deposit)
    {
        $this->container['is_deposit'] = $is_deposit;

        return $this;
    }

    /**
     * Gets is_fee
     *
     * @return bool
     */
    public function getIsFee()
    {
        return $this->container['is_fee'];
    }

    /**
     * Sets is_fee
     *
     * @param bool $is_fee is_fee
     *
     * @return $this
     */
    public function setIsFee($is_fee)
    {
        $this->container['is_fee'] = $is_fee;

        return $this;
    }

    /**
     * Gets is_transfer
     *
     * @return bool
     */
    public function getIsTransfer()
    {
        return $this->container['is_transfer'];
    }

    /**
     * Sets is_transfer
     *
     * @param bool $is_transfer is_transfer
     *
     * @return $this
     */
    public function setIsTransfer($is_transfer)
    {
        $this->container['is_transfer'] = $is_transfer;

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
     * Gets subcategory
     *
     * @return string
     */
    public function getSubcategory()
    {
        return $this->container['subcategory'];
    }

    /**
     * Sets subcategory
     *
     * @param string $subcategory subcategory
     *
     * @return $this
     */
    public function setSubcategory($subcategory)
    {
        $this->container['subcategory'] = $subcategory;

        return $this;
    }

    /**
     * Gets transaction_code
     *
     * @return string
     */
    public function getTransactionCode()
    {
        return $this->container['transaction_code'];
    }

    /**
     * Sets transaction_code
     *
     * @param string $transaction_code transactionCode
     *
     * @return $this
     */
    public function setTransactionCode($transaction_code)
    {
        $this->container['transaction_code'] = $transaction_code;

        return $this;
    }

    /**
     * Gets transaction_code_description
     *
     * @return string
     */
    public function getTransactionCodeDescription()
    {
        return $this->container['transaction_code_description'];
    }

    /**
     * Sets transaction_code_description
     *
     * @param string $transaction_code_description transactionCodeDescription
     *
     * @return $this
     */
    public function setTransactionCodeDescription($transaction_code_description)
    {
        $this->container['transaction_code_description'] = $transaction_code_description;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string $transaction_type transactionType
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

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


