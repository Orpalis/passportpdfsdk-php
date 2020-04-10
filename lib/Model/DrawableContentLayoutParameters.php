<?php
/**
 * DrawableContentLayoutParameters
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
 * Introduction:    PassportPDF API is a REST API that lets you perform complex operations on documents and images easily.  You may consume the API by using our.NET SDK (other platforms / languages are soon to come), or any REST client by sending your requests to the appropriate endpoints.   A list of all the available endpoints can be found on the API reference page at https://passportpdfapi.com/references/api/index.html        Authentication:    Each available operation has a predefined cost, expressed as a number of tokens.  These tokens are deducted from your \"passport,\" which has a unique identifier that acts as an API key. This key is, therefore, required to be provided with each request for the latter to be honored(except if the operation does not have a cost, typically when you request a simple data with a GET).  Your key must be included in the header of the request, under the name \"X-PassportPdf-API-Key.\"  If you are using the.NET SDK, you can either set your key in the ApiKey property of your API instance(PdfApi or ImageApi, for example) or set it globally in the GlobalConfiguration instance if you want to set it once for the whole life cycle of your application.          Communication with the API:    All the available actions are listed on the API reference page, as previously mentioned.  There are several different controllers, i.e., routes, which categorize the actions.For example, you may use the PDF controller(\"/api/pdf\" route) to perform PDF - related operations, and the Image controller(\"/api/image\") for images.  Each action defines what kind of parameters(if any) is expected, and what kind of response is served.Parameters and responses are represented using data models, or \"schemas,\" and are listed in the \"Schemas\" section of the reference.   Parameters and response models of a given action are both prefixed by the controller name, the action name, and \"Parameters\" / \"Response,\" e.g. \"api/pdf/reduce\" respectively receives and serves a PdfReduceParameters and PdfReduceResponse models.  Using the .NET SDK, you will find the objects to interact with the different controllers in the PassportPDF.Api namespace and all the schemas in the PassportPDF.Model namespace.        Processing documents:    Each document manipulation starts with importing the file onto the API.  The LoadDocument action of the PDF controller lets you import your document as a PDF.  Note that the GetPDFImportSupportedFileExtensions action of the same controller will let you know all the different types of files that you may import as a PDF. LoadDocument responds with a JSON-serialized PdfLoadDocumentResponse model, which contains a \"FileId\" property.This identifier is required for the API to know about your document for further manipulations, hence the presence of a \"FileId\" property in the PdfReduceParameters schema (and many other parameters schemas). To download the changes made to a file, you need, of course, to download the new version of the file from the API.  To save your document as a PDF, you will need to use the SaveDocument action of the PDF controller and provide a PdfSaveDocumentParameters data model that contains the identifier of your file.        Errors:    Conventional HTTP response codes are used to indicate the success or failure of an API request.   The Error data model also defines some information about an error that occurred on the API.   Each response model has an Error in its definition, and its sole existence in the serialized response - which should thus always be checked - indicates that something went wrong.  Among the information given by the Error schema, \"ResultCode\" specifies a value of the \"PassportPDFStatus\" enumeration, that defines a first level of error information. \"InternalErrorId\" defines a unique identifier for the error, which comes very handy for us to troubleshoot any issue you may encounter quickly.        Efficiency considerations:    Multipart upload/download is available and lets you directly stream a file to/from the API.  In the PDF controller, LoadDocument/LoadDocumentMultipart and SaveDocument/SaveDocumentToFile may be used to upload/download a document using respectively binary data serialization and streaming multipart HTTP requests.  The second approach should be favored when dealing with large files, as it will be much more efficient in that context.
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
 * DrawableContentLayoutParameters Class Doc Comment
 *
 * @category Class
 * @description Represents information about the layout of a content, on the page it is drawn onto.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DrawableContentLayoutParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DrawableContentLayoutParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'horizontal_position' => '\OpenAPI\Client\Model\ContentHorizontalPosition',
        'vertical_position' => '\OpenAPI\Client\Model\ContentVerticalPosition',
        'size' => '\OpenAPI\Client\Model\ContentSize',
        'indent_from_edges' => 'bool',
        'absolute_position_left' => 'float',
        'absolute_position_top' => 'float',
        'absolute_width' => 'float',
        'absolute_height' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'horizontal_position' => null,
        'vertical_position' => null,
        'size' => null,
        'indent_from_edges' => null,
        'absolute_position_left' => 'float',
        'absolute_position_top' => 'float',
        'absolute_width' => 'float',
        'absolute_height' => 'float'
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
        'horizontal_position' => 'HorizontalPosition',
        'vertical_position' => 'VerticalPosition',
        'size' => 'Size',
        'indent_from_edges' => 'IndentFromEdges',
        'absolute_position_left' => 'AbsolutePositionLeft',
        'absolute_position_top' => 'AbsolutePositionTop',
        'absolute_width' => 'AbsoluteWidth',
        'absolute_height' => 'AbsoluteHeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'horizontal_position' => 'setHorizontalPosition',
        'vertical_position' => 'setVerticalPosition',
        'size' => 'setSize',
        'indent_from_edges' => 'setIndentFromEdges',
        'absolute_position_left' => 'setAbsolutePositionLeft',
        'absolute_position_top' => 'setAbsolutePositionTop',
        'absolute_width' => 'setAbsoluteWidth',
        'absolute_height' => 'setAbsoluteHeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'horizontal_position' => 'getHorizontalPosition',
        'vertical_position' => 'getVerticalPosition',
        'size' => 'getSize',
        'indent_from_edges' => 'getIndentFromEdges',
        'absolute_position_left' => 'getAbsolutePositionLeft',
        'absolute_position_top' => 'getAbsolutePositionTop',
        'absolute_width' => 'getAbsoluteWidth',
        'absolute_height' => 'getAbsoluteHeight'
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
        $this->container['horizontal_position'] = isset($data['horizontal_position']) ? $data['horizontal_position'] : null;
        $this->container['vertical_position'] = isset($data['vertical_position']) ? $data['vertical_position'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['indent_from_edges'] = isset($data['indent_from_edges']) ? $data['indent_from_edges'] : true;
        $this->container['absolute_position_left'] = isset($data['absolute_position_left']) ? $data['absolute_position_left'] : null;
        $this->container['absolute_position_top'] = isset($data['absolute_position_top']) ? $data['absolute_position_top'] : null;
        $this->container['absolute_width'] = isset($data['absolute_width']) ? $data['absolute_width'] : null;
        $this->container['absolute_height'] = isset($data['absolute_height']) ? $data['absolute_height'] : null;
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
     * Gets horizontal_position
     *
     * @return \OpenAPI\Client\Model\ContentHorizontalPosition|null
     */
    public function getHorizontalPosition()
    {
        return $this->container['horizontal_position'];
    }

    /**
     * Sets horizontal_position
     *
     * @param \OpenAPI\Client\Model\ContentHorizontalPosition|null $horizontal_position horizontal_position
     *
     * @return $this
     */
    public function setHorizontalPosition($horizontal_position)
    {
        $this->container['horizontal_position'] = $horizontal_position;

        return $this;
    }

    /**
     * Gets vertical_position
     *
     * @return \OpenAPI\Client\Model\ContentVerticalPosition|null
     */
    public function getVerticalPosition()
    {
        return $this->container['vertical_position'];
    }

    /**
     * Sets vertical_position
     *
     * @param \OpenAPI\Client\Model\ContentVerticalPosition|null $vertical_position vertical_position
     *
     * @return $this
     */
    public function setVerticalPosition($vertical_position)
    {
        $this->container['vertical_position'] = $vertical_position;

        return $this;
    }

    /**
     * Gets size
     *
     * @return \OpenAPI\Client\Model\ContentSize|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param \OpenAPI\Client\Model\ContentSize|null $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets indent_from_edges
     *
     * @return bool|null
     */
    public function getIndentFromEdges()
    {
        return $this->container['indent_from_edges'];
    }

    /**
     * Sets indent_from_edges
     *
     * @param bool|null $indent_from_edges Specifies whether the content shall be slightly indented from the nearest page edges.
     *
     * @return $this
     */
    public function setIndentFromEdges($indent_from_edges)
    {
        $this->container['indent_from_edges'] = $indent_from_edges;

        return $this;
    }

    /**
     * Gets absolute_position_left
     *
     * @return float|null
     */
    public function getAbsolutePositionLeft()
    {
        return $this->container['absolute_position_left'];
    }

    /**
     * Sets absolute_position_left
     *
     * @param float|null $absolute_position_left Specifies the absolute horizontal position of the top-left edge of the content, in points.
     *
     * @return $this
     */
    public function setAbsolutePositionLeft($absolute_position_left)
    {
        $this->container['absolute_position_left'] = $absolute_position_left;

        return $this;
    }

    /**
     * Gets absolute_position_top
     *
     * @return float|null
     */
    public function getAbsolutePositionTop()
    {
        return $this->container['absolute_position_top'];
    }

    /**
     * Sets absolute_position_top
     *
     * @param float|null $absolute_position_top Specifies the absolute vertical position of the top-left edge of the content, in points.
     *
     * @return $this
     */
    public function setAbsolutePositionTop($absolute_position_top)
    {
        $this->container['absolute_position_top'] = $absolute_position_top;

        return $this;
    }

    /**
     * Gets absolute_width
     *
     * @return float|null
     */
    public function getAbsoluteWidth()
    {
        return $this->container['absolute_width'];
    }

    /**
     * Sets absolute_width
     *
     * @param float|null $absolute_width Specifies the absolute width of the content, in points.
     *
     * @return $this
     */
    public function setAbsoluteWidth($absolute_width)
    {
        $this->container['absolute_width'] = $absolute_width;

        return $this;
    }

    /**
     * Gets absolute_height
     *
     * @return float|null
     */
    public function getAbsoluteHeight()
    {
        return $this->container['absolute_height'];
    }

    /**
     * Sets absolute_height
     *
     * @param float|null $absolute_height Specifies the absolute height of the content, in points.
     *
     * @return $this
     */
    public function setAbsoluteHeight($absolute_height)
    {
        $this->container['absolute_height'] = $absolute_height;

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


