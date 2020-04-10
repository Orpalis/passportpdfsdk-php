<?php
/**
 * StickyNoteAnnotationParameters
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
 * StickyNoteAnnotationParameters Class Doc Comment
 *
 * @category Class
 * @description Represents information about the Sticky Note Annotation.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StickyNoteAnnotationParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StickyNoteAnnotationParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'annotation_layout' => '\OpenAPI\Client\Model\DrawableContentLayoutParameters',
        'sticky_note_icon' => '\OpenAPI\Client\Model\StickyNoteAnnotationIcon',
        'author' => 'string',
        'subject' => 'string',
        'content' => 'string',
        'open_popup' => 'bool',
        'color' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'annotation_layout' => null,
        'sticky_note_icon' => null,
        'author' => null,
        'subject' => null,
        'content' => null,
        'open_popup' => null,
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
        'sticky_note_icon' => 'StickyNoteIcon',
        'author' => 'Author',
        'subject' => 'Subject',
        'content' => 'Content',
        'open_popup' => 'OpenPopup',
        'color' => 'Color'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'annotation_layout' => 'setAnnotationLayout',
        'sticky_note_icon' => 'setStickyNoteIcon',
        'author' => 'setAuthor',
        'subject' => 'setSubject',
        'content' => 'setContent',
        'open_popup' => 'setOpenPopup',
        'color' => 'setColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'annotation_layout' => 'getAnnotationLayout',
        'sticky_note_icon' => 'getStickyNoteIcon',
        'author' => 'getAuthor',
        'subject' => 'getSubject',
        'content' => 'getContent',
        'open_popup' => 'getOpenPopup',
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
        $this->container['sticky_note_icon'] = isset($data['sticky_note_icon']) ? $data['sticky_note_icon'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['open_popup'] = isset($data['open_popup']) ? $data['open_popup'] : null;
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
     * Gets sticky_note_icon
     *
     * @return \OpenAPI\Client\Model\StickyNoteAnnotationIcon|null
     */
    public function getStickyNoteIcon()
    {
        return $this->container['sticky_note_icon'];
    }

    /**
     * Sets sticky_note_icon
     *
     * @param \OpenAPI\Client\Model\StickyNoteAnnotationIcon|null $sticky_note_icon sticky_note_icon
     *
     * @return $this
     */
    public function setStickyNoteIcon($sticky_note_icon)
    {
        $this->container['sticky_note_icon'] = $sticky_note_icon;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string|null $author Specify the author of the annotation, if any.
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject Specify the subject of the annotation, if any.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content Specify the content of the annotation, if any.
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets open_popup
     *
     * @return bool|null
     */
    public function getOpenPopup()
    {
        return $this->container['open_popup'];
    }

    /**
     * Sets open_popup
     *
     * @param bool|null $open_popup Specifies if the popup of annotation shall be opened by default.
     *
     * @return $this
     */
    public function setOpenPopup($open_popup)
    {
        $this->container['open_popup'] = $open_popup;

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


