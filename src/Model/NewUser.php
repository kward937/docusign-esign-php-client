<?php
/**
 * NewUser
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * NewUser Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NewUser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'newUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_password' => '?string',
        'created_date_time' => '?string',
        'email' => '?string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'membership_id' => '?string',
        'permission_profile_id' => '?string',
        'permission_profile_name' => '?string',
        'uri' => '?string',
        'user_id' => '?string',
        'user_name' => '?string',
        'user_status' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_password' => null,
        'created_date_time' => null,
        'email' => null,
        'error_details' => null,
        'membership_id' => null,
        'permission_profile_id' => null,
        'permission_profile_name' => null,
        'uri' => null,
        'user_id' => null,
        'user_name' => null,
        'user_status' => null
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
        'api_password' => 'apiPassword',
        'created_date_time' => 'createdDateTime',
        'email' => 'email',
        'error_details' => 'errorDetails',
        'membership_id' => 'membershipId',
        'permission_profile_id' => 'permissionProfileId',
        'permission_profile_name' => 'permissionProfileName',
        'uri' => 'uri',
        'user_id' => 'userId',
        'user_name' => 'userName',
        'user_status' => 'userStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_password' => 'setApiPassword',
        'created_date_time' => 'setCreatedDateTime',
        'email' => 'setEmail',
        'error_details' => 'setErrorDetails',
        'membership_id' => 'setMembershipId',
        'permission_profile_id' => 'setPermissionProfileId',
        'permission_profile_name' => 'setPermissionProfileName',
        'uri' => 'setUri',
        'user_id' => 'setUserId',
        'user_name' => 'setUserName',
        'user_status' => 'setUserStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_password' => 'getApiPassword',
        'created_date_time' => 'getCreatedDateTime',
        'email' => 'getEmail',
        'error_details' => 'getErrorDetails',
        'membership_id' => 'getMembershipId',
        'permission_profile_id' => 'getPermissionProfileId',
        'permission_profile_name' => 'getPermissionProfileName',
        'uri' => 'getUri',
        'user_id' => 'getUserId',
        'user_name' => 'getUserName',
        'user_status' => 'getUserStatus'
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
        $this->container['api_password'] = isset($data['api_password']) ? $data['api_password'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['membership_id'] = isset($data['membership_id']) ? $data['membership_id'] : null;
        $this->container['permission_profile_id'] = isset($data['permission_profile_id']) ? $data['permission_profile_id'] : null;
        $this->container['permission_profile_name'] = isset($data['permission_profile_name']) ? $data['permission_profile_name'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['user_status'] = isset($data['user_status']) ? $data['user_status'] : null;
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
     * Gets api_password
     *
     * @return ?string
     */
    public function getApiPassword()
    {
        return $this->container['api_password'];
    }

    /**
     * Sets api_password
     *
     * @param ?string $api_password Contains a token that can be used for authentication in API calls instead of using the user name and password.
     *
     * @return $this
     */
    public function setApiPassword($api_password)
    {
        $this->container['api_password'] = $api_password;

        return $this;
    }

    /**
     * Gets created_date_time
     *
     * @return ?string
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     *
     * @param ?string $created_date_time Indicates the date and time the item was created.
     *
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }

    /**
     * Gets email
     *
     * @return ?string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param ?string $email 
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details error_details
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets membership_id
     *
     * @return ?string
     */
    public function getMembershipId()
    {
        return $this->container['membership_id'];
    }

    /**
     * Sets membership_id
     *
     * @param ?string $membership_id 
     *
     * @return $this
     */
    public function setMembershipId($membership_id)
    {
        $this->container['membership_id'] = $membership_id;

        return $this;
    }

    /**
     * Gets permission_profile_id
     *
     * @return ?string
     */
    public function getPermissionProfileId()
    {
        return $this->container['permission_profile_id'];
    }

    /**
     * Sets permission_profile_id
     *
     * @param ?string $permission_profile_id 
     *
     * @return $this
     */
    public function setPermissionProfileId($permission_profile_id)
    {
        $this->container['permission_profile_id'] = $permission_profile_id;

        return $this;
    }

    /**
     * Gets permission_profile_name
     *
     * @return ?string
     */
    public function getPermissionProfileName()
    {
        return $this->container['permission_profile_name'];
    }

    /**
     * Sets permission_profile_name
     *
     * @param ?string $permission_profile_name 
     *
     * @return $this
     */
    public function setPermissionProfileName($permission_profile_name)
    {
        $this->container['permission_profile_name'] = $permission_profile_name;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return ?string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param ?string $uri 
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return ?string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param ?string $user_id Specifies the user ID for the new user.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return ?string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param ?string $user_name 
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets user_status
     *
     * @return ?string
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     *
     * @param ?string $user_status 
     *
     * @return $this
     */
    public function setUserStatus($user_status)
    {
        $this->container['user_status'] = $user_status;

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

