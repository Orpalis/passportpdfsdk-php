# OpenAPI\Client\DocuViewareApi

All URIs are relative to *https://passportpdfapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**docuViewareGetControl**](DocuViewareApi.md#docuViewareGetControl) | **POST** /api/docuvieware/DocuViewareGetControl | Gets the HTML dom of a DocuVieware control.
[**docuViewareGetVersion**](DocuViewareApi.md#docuViewareGetVersion) | **GET** /api/docuvieware/DocuViewareGetVersion | Get the DocuVieware engine version.
[**docuViewareSave**](DocuViewareApi.md#docuViewareSave) | **POST** /api/docuvieware/DocuViewareSave | Saves the document being handled by a specific DocuVieware control, in its current state.



## docuViewareGetControl

> \OpenAPI\Client\Model\DocuViewareGetControlResponse docuViewareGetControl($docu_vieware_get_control_parameters)

Gets the HTML dom of a DocuVieware control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DocuViewareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docu_vieware_get_control_parameters = new \OpenAPI\Client\Model\DocuViewareGetControlParameters(); // \OpenAPI\Client\Model\DocuViewareGetControlParameters | A DocuViewareGetControlParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->docuViewareGetControl($docu_vieware_get_control_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocuViewareApi->docuViewareGetControl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docu_vieware_get_control_parameters** | [**\OpenAPI\Client\Model\DocuViewareGetControlParameters**](../Model/DocuViewareGetControlParameters.md)| A DocuViewareGetControlParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\DocuViewareGetControlResponse**](../Model/DocuViewareGetControlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## docuViewareGetVersion

> \OpenAPI\Client\Model\StringResponse docuViewareGetVersion()

Get the DocuVieware engine version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DocuViewareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->docuViewareGetVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocuViewareApi->docuViewareGetVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\StringResponse**](../Model/StringResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## docuViewareSave

> \OpenAPI\Client\Model\DocuViewareSaveResponse docuViewareSave($docu_vieware_save_parameters)

Saves the document being handled by a specific DocuVieware control, in its current state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DocuViewareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docu_vieware_save_parameters = new \OpenAPI\Client\Model\DocuViewareSaveParameters(); // \OpenAPI\Client\Model\DocuViewareSaveParameters | A DocuViewareSaveParameters object specifying the parameters of the action.

try {
    $result = $apiInstance->docuViewareSave($docu_vieware_save_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocuViewareApi->docuViewareSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docu_vieware_save_parameters** | [**\OpenAPI\Client\Model\DocuViewareSaveParameters**](../Model/DocuViewareSaveParameters.md)| A DocuViewareSaveParameters object specifying the parameters of the action. |

### Return type

[**\OpenAPI\Client\Model\DocuViewareSaveResponse**](../Model/DocuViewareSaveResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

