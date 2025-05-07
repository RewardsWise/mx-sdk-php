# OpenAPIClient-php

The MX Platform API is a powerful, fully-featured API designed to make aggregating and enhancing financial data easy and reliable. It can seamlessly connect your app or website to tens of thousands of financial institutions.

For more information, please visit [https://www.mx.com/products/platform-api](https://www.mx.com/products/platform-api).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.mx.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BudgetsApi* | [**usersUserGuidBudgetsBudgetGuidDelete**](docs/Api/BudgetsApi.md#usersuserguidbudgetsbudgetguiddelete) | **DELETE** /users/{user_guid}/budgets/{budget_guid} | Delete a budget
*BudgetsApi* | [**usersUserGuidBudgetsBudgetGuidGet**](docs/Api/BudgetsApi.md#usersuserguidbudgetsbudgetguidget) | **GET** /users/{user_guid}/budgets/{budget_guid} | Read a specific budget
*BudgetsApi* | [**usersUserGuidBudgetsBudgetGuidPut**](docs/Api/BudgetsApi.md#usersuserguidbudgetsbudgetguidput) | **PUT** /users/{user_guid}/budgets/{budget_guid} | Update a specific budget
*BudgetsApi* | [**usersUserGuidBudgetsGeneratePost**](docs/Api/BudgetsApi.md#usersuserguidbudgetsgeneratepost) | **POST** /users/{user_guid}/budgets/generate | Auto-generate budgets
*BudgetsApi* | [**usersUserGuidBudgetsGet**](docs/Api/BudgetsApi.md#usersuserguidbudgetsget) | **GET** /users/{user_guid}/budgets | List all budgets
*BudgetsApi* | [**usersUserGuidBudgetsPost**](docs/Api/BudgetsApi.md#usersuserguidbudgetspost) | **POST** /users/{user_guid}/budgets | Create a budget
*GoalsApi* | [**usersUserGuidGoalsGet**](docs/Api/GoalsApi.md#usersuserguidgoalsget) | **GET** /users/{user_guid}/goals | List goals
*GoalsApi* | [**usersUserGuidGoalsGoalGuidDelete**](docs/Api/GoalsApi.md#usersuserguidgoalsgoalguiddelete) | **DELETE** /users/{user_guid}/goals/{goal_guid} | Delete a goal
*GoalsApi* | [**usersUserGuidGoalsGoalGuidGet**](docs/Api/GoalsApi.md#usersuserguidgoalsgoalguidget) | **GET** /users/{user_guid}/goals/{goal_guid} | Read a goal
*GoalsApi* | [**usersUserGuidGoalsGoalGuidPut**](docs/Api/GoalsApi.md#usersuserguidgoalsgoalguidput) | **PUT** /users/{user_guid}/goals/{goal_guid} | Update a goal
*GoalsApi* | [**usersUserGuidGoalsPost**](docs/Api/GoalsApi.md#usersuserguidgoalspost) | **POST** /users/{user_guid}/goals | Create a goal
*GoalsApi* | [**usersUserGuidGoalsRepositionPut**](docs/Api/GoalsApi.md#usersuserguidgoalsrepositionput) | **PUT** /users/{user_guid}/goals/reposition | Reposition goals
*InsightsApi* | [**listAccountsInsight**](docs/Api/InsightsApi.md#listaccountsinsight) | **GET** /users/{user_guid}/insights/{insight_guid}/accounts | List all accounts associated with an insight.
*InsightsApi* | [**listCategoriesInsight**](docs/Api/InsightsApi.md#listcategoriesinsight) | **GET** /users/{user_guid}/insights/{insight_guid}/categories | List all categories associated with an insight.
*InsightsApi* | [**listInsightsByAccount**](docs/Api/InsightsApi.md#listinsightsbyaccount) | **GET** /users/{user_guid}/accounts/{account_guid}/insights | List insights by account
*InsightsApi* | [**listInsightsUser**](docs/Api/InsightsApi.md#listinsightsuser) | **GET** /users/{user_guid}/insights | List all insights for a user.
*InsightsApi* | [**listMerchantsInsight**](docs/Api/InsightsApi.md#listmerchantsinsight) | **GET** /users/{user_guid}/insights/{insight_guid}/merchants | List all merchants associated with an insight.
*InsightsApi* | [**listScheduledPaymentsInsight**](docs/Api/InsightsApi.md#listscheduledpaymentsinsight) | **GET** /users/{user_guid}/insights/{insight_guid}/scheduled_payments | List all scheduled payments associated with an insight
*InsightsApi* | [**listTransactionsInsight**](docs/Api/InsightsApi.md#listtransactionsinsight) | **GET** /users/{user_guid}/insights/{insight_guid}/transactions | List all transactions associated with an insight.
*InsightsApi* | [**readInsightsUser**](docs/Api/InsightsApi.md#readinsightsuser) | **GET** /users/{user_guid}/insights{insight_guid} | Read a specific insight.
*InsightsApi* | [**updateInsight**](docs/Api/InsightsApi.md#updateinsight) | **PUT** /users/{user_guid}/insights{insight_guid} | Update insight
*MicrodepositsApi* | [**microDepositsMicrodepositGuidVerifyPut**](docs/Api/MicrodepositsApi.md#microdepositsmicrodepositguidverifyput) | **PUT** /micro_deposits/{microdeposit_guid}/verify | Verify a Microdeposit
*MicrodepositsApi* | [**usersUserGuidMicroDepositsGet**](docs/Api/MicrodepositsApi.md#usersuserguidmicrodepositsget) | **GET** /users/{user_guid}/micro_deposits | List all microdeposits for a user
*MicrodepositsApi* | [**usersUserGuidMicroDepositsMicroDepositGuidDelete**](docs/Api/MicrodepositsApi.md#usersuserguidmicrodepositsmicrodepositguiddelete) | **DELETE** /users/{user_guid}/micro_deposits/{micro_deposit_guid} | Delete a microdeposit
*MicrodepositsApi* | [**usersUserGuidMicroDepositsMicroDepositGuidGet**](docs/Api/MicrodepositsApi.md#usersuserguidmicrodepositsmicrodepositguidget) | **GET** /users/{user_guid}/micro_deposits/{micro_deposit_guid} | Read a microdeposit for a user
*MicrodepositsApi* | [**usersUserGuidMicroDepositsPost**](docs/Api/MicrodepositsApi.md#usersuserguidmicrodepositspost) | **POST** /users/{user_guid}/micro_deposits | Create a microdeposit
*MxPlatformApi* | [**aggregateMember**](docs/Api/MxPlatformApi.md#aggregatemember) | **POST** /users/{user_guid}/members/{member_guid}/aggregate | Aggregate member
*MxPlatformApi* | [**checkBalances**](docs/Api/MxPlatformApi.md#checkbalances) | **POST** /users/{user_guid}/members/{member_guid}/check_balance | Check balances
*MxPlatformApi* | [**createCategory**](docs/Api/MxPlatformApi.md#createcategory) | **POST** /users/{user_guid}/categories | Create category
*MxPlatformApi* | [**createManagedAccount**](docs/Api/MxPlatformApi.md#createmanagedaccount) | **POST** /users/{user_guid}/managed_members/{member_guid}/accounts | Create managed account
*MxPlatformApi* | [**createManagedMember**](docs/Api/MxPlatformApi.md#createmanagedmember) | **POST** /users/{user_guid}/managed_members | Create managed member
*MxPlatformApi* | [**createManagedTransaction**](docs/Api/MxPlatformApi.md#createmanagedtransaction) | **POST** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid}/transactions | Create managed transaction
*MxPlatformApi* | [**createManualAccount**](docs/Api/MxPlatformApi.md#createmanualaccount) | **POST** /users/{user_guid}/accounts | Create manual account
*MxPlatformApi* | [**createMember**](docs/Api/MxPlatformApi.md#createmember) | **POST** /users/{user_guid}/members | Create member
*MxPlatformApi* | [**createTag**](docs/Api/MxPlatformApi.md#createtag) | **POST** /users/{user_guid}/tags | Create tag
*MxPlatformApi* | [**createTagging**](docs/Api/MxPlatformApi.md#createtagging) | **POST** /users/{user_guid}/taggings | Create tagging
*MxPlatformApi* | [**createTransactionRule**](docs/Api/MxPlatformApi.md#createtransactionrule) | **POST** /users/{user_guid}/transaction_rules | Create transaction rule
*MxPlatformApi* | [**createUser**](docs/Api/MxPlatformApi.md#createuser) | **POST** /users | Create user
*MxPlatformApi* | [**creditCard**](docs/Api/MxPlatformApi.md#creditcard) | **GET** /credit_card_products/{credit_card_product_guid} | Read a Credit Card Product
*MxPlatformApi* | [**deleteCategory**](docs/Api/MxPlatformApi.md#deletecategory) | **DELETE** /users/{user_guid}/categories/{category_guid} | Delete category
*MxPlatformApi* | [**deleteManagedAccount**](docs/Api/MxPlatformApi.md#deletemanagedaccount) | **DELETE** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid} | Delete managed account
*MxPlatformApi* | [**deleteManagedMember**](docs/Api/MxPlatformApi.md#deletemanagedmember) | **DELETE** /users/{user_guid}/managed_members/{member_guid} | Delete managed member
*MxPlatformApi* | [**deleteManagedTransaction**](docs/Api/MxPlatformApi.md#deletemanagedtransaction) | **DELETE** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid}/transactions/{transaction_guid} | Delete managed transaction
*MxPlatformApi* | [**deleteManualAccount**](docs/Api/MxPlatformApi.md#deletemanualaccount) | **DELETE** /users/{user_guid}/accounts/{account_guid} | Delete manual account
*MxPlatformApi* | [**deleteMember**](docs/Api/MxPlatformApi.md#deletemember) | **DELETE** /users/{user_guid}/members/{member_guid} | Delete member
*MxPlatformApi* | [**deleteTag**](docs/Api/MxPlatformApi.md#deletetag) | **DELETE** /users/{user_guid}/tags/{tag_guid} | Delete tag
*MxPlatformApi* | [**deleteTagging**](docs/Api/MxPlatformApi.md#deletetagging) | **DELETE** /users/{user_guid}/taggings/{tagging_guid} | Delete tagging
*MxPlatformApi* | [**deleteTransactionRule**](docs/Api/MxPlatformApi.md#deletetransactionrule) | **DELETE** /users/{user_guid}/transaction_rules/{transaction_rule_guid} | Delete transaction rule
*MxPlatformApi* | [**deleteUser**](docs/Api/MxPlatformApi.md#deleteuser) | **DELETE** /users/{user_guid} | Delete user
*MxPlatformApi* | [**deprecatedRequestPaymentProcessorAuthorizationCode**](docs/Api/MxPlatformApi.md#deprecatedrequestpaymentprocessorauthorizationcode) | **POST** /payment_processor_authorization_code | (Deprecated) Request an authorization code.
*MxPlatformApi* | [**downloadStatementPDF**](docs/Api/MxPlatformApi.md#downloadstatementpdf) | **GET** /users/{user_guid}/members/{member_guid}/statements/{statement_guid}.pdf | Download statement pdf
*MxPlatformApi* | [**downloadTaxDocument**](docs/Api/MxPlatformApi.md#downloadtaxdocument) | **GET** /users/{user_guid}/members/{member_guid}/tax_documents/{tax_document_guid}.pdf | Download a Tax Document PDF
*MxPlatformApi* | [**enhanceTransactions**](docs/Api/MxPlatformApi.md#enhancetransactions) | **POST** /transactions/enhance | Enhance transactions
*MxPlatformApi* | [**extendHistory**](docs/Api/MxPlatformApi.md#extendhistory) | **POST** /users/{user_guid}/members/{member_guid}/extend_history | Extend history
*MxPlatformApi* | [**fetchRewards**](docs/Api/MxPlatformApi.md#fetchrewards) | **POST** /users/{user_guid}/members/{member_guid}/fetch_rewards | Fetch Rewards
*MxPlatformApi* | [**fetchStatements**](docs/Api/MxPlatformApi.md#fetchstatements) | **POST** /users/{user_guid}/members/{member_guid}/fetch_statements | Fetch statements
*MxPlatformApi* | [**fetchTaxDocuments**](docs/Api/MxPlatformApi.md#fetchtaxdocuments) | **POST** /users/{user_guid}/members/{member_guid}/fetch_tax_documents | Fetch Tax Documents
*MxPlatformApi* | [**identifyMember**](docs/Api/MxPlatformApi.md#identifymember) | **POST** /users/{user_guid}/members/{member_guid}/identify | Identify member
*MxPlatformApi* | [**listAccountNumbersByAccount**](docs/Api/MxPlatformApi.md#listaccountnumbersbyaccount) | **GET** /users/{user_guid}/accounts/{account_guid}/account_numbers | List account numbers by account
*MxPlatformApi* | [**listAccountNumbersByMember**](docs/Api/MxPlatformApi.md#listaccountnumbersbymember) | **GET** /users/{user_guid}/members/{member_guid}/account_numbers | List account numbers by member
*MxPlatformApi* | [**listAccountOwnersByMember**](docs/Api/MxPlatformApi.md#listaccountownersbymember) | **GET** /users/{user_guid}/members/{member_guid}/account_owners | List account owners by member
*MxPlatformApi* | [**listCategories**](docs/Api/MxPlatformApi.md#listcategories) | **GET** /users/{user_guid}/categories | List categories
*MxPlatformApi* | [**listDefaultCategories**](docs/Api/MxPlatformApi.md#listdefaultcategories) | **GET** /categories/default | List default categories
*MxPlatformApi* | [**listDefaultCategoriesByUser**](docs/Api/MxPlatformApi.md#listdefaultcategoriesbyuser) | **GET** /users/{user_guid}/categories/default | List default categories by user
*MxPlatformApi* | [**listFavoriteInstitutions**](docs/Api/MxPlatformApi.md#listfavoriteinstitutions) | **GET** /institutions/favorites | List favorite institutions
*MxPlatformApi* | [**listHoldings**](docs/Api/MxPlatformApi.md#listholdings) | **GET** /users/{user_guid}/holdings | List holdings
*MxPlatformApi* | [**listHoldingsByAccount**](docs/Api/MxPlatformApi.md#listholdingsbyaccount) | **GET** /users/{user_guid}/accounts/{account_guid}/holdings | List holdings by account
*MxPlatformApi* | [**listHoldingsByMember**](docs/Api/MxPlatformApi.md#listholdingsbymember) | **GET** /users/{user_guid}/members/{member_guid}/holdings | List holdings by member
*MxPlatformApi* | [**listInstitutionCredentials**](docs/Api/MxPlatformApi.md#listinstitutioncredentials) | **GET** /institutions/{institution_code}/credentials | List institution credentials
*MxPlatformApi* | [**listInstitutions**](docs/Api/MxPlatformApi.md#listinstitutions) | **GET** /institutions | List institutions
*MxPlatformApi* | [**listManagedAccounts**](docs/Api/MxPlatformApi.md#listmanagedaccounts) | **GET** /users/{user_guid}/managed_members/{member_guid}/accounts | List managed accounts
*MxPlatformApi* | [**listManagedInstitutions**](docs/Api/MxPlatformApi.md#listmanagedinstitutions) | **GET** /managed_institutions | List managed institutions
*MxPlatformApi* | [**listManagedMembers**](docs/Api/MxPlatformApi.md#listmanagedmembers) | **GET** /users/{user_guid}/managed_members | List managed members
*MxPlatformApi* | [**listManagedTransactions**](docs/Api/MxPlatformApi.md#listmanagedtransactions) | **GET** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid}/transactions | List managed transactions
*MxPlatformApi* | [**listMemberAccounts**](docs/Api/MxPlatformApi.md#listmemberaccounts) | **GET** /users/{user_guid}/members/{member_guid}/accounts | List accounts by member
*MxPlatformApi* | [**listMemberChallenges**](docs/Api/MxPlatformApi.md#listmemberchallenges) | **GET** /users/{user_guid}/members/{member_guid}/challenges | List member challenges
*MxPlatformApi* | [**listMemberCredentials**](docs/Api/MxPlatformApi.md#listmembercredentials) | **GET** /users/{user_guid}/members/{member_guid}/credentials | List member credentials
*MxPlatformApi* | [**listMembers**](docs/Api/MxPlatformApi.md#listmembers) | **GET** /users/{user_guid}/members | List members
*MxPlatformApi* | [**listMerchants**](docs/Api/MxPlatformApi.md#listmerchants) | **GET** /merchants | List merchants
*MxPlatformApi* | [**listRewards**](docs/Api/MxPlatformApi.md#listrewards) | **GET** /users/{user_guid}/members/{member_guid}/rewards | List Rewards
*MxPlatformApi* | [**listStatementsByMember**](docs/Api/MxPlatformApi.md#liststatementsbymember) | **GET** /users/{user_guid}/members/{member_guid}/statements | List statements by member
*MxPlatformApi* | [**listTaggings**](docs/Api/MxPlatformApi.md#listtaggings) | **GET** /users/{user_guid}/taggings | List taggings
*MxPlatformApi* | [**listTags**](docs/Api/MxPlatformApi.md#listtags) | **GET** /users/{user_guid}/tags | List tags
*MxPlatformApi* | [**listTaxDocuments**](docs/Api/MxPlatformApi.md#listtaxdocuments) | **GET** /users/{user_guid}/members/{member_guid}/tax_documents | List Tax Documents
*MxPlatformApi* | [**listTransactionRules**](docs/Api/MxPlatformApi.md#listtransactionrules) | **GET** /users/{user_guid}/transaction_rules | List transaction rules
*MxPlatformApi* | [**listTransactions**](docs/Api/MxPlatformApi.md#listtransactions) | **GET** /users/{user_guid}/transactions | List transactions
*MxPlatformApi* | [**listTransactionsByAccount**](docs/Api/MxPlatformApi.md#listtransactionsbyaccount) | **GET** /users/{user_guid}/accounts/{account_guid}/transactions | List transactions by account
*MxPlatformApi* | [**listTransactionsByMember**](docs/Api/MxPlatformApi.md#listtransactionsbymember) | **GET** /users/{user_guid}/members/{member_guid}/transactions | List transactions by member
*MxPlatformApi* | [**listTransactionsByTag**](docs/Api/MxPlatformApi.md#listtransactionsbytag) | **GET** /users/{user_guid}/tags/{tag_guid}/transactions | List transactions by tag
*MxPlatformApi* | [**listUserAccounts**](docs/Api/MxPlatformApi.md#listuseraccounts) | **GET** /users/{user_guid}/accounts | List accounts
*MxPlatformApi* | [**listUsers**](docs/Api/MxPlatformApi.md#listusers) | **GET** /users | List users
*MxPlatformApi* | [**readAccount**](docs/Api/MxPlatformApi.md#readaccount) | **GET** /users/{user_guid}/accounts/{account_guid} | Read account
*MxPlatformApi* | [**readAccountByMember**](docs/Api/MxPlatformApi.md#readaccountbymember) | **GET** /users/{user_guid}/members/{member_guid}/accounts/{account_guid} | Read account by member
*MxPlatformApi* | [**readCategory**](docs/Api/MxPlatformApi.md#readcategory) | **GET** /users/{user_guid}/categories/{category_guid} | Read a custom category
*MxPlatformApi* | [**readDefaultCategory**](docs/Api/MxPlatformApi.md#readdefaultcategory) | **GET** /categories/{category_guid} | Read a default category
*MxPlatformApi* | [**readHolding**](docs/Api/MxPlatformApi.md#readholding) | **GET** /users/{user_guid}/holdings/{holding_guid} | Read holding
*MxPlatformApi* | [**readInstitution**](docs/Api/MxPlatformApi.md#readinstitution) | **GET** /institutions/{institution_code} | Read institution
*MxPlatformApi* | [**readManagedAccount**](docs/Api/MxPlatformApi.md#readmanagedaccount) | **GET** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid} | Read managed account
*MxPlatformApi* | [**readManagedMember**](docs/Api/MxPlatformApi.md#readmanagedmember) | **GET** /users/{user_guid}/managed_members/{member_guid} | Read managed member
*MxPlatformApi* | [**readManagedTransaction**](docs/Api/MxPlatformApi.md#readmanagedtransaction) | **GET** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid}/transactions/{transaction_guid} | Read managed transaction
*MxPlatformApi* | [**readMember**](docs/Api/MxPlatformApi.md#readmember) | **GET** /users/{user_guid}/members/{member_guid} | Read member
*MxPlatformApi* | [**readMemberStatus**](docs/Api/MxPlatformApi.md#readmemberstatus) | **GET** /users/{user_guid}/members/{member_guid}/status | Read member status
*MxPlatformApi* | [**readMerchant**](docs/Api/MxPlatformApi.md#readmerchant) | **GET** /merchants/{merchant_guid} | Read merchant
*MxPlatformApi* | [**readMerchantLocation**](docs/Api/MxPlatformApi.md#readmerchantlocation) | **GET** /merchant_locations/{merchant_location_guid} | Read merchant location
*MxPlatformApi* | [**readRewards**](docs/Api/MxPlatformApi.md#readrewards) | **GET** /users/{user_guid}/members/{member_guid}/rewards/{reward_guid} | Read Reward
*MxPlatformApi* | [**readStatementByMember**](docs/Api/MxPlatformApi.md#readstatementbymember) | **GET** /users/{user_guid}/members/{member_guid}/statements/{statement_guid} | Read statement by member
*MxPlatformApi* | [**readTag**](docs/Api/MxPlatformApi.md#readtag) | **GET** /users/{user_guid}/tags/{tag_guid} | Read tag
*MxPlatformApi* | [**readTagging**](docs/Api/MxPlatformApi.md#readtagging) | **GET** /users/{user_guid}/taggings/{tagging_guid} | Read tagging
*MxPlatformApi* | [**readTaxDocument**](docs/Api/MxPlatformApi.md#readtaxdocument) | **GET** /users/{user_guid}/members/{member_guid}/tax_documents/{tax_document_guid} | Read a Tax Document
*MxPlatformApi* | [**readTransaction**](docs/Api/MxPlatformApi.md#readtransaction) | **GET** /users/{user_guid}/transactions/{transaction_guid} | Read transaction
*MxPlatformApi* | [**readTransactionRule**](docs/Api/MxPlatformApi.md#readtransactionrule) | **GET** /users/{user_guid}/transaction_rules/{transaction_rule_guid} | Read transaction rule
*MxPlatformApi* | [**readUser**](docs/Api/MxPlatformApi.md#readuser) | **GET** /users/{user_guid} | Read user
*MxPlatformApi* | [**requestAuthorizationCode**](docs/Api/MxPlatformApi.md#requestauthorizationcode) | **POST** /authorization_code | Request an authorization code.
*MxPlatformApi* | [**requestConnectWidgetURL**](docs/Api/MxPlatformApi.md#requestconnectwidgeturl) | **POST** /users/{user_guid}/connect_widget_url | Request connect widget url
*MxPlatformApi* | [**requestOAuthWindowURI**](docs/Api/MxPlatformApi.md#requestoauthwindowuri) | **GET** /users/{user_guid}/members/{member_guid}/oauth_window_uri | Request oauth window uri
*MxPlatformApi* | [**requestWidgetURL**](docs/Api/MxPlatformApi.md#requestwidgeturl) | **POST** /users/{user_guid}/widget_urls | Request widget url
*MxPlatformApi* | [**resumeAggregation**](docs/Api/MxPlatformApi.md#resumeaggregation) | **PUT** /users/{user_guid}/members/{member_guid}/resume | Resume aggregation
*MxPlatformApi* | [**updateAccountByMember**](docs/Api/MxPlatformApi.md#updateaccountbymember) | **PUT** /users/{user_guid}/members/{member_guid}/accounts/{account_guid} | Update account by member
*MxPlatformApi* | [**updateCategory**](docs/Api/MxPlatformApi.md#updatecategory) | **PUT** /users/{user_guid}/categories/{category_guid} | Update category
*MxPlatformApi* | [**updateManagedAccount**](docs/Api/MxPlatformApi.md#updatemanagedaccount) | **PUT** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid} | Update managed account
*MxPlatformApi* | [**updateManagedMember**](docs/Api/MxPlatformApi.md#updatemanagedmember) | **PUT** /users/{user_guid}/managed_members/{member_guid} | Update managed member
*MxPlatformApi* | [**updateManagedTransaction**](docs/Api/MxPlatformApi.md#updatemanagedtransaction) | **PUT** /users/{user_guid}/managed_members/{member_guid}/accounts/{account_guid}/transactions/{transaction_guid} | Update managed transaction
*MxPlatformApi* | [**updateMember**](docs/Api/MxPlatformApi.md#updatemember) | **PUT** /users/{user_guid}/members/{member_guid} | Update member
*MxPlatformApi* | [**updateTag**](docs/Api/MxPlatformApi.md#updatetag) | **PUT** /users/{user_guid}/tags/{tag_guid} | Update tag
*MxPlatformApi* | [**updateTagging**](docs/Api/MxPlatformApi.md#updatetagging) | **PUT** /users/{user_guid}/taggings/{tagging_guid} | Update tagging
*MxPlatformApi* | [**updateTransaction**](docs/Api/MxPlatformApi.md#updatetransaction) | **PUT** /users/{user_guid}/transactions/{transaction_guid} | Update transaction
*MxPlatformApi* | [**updateTransactionRule**](docs/Api/MxPlatformApi.md#updatetransactionrule) | **PUT** /users/{user_guid}/transaction_rules/{transaction_rule_guid} | Update transaction_rule
*MxPlatformApi* | [**updateUser**](docs/Api/MxPlatformApi.md#updateuser) | **PUT** /users/{user_guid} | Update user
*MxPlatformApi* | [**usersUserGuidMonthlyCashFlowProfileGet**](docs/Api/MxPlatformApi.md#usersuserguidmonthlycashflowprofileget) | **GET** /users/{user_guid}/monthly_cash_flow_profile | Read monthly cash flow profile
*MxPlatformApi* | [**usersUserGuidMonthlyCashFlowProfilePut**](docs/Api/MxPlatformApi.md#usersuserguidmonthlycashflowprofileput) | **PUT** /users/{user_guid}/monthly_cash_flow_profile | Update monthly cash flow profile
*MxPlatformApi* | [**usersUserGuidTransactionsTransactionGuidSplitDelete**](docs/Api/MxPlatformApi.md#usersuserguidtransactionstransactionguidsplitdelete) | **DELETE** /users/{user_guid}/transactions/{transaction_guid}/split | Delete split transactions
*MxPlatformApi* | [**usersUserGuidTransactionsTransactionGuidSplitPost**](docs/Api/MxPlatformApi.md#usersuserguidtransactionstransactionguidsplitpost) | **POST** /users/{user_guid}/transactions/{transaction_guid}/split | Create split transactions
*MxPlatformApi* | [**verifyMember**](docs/Api/MxPlatformApi.md#verifymember) | **POST** /users/{user_guid}/members/{member_guid}/verify | Verify member
*SpendingPlanApi* | [**createSpendingPlan**](docs/Api/SpendingPlanApi.md#createspendingplan) | **POST** /users/{user_guid}/spending_plans | Create spending plan
*SpendingPlanApi* | [**createSpendingPlanIterationItem**](docs/Api/SpendingPlanApi.md#createspendingplaniterationitem) | **POST** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations/current/iteration_items | Create spending plan iteration item
*SpendingPlanApi* | [**deleteSpendingPlan**](docs/Api/SpendingPlanApi.md#deletespendingplan) | **DELETE** /users/{user_guid}/spending_plans/{spending_plan_guid} | Delete spending plan
*SpendingPlanApi* | [**deleteSpendingPlanAccount**](docs/Api/SpendingPlanApi.md#deletespendingplanaccount) | **DELETE** /users/{user_guid}/spending_plans/{spending_plan_guid}/spending_plan_accounts/{spending_plan_account_guid} | Delete spending plan account
*SpendingPlanApi* | [**deleteSpendingPlanIterationItem**](docs/Api/SpendingPlanApi.md#deletespendingplaniterationitem) | **DELETE** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations/current/iteration_items/{iteration_item_guid} | Delete spending plan iteration item
*SpendingPlanApi* | [**listSpendingPlanAccounts**](docs/Api/SpendingPlanApi.md#listspendingplanaccounts) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid}/spending_plan_accounts | List spending plan accounts
*SpendingPlanApi* | [**listSpendingPlanIterationItems**](docs/Api/SpendingPlanApi.md#listspendingplaniterationitems) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations/current/iteration_items | List spending plan iteration items
*SpendingPlanApi* | [**listSpendingPlanIterations**](docs/Api/SpendingPlanApi.md#listspendingplaniterations) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations | List spending plan iterations
*SpendingPlanApi* | [**listSpendingPlans**](docs/Api/SpendingPlanApi.md#listspendingplans) | **GET** /users/{user_guid}/spending_plans | List spending plans
*SpendingPlanApi* | [**readSpendingPlanAccount**](docs/Api/SpendingPlanApi.md#readspendingplanaccount) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid}/spending_plan_accounts/{spending_plan_account_guid} | Read spending plan account
*SpendingPlanApi* | [**readSpendingPlanIteration**](docs/Api/SpendingPlanApi.md#readspendingplaniteration) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations/{iteration_number} | Read a spending plan iteration
*SpendingPlanApi* | [**readSpendingPlanIterationItem**](docs/Api/SpendingPlanApi.md#readspendingplaniterationitem) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations/current/iteration_items/{iteration_item_guid} | Read a spending plan iteration item
*SpendingPlanApi* | [**readSpendingPlanUser**](docs/Api/SpendingPlanApi.md#readspendingplanuser) | **GET** /users/{user_guid}/spending_plans/{spending_plan_guid} | Read a spending plan for a user
*SpendingPlanApi* | [**updateSpendingPlanIterationItem**](docs/Api/SpendingPlanApi.md#updatespendingplaniterationitem) | **PUT** /users/{user_guid}/spending_plans/{spending_plan_guid}/iterations/current/iteration_items/{iteration_item_guid} | Update a spending plan iteration item
*TransactionsApi* | [**usersUserGuidAccountsAccountGuidTransactionsPost**](docs/Api/TransactionsApi.md#usersuserguidaccountsaccountguidtransactionspost) | **POST** /users/{user_guid}/accounts/{account_guid}/transactions | Create manual transaction

## Models

- [AccountCreateRequest](docs/Model/AccountCreateRequest.md)
- [AccountCreateRequestBody](docs/Model/AccountCreateRequestBody.md)
- [AccountNumberResponse](docs/Model/AccountNumberResponse.md)
- [AccountNumbersResponseBody](docs/Model/AccountNumbersResponseBody.md)
- [AccountOwnerResponse](docs/Model/AccountOwnerResponse.md)
- [AccountOwnersResponseBody](docs/Model/AccountOwnersResponseBody.md)
- [AccountResponse](docs/Model/AccountResponse.md)
- [AccountResponseBody](docs/Model/AccountResponseBody.md)
- [AccountUpdateRequest](docs/Model/AccountUpdateRequest.md)
- [AccountUpdateRequestBody](docs/Model/AccountUpdateRequestBody.md)
- [AccountsResponseBody](docs/Model/AccountsResponseBody.md)
- [AuthorizationCodeRequest](docs/Model/AuthorizationCodeRequest.md)
- [AuthorizationCodeRequestBody](docs/Model/AuthorizationCodeRequestBody.md)
- [AuthorizationCodeResponse](docs/Model/AuthorizationCodeResponse.md)
- [AuthorizationCodeResponseBody](docs/Model/AuthorizationCodeResponseBody.md)
- [BudgetCreateRequest](docs/Model/BudgetCreateRequest.md)
- [BudgetCreateRequestBody](docs/Model/BudgetCreateRequestBody.md)
- [BudgetResponse](docs/Model/BudgetResponse.md)
- [BudgetResponseBody](docs/Model/BudgetResponseBody.md)
- [BudgetUpdateRequest](docs/Model/BudgetUpdateRequest.md)
- [BudgetUpdateRequestBody](docs/Model/BudgetUpdateRequestBody.md)
- [CategoriesResponseBody](docs/Model/CategoriesResponseBody.md)
- [CategoryCreateRequest](docs/Model/CategoryCreateRequest.md)
- [CategoryCreateRequestBody](docs/Model/CategoryCreateRequestBody.md)
- [CategoryResponse](docs/Model/CategoryResponse.md)
- [CategoryResponseBody](docs/Model/CategoryResponseBody.md)
- [CategoryUpdateRequest](docs/Model/CategoryUpdateRequest.md)
- [CategoryUpdateRequestBody](docs/Model/CategoryUpdateRequestBody.md)
- [ChallengeResponse](docs/Model/ChallengeResponse.md)
- [ChallengesResponseBody](docs/Model/ChallengesResponseBody.md)
- [ConnectWidgetRequest](docs/Model/ConnectWidgetRequest.md)
- [ConnectWidgetRequestBody](docs/Model/ConnectWidgetRequestBody.md)
- [ConnectWidgetResponse](docs/Model/ConnectWidgetResponse.md)
- [ConnectWidgetResponseBody](docs/Model/ConnectWidgetResponseBody.md)
- [CredentialRequest](docs/Model/CredentialRequest.md)
- [CredentialResponse](docs/Model/CredentialResponse.md)
- [CredentialsResponseBody](docs/Model/CredentialsResponseBody.md)
- [CreditCardProduct](docs/Model/CreditCardProduct.md)
- [CreditCardProductResponse](docs/Model/CreditCardProductResponse.md)
- [EnhanceTransactionResponse](docs/Model/EnhanceTransactionResponse.md)
- [EnhanceTransactionsRequest](docs/Model/EnhanceTransactionsRequest.md)
- [EnhanceTransactionsRequestBody](docs/Model/EnhanceTransactionsRequestBody.md)
- [EnhanceTransactionsResponseBody](docs/Model/EnhanceTransactionsResponseBody.md)
- [GoalRequest](docs/Model/GoalRequest.md)
- [GoalRequestBody](docs/Model/GoalRequestBody.md)
- [GoalResponse](docs/Model/GoalResponse.md)
- [GoalResponseBody](docs/Model/GoalResponseBody.md)
- [GoalsResponse](docs/Model/GoalsResponse.md)
- [GoalsResponseBody](docs/Model/GoalsResponseBody.md)
- [HoldingResponse](docs/Model/HoldingResponse.md)
- [HoldingResponseBody](docs/Model/HoldingResponseBody.md)
- [HoldingsResponseBody](docs/Model/HoldingsResponseBody.md)
- [ImageOptionResponse](docs/Model/ImageOptionResponse.md)
- [InsightResponse](docs/Model/InsightResponse.md)
- [InsightResponseBody](docs/Model/InsightResponseBody.md)
- [InsightUpdateRequest](docs/Model/InsightUpdateRequest.md)
- [InsightsResponseBody](docs/Model/InsightsResponseBody.md)
- [InstitutionResponse](docs/Model/InstitutionResponse.md)
- [InstitutionResponseBody](docs/Model/InstitutionResponseBody.md)
- [InstitutionsResponseBody](docs/Model/InstitutionsResponseBody.md)
- [ManagedAccountCreateRequest](docs/Model/ManagedAccountCreateRequest.md)
- [ManagedAccountCreateRequestBody](docs/Model/ManagedAccountCreateRequestBody.md)
- [ManagedAccountUpdateRequest](docs/Model/ManagedAccountUpdateRequest.md)
- [ManagedAccountUpdateRequestBody](docs/Model/ManagedAccountUpdateRequestBody.md)
- [ManagedMemberCreateRequest](docs/Model/ManagedMemberCreateRequest.md)
- [ManagedMemberCreateRequestBody](docs/Model/ManagedMemberCreateRequestBody.md)
- [ManagedMemberUpdateRequest](docs/Model/ManagedMemberUpdateRequest.md)
- [ManagedMemberUpdateRequestBody](docs/Model/ManagedMemberUpdateRequestBody.md)
- [ManagedTransactionCreateRequest](docs/Model/ManagedTransactionCreateRequest.md)
- [ManagedTransactionCreateRequestBody](docs/Model/ManagedTransactionCreateRequestBody.md)
- [ManagedTransactionUpdateRequest](docs/Model/ManagedTransactionUpdateRequest.md)
- [ManagedTransactionUpdateRequestBody](docs/Model/ManagedTransactionUpdateRequestBody.md)
- [MemberCreateRequest](docs/Model/MemberCreateRequest.md)
- [MemberCreateRequestBody](docs/Model/MemberCreateRequestBody.md)
- [MemberResponse](docs/Model/MemberResponse.md)
- [MemberResponseBody](docs/Model/MemberResponseBody.md)
- [MemberResumeRequest](docs/Model/MemberResumeRequest.md)
- [MemberResumeRequestBody](docs/Model/MemberResumeRequestBody.md)
- [MemberStatusResponse](docs/Model/MemberStatusResponse.md)
- [MemberStatusResponseBody](docs/Model/MemberStatusResponseBody.md)
- [MemberUpdateRequest](docs/Model/MemberUpdateRequest.md)
- [MemberUpdateRequestBody](docs/Model/MemberUpdateRequestBody.md)
- [MembersResponseBody](docs/Model/MembersResponseBody.md)
- [MerchantLocationResponse](docs/Model/MerchantLocationResponse.md)
- [MerchantLocationResponseBody](docs/Model/MerchantLocationResponseBody.md)
- [MerchantResponse](docs/Model/MerchantResponse.md)
- [MerchantResponseBody](docs/Model/MerchantResponseBody.md)
- [MerchantsResponseBody](docs/Model/MerchantsResponseBody.md)
- [MicrodepositRequest](docs/Model/MicrodepositRequest.md)
- [MicrodepositRequestBody](docs/Model/MicrodepositRequestBody.md)
- [MicrodepositResponse](docs/Model/MicrodepositResponse.md)
- [MicrodepositResponseBody](docs/Model/MicrodepositResponseBody.md)
- [MicrodepositVerifyRequest](docs/Model/MicrodepositVerifyRequest.md)
- [MicrodepositVerifyRequestBody](docs/Model/MicrodepositVerifyRequestBody.md)
- [MicrodepositsResponseBody](docs/Model/MicrodepositsResponseBody.md)
- [MonthlyCashFlowProfileRequest](docs/Model/MonthlyCashFlowProfileRequest.md)
- [MonthlyCashFlowProfileRequestBody](docs/Model/MonthlyCashFlowProfileRequestBody.md)
- [MonthlyCashFlowResponse](docs/Model/MonthlyCashFlowResponse.md)
- [MonthlyCashFlowResponseBody](docs/Model/MonthlyCashFlowResponseBody.md)
- [OAuthWindowResponse](docs/Model/OAuthWindowResponse.md)
- [OAuthWindowResponseBody](docs/Model/OAuthWindowResponseBody.md)
- [OptionResponse](docs/Model/OptionResponse.md)
- [PaginationResponse](docs/Model/PaginationResponse.md)
- [PaymentProcessorAuthorizationCodeRequest](docs/Model/PaymentProcessorAuthorizationCodeRequest.md)
- [PaymentProcessorAuthorizationCodeRequestBody](docs/Model/PaymentProcessorAuthorizationCodeRequestBody.md)
- [PaymentProcessorAuthorizationCodeResponse](docs/Model/PaymentProcessorAuthorizationCodeResponse.md)
- [PaymentProcessorAuthorizationCodeResponseBody](docs/Model/PaymentProcessorAuthorizationCodeResponseBody.md)
- [RepositionRequest](docs/Model/RepositionRequest.md)
- [RepositionRequestBody](docs/Model/RepositionRequestBody.md)
- [RepositionResponseBody](docs/Model/RepositionResponseBody.md)
- [RewardResponse](docs/Model/RewardResponse.md)
- [RewardResponseBody](docs/Model/RewardResponseBody.md)
- [RewardsResponse](docs/Model/RewardsResponse.md)
- [RewardsResponseBody](docs/Model/RewardsResponseBody.md)
- [ScheduledPaymentResponse](docs/Model/ScheduledPaymentResponse.md)
- [ScheduledPaymentsResponseBody](docs/Model/ScheduledPaymentsResponseBody.md)
- [SpendingPlanAccountResponse](docs/Model/SpendingPlanAccountResponse.md)
- [SpendingPlanAccountsResponse](docs/Model/SpendingPlanAccountsResponse.md)
- [SpendingPlanIterationItemCreateRequestBody](docs/Model/SpendingPlanIterationItemCreateRequestBody.md)
- [SpendingPlanIterationItemResponse](docs/Model/SpendingPlanIterationItemResponse.md)
- [SpendingPlanIterationItemsResponseBody](docs/Model/SpendingPlanIterationItemsResponseBody.md)
- [SpendingPlanIterationResponse](docs/Model/SpendingPlanIterationResponse.md)
- [SpendingPlanIterationsResponse](docs/Model/SpendingPlanIterationsResponse.md)
- [SpendingPlanResponse](docs/Model/SpendingPlanResponse.md)
- [SpendingPlansResponseBody](docs/Model/SpendingPlansResponseBody.md)
- [SplitTransactionRequest](docs/Model/SplitTransactionRequest.md)
- [SplitTransactionRequestBody](docs/Model/SplitTransactionRequestBody.md)
- [SplitTransactionsResponseBody](docs/Model/SplitTransactionsResponseBody.md)
- [StatementResponse](docs/Model/StatementResponse.md)
- [StatementResponseBody](docs/Model/StatementResponseBody.md)
- [StatementsResponseBody](docs/Model/StatementsResponseBody.md)
- [TagCreateRequest](docs/Model/TagCreateRequest.md)
- [TagCreateRequestBody](docs/Model/TagCreateRequestBody.md)
- [TagResponse](docs/Model/TagResponse.md)
- [TagResponseBody](docs/Model/TagResponseBody.md)
- [TagUpdateRequest](docs/Model/TagUpdateRequest.md)
- [TagUpdateRequestBody](docs/Model/TagUpdateRequestBody.md)
- [TaggingCreateRequest](docs/Model/TaggingCreateRequest.md)
- [TaggingCreateRequestBody](docs/Model/TaggingCreateRequestBody.md)
- [TaggingResponse](docs/Model/TaggingResponse.md)
- [TaggingResponseBody](docs/Model/TaggingResponseBody.md)
- [TaggingUpdateRequest](docs/Model/TaggingUpdateRequest.md)
- [TaggingUpdateRequestBody](docs/Model/TaggingUpdateRequestBody.md)
- [TaggingsResponseBody](docs/Model/TaggingsResponseBody.md)
- [TagsResponseBody](docs/Model/TagsResponseBody.md)
- [TaxDocumentResponse](docs/Model/TaxDocumentResponse.md)
- [TaxDocumentResponseBody](docs/Model/TaxDocumentResponseBody.md)
- [TaxDocumentsResponseBody](docs/Model/TaxDocumentsResponseBody.md)
- [TransactionCreateRequest](docs/Model/TransactionCreateRequest.md)
- [TransactionCreateRequestBody](docs/Model/TransactionCreateRequestBody.md)
- [TransactionCreateResponseBody](docs/Model/TransactionCreateResponseBody.md)
- [TransactionResponse](docs/Model/TransactionResponse.md)
- [TransactionResponseBody](docs/Model/TransactionResponseBody.md)
- [TransactionRuleCreateRequest](docs/Model/TransactionRuleCreateRequest.md)
- [TransactionRuleCreateRequestBody](docs/Model/TransactionRuleCreateRequestBody.md)
- [TransactionRuleResponse](docs/Model/TransactionRuleResponse.md)
- [TransactionRuleResponseBody](docs/Model/TransactionRuleResponseBody.md)
- [TransactionRuleUpdateRequest](docs/Model/TransactionRuleUpdateRequest.md)
- [TransactionRuleUpdateRequestBody](docs/Model/TransactionRuleUpdateRequestBody.md)
- [TransactionRulesResponseBody](docs/Model/TransactionRulesResponseBody.md)
- [TransactionUpdateRequest](docs/Model/TransactionUpdateRequest.md)
- [TransactionUpdateRequestBody](docs/Model/TransactionUpdateRequestBody.md)
- [TransactionsResponseBody](docs/Model/TransactionsResponseBody.md)
- [UpdateGoalRequest](docs/Model/UpdateGoalRequest.md)
- [UpdateGoalRequestBody](docs/Model/UpdateGoalRequestBody.md)
- [UserCreateRequest](docs/Model/UserCreateRequest.md)
- [UserCreateRequestBody](docs/Model/UserCreateRequestBody.md)
- [UserResponse](docs/Model/UserResponse.md)
- [UserResponseBody](docs/Model/UserResponseBody.md)
- [UserUpdateRequest](docs/Model/UserUpdateRequest.md)
- [UserUpdateRequestBody](docs/Model/UserUpdateRequestBody.md)
- [UsersResponseBody](docs/Model/UsersResponseBody.md)
- [WidgetRequest](docs/Model/WidgetRequest.md)
- [WidgetRequestBody](docs/Model/WidgetRequestBody.md)
- [WidgetResponse](docs/Model/WidgetResponse.md)
- [WidgetResponseBody](docs/Model/WidgetResponseBody.md)

## Authorization

Authentication schemes defined for the API:
### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.1.0`
    - Generator version: `7.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
