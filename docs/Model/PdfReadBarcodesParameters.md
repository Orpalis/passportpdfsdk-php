# # PdfReadBarcodesParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_id** | **string** | The identifier of the previously uploaded file to be processed. | 
**page_range** | **string** | Specifies the number of the page, or the range of pages to read the barcodes from. | 
**scan_mode** | [**\OpenAPI\Client\Model\ScanMode**](ScanMode.md) |  | [optional] 
**scan_barcode1_d** | **bool** | Specifies whether the barcodes of type 1D shall be read. | [optional] [default to true]
**scan_barcode_qr** | **bool** | Specifies whether the barcodes of type QR shall be read. | [optional] [default to true]
**scan_barcode_micro_qr** | **bool** | Specifies whether the barcodes of type Micro QR shall be read. | [optional] [default to true]
**scan_barcode_pdf417** | **bool** | Specifies whether the barcodes of type PDF 147 shall be read. | [optional] [default to true]
**scan_barcode_data_matrix** | **bool** | Specifies whether the barcodes of type Data Matrix shall be read. | [optional] [default to true]
**scan_barcode_aztec** | **bool** | Specifies whether the barcodes of type Aztec shall be read. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


