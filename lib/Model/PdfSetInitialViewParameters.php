<?php
/**
 * PdfSetInitialViewParameters
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
 * PdfSetInitialViewParameters Class Doc Comment
 *
 * @category Class
 * @description Represents the parameters for a set initial view action.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PdfSetInitialViewParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PdfSetInitialViewParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_id' => 'string',
        'page_mode' => '\OpenAPI\Client\Model\PdfInitViewPageMode',
        'layout_mode' => '\OpenAPI\Client\Model\PdfInitViewLayoutMode',
        'non_full_screen_page_mode' => '\OpenAPI\Client\Model\PdfInitViewNonFullScreenPageMode',
        'open_page' => 'int',
        'open_zoom' => 'float',
        'hide_toolbar' => 'bool',
        'hide_menubar' => 'bool',
        'hide_window_ui' => 'bool',
        'fit_window' => 'bool',
        'center_window' => 'bool',
        'display_doc_title' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'file_id' => null,
        'page_mode' => null,
        'layout_mode' => null,
        'non_full_screen_page_mode' => null,
        'open_page' => 'int32',
        'open_zoom' => 'float',
        'hide_toolbar' => null,
        'hide_menubar' => null,
        'hide_window_ui' => null,
        'fit_window' => null,
        'center_window' => null,
        'display_doc_title' => null
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
        'page_mode' => 'PageMode',
        'layout_mode' => 'LayoutMode',
        'non_full_screen_page_mode' => 'NonFullScreenPageMode',
        'open_page' => 'OpenPage',
        'open_zoom' => 'OpenZoom',
        'hide_toolbar' => 'HideToolbar',
        'hide_menubar' => 'HideMenubar',
        'hide_window_ui' => 'HideWindowUI',
        'fit_window' => 'FitWindow',
        'center_window' => 'CenterWindow',
        'display_doc_title' => 'DisplayDocTitle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_id' => 'setFileId',
        'page_mode' => 'setPageMode',
        'layout_mode' => 'setLayoutMode',
        'non_full_screen_page_mode' => 'setNonFullScreenPageMode',
        'open_page' => 'setOpenPage',
        'open_zoom' => 'setOpenZoom',
        'hide_toolbar' => 'setHideToolbar',
        'hide_menubar' => 'setHideMenubar',
        'hide_window_ui' => 'setHideWindowUi',
        'fit_window' => 'setFitWindow',
        'center_window' => 'setCenterWindow',
        'display_doc_title' => 'setDisplayDocTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_id' => 'getFileId',
        'page_mode' => 'getPageMode',
        'layout_mode' => 'getLayoutMode',
        'non_full_screen_page_mode' => 'getNonFullScreenPageMode',
        'open_page' => 'getOpenPage',
        'open_zoom' => 'getOpenZoom',
        'hide_toolbar' => 'getHideToolbar',
        'hide_menubar' => 'getHideMenubar',
        'hide_window_ui' => 'getHideWindowUi',
        'fit_window' => 'getFitWindow',
        'center_window' => 'getCenterWindow',
        'display_doc_title' => 'getDisplayDocTitle'
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
        $this->container['page_mode'] = isset($data['page_mode']) ? $data['page_mode'] : null;
        $this->container['layout_mode'] = isset($data['layout_mode']) ? $data['layout_mode'] : null;
        $this->container['non_full_screen_page_mode'] = isset($data['non_full_screen_page_mode']) ? $data['non_full_screen_page_mode'] : null;
        $this->container['open_page'] = isset($data['open_page']) ? $data['open_page'] : 1;
        $this->container['open_zoom'] = isset($data['open_zoom']) ? $data['open_zoom'] : 1;
        $this->container['hide_toolbar'] = isset($data['hide_toolbar']) ? $data['hide_toolbar'] : false;
        $this->container['hide_menubar'] = isset($data['hide_menubar']) ? $data['hide_menubar'] : false;
        $this->container['hide_window_ui'] = isset($data['hide_window_ui']) ? $data['hide_window_ui'] : false;
        $this->container['fit_window'] = isset($data['fit_window']) ? $data['fit_window'] : false;
        $this->container['center_window'] = isset($data['center_window']) ? $data['center_window'] : false;
        $this->container['display_doc_title'] = isset($data['display_doc_title']) ? $data['display_doc_title'] : false;
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
     * Gets page_mode
     *
     * @return \OpenAPI\Client\Model\PdfInitViewPageMode|null
     */
    public function getPageMode()
    {
        return $this->container['page_mode'];
    }

    /**
     * Sets page_mode
     *
     * @param \OpenAPI\Client\Model\PdfInitViewPageMode|null $page_mode page_mode
     *
     * @return $this
     */
    public function setPageMode($page_mode)
    {
        $this->container['page_mode'] = $page_mode;

        return $this;
    }

    /**
     * Gets layout_mode
     *
     * @return \OpenAPI\Client\Model\PdfInitViewLayoutMode|null
     */
    public function getLayoutMode()
    {
        return $this->container['layout_mode'];
    }

    /**
     * Sets layout_mode
     *
     * @param \OpenAPI\Client\Model\PdfInitViewLayoutMode|null $layout_mode layout_mode
     *
     * @return $this
     */
    public function setLayoutMode($layout_mode)
    {
        $this->container['layout_mode'] = $layout_mode;

        return $this;
    }

    /**
     * Gets non_full_screen_page_mode
     *
     * @return \OpenAPI\Client\Model\PdfInitViewNonFullScreenPageMode|null
     */
    public function getNonFullScreenPageMode()
    {
        return $this->container['non_full_screen_page_mode'];
    }

    /**
     * Sets non_full_screen_page_mode
     *
     * @param \OpenAPI\Client\Model\PdfInitViewNonFullScreenPageMode|null $non_full_screen_page_mode non_full_screen_page_mode
     *
     * @return $this
     */
    public function setNonFullScreenPageMode($non_full_screen_page_mode)
    {
        $this->container['non_full_screen_page_mode'] = $non_full_screen_page_mode;

        return $this;
    }

    /**
     * Gets open_page
     *
     * @return int|null
     */
    public function getOpenPage()
    {
        return $this->container['open_page'];
    }

    /**
     * Sets open_page
     *
     * @param int|null $open_page Specifies which page should be displayed when the document is opened.
     *
     * @return $this
     */
    public function setOpenPage($open_page)
    {
        $this->container['open_page'] = $open_page;

        return $this;
    }

    /**
     * Gets open_zoom
     *
     * @return float|null
     */
    public function getOpenZoom()
    {
        return $this->container['open_zoom'];
    }

    /**
     * Sets open_zoom
     *
     * @param float|null $open_zoom Specifies the default zoom factor to be used when the document is opened. Value of 1 to represent the 100% zoom, 2 means 200%, 0,5 means 50%, etc.
     *
     * @return $this
     */
    public function setOpenZoom($open_zoom)
    {
        $this->container['open_zoom'] = $open_zoom;

        return $this;
    }

    /**
     * Gets hide_toolbar
     *
     * @return bool|null
     */
    public function getHideToolbar()
    {
        return $this->container['hide_toolbar'];
    }

    /**
     * Sets hide_toolbar
     *
     * @param bool|null $hide_toolbar A flag specifying whether to hide the viewer application’s tool bars when the document is active. Default value: false.
     *
     * @return $this
     */
    public function setHideToolbar($hide_toolbar)
    {
        $this->container['hide_toolbar'] = $hide_toolbar;

        return $this;
    }

    /**
     * Gets hide_menubar
     *
     * @return bool|null
     */
    public function getHideMenubar()
    {
        return $this->container['hide_menubar'];
    }

    /**
     * Sets hide_menubar
     *
     * @param bool|null $hide_menubar (Optional) A flag specifying whether to hide the viewer application’s menu bar when the document is active. Default value: false.
     *
     * @return $this
     */
    public function setHideMenubar($hide_menubar)
    {
        $this->container['hide_menubar'] = $hide_menubar;

        return $this;
    }

    /**
     * Gets hide_window_ui
     *
     * @return bool|null
     */
    public function getHideWindowUi()
    {
        return $this->container['hide_window_ui'];
    }

    /**
     * Sets hide_window_ui
     *
     * @param bool|null $hide_window_ui (Optional) A flag specifying whether to hide user interface elements in the document’s window (such as scroll bars and navigation controls),  leaving only the document’s contents displayed. Default value: false.
     *
     * @return $this
     */
    public function setHideWindowUi($hide_window_ui)
    {
        $this->container['hide_window_ui'] = $hide_window_ui;

        return $this;
    }

    /**
     * Gets fit_window
     *
     * @return bool|null
     */
    public function getFitWindow()
    {
        return $this->container['fit_window'];
    }

    /**
     * Sets fit_window
     *
     * @param bool|null $fit_window (Optional) A flag specifying whether to resize the document’s window to fit the size of the first displayed page. Default value: false.
     *
     * @return $this
     */
    public function setFitWindow($fit_window)
    {
        $this->container['fit_window'] = $fit_window;

        return $this;
    }

    /**
     * Gets center_window
     *
     * @return bool|null
     */
    public function getCenterWindow()
    {
        return $this->container['center_window'];
    }

    /**
     * Sets center_window
     *
     * @param bool|null $center_window (Optional) A flag specifying whether to position the document’s window in the center of the screen. Default value: false.
     *
     * @return $this
     */
    public function setCenterWindow($center_window)
    {
        $this->container['center_window'] = $center_window;

        return $this;
    }

    /**
     * Gets display_doc_title
     *
     * @return bool|null
     */
    public function getDisplayDocTitle()
    {
        return $this->container['display_doc_title'];
    }

    /**
     * Sets display_doc_title
     *
     * @param bool|null $display_doc_title (Optional; PDF 1.4) A flag specifying whether the window’s title bar should display the document title taken from the Title entry of the document information dictionary.  If false, the title bar should instead display the name of the PDF file containing the document. Default value: false.
     *
     * @return $this
     */
    public function setDisplayDocTitle($display_doc_title)
    {
        $this->container['display_doc_title'] = $display_doc_title;

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


