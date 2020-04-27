<?php
/**
 * BarcodeInfo
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
 * BarcodeInfo Class Doc Comment
 *
 * @category Class
 * @description Represents information about a read barcode.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BarcodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BarcodeInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => '\OpenAPI\Client\Model\BarcodeType',
        'barcode1_d_symbology' => '\OpenAPI\Client\Model\Barcode1DSymbology',
        'data' => 'string',
        'x1' => 'int',
        'x2' => 'int',
        'x3' => 'int',
        'x4' => 'int',
        'y1' => 'int',
        'y2' => 'int',
        'y3' => 'int',
        'y4' => 'int',
        'bbox_left_inches' => 'float',
        'bbox_top_inches' => 'float',
        'bbox_width_inches' => 'float',
        'bbox_height_inches' => 'float',
        'page_number' => 'int',
        'page_pixel_width' => 'int',
        'page_pixel_height' => 'int',
        'page_horizontal_resolution' => 'float',
        'page_vertical_resolution' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'barcode1_d_symbology' => null,
        'data' => null,
        'x1' => 'int32',
        'x2' => 'int32',
        'x3' => 'int32',
        'x4' => 'int32',
        'y1' => 'int32',
        'y2' => 'int32',
        'y3' => 'int32',
        'y4' => 'int32',
        'bbox_left_inches' => 'float',
        'bbox_top_inches' => 'float',
        'bbox_width_inches' => 'float',
        'bbox_height_inches' => 'float',
        'page_number' => 'int32',
        'page_pixel_width' => 'int32',
        'page_pixel_height' => 'int32',
        'page_horizontal_resolution' => 'float',
        'page_vertical_resolution' => 'float'
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
        'type' => 'Type',
        'barcode1_d_symbology' => 'Barcode1DSymbology',
        'data' => 'Data',
        'x1' => 'X1',
        'x2' => 'X2',
        'x3' => 'X3',
        'x4' => 'X4',
        'y1' => 'Y1',
        'y2' => 'Y2',
        'y3' => 'Y3',
        'y4' => 'Y4',
        'bbox_left_inches' => 'BboxLeftInches',
        'bbox_top_inches' => 'BboxTopInches',
        'bbox_width_inches' => 'BboxWidthInches',
        'bbox_height_inches' => 'BboxHeightInches',
        'page_number' => 'PageNumber',
        'page_pixel_width' => 'PagePixelWidth',
        'page_pixel_height' => 'PagePixelHeight',
        'page_horizontal_resolution' => 'PageHorizontalResolution',
        'page_vertical_resolution' => 'PageVerticalResolution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'barcode1_d_symbology' => 'setBarcode1DSymbology',
        'data' => 'setData',
        'x1' => 'setX1',
        'x2' => 'setX2',
        'x3' => 'setX3',
        'x4' => 'setX4',
        'y1' => 'setY1',
        'y2' => 'setY2',
        'y3' => 'setY3',
        'y4' => 'setY4',
        'bbox_left_inches' => 'setBboxLeftInches',
        'bbox_top_inches' => 'setBboxTopInches',
        'bbox_width_inches' => 'setBboxWidthInches',
        'bbox_height_inches' => 'setBboxHeightInches',
        'page_number' => 'setPageNumber',
        'page_pixel_width' => 'setPagePixelWidth',
        'page_pixel_height' => 'setPagePixelHeight',
        'page_horizontal_resolution' => 'setPageHorizontalResolution',
        'page_vertical_resolution' => 'setPageVerticalResolution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'barcode1_d_symbology' => 'getBarcode1DSymbology',
        'data' => 'getData',
        'x1' => 'getX1',
        'x2' => 'getX2',
        'x3' => 'getX3',
        'x4' => 'getX4',
        'y1' => 'getY1',
        'y2' => 'getY2',
        'y3' => 'getY3',
        'y4' => 'getY4',
        'bbox_left_inches' => 'getBboxLeftInches',
        'bbox_top_inches' => 'getBboxTopInches',
        'bbox_width_inches' => 'getBboxWidthInches',
        'bbox_height_inches' => 'getBboxHeightInches',
        'page_number' => 'getPageNumber',
        'page_pixel_width' => 'getPagePixelWidth',
        'page_pixel_height' => 'getPagePixelHeight',
        'page_horizontal_resolution' => 'getPageHorizontalResolution',
        'page_vertical_resolution' => 'getPageVerticalResolution'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['barcode1_d_symbology'] = isset($data['barcode1_d_symbology']) ? $data['barcode1_d_symbology'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['x1'] = isset($data['x1']) ? $data['x1'] : null;
        $this->container['x2'] = isset($data['x2']) ? $data['x2'] : null;
        $this->container['x3'] = isset($data['x3']) ? $data['x3'] : null;
        $this->container['x4'] = isset($data['x4']) ? $data['x4'] : null;
        $this->container['y1'] = isset($data['y1']) ? $data['y1'] : null;
        $this->container['y2'] = isset($data['y2']) ? $data['y2'] : null;
        $this->container['y3'] = isset($data['y3']) ? $data['y3'] : null;
        $this->container['y4'] = isset($data['y4']) ? $data['y4'] : null;
        $this->container['bbox_left_inches'] = isset($data['bbox_left_inches']) ? $data['bbox_left_inches'] : null;
        $this->container['bbox_top_inches'] = isset($data['bbox_top_inches']) ? $data['bbox_top_inches'] : null;
        $this->container['bbox_width_inches'] = isset($data['bbox_width_inches']) ? $data['bbox_width_inches'] : null;
        $this->container['bbox_height_inches'] = isset($data['bbox_height_inches']) ? $data['bbox_height_inches'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['page_pixel_width'] = isset($data['page_pixel_width']) ? $data['page_pixel_width'] : null;
        $this->container['page_pixel_height'] = isset($data['page_pixel_height']) ? $data['page_pixel_height'] : null;
        $this->container['page_horizontal_resolution'] = isset($data['page_horizontal_resolution']) ? $data['page_horizontal_resolution'] : null;
        $this->container['page_vertical_resolution'] = isset($data['page_vertical_resolution']) ? $data['page_vertical_resolution'] : null;
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
     * Gets type
     *
     * @return \OpenAPI\Client\Model\BarcodeType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\BarcodeType|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets barcode1_d_symbology
     *
     * @return \OpenAPI\Client\Model\Barcode1DSymbology|null
     */
    public function getBarcode1DSymbology()
    {
        return $this->container['barcode1_d_symbology'];
    }

    /**
     * Sets barcode1_d_symbology
     *
     * @param \OpenAPI\Client\Model\Barcode1DSymbology|null $barcode1_d_symbology barcode1_d_symbology
     *
     * @return $this
     */
    public function setBarcode1DSymbology($barcode1_d_symbology)
    {
        $this->container['barcode1_d_symbology'] = $barcode1_d_symbology;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string|null $data Specifies the data contained within the barcode.
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets x1
     *
     * @return int|null
     */
    public function getX1()
    {
        return $this->container['x1'];
    }

    /**
     * Sets x1
     *
     * @param int|null $x1 Specifies the horizontal top-left position of the barcode, in pixels.
     *
     * @return $this
     */
    public function setX1($x1)
    {
        $this->container['x1'] = $x1;

        return $this;
    }

    /**
     * Gets x2
     *
     * @return int|null
     */
    public function getX2()
    {
        return $this->container['x2'];
    }

    /**
     * Sets x2
     *
     * @param int|null $x2 Specifies the horizontal top-right position of the barcode, in pixels.
     *
     * @return $this
     */
    public function setX2($x2)
    {
        $this->container['x2'] = $x2;

        return $this;
    }

    /**
     * Gets x3
     *
     * @return int|null
     */
    public function getX3()
    {
        return $this->container['x3'];
    }

    /**
     * Sets x3
     *
     * @param int|null $x3 Specifies the horizontal bottom-left position of the barcode, in pixels.
     *
     * @return $this
     */
    public function setX3($x3)
    {
        $this->container['x3'] = $x3;

        return $this;
    }

    /**
     * Gets x4
     *
     * @return int|null
     */
    public function getX4()
    {
        return $this->container['x4'];
    }

    /**
     * Sets x4
     *
     * @param int|null $x4 Specifies the horizontal bottom-right position of the barcode, in pixels.
     *
     * @return $this
     */
    public function setX4($x4)
    {
        $this->container['x4'] = $x4;

        return $this;
    }

    /**
     * Gets y1
     *
     * @return int|null
     */
    public function getY1()
    {
        return $this->container['y1'];
    }

    /**
     * Sets y1
     *
     * @param int|null $y1 Specifies the vertical top-left position of the barcode, in pixels.
     *
     * @return $this
     */
    public function setY1($y1)
    {
        $this->container['y1'] = $y1;

        return $this;
    }

    /**
     * Gets y2
     *
     * @return int|null
     */
    public function getY2()
    {
        return $this->container['y2'];
    }

    /**
     * Sets y2
     *
     * @param int|null $y2 Specifies the vertical top-right position of the barcode, in pixels.
     *
     * @return $this
     */
    public function setY2($y2)
    {
        $this->container['y2'] = $y2;

        return $this;
    }

    /**
     * Gets y3
     *
     * @return int|null
     */
    public function getY3()
    {
        return $this->container['y3'];
    }

    /**
     * Sets y3
     *
     * @param int|null $y3 Specifies the vertical bottom-left position of the barcode, in pixels.
     *
     * @return $this
     */
    public function setY3($y3)
    {
        $this->container['y3'] = $y3;

        return $this;
    }

    /**
     * Gets y4
     *
     * @return int|null
     */
    public function getY4()
    {
        return $this->container['y4'];
    }

    /**
     * Sets y4
     *
     * @param int|null $y4 Specifies the vertical bottom-right position of the barcode, in pixels.
     *
     * @return $this
     */
    public function setY4($y4)
    {
        $this->container['y4'] = $y4;

        return $this;
    }

    /**
     * Gets bbox_left_inches
     *
     * @return float|null
     */
    public function getBboxLeftInches()
    {
        return $this->container['bbox_left_inches'];
    }

    /**
     * Sets bbox_left_inches
     *
     * @param float|null $bbox_left_inches Specifies the left coordinates of the bounding box of the barcode, in inches.
     *
     * @return $this
     */
    public function setBboxLeftInches($bbox_left_inches)
    {
        $this->container['bbox_left_inches'] = $bbox_left_inches;

        return $this;
    }

    /**
     * Gets bbox_top_inches
     *
     * @return float|null
     */
    public function getBboxTopInches()
    {
        return $this->container['bbox_top_inches'];
    }

    /**
     * Sets bbox_top_inches
     *
     * @param float|null $bbox_top_inches Specifies the top coordinates of the bounding box of the barcode, in inches.
     *
     * @return $this
     */
    public function setBboxTopInches($bbox_top_inches)
    {
        $this->container['bbox_top_inches'] = $bbox_top_inches;

        return $this;
    }

    /**
     * Gets bbox_width_inches
     *
     * @return float|null
     */
    public function getBboxWidthInches()
    {
        return $this->container['bbox_width_inches'];
    }

    /**
     * Sets bbox_width_inches
     *
     * @param float|null $bbox_width_inches Specifies the width of the bounding box of the barcode, in inches.
     *
     * @return $this
     */
    public function setBboxWidthInches($bbox_width_inches)
    {
        $this->container['bbox_width_inches'] = $bbox_width_inches;

        return $this;
    }

    /**
     * Gets bbox_height_inches
     *
     * @return float|null
     */
    public function getBboxHeightInches()
    {
        return $this->container['bbox_height_inches'];
    }

    /**
     * Sets bbox_height_inches
     *
     * @param float|null $bbox_height_inches Specifies the height of the bounding box of the barcode, in inches.
     *
     * @return $this
     */
    public function setBboxHeightInches($bbox_height_inches)
    {
        $this->container['bbox_height_inches'] = $bbox_height_inches;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param int|null $page_number Specifies the number of the page on which the barcode was read.
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets page_pixel_width
     *
     * @return int|null
     */
    public function getPagePixelWidth()
    {
        return $this->container['page_pixel_width'];
    }

    /**
     * Sets page_pixel_width
     *
     * @param int|null $page_pixel_width Specifies the width, in pixels, of the page where the barcode has been decoded.
     *
     * @return $this
     */
    public function setPagePixelWidth($page_pixel_width)
    {
        $this->container['page_pixel_width'] = $page_pixel_width;

        return $this;
    }

    /**
     * Gets page_pixel_height
     *
     * @return int|null
     */
    public function getPagePixelHeight()
    {
        return $this->container['page_pixel_height'];
    }

    /**
     * Sets page_pixel_height
     *
     * @param int|null $page_pixel_height Specifies the height, in pixels, of the page where the barcode has been decoded.
     *
     * @return $this
     */
    public function setPagePixelHeight($page_pixel_height)
    {
        $this->container['page_pixel_height'] = $page_pixel_height;

        return $this;
    }

    /**
     * Gets page_horizontal_resolution
     *
     * @return float|null
     */
    public function getPageHorizontalResolution()
    {
        return $this->container['page_horizontal_resolution'];
    }

    /**
     * Sets page_horizontal_resolution
     *
     * @param float|null $page_horizontal_resolution Specifies the horizontal resolution, in pixel per inches, of the page where the barcode has been decoded.
     *
     * @return $this
     */
    public function setPageHorizontalResolution($page_horizontal_resolution)
    {
        $this->container['page_horizontal_resolution'] = $page_horizontal_resolution;

        return $this;
    }

    /**
     * Gets page_vertical_resolution
     *
     * @return float|null
     */
    public function getPageVerticalResolution()
    {
        return $this->container['page_vertical_resolution'];
    }

    /**
     * Sets page_vertical_resolution
     *
     * @param float|null $page_vertical_resolution Specifies the vertical resolution, in pixel per inches, of the page where the barcode has been decoded.
     *
     * @return $this
     */
    public function setPageVerticalResolution($page_vertical_resolution)
    {
        $this->container['page_vertical_resolution'] = $page_vertical_resolution;

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


