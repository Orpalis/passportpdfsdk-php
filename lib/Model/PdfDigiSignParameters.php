<?php
/**
 * PdfDigiSignParameters
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
 * PdfDigiSignParameters Class Doc Comment
 *
 * @category Class
 * @description Represents the parameters for a digital signature action.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PdfDigiSignParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PdfDigiSignParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_id' => 'string',
        'certificate_data' => 'string',
        'certificate_password' => 'string',
        'signature_mode' => '\OpenAPI\Client\Model\SignatureMode',
        'signature_certification_level' => '\OpenAPI\Client\Model\SignatureCertificationLevel',
        'signature_hash_algorithm' => '\OpenAPI\Client\Model\SignatureHash',
        'signer_name' => 'string',
        'reason' => 'string',
        'location' => 'string',
        'contact_info' => 'string',
        'time_stamp_url' => 'string',
        'time_stamp_user_name' => 'string',
        'time_stamp_password' => 'string',
        'linearize' => 'bool',
        'draw_signature' => 'bool',
        'page_number' => 'int',
        'show_validation_mark' => 'bool',
        'image_data' => 'string',
        'signature_layout' => '\OpenAPI\Client\Model\DrawableContentLayoutParameters',
        'signature_text' => '\OpenAPI\Client\Model\PdfAlignedTextParameters'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'file_id' => null,
        'certificate_data' => 'byte',
        'certificate_password' => null,
        'signature_mode' => null,
        'signature_certification_level' => null,
        'signature_hash_algorithm' => null,
        'signer_name' => null,
        'reason' => null,
        'location' => null,
        'contact_info' => null,
        'time_stamp_url' => null,
        'time_stamp_user_name' => null,
        'time_stamp_password' => null,
        'linearize' => null,
        'draw_signature' => null,
        'page_number' => 'int32',
        'show_validation_mark' => null,
        'image_data' => 'byte',
        'signature_layout' => null,
        'signature_text' => null
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
        'certificate_data' => 'CertificateData',
        'certificate_password' => 'CertificatePassword',
        'signature_mode' => 'SignatureMode',
        'signature_certification_level' => 'SignatureCertificationLevel',
        'signature_hash_algorithm' => 'SignatureHashAlgorithm',
        'signer_name' => 'SignerName',
        'reason' => 'Reason',
        'location' => 'Location',
        'contact_info' => 'ContactInfo',
        'time_stamp_url' => 'TimeStampURL',
        'time_stamp_user_name' => 'TimeStampUserName',
        'time_stamp_password' => 'TimeStampPassword',
        'linearize' => 'Linearize',
        'draw_signature' => 'DrawSignature',
        'page_number' => 'PageNumber',
        'show_validation_mark' => 'ShowValidationMark',
        'image_data' => 'ImageData',
        'signature_layout' => 'SignatureLayout',
        'signature_text' => 'SignatureText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_id' => 'setFileId',
        'certificate_data' => 'setCertificateData',
        'certificate_password' => 'setCertificatePassword',
        'signature_mode' => 'setSignatureMode',
        'signature_certification_level' => 'setSignatureCertificationLevel',
        'signature_hash_algorithm' => 'setSignatureHashAlgorithm',
        'signer_name' => 'setSignerName',
        'reason' => 'setReason',
        'location' => 'setLocation',
        'contact_info' => 'setContactInfo',
        'time_stamp_url' => 'setTimeStampUrl',
        'time_stamp_user_name' => 'setTimeStampUserName',
        'time_stamp_password' => 'setTimeStampPassword',
        'linearize' => 'setLinearize',
        'draw_signature' => 'setDrawSignature',
        'page_number' => 'setPageNumber',
        'show_validation_mark' => 'setShowValidationMark',
        'image_data' => 'setImageData',
        'signature_layout' => 'setSignatureLayout',
        'signature_text' => 'setSignatureText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_id' => 'getFileId',
        'certificate_data' => 'getCertificateData',
        'certificate_password' => 'getCertificatePassword',
        'signature_mode' => 'getSignatureMode',
        'signature_certification_level' => 'getSignatureCertificationLevel',
        'signature_hash_algorithm' => 'getSignatureHashAlgorithm',
        'signer_name' => 'getSignerName',
        'reason' => 'getReason',
        'location' => 'getLocation',
        'contact_info' => 'getContactInfo',
        'time_stamp_url' => 'getTimeStampUrl',
        'time_stamp_user_name' => 'getTimeStampUserName',
        'time_stamp_password' => 'getTimeStampPassword',
        'linearize' => 'getLinearize',
        'draw_signature' => 'getDrawSignature',
        'page_number' => 'getPageNumber',
        'show_validation_mark' => 'getShowValidationMark',
        'image_data' => 'getImageData',
        'signature_layout' => 'getSignatureLayout',
        'signature_text' => 'getSignatureText'
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
        $this->container['certificate_data'] = isset($data['certificate_data']) ? $data['certificate_data'] : null;
        $this->container['certificate_password'] = isset($data['certificate_password']) ? $data['certificate_password'] : null;
        $this->container['signature_mode'] = isset($data['signature_mode']) ? $data['signature_mode'] : null;
        $this->container['signature_certification_level'] = isset($data['signature_certification_level']) ? $data['signature_certification_level'] : null;
        $this->container['signature_hash_algorithm'] = isset($data['signature_hash_algorithm']) ? $data['signature_hash_algorithm'] : null;
        $this->container['signer_name'] = isset($data['signer_name']) ? $data['signer_name'] : 'PassportPDF';
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : '';
        $this->container['location'] = isset($data['location']) ? $data['location'] : '';
        $this->container['contact_info'] = isset($data['contact_info']) ? $data['contact_info'] : '';
        $this->container['time_stamp_url'] = isset($data['time_stamp_url']) ? $data['time_stamp_url'] : '';
        $this->container['time_stamp_user_name'] = isset($data['time_stamp_user_name']) ? $data['time_stamp_user_name'] : '';
        $this->container['time_stamp_password'] = isset($data['time_stamp_password']) ? $data['time_stamp_password'] : '';
        $this->container['linearize'] = isset($data['linearize']) ? $data['linearize'] : false;
        $this->container['draw_signature'] = isset($data['draw_signature']) ? $data['draw_signature'] : false;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : 1;
        $this->container['show_validation_mark'] = isset($data['show_validation_mark']) ? $data['show_validation_mark'] : false;
        $this->container['image_data'] = isset($data['image_data']) ? $data['image_data'] : null;
        $this->container['signature_layout'] = isset($data['signature_layout']) ? $data['signature_layout'] : null;
        $this->container['signature_text'] = isset($data['signature_text']) ? $data['signature_text'] : null;
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
        if ($this->container['certificate_data'] === null) {
            $invalidProperties[] = "'certificate_data' can't be null";
        }
        if ($this->container['certificate_password'] === null) {
            $invalidProperties[] = "'certificate_password' can't be null";
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
     * Gets certificate_data
     *
     * @return string
     */
    public function getCertificateData()
    {
        return $this->container['certificate_data'];
    }

    /**
     * Sets certificate_data
     *
     * @param string $certificate_data Specifies the data of the digital PKCS#12 certificate file.
     *
     * @return $this
     */
    public function setCertificateData($certificate_data)
    {
        $this->container['certificate_data'] = $certificate_data;

        return $this;
    }

    /**
     * Gets certificate_password
     *
     * @return string
     */
    public function getCertificatePassword()
    {
        return $this->container['certificate_password'];
    }

    /**
     * Sets certificate_password
     *
     * @param string $certificate_password Specifies the certificate password.
     *
     * @return $this
     */
    public function setCertificatePassword($certificate_password)
    {
        $this->container['certificate_password'] = $certificate_password;

        return $this;
    }

    /**
     * Gets signature_mode
     *
     * @return \OpenAPI\Client\Model\SignatureMode|null
     */
    public function getSignatureMode()
    {
        return $this->container['signature_mode'];
    }

    /**
     * Sets signature_mode
     *
     * @param \OpenAPI\Client\Model\SignatureMode|null $signature_mode signature_mode
     *
     * @return $this
     */
    public function setSignatureMode($signature_mode)
    {
        $this->container['signature_mode'] = $signature_mode;

        return $this;
    }

    /**
     * Gets signature_certification_level
     *
     * @return \OpenAPI\Client\Model\SignatureCertificationLevel|null
     */
    public function getSignatureCertificationLevel()
    {
        return $this->container['signature_certification_level'];
    }

    /**
     * Sets signature_certification_level
     *
     * @param \OpenAPI\Client\Model\SignatureCertificationLevel|null $signature_certification_level signature_certification_level
     *
     * @return $this
     */
    public function setSignatureCertificationLevel($signature_certification_level)
    {
        $this->container['signature_certification_level'] = $signature_certification_level;

        return $this;
    }

    /**
     * Gets signature_hash_algorithm
     *
     * @return \OpenAPI\Client\Model\SignatureHash|null
     */
    public function getSignatureHashAlgorithm()
    {
        return $this->container['signature_hash_algorithm'];
    }

    /**
     * Sets signature_hash_algorithm
     *
     * @param \OpenAPI\Client\Model\SignatureHash|null $signature_hash_algorithm signature_hash_algorithm
     *
     * @return $this
     */
    public function setSignatureHashAlgorithm($signature_hash_algorithm)
    {
        $this->container['signature_hash_algorithm'] = $signature_hash_algorithm;

        return $this;
    }

    /**
     * Gets signer_name
     *
     * @return string|null
     */
    public function getSignerName()
    {
        return $this->container['signer_name'];
    }

    /**
     * Sets signer_name
     *
     * @param string|null $signer_name Specifies the name of the signer.
     *
     * @return $this
     */
    public function setSignerName($signer_name)
    {
        $this->container['signer_name'] = $signer_name;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason Specifies the reason of the signature.
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location Specifies the location where the signature is applied.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets contact_info
     *
     * @return string|null
     */
    public function getContactInfo()
    {
        return $this->container['contact_info'];
    }

    /**
     * Sets contact_info
     *
     * @param string|null $contact_info Specifies contact information about the signer.
     *
     * @return $this
     */
    public function setContactInfo($contact_info)
    {
        $this->container['contact_info'] = $contact_info;

        return $this;
    }

    /**
     * Gets time_stamp_url
     *
     * @return string|null
     */
    public function getTimeStampUrl()
    {
        return $this->container['time_stamp_url'];
    }

    /**
     * Sets time_stamp_url
     *
     * @param string|null $time_stamp_url Specifies the URL of the server responsible of providing a time stamp.
     *
     * @return $this
     */
    public function setTimeStampUrl($time_stamp_url)
    {
        $this->container['time_stamp_url'] = $time_stamp_url;

        return $this;
    }

    /**
     * Gets time_stamp_user_name
     *
     * @return string|null
     */
    public function getTimeStampUserName()
    {
        return $this->container['time_stamp_user_name'];
    }

    /**
     * Sets time_stamp_user_name
     *
     * @param string|null $time_stamp_user_name Specifies the optional user name associated with the time stamp server.
     *
     * @return $this
     */
    public function setTimeStampUserName($time_stamp_user_name)
    {
        $this->container['time_stamp_user_name'] = $time_stamp_user_name;

        return $this;
    }

    /**
     * Gets time_stamp_password
     *
     * @return string|null
     */
    public function getTimeStampPassword()
    {
        return $this->container['time_stamp_password'];
    }

    /**
     * Sets time_stamp_password
     *
     * @param string|null $time_stamp_password Specifies the optional password associated with the time stamp server.
     *
     * @return $this
     */
    public function setTimeStampPassword($time_stamp_password)
    {
        $this->container['time_stamp_password'] = $time_stamp_password;

        return $this;
    }

    /**
     * Gets linearize
     *
     * @return bool|null
     */
    public function getLinearize()
    {
        return $this->container['linearize'];
    }

    /**
     * Sets linearize
     *
     * @param bool|null $linearize Specifies whether the signed PDF shall be linearized.
     *
     * @return $this
     */
    public function setLinearize($linearize)
    {
        $this->container['linearize'] = $linearize;

        return $this;
    }

    /**
     * Gets draw_signature
     *
     * @return bool|null
     */
    public function getDrawSignature()
    {
        return $this->container['draw_signature'];
    }

    /**
     * Sets draw_signature
     *
     * @param bool|null $draw_signature Specifies whether the signature shall be drawn on the document.
     *
     * @return $this
     */
    public function setDrawSignature($draw_signature)
    {
        $this->container['draw_signature'] = $draw_signature;

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
     * @param int|null $page_number Specifies the number of the page on which the signature shall be drawn.
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets show_validation_mark
     *
     * @return bool|null
     */
    public function getShowValidationMark()
    {
        return $this->container['show_validation_mark'];
    }

    /**
     * Sets show_validation_mark
     *
     * @param bool|null $show_validation_mark Specifies whether a validation mark shall be drawn with the signature.
     *
     * @return $this
     */
    public function setShowValidationMark($show_validation_mark)
    {
        $this->container['show_validation_mark'] = $show_validation_mark;

        return $this;
    }

    /**
     * Gets image_data
     *
     * @return string|null
     */
    public function getImageData()
    {
        return $this->container['image_data'];
    }

    /**
     * Sets image_data
     *
     * @param string|null $image_data Specifies the data of the image to be drawn at the signature location.
     *
     * @return $this
     */
    public function setImageData($image_data)
    {
        $this->container['image_data'] = $image_data;

        return $this;
    }

    /**
     * Gets signature_layout
     *
     * @return \OpenAPI\Client\Model\DrawableContentLayoutParameters|null
     */
    public function getSignatureLayout()
    {
        return $this->container['signature_layout'];
    }

    /**
     * Sets signature_layout
     *
     * @param \OpenAPI\Client\Model\DrawableContentLayoutParameters|null $signature_layout signature_layout
     *
     * @return $this
     */
    public function setSignatureLayout($signature_layout)
    {
        $this->container['signature_layout'] = $signature_layout;

        return $this;
    }

    /**
     * Gets signature_text
     *
     * @return \OpenAPI\Client\Model\PdfAlignedTextParameters|null
     */
    public function getSignatureText()
    {
        return $this->container['signature_text'];
    }

    /**
     * Sets signature_text
     *
     * @param \OpenAPI\Client\Model\PdfAlignedTextParameters|null $signature_text signature_text
     *
     * @return $this
     */
    public function setSignatureText($signature_text)
    {
        $this->container['signature_text'] = $signature_text;

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

