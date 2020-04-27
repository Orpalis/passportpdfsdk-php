# # PdfDigiSignParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_id** | **string** | The identifier of the previously uploaded file to be processed. | 
**certificate_data** | **string** | Specifies the data of the digital PKCS#12 certificate file. | 
**certificate_password** | **string** | Specifies the certificate password. | 
**signature_mode** | [**\OpenAPI\Client\Model\SignatureMode**](SignatureMode.md) |  | [optional] 
**signature_certification_level** | [**\OpenAPI\Client\Model\SignatureCertificationLevel**](SignatureCertificationLevel.md) |  | [optional] 
**signature_hash_algorithm** | [**\OpenAPI\Client\Model\SignatureHash**](SignatureHash.md) |  | [optional] 
**signer_name** | **string** | Specifies the name of the signer. | [optional] [default to 'PassportPDF']
**reason** | **string** | Specifies the reason of the signature. | [optional] [default to '']
**location** | **string** | Specifies the location where the signature is applied. | [optional] [default to '']
**contact_info** | **string** | Specifies contact information about the signer. | [optional] [default to '']
**time_stamp_url** | **string** | Specifies the URL of the server responsible of providing a time stamp. | [optional] [default to '']
**time_stamp_user_name** | **string** | Specifies the optional user name associated with the time stamp server. | [optional] [default to '']
**time_stamp_password** | **string** | Specifies the optional password associated with the time stamp server. | [optional] [default to '']
**linearize** | **bool** | Specifies whether the signed PDF shall be linearized. | [optional] [default to false]
**draw_signature** | **bool** | Specifies whether the signature shall be drawn on the document. | [optional] [default to false]
**page_number** | **int** | Specifies the number of the page on which the signature shall be drawn. | [optional] [default to 1]
**show_validation_mark** | **bool** | Specifies whether a validation mark shall be drawn with the signature. | [optional] [default to false]
**image_data** | **string** | Specifies the data of the image to be drawn at the signature location. | [optional] 
**signature_layout** | [**\OpenAPI\Client\Model\DrawableContentLayoutParameters**](DrawableContentLayoutParameters.md) |  | [optional] 
**signature_text** | [**\OpenAPI\Client\Model\PdfAlignedTextParameters**](PdfAlignedTextParameters.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


