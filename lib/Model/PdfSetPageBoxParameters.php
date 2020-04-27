<?php
/**
 * PdfSetPageBoxParameters
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
 * PdfSetPageBoxParameters Class Doc Comment
 *
 * @category Class
 * @description Represents the parameters for a SetPageBox action.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PdfSetPageBoxParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PdfSetPageBoxParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_id' => 'string',
        'page_range' => 'string',
        'left' => 'float',
        'top' => 'float',
        'right' => 'float',
        'bottom' => 'float',
        'page_box' => '\OpenAPI\Client\Model\PdfPageBox'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'file_id' => null,
        'page_range' => null,
        'left' => 'float',
        'top' => 'float',
        'right' => 'float',
        'bottom' => 'float',
        'page_box' => null
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
        'left' => 'Left',
        'top' => 'Top',
        'right' => 'Right',
        'bottom' => 'Bottom',
        'page_box' => 'PageBox'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_id' => 'setFileId',
        'page_range' => 'setPageRange',
        'left' => 'setLeft',
        'top' => 'setTop',
        'right' => 'setRight',
        'bottom' => 'setBottom',
        'page_box' => 'setPageBox'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_id' => 'getFileId',
        'page_range' => 'getPageRange',
        'left' => 'getLeft',
        'top' => 'getTop',
        'right' => 'getRight',
        'bottom' => 'getBottom',
        'page_box' => 'getPageBox'
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
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['right'] = isset($data['right']) ? $data['right'] : null;
        $this->container['bottom'] = isset($data['bottom']) ? $data['bottom'] : null;
        $this->container['page_box'] = isset($data['page_box']) ? $data['page_box'] : null;
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
        if ($this->container['left'] === null) {
            $invalidProperties[] = "'left' can't be null";
        }
        if ($this->container['top'] === null) {
            $invalidProperties[] = "'top' can't be null";
        }
        if ($this->container['right'] === null) {
            $invalidProperties[] = "'right' can't be null";
        }
        if ($this->container['bottom'] === null) {
            $invalidProperties[] = "'bottom' can't be null";
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
     * @param string $page_range Specifies the number of the page, or the range of page whose page box shall be set.
     *
     * @return $this
     */
    public function setPageRange($page_range)
    {
        $this->container['page_range'] = $page_range;

        return $this;
    }

    /**
     * Gets left
     *
     * @return float
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     * @param float $left Specifies, in points, the newly defined left position of the specified page box.
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets top
     *
     * @return float
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param float $top Specifies, in points, the newly defined top position of the specified page box.
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets right
     *
     * @return float
     */
    public function getRight()
    {
        return $this->container['right'];
    }

    /**
     * Sets right
     *
     * @param float $right Specifies, in points, the newly defined right position of the specified page box.
     *
     * @return $this
     */
    public function setRight($right)
    {
        $this->container['right'] = $right;

        return $this;
    }

    /**
     * Gets bottom
     *
     * @return float
     */
    public function getBottom()
    {
        return $this->container['bottom'];
    }

    /**
     * Sets bottom
     *
     * @param float $bottom Specifies, in points, the newly defined bottom position of the specified page box.
     *
     * @return $this
     */
    public function setBottom($bottom)
    {
        $this->container['bottom'] = $bottom;

        return $this;
    }

    /**
     * Gets page_box
     *
     * @return \OpenAPI\Client\Model\PdfPageBox|null
     */
    public function getPageBox()
    {
        return $this->container['page_box'];
    }

    /**
     * Sets page_box
     *
     * @param \OpenAPI\Client\Model\PdfPageBox|null $page_box page_box
     *
     * @return $this
     */
    public function setPageBox($page_box)
    {
        $this->container['page_box'] = $page_box;

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


