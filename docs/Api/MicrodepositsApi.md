# OpenAPI\Client\MicrodepositsApi

All URIs are relative to https://api.mx.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**microDepositsMicrodepositGuidVerifyPut()**](MicrodepositsApi.md#microDepositsMicrodepositGuidVerifyPut) | **PUT** /micro_deposits/{microdeposit_guid}/verify | Verify a Microdeposit |
| [**usersUserGuidMicroDepositsGet()**](MicrodepositsApi.md#usersUserGuidMicroDepositsGet) | **GET** /users/{user_guid}/micro_deposits | List all microdeposits for a user |
| [**usersUserGuidMicroDepositsMicroDepositGuidDelete()**](MicrodepositsApi.md#usersUserGuidMicroDepositsMicroDepositGuidDelete) | **DELETE** /users/{user_guid}/micro_deposits/{micro_deposit_guid} | Delete a microdeposit |
| [**usersUserGuidMicroDepositsMicroDepositGuidGet()**](MicrodepositsApi.md#usersUserGuidMicroDepositsMicroDepositGuidGet) | **GET** /users/{user_guid}/micro_deposits/{micro_deposit_guid} | Read a microdeposit for a user |
| [**usersUserGuidMicroDepositsPost()**](MicrodepositsApi.md#usersUserGuidMicroDepositsPost) | **POST** /users/{user_guid}/micro_deposits | Create a microdeposit |


## `microDepositsMicrodepositGuidVerifyPut()`

```php
microDepositsMicrodepositGuidVerifyPut($microdeposit_guid, $microdeposit_verify_request_body): \OpenAPI\Client\Model\MicrodepositResponseBody
```

Verify a Microdeposit

Use this endpoint to verify the amounts deposited into the account during a microdeposit verification. The verification has not successfully completed until the `status` is `VERIFIED`. Poll the `/users/{user_guid}/micro_deposits/{micro_deposit_guid}` (read microdeposit) endpoint until you see this status or an error state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MicrodepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$microdeposit_guid = 'microdeposit_guid_example'; // string | The unique identifier for the microdeposit. Defined by MX.
$microdeposit_verify_request_body = new \OpenAPI\Client\Model\MicrodepositVerifyRequestBody(); // \OpenAPI\Client\Model\MicrodepositVerifyRequestBody

try {
    $result = $apiInstance->microDepositsMicrodepositGuidVerifyPut($microdeposit_guid, $microdeposit_verify_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MicrodepositsApi->microDepositsMicrodepositGuidVerifyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **microdeposit_guid** | **string**| The unique identifier for the microdeposit. Defined by MX. | |
| **microdeposit_verify_request_body** | [**\OpenAPI\Client\Model\MicrodepositVerifyRequestBody**](../Model/MicrodepositVerifyRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MicrodepositResponseBody**](../Model/MicrodepositResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidMicroDepositsGet()`

```php
usersUserGuidMicroDepositsGet($user_guid): \OpenAPI\Client\Model\MicrodepositsResponseBody
```

List all microdeposits for a user

Use this endpoint to read the attributes of a specific microdeposit according to its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MicrodepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user. Defined by MX.

try {
    $result = $apiInstance->usersUserGuidMicroDepositsGet($user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MicrodepositsApi->usersUserGuidMicroDepositsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |

### Return type

[**\OpenAPI\Client\Model\MicrodepositsResponseBody**](../Model/MicrodepositsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidMicroDepositsMicroDepositGuidDelete()`

```php
usersUserGuidMicroDepositsMicroDepositGuidDelete($micro_deposit_guid, $user_guid)
```

Delete a microdeposit

Use this endpoint to delete the specified microdeposit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MicrodepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$micro_deposit_guid = MIC-09ba578e-8448-4f7f-89e1-b62ff2517edb; // string | The unique identifier for the microdeposit. Defined by MX.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $apiInstance->usersUserGuidMicroDepositsMicroDepositGuidDelete($micro_deposit_guid, $user_guid);
} catch (Exception $e) {
    echo 'Exception when calling MicrodepositsApi->usersUserGuidMicroDepositsMicroDepositGuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **micro_deposit_guid** | **string**| The unique identifier for the microdeposit. Defined by MX. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

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

## `usersUserGuidMicroDepositsMicroDepositGuidGet()`

```php
usersUserGuidMicroDepositsMicroDepositGuidGet($user_guid, $micro_deposit_guid): \OpenAPI\Client\Model\MicrodepositResponseBody
```

Read a microdeposit for a user

Use this endpoint to read the attributes of a specific microdeposit according to its unique GUID. <br></br> Webhooks for microdeposit status changes are triggered when a status changes. The actual status of the microdeposit guid updates every minute. You may force a status update by calling the read microdeposit endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MicrodepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user. Defined by MX.
$micro_deposit_guid = 'micro_deposit_guid_example'; // string | The unique identifier for the microdeposit. Defined by MX.

try {
    $result = $apiInstance->usersUserGuidMicroDepositsMicroDepositGuidGet($user_guid, $micro_deposit_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MicrodepositsApi->usersUserGuidMicroDepositsMicroDepositGuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |
| **micro_deposit_guid** | **string**| The unique identifier for the microdeposit. Defined by MX. | |

### Return type

[**\OpenAPI\Client\Model\MicrodepositResponseBody**](../Model/MicrodepositResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidMicroDepositsPost()`

```php
usersUserGuidMicroDepositsPost($user_guid, $microdeposit_request_body): \OpenAPI\Client\Model\MicrodepositResponseBody
```

Create a microdeposit

Use this endpoint to create a microdeposit. The response will include the new microdeposit record with a status of INITIATED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MicrodepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user. Defined by MX.
$microdeposit_request_body = new \OpenAPI\Client\Model\MicrodepositRequestBody(); // \OpenAPI\Client\Model\MicrodepositRequestBody

try {
    $result = $apiInstance->usersUserGuidMicroDepositsPost($user_guid, $microdeposit_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MicrodepositsApi->usersUserGuidMicroDepositsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |
| **microdeposit_request_body** | [**\OpenAPI\Client\Model\MicrodepositRequestBody**](../Model/MicrodepositRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MicrodepositResponseBody**](../Model/MicrodepositResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
