<?php
/**
 * FontStyle
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
 * FontStyle Class Doc Comment
 *
 * @category Class
 * @description Defines the different available font styles.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FontStyle
{
    /**
     * Possible values of this enum
     */
    const REGULAR = 'Regular';
    const BOLD = 'Bold';
    const ITALIC = 'Italic';
    const BOLD_ITALIC = 'BoldItalic';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REGULAR,
            self::BOLD,
            self::ITALIC,
            self::BOLD_ITALIC,
        ];
    }
}


