<?php
/**
 * NotaryJurisdictionList
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
 * NotaryJurisdictionList Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NotaryJurisdictionList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'notaryJurisdictionList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'end_position' => '?string',
        'next_uri' => '?string',
        'notary_jurisdictions' => '\DocuSign\eSign\Model\NotaryJurisdiction[]',
        'previous_uri' => '?string',
        'result_set_size' => '?string',
        'start_position' => '?string',
        'total_set_size' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'end_position' => null,
        'next_uri' => null,
        'notary_jurisdictions' => null,
        'previous_uri' => null,
        'result_set_size' => null,
        'start_position' => null,
        'total_set_size' => null
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
        'end_position' => 'endPosition',
        'next_uri' => 'nextUri',
        'notary_jurisdictions' => 'notaryJurisdictions',
        'previous_uri' => 'previousUri',
        'result_set_size' => 'resultSetSize',
        'start_position' => 'startPosition',
        'total_set_size' => 'totalSetSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_position' => 'setEndPosition',
        'next_uri' => 'setNextUri',
        'notary_jurisdictions' => 'setNotaryJurisdictions',
        'previous_uri' => 'setPreviousUri',
        'result_set_size' => 'setResultSetSize',
        'start_position' => 'setStartPosition',
        'total_set_size' => 'setTotalSetSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_position' => 'getEndPosition',
        'next_uri' => 'getNextUri',
        'notary_jurisdictions' => 'getNotaryJurisdictions',
        'previous_uri' => 'getPreviousUri',
        'result_set_size' => 'getResultSetSize',
        'start_position' => 'getStartPosition',
        'total_set_size' => 'getTotalSetSize'
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
        $this->container['end_position'] = isset($data['end_position']) ? $data['end_position'] : null;
        $this->container['next_uri'] = isset($data['next_uri']) ? $data['next_uri'] : null;
        $this->container['notary_jurisdictions'] = isset($data['notary_jurisdictions']) ? $data['notary_jurisdictions'] : null;
        $this->container['previous_uri'] = isset($data['previous_uri']) ? $data['previous_uri'] : null;
        $this->container['result_set_size'] = isset($data['result_set_size']) ? $data['result_set_size'] : null;
        $this->container['start_position'] = isset($data['start_position']) ? $data['start_position'] : null;
        $this->container['total_set_size'] = isset($data['total_set_size']) ? $data['total_set_size'] : null;
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
     * Gets end_position
     *
     * @return ?string
     */
    public function getEndPosition()
    {
        return $this->container['end_position'];
    }

    /**
     * Sets end_position
     *
     * @param ?string $end_position The last position in the result set.
     *
     * @return $this
     */
    public function setEndPosition($end_position)
    {
        $this->container['end_position'] = $end_position;

        return $this;
    }

    /**
     * Gets next_uri
     *
     * @return ?string
     */
    public function getNextUri()
    {
        return $this->container['next_uri'];
    }

    /**
     * Sets next_uri
     *
     * @param ?string $next_uri The URI to the next chunk of records based on the search request. If the endPosition is the entire results of the search, this is null.
     *
     * @return $this
     */
    public function setNextUri($next_uri)
    {
        $this->container['next_uri'] = $next_uri;

        return $this;
    }

    /**
     * Gets notary_jurisdictions
     *
     * @return \DocuSign\eSign\Model\NotaryJurisdiction[]
     */
    public function getNotaryJurisdictions()
    {
        return $this->container['notary_jurisdictions'];
    }

    /**
     * Sets notary_jurisdictions
     *
     * @param \DocuSign\eSign\Model\NotaryJurisdiction[] $notary_jurisdictions 
     *
     * @return $this
     */
    public function setNotaryJurisdictions($notary_jurisdictions)
    {
        $this->container['notary_jurisdictions'] = $notary_jurisdictions;

        return $this;
    }

    /**
     * Gets previous_uri
     *
     * @return ?string
     */
    public function getPreviousUri()
    {
        return $this->container['previous_uri'];
    }

    /**
     * Sets previous_uri
     *
     * @param ?string $previous_uri The postal code for the billing address.
     *
     * @return $this
     */
    public function setPreviousUri($previous_uri)
    {
        $this->container['previous_uri'] = $previous_uri;

        return $this;
    }

    /**
     * Gets result_set_size
     *
     * @return ?string
     */
    public function getResultSetSize()
    {
        return $this->container['result_set_size'];
    }

    /**
     * Sets result_set_size
     *
     * @param ?string $result_set_size The number of results returned in this response.
     *
     * @return $this
     */
    public function setResultSetSize($result_set_size)
    {
        $this->container['result_set_size'] = $result_set_size;

        return $this;
    }

    /**
     * Gets start_position
     *
     * @return ?string
     */
    public function getStartPosition()
    {
        return $this->container['start_position'];
    }

    /**
     * Sets start_position
     *
     * @param ?string $start_position Starting position of the current result set.
     *
     * @return $this
     */
    public function setStartPosition($start_position)
    {
        $this->container['start_position'] = $start_position;

        return $this;
    }

    /**
     * Gets total_set_size
     *
     * @return ?string
     */
    public function getTotalSetSize()
    {
        return $this->container['total_set_size'];
    }

    /**
     * Sets total_set_size
     *
     * @param ?string $total_set_size The total number of items available in the result set. This will always be greater than or equal to the value of the property returning the results in the in the response.
     *
     * @return $this
     */
    public function setTotalSetSize($total_set_size)
    {
        $this->container['total_set_size'] = $total_set_size;

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

