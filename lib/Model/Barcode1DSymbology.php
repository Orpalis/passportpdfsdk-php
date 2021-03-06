<?php
/**
 * Barcode1DSymbology
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
 * Barcode1DSymbology Class Doc Comment
 *
 * @category Class
 * @description Defines the different supported linear barcode symbologies.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Barcode1DSymbology
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const INDUSTRIAL2OF5 = 'Industrial2of5';
    const INVERTED2OF5 = 'Inverted2of5';
    const INTERLEAVED2OF5 = 'Interleaved2of5';
    const IATA2OF5 = 'Iata2of5';
    const MATRIX2OF5 = 'Matrix2of5';
    const CODE39 = 'Code39';
    const CODEABAR = 'Codeabar';
    const BCD_MATRIX = 'BcdMatrix';
    const DATA_LOGIC2OF5 = 'DataLogic2of5';
    const CODE128 = 'Code128';
    const CODE93 = 'CODE93';
    const EAN13 = 'EAN13';
    const UPCA = 'UPCA';
    const EAN8 = 'EAN8';
    const UPCE = 'UPCE';
    const ADD5 = 'ADD5';
    const ADD2 = 'ADD2';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::INDUSTRIAL2OF5,
            self::INVERTED2OF5,
            self::INTERLEAVED2OF5,
            self::IATA2OF5,
            self::MATRIX2OF5,
            self::CODE39,
            self::CODEABAR,
            self::BCD_MATRIX,
            self::DATA_LOGIC2OF5,
            self::CODE128,
            self::CODE93,
            self::EAN13,
            self::UPCA,
            self::EAN8,
            self::UPCE,
            self::ADD5,
            self::ADD2,
        ];
    }
}


