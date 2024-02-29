# GeminiCommerce\Order\OrderApi

All URIs are relative to https://dom.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approveOrder()**](OrderApi.md#approveOrder) | **POST** /order.Order/ApproveOrder | Approve Order |
| [**assignShipment()**](OrderApi.md#assignShipment) | **POST** /order.Order/AssignShipment | Assign Shipment |
| [**calculateRefund()**](OrderApi.md#calculateRefund) | **POST** /order.Order/CalculateRefund | Calculate Refund |
| [**cancelFulfillment()**](OrderApi.md#cancelFulfillment) | **POST** /order.Order/CancelFulfillment | Cancel Fulfillment |
| [**cancelOrder()**](OrderApi.md#cancelOrder) | **POST** /order.Order/CancelOrder | Cancel Order |
| [**cancelShipment()**](OrderApi.md#cancelShipment) | **POST** /order.Order/CancelShipment | Cancel Shipment |
| [**completeShipmentPacking()**](OrderApi.md#completeShipmentPacking) | **POST** /order.Order/CompleteShipmentPacking | Complete Shipment Packing |
| [**createFulfillment()**](OrderApi.md#createFulfillment) | **POST** /order.Order/CreateFulfillment | Create Fulfillment |
| [**createOrder()**](OrderApi.md#createOrder) | **POST** /order.Order/CreateOrder | Create Order |
| [**createOrderHistory()**](OrderApi.md#createOrderHistory) | **POST** /order.Order/CreateHistory | Create Order History |
| [**createPayment()**](OrderApi.md#createPayment) | **POST** /order.Order/CreatePayment | Create Payment |
| [**createPaymentTransaction()**](OrderApi.md#createPaymentTransaction) | **POST** /order.Order/CreatePaymentTransaction | Create Payment Transaction |
| [**createRefund()**](OrderApi.md#createRefund) | **POST** /order.Order/CreateRefund | Create Refund |
| [**createRefundTransaction()**](OrderApi.md#createRefundTransaction) | **POST** /order.Order/CreateRefundTransaction | Create Refund Transaction |
| [**createShipment()**](OrderApi.md#createShipment) | **POST** /order.Order/CreateShipment | Create Shipment |
| [**deleteOrder()**](OrderApi.md#deleteOrder) | **POST** /order.Order/DeleteOrder | Delete Order |
| [**getFulfillment()**](OrderApi.md#getFulfillment) | **POST** /order.Order/GetFulfillment | Get Fulfillment |
| [**getOrder()**](OrderApi.md#getOrder) | **POST** /order.Order/GetOrder | Get Order |
| [**getOrderByCartId()**](OrderApi.md#getOrderByCartId) | **POST** /order.Order/GetOrderByCartId | Get Order by Cart ID |
| [**getOrderByOrderNumber()**](OrderApi.md#getOrderByOrderNumber) | **POST** /order.Order/GetOrderByOrderNumber | Get Order by Order Number |
| [**getPayment()**](OrderApi.md#getPayment) | **POST** /order.Order/GetPayment | Get Payment |
| [**getShipment()**](OrderApi.md#getShipment) | **POST** /order.Order/GetShipment | Get Shipment |
| [**getTransaction()**](OrderApi.md#getTransaction) | **POST** /order.Order/GetTransaction | Get Transaction |
| [**holdOrder()**](OrderApi.md#holdOrder) | **POST** /order.Order/HoldOrder | Hold Order |
| [**importOrder()**](OrderApi.md#importOrder) | **POST** /order.Order/ImportOrder | Import Order |
| [**listFulfillments()**](OrderApi.md#listFulfillments) | **POST** /order.Order/ListFulfillments | List Fulfillments |
| [**listOrders()**](OrderApi.md#listOrders) | **POST** /order.Order/ListOrders | List Orders |
| [**listOrdersByCustomer()**](OrderApi.md#listOrdersByCustomer) | **POST** /order.Order/ListOrdersByCustomer | List Orders by Customer |
| [**listOrdersByNumbers()**](OrderApi.md#listOrdersByNumbers) | **POST** /order.Order/ListOrdersByNumbers | List Orders by Numbers |
| [**listShipments()**](OrderApi.md#listShipments) | **POST** /order.Order/ListShipments | List Shipments |
| [**orderAddDocument()**](OrderApi.md#orderAddDocument) | **POST** /order.Order/AddDocument | Documents |
| [**orderRemoveDocumentByCode()**](OrderApi.md#orderRemoveDocumentByCode) | **POST** /order.Order/RemoveDocumentByCode |  |
| [**printOrdersLabels()**](OrderApi.md#printOrdersLabels) | **POST** /order.Order/PrintOrdersLabels | Print Orders Labels |
| [**quashFulfillment()**](OrderApi.md#quashFulfillment) | **POST** /order.Order/QuashFulfillment | Quash Fulfillment |
| [**quashShipment()**](OrderApi.md#quashShipment) | **POST** /order.Order/QuashShipment | Quash Shipment |
| [**receiveFulfillment()**](OrderApi.md#receiveFulfillment) | **POST** /order.Order/ReceiveFulfillment | Receive Fulfillment |
| [**reportFulfillmentError()**](OrderApi.md#reportFulfillmentError) | **POST** /order.Order/ReportFulfillmentError | Report Fulfillment Error |
| [**reportFulfillmentNotResolvable()**](OrderApi.md#reportFulfillmentNotResolvable) | **POST** /order.Order/ReportFulfillmentNotResolvable | Report Fulfillment Not Resolvable |
| [**reportFulfillmentReady()**](OrderApi.md#reportFulfillmentReady) | **POST** /order.Order/ReportFulfillmentReady | Report Fulfillment Ready |
| [**reportShipmentDelivery()**](OrderApi.md#reportShipmentDelivery) | **POST** /order.Order/ReportShipmentDelivery | Report Shipment Delivery |
| [**reportShipmentMissingStock()**](OrderApi.md#reportShipmentMissingStock) | **POST** /order.Order/ReportShipmentMissingStock | Report Shipment Missing Stock |
| [**resolveShipmentMissingStock()**](OrderApi.md#resolveShipmentMissingStock) | **POST** /order.Order/ResolveShipmentMissingStock | Resolve Shipment Missing Stock |
| [**retryFulfillment()**](OrderApi.md#retryFulfillment) | **POST** /order.Order/RetryFulfillment | Retry Fulfillment |
| [**searchOrders()**](OrderApi.md#searchOrders) | **POST** /order.Order/SearchOrders | Search Orders |
| [**sendFulfillment()**](OrderApi.md#sendFulfillment) | **POST** /order.Order/SendFulfillment | Send Fulfillment |
| [**sendOrderNotification()**](OrderApi.md#sendOrderNotification) | **POST** /order.Order/SendOrderNotification | Send Order Notification |
| [**startFulfillmentProcessing()**](OrderApi.md#startFulfillmentProcessing) | **POST** /order.Order/StartFulfillmentProcessing | Start Fulfillment Processing |
| [**startShipmentProcessing()**](OrderApi.md#startShipmentProcessing) | **POST** /order.Order/StartShipmentProcessing | Start Shipment Processing |
| [**unholdOrder()**](OrderApi.md#unholdOrder) | **POST** /order.Order/UnholdOrder | Unhold Order |
| [**updateOrder()**](OrderApi.md#updateOrder) | **POST** /order.Order/UpdateOrder | Update Order |
| [**updatePayment()**](OrderApi.md#updatePayment) | **POST** /order.Order/UpdatePayment | Update Payment |


## `approveOrder()`

```php
approveOrder($body): object
```

Approve Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderApproveOrderRequest(); // \GeminiCommerce\Order\Model\OrderApproveOrderRequest

try {
    $result = $apiInstance->approveOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->approveOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderApproveOrderRequest**](../Model/OrderApproveOrderRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignShipment()`

```php
assignShipment($body): object
```

Assign Shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderAssignShipmentRequest(); // \GeminiCommerce\Order\Model\OrderAssignShipmentRequest

try {
    $result = $apiInstance->assignShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->assignShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderAssignShipmentRequest**](../Model/OrderAssignShipmentRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calculateRefund()`

```php
calculateRefund($body): \GeminiCommerce\Order\Model\OrderCalculateRefundResponse
```

Calculate Refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCalculateRefundRequest(); // \GeminiCommerce\Order\Model\OrderCalculateRefundRequest

try {
    $result = $apiInstance->calculateRefund($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->calculateRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCalculateRefundRequest**](../Model/OrderCalculateRefundRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderCalculateRefundResponse**](../Model/OrderCalculateRefundResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelFulfillment()`

```php
cancelFulfillment($body): object
```

Cancel Fulfillment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCancelFulfillmentRequest(); // \GeminiCommerce\Order\Model\OrderCancelFulfillmentRequest

try {
    $result = $apiInstance->cancelFulfillment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelFulfillment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCancelFulfillmentRequest**](../Model/OrderCancelFulfillmentRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOrder()`

```php
cancelOrder($body): object
```

Cancel Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCancelOrderRequest(); // \GeminiCommerce\Order\Model\OrderCancelOrderRequest

try {
    $result = $apiInstance->cancelOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCancelOrderRequest**](../Model/OrderCancelOrderRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelShipment()`

```php
cancelShipment($body): object
```

Cancel Shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCancelShipmentRequest(); // \GeminiCommerce\Order\Model\OrderCancelShipmentRequest

try {
    $result = $apiInstance->cancelShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCancelShipmentRequest**](../Model/OrderCancelShipmentRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `completeShipmentPacking()`

```php
completeShipmentPacking($body): object
```

Complete Shipment Packing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCompleteShipmentPackingRequest(); // \GeminiCommerce\Order\Model\OrderCompleteShipmentPackingRequest

try {
    $result = $apiInstance->completeShipmentPacking($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->completeShipmentPacking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCompleteShipmentPackingRequest**](../Model/OrderCompleteShipmentPackingRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFulfillment()`

```php
createFulfillment($body): \GeminiCommerce\Order\Model\OrderFulfillment
```

Create Fulfillment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCreateFulfillmentRequest(); // \GeminiCommerce\Order\Model\OrderCreateFulfillmentRequest

try {
    $result = $apiInstance->createFulfillment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createFulfillment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCreateFulfillmentRequest**](../Model/OrderCreateFulfillmentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderFulfillment**](../Model/OrderFulfillment.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($body): \GeminiCommerce\Order\Model\OrderOrderData
```

Create Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCreateOrderRequest(); // \GeminiCommerce\Order\Model\OrderCreateOrderRequest

try {
    $result = $apiInstance->createOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCreateOrderRequest**](../Model/OrderCreateOrderRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderOrderData**](../Model/OrderOrderData.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderHistory()`

```php
createOrderHistory($body): \GeminiCommerce\Order\Model\OrderDataHistory
```

Create Order History

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCreateHistoryRequest(); // \GeminiCommerce\Order\Model\OrderCreateHistoryRequest

try {
    $result = $apiInstance->createOrderHistory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCreateHistoryRequest**](../Model/OrderCreateHistoryRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderDataHistory**](../Model/OrderDataHistory.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPayment()`

```php
createPayment($body): \GeminiCommerce\Order\Model\OrderPayment
```

Create Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCreatePaymentRequest(); // \GeminiCommerce\Order\Model\OrderCreatePaymentRequest

try {
    $result = $apiInstance->createPayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCreatePaymentRequest**](../Model/OrderCreatePaymentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderPayment**](../Model/OrderPayment.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentTransaction()`

```php
createPaymentTransaction($body): \GeminiCommerce\Order\Model\OrderTransaction
```

Create Payment Transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCreatePaymentTransactionRequest(); // \GeminiCommerce\Order\Model\OrderCreatePaymentTransactionRequest

try {
    $result = $apiInstance->createPaymentTransaction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createPaymentTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCreatePaymentTransactionRequest**](../Model/OrderCreatePaymentTransactionRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderTransaction**](../Model/OrderTransaction.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRefund()`

```php
createRefund($body): \GeminiCommerce\Order\Model\OrderRefund
```

Create Refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCreateRefundRequest(); // \GeminiCommerce\Order\Model\OrderCreateRefundRequest

try {
    $result = $apiInstance->createRefund($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCreateRefundRequest**](../Model/OrderCreateRefundRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderRefund**](../Model/OrderRefund.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRefundTransaction()`

```php
createRefundTransaction($body): \GeminiCommerce\Order\Model\OrderTransaction
```

Create Refund Transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCreateRefundTransactionRequest(); // \GeminiCommerce\Order\Model\OrderCreateRefundTransactionRequest

try {
    $result = $apiInstance->createRefundTransaction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createRefundTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCreateRefundTransactionRequest**](../Model/OrderCreateRefundTransactionRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderTransaction**](../Model/OrderTransaction.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShipment()`

```php
createShipment($body): \GeminiCommerce\Order\Model\OrderShipment
```

Create Shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderCreateShipmentRequest(); // \GeminiCommerce\Order\Model\OrderCreateShipmentRequest

try {
    $result = $apiInstance->createShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderCreateShipmentRequest**](../Model/OrderCreateShipmentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderShipment**](../Model/OrderShipment.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrder()`

```php
deleteOrder($body): object
```

Delete Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderDeleteOrderRequest(); // \GeminiCommerce\Order\Model\OrderDeleteOrderRequest

try {
    $result = $apiInstance->deleteOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderDeleteOrderRequest**](../Model/OrderDeleteOrderRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFulfillment()`

```php
getFulfillment($body): \GeminiCommerce\Order\Model\OrderFulfillment
```

Get Fulfillment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderGetFulfillmentRequest(); // \GeminiCommerce\Order\Model\OrderGetFulfillmentRequest

try {
    $result = $apiInstance->getFulfillment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getFulfillment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderGetFulfillmentRequest**](../Model/OrderGetFulfillmentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderFulfillment**](../Model/OrderFulfillment.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($body): \GeminiCommerce\Order\Model\OrderOrderData
```

Get Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderGetOrderRequest(); // \GeminiCommerce\Order\Model\OrderGetOrderRequest

try {
    $result = $apiInstance->getOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderGetOrderRequest**](../Model/OrderGetOrderRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderOrderData**](../Model/OrderOrderData.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderByCartId()`

```php
getOrderByCartId($body): \GeminiCommerce\Order\Model\OrderOrderData
```

Get Order by Cart ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderGetOrderByCartIdRequest(); // \GeminiCommerce\Order\Model\OrderGetOrderByCartIdRequest

try {
    $result = $apiInstance->getOrderByCartId($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderByCartId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderGetOrderByCartIdRequest**](../Model/OrderGetOrderByCartIdRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderOrderData**](../Model/OrderOrderData.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderByOrderNumber()`

```php
getOrderByOrderNumber($body): \GeminiCommerce\Order\Model\OrderOrderData
```

Get Order by Order Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderGetOrderByOrderNumberRequest(); // \GeminiCommerce\Order\Model\OrderGetOrderByOrderNumberRequest

try {
    $result = $apiInstance->getOrderByOrderNumber($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderByOrderNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderGetOrderByOrderNumberRequest**](../Model/OrderGetOrderByOrderNumberRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderOrderData**](../Model/OrderOrderData.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayment()`

```php
getPayment($body): \GeminiCommerce\Order\Model\OrderPayment
```

Get Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderGetPaymentRequest(); // \GeminiCommerce\Order\Model\OrderGetPaymentRequest

try {
    $result = $apiInstance->getPayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderGetPaymentRequest**](../Model/OrderGetPaymentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderPayment**](../Model/OrderPayment.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipment()`

```php
getShipment($body): \GeminiCommerce\Order\Model\OrderShipment
```

Get Shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderGetShipmentRequest(); // \GeminiCommerce\Order\Model\OrderGetShipmentRequest

try {
    $result = $apiInstance->getShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderGetShipmentRequest**](../Model/OrderGetShipmentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderShipment**](../Model/OrderShipment.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransaction()`

```php
getTransaction($body): \GeminiCommerce\Order\Model\OrderTransaction
```

Get Transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderGetTransactionRequest(); // \GeminiCommerce\Order\Model\OrderGetTransactionRequest

try {
    $result = $apiInstance->getTransaction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderGetTransactionRequest**](../Model/OrderGetTransactionRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderTransaction**](../Model/OrderTransaction.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `holdOrder()`

```php
holdOrder($body): object
```

Hold Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderHoldOrderRequest(); // \GeminiCommerce\Order\Model\OrderHoldOrderRequest

try {
    $result = $apiInstance->holdOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->holdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderHoldOrderRequest**](../Model/OrderHoldOrderRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importOrder()`

```php
importOrder($body): \GeminiCommerce\Order\Model\OrderOrderData
```

Import Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderImportOrderRequest(); // \GeminiCommerce\Order\Model\OrderImportOrderRequest

try {
    $result = $apiInstance->importOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->importOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderImportOrderRequest**](../Model/OrderImportOrderRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderOrderData**](../Model/OrderOrderData.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFulfillments()`

```php
listFulfillments($body): \GeminiCommerce\Order\Model\OrderListFulfillmentsResponse
```

List Fulfillments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderListFulfillmentsRequest(); // \GeminiCommerce\Order\Model\OrderListFulfillmentsRequest

try {
    $result = $apiInstance->listFulfillments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->listFulfillments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderListFulfillmentsRequest**](../Model/OrderListFulfillmentsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderListFulfillmentsResponse**](../Model/OrderListFulfillmentsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrders()`

```php
listOrders($body): \GeminiCommerce\Order\Model\OrderListOrdersResponse
```

List Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderListOrdersRequest(); // \GeminiCommerce\Order\Model\OrderListOrdersRequest

try {
    $result = $apiInstance->listOrders($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderListOrdersRequest**](../Model/OrderListOrdersRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderListOrdersResponse**](../Model/OrderListOrdersResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrdersByCustomer()`

```php
listOrdersByCustomer($body): \GeminiCommerce\Order\Model\OrderListOrdersByCustomerResponse
```

List Orders by Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderListOrdersByCustomerRequest(); // \GeminiCommerce\Order\Model\OrderListOrdersByCustomerRequest

try {
    $result = $apiInstance->listOrdersByCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->listOrdersByCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderListOrdersByCustomerRequest**](../Model/OrderListOrdersByCustomerRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderListOrdersByCustomerResponse**](../Model/OrderListOrdersByCustomerResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrdersByNumbers()`

```php
listOrdersByNumbers($body): \GeminiCommerce\Order\Model\OrderListOrdersByNumbersResponse
```

List Orders by Numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderListOrdersByNumbersRequest(); // \GeminiCommerce\Order\Model\OrderListOrdersByNumbersRequest

try {
    $result = $apiInstance->listOrdersByNumbers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->listOrdersByNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderListOrdersByNumbersRequest**](../Model/OrderListOrdersByNumbersRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderListOrdersByNumbersResponse**](../Model/OrderListOrdersByNumbersResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listShipments()`

```php
listShipments($body): \GeminiCommerce\Order\Model\OrderListShipmentsResponse
```

List Shipments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderListShipmentsRequest(); // \GeminiCommerce\Order\Model\OrderListShipmentsRequest

try {
    $result = $apiInstance->listShipments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->listShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderListShipmentsRequest**](../Model/OrderListShipmentsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderListShipmentsResponse**](../Model/OrderListShipmentsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderAddDocument()`

```php
orderAddDocument($body): object
```

Documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderAddDocumentRequest(); // \GeminiCommerce\Order\Model\OrderAddDocumentRequest

try {
    $result = $apiInstance->orderAddDocument($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAddDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderAddDocumentRequest**](../Model/OrderAddDocumentRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderRemoveDocumentByCode()`

```php
orderRemoveDocumentByCode($body): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderRemoveDocumentByCodeRequest(); // \GeminiCommerce\Order\Model\OrderRemoveDocumentByCodeRequest

try {
    $result = $apiInstance->orderRemoveDocumentByCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderRemoveDocumentByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderRemoveDocumentByCodeRequest**](../Model/OrderRemoveDocumentByCodeRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `printOrdersLabels()`

```php
printOrdersLabels($body): \GeminiCommerce\Order\Model\OrderPrintOrdersLabelsResponse
```

Print Orders Labels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderPrintOrdersLabelsRequest(); // \GeminiCommerce\Order\Model\OrderPrintOrdersLabelsRequest

try {
    $result = $apiInstance->printOrdersLabels($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->printOrdersLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderPrintOrdersLabelsRequest**](../Model/OrderPrintOrdersLabelsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderPrintOrdersLabelsResponse**](../Model/OrderPrintOrdersLabelsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quashFulfillment()`

```php
quashFulfillment($body): object
```

Quash Fulfillment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderQuashFulfillmentRequest(); // \GeminiCommerce\Order\Model\OrderQuashFulfillmentRequest

try {
    $result = $apiInstance->quashFulfillment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->quashFulfillment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderQuashFulfillmentRequest**](../Model/OrderQuashFulfillmentRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quashShipment()`

```php
quashShipment($body): object
```

Quash Shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderQuashShipmentRequest(); // \GeminiCommerce\Order\Model\OrderQuashShipmentRequest

try {
    $result = $apiInstance->quashShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->quashShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderQuashShipmentRequest**](../Model/OrderQuashShipmentRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receiveFulfillment()`

```php
receiveFulfillment($body): object
```

Receive Fulfillment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderReceiveFulfillmentRequest(); // \GeminiCommerce\Order\Model\OrderReceiveFulfillmentRequest

try {
    $result = $apiInstance->receiveFulfillment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->receiveFulfillment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderReceiveFulfillmentRequest**](../Model/OrderReceiveFulfillmentRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFulfillmentError()`

```php
reportFulfillmentError($body): object
```

Report Fulfillment Error

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderReportFulfillmentErrorRequest(); // \GeminiCommerce\Order\Model\OrderReportFulfillmentErrorRequest

try {
    $result = $apiInstance->reportFulfillmentError($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->reportFulfillmentError: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderReportFulfillmentErrorRequest**](../Model/OrderReportFulfillmentErrorRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFulfillmentNotResolvable()`

```php
reportFulfillmentNotResolvable($body): object
```

Report Fulfillment Not Resolvable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderReportFulfillmentNotResolvableRequest(); // \GeminiCommerce\Order\Model\OrderReportFulfillmentNotResolvableRequest

try {
    $result = $apiInstance->reportFulfillmentNotResolvable($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->reportFulfillmentNotResolvable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderReportFulfillmentNotResolvableRequest**](../Model/OrderReportFulfillmentNotResolvableRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFulfillmentReady()`

```php
reportFulfillmentReady($body): object
```

Report Fulfillment Ready

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderReportFulfillmentReadyRequest(); // \GeminiCommerce\Order\Model\OrderReportFulfillmentReadyRequest

try {
    $result = $apiInstance->reportFulfillmentReady($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->reportFulfillmentReady: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderReportFulfillmentReadyRequest**](../Model/OrderReportFulfillmentReadyRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportShipmentDelivery()`

```php
reportShipmentDelivery($body): object
```

Report Shipment Delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderReportShipmentDeliveryRequest(); // \GeminiCommerce\Order\Model\OrderReportShipmentDeliveryRequest

try {
    $result = $apiInstance->reportShipmentDelivery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->reportShipmentDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderReportShipmentDeliveryRequest**](../Model/OrderReportShipmentDeliveryRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportShipmentMissingStock()`

```php
reportShipmentMissingStock($body): object
```

Report Shipment Missing Stock

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderReportShipmentMissingStockRequest(); // \GeminiCommerce\Order\Model\OrderReportShipmentMissingStockRequest

try {
    $result = $apiInstance->reportShipmentMissingStock($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->reportShipmentMissingStock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderReportShipmentMissingStockRequest**](../Model/OrderReportShipmentMissingStockRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resolveShipmentMissingStock()`

```php
resolveShipmentMissingStock($body): object
```

Resolve Shipment Missing Stock

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderResolveShipmentMissingStockRequest(); // \GeminiCommerce\Order\Model\OrderResolveShipmentMissingStockRequest

try {
    $result = $apiInstance->resolveShipmentMissingStock($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->resolveShipmentMissingStock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderResolveShipmentMissingStockRequest**](../Model/OrderResolveShipmentMissingStockRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryFulfillment()`

```php
retryFulfillment($body): object
```

Retry Fulfillment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderRetryFulfillmentRequest(); // \GeminiCommerce\Order\Model\OrderRetryFulfillmentRequest

try {
    $result = $apiInstance->retryFulfillment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->retryFulfillment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderRetryFulfillmentRequest**](../Model/OrderRetryFulfillmentRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchOrders()`

```php
searchOrders($body): \GeminiCommerce\Order\Model\OrderSearchOrdersResponse
```

Search Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderSearchOrdersRequest(); // \GeminiCommerce\Order\Model\OrderSearchOrdersRequest

try {
    $result = $apiInstance->searchOrders($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->searchOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderSearchOrdersRequest**](../Model/OrderSearchOrdersRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderSearchOrdersResponse**](../Model/OrderSearchOrdersResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendFulfillment()`

```php
sendFulfillment($body): object
```

Send Fulfillment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderSendFulfillmentRequest(); // \GeminiCommerce\Order\Model\OrderSendFulfillmentRequest

try {
    $result = $apiInstance->sendFulfillment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->sendFulfillment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderSendFulfillmentRequest**](../Model/OrderSendFulfillmentRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendOrderNotification()`

```php
sendOrderNotification($body): object
```

Send Order Notification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderSendOrderNotificationRequest(); // \GeminiCommerce\Order\Model\OrderSendOrderNotificationRequest

try {
    $result = $apiInstance->sendOrderNotification($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->sendOrderNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderSendOrderNotificationRequest**](../Model/OrderSendOrderNotificationRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startFulfillmentProcessing()`

```php
startFulfillmentProcessing($body): object
```

Start Fulfillment Processing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderStartFulfillmentProcessingRequest(); // \GeminiCommerce\Order\Model\OrderStartFulfillmentProcessingRequest

try {
    $result = $apiInstance->startFulfillmentProcessing($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->startFulfillmentProcessing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderStartFulfillmentProcessingRequest**](../Model/OrderStartFulfillmentProcessingRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startShipmentProcessing()`

```php
startShipmentProcessing($body): object
```

Start Shipment Processing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderStartShipmentProcessingRequest(); // \GeminiCommerce\Order\Model\OrderStartShipmentProcessingRequest

try {
    $result = $apiInstance->startShipmentProcessing($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->startShipmentProcessing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderStartShipmentProcessingRequest**](../Model/OrderStartShipmentProcessingRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unholdOrder()`

```php
unholdOrder($body): object
```

Unhold Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderUnholdOrderRequest(); // \GeminiCommerce\Order\Model\OrderUnholdOrderRequest

try {
    $result = $apiInstance->unholdOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->unholdOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderUnholdOrderRequest**](../Model/OrderUnholdOrderRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($body): \GeminiCommerce\Order\Model\OrderOrderData
```

Update Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderUpdateOrderRequest(); // \GeminiCommerce\Order\Model\OrderUpdateOrderRequest

try {
    $result = $apiInstance->updateOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderUpdateOrderRequest**](../Model/OrderUpdateOrderRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderOrderData**](../Model/OrderOrderData.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePayment()`

```php
updatePayment($body): \GeminiCommerce\Order\Model\OrderPayment
```

Update Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Order\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Order\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Order\Model\OrderUpdatePaymentRequest(); // \GeminiCommerce\Order\Model\OrderUpdatePaymentRequest

try {
    $result = $apiInstance->updatePayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updatePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Order\Model\OrderUpdatePaymentRequest**](../Model/OrderUpdatePaymentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Order\Model\OrderPayment**](../Model/OrderPayment.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
