# OpenAPI\Client\PassportPDFApplicationManagerApi

All URIs are relative to *https://passportpdfapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**passportPDFApplicationManagerGetApplicationDownloadLink**](PassportPDFApplicationManagerApi.md#passportPDFApplicationManagerGetApplicationDownloadLink) | **GET** /api/passportpdfapplicationmanager/PassportPDFApplicationManagerGetApplicationDownloadLink | 
[**passportPDFApplicationManagerGetApplicationLatestVersion**](PassportPDFApplicationManagerApi.md#passportPDFApplicationManagerGetApplicationLatestVersion) | **GET** /api/passportpdfapplicationmanager/PassportPDFApplicationManagerGetApplicationLatestVersion | 
[**passportPDFApplicationManagerGetApplicationMinimumSupportedVersion**](PassportPDFApplicationManagerApi.md#passportPDFApplicationManagerGetApplicationMinimumSupportedVersion) | **GET** /api/passportpdfapplicationmanager/PassportPDFApplicationManagerGetApplicationMinimumSupportedVersion | 
[**passportPDFApplicationManagerGetMaxClientThreads**](PassportPDFApplicationManagerApi.md#passportPDFApplicationManagerGetMaxClientThreads) | **GET** /api/passportpdfapplicationmanager/PassportPDFApplicationManagerGetMaxClientThreads | Gets the maximum number of threads to be used simultaneously by a client application.



## passportPDFApplicationManagerGetApplicationDownloadLink

> \OpenAPI\Client\Model\StringResponse passportPDFApplicationManagerGetApplicationDownloadLink($application_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PassportPDFApplicationManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_id = 'application_id_example'; // string | 

try {
    $result = $apiInstance->passportPDFApplicationManagerGetApplicationDownloadLink($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PassportPDFApplicationManagerApi->passportPDFApplicationManagerGetApplicationDownloadLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**|  |

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


## passportPDFApplicationManagerGetApplicationLatestVersion

> \OpenAPI\Client\Model\StringResponse passportPDFApplicationManagerGetApplicationLatestVersion($application_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PassportPDFApplicationManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_id = 'application_id_example'; // string | 

try {
    $result = $apiInstance->passportPDFApplicationManagerGetApplicationLatestVersion($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PassportPDFApplicationManagerApi->passportPDFApplicationManagerGetApplicationLatestVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**|  |

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


## passportPDFApplicationManagerGetApplicationMinimumSupportedVersion

> \OpenAPI\Client\Model\StringResponse passportPDFApplicationManagerGetApplicationMinimumSupportedVersion($application_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PassportPDFApplicationManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_id = 'application_id_example'; // string | 

try {
    $result = $apiInstance->passportPDFApplicationManagerGetApplicationMinimumSupportedVersion($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PassportPDFApplicationManagerApi->passportPDFApplicationManagerGetApplicationMinimumSupportedVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**|  |

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


## passportPDFApplicationManagerGetMaxClientThreads

> \OpenAPI\Client\Model\IntegerResponse passportPDFApplicationManagerGetMaxClientThreads($application_id)

Gets the maximum number of threads to be used simultaneously by a client application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PassportPDFApplicationManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_id = 'application_id_example'; // string | 

try {
    $result = $apiInstance->passportPDFApplicationManagerGetMaxClientThreads($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PassportPDFApplicationManagerApi->passportPDFApplicationManagerGetMaxClientThreads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**|  |

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

