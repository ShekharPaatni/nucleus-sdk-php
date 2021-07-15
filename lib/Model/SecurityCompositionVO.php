<?php
/**
 * SecurityCompositionVO
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
 * OpenAPI spec version: 1.9.3
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
 * SecurityCompositionVO Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecurityCompositionVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SecurityCompositionVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'end_date' => '\DateTime',
        'security_asset_class' => 'string',
        'security_countries' => '\com\hydrogen\nucleus\Model\SecurityCountryVO[]',
        'security_create_date' => '\DateTime',
        'security_id' => 'string',
        'security_industry' => 'string',
        'security_name' => 'string',
        'security_secondary_id' => 'string',
        'security_sector' => 'string',
        'security_security_class' => 'string',
        'security_ticker' => 'string',
        'security_update_date' => '\DateTime',
        'security_weight' => 'double',
        'start_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'end_date' => 'date',
        'security_asset_class' => null,
        'security_countries' => null,
        'security_create_date' => 'date-time',
        'security_id' => 'uuid',
        'security_industry' => null,
        'security_name' => null,
        'security_secondary_id' => null,
        'security_sector' => null,
        'security_security_class' => null,
        'security_ticker' => null,
        'security_update_date' => 'date-time',
        'security_weight' => 'double',
        'start_date' => 'date'
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
        'end_date' => 'end_date',
        'security_asset_class' => 'security_asset_class',
        'security_countries' => 'security_countries',
        'security_create_date' => 'security_create_date',
        'security_id' => 'security_id',
        'security_industry' => 'security_industry',
        'security_name' => 'security_name',
        'security_secondary_id' => 'security_secondary_id',
        'security_sector' => 'security_sector',
        'security_security_class' => 'security_security_class',
        'security_ticker' => 'security_ticker',
        'security_update_date' => 'security_update_date',
        'security_weight' => 'security_weight',
        'start_date' => 'start_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_date' => 'setEndDate',
        'security_asset_class' => 'setSecurityAssetClass',
        'security_countries' => 'setSecurityCountries',
        'security_create_date' => 'setSecurityCreateDate',
        'security_id' => 'setSecurityId',
        'security_industry' => 'setSecurityIndustry',
        'security_name' => 'setSecurityName',
        'security_secondary_id' => 'setSecuritySecondaryId',
        'security_sector' => 'setSecuritySector',
        'security_security_class' => 'setSecuritySecurityClass',
        'security_ticker' => 'setSecurityTicker',
        'security_update_date' => 'setSecurityUpdateDate',
        'security_weight' => 'setSecurityWeight',
        'start_date' => 'setStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_date' => 'getEndDate',
        'security_asset_class' => 'getSecurityAssetClass',
        'security_countries' => 'getSecurityCountries',
        'security_create_date' => 'getSecurityCreateDate',
        'security_id' => 'getSecurityId',
        'security_industry' => 'getSecurityIndustry',
        'security_name' => 'getSecurityName',
        'security_secondary_id' => 'getSecuritySecondaryId',
        'security_sector' => 'getSecuritySector',
        'security_security_class' => 'getSecuritySecurityClass',
        'security_ticker' => 'getSecurityTicker',
        'security_update_date' => 'getSecurityUpdateDate',
        'security_weight' => 'getSecurityWeight',
        'start_date' => 'getStartDate'
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
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['security_asset_class'] = isset($data['security_asset_class']) ? $data['security_asset_class'] : null;
        $this->container['security_countries'] = isset($data['security_countries']) ? $data['security_countries'] : null;
        $this->container['security_create_date'] = isset($data['security_create_date']) ? $data['security_create_date'] : null;
        $this->container['security_id'] = isset($data['security_id']) ? $data['security_id'] : null;
        $this->container['security_industry'] = isset($data['security_industry']) ? $data['security_industry'] : null;
        $this->container['security_name'] = isset($data['security_name']) ? $data['security_name'] : null;
        $this->container['security_secondary_id'] = isset($data['security_secondary_id']) ? $data['security_secondary_id'] : null;
        $this->container['security_sector'] = isset($data['security_sector']) ? $data['security_sector'] : null;
        $this->container['security_security_class'] = isset($data['security_security_class']) ? $data['security_security_class'] : null;
        $this->container['security_ticker'] = isset($data['security_ticker']) ? $data['security_ticker'] : null;
        $this->container['security_update_date'] = isset($data['security_update_date']) ? $data['security_update_date'] : null;
        $this->container['security_weight'] = isset($data['security_weight']) ? $data['security_weight'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
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
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets security_asset_class
     *
     * @return string
     */
    public function getSecurityAssetClass()
    {
        return $this->container['security_asset_class'];
    }

    /**
     * Sets security_asset_class
     *
     * @param string $security_asset_class security_asset_class
     *
     * @return $this
     */
    public function setSecurityAssetClass($security_asset_class)
    {
        $this->container['security_asset_class'] = $security_asset_class;

        return $this;
    }

    /**
     * Gets security_countries
     *
     * @return \com\hydrogen\nucleus\Model\SecurityCountryVO[]
     */
    public function getSecurityCountries()
    {
        return $this->container['security_countries'];
    }

    /**
     * Sets security_countries
     *
     * @param \com\hydrogen\nucleus\Model\SecurityCountryVO[] $security_countries security_countries
     *
     * @return $this
     */
    public function setSecurityCountries($security_countries)
    {
        $this->container['security_countries'] = $security_countries;

        return $this;
    }

    /**
     * Gets security_create_date
     *
     * @return \DateTime
     */
    public function getSecurityCreateDate()
    {
        return $this->container['security_create_date'];
    }

    /**
     * Sets security_create_date
     *
     * @param \DateTime $security_create_date security_create_date
     *
     * @return $this
     */
    public function setSecurityCreateDate($security_create_date)
    {
        $this->container['security_create_date'] = $security_create_date;

        return $this;
    }

    /**
     * Gets security_id
     *
     * @return string
     */
    public function getSecurityId()
    {
        return $this->container['security_id'];
    }

    /**
     * Sets security_id
     *
     * @param string $security_id security_id
     *
     * @return $this
     */
    public function setSecurityId($security_id)
    {
        $this->container['security_id'] = $security_id;

        return $this;
    }

    /**
     * Gets security_industry
     *
     * @return string
     */
    public function getSecurityIndustry()
    {
        return $this->container['security_industry'];
    }

    /**
     * Sets security_industry
     *
     * @param string $security_industry security_industry
     *
     * @return $this
     */
    public function setSecurityIndustry($security_industry)
    {
        $this->container['security_industry'] = $security_industry;

        return $this;
    }

    /**
     * Gets security_name
     *
     * @return string
     */
    public function getSecurityName()
    {
        return $this->container['security_name'];
    }

    /**
     * Sets security_name
     *
     * @param string $security_name security_name
     *
     * @return $this
     */
    public function setSecurityName($security_name)
    {
        $this->container['security_name'] = $security_name;

        return $this;
    }

    /**
     * Gets security_secondary_id
     *
     * @return string
     */
    public function getSecuritySecondaryId()
    {
        return $this->container['security_secondary_id'];
    }

    /**
     * Sets security_secondary_id
     *
     * @param string $security_secondary_id security_secondary_id
     *
     * @return $this
     */
    public function setSecuritySecondaryId($security_secondary_id)
    {
        $this->container['security_secondary_id'] = $security_secondary_id;

        return $this;
    }

    /**
     * Gets security_sector
     *
     * @return string
     */
    public function getSecuritySector()
    {
        return $this->container['security_sector'];
    }

    /**
     * Sets security_sector
     *
     * @param string $security_sector security_sector
     *
     * @return $this
     */
    public function setSecuritySector($security_sector)
    {
        $this->container['security_sector'] = $security_sector;

        return $this;
    }

    /**
     * Gets security_security_class
     *
     * @return string
     */
    public function getSecuritySecurityClass()
    {
        return $this->container['security_security_class'];
    }

    /**
     * Sets security_security_class
     *
     * @param string $security_security_class security_security_class
     *
     * @return $this
     */
    public function setSecuritySecurityClass($security_security_class)
    {
        $this->container['security_security_class'] = $security_security_class;

        return $this;
    }

    /**
     * Gets security_ticker
     *
     * @return string
     */
    public function getSecurityTicker()
    {
        return $this->container['security_ticker'];
    }

    /**
     * Sets security_ticker
     *
     * @param string $security_ticker security_ticker
     *
     * @return $this
     */
    public function setSecurityTicker($security_ticker)
    {
        $this->container['security_ticker'] = $security_ticker;

        return $this;
    }

    /**
     * Gets security_update_date
     *
     * @return \DateTime
     */
    public function getSecurityUpdateDate()
    {
        return $this->container['security_update_date'];
    }

    /**
     * Sets security_update_date
     *
     * @param \DateTime $security_update_date security_update_date
     *
     * @return $this
     */
    public function setSecurityUpdateDate($security_update_date)
    {
        $this->container['security_update_date'] = $security_update_date;

        return $this;
    }

    /**
     * Gets security_weight
     *
     * @return double
     */
    public function getSecurityWeight()
    {
        return $this->container['security_weight'];
    }

    /**
     * Sets security_weight
     *
     * @param double $security_weight security_weight
     *
     * @return $this
     */
    public function setSecurityWeight($security_weight)
    {
        $this->container['security_weight'] = $security_weight;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

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


