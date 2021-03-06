<?php
/**
 * LineAnnotationEndingStyle
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
 * LineAnnotationEndingStyle Class Doc Comment
 *
 * @category Class
 * @description Specifies an line annotation&#39;s ending style.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LineAnnotationEndingStyle
{
    /**
     * Possible values of this enum
     */
    const SQUARE = 'Square';
    const CIRCLE = 'Circle';
    const DIAMOND = 'Diamond';
    const OPEN_ARROW = 'OpenArrow';
    const CLOSED_ARROW = 'ClosedArrow';
    const NONE = 'None';
    const BUTT = 'Butt';
    const REVERSED_OPEN_ARROW = 'ReversedOpenArrow';
    const REVERSED_CLOSED_ARROW = 'ReversedClosedArrow';
    const SLASH = 'Slash';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SQUARE,
            self::CIRCLE,
            self::DIAMOND,
            self::OPEN_ARROW,
            self::CLOSED_ARROW,
            self::NONE,
            self::BUTT,
            self::REVERSED_OPEN_ARROW,
            self::REVERSED_CLOSED_ARROW,
            self::SLASH,
        ];
    }
}


