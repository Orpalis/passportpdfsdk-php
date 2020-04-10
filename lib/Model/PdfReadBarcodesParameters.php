<?php
/**
 * PdfReadBarcodesParameters
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
 * PdfReadBarcodesParameters Class Doc Comment
 *
 * @category Class
 * @description Represents the parameters for a read barcode action.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PdfReadBarcodesParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PdfReadBarcodesParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_id' => 'string',
        'page_range' => 'string',
        'scan_mode' => '\OpenAPI\Client\Model\ScanMode',
        'scan_barcode1_d' => 'bool',
        'scan_barcode_qr' => 'bool',
        'scan_barcode_micro_qr' => 'bool',
        'scan_barcode_pdf417' => 'bool',
        'scan_barcode_data_matrix' => 'bool',
        'scan_barcode_aztec' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'file_id' => null,
        'page_range' => null,
        'scan_mode' => null,
        'scan_barcode1_d' => null,
        'scan_barcode_qr' => null,
        'scan_barcode_micro_qr' => null,
        'scan_barcode_pdf417' => null,
        'scan_barcode_data_matrix' => null,
        'scan_barcode_aztec' => null
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
        'scan_mode' => 'ScanMode',
        'scan_barcode1_d' => 'ScanBarcode1D',
        'scan_barcode_qr' => 'ScanBarcodeQR',
        'scan_barcode_micro_qr' => 'ScanBarcodeMicroQR',
        'scan_barcode_pdf417' => 'ScanBarcodePDF417',
        'scan_barcode_data_matrix' => 'ScanBarcodeDataMatrix',
        'scan_barcode_aztec' => 'ScanBarcodeAztec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_id' => 'setFileId',
        'page_range' => 'setPageRange',
        'scan_mode' => 'setScanMode',
        'scan_barcode1_d' => 'setScanBarcode1D',
        'scan_barcode_qr' => 'setScanBarcodeQr',
        'scan_barcode_micro_qr' => 'setScanBarcodeMicroQr',
        'scan_barcode_pdf417' => 'setScanBarcodePdf417',
        'scan_barcode_data_matrix' => 'setScanBarcodeDataMatrix',
        'scan_barcode_aztec' => 'setScanBarcodeAztec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_id' => 'getFileId',
        'page_range' => 'getPageRange',
        'scan_mode' => 'getScanMode',
        'scan_barcode1_d' => 'getScanBarcode1D',
        'scan_barcode_qr' => 'getScanBarcodeQr',
        'scan_barcode_micro_qr' => 'getScanBarcodeMicroQr',
        'scan_barcode_pdf417' => 'getScanBarcodePdf417',
        'scan_barcode_data_matrix' => 'getScanBarcodeDataMatrix',
        'scan_barcode_aztec' => 'getScanBarcodeAztec'
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
        $this->container['scan_mode'] = isset($data['scan_mode']) ? $data['scan_mode'] : null;
        $this->container['scan_barcode1_d'] = isset($data['scan_barcode1_d']) ? $data['scan_barcode1_d'] : true;
        $this->container['scan_barcode_qr'] = isset($data['scan_barcode_qr']) ? $data['scan_barcode_qr'] : true;
        $this->container['scan_barcode_micro_qr'] = isset($data['scan_barcode_micro_qr']) ? $data['scan_barcode_micro_qr'] : true;
        $this->container['scan_barcode_pdf417'] = isset($data['scan_barcode_pdf417']) ? $data['scan_barcode_pdf417'] : true;
        $this->container['scan_barcode_data_matrix'] = isset($data['scan_barcode_data_matrix']) ? $data['scan_barcode_data_matrix'] : true;
        $this->container['scan_barcode_aztec'] = isset($data['scan_barcode_aztec']) ? $data['scan_barcode_aztec'] : true;
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
     * @param string $page_range Specifies the number of the page, or the range of pages to read the barcodes from.
     *
     * @return $this
     */
    public function setPageRange($page_range)
    {
        $this->container['page_range'] = $page_range;

        return $this;
    }

    /**
     * Gets scan_mode
     *
     * @return \OpenAPI\Client\Model\ScanMode|null
     */
    public function getScanMode()
    {
        return $this->container['scan_mode'];
    }

    /**
     * Sets scan_mode
     *
     * @param \OpenAPI\Client\Model\ScanMode|null $scan_mode scan_mode
     *
     * @return $this
     */
    public function setScanMode($scan_mode)
    {
        $this->container['scan_mode'] = $scan_mode;

        return $this;
    }

    /**
     * Gets scan_barcode1_d
     *
     * @return bool|null
     */
    public function getScanBarcode1D()
    {
        return $this->container['scan_barcode1_d'];
    }

    /**
     * Sets scan_barcode1_d
     *
     * @param bool|null $scan_barcode1_d Specifies whether the barcodes of type 1D shall be read.
     *
     * @return $this
     */
    public function setScanBarcode1D($scan_barcode1_d)
    {
        $this->container['scan_barcode1_d'] = $scan_barcode1_d;

        return $this;
    }

    /**
     * Gets scan_barcode_qr
     *
     * @return bool|null
     */
    public function getScanBarcodeQr()
    {
        return $this->container['scan_barcode_qr'];
    }

    /**
     * Sets scan_barcode_qr
     *
     * @param bool|null $scan_barcode_qr Specifies whether the barcodes of type QR shall be read.
     *
     * @return $this
     */
    public function setScanBarcodeQr($scan_barcode_qr)
    {
        $this->container['scan_barcode_qr'] = $scan_barcode_qr;

        return $this;
    }

    /**
     * Gets scan_barcode_micro_qr
     *
     * @return bool|null
     */
    public function getScanBarcodeMicroQr()
    {
        return $this->container['scan_barcode_micro_qr'];
    }

    /**
     * Sets scan_barcode_micro_qr
     *
     * @param bool|null $scan_barcode_micro_qr Specifies whether the barcodes of type Micro QR shall be read.
     *
     * @return $this
     */
    public function setScanBarcodeMicroQr($scan_barcode_micro_qr)
    {
        $this->container['scan_barcode_micro_qr'] = $scan_barcode_micro_qr;

        return $this;
    }

    /**
     * Gets scan_barcode_pdf417
     *
     * @return bool|null
     */
    public function getScanBarcodePdf417()
    {
        return $this->container['scan_barcode_pdf417'];
    }

    /**
     * Sets scan_barcode_pdf417
     *
     * @param bool|null $scan_barcode_pdf417 Specifies whether the barcodes of type PDF 147 shall be read.
     *
     * @return $this
     */
    public function setScanBarcodePdf417($scan_barcode_pdf417)
    {
        $this->container['scan_barcode_pdf417'] = $scan_barcode_pdf417;

        return $this;
    }

    /**
     * Gets scan_barcode_data_matrix
     *
     * @return bool|null
     */
    public function getScanBarcodeDataMatrix()
    {
        return $this->container['scan_barcode_data_matrix'];
    }

    /**
     * Sets scan_barcode_data_matrix
     *
     * @param bool|null $scan_barcode_data_matrix Specifies whether the barcodes of type Data Matrix shall be read.
     *
     * @return $this
     */
    public function setScanBarcodeDataMatrix($scan_barcode_data_matrix)
    {
        $this->container['scan_barcode_data_matrix'] = $scan_barcode_data_matrix;

        return $this;
    }

    /**
     * Gets scan_barcode_aztec
     *
     * @return bool|null
     */
    public function getScanBarcodeAztec()
    {
        return $this->container['scan_barcode_aztec'];
    }

    /**
     * Sets scan_barcode_aztec
     *
     * @param bool|null $scan_barcode_aztec Specifies whether the barcodes of type Aztec shall be read.
     *
     * @return $this
     */
    public function setScanBarcodeAztec($scan_barcode_aztec)
    {
        $this->container['scan_barcode_aztec'] = $scan_barcode_aztec;

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


