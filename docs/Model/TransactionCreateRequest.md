# # TransactionCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** |  |
**date** | **string** |  |
**description** | **string** |  |
**type** | **string** | The type of transaction, which must be CREDIT or DEBIT. See Transaction Fields for more information. |
**category_guid** | **string** | Unique identifier of the category. | [optional]
**currency_code** | **string** |  | [optional]
**has_been_viewed** | **bool** |  | [optional]
**is_hidden** | **bool** |  | [optional]
**is_international** | **bool** |  | [optional]
**memo** | **string** |  | [optional]
**metadata** | **string** |  | [optional]
**skip_webhook** | **bool** | When set to true, this parameter will prevent a webhook from being triggered by the request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
