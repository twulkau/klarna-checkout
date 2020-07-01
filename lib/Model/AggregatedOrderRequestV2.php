<?php
/**
 * AggregatedOrderRequestV2
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
 * AggregatedOrderRequestV2 Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Checkout
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AggregatedOrderRequestV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AggregatedOrderRequestV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'locale' => 'string',
        'cart' => '\Klarna\Checkout\Model\AggregatedOrderCartV2',
        'customer' => '\Klarna\Checkout\Model\CustomerV2',
        'gui' => '\Klarna\Checkout\Model\Gui',
        'merchant' => '\Klarna\Checkout\Model\MerchantAggregatedOrderV2',
        'options' => '\Klarna\Checkout\Model\Options',
        'attachment' => '\Klarna\Checkout\Model\Attachment',
        'recurring' => 'bool',
        'reservation' => 'string',
        'id' => 'string',
        'started_at' => '\DateTime',
        'completed_at' => '\DateTime',
        'last_modified_at' => '\DateTime',
        'expires_at' => '\DateTime',
        'purchase_country' => 'string',
        'purchase_currency' => 'string',
        'merchant_reference' => 'map[string,string]',
        'billing_address' => '\Klarna\Checkout\Model\AggregatedOrderAddressV2',
        'shipping_address' => '\Klarna\Checkout\Model\AggregatedOrderAddressV2',
        'trader_id' => 'string',
        'external_payment_methods' => '\Klarna\Checkout\Model\AggregatedOrderPaymentProviderV2[]',
        'external_checkouts' => '\Klarna\Checkout\Model\AggregatedOrderPaymentProviderV2[]',
        'merchant_order_data' => 'string',
        'merchant_requested' => '\Klarna\Checkout\Model\MerchantRequested'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'locale' => null,
        'cart' => null,
        'customer' => null,
        'gui' => null,
        'merchant' => null,
        'options' => null,
        'attachment' => null,
        'recurring' => null,
        'reservation' => null,
        'id' => null,
        'started_at' => 'date-time',
        'completed_at' => 'date-time',
        'last_modified_at' => 'date-time',
        'expires_at' => 'date-time',
        'purchase_country' => null,
        'purchase_currency' => null,
        'merchant_reference' => null,
        'billing_address' => null,
        'shipping_address' => null,
        'trader_id' => null,
        'external_payment_methods' => null,
        'external_checkouts' => null,
        'merchant_order_data' => null,
        'merchant_requested' => null
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
        'locale' => 'locale',
        'cart' => 'cart',
        'customer' => 'customer',
        'gui' => 'gui',
        'merchant' => 'merchant',
        'options' => 'options',
        'attachment' => 'attachment',
        'recurring' => 'recurring',
        'reservation' => 'reservation',
        'id' => 'id',
        'started_at' => 'started_at',
        'completed_at' => 'completed_at',
        'last_modified_at' => 'last_modified_at',
        'expires_at' => 'expires_at',
        'purchase_country' => 'purchase_country',
        'purchase_currency' => 'purchase_currency',
        'merchant_reference' => 'merchant_reference',
        'billing_address' => 'billing_address',
        'shipping_address' => 'shipping_address',
        'trader_id' => 'trader_id',
        'external_payment_methods' => 'external_payment_methods',
        'external_checkouts' => 'external_checkouts',
        'merchant_order_data' => 'merchant_order_data',
        'merchant_requested' => 'merchant_requested'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locale' => 'setLocale',
        'cart' => 'setCart',
        'customer' => 'setCustomer',
        'gui' => 'setGui',
        'merchant' => 'setMerchant',
        'options' => 'setOptions',
        'attachment' => 'setAttachment',
        'recurring' => 'setRecurring',
        'reservation' => 'setReservation',
        'id' => 'setId',
        'started_at' => 'setStartedAt',
        'completed_at' => 'setCompletedAt',
        'last_modified_at' => 'setLastModifiedAt',
        'expires_at' => 'setExpiresAt',
        'purchase_country' => 'setPurchaseCountry',
        'purchase_currency' => 'setPurchaseCurrency',
        'merchant_reference' => 'setMerchantReference',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'trader_id' => 'setTraderId',
        'external_payment_methods' => 'setExternalPaymentMethods',
        'external_checkouts' => 'setExternalCheckouts',
        'merchant_order_data' => 'setMerchantOrderData',
        'merchant_requested' => 'setMerchantRequested'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locale' => 'getLocale',
        'cart' => 'getCart',
        'customer' => 'getCustomer',
        'gui' => 'getGui',
        'merchant' => 'getMerchant',
        'options' => 'getOptions',
        'attachment' => 'getAttachment',
        'recurring' => 'getRecurring',
        'reservation' => 'getReservation',
        'id' => 'getId',
        'started_at' => 'getStartedAt',
        'completed_at' => 'getCompletedAt',
        'last_modified_at' => 'getLastModifiedAt',
        'expires_at' => 'getExpiresAt',
        'purchase_country' => 'getPurchaseCountry',
        'purchase_currency' => 'getPurchaseCurrency',
        'merchant_reference' => 'getMerchantReference',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
        'trader_id' => 'getTraderId',
        'external_payment_methods' => 'getExternalPaymentMethods',
        'external_checkouts' => 'getExternalCheckouts',
        'merchant_order_data' => 'getMerchantOrderData',
        'merchant_requested' => 'getMerchantRequested'
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
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['cart'] = isset($data['cart']) ? $data['cart'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['gui'] = isset($data['gui']) ? $data['gui'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['attachment'] = isset($data['attachment']) ? $data['attachment'] : null;
        $this->container['recurring'] = isset($data['recurring']) ? $data['recurring'] : false;
        $this->container['reservation'] = isset($data['reservation']) ? $data['reservation'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['started_at'] = isset($data['started_at']) ? $data['started_at'] : null;
        $this->container['completed_at'] = isset($data['completed_at']) ? $data['completed_at'] : null;
        $this->container['last_modified_at'] = isset($data['last_modified_at']) ? $data['last_modified_at'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['purchase_country'] = isset($data['purchase_country']) ? $data['purchase_country'] : null;
        $this->container['purchase_currency'] = isset($data['purchase_currency']) ? $data['purchase_currency'] : null;
        $this->container['merchant_reference'] = isset($data['merchant_reference']) ? $data['merchant_reference'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['trader_id'] = isset($data['trader_id']) ? $data['trader_id'] : null;
        $this->container['external_payment_methods'] = isset($data['external_payment_methods']) ? $data['external_payment_methods'] : null;
        $this->container['external_checkouts'] = isset($data['external_checkouts']) ? $data['external_checkouts'] : null;
        $this->container['merchant_order_data'] = isset($data['merchant_order_data']) ? $data['merchant_order_data'] : null;
        $this->container['merchant_requested'] = isset($data['merchant_requested']) ? $data['merchant_requested'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['locale']) && !preg_match("/^(?:[A-Za-z]{2,2}-[A-Za-z]{2,2})|(?:sv|SV)$/", $this->container['locale'])) {
            $invalidProperties[] = "invalid value for 'locale', must be conform to the pattern /^(?:[A-Za-z]{2,2}-[A-Za-z]{2,2})|(?:sv|SV)$/.";
        }

        if ($this->container['cart'] === null) {
            $invalidProperties[] = "'cart' can't be null";
        }
        if (!is_null($this->container['purchase_country']) && !preg_match("/^[A-Za-z]{2,2}$/", $this->container['purchase_country'])) {
            $invalidProperties[] = "invalid value for 'purchase_country', must be conform to the pattern /^[A-Za-z]{2,2}$/.";
        }

        if (!is_null($this->container['purchase_currency']) && !preg_match("/^[A-Za-z]{3,3}$/", $this->container['purchase_currency'])) {
            $invalidProperties[] = "invalid value for 'purchase_currency', must be conform to the pattern /^[A-Za-z]{3,3}$/.";
        }

        if (!is_null($this->container['merchant_order_data']) && (mb_strlen($this->container['merchant_order_data']) > 6000)) {
            $invalidProperties[] = "invalid value for 'merchant_order_data', the character length must be smaller than or equal to 6000.";
        }

        if (!is_null($this->container['merchant_order_data']) && (mb_strlen($this->container['merchant_order_data']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchant_order_data', the character length must be bigger than or equal to 0.";
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
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {

        if (!is_null($locale) && (!preg_match("/^(?:[A-Za-z]{2,2}-[A-Za-z]{2,2})|(?:sv|SV)$/", $locale))) {
            throw new \InvalidArgumentException("invalid value for $locale when calling AggregatedOrderRequestV2., must conform to the pattern /^(?:[A-Za-z]{2,2}-[A-Za-z]{2,2})|(?:sv|SV)$/.");
        }

        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets cart
     *
     * @return \Klarna\Checkout\Model\AggregatedOrderCartV2
     */
    public function getCart()
    {
        return $this->container['cart'];
    }

    /**
     * Sets cart
     *
     * @param \Klarna\Checkout\Model\AggregatedOrderCartV2 $cart cart
     *
     * @return $this
     */
    public function setCart($cart)
    {
        $this->container['cart'] = $cart;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Klarna\Checkout\Model\CustomerV2
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Klarna\Checkout\Model\CustomerV2 $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets gui
     *
     * @return \Klarna\Checkout\Model\Gui
     */
    public function getGui()
    {
        return $this->container['gui'];
    }

    /**
     * Sets gui
     *
     * @param \Klarna\Checkout\Model\Gui $gui gui
     *
     * @return $this
     */
    public function setGui($gui)
    {
        $this->container['gui'] = $gui;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return \Klarna\Checkout\Model\MerchantAggregatedOrderV2
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param \Klarna\Checkout\Model\MerchantAggregatedOrderV2 $merchant merchant
     *
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Klarna\Checkout\Model\Options
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Klarna\Checkout\Model\Options $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets attachment
     *
     * @return \Klarna\Checkout\Model\Attachment
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     *
     * @param \Klarna\Checkout\Model\Attachment $attachment attachment
     *
     * @return $this
     */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;

        return $this;
    }

    /**
     * Gets recurring
     *
     * @return bool
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Sets recurring
     *
     * @param bool $recurring recurring
     *
     * @return $this
     */
    public function setRecurring($recurring)
    {
        $this->container['recurring'] = $recurring;

        return $this;
    }

    /**
     * Gets reservation
     *
     * @return string
     */
    public function getReservation()
    {
        return $this->container['reservation'];
    }

    /**
     * Sets reservation
     *
     * @param string $reservation reservation
     *
     * @return $this
     */
    public function setReservation($reservation)
    {
        $this->container['reservation'] = $reservation;

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
     * Gets started_at
     *
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param \DateTime $started_at started_at
     *
     * @return $this
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets completed_at
     *
     * @return \DateTime
     */
    public function getCompletedAt()
    {
        return $this->container['completed_at'];
    }

    /**
     * Sets completed_at
     *
     * @param \DateTime $completed_at completed_at
     *
     * @return $this
     */
    public function setCompletedAt($completed_at)
    {
        $this->container['completed_at'] = $completed_at;

        return $this;
    }

    /**
     * Gets last_modified_at
     *
     * @return \DateTime
     */
    public function getLastModifiedAt()
    {
        return $this->container['last_modified_at'];
    }

    /**
     * Sets last_modified_at
     *
     * @param \DateTime $last_modified_at last_modified_at
     *
     * @return $this
     */
    public function setLastModifiedAt($last_modified_at)
    {
        $this->container['last_modified_at'] = $last_modified_at;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime $expires_at expires_at
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets purchase_country
     *
     * @return string
     */
    public function getPurchaseCountry()
    {
        return $this->container['purchase_country'];
    }

    /**
     * Sets purchase_country
     *
     * @param string $purchase_country purchase_country
     *
     * @return $this
     */
    public function setPurchaseCountry($purchase_country)
    {

        if (!is_null($purchase_country) && (!preg_match("/^[A-Za-z]{2,2}$/", $purchase_country))) {
            throw new \InvalidArgumentException("invalid value for $purchase_country when calling AggregatedOrderRequestV2., must conform to the pattern /^[A-Za-z]{2,2}$/.");
        }

        $this->container['purchase_country'] = $purchase_country;

        return $this;
    }

    /**
     * Gets purchase_currency
     *
     * @return string
     */
    public function getPurchaseCurrency()
    {
        return $this->container['purchase_currency'];
    }

    /**
     * Sets purchase_currency
     *
     * @param string $purchase_currency purchase_currency
     *
     * @return $this
     */
    public function setPurchaseCurrency($purchase_currency)
    {

        if (!is_null($purchase_currency) && (!preg_match("/^[A-Za-z]{3,3}$/", $purchase_currency))) {
            throw new \InvalidArgumentException("invalid value for $purchase_currency when calling AggregatedOrderRequestV2., must conform to the pattern /^[A-Za-z]{3,3}$/.");
        }

        $this->container['purchase_currency'] = $purchase_currency;

        return $this;
    }

    /**
     * Gets merchant_reference
     *
     * @return map[string,string]
     */
    public function getMerchantReference()
    {
        return $this->container['merchant_reference'];
    }

    /**
     * Sets merchant_reference
     *
     * @param map[string,string] $merchant_reference merchant_reference
     *
     * @return $this
     */
    public function setMerchantReference($merchant_reference)
    {
        $this->container['merchant_reference'] = $merchant_reference;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \Klarna\Checkout\Model\AggregatedOrderAddressV2
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Klarna\Checkout\Model\AggregatedOrderAddressV2 $billing_address billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \Klarna\Checkout\Model\AggregatedOrderAddressV2
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \Klarna\Checkout\Model\AggregatedOrderAddressV2 $shipping_address shipping_address
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets trader_id
     *
     * @return string
     */
    public function getTraderId()
    {
        return $this->container['trader_id'];
    }

    /**
     * Sets trader_id
     *
     * @param string $trader_id trader_id
     *
     * @return $this
     */
    public function setTraderId($trader_id)
    {
        $this->container['trader_id'] = $trader_id;

        return $this;
    }

    /**
     * Gets external_payment_methods
     *
     * @return \Klarna\Checkout\Model\AggregatedOrderPaymentProviderV2[]
     */
    public function getExternalPaymentMethods()
    {
        return $this->container['external_payment_methods'];
    }

    /**
     * Sets external_payment_methods
     *
     * @param \Klarna\Checkout\Model\AggregatedOrderPaymentProviderV2[] $external_payment_methods external_payment_methods
     *
     * @return $this
     */
    public function setExternalPaymentMethods($external_payment_methods)
    {
        $this->container['external_payment_methods'] = $external_payment_methods;

        return $this;
    }

    /**
     * Gets external_checkouts
     *
     * @return \Klarna\Checkout\Model\AggregatedOrderPaymentProviderV2[]
     */
    public function getExternalCheckouts()
    {
        return $this->container['external_checkouts'];
    }

    /**
     * Sets external_checkouts
     *
     * @param \Klarna\Checkout\Model\AggregatedOrderPaymentProviderV2[] $external_checkouts external_checkouts
     *
     * @return $this
     */
    public function setExternalCheckouts($external_checkouts)
    {
        $this->container['external_checkouts'] = $external_checkouts;

        return $this;
    }

    /**
     * Gets merchant_order_data
     *
     * @return string
     */
    public function getMerchantOrderData()
    {
        return $this->container['merchant_order_data'];
    }

    /**
     * Sets merchant_order_data
     *
     * @param string $merchant_order_data merchant_order_data
     *
     * @return $this
     */
    public function setMerchantOrderData($merchant_order_data)
    {
        if (!is_null($merchant_order_data) && (mb_strlen($merchant_order_data) > 6000)) {
            throw new \InvalidArgumentException('invalid length for $merchant_order_data when calling AggregatedOrderRequestV2., must be smaller than or equal to 6000.');
        }
        if (!is_null($merchant_order_data) && (mb_strlen($merchant_order_data) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchant_order_data when calling AggregatedOrderRequestV2., must be bigger than or equal to 0.');
        }

        $this->container['merchant_order_data'] = $merchant_order_data;

        return $this;
    }

    /**
     * Gets merchant_requested
     *
     * @return \Klarna\Checkout\Model\MerchantRequested
     */
    public function getMerchantRequested()
    {
        return $this->container['merchant_requested'];
    }

    /**
     * Sets merchant_requested
     *
     * @param \Klarna\Checkout\Model\MerchantRequested $merchant_requested merchant_requested
     *
     * @return $this
     */
    public function setMerchantRequested($merchant_requested)
    {
        $this->container['merchant_requested'] = $merchant_requested;

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


