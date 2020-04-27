# OpenAPI\Client\PDFApi

All URIs are relative to *https://passportpdfapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**annotate**](PDFApi.md#annotate) | **POST** /api/pdf/Annotate | Annotates a previously uploaded document.
[**autoDeskew**](PDFApi.md#autoDeskew) | **POST** /api/pdf/AutoDeskew | Performs auto deskew on a page range of a previously uploaded document.
[**clearPage**](PDFApi.md#clearPage) | **POST** /api/pdf/ClearPage | Clears a page range from a previously uploaded document.
[**clonePage**](PDFApi.md#clonePage) | **POST** /api/pdf/ClonePage | Clones specific pages from a previously uploaded document to another previously uploaded document.
[**closePDF**](PDFApi.md#closePDF) | **POST** /api/pdf/ClosePDF | Closes a previously uploaded document.
[**convertToPDFA**](PDFApi.md#convertToPDFA) | **POST** /api/pdf/ConvertToPDFA | Converts a previously uploaded document to PDF/A.
[**deletePage**](PDFApi.md#deletePage) | **POST** /api/pdf/DeletePage | Deletes a page range from a previously uploaded document.
[**detectPageOrientation**](PDFApi.md#detectPageOrientation) | **POST** /api/pdf/DetectPageOrientation | Detects the orientation of the page(s) of a previously uploaded document and offers to automatically rotate them.
[**digiSign**](PDFApi.md#digiSign) | **POST** /api/pdf/DigiSign | Signs a previously uploaded document digitally.
[**drawImage**](PDFApi.md#drawImage) | **POST** /api/pdf/DrawImage | Draws an image on a page range of a previously uploaded document.
[**extractPage**](PDFApi.md#extractPage) | **POST** /api/pdf/ExtractPage | Extracts a page range from a previously uploaded document into one or several new documents.
[**extractText**](PDFApi.md#extractText) | **POST** /api/pdf/ExtractText | Extracts text from the document pages.
[**flatten**](PDFApi.md#flatten) | **POST** /api/pdf/Flatten | Flattens the form-fields, annotations, and/or the layers of a previously uploaded document.
[**getInfo**](PDFApi.md#getInfo) | **POST** /api/pdf/GetInfo | Gets information about a previously uploaded document.
[**getPDFImportSupportedFileExtensions**](PDFApi.md#getPDFImportSupportedFileExtensions) | **GET** /api/pdf/GetPDFImportSupportedFileExtensions | Gets the supported file extensions by the LoadDocumentAsPDF action.
[**getPageThumbnail**](PDFApi.md#getPageThumbnail) | **POST** /api/pdf/GetPageThumbnail | Gets a thumbnail of each page within the provided page range from a previously uploaded document.
[**insertImage**](PDFApi.md#insertImage) | **POST** /api/pdf/InsertImage | Inserts an image on a new page of a previously uploaded document.
[**insertNewPage**](PDFApi.md#insertNewPage) | **POST** /api/pdf/InsertNewPage | Inserts one or more new blank pages to a specific position in a previously uploaded document.
[**insertPageNumber**](PDFApi.md#insertPageNumber) | **POST** /api/pdf/InsertPageNumber | Inserts page number(s) on a document.
[**insertText**](PDFApi.md#insertText) | **POST** /api/pdf/InsertText | Inserts text on a document.
[**linearize**](PDFApi.md#linearize) | **POST** /api/pdf/Linearize | Linearizes a previously uploaded document.
[**loadDocumentAsPDF**](PDFApi.md#loadDocumentAsPDF) | **POST** /api/pdf/LoadDocument | Imports the provided document as PDF.  Supported document formats can be retrieved by the GetPDFImportSupportedFileExtensions action.
[**loadDocumentAsPDFMultipart**](PDFApi.md#loadDocumentAsPDFMultipart) | **POST** /api/pdf/LoadDocumentAsPDFMultipart | Imports the provided document as PDF using Multipart Upload.  Supported document formats can be retrieved by the GetPDFImportSupportedFileExtensions action.
[**merge**](PDFApi.md#merge) | **POST** /api/pdf/Merge | Merges several previously uploaded documents into a new PDF.
[**mergePages**](PDFApi.md#mergePages) | **POST** /api/pdf/MergePages | Merges multiple pages, vertically, within a previously uploaded document into one single page.
[**movePage**](PDFApi.md#movePage) | **POST** /api/pdf/MovePage | Moves a page range from a previously uploaded document.
[**oCR**](PDFApi.md#oCR) | **POST** /api/pdf/OCR | Performs optical character recognition on a page range of a previously uploaded document.  The recognized text is added as invisible text on each processed page.  No token is charged for blank pages.
[**protect**](PDFApi.md#protect) | **POST** /api/pdf/Protect | Protects a previously uploaded document.
[**readBarcodes**](PDFApi.md#readBarcodes) | **POST** /api/pdf/ReadBarcodes | Reads barcodes from a previously uploaded document.
[**reduce**](PDFApi.md#reduce) | **POST** /api/pdf/Reduce | Reduces the size of a previously uploaded document.
[**removePageFormFields**](PDFApi.md#removePageFormFields) | **POST** /api/pdf/RemovePageFormFields | Removes the form fields from a page range of a previously uploaded document.
[**removeText**](PDFApi.md#removeText) | **POST** /api/pdf/RemoveText | Removes text (all text or only invisible one) from a previously uploaded PDF.
[**reorderPages**](PDFApi.md#reorderPages) | **POST** /api/pdf/ReorderPages | Reorders pages of a previously uploaded document.
[**repairDocument**](PDFApi.md#repairDocument) | **POST** /api/pdf/RepairDocument | Repairs a previously uploaded PDF document.
[**rotatePageStandard**](PDFApi.md#rotatePageStandard) | **POST** /api/pdf/RotatePageStandard | Rotates (standardly) a page range from a previously uploaded document.
[**saveAsJPEG**](PDFApi.md#saveAsJPEG) | **POST** /api/pdf/SaveAsJPEG | Saves a previously uploaded document as JPEG, and sends the file data in a JSON-serialized object.
[**saveAsJPEGFile**](PDFApi.md#saveAsJPEGFile) | **POST** /api/pdf/SaveAsJPEGFile | Saves a previously uploaded document as JPEG, and streams the file binary data to the response (this is the most efficient download method).
[**saveAsPNG**](PDFApi.md#saveAsPNG) | **POST** /api/pdf/SaveAsPNG | Saves a previously uploaded document as PNG, and sends the file data in a JSON-serialized object.
[**saveAsPNGFile**](PDFApi.md#saveAsPNGFile) | **POST** /api/pdf/SaveAsPNGFile | Saves a previously uploaded document as PNG, and streams the file binary data to the response (this is the most efficient download method).
[**saveAsTIFF**](PDFApi.md#saveAsTIFF) | **POST** /api/pdf/SaveAsTIFF | Saves a previously uploaded document as TIFF, and sends the file data in a JSON-serialized object.
[**saveAsTIFFFile**](PDFApi.md#saveAsTIFFFile) | **POST** /api/pdf/SaveAsTIFFFile | Saves a previously uploaded document as TIFF, and streams the file binary data to the response (this is the most efficient download method).
[**saveAsTIFFMultipage**](PDFApi.md#saveAsTIFFMultipage) | **POST** /api/pdf/SaveAsTIFFMultipage | Saves a previously uploaded document as multipage TIFF, and sends the file data in a JSON-serialized object.
[**saveAsTIFFMultipageFile**](PDFApi.md#saveAsTIFFMultipageFile) | **POST** /api/pdf/SaveAsTIFFMultipageFile | Saves a previously uploaded document as multipage TIFF, and streams the file binary data to the response (this is the most efficient download method).
[**saveDocument**](PDFApi.md#saveDocument) | **POST** /api/pdf/SaveDocument | Saves a previously uploaded document as PDF, and sends the file data in a JSON-serialized object.
[**saveDocumentToFile**](PDFApi.md#saveDocumentToFile) | **POST** /api/pdf/SaveDocumentToFile | Saves a previously uploaded document as PDF, and streams the file binary data to the response (this is the most efficient download method).
[**scalePage**](PDFApi.md#scalePage) | **POST** /api/pdf/ScalePage | Scales a page range from a previously uploaded document.
[**setInfo**](PDFApi.md#setInfo) | **POST** /api/pdf/SetInfo | Sets information to a previously uploaded document.
[**setInitialView**](PDFApi.md#setInitialView) | **POST** /api/pdf/SetInitialView | Sets various document level initial view options to a previously uploaded document.
[**setPageBox**](PDFApi.md#setPageBox) | **POST** /api/pdf/SetPageBox | Sets pagebox to a page range from previously uploaded document.
[**setPassword**](PDFApi.md#setPassword) | **POST** /api/pdf/SetPassword | Unprotects a previously uploaded document.
[**split**](PDFApi.md#split) | **POST** /api/pdf/Split | Splits a previously uploaded document into new ones.
[**swapPages**](PDFApi.md#swapPages) | **POST** /api/pdf/SwapPages | Swaps two pages from a previously uploaded document.
[**unprotect**](PDFApi.md#unprotect) | **POST** /api/pdf/Unprotect | Unprotects a previously uploaded document.



## annotate

> \OpenAPI\Client\Model\PdfAnnotateResponse annotate($pdf_annotate_parameters)

Annotates a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_annotate_parameters = new \OpenAPI\Client\Model\PdfAnnotateParameters(); // \OpenAPI\Client\Model\PdfAnnotateParameters | A PdfAnnotateParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->annotate($pdf_annotate_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->annotate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_annotate_parameters** | [**\OpenAPI\Client\Model\PdfAnnotateParameters**](../Model/PdfAnnotateParameters.md)| A PdfAnnotateParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfAnnotateResponse**](../Model/PdfAnnotateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## autoDeskew

> \OpenAPI\Client\Model\PdfAutoDeskewResponse autoDeskew($pdf_auto_deskew_parameters)

Performs auto deskew on a page range of a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_auto_deskew_parameters = new \OpenAPI\Client\Model\PdfAutoDeskewParameters(); // \OpenAPI\Client\Model\PdfAutoDeskewParameters | A PdfAutoDeskewParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->autoDeskew($pdf_auto_deskew_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->autoDeskew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_auto_deskew_parameters** | [**\OpenAPI\Client\Model\PdfAutoDeskewParameters**](../Model/PdfAutoDeskewParameters.md)| A PdfAutoDeskewParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfAutoDeskewResponse**](../Model/PdfAutoDeskewResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## clearPage

> \OpenAPI\Client\Model\PdfClearPageResponse clearPage($pdf_clear_page_parameters)

Clears a page range from a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_clear_page_parameters = new \OpenAPI\Client\Model\PdfClearPageParameters(); // \OpenAPI\Client\Model\PdfClearPageParameters | A PdfClearPageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->clearPage($pdf_clear_page_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->clearPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_clear_page_parameters** | [**\OpenAPI\Client\Model\PdfClearPageParameters**](../Model/PdfClearPageParameters.md)| A PdfClearPageParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfClearPageResponse**](../Model/PdfClearPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## clonePage

> \OpenAPI\Client\Model\PdfClonePageResponse clonePage($pdf_clone_page_parameters)

Clones specific pages from a previously uploaded document to another previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_clone_page_parameters = new \OpenAPI\Client\Model\PdfClonePageParameters(); // \OpenAPI\Client\Model\PdfClonePageParameters | A PdfClonePageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->clonePage($pdf_clone_page_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->clonePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_clone_page_parameters** | [**\OpenAPI\Client\Model\PdfClonePageParameters**](../Model/PdfClonePageParameters.md)| A PdfClonePageParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfClonePageResponse**](../Model/PdfClonePageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## closePDF

> \OpenAPI\Client\Model\PdfCloseDocumentResponse closePDF($pdf_close_document_parameters)

Closes a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_close_document_parameters = new \OpenAPI\Client\Model\PdfCloseDocumentParameters(); // \OpenAPI\Client\Model\PdfCloseDocumentParameters | A PdfCloseDocumentParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->closePDF($pdf_close_document_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->closePDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_close_document_parameters** | [**\OpenAPI\Client\Model\PdfCloseDocumentParameters**](../Model/PdfCloseDocumentParameters.md)| A PdfCloseDocumentParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfCloseDocumentResponse**](../Model/PdfCloseDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## convertToPDFA

> \OpenAPI\Client\Model\PdfConvertToPDFAResponse convertToPDFA($pdf_convert_to_pdfa_parameters)

Converts a previously uploaded document to PDF/A.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_convert_to_pdfa_parameters = new \OpenAPI\Client\Model\PdfConvertToPDFAParameters(); // \OpenAPI\Client\Model\PdfConvertToPDFAParameters | A PdfConvertToPDFAParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->convertToPDFA($pdf_convert_to_pdfa_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->convertToPDFA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_convert_to_pdfa_parameters** | [**\OpenAPI\Client\Model\PdfConvertToPDFAParameters**](../Model/PdfConvertToPDFAParameters.md)| A PdfConvertToPDFAParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfConvertToPDFAResponse**](../Model/PdfConvertToPDFAResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePage

> \OpenAPI\Client\Model\PdfDeletePageResponse deletePage($pdf_delete_page_parameters)

Deletes a page range from a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_delete_page_parameters = new \OpenAPI\Client\Model\PdfDeletePageParameters(); // \OpenAPI\Client\Model\PdfDeletePageParameters | A PdfDeletePageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->deletePage($pdf_delete_page_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->deletePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_delete_page_parameters** | [**\OpenAPI\Client\Model\PdfDeletePageParameters**](../Model/PdfDeletePageParameters.md)| A PdfDeletePageParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfDeletePageResponse**](../Model/PdfDeletePageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## detectPageOrientation

> \OpenAPI\Client\Model\PdfDetectPageOrientationResponse detectPageOrientation($pdf_detect_page_orientation_parameters)

Detects the orientation of the page(s) of a previously uploaded document and offers to automatically rotate them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_detect_page_orientation_parameters = new \OpenAPI\Client\Model\PdfDetectPageOrientationParameters(); // \OpenAPI\Client\Model\PdfDetectPageOrientationParameters | A PdfDetectPageOrientationParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->detectPageOrientation($pdf_detect_page_orientation_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->detectPageOrientation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_detect_page_orientation_parameters** | [**\OpenAPI\Client\Model\PdfDetectPageOrientationParameters**](../Model/PdfDetectPageOrientationParameters.md)| A PdfDetectPageOrientationParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfDetectPageOrientationResponse**](../Model/PdfDetectPageOrientationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## digiSign

> \OpenAPI\Client\Model\PdfDigiSignResponse digiSign($pdf_digi_sign_parameters)

Signs a previously uploaded document digitally.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_digi_sign_parameters = new \OpenAPI\Client\Model\PdfDigiSignParameters(); // \OpenAPI\Client\Model\PdfDigiSignParameters | A PdfDigiSignParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->digiSign($pdf_digi_sign_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->digiSign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_digi_sign_parameters** | [**\OpenAPI\Client\Model\PdfDigiSignParameters**](../Model/PdfDigiSignParameters.md)| A PdfDigiSignParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfDigiSignResponse**](../Model/PdfDigiSignResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## drawImage

> \OpenAPI\Client\Model\PdfDrawImageResponse drawImage($pdf_draw_image_parameters)

Draws an image on a page range of a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_draw_image_parameters = new \OpenAPI\Client\Model\PdfDrawImageParameters(); // \OpenAPI\Client\Model\PdfDrawImageParameters | A PdfDrawImageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->drawImage($pdf_draw_image_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->drawImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_draw_image_parameters** | [**\OpenAPI\Client\Model\PdfDrawImageParameters**](../Model/PdfDrawImageParameters.md)| A PdfDrawImageParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfDrawImageResponse**](../Model/PdfDrawImageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## extractPage

> \OpenAPI\Client\Model\PdfExtractPageResponse extractPage($pdf_extract_page_parameters)

Extracts a page range from a previously uploaded document into one or several new documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_extract_page_parameters = new \OpenAPI\Client\Model\PdfExtractPageParameters(); // \OpenAPI\Client\Model\PdfExtractPageParameters | A PdfExtractPageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->extractPage($pdf_extract_page_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->extractPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_extract_page_parameters** | [**\OpenAPI\Client\Model\PdfExtractPageParameters**](../Model/PdfExtractPageParameters.md)| A PdfExtractPageParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfExtractPageResponse**](../Model/PdfExtractPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## extractText

> \OpenAPI\Client\Model\PdfExtractTextResponse extractText($pdf_extract_text_parameters)

Extracts text from the document pages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_extract_text_parameters = new \OpenAPI\Client\Model\PdfExtractTextParameters(); // \OpenAPI\Client\Model\PdfExtractTextParameters | A PdfExtractTextParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->extractText($pdf_extract_text_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->extractText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_extract_text_parameters** | [**\OpenAPI\Client\Model\PdfExtractTextParameters**](../Model/PdfExtractTextParameters.md)| A PdfExtractTextParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfExtractTextResponse**](../Model/PdfExtractTextResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## flatten

> \OpenAPI\Client\Model\PdfFlattenResponse flatten($pdf_flatten_parameters)

Flattens the form-fields, annotations, and/or the layers of a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_flatten_parameters = new \OpenAPI\Client\Model\PdfFlattenParameters(); // \OpenAPI\Client\Model\PdfFlattenParameters | A PdfFlatten object specifying the parameters of the action.

try {
    $result = $apiInstance->flatten($pdf_flatten_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->flatten: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_flatten_parameters** | [**\OpenAPI\Client\Model\PdfFlattenParameters**](../Model/PdfFlattenParameters.md)| A PdfFlatten object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfFlattenResponse**](../Model/PdfFlattenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInfo

> \OpenAPI\Client\Model\PdfGetInfoResponse getInfo($pdf_get_info_parameters)

Gets information about a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_get_info_parameters = new \OpenAPI\Client\Model\PdfGetInfoParameters(); // \OpenAPI\Client\Model\PdfGetInfoParameters | A PdfGetInfoParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->getInfo($pdf_get_info_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_get_info_parameters** | [**\OpenAPI\Client\Model\PdfGetInfoParameters**](../Model/PdfGetInfoParameters.md)| A PdfGetInfoParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfGetInfoResponse**](../Model/PdfGetInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPDFImportSupportedFileExtensions

> \OpenAPI\Client\Model\StringArrayResponse getPDFImportSupportedFileExtensions()

Gets the supported file extensions by the LoadDocumentAsPDF action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPDFImportSupportedFileExtensions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getPDFImportSupportedFileExtensions: ', $e->getMessage(), PHP_EOL;
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


## getPageThumbnail

> \OpenAPI\Client\Model\PdfGetPageThumbnailResponse getPageThumbnail($pdf_get_page_thumbnail_parameters)

Gets a thumbnail of each page within the provided page range from a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_get_page_thumbnail_parameters = new \OpenAPI\Client\Model\PdfGetPageThumbnailParameters(); // \OpenAPI\Client\Model\PdfGetPageThumbnailParameters | A PdfGetPageThumbnailParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->getPageThumbnail($pdf_get_page_thumbnail_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getPageThumbnail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_get_page_thumbnail_parameters** | [**\OpenAPI\Client\Model\PdfGetPageThumbnailParameters**](../Model/PdfGetPageThumbnailParameters.md)| A PdfGetPageThumbnailParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfGetPageThumbnailResponse**](../Model/PdfGetPageThumbnailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## insertImage

> \OpenAPI\Client\Model\PdfInsertImageResponse insertImage($pdf_insert_image_parameters)

Inserts an image on a new page of a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_insert_image_parameters = new \OpenAPI\Client\Model\PdfInsertImageParameters(); // \OpenAPI\Client\Model\PdfInsertImageParameters | A PdfInsertImageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->insertImage($pdf_insert_image_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->insertImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_insert_image_parameters** | [**\OpenAPI\Client\Model\PdfInsertImageParameters**](../Model/PdfInsertImageParameters.md)| A PdfInsertImageParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfInsertImageResponse**](../Model/PdfInsertImageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## insertNewPage

> \OpenAPI\Client\Model\PdfInsertNewPageResponse insertNewPage($pdf_insert_new_page_parameters)

Inserts one or more new blank pages to a specific position in a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_insert_new_page_parameters = new \OpenAPI\Client\Model\PdfInsertNewPageParameters(); // \OpenAPI\Client\Model\PdfInsertNewPageParameters | A PdfInsertNewPageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->insertNewPage($pdf_insert_new_page_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->insertNewPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_insert_new_page_parameters** | [**\OpenAPI\Client\Model\PdfInsertNewPageParameters**](../Model/PdfInsertNewPageParameters.md)| A PdfInsertNewPageParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfInsertNewPageResponse**](../Model/PdfInsertNewPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## insertPageNumber

> \OpenAPI\Client\Model\PdfInsertPageNumberResponse insertPageNumber($pdf_insert_page_number_parameters)

Inserts page number(s) on a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_insert_page_number_parameters = new \OpenAPI\Client\Model\PdfInsertPageNumberParameters(); // \OpenAPI\Client\Model\PdfInsertPageNumberParameters | A PdfInsertPageNumberParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->insertPageNumber($pdf_insert_page_number_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->insertPageNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_insert_page_number_parameters** | [**\OpenAPI\Client\Model\PdfInsertPageNumberParameters**](../Model/PdfInsertPageNumberParameters.md)| A PdfInsertPageNumberParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfInsertPageNumberResponse**](../Model/PdfInsertPageNumberResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## insertText

> \OpenAPI\Client\Model\PdfInsertTextResponse insertText($pdf_insert_text_parameters)

Inserts text on a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_insert_text_parameters = new \OpenAPI\Client\Model\PdfInsertTextParameters(); // \OpenAPI\Client\Model\PdfInsertTextParameters | A PdfInsertTextParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->insertText($pdf_insert_text_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->insertText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_insert_text_parameters** | [**\OpenAPI\Client\Model\PdfInsertTextParameters**](../Model/PdfInsertTextParameters.md)| A PdfInsertTextParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfInsertTextResponse**](../Model/PdfInsertTextResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## linearize

> \OpenAPI\Client\Model\PdfLinearizeResponse linearize($pdf_linearize_parameters)

Linearizes a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_linearize_parameters = new \OpenAPI\Client\Model\PdfLinearizeParameters(); // \OpenAPI\Client\Model\PdfLinearizeParameters | A PdfLinearizeParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->linearize($pdf_linearize_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->linearize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_linearize_parameters** | [**\OpenAPI\Client\Model\PdfLinearizeParameters**](../Model/PdfLinearizeParameters.md)| A PdfLinearizeParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfLinearizeResponse**](../Model/PdfLinearizeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## loadDocumentAsPDF

> \OpenAPI\Client\Model\PdfLoadDocumentResponse loadDocumentAsPDF($pdf_load_document_from_byte_array_parameters)

Imports the provided document as PDF.  Supported document formats can be retrieved by the GetPDFImportSupportedFileExtensions action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_load_document_from_byte_array_parameters = new \OpenAPI\Client\Model\PdfLoadDocumentFromByteArrayParameters(); // \OpenAPI\Client\Model\PdfLoadDocumentFromByteArrayParameters | A PdfLoadDocumentFromByteArrayParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->loadDocumentAsPDF($pdf_load_document_from_byte_array_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->loadDocumentAsPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_load_document_from_byte_array_parameters** | [**\OpenAPI\Client\Model\PdfLoadDocumentFromByteArrayParameters**](../Model/PdfLoadDocumentFromByteArrayParameters.md)| A PdfLoadDocumentFromByteArrayParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfLoadDocumentResponse**](../Model/PdfLoadDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## loadDocumentAsPDFMultipart

> \OpenAPI\Client\Model\PdfLoadDocumentResponse loadDocumentAsPDFMultipart($file_data, $load_document_parameters)

Imports the provided document as PDF using Multipart Upload.  Supported document formats can be retrieved by the GetPDFImportSupportedFileExtensions action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_data = "/path/to/file.txt"; // \SplFileObject | The data of the document.
$load_document_parameters = new \OpenAPI\Client\Model\PdfLoadDocumentParameters(); // \OpenAPI\Client\Model\PdfLoadDocumentParameters | 

try {
    $result = $apiInstance->loadDocumentAsPDFMultipart($file_data, $load_document_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->loadDocumentAsPDFMultipart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_data** | **\SplFileObject****\SplFileObject**| The data of the document. |
 **load_document_parameters** | [**\OpenAPI\Client\Model\PdfLoadDocumentParameters**](../Model/PdfLoadDocumentParameters.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PdfLoadDocumentResponse**](../Model/PdfLoadDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## merge

> \OpenAPI\Client\Model\PdfMergeResponse merge($pdf_merge_parameters)

Merges several previously uploaded documents into a new PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_merge_parameters = new \OpenAPI\Client\Model\PdfMergeParameters(); // \OpenAPI\Client\Model\PdfMergeParameters | A PdfMergeParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->merge($pdf_merge_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->merge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_merge_parameters** | [**\OpenAPI\Client\Model\PdfMergeParameters**](../Model/PdfMergeParameters.md)| A PdfMergeParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfMergeResponse**](../Model/PdfMergeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## mergePages

> \OpenAPI\Client\Model\PdfMergePagesResponse mergePages($pdf_merge_pages_parameters)

Merges multiple pages, vertically, within a previously uploaded document into one single page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_merge_pages_parameters = new \OpenAPI\Client\Model\PdfMergePagesParameters(); // \OpenAPI\Client\Model\PdfMergePagesParameters | A PdfMergePages object specifying the parameters of the action.

try {
    $result = $apiInstance->mergePages($pdf_merge_pages_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->mergePages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_merge_pages_parameters** | [**\OpenAPI\Client\Model\PdfMergePagesParameters**](../Model/PdfMergePagesParameters.md)| A PdfMergePages object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfMergePagesResponse**](../Model/PdfMergePagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## movePage

> \OpenAPI\Client\Model\PdfMovePageResponse movePage($pdf_move_page_parameters)

Moves a page range from a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_move_page_parameters = new \OpenAPI\Client\Model\PdfMovePageParameters(); // \OpenAPI\Client\Model\PdfMovePageParameters | A PdfMovePageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->movePage($pdf_move_page_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->movePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_move_page_parameters** | [**\OpenAPI\Client\Model\PdfMovePageParameters**](../Model/PdfMovePageParameters.md)| A PdfMovePageParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfMovePageResponse**](../Model/PdfMovePageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## oCR

> \OpenAPI\Client\Model\PdfOCRResponse oCR($pdf_ocr_parameters)

Performs optical character recognition on a page range of a previously uploaded document.  The recognized text is added as invisible text on each processed page.  No token is charged for blank pages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_ocr_parameters = new \OpenAPI\Client\Model\PdfOCRParameters(); // \OpenAPI\Client\Model\PdfOCRParameters | A PdfOCRParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->oCR($pdf_ocr_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->oCR: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_ocr_parameters** | [**\OpenAPI\Client\Model\PdfOCRParameters**](../Model/PdfOCRParameters.md)| A PdfOCRParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfOCRResponse**](../Model/PdfOCRResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## protect

> \OpenAPI\Client\Model\PdfProtectResponse protect($pdf_protect_parameters)

Protects a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_protect_parameters = new \OpenAPI\Client\Model\PdfProtectParameters(); // \OpenAPI\Client\Model\PdfProtectParameters | A PdfProtectParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->protect($pdf_protect_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->protect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_protect_parameters** | [**\OpenAPI\Client\Model\PdfProtectParameters**](../Model/PdfProtectParameters.md)| A PdfProtectParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfProtectResponse**](../Model/PdfProtectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## readBarcodes

> \OpenAPI\Client\Model\ReadBarcodesResponse readBarcodes($pdf_read_barcodes_parameters)

Reads barcodes from a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_read_barcodes_parameters = new \OpenAPI\Client\Model\PdfReadBarcodesParameters(); // \OpenAPI\Client\Model\PdfReadBarcodesParameters | A PdfReadBarcodesParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->readBarcodes($pdf_read_barcodes_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->readBarcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_read_barcodes_parameters** | [**\OpenAPI\Client\Model\PdfReadBarcodesParameters**](../Model/PdfReadBarcodesParameters.md)| A PdfReadBarcodesParameters object specifying the parameters of the action. |

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


## reduce

> \OpenAPI\Client\Model\PdfReduceResponse reduce($pdf_reduce_parameters)

Reduces the size of a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_reduce_parameters = new \OpenAPI\Client\Model\PdfReduceParameters(); // \OpenAPI\Client\Model\PdfReduceParameters | A PdfReduceParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->reduce($pdf_reduce_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->reduce: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_reduce_parameters** | [**\OpenAPI\Client\Model\PdfReduceParameters**](../Model/PdfReduceParameters.md)| A PdfReduceParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfReduceResponse**](../Model/PdfReduceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removePageFormFields

> \OpenAPI\Client\Model\PdfRemovePageFormFieldsResponse removePageFormFields($pdf_remove_page_form_fields_parameters)

Removes the form fields from a page range of a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_remove_page_form_fields_parameters = new \OpenAPI\Client\Model\PdfRemovePageFormFieldsParameters(); // \OpenAPI\Client\Model\PdfRemovePageFormFieldsParameters | A PdfRemovePageFormFieldsParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->removePageFormFields($pdf_remove_page_form_fields_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->removePageFormFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_remove_page_form_fields_parameters** | [**\OpenAPI\Client\Model\PdfRemovePageFormFieldsParameters**](../Model/PdfRemovePageFormFieldsParameters.md)| A PdfRemovePageFormFieldsParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfRemovePageFormFieldsResponse**](../Model/PdfRemovePageFormFieldsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeText

> \OpenAPI\Client\Model\PdfRemoveTextResponse removeText($pdf_remove_text_parameters)

Removes text (all text or only invisible one) from a previously uploaded PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_remove_text_parameters = new \OpenAPI\Client\Model\PdfRemoveTextParameters(); // \OpenAPI\Client\Model\PdfRemoveTextParameters | A PdfRemoveTextParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->removeText($pdf_remove_text_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->removeText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_remove_text_parameters** | [**\OpenAPI\Client\Model\PdfRemoveTextParameters**](../Model/PdfRemoveTextParameters.md)| A PdfRemoveTextParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfRemoveTextResponse**](../Model/PdfRemoveTextResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## reorderPages

> \OpenAPI\Client\Model\PdfReorderPagesResponse reorderPages($pdf_reorder_pages_parameters)

Reorders pages of a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_reorder_pages_parameters = new \OpenAPI\Client\Model\PdfReorderPagesParameters(); // \OpenAPI\Client\Model\PdfReorderPagesParameters | A PdfReorderPagesParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->reorderPages($pdf_reorder_pages_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->reorderPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_reorder_pages_parameters** | [**\OpenAPI\Client\Model\PdfReorderPagesParameters**](../Model/PdfReorderPagesParameters.md)| A PdfReorderPagesParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfReorderPagesResponse**](../Model/PdfReorderPagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## repairDocument

> \OpenAPI\Client\Model\PdfRepairDocumentResponse repairDocument($pdf_repair_document_parameters)

Repairs a previously uploaded PDF document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_repair_document_parameters = new \OpenAPI\Client\Model\PdfRepairDocumentParameters(); // \OpenAPI\Client\Model\PdfRepairDocumentParameters | A PdfRepairDocumentParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->repairDocument($pdf_repair_document_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->repairDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_repair_document_parameters** | [**\OpenAPI\Client\Model\PdfRepairDocumentParameters**](../Model/PdfRepairDocumentParameters.md)| A PdfRepairDocumentParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfRepairDocumentResponse**](../Model/PdfRepairDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## rotatePageStandard

> \OpenAPI\Client\Model\PdfRotatePageStandardResponse rotatePageStandard($pdf_rotate_page_standard_parameters)

Rotates (standardly) a page range from a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_rotate_page_standard_parameters = new \OpenAPI\Client\Model\PdfRotatePageStandardParameters(); // \OpenAPI\Client\Model\PdfRotatePageStandardParameters | A PdfRotatePageStandardParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->rotatePageStandard($pdf_rotate_page_standard_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->rotatePageStandard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_rotate_page_standard_parameters** | [**\OpenAPI\Client\Model\PdfRotatePageStandardParameters**](../Model/PdfRotatePageStandardParameters.md)| A PdfRotatePageStandardParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfRotatePageStandardResponse**](../Model/PdfRotatePageStandardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## saveAsJPEG

> \OpenAPI\Client\Model\PdfSaveAsJPEGResponse saveAsJPEG($pdf_save_as_jpeg_parameters)

Saves a previously uploaded document as JPEG, and sends the file data in a JSON-serialized object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_save_as_jpeg_parameters = new \OpenAPI\Client\Model\PdfSaveAsJPEGParameters(); // \OpenAPI\Client\Model\PdfSaveAsJPEGParameters | A PdfSaveAsJPEGParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->saveAsJPEG($pdf_save_as_jpeg_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->saveAsJPEG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_save_as_jpeg_parameters** | [**\OpenAPI\Client\Model\PdfSaveAsJPEGParameters**](../Model/PdfSaveAsJPEGParameters.md)| A PdfSaveAsJPEGParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfSaveAsJPEGResponse**](../Model/PdfSaveAsJPEGResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## saveAsJPEGFile

> \SplFileObject saveAsJPEGFile($pdf_save_as_jpeg_parameters)

Saves a previously uploaded document as JPEG, and streams the file binary data to the response (this is the most efficient download method).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_save_as_jpeg_parameters = new \OpenAPI\Client\Model\PdfSaveAsJPEGParameters(); // \OpenAPI\Client\Model\PdfSaveAsJPEGParameters | A PdfSaveAsJPEGParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->saveAsJPEGFile($pdf_save_as_jpeg_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->saveAsJPEGFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_save_as_jpeg_parameters** | [**\OpenAPI\Client\Model\PdfSaveAsJPEGParameters**](../Model/PdfSaveAsJPEGParameters.md)| A PdfSaveAsJPEGParameters object specifying the parameters of the action. |

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


## saveAsPNG

> \OpenAPI\Client\Model\PdfSaveAsPNGResponse saveAsPNG($pdf_save_as_png_parameters)

Saves a previously uploaded document as PNG, and sends the file data in a JSON-serialized object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_save_as_png_parameters = new \OpenAPI\Client\Model\PdfSaveAsPNGParameters(); // \OpenAPI\Client\Model\PdfSaveAsPNGParameters | A PdfSaveAsPNGParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->saveAsPNG($pdf_save_as_png_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->saveAsPNG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_save_as_png_parameters** | [**\OpenAPI\Client\Model\PdfSaveAsPNGParameters**](../Model/PdfSaveAsPNGParameters.md)| A PdfSaveAsPNGParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfSaveAsPNGResponse**](../Model/PdfSaveAsPNGResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## saveAsPNGFile

> \SplFileObject saveAsPNGFile($pdf_save_as_png_parameters)

Saves a previously uploaded document as PNG, and streams the file binary data to the response (this is the most efficient download method).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_save_as_png_parameters = new \OpenAPI\Client\Model\PdfSaveAsPNGParameters(); // \OpenAPI\Client\Model\PdfSaveAsPNGParameters | A PdfSaveAsPNGParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->saveAsPNGFile($pdf_save_as_png_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->saveAsPNGFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_save_as_png_parameters** | [**\OpenAPI\Client\Model\PdfSaveAsPNGParameters**](../Model/PdfSaveAsPNGParameters.md)| A PdfSaveAsPNGParameters object specifying the parameters of the action. |

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


## saveAsTIFF

> \OpenAPI\Client\Model\PdfSaveAsTIFFResponse saveAsTIFF($pdf_save_as_tiff_parameters)

Saves a previously uploaded document as TIFF, and sends the file data in a JSON-serialized object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_save_as_tiff_parameters = new \OpenAPI\Client\Model\PdfSaveAsTIFFParameters(); // \OpenAPI\Client\Model\PdfSaveAsTIFFParameters | A PdfSaveAsTIFFParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->saveAsTIFF($pdf_save_as_tiff_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->saveAsTIFF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_save_as_tiff_parameters** | [**\OpenAPI\Client\Model\PdfSaveAsTIFFParameters**](../Model/PdfSaveAsTIFFParameters.md)| A PdfSaveAsTIFFParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfSaveAsTIFFResponse**](../Model/PdfSaveAsTIFFResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## saveAsTIFFFile

> \SplFileObject saveAsTIFFFile($pdf_save_as_tiff_parameters)

Saves a previously uploaded document as TIFF, and streams the file binary data to the response (this is the most efficient download method).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_save_as_tiff_parameters = new \OpenAPI\Client\Model\PdfSaveAsTIFFParameters(); // \OpenAPI\Client\Model\PdfSaveAsTIFFParameters | A PdfSaveAsTIFFParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->saveAsTIFFFile($pdf_save_as_tiff_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->saveAsTIFFFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_save_as_tiff_parameters** | [**\OpenAPI\Client\Model\PdfSaveAsTIFFParameters**](../Model/PdfSaveAsTIFFParameters.md)| A PdfSaveAsTIFFParameters object specifying the parameters of the action. |

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


## saveAsTIFFMultipage

> \OpenAPI\Client\Model\PdfSaveAsTIFFMultipageResponse saveAsTIFFMultipage($pdf_save_as_tiff_multipage_parameters)

Saves a previously uploaded document as multipage TIFF, and sends the file data in a JSON-serialized object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_save_as_tiff_multipage_parameters = new \OpenAPI\Client\Model\PdfSaveAsTIFFMultipageParameters(); // \OpenAPI\Client\Model\PdfSaveAsTIFFMultipageParameters | A PdfSaveAsTIFFMultipageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->saveAsTIFFMultipage($pdf_save_as_tiff_multipage_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->saveAsTIFFMultipage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_save_as_tiff_multipage_parameters** | [**\OpenAPI\Client\Model\PdfSaveAsTIFFMultipageParameters**](../Model/PdfSaveAsTIFFMultipageParameters.md)| A PdfSaveAsTIFFMultipageParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfSaveAsTIFFMultipageResponse**](../Model/PdfSaveAsTIFFMultipageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## saveAsTIFFMultipageFile

> \SplFileObject saveAsTIFFMultipageFile($pdf_save_as_tiff_multipage_parameters)

Saves a previously uploaded document as multipage TIFF, and streams the file binary data to the response (this is the most efficient download method).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_save_as_tiff_multipage_parameters = new \OpenAPI\Client\Model\PdfSaveAsTIFFMultipageParameters(); // \OpenAPI\Client\Model\PdfSaveAsTIFFMultipageParameters | A PdfSaveAsTIFFMultipageParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->saveAsTIFFMultipageFile($pdf_save_as_tiff_multipage_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->saveAsTIFFMultipageFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_save_as_tiff_multipage_parameters** | [**\OpenAPI\Client\Model\PdfSaveAsTIFFMultipageParameters**](../Model/PdfSaveAsTIFFMultipageParameters.md)| A PdfSaveAsTIFFMultipageParameters object specifying the parameters of the action. |

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


## saveDocument

> \OpenAPI\Client\Model\PdfSaveDocumentResponse saveDocument($pdf_save_document_parameters)

Saves a previously uploaded document as PDF, and sends the file data in a JSON-serialized object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_save_document_parameters = new \OpenAPI\Client\Model\PdfSaveDocumentParameters(); // \OpenAPI\Client\Model\PdfSaveDocumentParameters | A PdfSaveDocumentParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->saveDocument($pdf_save_document_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->saveDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_save_document_parameters** | [**\OpenAPI\Client\Model\PdfSaveDocumentParameters**](../Model/PdfSaveDocumentParameters.md)| A PdfSaveDocumentParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfSaveDocumentResponse**](../Model/PdfSaveDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## saveDocumentToFile

> \SplFileObject saveDocumentToFile($pdf_save_document_parameters)

Saves a previously uploaded document as PDF, and streams the file binary data to the response (this is the most efficient download method).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_save_document_parameters = new \OpenAPI\Client\Model\PdfSaveDocumentParameters(); // \OpenAPI\Client\Model\PdfSaveDocumentParameters | A PdfSaveDocumentParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->saveDocumentToFile($pdf_save_document_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->saveDocumentToFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_save_document_parameters** | [**\OpenAPI\Client\Model\PdfSaveDocumentParameters**](../Model/PdfSaveDocumentParameters.md)| A PdfSaveDocumentParameters object specifying the parameters of the action. |

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


## scalePage

> \OpenAPI\Client\Model\PdfScalePageResponse scalePage($pdf_scale_page_parameters)

Scales a page range from a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_scale_page_parameters = new \OpenAPI\Client\Model\PdfScalePageParameters(); // \OpenAPI\Client\Model\PdfScalePageParameters | A PdfScalePage object specifying the parameters of the action.

try {
    $result = $apiInstance->scalePage($pdf_scale_page_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->scalePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_scale_page_parameters** | [**\OpenAPI\Client\Model\PdfScalePageParameters**](../Model/PdfScalePageParameters.md)| A PdfScalePage object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfScalePageResponse**](../Model/PdfScalePageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setInfo

> \OpenAPI\Client\Model\PdfSetInfoResponse setInfo($pdf_set_info_parameters)

Sets information to a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_set_info_parameters = new \OpenAPI\Client\Model\PdfSetInfoParameters(); // \OpenAPI\Client\Model\PdfSetInfoParameters | A PdfSetInfoParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->setInfo($pdf_set_info_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->setInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_set_info_parameters** | [**\OpenAPI\Client\Model\PdfSetInfoParameters**](../Model/PdfSetInfoParameters.md)| A PdfSetInfoParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfSetInfoResponse**](../Model/PdfSetInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setInitialView

> \OpenAPI\Client\Model\PdfSetInitialViewResponse setInitialView($pdf_set_initial_view_parameters)

Sets various document level initial view options to a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_set_initial_view_parameters = new \OpenAPI\Client\Model\PdfSetInitialViewParameters(); // \OpenAPI\Client\Model\PdfSetInitialViewParameters | A PdfsetInitialViewParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->setInitialView($pdf_set_initial_view_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->setInitialView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_set_initial_view_parameters** | [**\OpenAPI\Client\Model\PdfSetInitialViewParameters**](../Model/PdfSetInitialViewParameters.md)| A PdfsetInitialViewParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfSetInitialViewResponse**](../Model/PdfSetInitialViewResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setPageBox

> \OpenAPI\Client\Model\PdfSetPageBoxResponse setPageBox($pdf_set_page_box_parameters)

Sets pagebox to a page range from previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_set_page_box_parameters = new \OpenAPI\Client\Model\PdfSetPageBoxParameters(); // \OpenAPI\Client\Model\PdfSetPageBoxParameters | A PdfSetPageBoxParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->setPageBox($pdf_set_page_box_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->setPageBox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_set_page_box_parameters** | [**\OpenAPI\Client\Model\PdfSetPageBoxParameters**](../Model/PdfSetPageBoxParameters.md)| A PdfSetPageBoxParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfSetPageBoxResponse**](../Model/PdfSetPageBoxResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setPassword

> \OpenAPI\Client\Model\PdfSetPasswordResponse setPassword($pdf_set_password_parameters)

Unprotects a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_set_password_parameters = new \OpenAPI\Client\Model\PdfSetPasswordParameters(); // \OpenAPI\Client\Model\PdfSetPasswordParameters | A PdfSetPasswordParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->setPassword($pdf_set_password_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->setPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_set_password_parameters** | [**\OpenAPI\Client\Model\PdfSetPasswordParameters**](../Model/PdfSetPasswordParameters.md)| A PdfSetPasswordParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfSetPasswordResponse**](../Model/PdfSetPasswordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## split

> \OpenAPI\Client\Model\PdfSplitResponse split($pdf_split_parameters)

Splits a previously uploaded document into new ones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_split_parameters = new \OpenAPI\Client\Model\PdfSplitParameters(); // \OpenAPI\Client\Model\PdfSplitParameters | A PdfSplitParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->split($pdf_split_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->split: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_split_parameters** | [**\OpenAPI\Client\Model\PdfSplitParameters**](../Model/PdfSplitParameters.md)| A PdfSplitParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfSplitResponse**](../Model/PdfSplitResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## swapPages

> \OpenAPI\Client\Model\PdfSwapPagesResponse swapPages($pdf_swap_pages_parameters)

Swaps two pages from a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_swap_pages_parameters = new \OpenAPI\Client\Model\PdfSwapPagesParameters(); // \OpenAPI\Client\Model\PdfSwapPagesParameters | A PdfSwapPagesParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->swapPages($pdf_swap_pages_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->swapPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_swap_pages_parameters** | [**\OpenAPI\Client\Model\PdfSwapPagesParameters**](../Model/PdfSwapPagesParameters.md)| A PdfSwapPagesParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfSwapPagesResponse**](../Model/PdfSwapPagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## unprotect

> \OpenAPI\Client\Model\PdfUnprotectResponse unprotect($pdf_unprotect_parameters)

Unprotects a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_unprotect_parameters = new \OpenAPI\Client\Model\PdfUnprotectParameters(); // \OpenAPI\Client\Model\PdfUnprotectParameters | A PdfUnprotectParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->unprotect($pdf_unprotect_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->unprotect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_unprotect_parameters** | [**\OpenAPI\Client\Model\PdfUnprotectParameters**](../Model/PdfUnprotectParameters.md)| A PdfUnprotectParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\PdfUnprotectResponse**](../Model/PdfUnprotectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

