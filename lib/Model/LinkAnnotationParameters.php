<?php
/**
 * LinkAnnotationParameters
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
 * LinkAnnotationParameters Class Doc Comment
 *
 * @category Class
 * @description Represents information about the Link Annotation.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LinkAnnotationParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LinkAnnotationParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'annotation_layout' => '\OpenAPI\Client\Model\DrawableContentLayoutParameters',
        'link_type' => '\OpenAPI\Client\Model\LinkAnnotationType',
        'link_page' => 'int',
        'link_uri' => 'string',
        'show_border' => 'bool',
        'color' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'annotation_layout' => null,
        'link_type' => null,
        'link_page' => 'int32',
        'link_uri' => null,
        'show_border' => null,
        'color' => null
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
        'annotation_layout' => 'AnnotationLayout',
        'link_type' => 'LinkType',
        'link_page' => 'LinkPage',
        'link_uri' => 'LinkUri',
        'show_border' => 'ShowBorder',
        'color' => 'Color'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'annotation_layout' => 'setAnnotationLayout',
        'link_type' => 'setLinkType',
        'link_page' => 'setLinkPage',
        'link_uri' => 'setLinkUri',
        'show_border' => 'setShowBorder',
        'color' => 'setColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'annotation_layout' => 'getAnnotationLayout',
        'link_type' => 'getLinkType',
        'link_page' => 'getLinkPage',
        'link_uri' => 'getLinkUri',
        'show_border' => 'getShowBorder',
        'color' => 'getColor'
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
        $this->container['annotation_layout'] = isset($data['annotation_layout']) ? $data['annotation_layout'] : null;
        $this->container['link_type'] = isset($data['link_type']) ? $data['link_type'] : null;
        $this->container['link_page'] = isset($data['link_page']) ? $data['link_page'] : null;
        $this->container['link_uri'] = isset($data['link_uri']) ? $data['link_uri'] : null;
        $this->container['show_border'] = isset($data['show_border']) ? $data['show_border'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : 'red';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['annotation_layout'] === null) {
            $invalidProperties[] = "'annotation_layout' can't be null";
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
     * Gets annotation_layout
     *
     * @return \OpenAPI\Client\Model\DrawableContentLayoutParameters
     */
    public function getAnnotationLayout()
    {
        return $this->container['annotation_layout'];
    }

    /**
     * Sets annotation_layout
     *
     * @param \OpenAPI\Client\Model\DrawableContentLayoutParameters $annotation_layout annotation_layout
     *
     * @return $this
     */
    public function setAnnotationLayout($annotation_layout)
    {
        $this->container['annotation_layout'] = $annotation_layout;

        return $this;
    }

    /**
     * Gets link_type
     *
     * @return \OpenAPI\Client\Model\LinkAnnotationType|null
     */
    public function getLinkType()
    {
        return $this->container['link_type'];
    }

    /**
     * Sets link_type
     *
     * @param \OpenAPI\Client\Model\LinkAnnotationType|null $link_type link_type
     *
     * @return $this
     */
    public function setLinkType($link_type)
    {
        $this->container['link_type'] = $link_type;

        return $this;
    }

    /**
     * Gets link_page
     *
     * @return int|null
     */
    public function getLinkPage()
    {
        return $this->container['link_page'];
    }

    /**
     * Sets link_page
     *
     * @param int|null $link_page Specifies the link annotation destination page if the Page type is specified.
     *
     * @return $this
     */
    public function setLinkPage($link_page)
    {
        $this->container['link_page'] = $link_page;

        return $this;
    }

    /**
     * Gets link_uri
     *
     * @return string|null
     */
    public function getLinkUri()
    {
        return $this->container['link_uri'];
    }

    /**
     * Sets link_uri
     *
     * @param string|null $link_uri Specifies the link annotation destination URI if the Web type is specified.
     *
     * @return $this
     */
    public function setLinkUri($link_uri)
    {
        $this->container['link_uri'] = $link_uri;

        return $this;
    }

    /**
     * Gets show_border
     *
     * @return bool|null
     */
    public function getShowBorder()
    {
        return $this->container['show_border'];
    }

    /**
     * Sets show_border
     *
     * @param bool|null $show_border Specifies if the annotation border shall be drawn.
     *
     * @return $this
     */
    public function setShowBorder($show_border)
    {
        $this->container['show_border'] = $show_border;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color Specifies the color of the annotation, using the color name (ie: \"red\") or its RGBa code (ie: \"rgba(255,0,0,1)\").
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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


