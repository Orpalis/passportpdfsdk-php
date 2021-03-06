<?php
/**
 * ColorDepthConversionMethod
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
 * ColorDepthConversionMethod Class Doc Comment
 *
 * @category Class
 * @description Specifies the modes when changing the color depth of an image.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ColorDepthConversionMethod
{
    /**
     * Possible values of this enum
     */
    const DEPTH1_BPP = 'Depth1Bpp';
    const DEPTH1_BPP_OTSU = 'Depth1BppOtsu';
    const DEPTH1_BPP_BRADLEY = 'Depth1BppBradley';
    const DEPTH1_BPP_SAUVOLA = 'Depth1BppSauvola';
    const DEPTH1_BPP_FAST = 'Depth1BppFast';
    const DEPTH4_BPP16 = 'Depth4Bpp16';
    const DEPTH4_BPP_Q = 'Depth4BppQ';
    const DEPTH8_BPP_GRAY_SCALE = 'Depth8BppGrayScale';
    const DEPTH8_BPP_GRAY_SCALE_ADV = 'Depth8BppGrayScaleAdv';
    const DEPTH8_BPP216 = 'Depth8Bpp216';
    const DEPTH8_BPP_Q = 'Depth8BppQ';
    const DEPTH16_BPP_RGB555 = 'Depth16BppRGB555';
    const DEPTH16_BPP_RGB565 = 'Depth16BppRGB565';
    const DEPTH24_BPP_RGB = 'Depth24BppRGB';
    const DEPTH32_BPP_ARGB = 'Depth32BppARGB';
    const DEPTH32_BPP_RGB = 'Depth32BppRGB';
    const DEPTH32_BPP_PARGB = 'Depth32BppPARGB';
    const DEPTH48_BPP_RGB = 'Depth48BppRGB';
    const DEPTH64_BPP_ARGB = 'Depth64BppARGB';
    const DEPTH64_BPP_PARGB = 'Depth64BppPARGB';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEPTH1_BPP,
            self::DEPTH1_BPP_OTSU,
            self::DEPTH1_BPP_BRADLEY,
            self::DEPTH1_BPP_SAUVOLA,
            self::DEPTH1_BPP_FAST,
            self::DEPTH4_BPP16,
            self::DEPTH4_BPP_Q,
            self::DEPTH8_BPP_GRAY_SCALE,
            self::DEPTH8_BPP_GRAY_SCALE_ADV,
            self::DEPTH8_BPP216,
            self::DEPTH8_BPP_Q,
            self::DEPTH16_BPP_RGB555,
            self::DEPTH16_BPP_RGB565,
            self::DEPTH24_BPP_RGB,
            self::DEPTH32_BPP_ARGB,
            self::DEPTH32_BPP_RGB,
            self::DEPTH32_BPP_PARGB,
            self::DEPTH48_BPP_RGB,
            self::DEPTH64_BPP_ARGB,
            self::DEPTH64_BPP_PARGB,
        ];
    }
}


