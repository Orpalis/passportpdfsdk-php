# # DocuViewareControlState

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timeout** | **int** | Specifies the amount of time, in minutes, allowed between requests before the DocuVieware session-state provider terminates the session.&lt;br /&gt; | [optional] [default to 20]
**control_id** | **string** | Specifies client the identifier associated with the control. | [optional] [default to 'DocuVieware1']
**show_logo** | **bool** | Specifies if the DocuVieware logo is displayed in the toolbar. | [optional] [default to true]
**remote_ip** | **string** | Specifies the remote IP. This property can be leaved empty if user requests don&#39;t need to be traced. | [optional] [default to '']
**file_hosting_uri** | **string** |  | [optional] [default to '']
**document_uri** | **string** | Specifies the URI of a document to load into the control.  This can be an empty string if a document is already loaded.  Use the prefix &#39;fileid:&#39; to load a document from a file ID handled by PassportPDF. ie: &#39;fileid:00000-00000-00000-00000-00000&#39;. | [optional] [default to '']
**document_file_name** | **string** | Specifies the file name of the input document. The file name can help to determine the input document format.  Default value is an empty string. | [optional] [default to '']
**disable_download_progress** | **bool** | A flag specifying if the control should display a loading progress status bar to the end user while a document is being loaded. | [optional] [default to false]
**document_alignment** | [**\OpenAPI\Client\Model\DocumentAlignment**](DocumentAlignment.md) |  | [optional] 
**document_position** | [**\OpenAPI\Client\Model\DocumentPosition**](DocumentPosition.md) |  | [optional] 
**enable_gd_picture_annotations** | **bool** | Specifies if GdPicture/XMP annotations support is activated. | [optional] [default to true]
**disable_annotation_printing** | **bool** | Specifies whether printing support is disabled for annotations. | [optional] [default to false]
**enable_form_fields_edition** | **bool** | Specifies whether form fields can be edited into the client browser or not. | [optional] [default to true]
**annotation_editor_mode** | **bool** | Specifies the editor mode for the GdPicture/XMP annotation support.&lt;br /&gt; | [optional] [default to true]
**link_annotation_click_behaviour** | [**\OpenAPI\Client\Model\LinkAnnotationClickBehaviour**](LinkAnnotationClickBehaviour.md) |  | [optional] 
**zoom** | **double** | Specifies the current factor of zoom applied during page rendering operations: 1 for 100%, 1.5 for 150%, 2 for 200%... | [optional] [default to 1]
**zoom_mode** | [**\OpenAPI\Client\Model\ViewerZoomMode**](ViewerZoomMode.md) |  | [optional] 
**open_zoom_mode** | [**\OpenAPI\Client\Model\ViewerZoomMode**](ViewerZoomMode.md) |  | [optional] 
**view_rotation** | [**\OpenAPI\Client\Model\RotateFlip**](RotateFlip.md) |  | [optional] 
**page_rotation** | [**\OpenAPI\Client\Model\RotateFlip**](RotateFlip.md) |  | [optional] 
**zoom_step** | **int** | Defines the percentage of increasing or decreasing level of zoom for &#39;Zoom In&#39; and &#39;Zoom Out&#39; operations. | [optional] [default to 30]
**scroll_bars** | **bool** | Specifies whether scrollbars can be displayed or not within the viewer.&lt;br /&gt; | [optional] [default to true]
**force_scroll_bars** | **bool** | Specifies whether the viewer shall always show scrollbars. | [optional] [default to false]
**page_view_mode** | [**\OpenAPI\Client\Model\PageViewMode**](PageViewMode.md) |  | [optional] 
**enable_text_selection** | **bool** | Specifies if text selection is permitted. | [optional] [default to true]
**enable_text_selection_annotation** | **bool** | Specifies whether the selected text context menu options should contain annotations entries. | [optional] [default to true]
**locale** | [**\OpenAPI\Client\Model\DocuViewareLocale**](DocuViewareLocale.md) |  | [optional] 
**user_languages** | **string[]** | Specifies the different languages used by the user&#39;s browser. | [optional] 
**control_width** | **string** | Specifies the width of the control within its container. | [optional] [default to '100%']
**control_height** | **string** | Specifies, the height of the control within its container. | [optional] [default to '100%']
**annotation_drop_shadow** | **bool** | Specifies whether GdPicture/XMP annotations are rendered with a drop shadow effect. | [optional] [default to true]
**allow_print** | **bool** | Specifies whether printing is allowed. | [optional] [default to true]
**allow_upload** | **bool** | Specifies whether file upload is allowed. | [optional] [default to true]
**enable_multiple_thumbnail_selection** | **bool** | Specifies whether multiple thumbnails selection is allowed. | [optional] [default to false]
**enable_thumbnail_drag_drop** | **bool** | Specifies whether the thumbnails can be moved by drag and drop. | [optional] [default to false]
**enable_file_upload_button** | **bool** | Specifies whether the open button shall be enabled. | [optional] [default to true]
**enable_load_from_uri_button** | **bool** | Specifies whether the &#39;open from uri&#39; button shall be enabled. | [optional] [default to true]
**enable_save_button** | **bool** | Specifies whether the save button shall be enabled. | [optional] [default to true]
**enable_pages_navigation_buttons** | **bool** | Specifies whether the save button shall be enabled. | [optional] [default to true]
**enable_print_button** | **bool** | Specifies whether the print button shall be enabled. | [optional] [default to true]
**enable_print_to_pdf** | **bool** | Specifies whether the print to pdf option shall be enabled. | [optional] [default to true]
**enable_fit_width_button** | **bool** | Specifies whether the fit width button shall be enabled. | [optional] [default to true]
**enable_zoom100_button** | **bool** | Specifies whether the fit original size button shall be enabled. | [optional] [default to true]
**enable_mouse_mode_buttons** | **bool** | Specifies whether the mouse mode button group shall be enabled. | [optional] [default to true]
**enable_pan_mode_button** | **bool** | Specifies whether the pan mode button shall be enabled. | [optional] [default to true]
**enable_select_mode_button** | **bool** | Specifies whether the select mode button shall be enabled. | [optional] [default to true]
**enable_marquee_zoom_mode_button** | **bool** | Specifies whether the marquee zoom mode button shall be enabled. | [optional] [default to true]
**enable_full_screen_button** | **bool** | Specifies whether the fullscreen button shall be enabled. | [optional] [default to true]
**enable_fit_page_button** | **bool** | Specifies whether the &#39;Fit Page&#39; button shall be enabled. | [optional] [default to true]
**enable_zoom_buttons** | **bool** | Specifies whether the zoom button group shall be enabled. | [optional] [default to true]
**enable_page_view_buttons** | **bool** | Specifies whether the page view mode button shall be enabled. | [optional] [default to true]
**rotate_buttons_mode** | [**\OpenAPI\Client\Model\RotateMode**](RotateMode.md) |  | [optional] 
**enable_rotate_buttons** | **bool** | Specifies whether the rotation button group shall be enabled. | [optional] [default to true]
**enable_annotation_action_buttons** | **bool** | Specifies whether the action buttons shall be enabled when an annotation is selected.  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_selected_text_annotation_edition** | **bool** | Specifies whether the selected text annotations shall be editable. | [optional] [default to true]
**enable_rectangle_highlighter_annotation_button** | **bool** | Specifies whether the rectangle highlighter annotation button shall be enabled. &lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_freehand_highlighter_annotation_button** | **bool** | Specifies whether the freehand highlighter annotation button shall be enabled.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_rubber_stamp_annotation_button** | **bool** | Specifies whether the rubber stamp annotation button shall be enabled.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_rectangle_annotation_button** | **bool** | Specifies whether the rectangle annotation button shall be enabled.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_ellipse_annotation_button** | **bool** | Specifies whether the ellipse annotation button shall be enabled.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_line_annotation_button** | **bool** | Specifies whether the line annotation button shall be enabled.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_connected_line_annotation_button** | **bool** | Specifies whether the connected line annotation button shall be enabled.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_freehand_annotation_button** | **bool** | Specifies whether the freehand annotation button shall be enabled.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_line_arrow_annotation_button** | **bool** | Specifies whether the line arrow annotation button shall be enabled.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_link_annotation_button** | **bool** | Specifies whether the link annotation button shall be enabled.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_ruler_annotation_button** | **bool** | Specifies whether the ruler annotation button shall be enabled.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_poly_ruler_annotation_button** | **bool** |  | [optional] [default to true]
**enable_text_annotation_button** | **bool** | Specifies whether the text annotation button shall be enabled.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_sticky_note_annotation_button** | **bool** | Specifies whether the sticky note annotation button shall be enabled.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**enable_twain_acquisition_button** | **bool** | Specifies whether the TWAIN acquisition button shall be enabled. | [optional] [default to true]
**twain_source_enable_custom_configuration** | **bool** | Enables the custom configuration support for the TWAIN source. | [optional] [default to false]
**twain_source_select_feeder** | **bool** | Specifies whether the TWAIN acquisition source shall acquire from the document feeder or the flatbed.  This property is only effective if TwainSourceSetCustomConfiguration is set to true. | [optional] [default to true]
**twain_source_bit_depth** | **int** | Specifies the bit depth the TWAIN acquisition source should acquire at. &lt;br /&gt;  This property is only effective if TwainSourceSetCustomConfiguration is set to true. | [optional] [default to 24]
**twain_source_resolution** | **int** | Specifies the resolution the TWAIN acquisition source should acquire at. &lt;br /&gt;  This property is only effective if TwainSourceSetCustomConfiguration is set to true. | [optional] [default to 200]
**twain_source_enable_duplex** | **bool** | Specifies whether the TWAIN acquisition source shall enable duplex acquisition. &lt;br /&gt;  This property is only effective if TwainSourceSetCustomConfiguration is set to true. | [optional] [default to false]
**twain_source_hide_ui** | **bool** | Specifies whether the TWAIN acquisition source shall hide or show the device driver user interface before acquisition. &lt;br /&gt;  This property is only effective if TwainSourceSetCustomConfiguration is set to true. | [optional] [default to true]
**free_hand_continuous_drawing_mode** | **bool** | Specifies whether the drawing mode for freehand annotation is multi line or not.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to true]
**show_text_search_snap_in** | **bool** | Specifies whether the text search SnapIn is enabled. | [optional] [default to true]
**show_thumbnails_snap_in** | **bool** | Specifies whether the Thumbnails SnapIn is enabled. | [optional] [default to true]
**show_bookmarks_snap_in** | **bool** | Specifies whether the Bookmarks SnapIn is enabled. | [optional] [default to true]
**show_annotations_snap_in** | **bool** | Specifies whether the annotations SnapIn is enabled. | [optional] [default to true]
**show_annotations_comments_snap_in** | **bool** | Specifies whether the Annotations Comments SnapIn is enabled. | [optional] [default to true]
**show_redaction_snap_in** | **bool** | Specifies whether the Redaction Snap-In is enabled or not.  &lt;remarks&gt;  Default value is true.  &lt;/remarks&gt; | [optional] [default to true]
**show_digital_signature_snap_in** | **bool** | Specifies whether the Digital Signature Snap-In is enabled or not.  &lt;remarks&gt;  Default value is false.  &lt;/remarks&gt; | [optional] [default to false]
**thumbnail_width** | **int** | The width, in pixels, of each thumbnail. | [optional] [default to 192]
**thumbnail_height** | **int** | The height, in pixels, of each thumbnail. | [optional] [default to 256]
**snap_in_panel_default_width** | **string** | Specifies the Snap-in panel default width. | [optional] [default to '280px']
**collapsed_snap_in** | **bool** | Specifies whether the Snap-in panel is collapsed or not. | [optional] [default to false]
**collapse_snapin_on_document_closed** | **bool** | Specifies whether the Snap-in panel should be automatically collapsed when the displayed document is closed. | [optional] [default to true]
**show_snap_in_collapse_button** | **bool** | Specifies whether the button that collapses the Snap-in panel is displayed or not. | [optional] [default to true]
**show_snap_in_panel_header** | **bool** | Specifies whether the header of the Snap-in panel is displayed or not. | [optional] [default to true]
**show_snap_in_button_strip** | **bool** | Specifies whether the Snap-in button strip is displayed or not. | [optional] [default to true]
**show_toolbar** | **bool** | Specifies whether the Toolbars are visible or not. | [optional] [default to true]
**toolbar_style** | [**\OpenAPI\Client\Model\ToolbarStyle**](ToolbarStyle.md) |  | [optional] 
**toolbar_buttons_spacing** | **int** | The space, in pixels, between each button of the toolbar. | [optional] [default to 12]
**toolbar_height** | **int** | The height, in pixels, of the toolbar. | [optional] [default to 48]
**stroke_color** | **string** | Specifies the color used to stroke viewer elements such borders, toolbar icons and thumbnail text. | [optional] [default to '#646464']
**misc_border_color** | **string** | Specifies the color used to define dropdowns borders, buttons separators, line separators. | [optional] [default to '#DCDCDC']
**header_color** | **string** | Specifies the color used in both dialogs and snap-ins headers. | [optional] [default to '#213E4E']
**panel_back_color** | **string** | Specifies the color used in both dialogs and snap-ins body background. | [optional] [default to '#FFFFFF']
**viewer_back_color** | **string** | Specifies the viewer area background color. | [optional] [default to '#565656']
**active_selected_color** | **string** | Specifies the selected and active elements stroke color. | [optional] [default to '#0382D4']
**toolbar_back_color** | **string** | Viewer Toolbar Background Color. | [optional] [default to '#F2F2F2']
**custom_notification_icon_error** | **string** | Custom error notification icon.&lt;br /&gt;  Used to specify a custom icon within errors notification boxes. | [optional] [default to '']
**custom_notification_icon_question** | **string** | Custom question notification icon.&lt;br /&gt;  Used to specify a custom icon within questions notification boxes. | [optional] [default to '']
**custom_notification_icon_warning** | **string** | Custom warning notification icon.&lt;br /&gt;  Used to specify a custom icon within warnings notification boxes. | [optional] [default to '']
**custom_notification_icon_info** | **string** | Custom info notification icon.&lt;br /&gt;  Used to specify a custom icon within information notification boxes. | [optional] [default to '']
**custom_notification_icon_ok** | **string** | Custom success notification icon.&lt;br /&gt;  Used to specify a custom icon within success notification boxes. | [optional] [default to '']
**allowed_export_formats** | **string** | Specifies extensions of the allowed formats for export. Each extension must be separated by a coma.&lt;br /&gt;  Wildcard character &#39;*&#39; can be used to specify any supported format.&lt;br /&gt;  The following extensions are currently supported: \&quot;PDF\&quot;, \&quot;TIFF\&quot;.&lt;br /&gt;  For example use \&quot;*\&quot; to allow all supported format for export, \&quot;PDF\&quot; to allow only PDF export and \&quot;PDF,TIFF\&quot; to allow PDF and TIFF export. | [optional] [default to '*']
**disable_annotation_drawing_mode_panel** | **bool** | Specifies whether the drawing mode panel shall be enabled while user is drawing a free hand annotation.&lt;br /&gt;  This property is only effective if EnableGdPictureAnnotations is set to true. | [optional] [default to false]
**image_quality** | **int** |  | [optional] [default to 10]
**print_quality** | [**\OpenAPI\Client\Model\PrintQuality**](PrintQuality.md) |  | [optional] 
**enable_documents_drop** | **bool** | Specifies whether documents drag &amp; drop is allowed into the viewer area. | [optional] [default to true]
**ajax_custom_headers** | **string** | Specifies custom headers for the generated AJAX requests.  Value must be a (properly escaped) JSON-formatted string. Default value is null. | [optional] [default to '']
**file_download_custom_headers** | **string** | Specifies custom headers to be used for the file download JavaScript API requests (for instance LoadFromUri and LoadFromUriEx). Headers that are set through this property won&#39;t be exposed client-side.  Value must be a (properly escaped) JSON-formatted string. Default value is null. | [optional] [default to '']
**text_search_max_results** | **int** | Specifies the maximum number of results provided by a text search request. | [optional] [default to 100]
**max_upload_size** | **int** | Specifies, in bytes, the upload size limit. | [optional] [default to 10485760]
**max_download_size** | **int** | Specifies, in bytes, the download size limit. | [optional] [default to 10485760]
**max_pages** | **int** | Specifies the maximum of pages per loaded document. | [optional] [default to 3000]
**certificates** | [**\OpenAPI\Client\Model\DocuViewareCertificate[]**](DocuViewareCertificate.md) | Specifies a list of certificates to be made available on the client side to apply digital signature to documents. | [optional] 
**extra_features** | **string** | A formatted string specifying undocumented extra features to handle. | [optional] [default to '']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


