<?php
/**
 * OrderDataPaymentInfo
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
 * OrderDataPaymentInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderDataPaymentInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDataPaymentInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'additional_info' => 'string',
        'amount' => '\OpenAPI\Client\Model\OrderMoney',
        'fee' => '\OpenAPI\Client\Model\OrderMoney',
        'vat_amount' => '\OpenAPI\Client\Model\OrderMoney',
        'vat_percentage' => 'float',
        'vat_inaccurate' => 'bool',
        'vat_calculated' => 'bool',
        'title' => '\OpenAPI\Client\Model\OrderLocalizedText',
        'label' => '\OpenAPI\Client\Model\OrderLocalizedText'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'additional_info' => null,
        'amount' => null,
        'fee' => null,
        'vat_amount' => null,
        'vat_percentage' => 'float',
        'vat_inaccurate' => null,
        'vat_calculated' => null,
        'title' => null,
        'label' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
        'additional_info' => false,
        'amount' => false,
        'fee' => false,
        'vat_amount' => false,
        'vat_percentage' => false,
        'vat_inaccurate' => false,
        'vat_calculated' => false,
        'title' => false,
        'label' => false
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
        'code' => 'code',
        'additional_info' => 'additionalInfo',
        'amount' => 'amount',
        'fee' => 'fee',
        'vat_amount' => 'vatAmount',
        'vat_percentage' => 'vatPercentage',
        'vat_inaccurate' => 'vatInaccurate',
        'vat_calculated' => 'vatCalculated',
        'title' => 'title',
        'label' => 'label'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'additional_info' => 'setAdditionalInfo',
        'amount' => 'setAmount',
        'fee' => 'setFee',
        'vat_amount' => 'setVatAmount',
        'vat_percentage' => 'setVatPercentage',
        'vat_inaccurate' => 'setVatInaccurate',
        'vat_calculated' => 'setVatCalculated',
        'title' => 'setTitle',
        'label' => 'setLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'additional_info' => 'getAdditionalInfo',
        'amount' => 'getAmount',
        'fee' => 'getFee',
        'vat_amount' => 'getVatAmount',
        'vat_percentage' => 'getVatPercentage',
        'vat_inaccurate' => 'getVatInaccurate',
        'vat_calculated' => 'getVatCalculated',
        'title' => 'getTitle',
        'label' => 'getLabel'
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('additional_info', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('vat_amount', $data ?? [], null);
        $this->setIfExists('vat_percentage', $data ?? [], null);
        $this->setIfExists('vat_inaccurate', $data ?? [], null);
        $this->setIfExists('vat_calculated', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
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

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets additional_info
     *
     * @return string|null
     */
    public function getAdditionalInfo()
    {
        return $this->container['additional_info'];
    }

    /**
     * Sets additional_info
     *
     * @param string|null $additional_info additional_info
     *
     * @return self
     */
    public function setAdditionalInfo($additional_info)
    {
        if (is_null($additional_info)) {
            throw new \InvalidArgumentException('non-nullable additional_info cannot be null');
        }
        $this->container['additional_info'] = $additional_info;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \OpenAPI\Client\Model\OrderMoney
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \OpenAPI\Client\Model\OrderMoney $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \OpenAPI\Client\Model\OrderMoney|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \OpenAPI\Client\Model\OrderMoney|null $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        if (is_null($fee)) {
            throw new \InvalidArgumentException('non-nullable fee cannot be null');
        }
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets vat_amount
     *
     * @return \OpenAPI\Client\Model\OrderMoney|null
     */
    public function getVatAmount()
    {
        return $this->container['vat_amount'];
    }

    /**
     * Sets vat_amount
     *
     * @param \OpenAPI\Client\Model\OrderMoney|null $vat_amount vat_amount
     *
     * @return self
     */
    public function setVatAmount($vat_amount)
    {
        if (is_null($vat_amount)) {
            throw new \InvalidArgumentException('non-nullable vat_amount cannot be null');
        }
        $this->container['vat_amount'] = $vat_amount;

        return $this;
    }

    /**
     * Gets vat_percentage
     *
     * @return float|null
     */
    public function getVatPercentage()
    {
        return $this->container['vat_percentage'];
    }

    /**
     * Sets vat_percentage
     *
     * @param float|null $vat_percentage vat_percentage
     *
     * @return self
     */
    public function setVatPercentage($vat_percentage)
    {
        if (is_null($vat_percentage)) {
            throw new \InvalidArgumentException('non-nullable vat_percentage cannot be null');
        }
        $this->container['vat_percentage'] = $vat_percentage;

        return $this;
    }

    /**
     * Gets vat_inaccurate
     *
     * @return bool|null
     */
    public function getVatInaccurate()
    {
        return $this->container['vat_inaccurate'];
    }

    /**
     * Sets vat_inaccurate
     *
     * @param bool|null $vat_inaccurate vat_inaccurate
     *
     * @return self
     */
    public function setVatInaccurate($vat_inaccurate)
    {
        if (is_null($vat_inaccurate)) {
            throw new \InvalidArgumentException('non-nullable vat_inaccurate cannot be null');
        }
        $this->container['vat_inaccurate'] = $vat_inaccurate;

        return $this;
    }

    /**
     * Gets vat_calculated
     *
     * @return bool|null
     */
    public function getVatCalculated()
    {
        return $this->container['vat_calculated'];
    }

    /**
     * Sets vat_calculated
     *
     * @param bool|null $vat_calculated vat_calculated
     *
     * @return self
     */
    public function setVatCalculated($vat_calculated)
    {
        if (is_null($vat_calculated)) {
            throw new \InvalidArgumentException('non-nullable vat_calculated cannot be null');
        }
        $this->container['vat_calculated'] = $vat_calculated;

        return $this;
    }

    /**
     * Gets title
     *
     * @return \OpenAPI\Client\Model\OrderLocalizedText|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param \OpenAPI\Client\Model\OrderLocalizedText|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \OpenAPI\Client\Model\OrderLocalizedText|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \OpenAPI\Client\Model\OrderLocalizedText|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

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


