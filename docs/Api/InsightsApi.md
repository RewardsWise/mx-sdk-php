# OpenAPI\Client\InsightsApi

All URIs are relative to https://api.mx.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAccountsInsight()**](InsightsApi.md#listAccountsInsight) | **GET** /users/{user_guid}/insights/{insight_guid}/accounts | List all accounts associated with an insight. |
| [**listCategoriesInsight()**](InsightsApi.md#listCategoriesInsight) | **GET** /users/{user_guid}/insights/{insight_guid}/categories | List all categories associated with an insight. |
| [**listInsightsByAccount()**](InsightsApi.md#listInsightsByAccount) | **GET** /users/{user_guid}/accounts/{account_guid}/insights | List insights by account |
| [**listInsightsUser()**](InsightsApi.md#listInsightsUser) | **GET** /users/{user_guid}/insights | List all insights for a user. |
| [**listMerchantsInsight()**](InsightsApi.md#listMerchantsInsight) | **GET** /users/{user_guid}/insights/{insight_guid}/merchants | List all merchants associated with an insight. |
| [**listScheduledPaymentsInsight()**](InsightsApi.md#listScheduledPaymentsInsight) | **GET** /users/{user_guid}/insights/{insight_guid}/scheduled_payments | List all scheduled payments associated with an insight |
| [**listTransactionsInsight()**](InsightsApi.md#listTransactionsInsight) | **GET** /users/{user_guid}/insights/{insight_guid}/transactions | List all transactions associated with an insight. |
| [**readInsightsUser()**](InsightsApi.md#readInsightsUser) | **GET** /users/{user_guid}/insights{insight_guid} | Read a specific insight. |
| [**updateInsight()**](InsightsApi.md#updateInsight) | **PUT** /users/{user_guid}/insights{insight_guid} | Update insight |


## `listAccountsInsight()`

```php
listAccountsInsight($user_guid, $insight_guid, $page, $records_per_page): \OpenAPI\Client\Model\AccountsResponseBody
```

List all accounts associated with an insight.

Use this endpoint to list all the accounts associated with the insight.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-1234-abcd; // string | The unique identifier for the user. Defined by MX.
$insight_guid = BET-1234-abcd; // string | The unique identifier for the insight. Defined by MX.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listAccountsInsight($user_guid, $insight_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->listAccountsInsight: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |
| **insight_guid** | **string**| The unique identifier for the insight. Defined by MX. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountsResponseBody**](../Model/AccountsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCategoriesInsight()`

```php
listCategoriesInsight($user_guid, $insight_guid, $page, $records_per_page): \OpenAPI\Client\Model\CategoriesResponseBody
```

List all categories associated with an insight.

Use this endpoint to list all the categories associated with the insight.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-1234-abcd; // string | The unique identifier for the user. Defined by MX.
$insight_guid = BET-1234-abcd; // string | The unique identifier for the insight. Defined by MX.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listCategoriesInsight($user_guid, $insight_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->listCategoriesInsight: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |
| **insight_guid** | **string**| The unique identifier for the insight. Defined by MX. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoriesResponseBody**](../Model/CategoriesResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInsightsByAccount()`

```php
listInsightsByAccount($account_guid, $user_guid, $page, $records_per_page): \OpenAPI\Client\Model\InsightsResponseBody
```

List insights by account

Use this endpoint to list all insights associated with a specified account GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for the `account`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for the `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listInsightsByAccount($account_guid, $user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->listInsightsByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for the &#x60;account&#x60;. | |
| **user_guid** | **string**| The unique id for the &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InsightsResponseBody**](../Model/InsightsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInsightsUser()`

```php
listInsightsUser($user_guid, $page, $records_per_page): \OpenAPI\Client\Model\InsightsResponseBody
```

List all insights for a user.

Use this endpoint to list all the insights associated with the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-1234-abcd; // string | The unique identifier for the user. Defined by MX.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listInsightsUser($user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->listInsightsUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InsightsResponseBody**](../Model/InsightsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMerchantsInsight()`

```php
listMerchantsInsight($user_guid, $insight_guid, $page, $records_per_page): \OpenAPI\Client\Model\MerchantsResponseBody
```

List all merchants associated with an insight.

Use this endpoint to list all the merchants associated with the insight.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-1234-abcd; // string | The unique identifier for the user. Defined by MX.
$insight_guid = BET-1234-abcd; // string | The unique identifier for the insight. Defined by MX.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listMerchantsInsight($user_guid, $insight_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->listMerchantsInsight: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |
| **insight_guid** | **string**| The unique identifier for the insight. Defined by MX. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\MerchantsResponseBody**](../Model/MerchantsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listScheduledPaymentsInsight()`

```php
listScheduledPaymentsInsight($user_guid, $insight_guid, $page, $records_per_page): \OpenAPI\Client\Model\ScheduledPaymentsResponseBody
```

List all scheduled payments associated with an insight

Use this endpoint to list all the scheduled payments associated with the insight.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-1234-abcd; // string | The unique identifier for the user. Defined by MX.
$insight_guid = BET-1234-abcd; // string | The unique identifier for the insight. Defined by MX.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listScheduledPaymentsInsight($user_guid, $insight_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->listScheduledPaymentsInsight: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |
| **insight_guid** | **string**| The unique identifier for the insight. Defined by MX. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ScheduledPaymentsResponseBody**](../Model/ScheduledPaymentsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactionsInsight()`

```php
listTransactionsInsight($user_guid, $insight_guid, $page, $records_per_page): \OpenAPI\Client\Model\TransactionsResponseBody
```

List all transactions associated with an insight.

Use this endpoint to list all the transactions associated with the insight.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-1234-abcd; // string | The unique identifier for the user. Defined by MX.
$insight_guid = BET-1234-abcd; // string | The unique identifier for the insight. Defined by MX.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listTransactionsInsight($user_guid, $insight_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->listTransactionsInsight: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |
| **insight_guid** | **string**| The unique identifier for the insight. Defined by MX. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionsResponseBody**](../Model/TransactionsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readInsightsUser()`

```php
readInsightsUser($user_guid, $insight_guid): \OpenAPI\Client\Model\InsightResponseBody
```

Read a specific insight.

Use this endpoint to read the attributes of a specific insight according to its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-1234-abcd; // string | The unique identifier for the user. Defined by MX.
$insight_guid = BET-1234-abcd; // string | The unique identifier for the insight. Defined by MX.

try {
    $result = $apiInstance->readInsightsUser($user_guid, $insight_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->readInsightsUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |
| **insight_guid** | **string**| The unique identifier for the insight. Defined by MX. | |

### Return type

[**\OpenAPI\Client\Model\InsightResponseBody**](../Model/InsightResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInsight()`

```php
updateInsight($user_guid, $insight_guid, $insight_update_request): \OpenAPI\Client\Model\InsightResponse
```

Update insight

Use this endpoint to update the attributes of a particular insight according to its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique identifier for the user. Defined by MX.
$insight_guid = BET-1234-abcd; // string | The unique identifier for the insight. Defined by MX.
$insight_update_request = new \OpenAPI\Client\Model\InsightUpdateRequest(); // \OpenAPI\Client\Model\InsightUpdateRequest | The insight to be updated (None of these parameters are required, but the user object cannot be empty.)

try {
    $result = $apiInstance->updateInsight($user_guid, $insight_guid, $insight_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->updateInsight: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |
| **insight_guid** | **string**| The unique identifier for the insight. Defined by MX. | |
| **insight_update_request** | [**\OpenAPI\Client\Model\InsightUpdateRequest**](../Model/InsightUpdateRequest.md)| The insight to be updated (None of these parameters are required, but the user object cannot be empty.) | |

### Return type

[**\OpenAPI\Client\Model\InsightResponse**](../Model/InsightResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
