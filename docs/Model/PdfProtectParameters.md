# # PdfProtectParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_id** | **string** | The identifier of the previously uploaded file to be processed. | 
**owner_password** | **string** | Specifies the owner password to be set. | [optional] [default to '']
**user_password** | **string** | Specifies the user password to be set. | [optional] [default to '']
**encryption** | [**\OpenAPI\Client\Model\EncryptionAlgorithm**](EncryptionAlgorithm.md) |  | [optional] 
**can_print** | **bool** | Allows the user to print the document, but possibly not at the highest quality level. Ignored if no encryption algorithm is set. | [optional] [default to true]
**can_copy** | **bool** | Allows the user to copy or extract text and graphics from the document. Ignored if the no encryption scheme is set. | [optional] [default to true]
**can_modify** | **bool** | Allows the user to modify the document. Ignored if the no encryption scheme is set. | [optional] [default to true]
**can_add_notes** | **bool** | Allows the user to add annotations. Ignored if the no encryption scheme is set. | [optional] [default to true]
**can_fill_fields** | **bool** | Allows the user to fill-in form fields. Only works with 128-bit encryption. | [optional] [default to true]
**can_copy_access** | **bool** | Enables copying or extracting for use with accessibility features. Only works with 128-bit encryption. | [optional] [default to true]
**can_assemble** | **bool** | Allows the user to assemble the document. Only works with 128-bit encryption. | [optional] [default to true]
**can_print_full** | **bool** | Allows high resolution printing of the document. Only works with 128-bit encryption. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


