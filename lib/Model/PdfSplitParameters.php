<?php
/**
 * PdfSplitParameters
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PassportPDF API
 *
 * Another brick in the cloud
 *
 * The version of the OpenAPI document: 1.0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
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
 * PdfSplitParameters Class Doc Comment
 *
 * @category Class
 * @description Represents the parameters for a split action.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PdfSplitParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PdfSplitParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_id' => 'string',
        'split_method' => '\OpenAPI\Client\Model\PdfSplitMethod',
        'split_value' => 'int',
        'immediate_download' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'file_id' => null,
        'split_method' => null,
        'split_value' => 'int32',
        'immediate_download' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'file_id' => 'FileId',
        'split_method' => 'SplitMethod',
        'split_value' => 'SplitValue',
        'immediate_download' => 'ImmediateDownload'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_id' => 'setFileId',
        'split_method' => 'setSplitMethod',
        'split_value' => 'setSplitValue',
        'immediate_download' => 'setImmediateDownload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_id' => 'getFileId',
        'split_method' => 'getSplitMethod',
        'split_value' => 'getSplitValue',
        'immediate_download' => 'getImmediateDownload'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['file_id'] = isset($data['file_id']) ? $data['file_id'] : null;
        $this->container['split_method'] = isset($data['split_method']) ? $data['split_method'] : null;
        $this->container['split_value'] = isset($data['split_value']) ? $data['split_value'] : null;
        $this->container['immediate_download'] = isset($data['immediate_download']) ? $data['immediate_download'] : false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['file_id'] === null) {
            $invalidProperties[] = "'file_id' can't be null";
        }
        if ($this->container['split_method'] === null) {
            $invalidProperties[] = "'split_method' can't be null";
        }
        if ($this->container['split_value'] === null) {
            $invalidProperties[] = "'split_value' can't be null";
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
     * Gets file_id
     *
     * @return string
     */
    public function getFileId()
    {
        return $this->container['file_id'];
    }

    /**
     * Sets file_id
     *
     * @param string $file_id The identifier of the previously uploaded file to be processed.
     *
     * @return $this
     */
    public function setFileId($file_id)
    {
        $this->container['file_id'] = $file_id;

        return $this;
    }

    /**
     * Gets split_method
     *
     * @return \OpenAPI\Client\Model\PdfSplitMethod
     */
    public function getSplitMethod()
    {
        return $this->container['split_method'];
    }

    /**
     * Sets split_method
     *
     * @param \OpenAPI\Client\Model\PdfSplitMethod $split_method split_method
     *
     * @return $this
     */
    public function setSplitMethod($split_method)
    {
        $this->container['split_method'] = $split_method;

        return $this;
    }

    /**
     * Gets split_value
     *
     * @return int
     */
    public function getSplitValue()
    {
        return $this->container['split_value'];
    }

    /**
     * Sets split_value
     *
     * @param int $split_value Specifies, respectively for the SplitByPageCount and SplitByFileSize split methods, the number of pages or the maximum size, in kilobytes, of the produced files.
     *
     * @return $this
     */
    public function setSplitValue($split_value)
    {
        $this->container['split_value'] = $split_value;

        return $this;
    }

    /**
     * Gets immediate_download
     *
     * @return bool|null
     */
    public function getImmediateDownload()
    {
        return $this->container['immediate_download'];
    }

    /**
     * Sets immediate_download
     *
     * @param bool|null $immediate_download Specifies whether the file(s) created as a result of the action shall be available for immediate download.
     *
     * @return $this
     */
    public function setImmediateDownload($immediate_download)
    {
        $this->container['immediate_download'] = $immediate_download;

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


