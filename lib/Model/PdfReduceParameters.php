<?php
/**
 * PdfReduceParameters
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
 * PdfReduceParameters Class Doc Comment
 *
 * @category Class
 * @description Represents the parameters for a reduce action.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PdfReduceParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PdfReduceParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_id' => 'string',
        'output_version' => '\OpenAPI\Client\Model\PdfVersion',
        'image_quality' => '\OpenAPI\Client\Model\ImageQuality',
        'recompress_images' => 'bool',
        'enable_color_detection' => 'bool',
        'pack_document' => 'bool',
        'pack_fonts' => 'bool',
        'downscale_images' => 'bool',
        'downscale_resolution' => 'int',
        'fast_web_view' => 'bool',
        'remove_form_fields' => 'bool',
        'remove_annotations' => 'bool',
        'remove_bookmarks' => 'bool',
        'remove_hyperlinks' => 'bool',
        'remove_embedded_files' => 'bool',
        'remove_blank_pages' => 'bool',
        'remove_java_script' => 'bool',
        'enable_jpeg2000' => 'bool',
        'enable_jbig2' => 'bool',
        'enable_char_repair' => 'bool',
        'enable_mrc' => 'bool',
        'preserve_smoothing' => 'bool',
        'downscale_resolution_mrc' => 'int',
        'remove_metadata' => 'bool',
        'remove_page_thumbnails' => 'bool',
        'remove_page_piece_info' => 'bool',
        'jbig2_pms_threshold' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'file_id' => null,
        'output_version' => null,
        'image_quality' => null,
        'recompress_images' => null,
        'enable_color_detection' => null,
        'pack_document' => null,
        'pack_fonts' => null,
        'downscale_images' => null,
        'downscale_resolution' => 'int32',
        'fast_web_view' => null,
        'remove_form_fields' => null,
        'remove_annotations' => null,
        'remove_bookmarks' => null,
        'remove_hyperlinks' => null,
        'remove_embedded_files' => null,
        'remove_blank_pages' => null,
        'remove_java_script' => null,
        'enable_jpeg2000' => null,
        'enable_jbig2' => null,
        'enable_char_repair' => null,
        'enable_mrc' => null,
        'preserve_smoothing' => null,
        'downscale_resolution_mrc' => 'int32',
        'remove_metadata' => null,
        'remove_page_thumbnails' => null,
        'remove_page_piece_info' => null,
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
        'output_version' => 'OutputVersion',
        'image_quality' => 'ImageQuality',
        'recompress_images' => 'RecompressImages',
        'enable_color_detection' => 'EnableColorDetection',
        'pack_document' => 'PackDocument',
        'pack_fonts' => 'PackFonts',
        'downscale_images' => 'DownscaleImages',
        'downscale_resolution' => 'DownscaleResolution',
        'fast_web_view' => 'FastWebView',
        'remove_form_fields' => 'RemoveFormFields',
        'remove_annotations' => 'RemoveAnnotations',
        'remove_bookmarks' => 'RemoveBookmarks',
        'remove_hyperlinks' => 'RemoveHyperlinks',
        'remove_embedded_files' => 'RemoveEmbeddedFiles',
        'remove_blank_pages' => 'RemoveBlankPages',
        'remove_java_script' => 'RemoveJavaScript',
        'enable_jpeg2000' => 'EnableJPEG2000',
        'enable_jbig2' => 'EnableJBIG2',
        'enable_char_repair' => 'EnableCharRepair',
        'enable_mrc' => 'EnableMRC',
        'preserve_smoothing' => 'PreserveSmoothing',
        'downscale_resolution_mrc' => 'DownscaleResolutionMRC',
        'remove_metadata' => 'RemoveMetadata',
        'remove_page_thumbnails' => 'RemovePageThumbnails',
        'remove_page_piece_info' => 'RemovePagePieceInfo',
        'jbig2_pms_threshold' => 'JBIG2PMSThreshold'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_id' => 'setFileId',
        'output_version' => 'setOutputVersion',
        'image_quality' => 'setImageQuality',
        'recompress_images' => 'setRecompressImages',
        'enable_color_detection' => 'setEnableColorDetection',
        'pack_document' => 'setPackDocument',
        'pack_fonts' => 'setPackFonts',
        'downscale_images' => 'setDownscaleImages',
        'downscale_resolution' => 'setDownscaleResolution',
        'fast_web_view' => 'setFastWebView',
        'remove_form_fields' => 'setRemoveFormFields',
        'remove_annotations' => 'setRemoveAnnotations',
        'remove_bookmarks' => 'setRemoveBookmarks',
        'remove_hyperlinks' => 'setRemoveHyperlinks',
        'remove_embedded_files' => 'setRemoveEmbeddedFiles',
        'remove_blank_pages' => 'setRemoveBlankPages',
        'remove_java_script' => 'setRemoveJavaScript',
        'enable_jpeg2000' => 'setEnableJpeg2000',
        'enable_jbig2' => 'setEnableJbig2',
        'enable_char_repair' => 'setEnableCharRepair',
        'enable_mrc' => 'setEnableMrc',
        'preserve_smoothing' => 'setPreserveSmoothing',
        'downscale_resolution_mrc' => 'setDownscaleResolutionMrc',
        'remove_metadata' => 'setRemoveMetadata',
        'remove_page_thumbnails' => 'setRemovePageThumbnails',
        'remove_page_piece_info' => 'setRemovePagePieceInfo',
        'jbig2_pms_threshold' => 'setJbig2PmsThreshold'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_id' => 'getFileId',
        'output_version' => 'getOutputVersion',
        'image_quality' => 'getImageQuality',
        'recompress_images' => 'getRecompressImages',
        'enable_color_detection' => 'getEnableColorDetection',
        'pack_document' => 'getPackDocument',
        'pack_fonts' => 'getPackFonts',
        'downscale_images' => 'getDownscaleImages',
        'downscale_resolution' => 'getDownscaleResolution',
        'fast_web_view' => 'getFastWebView',
        'remove_form_fields' => 'getRemoveFormFields',
        'remove_annotations' => 'getRemoveAnnotations',
        'remove_bookmarks' => 'getRemoveBookmarks',
        'remove_hyperlinks' => 'getRemoveHyperlinks',
        'remove_embedded_files' => 'getRemoveEmbeddedFiles',
        'remove_blank_pages' => 'getRemoveBlankPages',
        'remove_java_script' => 'getRemoveJavaScript',
        'enable_jpeg2000' => 'getEnableJpeg2000',
        'enable_jbig2' => 'getEnableJbig2',
        'enable_char_repair' => 'getEnableCharRepair',
        'enable_mrc' => 'getEnableMrc',
        'preserve_smoothing' => 'getPreserveSmoothing',
        'downscale_resolution_mrc' => 'getDownscaleResolutionMrc',
        'remove_metadata' => 'getRemoveMetadata',
        'remove_page_thumbnails' => 'getRemovePageThumbnails',
        'remove_page_piece_info' => 'getRemovePagePieceInfo',
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
        $this->container['output_version'] = isset($data['output_version']) ? $data['output_version'] : null;
        $this->container['image_quality'] = isset($data['image_quality']) ? $data['image_quality'] : null;
        $this->container['recompress_images'] = isset($data['recompress_images']) ? $data['recompress_images'] : true;
        $this->container['enable_color_detection'] = isset($data['enable_color_detection']) ? $data['enable_color_detection'] : true;
        $this->container['pack_document'] = isset($data['pack_document']) ? $data['pack_document'] : true;
        $this->container['pack_fonts'] = isset($data['pack_fonts']) ? $data['pack_fonts'] : true;
        $this->container['downscale_images'] = isset($data['downscale_images']) ? $data['downscale_images'] : true;
        $this->container['downscale_resolution'] = isset($data['downscale_resolution']) ? $data['downscale_resolution'] : 150;
        $this->container['fast_web_view'] = isset($data['fast_web_view']) ? $data['fast_web_view'] : false;
        $this->container['remove_form_fields'] = isset($data['remove_form_fields']) ? $data['remove_form_fields'] : false;
        $this->container['remove_annotations'] = isset($data['remove_annotations']) ? $data['remove_annotations'] : false;
        $this->container['remove_bookmarks'] = isset($data['remove_bookmarks']) ? $data['remove_bookmarks'] : false;
        $this->container['remove_hyperlinks'] = isset($data['remove_hyperlinks']) ? $data['remove_hyperlinks'] : false;
        $this->container['remove_embedded_files'] = isset($data['remove_embedded_files']) ? $data['remove_embedded_files'] : false;
        $this->container['remove_blank_pages'] = isset($data['remove_blank_pages']) ? $data['remove_blank_pages'] : false;
        $this->container['remove_java_script'] = isset($data['remove_java_script']) ? $data['remove_java_script'] : false;
        $this->container['enable_jpeg2000'] = isset($data['enable_jpeg2000']) ? $data['enable_jpeg2000'] : true;
        $this->container['enable_jbig2'] = isset($data['enable_jbig2']) ? $data['enable_jbig2'] : true;
        $this->container['enable_char_repair'] = isset($data['enable_char_repair']) ? $data['enable_char_repair'] : false;
        $this->container['enable_mrc'] = isset($data['enable_mrc']) ? $data['enable_mrc'] : false;
        $this->container['preserve_smoothing'] = isset($data['preserve_smoothing']) ? $data['preserve_smoothing'] : false;
        $this->container['downscale_resolution_mrc'] = isset($data['downscale_resolution_mrc']) ? $data['downscale_resolution_mrc'] : 100;
        $this->container['remove_metadata'] = isset($data['remove_metadata']) ? $data['remove_metadata'] : false;
        $this->container['remove_page_thumbnails'] = isset($data['remove_page_thumbnails']) ? $data['remove_page_thumbnails'] : false;
        $this->container['remove_page_piece_info'] = isset($data['remove_page_piece_info']) ? $data['remove_page_piece_info'] : false;
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
     * Gets output_version
     *
     * @return \OpenAPI\Client\Model\PdfVersion|null
     */
    public function getOutputVersion()
    {
        return $this->container['output_version'];
    }

    /**
     * Sets output_version
     *
     * @param \OpenAPI\Client\Model\PdfVersion|null $output_version output_version
     *
     * @return $this
     */
    public function setOutputVersion($output_version)
    {
        $this->container['output_version'] = $output_version;

        return $this;
    }

    /**
     * Gets image_quality
     *
     * @return \OpenAPI\Client\Model\ImageQuality|null
     */
    public function getImageQuality()
    {
        return $this->container['image_quality'];
    }

    /**
     * Sets image_quality
     *
     * @param \OpenAPI\Client\Model\ImageQuality|null $image_quality image_quality
     *
     * @return $this
     */
    public function setImageQuality($image_quality)
    {
        $this->container['image_quality'] = $image_quality;

        return $this;
    }

    /**
     * Gets recompress_images
     *
     * @return bool|null
     */
    public function getRecompressImages()
    {
        return $this->container['recompress_images'];
    }

    /**
     * Sets recompress_images
     *
     * @param bool|null $recompress_images Specifies whether the images from the PDF shall be recompressed.
     *
     * @return $this
     */
    public function setRecompressImages($recompress_images)
    {
        $this->container['recompress_images'] = $recompress_images;

        return $this;
    }

    /**
     * Gets enable_color_detection
     *
     * @return bool|null
     */
    public function getEnableColorDetection()
    {
        return $this->container['enable_color_detection'];
    }

    /**
     * Sets enable_color_detection
     *
     * @param bool|null $enable_color_detection Specifies whether color detection must be performed on the images from the PDF.
     *
     * @return $this
     */
    public function setEnableColorDetection($enable_color_detection)
    {
        $this->container['enable_color_detection'] = $enable_color_detection;

        return $this;
    }

    /**
     * Gets pack_document
     *
     * @return bool|null
     */
    public function getPackDocument()
    {
        return $this->container['pack_document'];
    }

    /**
     * Sets pack_document
     *
     * @param bool|null $pack_document Specifies whether the PDF shall be packed when saved in order to reduce its size.
     *
     * @return $this
     */
    public function setPackDocument($pack_document)
    {
        $this->container['pack_document'] = $pack_document;

        return $this;
    }

    /**
     * Gets pack_fonts
     *
     * @return bool|null
     */
    public function getPackFonts()
    {
        return $this->container['pack_fonts'];
    }

    /**
     * Sets pack_fonts
     *
     * @param bool|null $pack_fonts Specifies whether the PDF fonts must be packed in order to reduce their size.
     *
     * @return $this
     */
    public function setPackFonts($pack_fonts)
    {
        $this->container['pack_fonts'] = $pack_fonts;

        return $this;
    }

    /**
     * Gets downscale_images
     *
     * @return bool|null
     */
    public function getDownscaleImages()
    {
        return $this->container['downscale_images'];
    }

    /**
     * Sets downscale_images
     *
     * @param bool|null $downscale_images Specifies whether the images from the PDF shall be downscaled.
     *
     * @return $this
     */
    public function setDownscaleImages($downscale_images)
    {
        $this->container['downscale_images'] = $downscale_images;

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
     * @param int|null $downscale_resolution Specifies the resolution to be used to downscale images.
     *
     * @return $this
     */
    public function setDownscaleResolution($downscale_resolution)
    {
        $this->container['downscale_resolution'] = $downscale_resolution;

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
     * Gets remove_form_fields
     *
     * @return bool|null
     */
    public function getRemoveFormFields()
    {
        return $this->container['remove_form_fields'];
    }

    /**
     * Sets remove_form_fields
     *
     * @param bool|null $remove_form_fields Specifies whether the form fields shall be removed from the PDF.
     *
     * @return $this
     */
    public function setRemoveFormFields($remove_form_fields)
    {
        $this->container['remove_form_fields'] = $remove_form_fields;

        return $this;
    }

    /**
     * Gets remove_annotations
     *
     * @return bool|null
     */
    public function getRemoveAnnotations()
    {
        return $this->container['remove_annotations'];
    }

    /**
     * Sets remove_annotations
     *
     * @param bool|null $remove_annotations Specifies whether the annotations shall be removed from the PDF.
     *
     * @return $this
     */
    public function setRemoveAnnotations($remove_annotations)
    {
        $this->container['remove_annotations'] = $remove_annotations;

        return $this;
    }

    /**
     * Gets remove_bookmarks
     *
     * @return bool|null
     */
    public function getRemoveBookmarks()
    {
        return $this->container['remove_bookmarks'];
    }

    /**
     * Sets remove_bookmarks
     *
     * @param bool|null $remove_bookmarks Specifies whether the bookmarks shall be removed from the PDF.
     *
     * @return $this
     */
    public function setRemoveBookmarks($remove_bookmarks)
    {
        $this->container['remove_bookmarks'] = $remove_bookmarks;

        return $this;
    }

    /**
     * Gets remove_hyperlinks
     *
     * @return bool|null
     */
    public function getRemoveHyperlinks()
    {
        return $this->container['remove_hyperlinks'];
    }

    /**
     * Sets remove_hyperlinks
     *
     * @param bool|null $remove_hyperlinks Specifies whether the hyperlinks shall be removed from the PDF.
     *
     * @return $this
     */
    public function setRemoveHyperlinks($remove_hyperlinks)
    {
        $this->container['remove_hyperlinks'] = $remove_hyperlinks;

        return $this;
    }

    /**
     * Gets remove_embedded_files
     *
     * @return bool|null
     */
    public function getRemoveEmbeddedFiles()
    {
        return $this->container['remove_embedded_files'];
    }

    /**
     * Sets remove_embedded_files
     *
     * @param bool|null $remove_embedded_files Specifies whether the embedded files shall be removed from the PDF.
     *
     * @return $this
     */
    public function setRemoveEmbeddedFiles($remove_embedded_files)
    {
        $this->container['remove_embedded_files'] = $remove_embedded_files;

        return $this;
    }

    /**
     * Gets remove_blank_pages
     *
     * @return bool|null
     */
    public function getRemoveBlankPages()
    {
        return $this->container['remove_blank_pages'];
    }

    /**
     * Sets remove_blank_pages
     *
     * @param bool|null $remove_blank_pages Specifies whether the blank pages shall be removed.
     *
     * @return $this
     */
    public function setRemoveBlankPages($remove_blank_pages)
    {
        $this->container['remove_blank_pages'] = $remove_blank_pages;

        return $this;
    }

    /**
     * Gets remove_java_script
     *
     * @return bool|null
     */
    public function getRemoveJavaScript()
    {
        return $this->container['remove_java_script'];
    }

    /**
     * Sets remove_java_script
     *
     * @param bool|null $remove_java_script Specifies whether the JavaScript shall be removed.
     *
     * @return $this
     */
    public function setRemoveJavaScript($remove_java_script)
    {
        $this->container['remove_java_script'] = $remove_java_script;

        return $this;
    }

    /**
     * Gets enable_jpeg2000
     *
     * @return bool|null
     */
    public function getEnableJpeg2000()
    {
        return $this->container['enable_jpeg2000'];
    }

    /**
     * Sets enable_jpeg2000
     *
     * @param bool|null $enable_jpeg2000 Specifies whether the JPEG2000 compression scheme shall be used to compress the images of the PDF.
     *
     * @return $this
     */
    public function setEnableJpeg2000($enable_jpeg2000)
    {
        $this->container['enable_jpeg2000'] = $enable_jpeg2000;

        return $this;
    }

    /**
     * Gets enable_jbig2
     *
     * @return bool|null
     */
    public function getEnableJbig2()
    {
        return $this->container['enable_jbig2'];
    }

    /**
     * Sets enable_jbig2
     *
     * @param bool|null $enable_jbig2 Specifies whether the JBIG2 compression scheme shall be used to compress the bitonal images of the PDF.
     *
     * @return $this
     */
    public function setEnableJbig2($enable_jbig2)
    {
        $this->container['enable_jbig2'] = $enable_jbig2;

        return $this;
    }

    /**
     * Gets enable_char_repair
     *
     * @return bool|null
     */
    public function getEnableCharRepair()
    {
        return $this->container['enable_char_repair'];
    }

    /**
     * Sets enable_char_repair
     *
     * @param bool|null $enable_char_repair Specifies whether characters repairing shall be performed during bitonal conversion.
     *
     * @return $this
     */
    public function setEnableCharRepair($enable_char_repair)
    {
        $this->container['enable_char_repair'] = $enable_char_repair;

        return $this;
    }

    /**
     * Gets enable_mrc
     *
     * @return bool|null
     */
    public function getEnableMrc()
    {
        return $this->container['enable_mrc'];
    }

    /**
     * Sets enable_mrc
     *
     * @param bool|null $enable_mrc Specifies whether MRC shall be used for compressing the PDF contents.
     *
     * @return $this
     */
    public function setEnableMrc($enable_mrc)
    {
        $this->container['enable_mrc'] = $enable_mrc;

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
     * @param bool|null $preserve_smoothing Specifies if the MRC engine shall try to preserve smoothing between different layers.
     *
     * @return $this
     */
    public function setPreserveSmoothing($preserve_smoothing)
    {
        $this->container['preserve_smoothing'] = $preserve_smoothing;

        return $this;
    }

    /**
     * Gets downscale_resolution_mrc
     *
     * @return int|null
     */
    public function getDownscaleResolutionMrc()
    {
        return $this->container['downscale_resolution_mrc'];
    }

    /**
     * Sets downscale_resolution_mrc
     *
     * @param int|null $downscale_resolution_mrc Specifies the resolution for downscaling the background layer by the MRC engine, if any.
     *
     * @return $this
     */
    public function setDownscaleResolutionMrc($downscale_resolution_mrc)
    {
        $this->container['downscale_resolution_mrc'] = $downscale_resolution_mrc;

        return $this;
    }

    /**
     * Gets remove_metadata
     *
     * @return bool|null
     */
    public function getRemoveMetadata()
    {
        return $this->container['remove_metadata'];
    }

    /**
     * Sets remove_metadata
     *
     * @param bool|null $remove_metadata Specifies whether the metadata shall be removed.
     *
     * @return $this
     */
    public function setRemoveMetadata($remove_metadata)
    {
        $this->container['remove_metadata'] = $remove_metadata;

        return $this;
    }

    /**
     * Gets remove_page_thumbnails
     *
     * @return bool|null
     */
    public function getRemovePageThumbnails()
    {
        return $this->container['remove_page_thumbnails'];
    }

    /**
     * Sets remove_page_thumbnails
     *
     * @param bool|null $remove_page_thumbnails Specifies whether the page thumbnails shall be removed.
     *
     * @return $this
     */
    public function setRemovePageThumbnails($remove_page_thumbnails)
    {
        $this->container['remove_page_thumbnails'] = $remove_page_thumbnails;

        return $this;
    }

    /**
     * Gets remove_page_piece_info
     *
     * @return bool|null
     */
    public function getRemovePagePieceInfo()
    {
        return $this->container['remove_page_piece_info'];
    }

    /**
     * Sets remove_page_piece_info
     *
     * @param bool|null $remove_page_piece_info Specifies whether the page PieceInfo dictionary used to hold private application data shall be removed.
     *
     * @return $this
     */
    public function setRemovePagePieceInfo($remove_page_piece_info)
    {
        $this->container['remove_page_piece_info'] = $remove_page_piece_info;

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


