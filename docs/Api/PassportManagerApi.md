# OpenAPI\Client\PassportManagerApi

All URIs are relative to *https://passportpdfapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**passportManagerGetPassportInfo**](PassportManagerApi.md#passportManagerGetPassportInfo) | **GET** /api/passportmanager/PassportManagerGetPassportInfo | 



## passportManagerGetPassportInfo

> \OpenAPI\Client\Model\PassportPDFPassport passportManagerGetPassportInfo($passport_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PassportManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$passport_id = 'passport_id_example'; // string | 

try {
    $result = $apiInstance->passportManagerGetPassportInfo($passport_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PassportManagerApi->passportManagerGetPassportInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **passport_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PassportPDFPassport**](../Model/PassportPDFPassport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

