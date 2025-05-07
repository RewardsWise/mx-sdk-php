# OpenAPI\Client\MxPlatformApi

All URIs are relative to https://api.mx.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aggregateMember()**](MxPlatformApi.md#aggregateMember) | **POST** /users/{user_guid}/members/{member_guid}/aggregate | Aggregate member |
| [**checkBalances()**](MxPlatformApi.md#checkBalances) | **POST** /users/{user_guid}/members/{member_guid}/check_balance | Check balances |
| [**createCategory()**](MxPlatformApi.md#createCategory) | **POST** /users/{user_guid}/categories | Create category |
| [**createManagedAccount()**](MxPlatformApi.md#createManagedAccount) | **POST** /users/{user_guid}/managed_members/{member_guid}/accounts | Create managed account |
| [**createManagedMember()**](MxPlatformApi.md#createManagedMember) | **POST** /users/{user_guid}/managed_members | Create managed member |
| [**createManagedTransaction()**](MxPlatformApi.md#createManagedTransaction) | **POST** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid}/transactions | Create managed transaction |
| [**createManualAccount()**](MxPlatformApi.md#createManualAccount) | **POST** /users/{user_guid}/accounts | Create manual account |
| [**createMember()**](MxPlatformApi.md#createMember) | **POST** /users/{user_guid}/members | Create member |
| [**createTag()**](MxPlatformApi.md#createTag) | **POST** /users/{user_guid}/tags | Create tag |
| [**createTagging()**](MxPlatformApi.md#createTagging) | **POST** /users/{user_guid}/taggings | Create tagging |
| [**createTransactionRule()**](MxPlatformApi.md#createTransactionRule) | **POST** /users/{user_guid}/transaction_rules | Create transaction rule |
| [**createUser()**](MxPlatformApi.md#createUser) | **POST** /users | Create user |
| [**creditCard()**](MxPlatformApi.md#creditCard) | **GET** /credit_card_products/{credit_card_product_guid} | Read a Credit Card Product |
| [**deleteCategory()**](MxPlatformApi.md#deleteCategory) | **DELETE** /users/{user_guid}/categories/{category_guid} | Delete category |
| [**deleteManagedAccount()**](MxPlatformApi.md#deleteManagedAccount) | **DELETE** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid} | Delete managed account |
| [**deleteManagedMember()**](MxPlatformApi.md#deleteManagedMember) | **DELETE** /users/{user_guid}/managed_members/{member_guid} | Delete managed member |
| [**deleteManagedTransaction()**](MxPlatformApi.md#deleteManagedTransaction) | **DELETE** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid}/transactions/{transaction_guid} | Delete managed transaction |
| [**deleteManualAccount()**](MxPlatformApi.md#deleteManualAccount) | **DELETE** /users/{user_guid}/accounts/{account_guid} | Delete manual account |
| [**deleteMember()**](MxPlatformApi.md#deleteMember) | **DELETE** /users/{user_guid}/members/{member_guid} | Delete member |
| [**deleteTag()**](MxPlatformApi.md#deleteTag) | **DELETE** /users/{user_guid}/tags/{tag_guid} | Delete tag |
| [**deleteTagging()**](MxPlatformApi.md#deleteTagging) | **DELETE** /users/{user_guid}/taggings/{tagging_guid} | Delete tagging |
| [**deleteTransactionRule()**](MxPlatformApi.md#deleteTransactionRule) | **DELETE** /users/{user_guid}/transaction_rules/{transaction_rule_guid} | Delete transaction rule |
| [**deleteUser()**](MxPlatformApi.md#deleteUser) | **DELETE** /users/{user_guid} | Delete user |
| [**deprecatedRequestPaymentProcessorAuthorizationCode()**](MxPlatformApi.md#deprecatedRequestPaymentProcessorAuthorizationCode) | **POST** /payment_processor_authorization_code | (Deprecated) Request an authorization code. |
| [**downloadStatementPDF()**](MxPlatformApi.md#downloadStatementPDF) | **GET** /users/{user_guid}/members/{member_guid}/statements/{statement_guid}.pdf | Download statement pdf |
| [**downloadTaxDocument()**](MxPlatformApi.md#downloadTaxDocument) | **GET** /users/{user_guid}/members/{member_guid}/tax_documents/{tax_document_guid}.pdf | Download a Tax Document PDF |
| [**enhanceTransactions()**](MxPlatformApi.md#enhanceTransactions) | **POST** /transactions/enhance | Enhance transactions |
| [**extendHistory()**](MxPlatformApi.md#extendHistory) | **POST** /users/{user_guid}/members/{member_guid}/extend_history | Extend history |
| [**fetchRewards()**](MxPlatformApi.md#fetchRewards) | **POST** /users/{user_guid}/members/{member_guid}/fetch_rewards | Fetch Rewards |
| [**fetchStatements()**](MxPlatformApi.md#fetchStatements) | **POST** /users/{user_guid}/members/{member_guid}/fetch_statements | Fetch statements |
| [**fetchTaxDocuments()**](MxPlatformApi.md#fetchTaxDocuments) | **POST** /users/{user_guid}/members/{member_guid}/fetch_tax_documents | Fetch Tax Documents |
| [**identifyMember()**](MxPlatformApi.md#identifyMember) | **POST** /users/{user_guid}/members/{member_guid}/identify | Identify member |
| [**listAccountNumbersByAccount()**](MxPlatformApi.md#listAccountNumbersByAccount) | **GET** /users/{user_guid}/accounts/{account_guid}/account_numbers | List account numbers by account |
| [**listAccountNumbersByMember()**](MxPlatformApi.md#listAccountNumbersByMember) | **GET** /users/{user_guid}/members/{member_guid}/account_numbers | List account numbers by member |
| [**listAccountOwnersByMember()**](MxPlatformApi.md#listAccountOwnersByMember) | **GET** /users/{user_guid}/members/{member_guid}/account_owners | List account owners by member |
| [**listCategories()**](MxPlatformApi.md#listCategories) | **GET** /users/{user_guid}/categories | List categories |
| [**listDefaultCategories()**](MxPlatformApi.md#listDefaultCategories) | **GET** /categories/default | List default categories |
| [**listDefaultCategoriesByUser()**](MxPlatformApi.md#listDefaultCategoriesByUser) | **GET** /users/{user_guid}/categories/default | List default categories by user |
| [**listFavoriteInstitutions()**](MxPlatformApi.md#listFavoriteInstitutions) | **GET** /institutions/favorites | List favorite institutions |
| [**listHoldings()**](MxPlatformApi.md#listHoldings) | **GET** /users/{user_guid}/holdings | List holdings |
| [**listHoldingsByAccount()**](MxPlatformApi.md#listHoldingsByAccount) | **GET** /users/{user_guid}/accounts/{account_guid}/holdings | List holdings by account |
| [**listHoldingsByMember()**](MxPlatformApi.md#listHoldingsByMember) | **GET** /users/{user_guid}/members/{member_guid}/holdings | List holdings by member |
| [**listInstitutionCredentials()**](MxPlatformApi.md#listInstitutionCredentials) | **GET** /institutions/{institution_code}/credentials | List institution credentials |
| [**listInstitutions()**](MxPlatformApi.md#listInstitutions) | **GET** /institutions | List institutions |
| [**listManagedAccounts()**](MxPlatformApi.md#listManagedAccounts) | **GET** /users/{user_guid}/managed_members/{member_guid}/accounts | List managed accounts |
| [**listManagedInstitutions()**](MxPlatformApi.md#listManagedInstitutions) | **GET** /managed_institutions | List managed institutions |
| [**listManagedMembers()**](MxPlatformApi.md#listManagedMembers) | **GET** /users/{user_guid}/managed_members | List managed members |
| [**listManagedTransactions()**](MxPlatformApi.md#listManagedTransactions) | **GET** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid}/transactions | List managed transactions |
| [**listMemberAccounts()**](MxPlatformApi.md#listMemberAccounts) | **GET** /users/{user_guid}/members/{member_guid}/accounts | List accounts by member |
| [**listMemberChallenges()**](MxPlatformApi.md#listMemberChallenges) | **GET** /users/{user_guid}/members/{member_guid}/challenges | List member challenges |
| [**listMemberCredentials()**](MxPlatformApi.md#listMemberCredentials) | **GET** /users/{user_guid}/members/{member_guid}/credentials | List member credentials |
| [**listMembers()**](MxPlatformApi.md#listMembers) | **GET** /users/{user_guid}/members | List members |
| [**listMerchants()**](MxPlatformApi.md#listMerchants) | **GET** /merchants | List merchants |
| [**listRewards()**](MxPlatformApi.md#listRewards) | **GET** /users/{user_guid}/members/{member_guid}/rewards | List Rewards |
| [**listStatementsByMember()**](MxPlatformApi.md#listStatementsByMember) | **GET** /users/{user_guid}/members/{member_guid}/statements | List statements by member |
| [**listTaggings()**](MxPlatformApi.md#listTaggings) | **GET** /users/{user_guid}/taggings | List taggings |
| [**listTags()**](MxPlatformApi.md#listTags) | **GET** /users/{user_guid}/tags | List tags |
| [**listTaxDocuments()**](MxPlatformApi.md#listTaxDocuments) | **GET** /users/{user_guid}/members/{member_guid}/tax_documents | List Tax Documents |
| [**listTransactionRules()**](MxPlatformApi.md#listTransactionRules) | **GET** /users/{user_guid}/transaction_rules | List transaction rules |
| [**listTransactions()**](MxPlatformApi.md#listTransactions) | **GET** /users/{user_guid}/transactions | List transactions |
| [**listTransactionsByAccount()**](MxPlatformApi.md#listTransactionsByAccount) | **GET** /users/{user_guid}/accounts/{account_guid}/transactions | List transactions by account |
| [**listTransactionsByMember()**](MxPlatformApi.md#listTransactionsByMember) | **GET** /users/{user_guid}/members/{member_guid}/transactions | List transactions by member |
| [**listTransactionsByTag()**](MxPlatformApi.md#listTransactionsByTag) | **GET** /users/{user_guid}/tags/{tag_guid}/transactions | List transactions by tag |
| [**listUserAccounts()**](MxPlatformApi.md#listUserAccounts) | **GET** /users/{user_guid}/accounts | List accounts |
| [**listUsers()**](MxPlatformApi.md#listUsers) | **GET** /users | List users |
| [**readAccount()**](MxPlatformApi.md#readAccount) | **GET** /users/{user_guid}/accounts/{account_guid} | Read account |
| [**readAccountByMember()**](MxPlatformApi.md#readAccountByMember) | **GET** /users/{user_guid}/members/{member_guid}/accounts/{account_guid} | Read account by member |
| [**readCategory()**](MxPlatformApi.md#readCategory) | **GET** /users/{user_guid}/categories/{category_guid} | Read a custom category |
| [**readDefaultCategory()**](MxPlatformApi.md#readDefaultCategory) | **GET** /categories/{category_guid} | Read a default category |
| [**readHolding()**](MxPlatformApi.md#readHolding) | **GET** /users/{user_guid}/holdings/{holding_guid} | Read holding |
| [**readInstitution()**](MxPlatformApi.md#readInstitution) | **GET** /institutions/{institution_code} | Read institution |
| [**readManagedAccount()**](MxPlatformApi.md#readManagedAccount) | **GET** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid} | Read managed account |
| [**readManagedMember()**](MxPlatformApi.md#readManagedMember) | **GET** /users/{user_guid}/managed_members/{member_guid} | Read managed member |
| [**readManagedTransaction()**](MxPlatformApi.md#readManagedTransaction) | **GET** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid}/transactions/{transaction_guid} | Read managed transaction |
| [**readMember()**](MxPlatformApi.md#readMember) | **GET** /users/{user_guid}/members/{member_guid} | Read member |
| [**readMemberStatus()**](MxPlatformApi.md#readMemberStatus) | **GET** /users/{user_guid}/members/{member_guid}/status | Read member status |
| [**readMerchant()**](MxPlatformApi.md#readMerchant) | **GET** /merchants/{merchant_guid} | Read merchant |
| [**readMerchantLocation()**](MxPlatformApi.md#readMerchantLocation) | **GET** /merchant_locations/{merchant_location_guid} | Read merchant location |
| [**readRewards()**](MxPlatformApi.md#readRewards) | **GET** /users/{user_guid}/members/{member_guid}/rewards/{reward_guid} | Read Reward |
| [**readStatementByMember()**](MxPlatformApi.md#readStatementByMember) | **GET** /users/{user_guid}/members/{member_guid}/statements/{statement_guid} | Read statement by member |
| [**readTag()**](MxPlatformApi.md#readTag) | **GET** /users/{user_guid}/tags/{tag_guid} | Read tag |
| [**readTagging()**](MxPlatformApi.md#readTagging) | **GET** /users/{user_guid}/taggings/{tagging_guid} | Read tagging |
| [**readTaxDocument()**](MxPlatformApi.md#readTaxDocument) | **GET** /users/{user_guid}/members/{member_guid}/tax_documents/{tax_document_guid} | Read a Tax Document |
| [**readTransaction()**](MxPlatformApi.md#readTransaction) | **GET** /users/{user_guid}/transactions/{transaction_guid} | Read transaction |
| [**readTransactionRule()**](MxPlatformApi.md#readTransactionRule) | **GET** /users/{user_guid}/transaction_rules/{transaction_rule_guid} | Read transaction rule |
| [**readUser()**](MxPlatformApi.md#readUser) | **GET** /users/{user_guid} | Read user |
| [**requestAuthorizationCode()**](MxPlatformApi.md#requestAuthorizationCode) | **POST** /authorization_code | Request an authorization code. |
| [**requestConnectWidgetURL()**](MxPlatformApi.md#requestConnectWidgetURL) | **POST** /users/{user_guid}/connect_widget_url | Request connect widget url |
| [**requestOAuthWindowURI()**](MxPlatformApi.md#requestOAuthWindowURI) | **GET** /users/{user_guid}/members/{member_guid}/oauth_window_uri | Request oauth window uri |
| [**requestWidgetURL()**](MxPlatformApi.md#requestWidgetURL) | **POST** /users/{user_guid}/widget_urls | Request widget url |
| [**resumeAggregation()**](MxPlatformApi.md#resumeAggregation) | **PUT** /users/{user_guid}/members/{member_guid}/resume | Resume aggregation |
| [**updateAccountByMember()**](MxPlatformApi.md#updateAccountByMember) | **PUT** /users/{user_guid}/members/{member_guid}/accounts/{account_guid} | Update account by member |
| [**updateCategory()**](MxPlatformApi.md#updateCategory) | **PUT** /users/{user_guid}/categories/{category_guid} | Update category |
| [**updateManagedAccount()**](MxPlatformApi.md#updateManagedAccount) | **PUT** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid} | Update managed account |
| [**updateManagedMember()**](MxPlatformApi.md#updateManagedMember) | **PUT** /users/{user_guid}/managed_members/{member_guid} | Update managed member |
| [**updateManagedTransaction()**](MxPlatformApi.md#updateManagedTransaction) | **PUT** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid}/transactions/{transaction_guid} | Update managed transaction |
| [**updateMember()**](MxPlatformApi.md#updateMember) | **PUT** /users/{user_guid}/members/{member_guid} | Update member |
| [**updateTag()**](MxPlatformApi.md#updateTag) | **PUT** /users/{user_guid}/tags/{tag_guid} | Update tag |
| [**updateTagging()**](MxPlatformApi.md#updateTagging) | **PUT** /users/{user_guid}/taggings/{tagging_guid} | Update tagging |
| [**updateTransaction()**](MxPlatformApi.md#updateTransaction) | **PUT** /users/{user_guid}/transactions/{transaction_guid} | Update transaction |
| [**updateTransactionRule()**](MxPlatformApi.md#updateTransactionRule) | **PUT** /users/{user_guid}/transaction_rules/{transaction_rule_guid} | Update transaction_rule |
| [**updateUser()**](MxPlatformApi.md#updateUser) | **PUT** /users/{user_guid} | Update user |
| [**usersUserGuidMonthlyCashFlowProfileGet()**](MxPlatformApi.md#usersUserGuidMonthlyCashFlowProfileGet) | **GET** /users/{user_guid}/monthly_cash_flow_profile | Read monthly cash flow profile |
| [**usersUserGuidMonthlyCashFlowProfilePut()**](MxPlatformApi.md#usersUserGuidMonthlyCashFlowProfilePut) | **PUT** /users/{user_guid}/monthly_cash_flow_profile | Update monthly cash flow profile |
| [**usersUserGuidTransactionsTransactionGuidSplitDelete()**](MxPlatformApi.md#usersUserGuidTransactionsTransactionGuidSplitDelete) | **DELETE** /users/{user_guid}/transactions/{transaction_guid}/split | Delete split transactions |
| [**usersUserGuidTransactionsTransactionGuidSplitPost()**](MxPlatformApi.md#usersUserGuidTransactionsTransactionGuidSplitPost) | **POST** /users/{user_guid}/transactions/{transaction_guid}/split | Create split transactions |
| [**verifyMember()**](MxPlatformApi.md#verifyMember) | **POST** /users/{user_guid}/members/{member_guid}/verify | Verify member |


## `aggregateMember()`

```php
aggregateMember($member_guid, $user_guid): \OpenAPI\Client\Model\MemberResponseBody
```

Aggregate member

Calling this endpoint initiates an aggregation event for the member. This brings in the latest account and transaction data from the connected institution. If this data has recently been updated, MX may not initiate an aggregation event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->aggregateMember($member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->aggregateMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkBalances()`

```php
checkBalances($member_guid, $user_guid): \OpenAPI\Client\Model\MemberResponseBody
```

Check balances

This endpoint operates much like the aggregate member endpoint except that it gathers only account balance information; it does not gather any transaction data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->checkBalances($member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->checkBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCategory()`

```php
createCategory($user_guid, $category_create_request_body): \OpenAPI\Client\Model\CategoryResponseBody
```

Create category

Use this endpoint to create a new custom category for a specific `user`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$category_create_request_body = new \OpenAPI\Client\Model\CategoryCreateRequestBody(); // \OpenAPI\Client\Model\CategoryCreateRequestBody | Custom category object to be created

try {
    $result = $apiInstance->createCategory($user_guid, $category_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->createCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **category_create_request_body** | [**\OpenAPI\Client\Model\CategoryCreateRequestBody**](../Model/CategoryCreateRequestBody.md)| Custom category object to be created | |

### Return type

[**\OpenAPI\Client\Model\CategoryResponseBody**](../Model/CategoryResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createManagedAccount()`

```php
createManagedAccount($member_guid, $user_guid, $managed_account_create_request_body): \OpenAPI\Client\Model\AccountResponseBody
```

Create managed account

Use this endpoint to create a partner-managed account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$managed_account_create_request_body = new \OpenAPI\Client\Model\ManagedAccountCreateRequestBody(); // \OpenAPI\Client\Model\ManagedAccountCreateRequestBody | Managed account to be created.

try {
    $result = $apiInstance->createManagedAccount($member_guid, $user_guid, $managed_account_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->createManagedAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **managed_account_create_request_body** | [**\OpenAPI\Client\Model\ManagedAccountCreateRequestBody**](../Model/ManagedAccountCreateRequestBody.md)| Managed account to be created. | |

### Return type

[**\OpenAPI\Client\Model\AccountResponseBody**](../Model/AccountResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createManagedMember()`

```php
createManagedMember($user_guid, $managed_member_create_request_body): \OpenAPI\Client\Model\MemberResponseBody
```

Create managed member

Use this endpoint to create a new partner-managed `member`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$managed_member_create_request_body = new \OpenAPI\Client\Model\ManagedMemberCreateRequestBody(); // \OpenAPI\Client\Model\ManagedMemberCreateRequestBody | Managed member to be created.

try {
    $result = $apiInstance->createManagedMember($user_guid, $managed_member_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->createManagedMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **managed_member_create_request_body** | [**\OpenAPI\Client\Model\ManagedMemberCreateRequestBody**](../Model/ManagedMemberCreateRequestBody.md)| Managed member to be created. | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createManagedTransaction()`

```php
createManagedTransaction($account_guid, $member_guid, $user_guid, $managed_transaction_create_request_body): \OpenAPI\Client\Model\TransactionResponseBody
```

Create managed transaction

Use this endpoint to create a new partner-managed `transaction`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$managed_transaction_create_request_body = new \OpenAPI\Client\Model\ManagedTransactionCreateRequestBody(); // \OpenAPI\Client\Model\ManagedTransactionCreateRequestBody | Managed transaction to be created.

try {
    $result = $apiInstance->createManagedTransaction($account_guid, $member_guid, $user_guid, $managed_transaction_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->createManagedTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **managed_transaction_create_request_body** | [**\OpenAPI\Client\Model\ManagedTransactionCreateRequestBody**](../Model/ManagedTransactionCreateRequestBody.md)| Managed transaction to be created. | |

### Return type

[**\OpenAPI\Client\Model\TransactionResponseBody**](../Model/TransactionResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createManualAccount()`

```php
createManualAccount($user_guid, $account_create_request_body): \OpenAPI\Client\Model\AccountResponseBody
```

Create manual account

This endpoint can only be used to create manual accounts. Creating a manual account will automatically create it under the Manual Institution member. Since a manual account has no credentials tied to the member, the account will never aggregate or include data from a data feed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$account_create_request_body = new \OpenAPI\Client\Model\AccountCreateRequestBody(); // \OpenAPI\Client\Model\AccountCreateRequestBody | Manual account object to be created.

try {
    $result = $apiInstance->createManualAccount($user_guid, $account_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->createManualAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **account_create_request_body** | [**\OpenAPI\Client\Model\AccountCreateRequestBody**](../Model/AccountCreateRequestBody.md)| Manual account object to be created. | |

### Return type

[**\OpenAPI\Client\Model\AccountResponseBody**](../Model/AccountResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMember()`

```php
createMember($user_guid, $member_create_request_body): \OpenAPI\Client\Model\MemberResponseBody
```

Create member

This endpoint allows you to create a new member. Members are created with the required parameters credentials and institution_code, and the optional parameters id and metadata. When creating a member, youll need to include the correct type of credential required by the financial institution and provided by the user. You can find out which credential type is required with the `/institutions/{institution_code}/credentials` endpoint. If successful, the MX Platform API will respond with the newly-created member object. Once you successfully create a member, MX will immediately validate the provided credentials and attempt to aggregate data for accounts and transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$member_create_request_body = new \OpenAPI\Client\Model\MemberCreateRequestBody(); // \OpenAPI\Client\Model\MemberCreateRequestBody | Member object to be created with optional parameters (id and metadata) and required parameters (credentials and institution_code)

try {
    $result = $apiInstance->createMember($user_guid, $member_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->createMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **member_create_request_body** | [**\OpenAPI\Client\Model\MemberCreateRequestBody**](../Model/MemberCreateRequestBody.md)| Member object to be created with optional parameters (id and metadata) and required parameters (credentials and institution_code) | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTag()`

```php
createTag($user_guid, $tag_create_request_body): \OpenAPI\Client\Model\TagResponseBody
```

Create tag

Use this endpoint to create a new custom tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$tag_create_request_body = new \OpenAPI\Client\Model\TagCreateRequestBody(); // \OpenAPI\Client\Model\TagCreateRequestBody | Tag object to be created with required parameters (tag_guid)

try {
    $result = $apiInstance->createTag($user_guid, $tag_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->createTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **tag_create_request_body** | [**\OpenAPI\Client\Model\TagCreateRequestBody**](../Model/TagCreateRequestBody.md)| Tag object to be created with required parameters (tag_guid) | |

### Return type

[**\OpenAPI\Client\Model\TagResponseBody**](../Model/TagResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTagging()`

```php
createTagging($user_guid, $tagging_create_request_body): \OpenAPI\Client\Model\TaggingResponseBody
```

Create tagging

Use this endpoint to create a new association between a tag and a particular transaction, according to their unique GUIDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$tagging_create_request_body = new \OpenAPI\Client\Model\TaggingCreateRequestBody(); // \OpenAPI\Client\Model\TaggingCreateRequestBody | Tagging object to be created with required parameters (tag_guid and transaction_guid)

try {
    $result = $apiInstance->createTagging($user_guid, $tagging_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->createTagging: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **tagging_create_request_body** | [**\OpenAPI\Client\Model\TaggingCreateRequestBody**](../Model/TaggingCreateRequestBody.md)| Tagging object to be created with required parameters (tag_guid and transaction_guid) | |

### Return type

[**\OpenAPI\Client\Model\TaggingResponseBody**](../Model/TaggingResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransactionRule()`

```php
createTransactionRule($user_guid, $transaction_rule_create_request_body): \OpenAPI\Client\Model\TransactionRuleResponseBody
```

Create transaction rule

Use this endpoint to create a new transaction rule. The newly-created `transaction_rule` object will be returned if successful.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$transaction_rule_create_request_body = new \OpenAPI\Client\Model\TransactionRuleCreateRequestBody(); // \OpenAPI\Client\Model\TransactionRuleCreateRequestBody | TransactionRule object to be created with optional parameters (description) and required parameters (category_guid and match_description)

try {
    $result = $apiInstance->createTransactionRule($user_guid, $transaction_rule_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->createTransactionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **transaction_rule_create_request_body** | [**\OpenAPI\Client\Model\TransactionRuleCreateRequestBody**](../Model/TransactionRuleCreateRequestBody.md)| TransactionRule object to be created with optional parameters (description) and required parameters (category_guid and match_description) | |

### Return type

[**\OpenAPI\Client\Model\TransactionRuleResponseBody**](../Model/TransactionRuleResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUser()`

```php
createUser($user_create_request_body): \OpenAPI\Client\Model\UserResponseBody
```

Create user

Use this endpoint to create a new user. The API will respond with the newly-created user object if successful. Disabling a user means that accounts and transactions associated with it will not be updated in the background by MX. It will also restrict access to that user’s data until they are no longer disabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_create_request_body = new \OpenAPI\Client\Model\UserCreateRequestBody(); // \OpenAPI\Client\Model\UserCreateRequestBody | User object to be created. (None of these parameters are required, but the user object cannot be empty)

try {
    $result = $apiInstance->createUser($user_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_create_request_body** | [**\OpenAPI\Client\Model\UserCreateRequestBody**](../Model/UserCreateRequestBody.md)| User object to be created. (None of these parameters are required, but the user object cannot be empty) | |

### Return type

[**\OpenAPI\Client\Model\UserResponseBody**](../Model/UserResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditCard()`

```php
creditCard($credit_card_product_guid): \OpenAPI\Client\Model\CreditCardProductResponse
```

Read a Credit Card Product

This endpoint returns the specified `credit_card_product` according to the unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_card_product_guid = credit_card_product_guid; // string | The required `credit_card_product_guid` can be found on the `account` object.

try {
    $result = $apiInstance->creditCard($credit_card_product_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->creditCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_card_product_guid** | **string**| The required &#x60;credit_card_product_guid&#x60; can be found on the &#x60;account&#x60; object. | |

### Return type

[**\OpenAPI\Client\Model\CreditCardProductResponse**](../Model/CreditCardProductResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCategory()`

```php
deleteCategory($category_guid, $user_guid)
```

Delete category

Use this endpoint to delete a specific custom category according to its unique GUID. The API will respond with an empty object and a status of `204 No Content`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_guid = CAT-7829f71c-2e8c-afa5-2f55-fa3634b89874; // string | The unique id for a `category`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $apiInstance->deleteCategory($category_guid, $user_guid);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->deleteCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_guid** | **string**| The unique id for a &#x60;category&#x60;. | |
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

## `deleteManagedAccount()`

```php
deleteManagedAccount($account_guid, $member_guid, $user_guid)
```

Delete managed account

Use this endpoint to delete a partner-managed account according to its unique GUID. If successful, the API will respond with a status of `204 No Content`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $apiInstance->deleteManagedAccount($account_guid, $member_guid, $user_guid);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->deleteManagedAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
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

## `deleteManagedMember()`

```php
deleteManagedMember($member_guid, $user_guid)
```

Delete managed member

Use this endpoint to delete the specified partner-managed `member`. The endpoint will respond with a status of `204 No Content` without a resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $apiInstance->deleteManagedMember($member_guid, $user_guid);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->deleteManagedMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
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

## `deleteManagedTransaction()`

```php
deleteManagedTransaction($account_guid, $member_guid, $transaction_guid, $user_guid)
```

Delete managed transaction

Use this endpoint to delete the specified partner-managed `transaction`. The endpoint will respond with a status of `204 No Content` without a resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$transaction_guid = TRN-810828b0-5210-4878-9bd3-f4ce514f90c4; // string | The unique id for a `transaction`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $apiInstance->deleteManagedTransaction($account_guid, $member_guid, $transaction_guid, $user_guid);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->deleteManagedTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **transaction_guid** | **string**| The unique id for a &#x60;transaction&#x60;. | |
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

## `deleteManualAccount()`

```php
deleteManualAccount($account_guid, $user_guid)
```

Delete manual account

This endpoint deletes accounts that were manually created. The API will respond with an empty object and a status of `204 No Content`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $apiInstance->deleteManualAccount($account_guid, $user_guid);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->deleteManualAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
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

## `deleteMember()`

```php
deleteMember($member_guid, $user_guid)
```

Delete member

Accessing this endpoint will permanently delete a member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $apiInstance->deleteMember($member_guid, $user_guid);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->deleteMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
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

## `deleteTag()`

```php
deleteTag($tag_guid, $user_guid)
```

Delete tag

Use this endpoint to permanently delete a specific tag based on its unique GUID. If successful, the API will respond with status of `204 No Content`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_guid = TAG-aef36e72-6294-4c38-844d-e573e80aed52; // string | The unique id for a `tag`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $apiInstance->deleteTag($tag_guid, $user_guid);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_guid** | **string**| The unique id for a &#x60;tag&#x60;. | |
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

## `deleteTagging()`

```php
deleteTagging($tagging_guid, $user_guid)
```

Delete tagging

Use this endpoint to delete a tagging according to its unique GUID. If successful, the API will respond with an empty body and a status of 204 NO Content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tagging_guid = TGN-007f5486-17e1-45fc-8b87-8f03984430fe; // string | The unique id for a `tagging`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $apiInstance->deleteTagging($tagging_guid, $user_guid);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->deleteTagging: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tagging_guid** | **string**| The unique id for a &#x60;tagging&#x60;. | |
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

## `deleteTransactionRule()`

```php
deleteTransactionRule($transaction_rule_guid, $user_guid)
```

Delete transaction rule

Use this endpoint to permanently delete a transaction rule based on its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_rule_guid = TXR-a080e0f9-a2d4-4d6f-9e03-672cc357a4d3; // string | The unique id for a `transaction_rule`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $apiInstance->deleteTransactionRule($transaction_rule_guid, $user_guid);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->deleteTransactionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_rule_guid** | **string**| The unique id for a &#x60;transaction_rule&#x60;. | |
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

## `deleteUser()`

```php
deleteUser($user_guid)
```

Delete user

Use this endpoint to delete the specified `user`. The response will have a status of `204 No Content` without an object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $apiInstance->deleteUser($user_guid);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `deprecatedRequestPaymentProcessorAuthorizationCode()`

```php
deprecatedRequestPaymentProcessorAuthorizationCode($payment_processor_authorization_code_request_body): \OpenAPI\Client\Model\PaymentProcessorAuthorizationCodeResponseBody
```

(Deprecated) Request an authorization code.

(This endpoint is deprecated. Clients should use `/authorization_code`.) Clients use this endpoint to request an authorization_code according to a user, member, and account specified in the request body. Clients then pass this code to processors. Processor access is scoped only to the user/member/account specified in this request. Before requesting an authorization_code, clients must have verified the specified member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_processor_authorization_code_request_body = new \OpenAPI\Client\Model\PaymentProcessorAuthorizationCodeRequestBody(); // \OpenAPI\Client\Model\PaymentProcessorAuthorizationCodeRequestBody | The scope for the authorization code.

try {
    $result = $apiInstance->deprecatedRequestPaymentProcessorAuthorizationCode($payment_processor_authorization_code_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->deprecatedRequestPaymentProcessorAuthorizationCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_processor_authorization_code_request_body** | [**\OpenAPI\Client\Model\PaymentProcessorAuthorizationCodeRequestBody**](../Model/PaymentProcessorAuthorizationCodeRequestBody.md)| The scope for the authorization code. | |

### Return type

[**\OpenAPI\Client\Model\PaymentProcessorAuthorizationCodeResponseBody**](../Model/PaymentProcessorAuthorizationCodeResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadStatementPDF()`

```php
downloadStatementPDF($member_guid, $statement_guid, $user_guid): \SplFileObject
```

Download statement pdf

Use this endpoint to download a specified statement PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$statement_guid = STA-737a344b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for a `statement`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->downloadStatementPDF($member_guid, $statement_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->downloadStatementPDF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **statement_guid** | **string**| The unique id for a &#x60;statement&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

**\SplFileObject**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadTaxDocument()`

```php
downloadTaxDocument($tax_document_guid, $member_guid, $user_guid): \SplFileObject
```

Download a Tax Document PDF

Use this endpoint to download a PDF version of the specified tax document. The endpoint URL is the base URL appended with the uri of the tax_document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_document_guid = TAX-987dfds1b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `tax_document`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->downloadTaxDocument($tax_document_guid, $member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->downloadTaxDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_document_guid** | **string**| The unique id for a &#x60;tax_document&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

**\SplFileObject**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enhanceTransactions()`

```php
enhanceTransactions($enhance_transactions_request_body): \OpenAPI\Client\Model\EnhanceTransactionsResponseBody
```

Enhance transactions

Use this endpoint to categorize, cleanse, and classify transactions. These transactions are not persisted or stored on the MX platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enhance_transactions_request_body = new \OpenAPI\Client\Model\EnhanceTransactionsRequestBody(); // \OpenAPI\Client\Model\EnhanceTransactionsRequestBody | Transaction object to be enhanced

try {
    $result = $apiInstance->enhanceTransactions($enhance_transactions_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->enhanceTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enhance_transactions_request_body** | [**\OpenAPI\Client\Model\EnhanceTransactionsRequestBody**](../Model/EnhanceTransactionsRequestBody.md)| Transaction object to be enhanced | |

### Return type

[**\OpenAPI\Client\Model\EnhanceTransactionsResponseBody**](../Model/EnhanceTransactionsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extendHistory()`

```php
extendHistory($member_guid, $user_guid): \OpenAPI\Client\Model\MemberResponseBody
```

Extend history

Some institutions allow developers to access an extended transaction history with up to 24 months of data associated with a particular member. The process for fetching and then reading this extended transaction history is much like standard aggregation, and it may trigger multi-factor authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique identifier for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique identifier for a `user`.

try {
    $result = $apiInstance->extendHistory($member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->extendHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique identifier for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique identifier for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchRewards()`

```php
fetchRewards($user_guid, $member_guid): \OpenAPI\Client\Model\MemberResponseBody
```

Fetch Rewards

Calling this endpoint initiates an aggregation-type event which will gather the member's rewards information, as well as account and transaction information. Rewards data is also gathered with daily background aggregations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$member_guid = MBR-fa7537f3-48aa-a683-a02a-b18345562f54; // string | The unique identifier for the member. Defined by MX.

try {
    $result = $apiInstance->fetchRewards($user_guid, $member_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->fetchRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **member_guid** | **string**| The unique identifier for the member. Defined by MX. | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchStatements()`

```php
fetchStatements($member_guid, $user_guid): \OpenAPI\Client\Model\MemberResponseBody
```

Fetch statements

Use this endpoint to fetch the statements associated with a particular member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->fetchStatements($member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->fetchStatements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchTaxDocuments()`

```php
fetchTaxDocuments($member_guid, $user_guid): \OpenAPI\Client\Model\MemberResponseBody
```

Fetch Tax Documents

Use this endpoint to fetch (aggregate) the tax documents associated with the specified member. This request **does not** return the latest tax documents. It just starts the document aggregation process and returns the initial state of the process. You must interact with the newly aggregated data using the other document endpoints in this reference. This request may also trigger multi-factor authentication which requires end-user input and a specific process for answering authentication challenges.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->fetchTaxDocuments($member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->fetchTaxDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identifyMember()`

```php
identifyMember($member_guid, $user_guid): \OpenAPI\Client\Model\MemberResponseBody
```

Identify member

The identify endpoint begins an identification process for an already-existing member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->identifyMember($member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->identifyMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountNumbersByAccount()`

```php
listAccountNumbersByAccount($account_guid, $user_guid, $page, $records_per_page): \OpenAPI\Client\Model\AccountNumbersResponseBody
```

List account numbers by account

This endpoint returns a list of account numbers associated with the specified `account`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listAccountNumbersByAccount($account_guid, $user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listAccountNumbersByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountNumbersResponseBody**](../Model/AccountNumbersResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountNumbersByMember()`

```php
listAccountNumbersByMember($member_guid, $user_guid, $page, $records_per_page): \OpenAPI\Client\Model\AccountNumbersResponseBody
```

List account numbers by member

This endpoint returns a list of account numbers associated with the specified `member`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listAccountNumbersByMember($member_guid, $user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listAccountNumbersByMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountNumbersResponseBody**](../Model/AccountNumbersResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountOwnersByMember()`

```php
listAccountOwnersByMember($member_guid, $user_guid, $page, $records_per_page): \OpenAPI\Client\Model\AccountOwnersResponseBody
```

List account owners by member

This endpoint returns an array with information about every account associated with a particular member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listAccountOwnersByMember($member_guid, $user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listAccountOwnersByMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountOwnersResponseBody**](../Model/AccountOwnersResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCategories()`

```php
listCategories($user_guid, $page, $records_per_page): \OpenAPI\Client\Model\CategoriesResponseBody
```

List categories

Use this endpoint to list all categories associated with a `user`, including both default and custom categories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listCategories($user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
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

## `listDefaultCategories()`

```php
listDefaultCategories($page, $records_per_page): \OpenAPI\Client\Model\CategoriesResponseBody
```

List default categories

Use this endpoint to retrieve a list of all the default categories and subcategories offered within the MX Platform API. In other words, each item in the returned list will have its `is_default` field set to `true`. There are currently 119 default categories and subcategories. Both the _list default categories_ and _list default categories by user_ endpoints return the same results. The different routes are provided for convenience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listDefaultCategories($page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listDefaultCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `listDefaultCategoriesByUser()`

```php
listDefaultCategoriesByUser($user_guid, $page, $records_per_page): \OpenAPI\Client\Model\CategoriesResponseBody
```

List default categories by user

Use this endpoint to retrieve a list of all the default categories and subcategories, scoped by user, offered within the MX Platform API. In other words, each item in the returned list will have its `is_default` field set to `true`. There are currently 119 default categories and subcategories. Both the _list default categories_ and _list default categories by user_ endpoints return the same results. The different routes are provided for convenience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listDefaultCategoriesByUser($user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listDefaultCategoriesByUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
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

## `listFavoriteInstitutions()`

```php
listFavoriteInstitutions($page, $records_per_page): \OpenAPI\Client\Model\InstitutionsResponseBody
```

List favorite institutions

This endpoint returns a paginated list containing institutions that have been set as the partner’s favorites, sorted by popularity. Please contact MX to set a list of favorites.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listFavoriteInstitutions($page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listFavoriteInstitutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InstitutionsResponseBody**](../Model/InstitutionsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHoldings()`

```php
listHoldings($user_guid, $from_date, $page, $records_per_page, $to_date): \OpenAPI\Client\Model\HoldingsResponseBody
```

List holdings

This endpoint returns all holdings associated with the specified `user` across all accounts and members.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$from_date = 2015-09-20; // string | Filter holdings from this date.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.
$to_date = 2019-10-20; // string | Filter holdings to this date.

try {
    $result = $apiInstance->listHoldings($user_guid, $from_date, $page, $records_per_page, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listHoldings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **from_date** | **string**| Filter holdings from this date. | [optional] |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |
| **to_date** | **string**| Filter holdings to this date. | [optional] |

### Return type

[**\OpenAPI\Client\Model\HoldingsResponseBody**](../Model/HoldingsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHoldingsByAccount()`

```php
listHoldingsByAccount($account_guid, $user_guid, $from_date, $page, $records_per_page, $to_date): \OpenAPI\Client\Model\HoldingsResponseBody
```

List holdings by account

This endpoint returns all holdings associated with the specified `account`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for the `account`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for the `user`.
$from_date = 2015-09-20; // string | Filter holdings from this date.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.
$to_date = 2019-10-20; // string | Filter holdings to this date.

try {
    $result = $apiInstance->listHoldingsByAccount($account_guid, $user_guid, $from_date, $page, $records_per_page, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listHoldingsByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for the &#x60;account&#x60;. | |
| **user_guid** | **string**| The unique id for the &#x60;user&#x60;. | |
| **from_date** | **string**| Filter holdings from this date. | [optional] |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |
| **to_date** | **string**| Filter holdings to this date. | [optional] |

### Return type

[**\OpenAPI\Client\Model\HoldingsResponseBody**](../Model/HoldingsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHoldingsByMember()`

```php
listHoldingsByMember($member_guid, $user_guid, $from_date, $page, $records_per_page, $to_date): \OpenAPI\Client\Model\HoldingsResponseBody
```

List holdings by member

This endpoint returns all holdings associated with the specified `member` across all accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$from_date = 2015-09-20; // string | Filter holdings from this date.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.
$to_date = 2019-10-20; // string | Filter holdings to this date.

try {
    $result = $apiInstance->listHoldingsByMember($member_guid, $user_guid, $from_date, $page, $records_per_page, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listHoldingsByMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **from_date** | **string**| Filter holdings from this date. | [optional] |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |
| **to_date** | **string**| Filter holdings to this date. | [optional] |

### Return type

[**\OpenAPI\Client\Model\HoldingsResponseBody**](../Model/HoldingsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInstitutionCredentials()`

```php
listInstitutionCredentials($institution_code, $page, $records_per_page): \OpenAPI\Client\Model\CredentialsResponseBody
```

List institution credentials

Use this endpoint to see which credentials will be needed to create a member for a specific institution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$institution_code = chase; // string | The institution_code of the institution.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listInstitutionCredentials($institution_code, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listInstitutionCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **institution_code** | **string**| The institution_code of the institution. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CredentialsResponseBody**](../Model/CredentialsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInstitutions()`

```php
listInstitutions($name, $page, $records_per_page, $supports_account_identification, $supports_account_statement, $supports_account_verification, $supports_transaction_history): \OpenAPI\Client\Model\InstitutionsResponseBody
```

List institutions

This endpoint returns a list of institutions based on the specified search term or parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = chase; // string | This will list only institutions in which the appended string appears.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.
$supports_account_identification = true; // bool | Filter only institutions which support account identification.
$supports_account_statement = true; // bool | Filter only institutions which support account statements.
$supports_account_verification = true; // bool | Filter only institutions which support account verification.
$supports_transaction_history = true; // bool | Filter only institutions which support extended transaction history.

try {
    $result = $apiInstance->listInstitutions($name, $page, $records_per_page, $supports_account_identification, $supports_account_statement, $supports_account_verification, $supports_transaction_history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listInstitutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| This will list only institutions in which the appended string appears. | [optional] |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |
| **supports_account_identification** | **bool**| Filter only institutions which support account identification. | [optional] |
| **supports_account_statement** | **bool**| Filter only institutions which support account statements. | [optional] |
| **supports_account_verification** | **bool**| Filter only institutions which support account verification. | [optional] |
| **supports_transaction_history** | **bool**| Filter only institutions which support extended transaction history. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InstitutionsResponseBody**](../Model/InstitutionsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listManagedAccounts()`

```php
listManagedAccounts($member_guid, $user_guid, $page, $records_per_page): \OpenAPI\Client\Model\AccountsResponseBody
```

List managed accounts

Use this endpoint to retrieve a list of all the partner-managed accounts associated with the given partner-manage member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listManagedAccounts($member_guid, $user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listManagedAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
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

## `listManagedInstitutions()`

```php
listManagedInstitutions($page, $records_per_page): \OpenAPI\Client\Model\InstitutionsResponseBody
```

List managed institutions

This endpoint returns a list of institutions which can be used to create partner-managed members.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listManagedInstitutions($page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listManagedInstitutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InstitutionsResponseBody**](../Model/InstitutionsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listManagedMembers()`

```php
listManagedMembers($user_guid, $page, $records_per_page): \OpenAPI\Client\Model\MembersResponseBody
```

List managed members

This endpoint returns a list of all the partner-managed members associated with the specified `user`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listManagedMembers($user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listManagedMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\MembersResponseBody**](../Model/MembersResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listManagedTransactions()`

```php
listManagedTransactions($account_guid, $member_guid, $user_guid, $page, $records_per_page): \OpenAPI\Client\Model\TransactionsResponseBody
```

List managed transactions

This endpoint returns a list of all the partner-managed transactions associated with the specified `account`, scoped through a `user` and a `member`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listManagedTransactions($account_guid, $member_guid, $user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listManagedTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
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

## `listMemberAccounts()`

```php
listMemberAccounts($user_guid, $member_guid, $member_is_managed_by_user, $page, $records_per_page): \OpenAPI\Client\Model\AccountsResponseBody
```

List accounts by member

This endpoint returns a list of all the accounts associated with the specified `member`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$member_is_managed_by_user = true; // bool | List only accounts whose member is managed by the user.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listMemberAccounts($user_guid, $member_guid, $member_is_managed_by_user, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listMemberAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **member_is_managed_by_user** | **bool**| List only accounts whose member is managed by the user. | [optional] |
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

## `listMemberChallenges()`

```php
listMemberChallenges($member_guid, $user_guid, $page, $records_per_page): \OpenAPI\Client\Model\ChallengesResponseBody
```

List member challenges

Use this endpoint for information on what multi-factor authentication challenges need to be answered in order to aggregate a member. If the aggregation is not challenged, i.e., the member does not have a connection status of `CHALLENGED`, then code `204 No Content` will be returned. If the aggregation has been challenged, i.e., the member does have a connection status of `CHALLENGED`, then code `200 OK` will be returned - along with the corresponding credentials.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listMemberChallenges($member_guid, $user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listMemberChallenges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ChallengesResponseBody**](../Model/ChallengesResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMemberCredentials()`

```php
listMemberCredentials($member_guid, $user_guid, $page, $records_per_page): \OpenAPI\Client\Model\CredentialsResponseBody
```

List member credentials

This endpoint returns an array which contains information on every non-MFA credential associated with a specific member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listMemberCredentials($member_guid, $user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listMemberCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CredentialsResponseBody**](../Model/CredentialsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMembers()`

```php
listMembers($user_guid, $page, $records_per_page): \OpenAPI\Client\Model\MembersResponseBody
```

List members

This endpoint returns an array which contains information on every member associated with a specific user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listMembers($user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\MembersResponseBody**](../Model/MembersResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMerchants()`

```php
listMerchants($page, $records_per_page): \OpenAPI\Client\Model\MerchantsResponseBody
```

List merchants

This endpoint returns a paginated list of all the merchants in the MX system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listMerchants($page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listMerchants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `listRewards()`

```php
listRewards($user_guid, $member_guid): \OpenAPI\Client\Model\RewardsResponseBody
```

List Rewards

Use this endpoint to list all the `rewards` associated with a specified `member`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$member_guid = MBR-fa7537f3-48aa-a683-a02a-b18345562f54; // string | The unique identifier for the member. Defined by MX.

try {
    $result = $apiInstance->listRewards($user_guid, $member_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **member_guid** | **string**| The unique identifier for the member. Defined by MX. | |

### Return type

[**\OpenAPI\Client\Model\RewardsResponseBody**](../Model/RewardsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStatementsByMember()`

```php
listStatementsByMember($member_guid, $user_guid, $page, $records_per_page): \OpenAPI\Client\Model\StatementsResponseBody
```

List statements by member

Use this endpoint to get an array of available statements.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listStatementsByMember($member_guid, $user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listStatementsByMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\StatementsResponseBody**](../Model/StatementsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTaggings()`

```php
listTaggings($user_guid, $page, $records_per_page): \OpenAPI\Client\Model\TaggingsResponseBody
```

List taggings

Use this endpoint to retrieve a list of all the taggings associated with a specific user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listTaggings($user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listTaggings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaggingsResponseBody**](../Model/TaggingsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTags()`

```php
listTags($user_guid, $page, $records_per_page): \OpenAPI\Client\Model\TagsResponseBody
```

List tags

Use this endpoint to list all tags associated with the specified `user`. Each user includes the `Business` tag by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listTags($user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TagsResponseBody**](../Model/TagsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTaxDocuments()`

```php
listTaxDocuments($member_guid, $user_guid, $page, $records_per_page): \OpenAPI\Client\Model\TaxDocumentsResponseBody
```

List Tax Documents

Use this endpoint to get a paginated list of tax documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listTaxDocuments($member_guid, $user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listTaxDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaxDocumentsResponseBody**](../Model/TaxDocumentsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactionRules()`

```php
listTransactionRules($user_guid, $page, $records_per_page): \OpenAPI\Client\Model\TransactionRulesResponseBody
```

List transaction rules

Use this endpoint to read the attributes of all existing transaction rules belonging to the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listTransactionRules($user_guid, $page, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listTransactionRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionRulesResponseBody**](../Model/TransactionRulesResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactions()`

```php
listTransactions($user_guid, $from_date, $page, $records_per_page, $to_date): \OpenAPI\Client\Model\TransactionsResponseBody
```

List transactions

Requests to this endpoint return a list of transactions associated with the specified `user`, accross all members and accounts associated with that `user`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$from_date = 2015-09-20; // string | Filter transactions from this date.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.
$to_date = 2019-10-20; // string | Filter transactions to this date.

try {
    $result = $apiInstance->listTransactions($user_guid, $from_date, $page, $records_per_page, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **from_date** | **string**| Filter transactions from this date. | [optional] |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |
| **to_date** | **string**| Filter transactions to this date. | [optional] |

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

## `listTransactionsByAccount()`

```php
listTransactionsByAccount($account_guid, $user_guid, $from_date, $page, $records_per_page, $to_date): \OpenAPI\Client\Model\TransactionsResponseBody
```

List transactions by account

This endpoint returns a list of the last 90 days of transactions associated with the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$from_date = 2015-09-20; // string | Filter transactions from this date.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.
$to_date = 2019-10-20; // string | Filter transactions to this date.

try {
    $result = $apiInstance->listTransactionsByAccount($account_guid, $user_guid, $from_date, $page, $records_per_page, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listTransactionsByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **from_date** | **string**| Filter transactions from this date. | [optional] |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |
| **to_date** | **string**| Filter transactions to this date. | [optional] |

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

## `listTransactionsByMember()`

```php
listTransactionsByMember($member_guid, $user_guid, $from_date, $page, $records_per_page, $to_date): \OpenAPI\Client\Model\TransactionsResponseBody
```

List transactions by member

Requests to this endpoint return a list of transactions associated with the specified `member`, accross all accounts associated with that `member`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$from_date = 2015-09-20; // string | Filter transactions from this date.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.
$to_date = 2019-10-20; // string | Filter transactions to this date.

try {
    $result = $apiInstance->listTransactionsByMember($member_guid, $user_guid, $from_date, $page, $records_per_page, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listTransactionsByMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **from_date** | **string**| Filter transactions from this date. | [optional] |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |
| **to_date** | **string**| Filter transactions to this date. | [optional] |

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

## `listTransactionsByTag()`

```php
listTransactionsByTag($tag_guid, $user_guid, $from_date, $page, $records_per_page, $to_date): \OpenAPI\Client\Model\TransactionsResponseBody
```

List transactions by tag

Use this endpoint to get a list of all transactions associated with a particular tag according to the tag’s unique GUID. In other words, a list of all transactions that have been assigned to a particular tag using the create a tagging endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_guid = TAG-aef36e72-6294-4c38-844d-e573e80aed52; // string | The unique id for a `tag`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$from_date = 2015-09-20; // string | Filter transactions from this date.
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.
$to_date = 2019-10-20; // string | Filter transactions to this date.

try {
    $result = $apiInstance->listTransactionsByTag($tag_guid, $user_guid, $from_date, $page, $records_per_page, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listTransactionsByTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_guid** | **string**| The unique id for a &#x60;tag&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **from_date** | **string**| Filter transactions from this date. | [optional] |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |
| **to_date** | **string**| Filter transactions to this date. | [optional] |

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

## `listUserAccounts()`

```php
listUserAccounts($user_guid, $member_is_managed_by_user, $page, $is_manual, $records_per_page): \OpenAPI\Client\Model\AccountsResponseBody
```

List accounts

This endpoint returns a list of all the accounts associated with the specified `user`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$member_is_managed_by_user = true; // bool | List only accounts whose member is managed by the user.
$page = 1; // int | Specify current page.
$is_manual = true; // bool | List only accounts that were manually created.
$records_per_page = 10; // int | Specify records per page.

try {
    $result = $apiInstance->listUserAccounts($user_guid, $member_is_managed_by_user, $page, $is_manual, $records_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listUserAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **member_is_managed_by_user** | **bool**| List only accounts whose member is managed by the user. | [optional] |
| **page** | **int**| Specify current page. | [optional] |
| **is_manual** | **bool**| List only accounts that were manually created. | [optional] |
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

## `listUsers()`

```php
listUsers($page, $records_per_page, $id, $email, $is_disabled): \OpenAPI\Client\Model\UsersResponseBody
```

List users

Use this endpoint to list every user you've created in the MX Platform API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Specify current page.
$records_per_page = 10; // int | Specify records per page.
$id = u-12324-abdc; // string | The user `id` to search for.
$email = example@example.com; // string | The user `email` to search for.
$is_disabled = true; // bool | Search for users that are diabled.

try {
    $result = $apiInstance->listUsers($page, $records_per_page, $id, $email, $is_disabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify current page. | [optional] |
| **records_per_page** | **int**| Specify records per page. | [optional] |
| **id** | **string**| The user &#x60;id&#x60; to search for. | [optional] |
| **email** | **string**| The user &#x60;email&#x60; to search for. | [optional] |
| **is_disabled** | **bool**| Search for users that are diabled. | [optional] |

### Return type

[**\OpenAPI\Client\Model\UsersResponseBody**](../Model/UsersResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readAccount()`

```php
readAccount($account_guid, $user_guid): \OpenAPI\Client\Model\AccountResponseBody
```

Read account

This endpoint returns the specified `account` resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readAccount($account_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\AccountResponseBody**](../Model/AccountResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readAccountByMember()`

```php
readAccountByMember($account_guid, $member_guid, $user_guid): \OpenAPI\Client\Model\AccountResponseBody
```

Read account by member

This endpoint allows you to read the attributes of an `account` resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readAccountByMember($account_guid, $member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readAccountByMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\AccountResponseBody**](../Model/AccountResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readCategory()`

```php
readCategory($category_guid, $user_guid): \OpenAPI\Client\Model\CategoryResponseBody
```

Read a custom category

Use this endpoint to read the attributes of either a default category or a custom category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_guid = CAT-7829f71c-2e8c-afa5-2f55-fa3634b89874; // string | The unique id for a `category`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readCategory($category_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_guid** | **string**| The unique id for a &#x60;category&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\CategoryResponseBody**](../Model/CategoryResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readDefaultCategory()`

```php
readDefaultCategory($category_guid): \OpenAPI\Client\Model\CategoryResponseBody
```

Read a default category

Use this endpoint to read the attributes of a default category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_guid = CAT-7829f71c-2e8c-afa5-2f55-fa3634b89874; // string | The unique id for a `category`.

try {
    $result = $apiInstance->readDefaultCategory($category_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readDefaultCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_guid** | **string**| The unique id for a &#x60;category&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\CategoryResponseBody**](../Model/CategoryResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readHolding()`

```php
readHolding($holding_guid, $user_guid): \OpenAPI\Client\Model\HoldingResponseBody
```

Read holding

Use this endpoint to read the attributes of a specific `holding`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holding_guid = HOL-d65683e8-9eab-26bb-bcfd-ced159c9abe2; // string | The unique id for a `holding`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readHolding($holding_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readHolding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **holding_guid** | **string**| The unique id for a &#x60;holding&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\HoldingResponseBody**](../Model/HoldingResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readInstitution()`

```php
readInstitution($institution_code): \OpenAPI\Client\Model\InstitutionResponseBody
```

Read institution

This endpoint returns information about the institution specified by `institution_code`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$institution_code = chase; // string | The institution_code of the institution.

try {
    $result = $apiInstance->readInstitution($institution_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readInstitution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **institution_code** | **string**| The institution_code of the institution. | |

### Return type

[**\OpenAPI\Client\Model\InstitutionResponseBody**](../Model/InstitutionResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readManagedAccount()`

```php
readManagedAccount($account_guid, $member_guid, $user_guid): \OpenAPI\Client\Model\AccountResponseBody
```

Read managed account

Use this endpoint to read the attributes of a partner-managed account according to its unique guid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readManagedAccount($account_guid, $member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readManagedAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\AccountResponseBody**](../Model/AccountResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readManagedMember()`

```php
readManagedMember($member_guid, $user_guid): \OpenAPI\Client\Model\MemberResponseBody
```

Read managed member

This endpoint returns the attributes of the specified partner-managed `member`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readManagedMember($member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readManagedMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readManagedTransaction()`

```php
readManagedTransaction($account_guid, $member_guid, $transaction_guid, $user_guid): \OpenAPI\Client\Model\TransactionResponseBody
```

Read managed transaction

Requests to this endpoint will return the attributes of the specified partner-managed `transaction`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$transaction_guid = TRN-810828b0-5210-4878-9bd3-f4ce514f90c4; // string | The unique id for a `transaction`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readManagedTransaction($account_guid, $member_guid, $transaction_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readManagedTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **transaction_guid** | **string**| The unique id for a &#x60;transaction&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\TransactionResponseBody**](../Model/TransactionResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readMember()`

```php
readMember($member_guid, $user_guid): \OpenAPI\Client\Model\MemberResponseBody
```

Read member

Use this endpoint to read the attributes of a specific member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readMember($member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readMemberStatus()`

```php
readMemberStatus($member_guid, $user_guid): \OpenAPI\Client\Model\MemberStatusResponseBody
```

Read member status

This endpoint provides the status of the members most recent aggregation event. This is an important step in the aggregation process, and the results returned by this endpoint should determine what you do next in order to successfully aggregate a member. MX has introduced new, more detailed information on the current status of a members connection to a financial institution and the state of its aggregation - the connection_status field. These are intended to replace and expand upon the information provided in the status field, which will soon be deprecated; support for the status field remains for the time being.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readMemberStatus($member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readMemberStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\MemberStatusResponseBody**](../Model/MemberStatusResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readMerchant()`

```php
readMerchant($merchant_guid): \OpenAPI\Client\Model\MerchantResponseBody
```

Read merchant

Returns information about a particular merchant, such as a logo, name, and website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_guid = MCH-7ed79542-884d-2b1b-dd74-501c5cc9d25b; // string | The unique id for a `merchant`.

try {
    $result = $apiInstance->readMerchant($merchant_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_guid** | **string**| The unique id for a &#x60;merchant&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\MerchantResponseBody**](../Model/MerchantResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readMerchantLocation()`

```php
readMerchantLocation($merchant_location_guid): \OpenAPI\Client\Model\MerchantLocationResponseBody
```

Read merchant location

This endpoint returns the specified merchant_location resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_guid = MCH-09466f0a-fb58-9d1a-bae2-2af0afbea621; // string | The unique id for a `merchant_location`.

try {
    $result = $apiInstance->readMerchantLocation($merchant_location_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readMerchantLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_location_guid** | **string**| The unique id for a &#x60;merchant_location&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\MerchantLocationResponseBody**](../Model/MerchantLocationResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readRewards()`

```php
readRewards($user_guid, $member_guid, $reward_guid): \OpenAPI\Client\Model\RewardResponseBody
```

Read Reward

Use this endpoint to read a specific `reward` based on its unique GUID..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$member_guid = MBR-fa7537f3-48aa-a683-a02a-b18345562f54; // string | The unique identifier for the member. Defined by MX.
$reward_guid = RWD-fa7537f3-48aa-a683-a02a-b324322f54; // string | The unique identifier for the rewards. Defined by MX.

try {
    $result = $apiInstance->readRewards($user_guid, $member_guid, $reward_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **member_guid** | **string**| The unique identifier for the member. Defined by MX. | |
| **reward_guid** | **string**| The unique identifier for the rewards. Defined by MX. | |

### Return type

[**\OpenAPI\Client\Model\RewardResponseBody**](../Model/RewardResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readStatementByMember()`

```php
readStatementByMember($member_guid, $statement_guid, $user_guid): \OpenAPI\Client\Model\StatementResponseBody
```

Read statement by member

Use this endpoint to read a JSON representation of the statement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$statement_guid = STA-737a344b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for a `statement`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readStatementByMember($member_guid, $statement_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readStatementByMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **statement_guid** | **string**| The unique id for a &#x60;statement&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\StatementResponseBody**](../Model/StatementResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readTag()`

```php
readTag($tag_guid, $user_guid): \OpenAPI\Client\Model\TagResponseBody
```

Read tag

Use this endpoint to read the attributes of a particular tag according to its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_guid = TAG-aef36e72-6294-4c38-844d-e573e80aed52; // string | The unique id for a `tag`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readTag($tag_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_guid** | **string**| The unique id for a &#x60;tag&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\TagResponseBody**](../Model/TagResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readTagging()`

```php
readTagging($tagging_guid, $user_guid): \OpenAPI\Client\Model\TaggingResponseBody
```

Read tagging

Use this endpoint to read the attributes of a `tagging` according to its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tagging_guid = TGN-007f5486-17e1-45fc-8b87-8f03984430fe; // string | The unique id for a `tagging`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readTagging($tagging_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readTagging: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tagging_guid** | **string**| The unique id for a &#x60;tagging&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\TaggingResponseBody**](../Model/TaggingResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readTaxDocument()`

```php
readTaxDocument($tax_document_guid, $member_guid, $user_guid): \OpenAPI\Client\Model\TaxDocumentResponseBody
```

Read a Tax Document

Use this endpoint to read the attributes of the specified tax document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_document_guid = TAX-987dfds1b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `tax_document`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readTaxDocument($tax_document_guid, $member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readTaxDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_document_guid** | **string**| The unique id for a &#x60;tax_document&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\TaxDocumentResponseBody**](../Model/TaxDocumentResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readTransaction()`

```php
readTransaction($transaction_guid, $user_guid): \OpenAPI\Client\Model\TransactionResponseBody
```

Read transaction

Requests to this endpoint will return the attributes of the specified `transaction`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_guid = TRN-810828b0-5210-4878-9bd3-f4ce514f90c4; // string | The unique id for a `transaction`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readTransaction($transaction_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_guid** | **string**| The unique id for a &#x60;transaction&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\TransactionResponseBody**](../Model/TransactionResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readTransactionRule()`

```php
readTransactionRule($transaction_rule_guid, $user_guid): \OpenAPI\Client\Model\TransactionRuleResponseBody
```

Read transaction rule

Use this endpoint to read the attributes of an existing transaction rule based on the rule’s unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_rule_guid = TXR-a080e0f9-a2d4-4d6f-9e03-672cc357a4d3; // string | The unique id for a `transaction_rule`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readTransactionRule($transaction_rule_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readTransactionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_rule_guid** | **string**| The unique id for a &#x60;transaction_rule&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\TransactionRuleResponseBody**](../Model/TransactionRuleResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readUser()`

```php
readUser($user_guid): \OpenAPI\Client\Model\UserResponseBody
```

Read user

Use this endpoint to read the attributes of a specific user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->readUser($user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->readUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\UserResponseBody**](../Model/UserResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestAuthorizationCode()`

```php
requestAuthorizationCode($authorization_code_request_body): \OpenAPI\Client\Model\AuthorizationCodeResponseBody
```

Request an authorization code.

Clients use this endpoint to request an authorization code according to the parameters specified in the scope. Clients then pass this code to processors. Processor access is scoped only to the GUIDs and features specified in this request. Before requesting an authorization code which includes a member in the scope, clients must have verified that member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization_code_request_body = new \OpenAPI\Client\Model\AuthorizationCodeRequestBody(); // \OpenAPI\Client\Model\AuthorizationCodeRequestBody | The scope for the authorization code.

try {
    $result = $apiInstance->requestAuthorizationCode($authorization_code_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->requestAuthorizationCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization_code_request_body** | [**\OpenAPI\Client\Model\AuthorizationCodeRequestBody**](../Model/AuthorizationCodeRequestBody.md)| The scope for the authorization code. | |

### Return type

[**\OpenAPI\Client\Model\AuthorizationCodeResponseBody**](../Model/AuthorizationCodeResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestConnectWidgetURL()`

```php
requestConnectWidgetURL($user_guid, $connect_widget_request_body): \OpenAPI\Client\Model\ConnectWidgetResponseBody
```

Request connect widget url

This endpoint will return a URL for an embeddable version of MX Connect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$connect_widget_request_body = new \OpenAPI\Client\Model\ConnectWidgetRequestBody(); // \OpenAPI\Client\Model\ConnectWidgetRequestBody | Optional config options for WebView (is_mobile_webview, current_institution_code, current_member_guid, update_credentials)

try {
    $result = $apiInstance->requestConnectWidgetURL($user_guid, $connect_widget_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->requestConnectWidgetURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **connect_widget_request_body** | [**\OpenAPI\Client\Model\ConnectWidgetRequestBody**](../Model/ConnectWidgetRequestBody.md)| Optional config options for WebView (is_mobile_webview, current_institution_code, current_member_guid, update_credentials) | |

### Return type

[**\OpenAPI\Client\Model\ConnectWidgetResponseBody**](../Model/ConnectWidgetResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestOAuthWindowURI()`

```php
requestOAuthWindowURI($member_guid, $user_guid, $client_redirect_url, $enable_app2app, $referral_source, $skip_aggregation, $ui_message_webview_url_scheme): \OpenAPI\Client\Model\OAuthWindowResponseBody
```

Request oauth window uri

This endpoint will generate an `oauth_window_uri` for the specified `member`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$client_redirect_url = https://mx.com; // string | A URL that MX will redirect to at the end of OAuth with additional query parameters. Only available with `referral_source=APP`.
$enable_app2app = false; // string | This indicates whether OAuth app2app behavior is enabled for institutions that support it. Defaults to `true`. This setting is not persistent.
$referral_source = APP; // string | Must be either `BROWSER` or `APP` depending on the implementation. Defaults to `BROWSER`.
$skip_aggregation = false; // bool | Setting this parameter to `true` will prevent the member from automatically aggregating after being redirected from the authorization page.
$ui_message_webview_url_scheme = mx; // string | A scheme for routing the user back to the application state they were previously in. Only available with `referral_source=APP`.

try {
    $result = $apiInstance->requestOAuthWindowURI($member_guid, $user_guid, $client_redirect_url, $enable_app2app, $referral_source, $skip_aggregation, $ui_message_webview_url_scheme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->requestOAuthWindowURI: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **client_redirect_url** | **string**| A URL that MX will redirect to at the end of OAuth with additional query parameters. Only available with &#x60;referral_source&#x3D;APP&#x60;. | [optional] |
| **enable_app2app** | **string**| This indicates whether OAuth app2app behavior is enabled for institutions that support it. Defaults to &#x60;true&#x60;. This setting is not persistent. | [optional] |
| **referral_source** | **string**| Must be either &#x60;BROWSER&#x60; or &#x60;APP&#x60; depending on the implementation. Defaults to &#x60;BROWSER&#x60;. | [optional] |
| **skip_aggregation** | **bool**| Setting this parameter to &#x60;true&#x60; will prevent the member from automatically aggregating after being redirected from the authorization page. | [optional] |
| **ui_message_webview_url_scheme** | **string**| A scheme for routing the user back to the application state they were previously in. Only available with &#x60;referral_source&#x3D;APP&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OAuthWindowResponseBody**](../Model/OAuthWindowResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestWidgetURL()`

```php
requestWidgetURL($user_guid, $widget_request_body, $accept_language): \OpenAPI\Client\Model\WidgetResponseBody
```

Request widget url

This endpoint allows partners to get a URL by passing the `widget_type` in the request body, as well as configuring it in several different ways. In the case of Connect, that means setting the `widget_type` to `connect_widget`. Partners may also pass an optional `Accept-Language` header as well as a number of configuration options. Note that this is a `POST` request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$widget_request_body = new \OpenAPI\Client\Model\WidgetRequestBody(); // \OpenAPI\Client\Model\WidgetRequestBody | The widget url configuration options.
$accept_language = en-US; // string | The desired language of the widget.

try {
    $result = $apiInstance->requestWidgetURL($user_guid, $widget_request_body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->requestWidgetURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **widget_request_body** | [**\OpenAPI\Client\Model\WidgetRequestBody**](../Model/WidgetRequestBody.md)| The widget url configuration options. | |
| **accept_language** | **string**| The desired language of the widget. | [optional] |

### Return type

[**\OpenAPI\Client\Model\WidgetResponseBody**](../Model/WidgetResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resumeAggregation()`

```php
resumeAggregation($member_guid, $user_guid, $member_resume_request_body): \OpenAPI\Client\Model\MemberResponseBody
```

Resume aggregation

This endpoint answers the challenges needed when a member has been challenged by multi-factor authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$member_resume_request_body = new \OpenAPI\Client\Model\MemberResumeRequestBody(); // \OpenAPI\Client\Model\MemberResumeRequestBody | Member object with MFA challenge answers

try {
    $result = $apiInstance->resumeAggregation($member_guid, $user_guid, $member_resume_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->resumeAggregation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **member_resume_request_body** | [**\OpenAPI\Client\Model\MemberResumeRequestBody**](../Model/MemberResumeRequestBody.md)| Member object with MFA challenge answers | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountByMember()`

```php
updateAccountByMember($account_guid, $member_guid, $user_guid, $account_update_request_body): \OpenAPI\Client\Model\AccountResponseBody
```

Update account by member

This endpoint allows you to update certain attributes of an `account` resource, including manual accounts. For manual accounts, you can update every field listed. For aggregated accounts, you can only update `is_business`, `is_hidden` and `metadata`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$account_update_request_body = new \OpenAPI\Client\Model\AccountUpdateRequestBody(); // \OpenAPI\Client\Model\AccountUpdateRequestBody

try {
    $result = $apiInstance->updateAccountByMember($account_guid, $member_guid, $user_guid, $account_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->updateAccountByMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **account_update_request_body** | [**\OpenAPI\Client\Model\AccountUpdateRequestBody**](../Model/AccountUpdateRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccountResponseBody**](../Model/AccountResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCategory()`

```php
updateCategory($category_guid, $user_guid, $category_update_request_body): \OpenAPI\Client\Model\CategoryResponseBody
```

Update category

Use this endpoint to update the attributes of a custom category according to its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_guid = CAT-7829f71c-2e8c-afa5-2f55-fa3634b89874; // string | The unique id for a `category`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$category_update_request_body = new \OpenAPI\Client\Model\CategoryUpdateRequestBody(); // \OpenAPI\Client\Model\CategoryUpdateRequestBody | Category object to be updated (While no single parameter is required, the `category` object cannot be empty)

try {
    $result = $apiInstance->updateCategory($category_guid, $user_guid, $category_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->updateCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_guid** | **string**| The unique id for a &#x60;category&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **category_update_request_body** | [**\OpenAPI\Client\Model\CategoryUpdateRequestBody**](../Model/CategoryUpdateRequestBody.md)| Category object to be updated (While no single parameter is required, the &#x60;category&#x60; object cannot be empty) | |

### Return type

[**\OpenAPI\Client\Model\CategoryResponseBody**](../Model/CategoryResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateManagedAccount()`

```php
updateManagedAccount($account_guid, $member_guid, $user_guid, $managed_account_update_request_body): \OpenAPI\Client\Model\AccountResponseBody
```

Update managed account

Use this endpoint to update the attributes of a partner-managed account according to its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$managed_account_update_request_body = new \OpenAPI\Client\Model\ManagedAccountUpdateRequestBody(); // \OpenAPI\Client\Model\ManagedAccountUpdateRequestBody | Managed account object to be updated (While no single parameter is required, the request body can't be empty)

try {
    $result = $apiInstance->updateManagedAccount($account_guid, $member_guid, $user_guid, $managed_account_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->updateManagedAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **managed_account_update_request_body** | [**\OpenAPI\Client\Model\ManagedAccountUpdateRequestBody**](../Model/ManagedAccountUpdateRequestBody.md)| Managed account object to be updated (While no single parameter is required, the request body can&#39;t be empty) | |

### Return type

[**\OpenAPI\Client\Model\AccountResponseBody**](../Model/AccountResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateManagedMember()`

```php
updateManagedMember($member_guid, $user_guid, $managed_member_update_request_body): \OpenAPI\Client\Model\MemberResponseBody
```

Update managed member

Use this endpoint to update the attributes of the specified partner_managed `member`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$managed_member_update_request_body = new \OpenAPI\Client\Model\ManagedMemberUpdateRequestBody(); // \OpenAPI\Client\Model\ManagedMemberUpdateRequestBody | Managed member object to be updated (While no single parameter is required, the request body can't be empty)

try {
    $result = $apiInstance->updateManagedMember($member_guid, $user_guid, $managed_member_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->updateManagedMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **managed_member_update_request_body** | [**\OpenAPI\Client\Model\ManagedMemberUpdateRequestBody**](../Model/ManagedMemberUpdateRequestBody.md)| Managed member object to be updated (While no single parameter is required, the request body can&#39;t be empty) | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateManagedTransaction()`

```php
updateManagedTransaction($account_guid, $member_guid, $transaction_guid, $user_guid, $managed_transaction_update_request_body): \OpenAPI\Client\Model\TransactionResponseBody
```

Update managed transaction

Use this endpoint to update the attributes of the specified partner_managed `transaction`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_guid = ACT-06d7f44b-caae-0f6e-1384-01f52e75dcb1; // string | The unique id for an `account`.
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$transaction_guid = TRN-810828b0-5210-4878-9bd3-f4ce514f90c4; // string | The unique id for a `transaction`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$managed_transaction_update_request_body = new \OpenAPI\Client\Model\ManagedTransactionUpdateRequestBody(); // \OpenAPI\Client\Model\ManagedTransactionUpdateRequestBody | Managed transaction object to be updated (While no single parameter is required, the request body can't be empty)

try {
    $result = $apiInstance->updateManagedTransaction($account_guid, $member_guid, $transaction_guid, $user_guid, $managed_transaction_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->updateManagedTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_guid** | **string**| The unique id for an &#x60;account&#x60;. | |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **transaction_guid** | **string**| The unique id for a &#x60;transaction&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **managed_transaction_update_request_body** | [**\OpenAPI\Client\Model\ManagedTransactionUpdateRequestBody**](../Model/ManagedTransactionUpdateRequestBody.md)| Managed transaction object to be updated (While no single parameter is required, the request body can&#39;t be empty) | |

### Return type

[**\OpenAPI\Client\Model\TransactionResponseBody**](../Model/TransactionResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMember()`

```php
updateMember($member_guid, $user_guid, $member_update_request_body): \OpenAPI\Client\Model\MemberResponseBody
```

Update member

Use this endpoint to update a members attributes. Only the credentials, id, and metadata parameters can be updated. To get a list of the required credentials for the member, use the list member credentials endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$member_update_request_body = new \OpenAPI\Client\Model\MemberUpdateRequestBody(); // \OpenAPI\Client\Model\MemberUpdateRequestBody | Member object to be updated (While no single parameter is required, the request body can't be empty)

try {
    $result = $apiInstance->updateMember($member_guid, $user_guid, $member_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->updateMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **member_update_request_body** | [**\OpenAPI\Client\Model\MemberUpdateRequestBody**](../Model/MemberUpdateRequestBody.md)| Member object to be updated (While no single parameter is required, the request body can&#39;t be empty) | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTag()`

```php
updateTag($tag_guid, $user_guid, $tag_update_request_body): \OpenAPI\Client\Model\TagResponseBody
```

Update tag

Use this endpoint to update the name of a specific tag according to its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_guid = TAG-aef36e72-6294-4c38-844d-e573e80aed52; // string | The unique id for a `tag`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$tag_update_request_body = new \OpenAPI\Client\Model\TagUpdateRequestBody(); // \OpenAPI\Client\Model\TagUpdateRequestBody | Tag object to be updated with required parameter (tag_guid)

try {
    $result = $apiInstance->updateTag($tag_guid, $user_guid, $tag_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->updateTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_guid** | **string**| The unique id for a &#x60;tag&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **tag_update_request_body** | [**\OpenAPI\Client\Model\TagUpdateRequestBody**](../Model/TagUpdateRequestBody.md)| Tag object to be updated with required parameter (tag_guid) | |

### Return type

[**\OpenAPI\Client\Model\TagResponseBody**](../Model/TagResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTagging()`

```php
updateTagging($tagging_guid, $user_guid, $tagging_update_request_body): \OpenAPI\Client\Model\TaggingResponseBody
```

Update tagging

Use this endpoint to update a tagging.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tagging_guid = TGN-007f5486-17e1-45fc-8b87-8f03984430fe; // string | The unique id for a `tagging`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$tagging_update_request_body = new \OpenAPI\Client\Model\TaggingUpdateRequestBody(); // \OpenAPI\Client\Model\TaggingUpdateRequestBody | Tagging object to be updated with required parameter (tag_guid)

try {
    $result = $apiInstance->updateTagging($tagging_guid, $user_guid, $tagging_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->updateTagging: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tagging_guid** | **string**| The unique id for a &#x60;tagging&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **tagging_update_request_body** | [**\OpenAPI\Client\Model\TaggingUpdateRequestBody**](../Model/TaggingUpdateRequestBody.md)| Tagging object to be updated with required parameter (tag_guid) | |

### Return type

[**\OpenAPI\Client\Model\TaggingResponseBody**](../Model/TaggingResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransaction()`

```php
updateTransaction($transaction_guid, $user_guid, $transaction_update_request_body): \OpenAPI\Client\Model\TransactionResponseBody
```

Update transaction

Use this endpoint to update the `description` of a specific transaction according to its unique GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_guid = TRN-810828b0-5210-4878-9bd3-f4ce514f90c4; // string | The unique id for a `transaction`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$transaction_update_request_body = new \OpenAPI\Client\Model\TransactionUpdateRequestBody(); // \OpenAPI\Client\Model\TransactionUpdateRequestBody | Transaction object to be updated with a new description

try {
    $result = $apiInstance->updateTransaction($transaction_guid, $user_guid, $transaction_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_guid** | **string**| The unique id for a &#x60;transaction&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **transaction_update_request_body** | [**\OpenAPI\Client\Model\TransactionUpdateRequestBody**](../Model/TransactionUpdateRequestBody.md)| Transaction object to be updated with a new description | |

### Return type

[**\OpenAPI\Client\Model\TransactionResponseBody**](../Model/TransactionResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransactionRule()`

```php
updateTransactionRule($transaction_rule_guid, $user_guid, $transaction_rule_update_request_body): \OpenAPI\Client\Model\TransactionRuleResponseBody
```

Update transaction_rule

Use this endpoint to update the attributes of a specific transaction rule based on its unique GUID. The API will respond with the updated transaction_rule object. Any attributes not provided will be left unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_rule_guid = TXR-a080e0f9-a2d4-4d6f-9e03-672cc357a4d3; // string | The unique id for a `transaction_rule`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$transaction_rule_update_request_body = new \OpenAPI\Client\Model\TransactionRuleUpdateRequestBody(); // \OpenAPI\Client\Model\TransactionRuleUpdateRequestBody | TransactionRule object to be updated

try {
    $result = $apiInstance->updateTransactionRule($transaction_rule_guid, $user_guid, $transaction_rule_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->updateTransactionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_rule_guid** | **string**| The unique id for a &#x60;transaction_rule&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **transaction_rule_update_request_body** | [**\OpenAPI\Client\Model\TransactionRuleUpdateRequestBody**](../Model/TransactionRuleUpdateRequestBody.md)| TransactionRule object to be updated | |

### Return type

[**\OpenAPI\Client\Model\TransactionRuleResponseBody**](../Model/TransactionRuleResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($user_guid, $user_update_request_body): \OpenAPI\Client\Model\UserResponseBody
```

Update user

Use this endpoint to update the attributes of the specified user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.
$user_update_request_body = new \OpenAPI\Client\Model\UserUpdateRequestBody(); // \OpenAPI\Client\Model\UserUpdateRequestBody | User object to be updated (None of these parameters are required, but the user object cannot be empty.)

try {
    $result = $apiInstance->updateUser($user_guid, $user_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |
| **user_update_request_body** | [**\OpenAPI\Client\Model\UserUpdateRequestBody**](../Model/UserUpdateRequestBody.md)| User object to be updated (None of these parameters are required, but the user object cannot be empty.) | |

### Return type

[**\OpenAPI\Client\Model\UserResponseBody**](../Model/UserResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidMonthlyCashFlowProfileGet()`

```php
usersUserGuidMonthlyCashFlowProfileGet($user_guid): \OpenAPI\Client\Model\MonthlyCashFlowResponseBody
```

Read monthly cash flow profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user.

try {
    $result = $apiInstance->usersUserGuidMonthlyCashFlowProfileGet($user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->usersUserGuidMonthlyCashFlowProfileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. | |

### Return type

[**\OpenAPI\Client\Model\MonthlyCashFlowResponseBody**](../Model/MonthlyCashFlowResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidMonthlyCashFlowProfilePut()`

```php
usersUserGuidMonthlyCashFlowProfilePut($user_guid, $monthly_cash_flow_profile_request_body): \OpenAPI\Client\Model\MonthlyCashFlowResponseBody
```

Update monthly cash flow profile

Use this endpoint to update the attributes of a `monthly_cash_flow_profile`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user.
$monthly_cash_flow_profile_request_body = new \OpenAPI\Client\Model\MonthlyCashFlowProfileRequestBody(); // \OpenAPI\Client\Model\MonthlyCashFlowProfileRequestBody

try {
    $result = $apiInstance->usersUserGuidMonthlyCashFlowProfilePut($user_guid, $monthly_cash_flow_profile_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->usersUserGuidMonthlyCashFlowProfilePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. | |
| **monthly_cash_flow_profile_request_body** | [**\OpenAPI\Client\Model\MonthlyCashFlowProfileRequestBody**](../Model/MonthlyCashFlowProfileRequestBody.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MonthlyCashFlowResponseBody**](../Model/MonthlyCashFlowResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserGuidTransactionsTransactionGuidSplitDelete()`

```php
usersUserGuidTransactionsTransactionGuidSplitDelete($transaction_guid, $user_guid)
```

Delete split transactions

This endpoint deletes all split transactions linked to a parent transaction, but it leaves the parent transaction active. This request will also update the parent transaction's has_been_split field to false. This endpoint accepts the optional MX-Skip-Webhook header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_guid = TRN-810828b0-5210-4878-9bd3-f4ce514f90c4; // string | The unique id for a `transaction`.
$user_guid = USR-85628b0-5210-4878-9bd3-f4ce154f90c4; // string | The unique id for a `user`.

try {
    $apiInstance->usersUserGuidTransactionsTransactionGuidSplitDelete($transaction_guid, $user_guid);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->usersUserGuidTransactionsTransactionGuidSplitDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_guid** | **string**| The unique id for a &#x60;transaction&#x60;. | |
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

## `usersUserGuidTransactionsTransactionGuidSplitPost()`

```php
usersUserGuidTransactionsTransactionGuidSplitPost($user_guid, $transaction_guid, $split_transaction_request_body): \OpenAPI\Client\Model\SplitTransactionsResponseBody
```

Create split transactions

This endpoint creates two or more child transactions that are branched from a previous transaction. This endpoint allows you to link multiple categories, descriptions, and amounts to a parent transaction.  When a split transaction is created, the parent transaction's `has_been_split` field will automatically be updated to true and the child transactions' `parent_guid` will have the transaction guid of the parent. The total amount of the child transactions must equal the amount of the parent transaction. Once a transaction has been split it can't be split again.    In order to re-split a transaction, it must first be un-split. This can be done by calling the Delete Split Transactions endpoint. Calling this endpoint will delete the existing child transactions and update the parent transaction's `has_been_split` field to false. You can then re-split the parent transaction by calling Create Split Transaction again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_guid = 'user_guid_example'; // string | The unique identifier for the user. Defined by MX.
$transaction_guid = 'transaction_guid_example'; // string | The unique identifier for the transaction. Defined by MX.
$split_transaction_request_body = new \OpenAPI\Client\Model\SplitTransactionRequestBody(); // \OpenAPI\Client\Model\SplitTransactionRequestBody

try {
    $result = $apiInstance->usersUserGuidTransactionsTransactionGuidSplitPost($user_guid, $transaction_guid, $split_transaction_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->usersUserGuidTransactionsTransactionGuidSplitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_guid** | **string**| The unique identifier for the user. Defined by MX. | |
| **transaction_guid** | **string**| The unique identifier for the transaction. Defined by MX. | |
| **split_transaction_request_body** | [**\OpenAPI\Client\Model\SplitTransactionRequestBody**](../Model/SplitTransactionRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SplitTransactionsResponseBody**](../Model/SplitTransactionsResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyMember()`

```php
verifyMember($member_guid, $user_guid): \OpenAPI\Client\Model\MemberResponseBody
```

Verify member

The verify endpoint begins a verification process for a member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MxPlatformApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_guid = MBR-7c6f361b-e582-15b6-60c0-358f12466b4b; // string | The unique id for a `member`.
$user_guid = USR-fa7537f3-48aa-a683-a02a-b18940482f54; // string | The unique id for a `user`.

try {
    $result = $apiInstance->verifyMember($member_guid, $user_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxPlatformApi->verifyMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_guid** | **string**| The unique id for a &#x60;member&#x60;. | |
| **user_guid** | **string**| The unique id for a &#x60;user&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\MemberResponseBody**](../Model/MemberResponseBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.mx.api.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
