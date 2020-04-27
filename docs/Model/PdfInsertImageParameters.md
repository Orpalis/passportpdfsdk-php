# # PdfInsertImageParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_id** | **string** | The identifier of the previously uploaded file to be processed. | 
**page_range** | **string** | Specifies the page or the range of pages where the image shall be inserted. | 
**image_data** | **string** | Specifies the data of the image to be inserted. | [optional] 
**image_file_id** | **string** | Specifies the file ID of the image to be drawn. | [optional] [default to '']
**quality** | **int** | Specifies the level of quality to be used for the compression, from 1 (poorest) to 100 (greatest). | [optional] [default to 75]
**color_image_compression** | [**\OpenAPI\Client\Model\PdfImageCompressionScheme**](PdfImageCompressionScheme.md) |  | [optional] 
**bitonal_compression** | [**\OpenAPI\Client\Model\PdfImageCompressionScheme**](PdfImageCompressionScheme.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


