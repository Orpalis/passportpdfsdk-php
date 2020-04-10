<?php
/**
 * ImageSaveAsPDFMRCParameters
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
 * ImageSaveAsPDFMRCParameters Class Doc Comment
 *
 * @category Class
 * @description Represents the parameters for a save as PDF MRC action.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ImageSaveAsPDFMRCParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImageSaveAsPDFMRCParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_id' => 'string',
        'page_range' => 'string',
        'conformance' => '\OpenAPI\Client\Model\PdfConformance',
        'color_image_compression' => '\OpenAPI\Client\Model\PdfImageCompressionScheme',
        'bitonal_image_compression' => '\OpenAPI\Client\Model\PdfImageCompressionScheme',
        'image_quality' => 'int',
        'downscale_resolution' => 'int',
        'preserve_smoothing' => 'bool',
        'fast_web_view' => 'bool',
        'jbig2_pms_threshold' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'file_id' => null,
        'page_range' => null,
        'conformance' => null,
        'color_image_compression' => null,
        'bitonal_image_compression' => null,
        'image_quality' => 'int32',
        'downscale_resolution' => 'int32',
        'preserve_smoothing' => null,
        'fast_web_view' => null,
        'jbig2_pms_threshold' => 'float'
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
        'conformance' => 'Conformance',
        'color_image_compression' => 'ColorImageCompression',
        'bitonal_image_compression' => 'BitonalImageCompression',
        'image_quality' => 'ImageQuality',
        'downscale_resolution' => 'DownscaleResolution',
        'preserve_smoothing' => 'PreserveSmoothing',
        'fast_web_view' => 'FastWebView',
        'jbig2_pms_threshold' => 'JBIG2PMSThreshold'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_id' => 'setFileId',
        'page_range' => 'setPageRange',
        'conformance' => 'setConformance',
        'color_image_compression' => 'setColorImageCompression',
        'bitonal_image_compression' => 'setBitonalImageCompression',
        'image_quality' => 'setImageQuality',
        'downscale_resolution' => 'setDownscaleResolution',
        'preserve_smoothing' => 'setPreserveSmoothing',
        'fast_web_view' => 'setFastWebView',
        'jbig2_pms_threshold' => 'setJbig2PmsThreshold'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_id' => 'getFileId',
        'page_range' => 'getPageRange',
        'conformance' => 'getConformance',
        'color_image_compression' => 'getColorImageCompression',
        'bitonal_image_compression' => 'getBitonalImageCompression',
        'image_quality' => 'getImageQuality',
        'downscale_resolution' => 'getDownscaleResolution',
        'preserve_smoothing' => 'getPreserveSmoothing',
        'fast_web_view' => 'getFastWebView',
        'jbig2_pms_threshold' => 'getJbig2PmsThreshold'
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
        $this->container['page_range'] = isset($data['page_range']) ? $data['page_range'] : '*';
        $this->container['conformance'] = isset($data['conformance']) ? $data['conformance'] : null;
        $this->container['color_image_compression'] = isset($data['color_image_compression']) ? $data['color_image_compression'] : null;
        $this->container['bitonal_image_compression'] = isset($data['bitonal_image_compression']) ? $data['bitonal_image_compression'] : null;
        $this->container['image_quality'] = isset($data['image_quality']) ? $data['image_quality'] : 60;
        $this->container['downscale_resolution'] = isset($data['downscale_resolution']) ? $data['downscale_resolution'] : 100;
        $this->container['preserve_smoothing'] = isset($data['preserve_smoothing']) ? $data['preserve_smoothing'] : false;
        $this->container['fast_web_view'] = isset($data['fast_web_view']) ? $data['fast_web_view'] : false;
        $this->container['jbig2_pms_threshold'] = isset($data['jbig2_pms_threshold']) ? $data['jbig2_pms_threshold'] : 0.85;
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
     * @return string|null
     */
    public function getPageRange()
    {
        return $this->container['page_range'];
    }

    /**
     * Sets page_range
     *
     * @param string|null $page_range Specifies the number of the page, or the range of pages to be saved as PDF MRC.
     *
     * @return $this
     */
    public function setPageRange($page_range)
    {
        $this->container['page_range'] = $page_range;

        return $this;
    }

    /**
     * Gets conformance
     *
     * @return \OpenAPI\Client\Model\PdfConformance|null
     */
    public function getConformance()
    {
        return $this->container['conformance'];
    }

    /**
     * Sets conformance
     *
     * @param \OpenAPI\Client\Model\PdfConformance|null $conformance conformance
     *
     * @return $this
     */
    public function setConformance($conformance)
    {
        $this->container['conformance'] = $conformance;

        return $this;
    }

    /**
     * Gets color_image_compression
     *
     * @return \OpenAPI\Client\Model\PdfImageCompressionScheme|null
     */
    public function getColorImageCompression()
    {
        return $this->container['color_image_compression'];
    }

    /**
     * Sets color_image_compression
     *
     * @param \OpenAPI\Client\Model\PdfImageCompressionScheme|null $color_image_compression color_image_compression
     *
     * @return $this
     */
    public function setColorImageCompression($color_image_compression)
    {
        $this->container['color_image_compression'] = $color_image_compression;

        return $this;
    }

    /**
     * Gets bitonal_image_compression
     *
     * @return \OpenAPI\Client\Model\PdfImageCompressionScheme|null
     */
    public function getBitonalImageCompression()
    {
        return $this->container['bitonal_image_compression'];
    }

    /**
     * Sets bitonal_image_compression
     *
     * @param \OpenAPI\Client\Model\PdfImageCompressionScheme|null $bitonal_image_compression bitonal_image_compression
     *
     * @return $this
     */
    public function setBitonalImageCompression($bitonal_image_compression)
    {
        $this->container['bitonal_image_compression'] = $bitonal_image_compression;

        return $this;
    }

    /**
     * Gets image_quality
     *
     * @return int|null
     */
    public function getImageQuality()
    {
        return $this->container['image_quality'];
    }

    /**
     * Sets image_quality
     *
     * @param int|null $image_quality Specifies the quality to be used for the compression of the images from the PDF.  Must be in the range [0 (best compression - worst quality) - 100 (worst quality - best compression)].
     *
     * @return $this
     */
    public function setImageQuality($image_quality)
    {
        $this->container['image_quality'] = $image_quality;

        return $this;
    }

    /**
     * Gets downscale_resolution
     *
     * @return int|null
     */
    public function getDownscaleResolution()
    {
        return $this->container['downscale_resolution'];
    }

    /**
     * Sets downscale_resolution
     *
     * @param int|null $downscale_resolution Specifies the resolution for downscaling the background layer, if any.
     *
     * @return $this
     */
    public function setDownscaleResolution($downscale_resolution)
    {
        $this->container['downscale_resolution'] = $downscale_resolution;

        return $this;
    }

    /**
     * Gets preserve_smoothing
     *
     * @return bool|null
     */
    public function getPreserveSmoothing()
    {
        return $this->container['preserve_smoothing'];
    }

    /**
     * Sets preserve_smoothing
     *
     * @param bool|null $preserve_smoothing Specifies whether the MRC engine should try to preserve smoothing between different layers.   Enabling this option should globally enhance the text quality but also reduce the compression rate.
     *
     * @return $this
     */
    public function setPreserveSmoothing($preserve_smoothing)
    {
        $this->container['preserve_smoothing'] = $preserve_smoothing;

        return $this;
    }

    /**
     * Gets fast_web_view
     *
     * @return bool|null
     */
    public function getFastWebView()
    {
        return $this->container['fast_web_view'];
    }

    /**
     * Sets fast_web_view
     *
     * @param bool|null $fast_web_view Specifies whether the PDF shall be optimized for online distribution.
     *
     * @return $this
     */
    public function setFastWebView($fast_web_view)
    {
        $this->container['fast_web_view'] = $fast_web_view;

        return $this;
    }

    /**
     * Gets jbig2_pms_threshold
     *
     * @return float|null
     */
    public function getJbig2PmsThreshold()
    {
        return $this->container['jbig2_pms_threshold'];
    }

    /**
     * Sets jbig2_pms_threshold
     *
     * @param float|null $jbig2_pms_threshold Specifies the threshold value for the JBIG2 encoder pattern matching and substitution between 0 and 1. Any number lower than 1 may lead to lossy compression.
     *
     * @return $this
     */
    public function setJbig2PmsThreshold($jbig2_pms_threshold)
    {
        $this->container['jbig2_pms_threshold'] = $jbig2_pms_threshold;

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


