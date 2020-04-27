# # PdfReduceParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_id** | **string** | The identifier of the previously uploaded file to be processed. | 
**output_version** | [**\OpenAPI\Client\Model\PdfVersion**](PdfVersion.md) |  | [optional] 
**image_quality** | [**\OpenAPI\Client\Model\ImageQuality**](ImageQuality.md) |  | [optional] 
**recompress_images** | **bool** | Specifies whether the images from the PDF shall be recompressed. | [optional] [default to true]
**enable_color_detection** | **bool** | Specifies whether color detection must be performed on the images from the PDF. | [optional] [default to true]
**pack_document** | **bool** | Specifies whether the PDF shall be packed when saved in order to reduce its size. | [optional] [default to true]
**pack_fonts** | **bool** | Specifies whether the PDF fonts must be packed in order to reduce their size. | [optional] [default to true]
**downscale_images** | **bool** | Specifies whether the images from the PDF shall be downscaled. | [optional] [default to true]
**downscale_resolution** | **int** | Specifies the resolution to be used to downscale images. | [optional] [default to 150]
**fast_web_view** | **bool** | Specifies whether the PDF shall be optimized for online distribution. | [optional] [default to false]
**remove_form_fields** | **bool** | Specifies whether the form fields shall be removed from the PDF. | [optional] [default to false]
**remove_annotations** | **bool** | Specifies whether the annotations shall be removed from the PDF. | [optional] [default to false]
**remove_bookmarks** | **bool** | Specifies whether the bookmarks shall be removed from the PDF. | [optional] [default to false]
**remove_hyperlinks** | **bool** | Specifies whether the hyperlinks shall be removed from the PDF. | [optional] [default to false]
**remove_embedded_files** | **bool** | Specifies whether the embedded files shall be removed from the PDF. | [optional] [default to false]
**remove_blank_pages** | **bool** | Specifies whether the blank pages shall be removed. | [optional] [default to false]
**remove_java_script** | **bool** | Specifies whether the JavaScript shall be removed. | [optional] [default to false]
**enable_jpeg2000** | **bool** | Specifies whether the JPEG2000 compression scheme shall be used to compress the images of the PDF. | [optional] [default to true]
**enable_jbig2** | **bool** | Specifies whether the JBIG2 compression scheme shall be used to compress the bitonal images of the PDF. | [optional] [default to true]
**enable_char_repair** | **bool** | Specifies whether characters repairing shall be performed during bitonal conversion. | [optional] [default to false]
**enable_mrc** | **bool** | Specifies whether MRC shall be used for compressing the PDF contents. | [optional] [default to false]
**preserve_smoothing** | **bool** | Specifies if the MRC engine shall try to preserve smoothing between different layers. | [optional] [default to false]
**downscale_resolution_mrc** | **int** | Specifies the resolution for downscaling the background layer by the MRC engine, if any. | [optional] [default to 100]
**remove_metadata** | **bool** | Specifies whether the metadata shall be removed. | [optional] [default to false]
**remove_page_thumbnails** | **bool** | Specifies whether the page thumbnails shall be removed. | [optional] [default to false]
**remove_page_piece_info** | **bool** | Specifies whether the page PieceInfo dictionary used to hold private application data shall be removed. | [optional] [default to false]
**jbig2_pms_threshold** | **float** | Specifies the threshold value for the JBIG2 encoder pattern matching and substitution between 0 and 1. Any number lower than 1 may lead to lossy compression. | [optional] [default to 0.85]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


