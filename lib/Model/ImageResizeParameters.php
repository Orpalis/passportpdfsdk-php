<?php
/**
 * ImageResizeParameters
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
 * ImageResizeParameters Class Doc Comment
 *
 * @category Class
 * @description Represents the parameters for an image resize action.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ImageResizeParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImageResizeParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_id' => 'string',
        'page_range' => 'string',
        'resize_horizontal' => 'float',
        'resize_vertical' => 'float',
        'resize_mode' => '\OpenAPI\Client\Model\ResizeMode',
        'resize_unit' => '\OpenAPI\Client\Model\ResizeUnit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'file_id' => null,
        'page_range' => null,
        'resize_horizontal' => 'float',
        'resize_vertical' => 'float',
        'resize_mode' => null,
        'resize_unit' => null
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
        'page_range' => 'PageRange',
        'resize_horizontal' => 'ResizeHorizontal',
        'resize_vertical' => 'ResizeVertical',
        'resize_mode' => 'ResizeMode',
        'resize_unit' => 'ResizeUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_id' => 'setFileId',
        'page_range' => 'setPageRange',
        'resize_horizontal' => 'setResizeHorizontal',
        'resize_vertical' => 'setResizeVertical',
        'resize_mode' => 'setResizeMode',
        'resize_unit' => 'setResizeUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_id' => 'getFileId',
        'page_range' => 'getPageRange',
        'resize_horizontal' => 'getResizeHorizontal',
        'resize_vertical' => 'getResizeVertical',
        'resize_mode' => 'getResizeMode',
        'resize_unit' => 'getResizeUnit'
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
        $this->container['page_range'] = isset($data['page_range']) ? $data['page_range'] : null;
        $this->container['resize_horizontal'] = isset($data['resize_horizontal']) ? $data['resize_horizontal'] : null;
        $this->container['resize_vertical'] = isset($data['resize_vertical']) ? $data['resize_vertical'] : null;
        $this->container['resize_mode'] = isset($data['resize_mode']) ? $data['resize_mode'] : null;
        $this->container['resize_unit'] = isset($data['resize_unit']) ? $data['resize_unit'] : null;
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
        if ($this->container['page_range'] === null) {
            $invalidProperties[] = "'page_range' can't be null";
        }
        if ($this->container['resize_horizontal'] === null) {
            $invalidProperties[] = "'resize_horizontal' can't be null";
        }
        if ($this->container['resize_vertical'] === null) {
            $invalidProperties[] = "'resize_vertical' can't be null";
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
     * Gets page_range
     *
     * @return string
     */
    public function getPageRange()
    {
        return $this->container['page_range'];
    }

    /**
     * Sets page_range
     *
     * @param string $page_range Specifies the number of the page, or the range of pages to resize.
     *
     * @return $this
     */
    public function setPageRange($page_range)
    {
        $this->container['page_range'] = $page_range;

        return $this;
    }

    /**
     * Gets resize_horizontal
     *
     * @return float
     */
    public function getResizeHorizontal()
    {
        return $this->container['resize_horizontal'];
    }

    /**
     * Sets resize_horizontal
     *
     * @param float $resize_horizontal Specifies the resize horizontal parameter.
     *
     * @return $this
     */
    public function setResizeHorizontal($resize_horizontal)
    {
        $this->container['resize_horizontal'] = $resize_horizontal;

        return $this;
    }

    /**
     * Gets resize_vertical
     *
     * @return float
     */
    public function getResizeVertical()
    {
        return $this->container['resize_vertical'];
    }

    /**
     * Sets resize_vertical
     *
     * @param float $resize_vertical Specifies the resize vertical parameter.
     *
     * @return $this
     */
    public function setResizeVertical($resize_vertical)
    {
        $this->container['resize_vertical'] = $resize_vertical;

        return $this;
    }

    /**
     * Gets resize_mode
     *
     * @return \OpenAPI\Client\Model\ResizeMode|null
     */
    public function getResizeMode()
    {
        return $this->container['resize_mode'];
    }

    /**
     * Sets resize_mode
     *
     * @param \OpenAPI\Client\Model\ResizeMode|null $resize_mode resize_mode
     *
     * @return $this
     */
    public function setResizeMode($resize_mode)
    {
        $this->container['resize_mode'] = $resize_mode;

        return $this;
    }

    /**
     * Gets resize_unit
     *
     * @return \OpenAPI\Client\Model\ResizeUnit|null
     */
    public function getResizeUnit()
    {
        return $this->container['resize_unit'];
    }

    /**
     * Sets resize_unit
     *
     * @param \OpenAPI\Client\Model\ResizeUnit|null $resize_unit resize_unit
     *
     * @return $this
     */
    public function setResizeUnit($resize_unit)
    {
        $this->container['resize_unit'] = $resize_unit;

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


