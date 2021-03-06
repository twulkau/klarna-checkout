<?php
/**
 * AggregatedOrderCartV2
 *
 * PHP version 5
 *
 * @category Class
 * @package  Klarna\Checkout
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * klarna-checkout
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 20200626163101
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Klarna\Checkout\Model;

use \ArrayAccess;
use \Klarna\Checkout\ObjectSerializer;

/**
 * AggregatedOrderCartV2 Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Checkout
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AggregatedOrderCartV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AggregatedOrderCartV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'items' => '\Klarna\Checkout\Model\AggregatedOrderCartItemV2[]',
        'total_price_including_tax' => 'int',
        'total_tax_amount' => 'int',
        'total_price_excluding_tax' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'items' => null,
        'total_price_including_tax' => 'int64',
        'total_tax_amount' => 'int64',
        'total_price_excluding_tax' => 'int64'
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
        'items' => 'items',
        'total_price_including_tax' => 'total_price_including_tax',
        'total_tax_amount' => 'total_tax_amount',
        'total_price_excluding_tax' => 'total_price_excluding_tax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'items' => 'setItems',
        'total_price_including_tax' => 'setTotalPriceIncludingTax',
        'total_tax_amount' => 'setTotalTaxAmount',
        'total_price_excluding_tax' => 'setTotalPriceExcludingTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'items' => 'getItems',
        'total_price_including_tax' => 'getTotalPriceIncludingTax',
        'total_tax_amount' => 'getTotalTaxAmount',
        'total_price_excluding_tax' => 'getTotalPriceExcludingTax'
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
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['total_price_including_tax'] = isset($data['total_price_including_tax']) ? $data['total_price_including_tax'] : null;
        $this->container['total_tax_amount'] = isset($data['total_tax_amount']) ? $data['total_tax_amount'] : null;
        $this->container['total_price_excluding_tax'] = isset($data['total_price_excluding_tax']) ? $data['total_price_excluding_tax'] : null;
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
     * Gets items
     *
     * @return \Klarna\Checkout\Model\AggregatedOrderCartItemV2[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Klarna\Checkout\Model\AggregatedOrderCartItemV2[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets total_price_including_tax
     *
     * @return int
     */
    public function getTotalPriceIncludingTax()
    {
        return $this->container['total_price_including_tax'];
    }

    /**
     * Sets total_price_including_tax
     *
     * @param int $total_price_including_tax total_price_including_tax
     *
     * @return $this
     */
    public function setTotalPriceIncludingTax($total_price_including_tax)
    {
        $this->container['total_price_including_tax'] = $total_price_including_tax;

        return $this;
    }

    /**
     * Gets total_tax_amount
     *
     * @return int
     */
    public function getTotalTaxAmount()
    {
        return $this->container['total_tax_amount'];
    }

    /**
     * Sets total_tax_amount
     *
     * @param int $total_tax_amount total_tax_amount
     *
     * @return $this
     */
    public function setTotalTaxAmount($total_tax_amount)
    {
        $this->container['total_tax_amount'] = $total_tax_amount;

        return $this;
    }

    /**
     * Gets total_price_excluding_tax
     *
     * @return int
     */
    public function getTotalPriceExcludingTax()
    {
        return $this->container['total_price_excluding_tax'];
    }

    /**
     * Sets total_price_excluding_tax
     *
     * @param int $total_price_excluding_tax total_price_excluding_tax
     *
     * @return $this
     */
    public function setTotalPriceExcludingTax($total_price_excluding_tax)
    {
        $this->container['total_price_excluding_tax'] = $total_price_excluding_tax;

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


