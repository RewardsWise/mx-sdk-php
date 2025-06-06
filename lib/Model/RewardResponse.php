<?php
/**
 * RewardResponse
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MX Platform API
 *
 * The MX Platform API is a powerful, fully-featured API designed to make aggregating and enhancing financial data easy and reliable. It can seamlessly connect your app or website to tens of thousands of financial institutions.
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
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
 * RewardResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RewardResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RewardResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_guid' => 'string',
        'balance_type' => 'string',
        'balance' => 'int',
        'created_at' => 'string',
        'description' => 'string',
        'expires_on' => 'string',
        'guid' => 'string',
        'member_guid' => 'string',
        'unit_type' => 'string',
        'updated_at' => 'string',
        'user_guid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_guid' => null,
        'balance_type' => null,
        'balance' => null,
        'created_at' => null,
        'description' => null,
        'expires_on' => null,
        'guid' => null,
        'member_guid' => null,
        'unit_type' => null,
        'updated_at' => null,
        'user_guid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_guid' => false,
        'balance_type' => false,
        'balance' => false,
        'created_at' => false,
        'description' => false,
        'expires_on' => false,
        'guid' => false,
        'member_guid' => false,
        'unit_type' => false,
        'updated_at' => false,
        'user_guid' => false
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
        'account_guid' => 'account_guid',
        'balance_type' => 'balance_type',
        'balance' => 'balance',
        'created_at' => 'created_at',
        'description' => 'description',
        'expires_on' => 'expires_on',
        'guid' => 'guid',
        'member_guid' => 'member_guid',
        'unit_type' => 'unit_type',
        'updated_at' => 'updated_at',
        'user_guid' => 'user_guid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_guid' => 'setAccountGuid',
        'balance_type' => 'setBalanceType',
        'balance' => 'setBalance',
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription',
        'expires_on' => 'setExpiresOn',
        'guid' => 'setGuid',
        'member_guid' => 'setMemberGuid',
        'unit_type' => 'setUnitType',
        'updated_at' => 'setUpdatedAt',
        'user_guid' => 'setUserGuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_guid' => 'getAccountGuid',
        'balance_type' => 'getBalanceType',
        'balance' => 'getBalance',
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription',
        'expires_on' => 'getExpiresOn',
        'guid' => 'getGuid',
        'member_guid' => 'getMemberGuid',
        'unit_type' => 'getUnitType',
        'updated_at' => 'getUpdatedAt',
        'user_guid' => 'getUserGuid'
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
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('account_guid', $data ?? [], null);
        $this->setIfExists('balance_type', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('expires_on', $data ?? [], null);
        $this->setIfExists('guid', $data ?? [], null);
        $this->setIfExists('member_guid', $data ?? [], null);
        $this->setIfExists('unit_type', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('user_guid', $data ?? [], null);
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
     * Gets account_guid
     *
     * @return string|null
     */
    public function getAccountGuid()
    {
        return $this->container['account_guid'];
    }

    /**
     * Sets account_guid
     *
     * @param string|null $account_guid account_guid
     *
     * @return self
     */
    public function setAccountGuid($account_guid)
    {
        if (is_null($account_guid)) {
            throw new \InvalidArgumentException('non-nullable account_guid cannot be null');
        }
        $this->container['account_guid'] = $account_guid;

        return $this;
    }

    /**
     * Gets balance_type
     *
     * @return string|null
     */
    public function getBalanceType()
    {
        return $this->container['balance_type'];
    }

    /**
     * Sets balance_type
     *
     * @param string|null $balance_type balance_type
     *
     * @return self
     */
    public function setBalanceType($balance_type)
    {
        if (is_null($balance_type)) {
            throw new \InvalidArgumentException('non-nullable balance_type cannot be null');
        }
        $this->container['balance_type'] = $balance_type;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return int|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param int|null $balance balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets expires_on
     *
     * @return string|null
     */
    public function getExpiresOn()
    {
        return $this->container['expires_on'];
    }

    /**
     * Sets expires_on
     *
     * @param string|null $expires_on expires_on
     *
     * @return self
     */
    public function setExpiresOn($expires_on)
    {
        if (is_null($expires_on)) {
            throw new \InvalidArgumentException('non-nullable expires_on cannot be null');
        }
        $this->container['expires_on'] = $expires_on;

        return $this;
    }

    /**
     * Gets guid
     *
     * @return string|null
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
     * Sets guid
     *
     * @param string|null $guid guid
     *
     * @return self
     */
    public function setGuid($guid)
    {
        if (is_null($guid)) {
            throw new \InvalidArgumentException('non-nullable guid cannot be null');
        }
        $this->container['guid'] = $guid;

        return $this;
    }

    /**
     * Gets member_guid
     *
     * @return string|null
     */
    public function getMemberGuid()
    {
        return $this->container['member_guid'];
    }

    /**
     * Sets member_guid
     *
     * @param string|null $member_guid member_guid
     *
     * @return self
     */
    public function setMemberGuid($member_guid)
    {
        if (is_null($member_guid)) {
            throw new \InvalidArgumentException('non-nullable member_guid cannot be null');
        }
        $this->container['member_guid'] = $member_guid;

        return $this;
    }

    /**
     * Gets unit_type
     *
     * @return string|null
     */
    public function getUnitType()
    {
        return $this->container['unit_type'];
    }

    /**
     * Sets unit_type
     *
     * @param string|null $unit_type unit_type
     *
     * @return self
     */
    public function setUnitType($unit_type)
    {
        if (is_null($unit_type)) {
            throw new \InvalidArgumentException('non-nullable unit_type cannot be null');
        }
        $this->container['unit_type'] = $unit_type;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets user_guid
     *
     * @return string|null
     */
    public function getUserGuid()
    {
        return $this->container['user_guid'];
    }

    /**
     * Sets user_guid
     *
     * @param string|null $user_guid user_guid
     *
     * @return self
     */
    public function setUserGuid($user_guid)
    {
        if (is_null($user_guid)) {
            throw new \InvalidArgumentException('non-nullable user_guid cannot be null');
        }
        $this->container['user_guid'] = $user_guid;

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
}


