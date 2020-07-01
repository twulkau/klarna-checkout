<?php
/**
 * AggregatedOrderPaymentProviderV2
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
 * AggregatedOrderPaymentProviderV2 Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Checkout
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AggregatedOrderPaymentProviderV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AggregatedOrderPaymentProviderV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'fee' => 'int',
        'description' => 'string',
        'label' => 'string',
        'redirect_uri' => 'string',
        'image_uri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'fee' => 'int64',
        'description' => null,
        'label' => null,
        'redirect_uri' => null,
        'image_uri' => null
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
        'name' => 'name',
        'fee' => 'fee',
        'description' => 'description',
        'label' => 'label',
        'redirect_uri' => 'redirect_uri',
        'image_uri' => 'image_uri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'fee' => 'setFee',
        'description' => 'setDescription',
        'label' => 'setLabel',
        'redirect_uri' => 'setRedirectUri',
        'image_uri' => 'setImageUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'fee' => 'getFee',
        'description' => 'getDescription',
        'label' => 'getLabel',
        'redirect_uri' => 'getRedirectUri',
        'image_uri' => 'getImageUri'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['redirect_uri'] = isset($data['redirect_uri']) ? $data['redirect_uri'] : null;
        $this->container['image_uri'] = isset($data['image_uri']) ? $data['image_uri'] : null;
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
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 500)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 500)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) < 0)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['redirect_uri'] === null) {
            $invalidProperties[] = "'redirect_uri' can't be null";
        }
        if ((mb_strlen($this->container['redirect_uri']) > 2000)) {
            $invalidProperties[] = "invalid value for 'redirect_uri', the character length must be smaller than or equal to 2000.";
        }

        if ((mb_strlen($this->container['redirect_uri']) < 7)) {
            $invalidProperties[] = "invalid value for 'redirect_uri', the character length must be bigger than or equal to 7.";
        }

        if (!is_null($this->container['image_uri']) && (mb_strlen($this->container['image_uri']) > 2000)) {
            $invalidProperties[] = "invalid value for 'image_uri', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['image_uri']) && (mb_strlen($this->container['image_uri']) < 7)) {
            $invalidProperties[] = "invalid value for 'image_uri', the character length must be bigger than or equal to 7.";
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AggregatedOrderPaymentProviderV2., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AggregatedOrderPaymentProviderV2., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return int
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param int $fee fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

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
        if (!is_null($description) && (mb_strlen($description) > 500)) {
            throw new \InvalidArgumentException('invalid length for $description when calling AggregatedOrderPaymentProviderV2., must be smaller than or equal to 500.');
        }
        if (!is_null($description) && (mb_strlen($description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $description when calling AggregatedOrderPaymentProviderV2., must be bigger than or equal to 0.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        if (!is_null($label) && (mb_strlen($label) > 500)) {
            throw new \InvalidArgumentException('invalid length for $label when calling AggregatedOrderPaymentProviderV2., must be smaller than or equal to 500.');
        }
        if (!is_null($label) && (mb_strlen($label) < 0)) {
            throw new \InvalidArgumentException('invalid length for $label when calling AggregatedOrderPaymentProviderV2., must be bigger than or equal to 0.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets redirect_uri
     *
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     *
     * @param string $redirect_uri redirect_uri
     *
     * @return $this
     */
    public function setRedirectUri($redirect_uri)
    {
        if ((mb_strlen($redirect_uri) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $redirect_uri when calling AggregatedOrderPaymentProviderV2., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($redirect_uri) < 7)) {
            throw new \InvalidArgumentException('invalid length for $redirect_uri when calling AggregatedOrderPaymentProviderV2., must be bigger than or equal to 7.');
        }

        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }

    /**
     * Gets image_uri
     *
     * @return string
     */
    public function getImageUri()
    {
        return $this->container['image_uri'];
    }

    /**
     * Sets image_uri
     *
     * @param string $image_uri image_uri
     *
     * @return $this
     */
    public function setImageUri($image_uri)
    {
        if (!is_null($image_uri) && (mb_strlen($image_uri) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $image_uri when calling AggregatedOrderPaymentProviderV2., must be smaller than or equal to 2000.');
        }
        if (!is_null($image_uri) && (mb_strlen($image_uri) < 7)) {
            throw new \InvalidArgumentException('invalid length for $image_uri when calling AggregatedOrderPaymentProviderV2., must be bigger than or equal to 7.');
        }

        $this->container['image_uri'] = $image_uri;

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


