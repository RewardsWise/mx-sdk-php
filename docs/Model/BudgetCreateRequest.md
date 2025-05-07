# # BudgetCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_guid** | **string** | Unique identifier of the category. |
**parent_guid** | **string** | Unique identifier of the parent budget. This is only required when creating a budget on a sub-category. |
**amount** | **int** | Amount of the budget. | [optional]
**metadata** | **string** | Additional information a partner can store on the budget. | [optional]
**skip_webhook** | **bool** | When set to true, this parameter will prevent a webhook from being triggered by the request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
