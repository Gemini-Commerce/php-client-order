<?php
/**
 * OrderCreateOrderRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * order Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OrderCreateOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderCreateOrderRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'orderCreateOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tenant_id' => 'string',
        'number' => 'string',
        'channel' => 'string',
        'market' => 'string',
        'locale' => 'string',
        'items' => '\OpenAPI\Client\Model\OrderOrderDataItem[]',
        'payments_info' => '\OpenAPI\Client\Model\OrderDataPaymentInfo[]',
        'shipments_info' => '\OpenAPI\Client\Model\OrderDataShipmentInfo[]',
        'promotions' => '\OpenAPI\Client\Model\OrderDataPromotionInfo[]',
        'payments' => '\OpenAPI\Client\Model\CreateOrderRequestInitialPayment[]',
        'currency' => '\OpenAPI\Client\Model\OrderCurrency',
        'subtotals' => 'array<string,\OpenAPI\Client\Model\OrderDataSubtotal>',
        'totals' => 'array<string,\OpenAPI\Client\Model\OrderDataTotal>',
        'vat_included' => 'bool',
        'billing_address' => '\OpenAPI\Client\Model\OrderPostalAddress',
        'shipping_address' => '\OpenAPI\Client\Model\OrderPostalAddress',
        'customer_info' => '\OpenAPI\Client\Model\OrderDataCustomerInfo',
        'cart_grn' => 'string',
        'on_hold' => 'bool',
        'notes' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tenant_id' => null,
        'number' => null,
        'channel' => null,
        'market' => null,
        'locale' => null,
        'items' => null,
        'payments_info' => null,
        'shipments_info' => null,
        'promotions' => null,
        'payments' => null,
        'currency' => null,
        'subtotals' => null,
        'totals' => null,
        'vat_included' => null,
        'billing_address' => null,
        'shipping_address' => null,
        'customer_info' => null,
        'cart_grn' => null,
        'on_hold' => null,
        'notes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tenant_id' => false,
        'number' => false,
        'channel' => false,
        'market' => false,
        'locale' => false,
        'items' => false,
        'payments_info' => false,
        'shipments_info' => false,
        'promotions' => false,
        'payments' => false,
        'currency' => false,
        'subtotals' => false,
        'totals' => false,
        'vat_included' => false,
        'billing_address' => false,
        'shipping_address' => false,
        'customer_info' => false,
        'cart_grn' => false,
        'on_hold' => false,
        'notes' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tenant_id' => 'tenantId',
        'number' => 'number',
        'channel' => 'channel',
        'market' => 'market',
        'locale' => 'locale',
        'items' => 'items',
        'payments_info' => 'paymentsInfo',
        'shipments_info' => 'shipmentsInfo',
        'promotions' => 'promotions',
        'payments' => 'payments',
        'currency' => 'currency',
        'subtotals' => 'subtotals',
        'totals' => 'totals',
        'vat_included' => 'vatIncluded',
        'billing_address' => 'billingAddress',
        'shipping_address' => 'shippingAddress',
        'customer_info' => 'customerInfo',
        'cart_grn' => 'cartGrn',
        'on_hold' => 'onHold',
        'notes' => 'notes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tenant_id' => 'setTenantId',
        'number' => 'setNumber',
        'channel' => 'setChannel',
        'market' => 'setMarket',
        'locale' => 'setLocale',
        'items' => 'setItems',
        'payments_info' => 'setPaymentsInfo',
        'shipments_info' => 'setShipmentsInfo',
        'promotions' => 'setPromotions',
        'payments' => 'setPayments',
        'currency' => 'setCurrency',
        'subtotals' => 'setSubtotals',
        'totals' => 'setTotals',
        'vat_included' => 'setVatIncluded',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'customer_info' => 'setCustomerInfo',
        'cart_grn' => 'setCartGrn',
        'on_hold' => 'setOnHold',
        'notes' => 'setNotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tenant_id' => 'getTenantId',
        'number' => 'getNumber',
        'channel' => 'getChannel',
        'market' => 'getMarket',
        'locale' => 'getLocale',
        'items' => 'getItems',
        'payments_info' => 'getPaymentsInfo',
        'shipments_info' => 'getShipmentsInfo',
        'promotions' => 'getPromotions',
        'payments' => 'getPayments',
        'currency' => 'getCurrency',
        'subtotals' => 'getSubtotals',
        'totals' => 'getTotals',
        'vat_included' => 'getVatIncluded',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
        'customer_info' => 'getCustomerInfo',
        'cart_grn' => 'getCartGrn',
        'on_hold' => 'getOnHold',
        'notes' => 'getNotes'
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
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Associative array for storing additional properties
     *
     * @var mixed[]
     */
    protected $additionalProperties = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('tenant_id', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('market', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('payments_info', $data ?? [], null);
        $this->setIfExists('shipments_info', $data ?? [], null);
        $this->setIfExists('promotions', $data ?? [], null);
        $this->setIfExists('payments', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('subtotals', $data ?? [], null);
        $this->setIfExists('totals', $data ?? [], null);
        $this->setIfExists('vat_included', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('shipping_address', $data ?? [], null);
        $this->setIfExists('customer_info', $data ?? [], null);
        $this->setIfExists('cart_grn', $data ?? [], null);
        $this->setIfExists('on_hold', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tenant_id'] === null) {
            $invalidProperties[] = "'tenant_id' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['market'] === null) {
            $invalidProperties[] = "'market' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['subtotals'] === null) {
            $invalidProperties[] = "'subtotals' can't be null";
        }
        if ($this->container['totals'] === null) {
            $invalidProperties[] = "'totals' can't be null";
        }
        if ($this->container['vat_included'] === null) {
            $invalidProperties[] = "'vat_included' can't be null";
        }
        if ($this->container['billing_address'] === null) {
            $invalidProperties[] = "'billing_address' can't be null";
        }
        if ($this->container['shipping_address'] === null) {
            $invalidProperties[] = "'shipping_address' can't be null";
        }
        if ($this->container['customer_info'] === null) {
            $invalidProperties[] = "'customer_info' can't be null";
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
     * Gets tenant_id
     *
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string $tenant_id tenant_id
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        if (is_null($tenant_id)) {
            throw new \InvalidArgumentException('non-nullable tenant_id cannot be null');
        }
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string|null $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets market
     *
     * @return string
     */
    public function getMarket()
    {
        return $this->container['market'];
    }

    /**
     * Sets market
     *
     * @param string $market market
     *
     * @return self
     */
    public function setMarket($market)
    {
        if (is_null($market)) {
            throw new \InvalidArgumentException('non-nullable market cannot be null');
        }
        $this->container['market'] = $market;

        return $this;
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
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\OrderOrderDataItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\OrderOrderDataItem[] $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets payments_info
     *
     * @return \OpenAPI\Client\Model\OrderDataPaymentInfo[]|null
     */
    public function getPaymentsInfo()
    {
        return $this->container['payments_info'];
    }

    /**
     * Sets payments_info
     *
     * @param \OpenAPI\Client\Model\OrderDataPaymentInfo[]|null $payments_info payments_info
     *
     * @return self
     */
    public function setPaymentsInfo($payments_info)
    {
        if (is_null($payments_info)) {
            throw new \InvalidArgumentException('non-nullable payments_info cannot be null');
        }
        $this->container['payments_info'] = $payments_info;

        return $this;
    }

    /**
     * Gets shipments_info
     *
     * @return \OpenAPI\Client\Model\OrderDataShipmentInfo[]|null
     */
    public function getShipmentsInfo()
    {
        return $this->container['shipments_info'];
    }

    /**
     * Sets shipments_info
     *
     * @param \OpenAPI\Client\Model\OrderDataShipmentInfo[]|null $shipments_info shipments_info
     *
     * @return self
     */
    public function setShipmentsInfo($shipments_info)
    {
        if (is_null($shipments_info)) {
            throw new \InvalidArgumentException('non-nullable shipments_info cannot be null');
        }
        $this->container['shipments_info'] = $shipments_info;

        return $this;
    }

    /**
     * Gets promotions
     *
     * @return \OpenAPI\Client\Model\OrderDataPromotionInfo[]|null
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     *
     * @param \OpenAPI\Client\Model\OrderDataPromotionInfo[]|null $promotions promotions
     *
     * @return self
     */
    public function setPromotions($promotions)
    {
        if (is_null($promotions)) {
            throw new \InvalidArgumentException('non-nullable promotions cannot be null');
        }
        $this->container['promotions'] = $promotions;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \OpenAPI\Client\Model\CreateOrderRequestInitialPayment[]|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \OpenAPI\Client\Model\CreateOrderRequestInitialPayment[]|null $payments payments
     *
     * @return self
     */
    public function setPayments($payments)
    {
        if (is_null($payments)) {
            throw new \InvalidArgumentException('non-nullable payments cannot be null');
        }
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \OpenAPI\Client\Model\OrderCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\Client\Model\OrderCurrency $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets subtotals
     *
     * @return array<string,\OpenAPI\Client\Model\OrderDataSubtotal>
     */
    public function getSubtotals()
    {
        return $this->container['subtotals'];
    }

    /**
     * Sets subtotals
     *
     * @param array<string,\OpenAPI\Client\Model\OrderDataSubtotal> $subtotals subtotals
     *
     * @return self
     */
    public function setSubtotals($subtotals)
    {
        if (is_null($subtotals)) {
            throw new \InvalidArgumentException('non-nullable subtotals cannot be null');
        }
        $this->container['subtotals'] = $subtotals;

        return $this;
    }

    /**
     * Gets totals
     *
     * @return array<string,\OpenAPI\Client\Model\OrderDataTotal>
     */
    public function getTotals()
    {
        return $this->container['totals'];
    }

    /**
     * Sets totals
     *
     * @param array<string,\OpenAPI\Client\Model\OrderDataTotal> $totals totals
     *
     * @return self
     */
    public function setTotals($totals)
    {
        if (is_null($totals)) {
            throw new \InvalidArgumentException('non-nullable totals cannot be null');
        }
        $this->container['totals'] = $totals;

        return $this;
    }

    /**
     * Gets vat_included
     *
     * @return bool
     */
    public function getVatIncluded()
    {
        return $this->container['vat_included'];
    }

    /**
     * Sets vat_included
     *
     * @param bool $vat_included vat_included
     *
     * @return self
     */
    public function setVatIncluded($vat_included)
    {
        if (is_null($vat_included)) {
            throw new \InvalidArgumentException('non-nullable vat_included cannot be null');
        }
        $this->container['vat_included'] = $vat_included;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \OpenAPI\Client\Model\OrderPostalAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \OpenAPI\Client\Model\OrderPostalAddress $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            throw new \InvalidArgumentException('non-nullable billing_address cannot be null');
        }
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \OpenAPI\Client\Model\OrderPostalAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \OpenAPI\Client\Model\OrderPostalAddress $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        if (is_null($shipping_address)) {
            throw new \InvalidArgumentException('non-nullable shipping_address cannot be null');
        }
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets customer_info
     *
     * @return \OpenAPI\Client\Model\OrderDataCustomerInfo
     */
    public function getCustomerInfo()
    {
        return $this->container['customer_info'];
    }

    /**
     * Sets customer_info
     *
     * @param \OpenAPI\Client\Model\OrderDataCustomerInfo $customer_info customer_info
     *
     * @return self
     */
    public function setCustomerInfo($customer_info)
    {
        if (is_null($customer_info)) {
            throw new \InvalidArgumentException('non-nullable customer_info cannot be null');
        }
        $this->container['customer_info'] = $customer_info;

        return $this;
    }

    /**
     * Gets cart_grn
     *
     * @return string|null
     */
    public function getCartGrn()
    {
        return $this->container['cart_grn'];
    }

    /**
     * Sets cart_grn
     *
     * @param string|null $cart_grn cart_grn
     *
     * @return self
     */
    public function setCartGrn($cart_grn)
    {
        if (is_null($cart_grn)) {
            throw new \InvalidArgumentException('non-nullable cart_grn cannot be null');
        }
        $this->container['cart_grn'] = $cart_grn;

        return $this;
    }

    /**
     * Gets on_hold
     *
     * @return bool|null
     */
    public function getOnHold()
    {
        return $this->container['on_hold'];
    }

    /**
     * Sets on_hold
     *
     * @param bool|null $on_hold on_hold
     *
     * @return self
     */
    public function setOnHold($on_hold)
    {
        if (is_null($on_hold)) {
            throw new \InvalidArgumentException('non-nullable on_hold cannot be null');
        }
        $this->container['on_hold'] = $on_hold;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    public static function withAdditionalProperties(): bool
    {
        return self::$withAdditionalProperties;
    }


    public function setAdditionalProperty($name, $value)
    {
        throw new \InvalidArgumentException(
            sprintf(
                "This model cannot have additional properties"
            )
        );
    }

    public function getAdditionalProperty($name)
    {
        return $this->additionalProperties[$name];
    }

    public function hasAdditionalProperty($name): bool
    {
        return array_key_exists($name, $this->additionalProperties);
    }

    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
}


