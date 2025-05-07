# OpenAPI\Client\SpendingPlanApi

All URIs are relative to https://api.mx.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSpendingPlan()**](SpendingPlanApi.md#createSpendingPlan) | **POST** /users/{user_guid}/spending_plans | Create spending plan |
| [**createSpendingPlanIterationItem()**](SpendingPlanApi.md#createSpendingPlanIterationItem) | **POST** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations/current/iteration_items | Create spending plan iteration item |
| [**deleteSpendingPlan()**](SpendingPlanApi.md#deleteSpendingPlan) | **DELETE** /users/{user_guid}/spending_plans/{spending_plan_guid} | Delete spending plan |
| [**deleteSpendingPlanAccount()**](SpendingPlanApi.md#deleteSpendingPlanAccount) | **DELETE** /users/{user_guid}/spending_plans/{spending_plan_guid}/spending_plan_accounts/{spending_plan_account_guid} | Delete spending plan account |
| [**deleteSpendingPlanIterationItem()**](SpendingPlanApi.md#deleteSpendingPlanIterationItem) | **DELETE** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations/current/iteration_items/{iteration_item_guid} | Delete spending plan iteration item |
| [**listSpendingPlanAccounts()**](SpendingPlanApi.md#listSpendingPlanAccounts) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid}/spending_plan_accounts | List spending plan accounts |
| [**listSpendingPlanIterationItems()**](SpendingPlanApi.md#listSpendingPlanIterationItems) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations/current/iteration_items | List spending plan iteration items |
| [**listSpendingPlanIterations()**](SpendingPlanApi.md#listSpendingPlanIterations) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations | List spending plan iterations |
| [**listSpendingPlans()**](SpendingPlanApi.md#listSpendingPlans) | **GET** /users/{user_guid}/spending_plans | List spending plans |
| [**readSpendingPlanAccount()**](SpendingPlanApi.md#readSpendingPlanAccount) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid}/spending_plan_accounts/{spending_plan_account_guid} | Read spending plan account |
| [**readSpendingPlanIteration()**](SpendingPlanApi.md#readSpendingPlanIteration) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations/{iteration_number} | Read a spending plan iteration |
| [**readSpendingPlanIterationItem()**](SpendingPlanApi.md#readSpendingPlanIterationItem) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations/current/iteration_items/{iteration_item_guid} | Read a spending plan iteration item |
| [**readSpendingPlanUser()**](SpendingPlanApi.md#readSpendingPlanUser) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid} | Read a spending plan for a user |
| [**updateSpendingPlanIterationItem()**](SpendingPlanApi.md#updateSpendingPlanIterationItem) | **PUT** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations/current/iteration_items/{iteration_item_guid} | Update a spending plan iteration item |


## `createSpendingPlan()`

```php
createSpendingPlan($user_guid): \OpenAPI\Client\Model\SpendingPlanResponse
```

Create spending plan

This endpoint creates a new `spending_plan` for the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->createSpendingPlan($user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->createSpendingPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\SpendingPlanResponse**](../Model/SpendingPlanResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSpendingPlanIterationItem()`

```php
createSpendingPlanIterationItem($spending_plan_guid, $user_guid, $spending_plan_iteration_item_create_request_body): \OpenAPI\Client\Model\SpendingPlanIterationItemResponse
```

Create spending plan iteration item

This endpoint creates a new `spending_plan_iteration_item`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spending_plan_guid = SPL-e5f9a5bd-c5b3-4901-bdc0-62119b9db262; // string | The unique ID for the `spending_plan`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$spending_plan_iteration_item_create_request_body = new \OpenAPI\Client\Model\SpendingPlanIterationItemCreateRequestBody(); // \OpenAPI\Client\Model\SpendingPlanIterationItemCreateRequestBody | Iteration item to be created with required parameter (planned_amount)

try {
    $result = $apiInstance->createSpendingPlanIterationItem($spending_plan_guid, $user_guid, $spending_plan_iteration_item_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->createSpendingPlanIterationItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spending_plan_guid** | **string**| The unique ID for the &#x60;spending_plan&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **spending_plan_iteration_item_create_request_body** | [**\OpenAPI\Client\Model\SpendingPlanIterationItemCreateRequestBody**](../Model/SpendingPlanIterationItemCreateRequestBody.md)| Iteration item to be created with required parameter (planned_amount) | |

### Return type

[**\OpenAPI\Client\Model\SpendingPlanIterationItemResponse**](../Model/SpendingPlanIterationItemResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSpendingPlan()`

```php
deleteSpendingPlan($user_guid, $spending_plan_guid)
```

Delete spending plan

Use this endpoint to delete a user's `spending_plan`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique ID for a `user`.
$spending_plan_guid = SPL-e5f9a5bd-c5b3-4901-bdc0-62119b9db262; // string | The unique ID for the `spending_plan`.

try {
    $apiInstance->deleteSpendingPlan($user_guid, $spending_plan_guid);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->deleteSpendingPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique ID for a &#x60;user&#x60;. | |
| **spending_plan_guid** | **string**| The unique ID for the &#x60;spending_plan&#x60;. | |

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

## `deleteSpendingPlanAccount()`

```php
deleteSpendingPlanAccount($user_guid, $spending_plan_guid, $spending_plan_account_guid)
```

Delete spending plan account

Use this endpoint to delete a `spending_plan_account`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique ID for a `user`.
$spending_plan_guid = SPL-e5f9a5bd-c5b3-4901-bdc0-62119b9db262; // string | The unique ID for the `spending_plan`.
$spending_plan_account_guid = ACT-e9f80fee-84da-7s7r-9a5e-0346g4279b4c; // string | The unique ID for the specified account.

try {
    $apiInstance->deleteSpendingPlanAccount($user_guid, $spending_plan_guid, $spending_plan_account_guid);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->deleteSpendingPlanAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique ID for a &#x60;user&#x60;. | |
| **spending_plan_guid** | **string**| The unique ID for the &#x60;spending_plan&#x60;. | |
| **spending_plan_account_guid** | **string**| The unique ID for the specified account. | |

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

## `deleteSpendingPlanIterationItem()`

```php
deleteSpendingPlanIterationItem($user_guid, $spending_plan_guid, $iteration_item_guid)
```

Delete spending plan iteration item

Use this endpoint to delete a spending plan `iteration_item`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique ID for a `user`.
$spending_plan_guid = SPL-e5f9a5bd-c5b3-4901-bdc0-62119b9db262; // string | The unique ID for the `spending_plan`.
$iteration_item_guid = SII-a4dc1549-da28-1245-9c9c-53eee4cdfbe3; // string | The unique ID for the `iteration_item`.

try {
    $apiInstance->deleteSpendingPlanIterationItem($user_guid, $spending_plan_guid, $iteration_item_guid);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->deleteSpendingPlanIterationItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique ID for a &#x60;user&#x60;. | |
| **spending_plan_guid** | **string**| The unique ID for the &#x60;spending_plan&#x60;. | |
| **iteration_item_guid** | **string**| The unique ID for the &#x60;iteration_item&#x60;. | |

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

## `listSpendingPlanAccounts()`

```php
listSpendingPlanAccounts($user_guid, $spending_plan_guid, $page, $records_per_page): \OpenAPI\Client\Model\SpendingPlanAccountsResponse
```

List spending plan accounts

Use this endpoint to list all the spending plan accounts associated with the spending plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$spending_plan_guid = SPL-e5f9a5bd-c5b3-4901-bdc0-62119b9db262; // string | The unique ID for the `spending_plan`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listSpendingPlanAccounts($user_guid, $spending_plan_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->listSpendingPlanAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **spending_plan_guid** | **string**| The unique ID for the &#x60;spending_plan&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SpendingPlanAccountsResponse**](../Model/SpendingPlanAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSpendingPlanIterationItems()`

```php
listSpendingPlanIterationItems($user_guid, $spending_plan_guid, $page, $records_per_page): \OpenAPI\Client\Model\SpendingPlanIterationItemsResponseBody
```

List spending plan iteration items

Use this endpoint to list all the spending plan `iteration_items` associated with the `iteration`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$spending_plan_guid = SPL-e5f9a5bd-c5b3-4901-bdc0-62119b9db262; // string | The unique ID for the `spending_plan`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listSpendingPlanIterationItems($user_guid, $spending_plan_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->listSpendingPlanIterationItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **spending_plan_guid** | **string**| The unique ID for the &#x60;spending_plan&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SpendingPlanIterationItemsResponseBody**](../Model/SpendingPlanIterationItemsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSpendingPlanIterations()`

```php
listSpendingPlanIterations($user_guid, $spending_plan_guid, $page, $records_per_page): \OpenAPI\Client\Model\SpendingPlanIterationsResponse
```

List spending plan iterations

Use this endpoint to list all the spending plan `iterations` associated with the `spending_plan`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$spending_plan_guid = SPL-e5f9a5bd-c5b3-4901-bdc0-62119b9db262; // string | The unique ID for the `spending_plan`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listSpendingPlanIterations($user_guid, $spending_plan_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->listSpendingPlanIterations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **spending_plan_guid** | **string**| The unique ID for the &#x60;spending_plan&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SpendingPlanIterationsResponse**](../Model/SpendingPlanIterationsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSpendingPlans()`

```php
listSpendingPlans($user_guid, $page, $records_per_page): \OpenAPI\Client\Model\SpendingPlansResponseBody
```

List spending plans

Use this endpoint to list all the spending plans associated with the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listSpendingPlans($user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->listSpendingPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SpendingPlansResponseBody**](../Model/SpendingPlansResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readSpendingPlanAccount()`

```php
readSpendingPlanAccount($user_guid, $spending_plan_guid, $spending_plan_account_guid, $page, $records_per_page): \OpenAPI\Client\Model\SpendingPlanAccountResponse
```

Read spending plan account

Use this endpoint to read the attributes of a specific spending plan account according to its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$spending_plan_guid = SPL-e5f9a5bd-c5b3-4901-bdc0-62119b9db262; // string | The unique ID for the `spending_plan`.
$spending_plan_account_guid = ACT-e9f80fee-84da-7s7r-9a5e-0346g4279b4c; // string | The unique ID for the specified account.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->readSpendingPlanAccount($user_guid, $spending_plan_guid, $spending_plan_account_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->readSpendingPlanAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **spending_plan_guid** | **string**| The unique ID for the &#x60;spending_plan&#x60;. | |
| **spending_plan_account_guid** | **string**| The unique ID for the specified account. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SpendingPlanAccountResponse**](../Model/SpendingPlanAccountResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readSpendingPlanIteration()`

```php
readSpendingPlanIteration($user_guid, $spending_plan_guid, $iteration_number, $page, $records_per_page): \OpenAPI\Client\Model\SpendingPlanIterationResponse
```

Read a spending plan iteration

Use this endpoint to read the attributes of a specific spending plan `iteration` according to its `iteration_number`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$spending_plan_guid = SPL-e5f9a5bd-c5b3-4901-bdc0-62119b9db262; // string | The unique ID for the `spending_plan`.
$iteration_number = 1; // int | The current iteration number for the spending plan `iteration``.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->readSpendingPlanIteration($user_guid, $spending_plan_guid, $iteration_number, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->readSpendingPlanIteration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **spending_plan_guid** | **string**| The unique ID for the &#x60;spending_plan&#x60;. | |
| **iteration_number** | **int**| The current iteration number for the spending plan &#x60;iteration&#x60;&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SpendingPlanIterationResponse**](../Model/SpendingPlanIterationResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readSpendingPlanIterationItem()`

```php
readSpendingPlanIterationItem($user_guid, $spending_plan_guid, $iteration_item_guid, $page, $records_per_page): \OpenAPI\Client\Model\SpendingPlanIterationItemResponse
```

Read a spending plan iteration item

Use this endpoint to read the attributes of a specific spending plan `iteration_item` according to its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$spending_plan_guid = SPL-e5f9a5bd-c5b3-4901-bdc0-62119b9db262; // string | The unique ID for the `spending_plan`.
$iteration_item_guid = SII-a4dc1549-da28-1245-9c9c-53eee4cdfbe3; // string | The unique ID for the `iteration_item`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->readSpendingPlanIterationItem($user_guid, $spending_plan_guid, $iteration_item_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->readSpendingPlanIterationItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **spending_plan_guid** | **string**| The unique ID for the &#x60;spending_plan&#x60;. | |
| **iteration_item_guid** | **string**| The unique ID for the &#x60;iteration_item&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SpendingPlanIterationItemResponse**](../Model/SpendingPlanIterationItemResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readSpendingPlanUser()`

```php
readSpendingPlanUser($user_guid, $spending_plan_guid, $page, $records_per_page): \OpenAPI\Client\Model\SpendingPlanResponse
```

Read a spending plan for a user

Use this endpoint to read the attributes of a specific spending plan according to its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$spending_plan_guid = SPL-e5f9a5bd-c5b3-4901-bdc0-62119b9db262; // string | The unique ID for the `spending_plan`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->readSpendingPlanUser($user_guid, $spending_plan_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->readSpendingPlanUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **spending_plan_guid** | **string**| The unique ID for the &#x60;spending_plan&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SpendingPlanResponse**](../Model/SpendingPlanResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSpendingPlanIterationItem()`

```php
updateSpendingPlanIterationItem($user_guid, $spending_plan_guid, $iteration_item_guid, $spending_plan_iteration_item_create_request_body): \OpenAPI\Client\Model\SpendingPlanIterationItemResponse
```

Update a spending plan iteration item

Use this endpoint to update an existing `spending_plan_iteration_item`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SpendingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$spending_plan_guid = SPL-e5f9a5bd-c5b3-4901-bdc0-62119b9db262; // string | The unique ID for the `spending_plan`.
$iteration_item_guid = SII-a4dc1549-da28-1245-9c9c-53eee4cdfbe3; // string | The unique ID for the `iteration_item`.
$spending_plan_iteration_item_create_request_body = new \OpenAPI\Client\Model\SpendingPlanIterationItemCreateRequestBody(); // \OpenAPI\Client\Model\SpendingPlanIterationItemCreateRequestBody | Iteration item to be updated with required parameter (planned_amount)

try {
    $result = $apiInstance->updateSpendingPlanIterationItem($user_guid, $spending_plan_guid, $iteration_item_guid, $spending_plan_iteration_item_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingPlanApi->updateSpendingPlanIterationItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **spending_plan_guid** | **string**| The unique ID for the &#x60;spending_plan&#x60;. | |
| **iteration_item_guid** | **string**| The unique ID for the &#x60;iteration_item&#x60;. | |
| **spending_plan_iteration_item_create_request_body** | [**\OpenAPI\Client\Model\SpendingPlanIterationItemCreateRequestBody**](../Model/SpendingPlanIterationItemCreateRequestBody.md)| Iteration item to be updated with required parameter (planned_amount) | |

### Return type

[**\OpenAPI\Client\Model\SpendingPlanIterationItemResponse**](../Model/SpendingPlanIterationItemResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
