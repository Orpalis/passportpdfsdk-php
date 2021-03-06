<?php
/**
 * PdfInitViewPageMode
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
 * PdfInitViewPageMode Class Doc Comment
 *
 * @category Class
 * @description Defines how the document shall be displayed when opened.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PdfInitViewPageMode
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const OUTLINE = 'Outline';
    const THUMBNAILS = 'Thumbnails';
    const FULL_SCREEN = 'FullScreen';
    const OC = 'OC';
    const ATTACHMENTS = 'Attachments';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::OUTLINE,
            self::THUMBNAILS,
            self::FULL_SCREEN,
            self::OC,
            self::ATTACHMENTS,
        ];
    }
}


