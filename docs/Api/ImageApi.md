# OpenAPI\Client\ImageApi

All URIs are relative to *https://passportpdfapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**imageAdjust**](ImageApi.md#imageAdjust) | **POST** /api/image/ImageAdjust | Adjusts a previously uploaded image.
[**imageAutoCrop**](ImageApi.md#imageAutoCrop) | **POST** /api/image/ImageAutoCrop | Automatically crops a previously uploaded image.
[**imageCleanupDocument**](ImageApi.md#imageCleanupDocument) | **POST** /api/image/ImageCleanupDocument | Cleanup a previously uploaded image.
[**imageCloneRegions**](ImageApi.md#imageCloneRegions) | **POST** /api/image/ImageCloneRegions | Clones regions from a previously uploaded image into new images.
[**imageClose**](ImageApi.md#imageClose) | **POST** /api/image/ImageClose | Closes a previously uploaded image.
[**imageConvertColorDepth**](ImageApi.md#imageConvertColorDepth) | **POST** /api/image/ImageConvertColorDepth | Converts the color depth of a previously uploaded image.
[**imageCrop**](ImageApi.md#imageCrop) | **POST** /api/image/ImageCrop | Crops a previously uploaded image.
[**imageDeletePage**](ImageApi.md#imageDeletePage) | **POST** /api/image/ImageDeletePage | Deletes a page range from a previously uploaded image.
[**imageDetectBlankPages**](ImageApi.md#imageDetectBlankPages) | **POST** /api/image/ImageDetectBlankPages | Detects the blank page(s) from a previously uploaded image and offers to remove them.
[**imageDetectColor**](ImageApi.md#imageDetectColor) | **POST** /api/image/ImageDetectColor | Performs color detection  on a previously uploaded image.
[**imageDetectPageOrientation**](ImageApi.md#imageDetectPageOrientation) | **POST** /api/image/ImageDetectPageOrientation | Detects the orientation of the page(s) of a previously uploaded image and offers to automatically rotate them.
[**imageFilter**](ImageApi.md#imageFilter) | **POST** /api/image/ImageFilter | Applies filters to a previously uploaded image.
[**imageGetPageThumbnail**](ImageApi.md#imageGetPageThumbnail) | **POST** /api/image/ImageGetPageThumbnail | Gets a thumbnail of each page within the provided page range from a previously uploaded image.
[**imageGetSupportedFileExtensions**](ImageApi.md#imageGetSupportedFileExtensions) | **GET** /api/image/ImageGetSupportedFileExtensions | Gets the supported file extensions by the image loading actions.
[**imageLoad**](ImageApi.md#imageLoad) | **POST** /api/image/ImageLoad | Loads the provided image file.  Supported image formats can be retrieved by the GetSupportedImageFileExtensions action.
[**imageLoadMultipart**](ImageApi.md#imageLoadMultipart) | **POST** /api/image/ImageLoadMultipart | Loads the provided image file using Multipart Upload.  Supported image formats can be retrieved by the GetSupportedImageFileExtensions action.
[**imageMICR**](ImageApi.md#imageMICR) | **POST** /api/image/ImageMICR | Performs MICR (Magnetic Ink Character Recognition) on a previously uploaded image.
[**imageReadBarcodes**](ImageApi.md#imageReadBarcodes) | **POST** /api/image/ImageReadBarcodes | Reads barcodes from a previously uploaded image.
[**imageResize**](ImageApi.md#imageResize) | **POST** /api/image/ImageResize | Resizes a previously uploaded image.
[**imageRotate**](ImageApi.md#imageRotate) | **POST** /api/image/ImageRotate | Rotates and/or flips a previously uploaded image.
[**imageSaveAsJPEG**](ImageApi.md#imageSaveAsJPEG) | **POST** /api/image/ImageSaveAsJPEG | Saves a previously uploaded image as JPEG, and sends the file data in a JSON-serialized object.
[**imageSaveAsJPEGFile**](ImageApi.md#imageSaveAsJPEGFile) | **POST** /api/image/ImageSaveAsJPEGFile | Saves a previously uploaded image as JPEG, and streams the file binary data to the response (this is the most efficient download method).
[**imageSaveAsPDF**](ImageApi.md#imageSaveAsPDF) | **POST** /api/image/ImageSaveAsPDF | Saves a previously uploaded image as PDF, and sends the file data in a JSON-serialized object.
[**imageSaveAsPDFFile**](ImageApi.md#imageSaveAsPDFFile) | **POST** /api/image/ImageSaveAsPDFFile | Saves a previously uploaded image as PDF, and streams the file binary data to the response (this is the most efficient download method).
[**imageSaveAsPDFMRC**](ImageApi.md#imageSaveAsPDFMRC) | **POST** /api/image/ImageSaveAsPDFMRC | Saves a previously uploaded image as PDF using MRC compression, and sends the file data in a JSON-serialized object.
[**imageSaveAsPDFMRCFile**](ImageApi.md#imageSaveAsPDFMRCFile) | **POST** /api/image/ImageSaveAsPDFMRCFile | Saves a previously uploaded image as PDF using MRC compression, and streams the file binary data to the response (this is the most efficient download method).
[**imageSaveAsPNG**](ImageApi.md#imageSaveAsPNG) | **POST** /api/image/ImageSaveAsPNG | Saves a previously uploaded image as PNG, and sends the file data in a JSON-serialized object.
[**imageSaveAsPNGFile**](ImageApi.md#imageSaveAsPNGFile) | **POST** /api/image/ImageSaveAsPNGFile | Saves a previously uploaded image as PNG, and streams the file binary data to the response (this is the most efficient download method).
[**imageSaveAsTIFF**](ImageApi.md#imageSaveAsTIFF) | **POST** /api/image/ImageSaveAsTIFF | Saves a previously uploaded image as TIFF, and sends the file data in a JSON-serialized object.
[**imageSaveAsTIFFFile**](ImageApi.md#imageSaveAsTIFFFile) | **POST** /api/image/ImageSaveAsTIFFFile | Saves a previously uploaded image as TIFF, and streams the file binary data to the response (this is the most efficient download method).
[**imageSaveAsTIFFMultipage**](ImageApi.md#imageSaveAsTIFFMultipage) | **POST** /api/image/ImageSaveAsTIFFMultipage | Saves a previously uploaded image as multipage TIFF, and sends the file data in a JSON-serialized object.
[**imageSaveAsTIFFMultipageFile**](ImageApi.md#imageSaveAsTIFFMultipageFile) | **POST** /api/image/ImageSaveAsTIFFMultipageFile | Saves a previously uploaded image as multipage TIFF, and streams the file binary data to the response (this is the most efficient download method).
[**imageSwapPages**](ImageApi.md#imageSwapPages) | **POST** /api/image/ImageSwapPages | Swaps two pages from a previously uploaded image.



## imageAdjust

> \OpenAPI\Client\Model\ImageAdjustResponse imageAdjust($image_adjust_parameters)

Adjusts a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_adjust_parameters = new \OpenAPI\Client\Model\ImageAdjustParameters(); // \OpenAPI\Client\Model\ImageAdjustParameters | An ImageAdjustParameters object specifying the parameters for the action.

try {
    $result = $apiInstance->imageAdjust($image_adjust_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageAdjust: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_adjust_parameters** | [**\OpenAPI\Client\Model\ImageAdjustParameters**](../Model/ImageAdjustParameters.md)| An ImageAdjustParameters object specifying the parameters for the action. |

### Return type

[**\OpenAPI\Client\Model\ImageAdjustResponse**](../Model/ImageAdjustResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageAutoCrop

> \OpenAPI\Client\Model\ImageAutoCropResponse imageAutoCrop($image_auto_crop_parameters)

Automatically crops a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_auto_crop_parameters = new \OpenAPI\Client\Model\ImageAutoCropParameters(); // \OpenAPI\Client\Model\ImageAutoCropParameters | An ImageAutoCropParameters object specifying the parameters for the action.

try {
    $result = $apiInstance->imageAutoCrop($image_auto_crop_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageAutoCrop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_auto_crop_parameters** | [**\OpenAPI\Client\Model\ImageAutoCropParameters**](../Model/ImageAutoCropParameters.md)| An ImageAutoCropParameters object specifying the parameters for the action. |

### Return type

[**\OpenAPI\Client\Model\ImageAutoCropResponse**](../Model/ImageAutoCropResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageCleanupDocument

> \OpenAPI\Client\Model\ImageCleanupDocumentResponse imageCleanupDocument($image_cleanup_document_parameters)

Cleanup a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_cleanup_document_parameters = new \OpenAPI\Client\Model\ImageCleanupDocumentParameters(); // \OpenAPI\Client\Model\ImageCleanupDocumentParameters | An ImageCleanupDocumentParameters object specifying the parameters for the action.

try {
    $result = $apiInstance->imageCleanupDocument($image_cleanup_document_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageCleanupDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_cleanup_document_parameters** | [**\OpenAPI\Client\Model\ImageCleanupDocumentParameters**](../Model/ImageCleanupDocumentParameters.md)| An ImageCleanupDocumentParameters object specifying the parameters for the action. |

### Return type

[**\OpenAPI\Client\Model\ImageCleanupDocumentResponse**](../Model/ImageCleanupDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageCloneRegions

> \OpenAPI\Client\Model\ImageCloneRegionsResponse imageCloneRegions($image_clone_regions_parameters)

Clones regions from a previously uploaded image into new images.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_clone_regions_parameters = new \OpenAPI\Client\Model\ImageCloneRegionsParameters(); // \OpenAPI\Client\Model\ImageCloneRegionsParameters | An ImageCloneRegionsParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageCloneRegions($image_clone_regions_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageCloneRegions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_clone_regions_parameters** | [**\OpenAPI\Client\Model\ImageCloneRegionsParameters**](../Model/ImageCloneRegionsParameters.md)| An ImageCloneRegionsParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageCloneRegionsResponse**](../Model/ImageCloneRegionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageClose

> \OpenAPI\Client\Model\ImageCloseResponse imageClose($image_close_parameters)

Closes a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_close_parameters = new \OpenAPI\Client\Model\ImageCloseParameters(); // \OpenAPI\Client\Model\ImageCloseParameters | An ImageCloseParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageClose($image_close_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_close_parameters** | [**\OpenAPI\Client\Model\ImageCloseParameters**](../Model/ImageCloseParameters.md)| An ImageCloseParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageCloseResponse**](../Model/ImageCloseResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageConvertColorDepth

> \OpenAPI\Client\Model\ImageConvertColorDepthResponse imageConvertColorDepth($image_convert_color_depth_parameters)

Converts the color depth of a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_convert_color_depth_parameters = new \OpenAPI\Client\Model\ImageConvertColorDepthParameters(); // \OpenAPI\Client\Model\ImageConvertColorDepthParameters | An ImageConvertColorDepthParameters object specifying the parameters for the action.

try {
    $result = $apiInstance->imageConvertColorDepth($image_convert_color_depth_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageConvertColorDepth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_convert_color_depth_parameters** | [**\OpenAPI\Client\Model\ImageConvertColorDepthParameters**](../Model/ImageConvertColorDepthParameters.md)| An ImageConvertColorDepthParameters object specifying the parameters for the action. |

### Return type

[**\OpenAPI\Client\Model\ImageConvertColorDepthResponse**](../Model/ImageConvertColorDepthResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageCrop

> \OpenAPI\Client\Model\ImageCropResponse imageCrop($image_crop_parameters)

Crops a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_crop_parameters = new \OpenAPI\Client\Model\ImageCropParameters(); // \OpenAPI\Client\Model\ImageCropParameters | An ImageCropParameters object specifying the parameters for the action.

try {
    $result = $apiInstance->imageCrop($image_crop_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageCrop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_crop_parameters** | [**\OpenAPI\Client\Model\ImageCropParameters**](../Model/ImageCropParameters.md)| An ImageCropParameters object specifying the parameters for the action. |

### Return type

[**\OpenAPI\Client\Model\ImageCropResponse**](../Model/ImageCropResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageDeletePage

> \OpenAPI\Client\Model\ImageDeletePageResponse imageDeletePage($image_delete_page_parameters)

Deletes a page range from a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_delete_page_parameters = new \OpenAPI\Client\Model\ImageDeletePageParameters(); // \OpenAPI\Client\Model\ImageDeletePageParameters | An ImageDeletePageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageDeletePage($image_delete_page_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageDeletePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_delete_page_parameters** | [**\OpenAPI\Client\Model\ImageDeletePageParameters**](../Model/ImageDeletePageParameters.md)| An ImageDeletePageParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageDeletePageResponse**](../Model/ImageDeletePageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageDetectBlankPages

> \OpenAPI\Client\Model\ImageDetectBlankPagesResponse imageDetectBlankPages($image_detect_blank_pages_parameters)

Detects the blank page(s) from a previously uploaded image and offers to remove them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_detect_blank_pages_parameters = new \OpenAPI\Client\Model\ImageDetectBlankPagesParameters(); // \OpenAPI\Client\Model\ImageDetectBlankPagesParameters | An ImageDetectBlankPagesParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageDetectBlankPages($image_detect_blank_pages_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageDetectBlankPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_detect_blank_pages_parameters** | [**\OpenAPI\Client\Model\ImageDetectBlankPagesParameters**](../Model/ImageDetectBlankPagesParameters.md)| An ImageDetectBlankPagesParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageDetectBlankPagesResponse**](../Model/ImageDetectBlankPagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageDetectColor

> \OpenAPI\Client\Model\ImageDetectColorResponse imageDetectColor($image_detect_color_parameters)

Performs color detection  on a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_detect_color_parameters = new \OpenAPI\Client\Model\ImageDetectColorParameters(); // \OpenAPI\Client\Model\ImageDetectColorParameters | An ImageDetectColorParameters object specifying the parameters for the action.

try {
    $result = $apiInstance->imageDetectColor($image_detect_color_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageDetectColor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_detect_color_parameters** | [**\OpenAPI\Client\Model\ImageDetectColorParameters**](../Model/ImageDetectColorParameters.md)| An ImageDetectColorParameters object specifying the parameters for the action. |

### Return type

[**\OpenAPI\Client\Model\ImageDetectColorResponse**](../Model/ImageDetectColorResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageDetectPageOrientation

> \OpenAPI\Client\Model\ImageDetectPageOrientationResponse imageDetectPageOrientation($image_detect_page_orientation_parameters)

Detects the orientation of the page(s) of a previously uploaded image and offers to automatically rotate them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_detect_page_orientation_parameters = new \OpenAPI\Client\Model\ImageDetectPageOrientationParameters(); // \OpenAPI\Client\Model\ImageDetectPageOrientationParameters | An ImagedetectPageOrientationParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageDetectPageOrientation($image_detect_page_orientation_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageDetectPageOrientation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_detect_page_orientation_parameters** | [**\OpenAPI\Client\Model\ImageDetectPageOrientationParameters**](../Model/ImageDetectPageOrientationParameters.md)| An ImagedetectPageOrientationParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageDetectPageOrientationResponse**](../Model/ImageDetectPageOrientationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageFilter

> \OpenAPI\Client\Model\ImageFilterResponse imageFilter($image_filter_parameters)

Applies filters to a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_filter_parameters = new \OpenAPI\Client\Model\ImageFilterParameters(); // \OpenAPI\Client\Model\ImageFilterParameters | An ImageFilterParameters object specifying the parameters for the action.

try {
    $result = $apiInstance->imageFilter($image_filter_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_filter_parameters** | [**\OpenAPI\Client\Model\ImageFilterParameters**](../Model/ImageFilterParameters.md)| An ImageFilterParameters object specifying the parameters for the action. |

### Return type

[**\OpenAPI\Client\Model\ImageFilterResponse**](../Model/ImageFilterResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageGetPageThumbnail

> \OpenAPI\Client\Model\ImageGetPageThumbnailResponse imageGetPageThumbnail($image_get_page_thumbnail_parameters)

Gets a thumbnail of each page within the provided page range from a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_get_page_thumbnail_parameters = new \OpenAPI\Client\Model\ImageGetPageThumbnailParameters(); // \OpenAPI\Client\Model\ImageGetPageThumbnailParameters | A PDFGetPageThumbnailParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageGetPageThumbnail($image_get_page_thumbnail_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageGetPageThumbnail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_get_page_thumbnail_parameters** | [**\OpenAPI\Client\Model\ImageGetPageThumbnailParameters**](../Model/ImageGetPageThumbnailParameters.md)| A PDFGetPageThumbnailParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageGetPageThumbnailResponse**](../Model/ImageGetPageThumbnailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageGetSupportedFileExtensions

> \OpenAPI\Client\Model\StringArrayResponse imageGetSupportedFileExtensions()

Gets the supported file extensions by the image loading actions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->imageGetSupportedFileExtensions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageGetSupportedFileExtensions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\StringArrayResponse**](../Model/StringArrayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageLoad

> \OpenAPI\Client\Model\ImageLoadResponse imageLoad($load_image_from_byte_array_parameters)

Loads the provided image file.  Supported image formats can be retrieved by the GetSupportedImageFileExtensions action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$load_image_from_byte_array_parameters = new \OpenAPI\Client\Model\LoadImageFromByteArrayParameters(); // \OpenAPI\Client\Model\LoadImageFromByteArrayParameters | A LoadImageFromByteArrayParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageLoad($load_image_from_byte_array_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageLoad: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **load_image_from_byte_array_parameters** | [**\OpenAPI\Client\Model\LoadImageFromByteArrayParameters**](../Model/LoadImageFromByteArrayParameters.md)| A LoadImageFromByteArrayParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageLoadResponse**](../Model/ImageLoadResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageLoadMultipart

> \OpenAPI\Client\Model\ImageLoadResponse imageLoadMultipart($file_data, $load_image_parameters)

Loads the provided image file using Multipart Upload.  Supported image formats can be retrieved by the GetSupportedImageFileExtensions action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_data = "/path/to/file.txt"; // \SplFileObject | The data of the document.
$load_image_parameters = new \OpenAPI\Client\Model\LoadImageParameters(); // \OpenAPI\Client\Model\LoadImageParameters | 

try {
    $result = $apiInstance->imageLoadMultipart($file_data, $load_image_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageLoadMultipart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_data** | **\SplFileObject****\SplFileObject**| The data of the document. |
 **load_image_parameters** | [**\OpenAPI\Client\Model\LoadImageParameters**](../Model/LoadImageParameters.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ImageLoadResponse**](../Model/ImageLoadResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageMICR

> \OpenAPI\Client\Model\ImageMICRResponse imageMICR($image_micr_parameters)

Performs MICR (Magnetic Ink Character Recognition) on a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_micr_parameters = new \OpenAPI\Client\Model\ImageMICRParameters(); // \OpenAPI\Client\Model\ImageMICRParameters | An ImageMICRParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageMICR($image_micr_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageMICR: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_micr_parameters** | [**\OpenAPI\Client\Model\ImageMICRParameters**](../Model/ImageMICRParameters.md)| An ImageMICRParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageMICRResponse**](../Model/ImageMICRResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageReadBarcodes

> \OpenAPI\Client\Model\ReadBarcodesResponse imageReadBarcodes($image_read_barcodes_parameters)

Reads barcodes from a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_read_barcodes_parameters = new \OpenAPI\Client\Model\ImageReadBarcodesParameters(); // \OpenAPI\Client\Model\ImageReadBarcodesParameters | An ImageReadBarcodesParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageReadBarcodes($image_read_barcodes_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageReadBarcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_read_barcodes_parameters** | [**\OpenAPI\Client\Model\ImageReadBarcodesParameters**](../Model/ImageReadBarcodesParameters.md)| An ImageReadBarcodesParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ReadBarcodesResponse**](../Model/ReadBarcodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageResize

> \OpenAPI\Client\Model\ImageResizeResponse imageResize($image_resize_parameters)

Resizes a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_resize_parameters = new \OpenAPI\Client\Model\ImageResizeParameters(); // \OpenAPI\Client\Model\ImageResizeParameters | An ImageResizeParameters object specifying the parameters for the action.

try {
    $result = $apiInstance->imageResize($image_resize_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageResize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_resize_parameters** | [**\OpenAPI\Client\Model\ImageResizeParameters**](../Model/ImageResizeParameters.md)| An ImageResizeParameters object specifying the parameters for the action. |

### Return type

[**\OpenAPI\Client\Model\ImageResizeResponse**](../Model/ImageResizeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageRotate

> \OpenAPI\Client\Model\ImageRotateResponse imageRotate($image_rotate_parameters)

Rotates and/or flips a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_rotate_parameters = new \OpenAPI\Client\Model\ImageRotateParameters(); // \OpenAPI\Client\Model\ImageRotateParameters | An ImageRotateParameters object specifying the parameters for the action.

try {
    $result = $apiInstance->imageRotate($image_rotate_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageRotate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_rotate_parameters** | [**\OpenAPI\Client\Model\ImageRotateParameters**](../Model/ImageRotateParameters.md)| An ImageRotateParameters object specifying the parameters for the action. |

### Return type

[**\OpenAPI\Client\Model\ImageRotateResponse**](../Model/ImageRotateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSaveAsJPEG

> \OpenAPI\Client\Model\ImageSaveAsJPEGResponse imageSaveAsJPEG($image_save_as_jpeg_parameters)

Saves a previously uploaded image as JPEG, and sends the file data in a JSON-serialized object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_save_as_jpeg_parameters = new \OpenAPI\Client\Model\ImageSaveAsJPEGParameters(); // \OpenAPI\Client\Model\ImageSaveAsJPEGParameters | An ImageSaveAsJPEGParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSaveAsJPEG($image_save_as_jpeg_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSaveAsJPEG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_save_as_jpeg_parameters** | [**\OpenAPI\Client\Model\ImageSaveAsJPEGParameters**](../Model/ImageSaveAsJPEGParameters.md)| An ImageSaveAsJPEGParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageSaveAsJPEGResponse**](../Model/ImageSaveAsJPEGResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSaveAsJPEGFile

> \SplFileObject imageSaveAsJPEGFile($image_save_as_jpeg_parameters)

Saves a previously uploaded image as JPEG, and streams the file binary data to the response (this is the most efficient download method).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_save_as_jpeg_parameters = new \OpenAPI\Client\Model\ImageSaveAsJPEGParameters(); // \OpenAPI\Client\Model\ImageSaveAsJPEGParameters | An ImageSaveAsJPEGParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSaveAsJPEGFile($image_save_as_jpeg_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSaveAsJPEGFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_save_as_jpeg_parameters** | [**\OpenAPI\Client\Model\ImageSaveAsJPEGParameters**](../Model/ImageSaveAsJPEGParameters.md)| An ImageSaveAsJPEGParameters object specifying the parameters of the action. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSaveAsPDF

> \OpenAPI\Client\Model\ImageSaveAsPDFResponse imageSaveAsPDF($image_save_as_pdf_parameters)

Saves a previously uploaded image as PDF, and sends the file data in a JSON-serialized object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_save_as_pdf_parameters = new \OpenAPI\Client\Model\ImageSaveAsPDFParameters(); // \OpenAPI\Client\Model\ImageSaveAsPDFParameters | An ImagesaveAsPDFParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSaveAsPDF($image_save_as_pdf_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSaveAsPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_save_as_pdf_parameters** | [**\OpenAPI\Client\Model\ImageSaveAsPDFParameters**](../Model/ImageSaveAsPDFParameters.md)| An ImagesaveAsPDFParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageSaveAsPDFResponse**](../Model/ImageSaveAsPDFResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSaveAsPDFFile

> \SplFileObject imageSaveAsPDFFile($image_save_as_pdf_parameters)

Saves a previously uploaded image as PDF, and streams the file binary data to the response (this is the most efficient download method).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_save_as_pdf_parameters = new \OpenAPI\Client\Model\ImageSaveAsPDFParameters(); // \OpenAPI\Client\Model\ImageSaveAsPDFParameters | An ImagesaveAsPDFParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSaveAsPDFFile($image_save_as_pdf_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSaveAsPDFFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_save_as_pdf_parameters** | [**\OpenAPI\Client\Model\ImageSaveAsPDFParameters**](../Model/ImageSaveAsPDFParameters.md)| An ImagesaveAsPDFParameters object specifying the parameters of the action. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSaveAsPDFMRC

> \OpenAPI\Client\Model\ImageSaveAsPDFMRCResponse imageSaveAsPDFMRC($image_save_as_pdfmrc_parameters)

Saves a previously uploaded image as PDF using MRC compression, and sends the file data in a JSON-serialized object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_save_as_pdfmrc_parameters = new \OpenAPI\Client\Model\ImageSaveAsPDFMRCParameters(); // \OpenAPI\Client\Model\ImageSaveAsPDFMRCParameters | An ImagesaveAsPDFMRCParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSaveAsPDFMRC($image_save_as_pdfmrc_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSaveAsPDFMRC: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_save_as_pdfmrc_parameters** | [**\OpenAPI\Client\Model\ImageSaveAsPDFMRCParameters**](../Model/ImageSaveAsPDFMRCParameters.md)| An ImagesaveAsPDFMRCParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageSaveAsPDFMRCResponse**](../Model/ImageSaveAsPDFMRCResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSaveAsPDFMRCFile

> \SplFileObject imageSaveAsPDFMRCFile($image_save_as_pdfmrc_parameters)

Saves a previously uploaded image as PDF using MRC compression, and streams the file binary data to the response (this is the most efficient download method).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_save_as_pdfmrc_parameters = new \OpenAPI\Client\Model\ImageSaveAsPDFMRCParameters(); // \OpenAPI\Client\Model\ImageSaveAsPDFMRCParameters | An ImagesaveAsPDFMRCParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSaveAsPDFMRCFile($image_save_as_pdfmrc_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSaveAsPDFMRCFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_save_as_pdfmrc_parameters** | [**\OpenAPI\Client\Model\ImageSaveAsPDFMRCParameters**](../Model/ImageSaveAsPDFMRCParameters.md)| An ImagesaveAsPDFMRCParameters object specifying the parameters of the action. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSaveAsPNG

> \OpenAPI\Client\Model\ImageSaveAsPNGResponse imageSaveAsPNG($image_save_as_png_parameters)

Saves a previously uploaded image as PNG, and sends the file data in a JSON-serialized object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_save_as_png_parameters = new \OpenAPI\Client\Model\ImageSaveAsPNGParameters(); // \OpenAPI\Client\Model\ImageSaveAsPNGParameters | An ImageSaveAsPNGParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSaveAsPNG($image_save_as_png_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSaveAsPNG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_save_as_png_parameters** | [**\OpenAPI\Client\Model\ImageSaveAsPNGParameters**](../Model/ImageSaveAsPNGParameters.md)| An ImageSaveAsPNGParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageSaveAsPNGResponse**](../Model/ImageSaveAsPNGResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSaveAsPNGFile

> \SplFileObject imageSaveAsPNGFile($image_save_as_png_parameters)

Saves a previously uploaded image as PNG, and streams the file binary data to the response (this is the most efficient download method).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_save_as_png_parameters = new \OpenAPI\Client\Model\ImageSaveAsPNGParameters(); // \OpenAPI\Client\Model\ImageSaveAsPNGParameters | An ImageSaveAsPNGParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSaveAsPNGFile($image_save_as_png_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSaveAsPNGFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_save_as_png_parameters** | [**\OpenAPI\Client\Model\ImageSaveAsPNGParameters**](../Model/ImageSaveAsPNGParameters.md)| An ImageSaveAsPNGParameters object specifying the parameters of the action. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSaveAsTIFF

> \OpenAPI\Client\Model\ImageSaveAsTIFFResponse imageSaveAsTIFF($image_save_as_tiff_parameters)

Saves a previously uploaded image as TIFF, and sends the file data in a JSON-serialized object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_save_as_tiff_parameters = new \OpenAPI\Client\Model\ImageSaveAsTIFFParameters(); // \OpenAPI\Client\Model\ImageSaveAsTIFFParameters | An ImageSaveAsTIFFParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSaveAsTIFF($image_save_as_tiff_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSaveAsTIFF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_save_as_tiff_parameters** | [**\OpenAPI\Client\Model\ImageSaveAsTIFFParameters**](../Model/ImageSaveAsTIFFParameters.md)| An ImageSaveAsTIFFParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageSaveAsTIFFResponse**](../Model/ImageSaveAsTIFFResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSaveAsTIFFFile

> \SplFileObject imageSaveAsTIFFFile($image_save_as_tiff_parameters)

Saves a previously uploaded image as TIFF, and streams the file binary data to the response (this is the most efficient download method).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_save_as_tiff_parameters = new \OpenAPI\Client\Model\ImageSaveAsTIFFParameters(); // \OpenAPI\Client\Model\ImageSaveAsTIFFParameters | An ImageSaveAsTIFFParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSaveAsTIFFFile($image_save_as_tiff_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSaveAsTIFFFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_save_as_tiff_parameters** | [**\OpenAPI\Client\Model\ImageSaveAsTIFFParameters**](../Model/ImageSaveAsTIFFParameters.md)| An ImageSaveAsTIFFParameters object specifying the parameters of the action. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSaveAsTIFFMultipage

> \OpenAPI\Client\Model\ImageSaveAsTIFFMultipageResponse imageSaveAsTIFFMultipage($image_save_as_tiff_multipage_parameters)

Saves a previously uploaded image as multipage TIFF, and sends the file data in a JSON-serialized object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_save_as_tiff_multipage_parameters = new \OpenAPI\Client\Model\ImageSaveAsTIFFMultipageParameters(); // \OpenAPI\Client\Model\ImageSaveAsTIFFMultipageParameters | An ImageSaveAsTIFFMultipageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSaveAsTIFFMultipage($image_save_as_tiff_multipage_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSaveAsTIFFMultipage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_save_as_tiff_multipage_parameters** | [**\OpenAPI\Client\Model\ImageSaveAsTIFFMultipageParameters**](../Model/ImageSaveAsTIFFMultipageParameters.md)| An ImageSaveAsTIFFMultipageParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageSaveAsTIFFMultipageResponse**](../Model/ImageSaveAsTIFFMultipageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSaveAsTIFFMultipageFile

> \SplFileObject imageSaveAsTIFFMultipageFile($image_save_as_tiff_multipage_parameters)

Saves a previously uploaded image as multipage TIFF, and streams the file binary data to the response (this is the most efficient download method).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_save_as_tiff_multipage_parameters = new \OpenAPI\Client\Model\ImageSaveAsTIFFMultipageParameters(); // \OpenAPI\Client\Model\ImageSaveAsTIFFMultipageParameters | An ImageSaveAsTIFFMultipageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSaveAsTIFFMultipageFile($image_save_as_tiff_multipage_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSaveAsTIFFMultipageFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_save_as_tiff_multipage_parameters** | [**\OpenAPI\Client\Model\ImageSaveAsTIFFMultipageParameters**](../Model/ImageSaveAsTIFFMultipageParameters.md)| An ImageSaveAsTIFFMultipageParameters object specifying the parameters of the action. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## imageSwapPages

> \OpenAPI\Client\Model\ImageSwapPagesResponse imageSwapPages($image_swap_pages_parameters)

Swaps two pages from a previously uploaded image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_swap_pages_parameters = new \OpenAPI\Client\Model\ImageSwapPagesParameters(); // \OpenAPI\Client\Model\ImageSwapPagesParameters | An ImageSwapPagesParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->imageSwapPages($image_swap_pages_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageSwapPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_swap_pages_parameters** | [**\OpenAPI\Client\Model\ImageSwapPagesParameters**](../Model/ImageSwapPagesParameters.md)| An ImageSwapPagesParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\ImageSwapPagesResponse**](../Model/ImageSwapPagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

