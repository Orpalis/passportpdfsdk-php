<?php
/**
 * ReduceWarningCode
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * ReduceWarningCode Class Doc Comment
 *
 * @category Class
 * @description Specifies the different warnings which can occur during the process of a reduce action.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReduceWarningCode
{
    /**
     * Possible values of this enum
     */
    const OK = 'OK';
    const IMAGE_EXTRACTION_FAILURE = 'ImageExtractionFailure';
    const COLOR_DETECTION_FAILURE = 'ColorDetectionFailure';
    const IMAGE_RESIZE_FAILURE = 'ImageResizeFailure';
    const IMAGE_CROP_FAILURE = 'ImageCropFailure';
    const IMAGE_RESOLUTION_OBTENTION_FAILURE = 'ImageResolutionObtentionFailure';
    const IMAGE_REPLACEMENT_FAILURE = 'ImageReplacementFailure';
    const MRC_IMAGE_REPLACEMENT_FAILURE = 'MRCImageReplacementFailure';
    const PAGE_SELECTION_FAILURE = 'PageSelectionFailure';
    const IMAGE_OBTENTION_FAILURE = 'ImageObtentionFailure';
    const FILE_SIZE_REDUCTION_FAILURE = 'FileSizeReductionFailure';
    const BLANK_PAGE_REMOVAL_FAILURE = 'BlankPageRemovalFailure';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OK,
            self::IMAGE_EXTRACTION_FAILURE,
            self::COLOR_DETECTION_FAILURE,
            self::IMAGE_RESIZE_FAILURE,
            self::IMAGE_CROP_FAILURE,
            self::IMAGE_RESOLUTION_OBTENTION_FAILURE,
            self::IMAGE_REPLACEMENT_FAILURE,
            self::MRC_IMAGE_REPLACEMENT_FAILURE,
            self::PAGE_SELECTION_FAILURE,
            self::IMAGE_OBTENTION_FAILURE,
            self::FILE_SIZE_REDUCTION_FAILURE,
            self::BLANK_PAGE_REMOVAL_FAILURE,
        ];
    }
}


