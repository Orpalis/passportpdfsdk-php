# # PdfLoadDocumentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | [**\OpenAPI\Client\Model\Error**](Error.md) |  | [optional] 
**remaining_tokens** | **int** | Specifies the number of remaining tokens. | [optional] 
**file_id** | **string** | Specifies the file identifier of the loaded document. | [optional] [readonly] 
**page_count** | **int** | Specifies the number of pages into the loaded document. | [optional] [readonly] 
**encryption** | [**\OpenAPI\Client\Model\EncryptionAlgorithm**](EncryptionAlgorithm.md) |  | [optional] 
**password_is_required** | **bool** | Specifies if a password will be subsequently required to open the document.  Password can be provided using the SetPassword action / method. | [optional] [readonly] 
**thumbnail_data** | **string** | Specifies the data of a thumbnail from the first page of the document, in PNG format. Only applicable if the GetPreview field of the request has been set to true. | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


