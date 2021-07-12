# Vismutx\KlarnaOrderManagementApiPhp\CapturesApi

All URIs are relative to *https://api.klarna.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendShippingInfo**](CapturesApi.md#appendShippingInfo) | **POST** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/shipping-info | Add shipping info to a capture
[**captureOrder**](CapturesApi.md#captureOrder) | **POST** /ordermanagement/v1/orders/{order_id}/captures | Create capture
[**extendDueDate**](CapturesApi.md#extendDueDate) | **PATCH** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/extend-due-date | Extend the customer&#39;s payment due date
[**getCapture**](CapturesApi.md#getCapture) | **GET** /ordermanagement/v1/orders/{order_id}/captures/{capture_id} | Get capture
[**getCaptures**](CapturesApi.md#getCaptures) | **GET** /ordermanagement/v1/orders/{order_id}/captures | Get all captures for one order
[**getOptionsForExtendDueDate**](CapturesApi.md#getOptionsForExtendDueDate) | **GET** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/extend-due-date-options | Get available options for extension of the customer&#39;s payment due date
[**triggerSendOut**](CapturesApi.md#triggerSendOut) | **POST** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/trigger-send-out | Trigger resend of customer communication


# **appendShippingInfo**
> appendShippingInfo($order_id, $capture_id, $body, $klarna_idempotency_key)

Add shipping info to a capture

Add shipping info to a capture

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Vismutx\KlarnaOrderManagementApiPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vismutx\KlarnaOrderManagementApiPhp\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | Order id
$capture_id = "capture_id_example"; // string | Capture id
$body = new \Vismutx\KlarnaOrderManagementApiPhp\Model\UpdateShippingInfo(); // \Vismutx\KlarnaOrderManagementApiPhp\Model\UpdateShippingInfo | 
$klarna_idempotency_key = "klarna_idempotency_key_example"; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->appendShippingInfo($order_id, $capture_id, $body, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->appendShippingInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **capture_id** | **string**| Capture id |
 **body** | [**\Vismutx\KlarnaOrderManagementApiPhp\Model\UpdateShippingInfo**](../Model/UpdateShippingInfo.md)|  | [optional]
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **captureOrder**
> captureOrder($order_id, $body, $klarna_idempotency_key)

Create capture

Create capture

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Vismutx\KlarnaOrderManagementApiPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vismutx\KlarnaOrderManagementApiPhp\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | Order id
$body = new \Vismutx\KlarnaOrderManagementApiPhp\Model\CaptureObject(); // \Vismutx\KlarnaOrderManagementApiPhp\Model\CaptureObject | Capture request data
$klarna_idempotency_key = "klarna_idempotency_key_example"; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->captureOrder($order_id, $body, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->captureOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **body** | [**\Vismutx\KlarnaOrderManagementApiPhp\Model\CaptureObject**](../Model/CaptureObject.md)| Capture request data |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extendDueDate**
> extendDueDate($order_id, $capture_id, $body, $klarna_idempotency_key)

Extend the customer's payment due date

Extend the customer's payment due date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Vismutx\KlarnaOrderManagementApiPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vismutx\KlarnaOrderManagementApiPhp\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | Order id
$capture_id = "capture_id_example"; // string | Capture id
$body = new \Vismutx\KlarnaOrderManagementApiPhp\Model\ExtendDueDateRequest(); // \Vismutx\KlarnaOrderManagementApiPhp\Model\ExtendDueDateRequest | 
$klarna_idempotency_key = "klarna_idempotency_key_example"; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->extendDueDate($order_id, $capture_id, $body, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->extendDueDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **capture_id** | **string**| Capture id |
 **body** | [**\Vismutx\KlarnaOrderManagementApiPhp\Model\ExtendDueDateRequest**](../Model/ExtendDueDateRequest.md)|  | [optional]
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCapture**
> \Vismutx\KlarnaOrderManagementApiPhp\Model\Capture getCapture($order_id, $capture_id)

Get capture

Get capture

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Vismutx\KlarnaOrderManagementApiPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vismutx\KlarnaOrderManagementApiPhp\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | Order id
$capture_id = "capture_id_example"; // string | Capture id

try {
    $result = $apiInstance->getCapture($order_id, $capture_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->getCapture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **capture_id** | **string**| Capture id |

### Return type

[**\Vismutx\KlarnaOrderManagementApiPhp\Model\Capture**](../Model/Capture.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: *
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCaptures**
> \Vismutx\KlarnaOrderManagementApiPhp\Model\Capture[] getCaptures($order_id)

Get all captures for one order

Get all captures for one order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Vismutx\KlarnaOrderManagementApiPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vismutx\KlarnaOrderManagementApiPhp\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | Order id

try {
    $result = $apiInstance->getCaptures($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->getCaptures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |

### Return type

[**\Vismutx\KlarnaOrderManagementApiPhp\Model\Capture[]**](../Model/Capture.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: *
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOptionsForExtendDueDate**
> \Vismutx\KlarnaOrderManagementApiPhp\Model\ExtendDueDateOptions getOptionsForExtendDueDate($order_id, $capture_id)

Get available options for extension of the customer's payment due date

Get merchant fees for extension of due date due date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Vismutx\KlarnaOrderManagementApiPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vismutx\KlarnaOrderManagementApiPhp\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | Order id
$capture_id = "capture_id_example"; // string | Capture id

try {
    $result = $apiInstance->getOptionsForExtendDueDate($order_id, $capture_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->getOptionsForExtendDueDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **capture_id** | **string**| Capture id |

### Return type

[**\Vismutx\KlarnaOrderManagementApiPhp\Model\ExtendDueDateOptions**](../Model/ExtendDueDateOptions.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **triggerSendOut**
> triggerSendOut($order_id, $capture_id, $klarna_idempotency_key)

Trigger resend of customer communication

Trigger resend of customer communication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Vismutx\KlarnaOrderManagementApiPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Vismutx\KlarnaOrderManagementApiPhp\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | Order id
$capture_id = "capture_id_example"; // string | Capture id
$klarna_idempotency_key = "klarna_idempotency_key_example"; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->triggerSendOut($order_id, $capture_id, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->triggerSendOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **capture_id** | **string**| Capture id |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: *
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

