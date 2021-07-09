<?php
/**
 * FinancialStatement
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
 * FinancialStatement Class Doc Comment
 *
 * @category Class
 * @description FinancialStatement Object
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialStatement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialStatement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accounting_method' => 'string',
        'business_id' => 'string',
        'client_id' => 'string',
        'create_date' => '\DateTime',
        'currency_code' => 'string',
        'id' => 'string',
        'metadata' => 'map[string,string]',
        'period_length' => 'string',
        'period_month' => 'int',
        'period_quarter' => 'int',
        'period_type' => 'string',
        'period_year' => 'int',
        'secondary_id' => 'string',
        'statement_date' => '\DateTime',
        'statement_type' => 'string',
        'stats' => '\com\hydrogen\nucleus\Model\Stat[]',
        'update_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accounting_method' => null,
        'business_id' => 'uuid',
        'client_id' => 'uuid',
        'create_date' => 'date-time',
        'currency_code' => null,
        'id' => 'uuid',
        'metadata' => null,
        'period_length' => null,
        'period_month' => 'int32',
        'period_quarter' => 'int32',
        'period_type' => null,
        'period_year' => 'int32',
        'secondary_id' => null,
        'statement_date' => 'date',
        'statement_type' => null,
        'stats' => null,
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
        'accounting_method' => 'accounting_method',
        'business_id' => 'business_id',
        'client_id' => 'client_id',
        'create_date' => 'create_date',
        'currency_code' => 'currency_code',
        'id' => 'id',
        'metadata' => 'metadata',
        'period_length' => 'period_length',
        'period_month' => 'period_month',
        'period_quarter' => 'period_quarter',
        'period_type' => 'period_type',
        'period_year' => 'period_year',
        'secondary_id' => 'secondary_id',
        'statement_date' => 'statement_date',
        'statement_type' => 'statement_type',
        'stats' => 'stats',
        'update_date' => 'update_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accounting_method' => 'setAccountingMethod',
        'business_id' => 'setBusinessId',
        'client_id' => 'setClientId',
        'create_date' => 'setCreateDate',
        'currency_code' => 'setCurrencyCode',
        'id' => 'setId',
        'metadata' => 'setMetadata',
        'period_length' => 'setPeriodLength',
        'period_month' => 'setPeriodMonth',
        'period_quarter' => 'setPeriodQuarter',
        'period_type' => 'setPeriodType',
        'period_year' => 'setPeriodYear',
        'secondary_id' => 'setSecondaryId',
        'statement_date' => 'setStatementDate',
        'statement_type' => 'setStatementType',
        'stats' => 'setStats',
        'update_date' => 'setUpdateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accounting_method' => 'getAccountingMethod',
        'business_id' => 'getBusinessId',
        'client_id' => 'getClientId',
        'create_date' => 'getCreateDate',
        'currency_code' => 'getCurrencyCode',
        'id' => 'getId',
        'metadata' => 'getMetadata',
        'period_length' => 'getPeriodLength',
        'period_month' => 'getPeriodMonth',
        'period_quarter' => 'getPeriodQuarter',
        'period_type' => 'getPeriodType',
        'period_year' => 'getPeriodYear',
        'secondary_id' => 'getSecondaryId',
        'statement_date' => 'getStatementDate',
        'statement_type' => 'getStatementType',
        'stats' => 'getStats',
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
        $this->container['accounting_method'] = isset($data['accounting_method']) ? $data['accounting_method'] : null;
        $this->container['business_id'] = isset($data['business_id']) ? $data['business_id'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['period_length'] = isset($data['period_length']) ? $data['period_length'] : null;
        $this->container['period_month'] = isset($data['period_month']) ? $data['period_month'] : null;
        $this->container['period_quarter'] = isset($data['period_quarter']) ? $data['period_quarter'] : null;
        $this->container['period_type'] = isset($data['period_type']) ? $data['period_type'] : null;
        $this->container['period_year'] = isset($data['period_year']) ? $data['period_year'] : null;
        $this->container['secondary_id'] = isset($data['secondary_id']) ? $data['secondary_id'] : null;
        $this->container['statement_date'] = isset($data['statement_date']) ? $data['statement_date'] : null;
        $this->container['statement_type'] = isset($data['statement_type']) ? $data['statement_type'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
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

        if ($this->container['accounting_method'] === null) {
            $invalidProperties[] = "'accounting_method' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['statement_date'] === null) {
            $invalidProperties[] = "'statement_date' can't be null";
        }
        if ($this->container['statement_type'] === null) {
            $invalidProperties[] = "'statement_type' can't be null";
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
     * Gets accounting_method
     *
     * @return string
     */
    public function getAccountingMethod()
    {
        return $this->container['accounting_method'];
    }

    /**
     * Sets accounting_method
     *
     * @param string $accounting_method accounting_method
     *
     * @return $this
     */
    public function setAccountingMethod($accounting_method)
    {
        $this->container['accounting_method'] = $accounting_method;

        return $this;
    }

    /**
     * Gets business_id
     *
     * @return string
     */
    public function getBusinessId()
    {
        return $this->container['business_id'];
    }

    /**
     * Sets business_id
     *
     * @param string $business_id businessId
     *
     * @return $this
     */
    public function setBusinessId($business_id)
    {
        $this->container['business_id'] = $business_id;

        return $this;
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
     * @param string $client_id clientId
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
     * @param string $currency_code currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

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
     * Gets period_length
     *
     * @return string
     */
    public function getPeriodLength()
    {
        return $this->container['period_length'];
    }

    /**
     * Sets period_length
     *
     * @param string $period_length periodLength
     *
     * @return $this
     */
    public function setPeriodLength($period_length)
    {
        $this->container['period_length'] = $period_length;

        return $this;
    }

    /**
     * Gets period_month
     *
     * @return int
     */
    public function getPeriodMonth()
    {
        return $this->container['period_month'];
    }

    /**
     * Sets period_month
     *
     * @param int $period_month periodMonth
     *
     * @return $this
     */
    public function setPeriodMonth($period_month)
    {
        $this->container['period_month'] = $period_month;

        return $this;
    }

    /**
     * Gets period_quarter
     *
     * @return int
     */
    public function getPeriodQuarter()
    {
        return $this->container['period_quarter'];
    }

    /**
     * Sets period_quarter
     *
     * @param int $period_quarter periodQuarter
     *
     * @return $this
     */
    public function setPeriodQuarter($period_quarter)
    {
        $this->container['period_quarter'] = $period_quarter;

        return $this;
    }

    /**
     * Gets period_type
     *
     * @return string
     */
    public function getPeriodType()
    {
        return $this->container['period_type'];
    }

    /**
     * Sets period_type
     *
     * @param string $period_type periodType
     *
     * @return $this
     */
    public function setPeriodType($period_type)
    {
        $this->container['period_type'] = $period_type;

        return $this;
    }

    /**
     * Gets period_year
     *
     * @return int
     */
    public function getPeriodYear()
    {
        return $this->container['period_year'];
    }

    /**
     * Sets period_year
     *
     * @param int $period_year periodYear
     *
     * @return $this
     */
    public function setPeriodYear($period_year)
    {
        $this->container['period_year'] = $period_year;

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
     * Gets statement_date
     *
     * @return \DateTime
     */
    public function getStatementDate()
    {
        return $this->container['statement_date'];
    }

    /**
     * Sets statement_date
     *
     * @param \DateTime $statement_date statementDate
     *
     * @return $this
     */
    public function setStatementDate($statement_date)
    {
        $this->container['statement_date'] = $statement_date;

        return $this;
    }

    /**
     * Gets statement_type
     *
     * @return string
     */
    public function getStatementType()
    {
        return $this->container['statement_type'];
    }

    /**
     * Sets statement_type
     *
     * @param string $statement_type statement_type
     *
     * @return $this
     */
    public function setStatementType($statement_type)
    {
        $this->container['statement_type'] = $statement_type;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return \com\hydrogen\nucleus\Model\Stat[]
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param \com\hydrogen\nucleus\Model\Stat[] $stats stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

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


