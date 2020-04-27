<?php
/**
 * PdfAConformance
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
 * PdfAConformance Class Doc Comment
 *
 * @category Class
 * @description Specifies the different available PDF/A conformance levels.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PdfAConformance
{
    /**
     * Possible values of this enum
     */
    const PDFA1A = 'PDFA1a';
    const PDFA1B = 'PDFA1b';
    const PDFA2A = 'PDFA2a';
    const PDFA2B = 'PDFA2b';
    const PDFA2U = 'PDFA2u';
    const PDFA3A = 'PDFA3a';
    const PDFA3B = 'PDFA3b';
    const PDFA3U = 'PDFA3u';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PDFA1A,
            self::PDFA1B,
            self::PDFA2A,
            self::PDFA2B,
            self::PDFA2U,
            self::PDFA3A,
            self::PDFA3B,
            self::PDFA3U,
        ];
    }
}


