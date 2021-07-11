# Klarna\OrderManagementApiPhp\OrdersApi

All URIs are relative to *https://api.klarna.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acknowledgeOrder**](OrdersApi.md#acknowledgeOrder) | **POST** /ordermanagement/v1/orders/{order_id}/acknowledge | Acknowledge order
[**cancelOrder**](OrdersApi.md#cancelOrder) | **POST** /ordermanagement/v1/orders/{order_id}/cancel | Cancel order
[**extendAuthorizationTime**](OrdersApi.md#extendAuthorizationTime) | **POST** /ordermanagement/v1/orders/{order_id}/extend-authorization-time | Extend authorization time
[**getOrder**](OrdersApi.md#getOrder) | **GET** /ordermanagement/v1/orders/{order_id} | Get order
[**releaseRemainingAuthorization**](OrdersApi.md#releaseRemainingAuthorization) | **POST** /ordermanagement/v1/orders/{order_id}/release-remaining-authorization | Release remaining authorization
[**updateAuthorization**](OrdersApi.md#updateAuthorization) | **PATCH** /ordermanagement/v1/orders/{order_id}/authorization | Set new order amount and order lines
[**updateConsumerDetails**](OrdersApi.md#updateConsumerDetails) | **PATCH** /ordermanagement/v1/orders/{order_id}/customer-details | Update customer addresses
[**updateMerchantReferences**](OrdersApi.md#updateMerchantReferences) | **PATCH** /ordermanagement/v1/orders/{order_id}/merchant-references | Update merchant references


# **acknowledgeOrder**
> acknowledgeOrder($order_id, $klarna_idempotency_key)

Acknowledge order

Acknowledge order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\OrderManagementApiPhp\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | Order id
$klarna_idempotency_key = "klarna_idempotency_key_example"; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->acknowledgeOrder($order_id, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->acknowledgeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: *
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelOrder**
> cancelOrder($order_id, $klarna_idempotency_key)

Cancel order

Cancel order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\OrderManagementApiPhp\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | Order id
$klarna_idempotency_key = "klarna_idempotency_key_example"; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->cancelOrder($order_id, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: *
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extendAuthorizationTime**
> extendAuthorizationTime($order_id, $klarna_idempotency_key)

Extend authorization time

Extend authorization time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\OrderManagementApiPhp\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | Order id
$klarna_idempotency_key = "klarna_idempotency_key_example"; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->extendAuthorizationTime($order_id, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->extendAuthorizationTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: *
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \Klarna\OrderManagementApiPhp\Model\Order getOrder($order_id, $klarna_integrator)

Get order

An order that has the given order id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\OrderManagementApiPhp\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | Order id
$klarna_integrator = "klarna_integrator_example"; // string | 

try {
    $result = $apiInstance->getOrder($order_id, $klarna_integrator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **klarna_integrator** | **string**|  | [optional]

### Return type

[**\Klarna\OrderManagementApiPhp\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: *
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releaseRemainingAuthorization**
> releaseRemainingAuthorization($order_id, $klarna_idempotency_key)

Release remaining authorization

Release remaining authorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\OrderManagementApiPhp\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | Order id
$klarna_idempotency_key = "klarna_idempotency_key_example"; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->releaseRemainingAuthorization($order_id, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->releaseRemainingAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: *
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAuthorization**
> updateAuthorization($order_id, $body, $klarna_idempotency_key)

Set new order amount and order lines

Set new order amount and order lines

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\OrderManagementApiPhp\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | Order id
$body = new \Klarna\OrderManagementApiPhp\Model\UpdateAuthorization(); // \Klarna\OrderManagementApiPhp\Model\UpdateAuthorization | 
$klarna_idempotency_key = "klarna_idempotency_key_example"; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->updateAuthorization($order_id, $body, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **body** | [**\Klarna\OrderManagementApiPhp\Model\UpdateAuthorization**](../Model/UpdateAuthorization.md)|  | [optional]
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConsumerDetails**
> updateConsumerDetails($order_id, $body, $klarna_idempotency_key)

Update customer addresses

Update customer addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\OrderManagementApiPhp\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | Order id
$body = new \Klarna\OrderManagementApiPhp\Model\UpdateConsumer(); // \Klarna\OrderManagementApiPhp\Model\UpdateConsumer | 
$klarna_idempotency_key = "klarna_idempotency_key_example"; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->updateConsumerDetails($order_id, $body, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateConsumerDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **body** | [**\Klarna\OrderManagementApiPhp\Model\UpdateConsumer**](../Model/UpdateConsumer.md)|  | [optional]
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMerchantReferences**
> updateMerchantReferences($order_id, $body, $klarna_idempotency_key)

Update merchant references

Update merchant references

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\OrderManagementApiPhp\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | Order id
$body = new \Klarna\OrderManagementApiPhp\Model\UpdateMerchantReferences(); // \Klarna\OrderManagementApiPhp\Model\UpdateMerchantReferences | 
$klarna_idempotency_key = "klarna_idempotency_key_example"; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->updateMerchantReferences($order_id, $body, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateMerchantReferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **body** | [**\Klarna\OrderManagementApiPhp\Model\UpdateMerchantReferences**](../Model/UpdateMerchantReferences.md)|  | [optional]
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

