<?php
/**
 * PdfGetPageThumbnailParameters
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
 * PdfGetPageThumbnailParameters Class Doc Comment
 *
 * @category Class
 * @description Represents the parameters for a get page thumbnail action.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PdfGetPageThumbnailParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PdfGetPageThumbnailParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_id' => 'string',
        'page_range' => 'string',
        'thumbnail_width' => 'int',
        'thumbnail_height' => 'int',
        'background_color' => 'string',
        'thumbnail_fit_to_page_size' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'file_id' => null,
        'page_range' => null,
        'thumbnail_width' => 'int32',
        'thumbnail_height' => 'int32',
        'background_color' => null,
        'thumbnail_fit_to_page_size' => null
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
        'thumbnail_width' => 'ThumbnailWidth',
        'thumbnail_height' => 'ThumbnailHeight',
        'background_color' => 'BackgroundColor',
        'thumbnail_fit_to_page_size' => 'ThumbnailFitToPageSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_id' => 'setFileId',
        'page_range' => 'setPageRange',
        'thumbnail_width' => 'setThumbnailWidth',
        'thumbnail_height' => 'setThumbnailHeight',
        'background_color' => 'setBackgroundColor',
        'thumbnail_fit_to_page_size' => 'setThumbnailFitToPageSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_id' => 'getFileId',
        'page_range' => 'getPageRange',
        'thumbnail_width' => 'getThumbnailWidth',
        'thumbnail_height' => 'getThumbnailHeight',
        'background_color' => 'getBackgroundColor',
        'thumbnail_fit_to_page_size' => 'getThumbnailFitToPageSize'
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
        $this->container['thumbnail_width'] = isset($data['thumbnail_width']) ? $data['thumbnail_width'] : 140;
        $this->container['thumbnail_height'] = isset($data['thumbnail_height']) ? $data['thumbnail_height'] : 220;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : 'rgba(0,0,0,0)';
        $this->container['thumbnail_fit_to_page_size'] = isset($data['thumbnail_fit_to_page_size']) ? $data['thumbnail_fit_to_page_size'] : true;
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
     * @param string $page_range Specifies the page or the range of pages to get a thumbnail from.
     *
     * @return $this
     */
    public function setPageRange($page_range)
    {
        $this->container['page_range'] = $page_range;

        return $this;
    }

    /**
     * Gets thumbnail_width
     *
     * @return int|null
     */
    public function getThumbnailWidth()
    {
        return $this->container['thumbnail_width'];
    }

    /**
     * Sets thumbnail_width
     *
     * @param int|null $thumbnail_width Specifies the width, in points, of the thumbnail(s).
     *
     * @return $this
     */
    public function setThumbnailWidth($thumbnail_width)
    {
        $this->container['thumbnail_width'] = $thumbnail_width;

        return $this;
    }

    /**
     * Gets thumbnail_height
     *
     * @return int|null
     */
    public function getThumbnailHeight()
    {
        return $this->container['thumbnail_height'];
    }

    /**
     * Sets thumbnail_height
     *
     * @param int|null $thumbnail_height Specifies the height, in points, of the thumbnail(s).
     *
     * @return $this
     */
    public function setThumbnailHeight($thumbnail_height)
    {
        $this->container['thumbnail_height'] = $thumbnail_height;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string|null
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string|null $background_color Specifies the background color of the thumbnail(s), using the color name (ie: \"red\") or its RGBa code (ie: \"rgba(255,0,0,1)\").
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets thumbnail_fit_to_page_size
     *
     * @return bool|null
     */
    public function getThumbnailFitToPageSize()
    {
        return $this->container['thumbnail_fit_to_page_size'];
    }

    /**
     * Sets thumbnail_fit_to_page_size
     *
     * @param bool|null $thumbnail_fit_to_page_size Specifies if the size of the produced thumbnail is automatically adjusted to don't have any margin.
     *
     * @return $this
     */
    public function setThumbnailFitToPageSize($thumbnail_fit_to_page_size)
    {
        $this->container['thumbnail_fit_to_page_size'] = $thumbnail_fit_to_page_size;

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


