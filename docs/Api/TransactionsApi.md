# OpenAPI\Client\TransactionsApi

All URIs are relative to https://api.mx.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usersUserGuidAccountsAccountGuidTransactionsPost()**](TransactionsApi.md#usersUserGuidAccountsAccountGuidTransactionsPost) | **POST** /users/{user_guid}/accounts/{account_guid}/transactions | Create manual transaction |


## `usersUserGuidAccountsAccountGuidTransactionsPost()`

```php
usersUserGuidAccountsAccountGuidTransactionsPost($user_guid, $account_guid, $transaction_create_request_body): \OpenAPI\Client\Model\TransactionCreateResponseBody
```

Create manual transaction

This endpoint can only be used to create manual transactions that are under a manual account. This endpoint accepts the optional MX-Skip-Webhook header and skip_webhook parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user.
$account_guid = 'account_guid_example'; // string | The unique identifier for the account.
$transaction_create_request_body = new \OpenAPI\Client\Model\TransactionCreateRequestBody(); // \OpenAPI\Client\Model\TransactionCreateRequestBody

try {
    $result = $apiInstance->usersUserGuidAccountsAccountGuidTransactionsPost($user_guid, $account_guid, $transaction_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->usersUserGuidAccountsAccountGuidTransactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. | |
| **account_guid** | **string**| The unique identifier for the account. | |
| **transaction_create_request_body** | [**\OpenAPI\Client\Model\TransactionCreateRequestBody**](../Model/TransactionCreateRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TransactionCreateResponseBody**](../Model/TransactionCreateResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
