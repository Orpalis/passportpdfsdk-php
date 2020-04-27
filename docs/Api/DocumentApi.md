# OpenAPI\Client\DocumentApi

All URIs are relative to *https://passportpdfapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentClose**](DocumentApi.md#documentClose) | **POST** /api/document/DocumentClose | Closes a previously uploaded document.
[**documentGetPreview**](DocumentApi.md#documentGetPreview) | **POST** /api/document/DocumentGetPreview | Gets the format, the page count and a thumbnail of a previously uploaded document.
[**documentLoad**](DocumentApi.md#documentLoad) | **POST** /api/document/DocumentLoad | Loads the provided document file.
[**documentLoadFromURI**](DocumentApi.md#documentLoadFromURI) | **POST** /api/document/DocumentLoadFromURI | Loads the provided document file from an URI.
[**documentLoadMultipart**](DocumentApi.md#documentLoadMultipart) | **POST** /api/document/DocumentLoadMultipart | Loads the provided document file using Multipart Upload.



## documentClose

> \OpenAPI\Client\Model\DocumentCloseResponse documentClose($document_close_parameters)

Closes a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_close_parameters = new \OpenAPI\Client\Model\DocumentCloseParameters(); // \OpenAPI\Client\Model\DocumentCloseParameters | A DocumentCloseParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->documentClose($document_close_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_close_parameters** | [**\OpenAPI\Client\Model\DocumentCloseParameters**](../Model/DocumentCloseParameters.md)| A DocumentCloseParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\DocumentCloseResponse**](../Model/DocumentCloseResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## documentGetPreview

> \OpenAPI\Client\Model\DocumentGetPreviewResponse documentGetPreview($get_document_preview_parameters)

Gets the format, the page count and a thumbnail of a previously uploaded document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_document_preview_parameters = new \OpenAPI\Client\Model\GetDocumentPreviewParameters(); // \OpenAPI\Client\Model\GetDocumentPreviewParameters | A GetDocumentPreviewParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->documentGetPreview($get_document_preview_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentGetPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_document_preview_parameters** | [**\OpenAPI\Client\Model\GetDocumentPreviewParameters**](../Model/GetDocumentPreviewParameters.md)| A GetDocumentPreviewParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\DocumentGetPreviewResponse**](../Model/DocumentGetPreviewResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## documentLoad

> \OpenAPI\Client\Model\DocumentLoadResponse documentLoad($load_document_from_byte_array_parameters)

Loads the provided document file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$load_document_from_byte_array_parameters = new \OpenAPI\Client\Model\LoadDocumentFromByteArrayParameters(); // \OpenAPI\Client\Model\LoadDocumentFromByteArrayParameters | A LoadDocumentFromByteArrayParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->documentLoad($load_document_from_byte_array_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentLoad: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **load_document_from_byte_array_parameters** | [**\OpenAPI\Client\Model\LoadDocumentFromByteArrayParameters**](../Model/LoadDocumentFromByteArrayParameters.md)| A LoadDocumentFromByteArrayParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\DocumentLoadResponse**](../Model/DocumentLoadResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## documentLoadFromURI

> \OpenAPI\Client\Model\DocumentLoadResponse documentLoadFromURI($load_document_from_uri_parameters)

Loads the provided document file from an URI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$load_document_from_uri_parameters = new \OpenAPI\Client\Model\LoadDocumentFromURIParameters(); // \OpenAPI\Client\Model\LoadDocumentFromURIParameters | A LoadDocumentFromURIParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->documentLoadFromURI($load_document_from_uri_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentLoadFromURI: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **load_document_from_uri_parameters** | [**\OpenAPI\Client\Model\LoadDocumentFromURIParameters**](../Model/LoadDocumentFromURIParameters.md)| A LoadDocumentFromURIParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\DocumentLoadResponse**](../Model/DocumentLoadResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## documentLoadMultipart

> \OpenAPI\Client\Model\DocumentLoadResponse documentLoadMultipart($file_data, $load_document_parameters)

Loads the provided document file using Multipart Upload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_data = "/path/to/file.txt"; // \SplFileObject | The data of the document.
$load_document_parameters = new \OpenAPI\Client\Model\LoadDocumentParameters(); // \OpenAPI\Client\Model\LoadDocumentParameters | 

try {
    $result = $apiInstance->documentLoadMultipart($file_data, $load_document_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentLoadMultipart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_data** | **\SplFileObject****\SplFileObject**| The data of the document. |
 **load_document_parameters** | [**\OpenAPI\Client\Model\LoadDocumentParameters**](../Model/LoadDocumentParameters.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DocumentLoadResponse**](../Model/DocumentLoadResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

