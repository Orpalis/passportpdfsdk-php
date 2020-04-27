# # ImageSaveAsPDFParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_id** | **string** | The identifier of the previously uploaded file to be processed. | 
**page_range** | **string** | Specifies the number of the page, or the range of pages to be saved as PDF. | [optional] [default to '*']
**conformance** | [**\OpenAPI\Client\Model\PdfConformance**](PdfConformance.md) |  | [optional] 
**color_image_compression** | [**\OpenAPI\Client\Model\PdfImageCompressionScheme**](PdfImageCompressionScheme.md) |  | [optional] 
**bitonal_image_compression** | [**\OpenAPI\Client\Model\PdfImageCompressionScheme**](PdfImageCompressionScheme.md) |  | [optional] 
**enable_color_detection** | **bool** | Specifies is color detection must be used. | [optional] [default to false]
**image_quality** | **int** | Specifies the quality to be used for the compression of the images from the PDF.  Must be in the range [0 (best compression - worst quality) - 100 (worst quality - best compression)]. | [optional] [default to 75]
**downscale_resolution** | **int** | Specifies the resolution for downscaling images, if any. | [optional] [default to 0]
**fast_web_view** | **bool** | Specifies whether the PDF shall be optimized for online distribution. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


