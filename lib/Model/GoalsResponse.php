<?php
/**
 * GoalsResponse
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
 * GoalsResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GoalsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GoalsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_guid' => 'string',
        'amount' => 'float',
        'current_amount' => 'float',
        'guid' => 'string',
        'goal_type_name' => 'string',
        'meta_type_name' => 'string',
        'name' => 'string',
        'completed_at' => 'string',
        'has_been_spent' => 'bool',
        'is_complete' => 'bool',
        'metadata' => 'string',
        'position' => 'int',
        'projected_to_complete_at' => 'string',
        'targeted_to_complete_at' => 'string',
        'track_type_name' => 'string',
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
        'amount' => null,
        'current_amount' => null,
        'guid' => null,
        'goal_type_name' => null,
        'meta_type_name' => null,
        'name' => null,
        'completed_at' => null,
        'has_been_spent' => null,
        'is_complete' => null,
        'metadata' => null,
        'position' => null,
        'projected_to_complete_at' => null,
        'targeted_to_complete_at' => null,
        'track_type_name' => null,
        'user_guid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_guid' => false,
        'amount' => false,
        'current_amount' => false,
        'guid' => false,
        'goal_type_name' => false,
        'meta_type_name' => false,
        'name' => false,
        'completed_at' => false,
        'has_been_spent' => false,
        'is_complete' => false,
        'metadata' => false,
        'position' => false,
        'projected_to_complete_at' => false,
        'targeted_to_complete_at' => false,
        'track_type_name' => false,
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
        'amount' => 'amount',
        'current_amount' => 'current_amount',
        'guid' => 'guid',
        'goal_type_name' => 'goal_type_name',
        'meta_type_name' => 'meta_type_name',
        'name' => 'name',
        'completed_at' => 'completed_at',
        'has_been_spent' => 'has_been_spent',
        'is_complete' => 'is_complete',
        'metadata' => 'metadata',
        'position' => 'position',
        'projected_to_complete_at' => 'projected_to_complete_at',
        'targeted_to_complete_at' => 'targeted_to_complete_at',
        'track_type_name' => 'track_type_name',
        'user_guid' => 'user_guid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_guid' => 'setAccountGuid',
        'amount' => 'setAmount',
        'current_amount' => 'setCurrentAmount',
        'guid' => 'setGuid',
        'goal_type_name' => 'setGoalTypeName',
        'meta_type_name' => 'setMetaTypeName',
        'name' => 'setName',
        'completed_at' => 'setCompletedAt',
        'has_been_spent' => 'setHasBeenSpent',
        'is_complete' => 'setIsComplete',
        'metadata' => 'setMetadata',
        'position' => 'setPosition',
        'projected_to_complete_at' => 'setProjectedToCompleteAt',
        'targeted_to_complete_at' => 'setTargetedToCompleteAt',
        'track_type_name' => 'setTrackTypeName',
        'user_guid' => 'setUserGuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_guid' => 'getAccountGuid',
        'amount' => 'getAmount',
        'current_amount' => 'getCurrentAmount',
        'guid' => 'getGuid',
        'goal_type_name' => 'getGoalTypeName',
        'meta_type_name' => 'getMetaTypeName',
        'name' => 'getName',
        'completed_at' => 'getCompletedAt',
        'has_been_spent' => 'getHasBeenSpent',
        'is_complete' => 'getIsComplete',
        'metadata' => 'getMetadata',
        'position' => 'getPosition',
        'projected_to_complete_at' => 'getProjectedToCompleteAt',
        'targeted_to_complete_at' => 'getTargetedToCompleteAt',
        'track_type_name' => 'getTrackTypeName',
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('current_amount', $data ?? [], null);
        $this->setIfExists('guid', $data ?? [], null);
        $this->setIfExists('goal_type_name', $data ?? [], null);
        $this->setIfExists('meta_type_name', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('completed_at', $data ?? [], null);
        $this->setIfExists('has_been_spent', $data ?? [], null);
        $this->setIfExists('is_complete', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('projected_to_complete_at', $data ?? [], null);
        $this->setIfExists('targeted_to_complete_at', $data ?? [], null);
        $this->setIfExists('track_type_name', $data ?? [], null);
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
     * @param string|null $account_guid Unique identifier of the account for the goal.
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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount Amount of the goal.
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
     * Gets current_amount
     *
     * @return float|null
     */
    public function getCurrentAmount()
    {
        return $this->container['current_amount'];
    }

    /**
     * Sets current_amount
     *
     * @param float|null $current_amount The current amount of the goal.
     *
     * @return self
     */
    public function setCurrentAmount($current_amount)
    {
        if (is_null($current_amount)) {
            throw new \InvalidArgumentException('non-nullable current_amount cannot be null');
        }
        $this->container['current_amount'] = $current_amount;

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
     * @param string|null $guid The unique identifier for the goal. Defined by MX.
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
     * Gets goal_type_name
     *
     * @return string|null
     */
    public function getGoalTypeName()
    {
        return $this->container['goal_type_name'];
    }

    /**
     * Sets goal_type_name
     *
     * @param string|null $goal_type_name The goal type.
     *
     * @return self
     */
    public function setGoalTypeName($goal_type_name)
    {
        if (is_null($goal_type_name)) {
            throw new \InvalidArgumentException('non-nullable goal_type_name cannot be null');
        }
        $this->container['goal_type_name'] = $goal_type_name;

        return $this;
    }

    /**
     * Gets meta_type_name
     *
     * @return string|null
     */
    public function getMetaTypeName()
    {
        return $this->container['meta_type_name'];
    }

    /**
     * Sets meta_type_name
     *
     * @param string|null $meta_type_name The category of the goal.
     *
     * @return self
     */
    public function setMetaTypeName($meta_type_name)
    {
        if (is_null($meta_type_name)) {
            throw new \InvalidArgumentException('non-nullable meta_type_name cannot be null');
        }
        $this->container['meta_type_name'] = $meta_type_name;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the goal.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets completed_at
     *
     * @return string|null
     */
    public function getCompletedAt()
    {
        return $this->container['completed_at'];
    }

    /**
     * Sets completed_at
     *
     * @param string|null $completed_at Date and time the goal was completed.
     *
     * @return self
     */
    public function setCompletedAt($completed_at)
    {
        if (is_null($completed_at)) {
            throw new \InvalidArgumentException('non-nullable completed_at cannot be null');
        }
        $this->container['completed_at'] = $completed_at;

        return $this;
    }

    /**
     * Gets has_been_spent
     *
     * @return bool|null
     */
    public function getHasBeenSpent()
    {
        return $this->container['has_been_spent'];
    }

    /**
     * Sets has_been_spent
     *
     * @param bool|null $has_been_spent Determines if the goal has been spent.
     *
     * @return self
     */
    public function setHasBeenSpent($has_been_spent)
    {
        if (is_null($has_been_spent)) {
            throw new \InvalidArgumentException('non-nullable has_been_spent cannot be null');
        }
        $this->container['has_been_spent'] = $has_been_spent;

        return $this;
    }

    /**
     * Gets is_complete
     *
     * @return bool|null
     */
    public function getIsComplete()
    {
        return $this->container['is_complete'];
    }

    /**
     * Sets is_complete
     *
     * @param bool|null $is_complete Determines if the goal is complete.
     *
     * @return self
     */
    public function setIsComplete($is_complete)
    {
        if (is_null($is_complete)) {
            throw new \InvalidArgumentException('non-nullable is_complete cannot be null');
        }
        $this->container['is_complete'] = $is_complete;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return string|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param string|null $metadata Additional information a partner can store on the goal.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position The priority of the goal in relation to multiple goals.
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets projected_to_complete_at
     *
     * @return string|null
     */
    public function getProjectedToCompleteAt()
    {
        return $this->container['projected_to_complete_at'];
    }

    /**
     * Sets projected_to_complete_at
     *
     * @param string|null $projected_to_complete_at The date on which the project was completed.
     *
     * @return self
     */
    public function setProjectedToCompleteAt($projected_to_complete_at)
    {
        if (is_null($projected_to_complete_at)) {
            throw new \InvalidArgumentException('non-nullable projected_to_complete_at cannot be null');
        }
        $this->container['projected_to_complete_at'] = $projected_to_complete_at;

        return $this;
    }

    /**
     * Gets targeted_to_complete_at
     *
     * @return string|null
     */
    public function getTargetedToCompleteAt()
    {
        return $this->container['targeted_to_complete_at'];
    }

    /**
     * Sets targeted_to_complete_at
     *
     * @param string|null $targeted_to_complete_at targeted_to_complete_at
     *
     * @return self
     */
    public function setTargetedToCompleteAt($targeted_to_complete_at)
    {
        if (is_null($targeted_to_complete_at)) {
            throw new \InvalidArgumentException('non-nullable targeted_to_complete_at cannot be null');
        }
        $this->container['targeted_to_complete_at'] = $targeted_to_complete_at;

        return $this;
    }

    /**
     * Gets track_type_name
     *
     * @return string|null
     */
    public function getTrackTypeName()
    {
        return $this->container['track_type_name'];
    }

    /**
     * Sets track_type_name
     *
     * @param string|null $track_type_name track_type_name
     *
     * @return self
     */
    public function setTrackTypeName($track_type_name)
    {
        if (is_null($track_type_name)) {
            throw new \InvalidArgumentException('non-nullable track_type_name cannot be null');
        }
        $this->container['track_type_name'] = $track_type_name;

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
     * @param string|null $user_guid The unique identifier for the the user. Defined by MX.
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


