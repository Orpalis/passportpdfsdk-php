# # LoadImageParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_name** | **string** | Specifies the name of the document. | [optional] 
**content_encoding** | [**\OpenAPI\Client\Model\ContentEncoding**](ContentEncoding.md) |  | [optional] 
**get_preview** | **bool** | Specifies whether the response must contain a thumbnail of the first page of the document. | [optional] [default to false]
**thumbnail_width** | **int** | Specifies, in pixels, the width of the thumbnail to be retrieved. Only applicable if GetPreview has been set to true. | [optional] [default to 140]
**thumbnail_height** | **int** | Specifies, in pixels, the height of the thumbnail to be retrieved.  Only applicable if GetPreview has been set to true. | [optional] [default to 220]
**thumbnail_background_color** | **string** | Specifies the background color of the thumbnail, using the color name (ie: \&quot;red\&quot;) or its RGBa code (ie: \&quot;rgba(255,0,0,1)\&quot;).   Only applicable if GetPreview has been set to true. | [optional] [default to 'rgba(0,0,0,0)']
**thumbnail_fit_to_page_size** | **bool** | Specifies if the size of the produced thumbnail is automatically adjusted to don&#39;t have any margin.  Only applicable if GetPreview has been set to true. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


