<?php
/**
 * Security
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
 * OpenAPI spec version: 1.8.0
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
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
 * Security Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Security implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Security';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asset_class' => 'string',
        'brokers' => '\com\hydrogen\nucleus\Model\Brokers[]',
        'category' => 'string',
        'create_date' => '\DateTime',
        'currency_code' => 'string',
        'cusip' => 'string',
        'description' => 'string',
        'exchange' => 'string',
        'id' => 'string',
        'image' => 'string',
        'industry' => 'string',
        'is_active' => 'bool',
        'isin' => 'string',
        'metadata' => 'map[string,string]',
        'name' => 'string',
        'proxy_id' => 'string',
        'secondary_id' => 'string',
        'sector' => 'string',
        'security_class' => 'string',
        'security_composition' => '\com\hydrogen\nucleus\Model\SecuritiesComposition[]',
        'security_country' => '\com\hydrogen\nucleus\Model\SecuritiesCountry[]',
        'ticker' => 'string',
        'total_expense_ratio' => 'float',
        'type' => 'string',
        'update_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asset_class' => null,
        'brokers' => null,
        'category' => null,
        'create_date' => 'date-time',
        'currency_code' => null,
        'cusip' => null,
        'description' => null,
        'exchange' => null,
        'id' => 'uuid',
        'image' => null,
        'industry' => null,
        'is_active' => null,
        'isin' => null,
        'metadata' => null,
        'name' => null,
        'proxy_id' => 'uuid',
        'secondary_id' => null,
        'sector' => null,
        'security_class' => null,
        'security_composition' => null,
        'security_country' => null,
        'ticker' => null,
        'total_expense_ratio' => 'float',
        'type' => null,
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
        'asset_class' => 'asset_class',
        'brokers' => 'brokers',
        'category' => 'category',
        'create_date' => 'create_date',
        'currency_code' => 'currency_code',
        'cusip' => 'cusip',
        'description' => 'description',
        'exchange' => 'exchange',
        'id' => 'id',
        'image' => 'image',
        'industry' => 'industry',
        'is_active' => 'is_active',
        'isin' => 'isin',
        'metadata' => 'metadata',
        'name' => 'name',
        'proxy_id' => 'proxy_id',
        'secondary_id' => 'secondary_id',
        'sector' => 'sector',
        'security_class' => 'security_class',
        'security_composition' => 'security_composition',
        'security_country' => 'security_country',
        'ticker' => 'ticker',
        'total_expense_ratio' => 'total_expense_ratio',
        'type' => 'type',
        'update_date' => 'update_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset_class' => 'setAssetClass',
        'brokers' => 'setBrokers',
        'category' => 'setCategory',
        'create_date' => 'setCreateDate',
        'currency_code' => 'setCurrencyCode',
        'cusip' => 'setCusip',
        'description' => 'setDescription',
        'exchange' => 'setExchange',
        'id' => 'setId',
        'image' => 'setImage',
        'industry' => 'setIndustry',
        'is_active' => 'setIsActive',
        'isin' => 'setIsin',
        'metadata' => 'setMetadata',
        'name' => 'setName',
        'proxy_id' => 'setProxyId',
        'secondary_id' => 'setSecondaryId',
        'sector' => 'setSector',
        'security_class' => 'setSecurityClass',
        'security_composition' => 'setSecurityComposition',
        'security_country' => 'setSecurityCountry',
        'ticker' => 'setTicker',
        'total_expense_ratio' => 'setTotalExpenseRatio',
        'type' => 'setType',
        'update_date' => 'setUpdateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset_class' => 'getAssetClass',
        'brokers' => 'getBrokers',
        'category' => 'getCategory',
        'create_date' => 'getCreateDate',
        'currency_code' => 'getCurrencyCode',
        'cusip' => 'getCusip',
        'description' => 'getDescription',
        'exchange' => 'getExchange',
        'id' => 'getId',
        'image' => 'getImage',
        'industry' => 'getIndustry',
        'is_active' => 'getIsActive',
        'isin' => 'getIsin',
        'metadata' => 'getMetadata',
        'name' => 'getName',
        'proxy_id' => 'getProxyId',
        'secondary_id' => 'getSecondaryId',
        'sector' => 'getSector',
        'security_class' => 'getSecurityClass',
        'security_composition' => 'getSecurityComposition',
        'security_country' => 'getSecurityCountry',
        'ticker' => 'getTicker',
        'total_expense_ratio' => 'getTotalExpenseRatio',
        'type' => 'getType',
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
        $this->container['asset_class'] = isset($data['asset_class']) ? $data['asset_class'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['cusip'] = isset($data['cusip']) ? $data['cusip'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['exchange'] = isset($data['exchange']) ? $data['exchange'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['isin'] = isset($data['isin']) ? $data['isin'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['proxy_id'] = isset($data['proxy_id']) ? $data['proxy_id'] : null;
        $this->container['secondary_id'] = isset($data['secondary_id']) ? $data['secondary_id'] : null;
        $this->container['sector'] = isset($data['sector']) ? $data['sector'] : null;
        $this->container['security_class'] = isset($data['security_class']) ? $data['security_class'] : null;
        $this->container['security_composition'] = isset($data['security_composition']) ? $data['security_composition'] : null;
        $this->container['security_country'] = isset($data['security_country']) ? $data['security_country'] : null;
        $this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
        $this->container['total_expense_ratio'] = isset($data['total_expense_ratio']) ? $data['total_expense_ratio'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['ticker'] === null) {
            $invalidProperties[] = "'ticker' can't be null";
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
     * Gets asset_class
     *
     * @return string
     */
    public function getAssetClass()
    {
        return $this->container['asset_class'];
    }

    /**
     * Sets asset_class
     *
     * @param string $asset_class Security asset class
     *
     * @return $this
     */
    public function setAssetClass($asset_class)
    {
        $this->container['asset_class'] = $asset_class;

        return $this;
    }

    /**
     * Gets brokers
     *
     * @return \com\hydrogen\nucleus\Model\Brokers[]
     */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
     * Sets brokers
     *
     * @param \com\hydrogen\nucleus\Model\Brokers[] $brokers brokers
     *
     * @return $this
     */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;

        return $this;
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
     * @param string $category Security category
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
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets cusip
     *
     * @return string
     */
    public function getCusip()
    {
        return $this->container['cusip'];
    }

    /**
     * Sets cusip
     *
     * @param string $cusip cusip
     *
     * @return $this
     */
    public function setCusip($cusip)
    {
        $this->container['cusip'] = $cusip;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets exchange
     *
     * @return string
     */
    public function getExchange()
    {
        return $this->container['exchange'];
    }

    /**
     * Sets exchange
     *
     * @param string $exchange Security exchange
     *
     * @return $this
     */
    public function setExchange($exchange)
    {
        $this->container['exchange'] = $exchange;

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
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string $industry Security industry
     *
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Security is active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets isin
     *
     * @return string
     */
    public function getIsin()
    {
        return $this->container['isin'];
    }

    /**
     * Sets isin
     *
     * @param string $isin isin
     *
     * @return $this
     */
    public function setIsin($isin)
    {
        $this->container['isin'] = $isin;

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
     * @param string $name Security name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets proxy_id
     *
     * @return string
     */
    public function getProxyId()
    {
        return $this->container['proxy_id'];
    }

    /**
     * Sets proxy_id
     *
     * @param string $proxy_id proxy_id
     *
     * @return $this
     */
    public function setProxyId($proxy_id)
    {
        $this->container['proxy_id'] = $proxy_id;

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
     * Gets sector
     *
     * @return string
     */
    public function getSector()
    {
        return $this->container['sector'];
    }

    /**
     * Sets sector
     *
     * @param string $sector Security sector
     *
     * @return $this
     */
    public function setSector($sector)
    {
        $this->container['sector'] = $sector;

        return $this;
    }

    /**
     * Gets security_class
     *
     * @return string
     */
    public function getSecurityClass()
    {
        return $this->container['security_class'];
    }

    /**
     * Sets security_class
     *
     * @param string $security_class Security class
     *
     * @return $this
     */
    public function setSecurityClass($security_class)
    {
        $this->container['security_class'] = $security_class;

        return $this;
    }

    /**
     * Gets security_composition
     *
     * @return \com\hydrogen\nucleus\Model\SecuritiesComposition[]
     */
    public function getSecurityComposition()
    {
        return $this->container['security_composition'];
    }

    /**
     * Sets security_composition
     *
     * @param \com\hydrogen\nucleus\Model\SecuritiesComposition[] $security_composition security_composition
     *
     * @return $this
     */
    public function setSecurityComposition($security_composition)
    {
        $this->container['security_composition'] = $security_composition;

        return $this;
    }

    /**
     * Gets security_country
     *
     * @return \com\hydrogen\nucleus\Model\SecuritiesCountry[]
     */
    public function getSecurityCountry()
    {
        return $this->container['security_country'];
    }

    /**
     * Sets security_country
     *
     * @param \com\hydrogen\nucleus\Model\SecuritiesCountry[] $security_country security_country
     *
     * @return $this
     */
    public function setSecurityCountry($security_country)
    {
        $this->container['security_country'] = $security_country;

        return $this;
    }

    /**
     * Gets ticker
     *
     * @return string
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     *
     * @param string $ticker Security ticker
     *
     * @return $this
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

        return $this;
    }

    /**
     * Gets total_expense_ratio
     *
     * @return float
     */
    public function getTotalExpenseRatio()
    {
        return $this->container['total_expense_ratio'];
    }

    /**
     * Sets total_expense_ratio
     *
     * @param float $total_expense_ratio total_expense_ratio
     *
     * @return $this
     */
    public function setTotalExpenseRatio($total_expense_ratio)
    {
        $this->container['total_expense_ratio'] = $total_expense_ratio;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Security type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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

