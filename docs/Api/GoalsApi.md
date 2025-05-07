# OpenAPI\Client\GoalsApi

All URIs are relative to https://api.mx.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usersUserGuidGoalsGet()**](GoalsApi.md#usersUserGuidGoalsGet) | **GET** /users/{user_guid}/goals | List goals |
| [**usersUserGuidGoalsGoalGuidDelete()**](GoalsApi.md#usersUserGuidGoalsGoalGuidDelete) | **DELETE** /users/{user_guid}/goals/{goal_guid} | Delete a goal |
| [**usersUserGuidGoalsGoalGuidGet()**](GoalsApi.md#usersUserGuidGoalsGoalGuidGet) | **GET** /users/{user_guid}/goals/{goal_guid} | Read a goal |
| [**usersUserGuidGoalsGoalGuidPut()**](GoalsApi.md#usersUserGuidGoalsGoalGuidPut) | **PUT** /users/{user_guid}/goals/{goal_guid} | Update a goal |
| [**usersUserGuidGoalsPost()**](GoalsApi.md#usersUserGuidGoalsPost) | **POST** /users/{user_guid}/goals | Create a goal |
| [**usersUserGuidGoalsRepositionPut()**](GoalsApi.md#usersUserGuidGoalsRepositionPut) | **PUT** /users/{user_guid}/goals/reposition | Reposition goals |


## `usersUserGuidGoalsGet()`

```php
usersUserGuidGoalsGet($user_guid, $page, $records_per_age): \OpenAPI\Client\Model\GoalsResponseBody
```

List goals

List all goals a user can set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user.
$page = 'page_example'; // string | Results are returned in paginated sets, this is the page of the results you would like to view. Defaults to page 1 if no page is specified.
$records_per_age = 'records_per_age_example'; // string | The supported range is from 10 to 1000. If the records_per_page parameter is not specified or is outside this range, a default of 25 records per page will be used.

try {
    $result = $apiInstance->usersUserGuidGoalsGet($user_guid, $page, $records_per_age);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->usersUserGuidGoalsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. | |
| **page** | **string**| Results are returned in paginated sets, this is the page of the results you would like to view. Defaults to page 1 if no page is specified. | [optional] |
| **records_per_age** | **string**| The supported range is from 10 to 1000. If the records_per_page parameter is not specified or is outside this range, a default of 25 records per page will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GoalsResponseBody**](../Model/GoalsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidGoalsGoalGuidDelete()`

```php
usersUserGuidGoalsGoalGuidDelete($goal_guid, $user_guid)
```

Delete a goal

Delete a goal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$goal_guid = 'goal_guid_example'; // string | The unique identifier for a goal. Defined by MX.
$user_guid = 'user_guid_example'; // string | The unique identifier for a user.

try {
    $apiInstance->usersUserGuidGoalsGoalGuidDelete($goal_guid, $user_guid);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->usersUserGuidGoalsGoalGuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **goal_guid** | **string**| The unique identifier for a goal. Defined by MX. | |
| **user_guid** | **string**| The unique identifier for a user. | |

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

## `usersUserGuidGoalsGoalGuidGet()`

```php
usersUserGuidGoalsGoalGuidGet($goal_guid, $user_guid): \OpenAPI\Client\Model\GoalResponseBody
```

Read a goal

Read a specific goal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$goal_guid = 'goal_guid_example'; // string | The unique identifier for a goal. Defined by MX.
$user_guid = 'user_guid_example'; // string | The unique identifier for a user.

try {
    $result = $apiInstance->usersUserGuidGoalsGoalGuidGet($goal_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->usersUserGuidGoalsGoalGuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **goal_guid** | **string**| The unique identifier for a goal. Defined by MX. | |
| **user_guid** | **string**| The unique identifier for a user. | |

### Return type

[**\OpenAPI\Client\Model\GoalResponseBody**](../Model/GoalResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidGoalsGoalGuidPut()`

```php
usersUserGuidGoalsGoalGuidPut($goal_guid, $user_guid, $update_goal_request_body): \OpenAPI\Client\Model\GoalResponseBody
```

Update a goal

This endpoint updates a specific goal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$goal_guid = 'goal_guid_example'; // string | The unique identifier for a goal. Defined by MX.
$user_guid = 'user_guid_example'; // string | The unique identifier for a user.
$update_goal_request_body = new \OpenAPI\Client\Model\UpdateGoalRequestBody(); // \OpenAPI\Client\Model\UpdateGoalRequestBody

try {
    $result = $apiInstance->usersUserGuidGoalsGoalGuidPut($goal_guid, $user_guid, $update_goal_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->usersUserGuidGoalsGoalGuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **goal_guid** | **string**| The unique identifier for a goal. Defined by MX. | |
| **user_guid** | **string**| The unique identifier for a user. | |
| **update_goal_request_body** | [**\OpenAPI\Client\Model\UpdateGoalRequestBody**](../Model/UpdateGoalRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GoalResponseBody**](../Model/GoalResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidGoalsPost()`

```php
usersUserGuidGoalsPost($user_guid, $goal_request_body): \OpenAPI\Client\Model\GoalResponseBody
```

Create a goal

Create a goal. This endpoint accepts the optional `MX-Skip-Webhook` header and `skip_webhook` parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user.
$goal_request_body = new \OpenAPI\Client\Model\GoalRequestBody(); // \OpenAPI\Client\Model\GoalRequestBody

try {
    $result = $apiInstance->usersUserGuidGoalsPost($user_guid, $goal_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->usersUserGuidGoalsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. | |
| **goal_request_body** | [**\OpenAPI\Client\Model\GoalRequestBody**](../Model/GoalRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GoalResponseBody**](../Model/GoalResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidGoalsRepositionPut()`

```php
usersUserGuidGoalsRepositionPut($user_guid, $reposition_request_body): \OpenAPI\Client\Model\RepositionResponseBody
```

Reposition goals

This endpoint repositions goal priority levels. If one goal is set to a lower priority, then any other goals need to be adjusted accordingly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user.
$reposition_request_body = new \OpenAPI\Client\Model\RepositionRequestBody(); // \OpenAPI\Client\Model\RepositionRequestBody

try {
    $result = $apiInstance->usersUserGuidGoalsRepositionPut($user_guid, $reposition_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->usersUserGuidGoalsRepositionPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. | |
| **reposition_request_body** | [**\OpenAPI\Client\Model\RepositionRequestBody**](../Model/RepositionRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RepositionResponseBody**](../Model/RepositionResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
