# OpenAPI\Client\BudgetsApi

All URIs are relative to https://api.mx.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usersUserGuidBudgetsBudgetGuidDelete()**](BudgetsApi.md#usersUserGuidBudgetsBudgetGuidDelete) | **DELETE** /users/{user_guid}/budgets/{budget_guid} | Delete a budget |
| [**usersUserGuidBudgetsBudgetGuidGet()**](BudgetsApi.md#usersUserGuidBudgetsBudgetGuidGet) | **GET** /users/{user_guid}/budgets/{budget_guid} | Read a specific budget |
| [**usersUserGuidBudgetsBudgetGuidPut()**](BudgetsApi.md#usersUserGuidBudgetsBudgetGuidPut) | **PUT** /users/{user_guid}/budgets/{budget_guid} | Update a specific budget |
| [**usersUserGuidBudgetsGeneratePost()**](BudgetsApi.md#usersUserGuidBudgetsGeneratePost) | **POST** /users/{user_guid}/budgets/generate | Auto-generate budgets |
| [**usersUserGuidBudgetsGet()**](BudgetsApi.md#usersUserGuidBudgetsGet) | **GET** /users/{user_guid}/budgets | List all budgets |
| [**usersUserGuidBudgetsPost()**](BudgetsApi.md#usersUserGuidBudgetsPost) | **POST** /users/{user_guid}/budgets | Create a budget |


## `usersUserGuidBudgetsBudgetGuidDelete()`

```php
usersUserGuidBudgetsBudgetGuidDelete($user_guid, $budget_guid)
```

Delete a budget

Delete a budget.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the budget. Defined by MX.
$budget_guid = 'budget_guid_example'; // string | The unique identifier for the budget. Defined by MX.

try {
    $apiInstance->usersUserGuidBudgetsBudgetGuidDelete($user_guid, $budget_guid);
} catch (Exception $e) {
    echo 'Exception when calling BudgetsApi->usersUserGuidBudgetsBudgetGuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the budget. Defined by MX. | |
| **budget_guid** | **string**| The unique identifier for the budget. Defined by MX. | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidBudgetsBudgetGuidGet()`

```php
usersUserGuidBudgetsBudgetGuidGet($budget_guid, $user_guid): \OpenAPI\Client\Model\BudgetResponseBody
```

Read a specific budget

Read a specific budget.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_guid = 'budget_guid_example'; // string | The unique identifier for the budget. Defined by MX.
$user_guid = 'user_guid_example'; // string | The unique identifier for the budget. Defined by MX.

try {
    $result = $apiInstance->usersUserGuidBudgetsBudgetGuidGet($budget_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetsApi->usersUserGuidBudgetsBudgetGuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **budget_guid** | **string**| The unique identifier for the budget. Defined by MX. | |
| **user_guid** | **string**| The unique identifier for the budget. Defined by MX. | |

### Return type

[**\OpenAPI\Client\Model\BudgetResponseBody**](../Model/BudgetResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidBudgetsBudgetGuidPut()`

```php
usersUserGuidBudgetsBudgetGuidPut($user_guid, $budget_guid, $budget_update_request_body): \OpenAPI\Client\Model\BudgetResponseBody
```

Update a specific budget

Update a specific budget.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the budget. Defined by MX.
$budget_guid = 'budget_guid_example'; // string | The unique identifier for the budget. Defined by MX.
$budget_update_request_body = new \OpenAPI\Client\Model\BudgetUpdateRequestBody(); // \OpenAPI\Client\Model\BudgetUpdateRequestBody

try {
    $result = $apiInstance->usersUserGuidBudgetsBudgetGuidPut($user_guid, $budget_guid, $budget_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetsApi->usersUserGuidBudgetsBudgetGuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the budget. Defined by MX. | |
| **budget_guid** | **string**| The unique identifier for the budget. Defined by MX. | |
| **budget_update_request_body** | [**\OpenAPI\Client\Model\BudgetUpdateRequestBody**](../Model/BudgetUpdateRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BudgetResponseBody**](../Model/BudgetResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidBudgetsGeneratePost()`

```php
usersUserGuidBudgetsGeneratePost($user_guid): \OpenAPI\Client\Model\BudgetResponseBody
```

Auto-generate budgets

This endpoint will automatically create budgets for several categories based on existing transactions; these budgets are returned as an array. Specifically, budgets will only be generated if the `user` has at least one `transaction` in a given category during each of the two previous calendar months. For example, if the request is made on March 6, and there is at least one \"Bills & Utilities\" `transaction` in both January and February, a budget will be generated for \"Bills & Utilities.\" If there are two \"Bills & Utilities\" transactions in February but none in January, no budget will be generated for that category. If budgets already exist for particular categories, new budgets will be generated and returned based on the available transactions. If one or more budgets remain unchanged, they will nevertheless be returned in the response. If no transaction data for the `user` meet the above criteria, a `422 Unprocessable Entity` error will be returned with status code 4221 along with the message, `There aren't enough transactions to automatically create any budgets`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user. Defined by MX.

try {
    $result = $apiInstance->usersUserGuidBudgetsGeneratePost($user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetsApi->usersUserGuidBudgetsGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |

### Return type

[**\OpenAPI\Client\Model\BudgetResponseBody**](../Model/BudgetResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidBudgetsGet()`

```php
usersUserGuidBudgetsGet($user_guid): \OpenAPI\Client\Model\BudgetResponseBody
```

List all budgets

List all budgets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user. Defined by MX.

try {
    $result = $apiInstance->usersUserGuidBudgetsGet($user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetsApi->usersUserGuidBudgetsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |

### Return type

[**\OpenAPI\Client\Model\BudgetResponseBody**](../Model/BudgetResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidBudgetsPost()`

```php
usersUserGuidBudgetsPost($user_guid, $budget_create_request_body): \OpenAPI\Client\Model\BudgetResponseBody
```

Create a budget

Create a budget. This endpoint accepts the optional `MX-Skip-Webhook` header and `skip_webhook` parameter. You cannot create a duplicate budget. For example, if you attempt to create a budget for \"Gas\", but that budget already exist, the request will fail. You can retrieve a list of all existing categories by using the List Categories endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user. Defined by MX.
$budget_create_request_body = new \OpenAPI\Client\Model\BudgetCreateRequestBody(); // \OpenAPI\Client\Model\BudgetCreateRequestBody

try {
    $result = $apiInstance->usersUserGuidBudgetsPost($user_guid, $budget_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetsApi->usersUserGuidBudgetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |
| **budget_create_request_body** | [**\OpenAPI\Client\Model\BudgetCreateRequestBody**](../Model/BudgetCreateRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BudgetResponseBody**](../Model/BudgetResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
