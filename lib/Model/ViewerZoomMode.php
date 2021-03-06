<?php
/**
 * ViewerZoomMode
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
 * ViewerZoomMode Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ViewerZoomMode
{
    /**
     * Possible values of this enum
     */
    const ZOOM_MODE100 = 'ZoomMode100';
    const ZOOM_MODE_FIT_TO_VIEWER = 'ZoomModeFitToViewer';
    const ZOOM_MODE_WIDTH_VIEWER = 'ZoomModeWidthViewer';
    const ZOOM_MODE_CUSTOM = 'ZoomModeCustom';
    const ZOOM_MODE_HEIGHT_VIEWER = 'ZoomModeHeightViewer';
    const ZOOM_MODE_TO_VIEWER = 'ZoomModeToViewer';
    const ZOOM_MODE_SHRINK_TO_VIEWER_WIDTH = 'ZoomModeShrinkToViewerWidth';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ZOOM_MODE100,
            self::ZOOM_MODE_FIT_TO_VIEWER,
            self::ZOOM_MODE_WIDTH_VIEWER,
            self::ZOOM_MODE_CUSTOM,
            self::ZOOM_MODE_HEIGHT_VIEWER,
            self::ZOOM_MODE_TO_VIEWER,
            self::ZOOM_MODE_SHRINK_TO_VIEWER_WIDTH,
        ];
    }
}


