# OpenAPI\Client\ConfigApi

All URIs are relative to *https://passportpdfapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configGetAPIVersion**](ConfigApi.md#configGetAPIVersion) | **GET** /api/config/ConfigGetAPIVersion | 
[**configGetMaxAllowedContentLength**](ConfigApi.md#configGetMaxAllowedContentLength) | **GET** /api/config/ConfigGetMaxAllowedContentLength | Gets the maximal length of a request content, in bytes.
[**configGetSuggestedClientTimeout**](ConfigApi.md#configGetSuggestedClientTimeout) | **GET** /api/config/ConfigGetSuggestedClientTimeout | Gets the suggested client API timeout, in milliseconds.
[**configGetSuggestedMaxClientThreads**](ConfigApi.md#configGetSuggestedMaxClientThreads) | **GET** /api/config/ConfigGetSuggestedMaxClientThreads | Gets the suggested maximum number of threads to be used simultaneously by a client application.
[**configGetSupportedFonts**](ConfigApi.md#configGetSupportedFonts) | **GET** /api/config/ConfigGetSupportedFonts | Gets the list of supported fonts for text drawing operations.
[**configGetSupportedOCRLanguages**](ConfigApi.md#configGetSupportedOCRLanguages) | **GET** /api/config/ConfigGetSupportedOCRLanguages | Gets the list of supported languages for OCR.



## configGetAPIVersion

> string configGetAPIVersion()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->configGetAPIVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configGetAPIVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## configGetMaxAllowedContentLength

> \OpenAPI\Client\Model\LongResponse configGetMaxAllowedContentLength()

Gets the maximal length of a request content, in bytes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->configGetMaxAllowedContentLength();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configGetMaxAllowedContentLength: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\LongResponse**](../Model/LongResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## configGetSuggestedClientTimeout

> \OpenAPI\Client\Model\IntegerResponse configGetSuggestedClientTimeout()

Gets the suggested client API timeout, in milliseconds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->configGetSuggestedClientTimeout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configGetSuggestedClientTimeout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\IntegerResponse**](../Model/IntegerResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## configGetSuggestedMaxClientThreads

> \OpenAPI\Client\Model\IntegerResponse configGetSuggestedMaxClientThreads()

Gets the suggested maximum number of threads to be used simultaneously by a client application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->configGetSuggestedMaxClientThreads();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configGetSuggestedMaxClientThreads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\IntegerResponse**](../Model/IntegerResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## configGetSupportedFonts

> \OpenAPI\Client\Model\Font[] configGetSupportedFonts()

Gets the list of supported fonts for text drawing operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->configGetSupportedFonts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configGetSupportedFonts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Font[]**](../Model/Font.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## configGetSupportedOCRLanguages

> \OpenAPI\Client\Model\StringArrayResponse configGetSupportedOCRLanguages()

Gets the list of supported languages for OCR.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->configGetSupportedOCRLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configGetSupportedOCRLanguages: ', $e->getMessage(), PHP_EOL;
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

