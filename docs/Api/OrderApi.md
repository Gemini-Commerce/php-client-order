# OpenAPI\Client\OrderApi

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderApproveOrderRequest(); // \OpenAPI\Client\Model\OrderApproveOrderRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderApproveOrderRequest**](../Model/OrderApproveOrderRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderAssignShipmentRequest(); // \OpenAPI\Client\Model\OrderAssignShipmentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderAssignShipmentRequest**](../Model/OrderAssignShipmentRequest.md)|  | |

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
calculateRefund($body): \OpenAPI\Client\Model\OrderCalculateRefundResponse
```

Calculate Refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCalculateRefundRequest(); // \OpenAPI\Client\Model\OrderCalculateRefundRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCalculateRefundRequest**](../Model/OrderCalculateRefundRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderCalculateRefundResponse**](../Model/OrderCalculateRefundResponse.md)

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCancelFulfillmentRequest(); // \OpenAPI\Client\Model\OrderCancelFulfillmentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCancelFulfillmentRequest**](../Model/OrderCancelFulfillmentRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCancelOrderRequest(); // \OpenAPI\Client\Model\OrderCancelOrderRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCancelOrderRequest**](../Model/OrderCancelOrderRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCancelShipmentRequest(); // \OpenAPI\Client\Model\OrderCancelShipmentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCancelShipmentRequest**](../Model/OrderCancelShipmentRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCompleteShipmentPackingRequest(); // \OpenAPI\Client\Model\OrderCompleteShipmentPackingRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCompleteShipmentPackingRequest**](../Model/OrderCompleteShipmentPackingRequest.md)|  | |

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
createFulfillment($body): \OpenAPI\Client\Model\OrderFulfillment
```

Create Fulfillment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCreateFulfillmentRequest(); // \OpenAPI\Client\Model\OrderCreateFulfillmentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCreateFulfillmentRequest**](../Model/OrderCreateFulfillmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderFulfillment**](../Model/OrderFulfillment.md)

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
createOrder($body): \OpenAPI\Client\Model\OrderOrderData
```

Create Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCreateOrderRequest(); // \OpenAPI\Client\Model\OrderCreateOrderRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCreateOrderRequest**](../Model/OrderCreateOrderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderData**](../Model/OrderOrderData.md)

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
createOrderHistory($body): \OpenAPI\Client\Model\OrderDataHistory
```

Create Order History

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCreateHistoryRequest(); // \OpenAPI\Client\Model\OrderCreateHistoryRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCreateHistoryRequest**](../Model/OrderCreateHistoryRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderDataHistory**](../Model/OrderDataHistory.md)

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
createPayment($body): \OpenAPI\Client\Model\OrderPayment
```

Create Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCreatePaymentRequest(); // \OpenAPI\Client\Model\OrderCreatePaymentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCreatePaymentRequest**](../Model/OrderCreatePaymentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderPayment**](../Model/OrderPayment.md)

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
createPaymentTransaction($body): \OpenAPI\Client\Model\OrderTransaction
```

Create Payment Transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCreatePaymentTransactionRequest(); // \OpenAPI\Client\Model\OrderCreatePaymentTransactionRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCreatePaymentTransactionRequest**](../Model/OrderCreatePaymentTransactionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderTransaction**](../Model/OrderTransaction.md)

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
createRefund($body): \OpenAPI\Client\Model\OrderRefund
```

Create Refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCreateRefundRequest(); // \OpenAPI\Client\Model\OrderCreateRefundRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCreateRefundRequest**](../Model/OrderCreateRefundRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderRefund**](../Model/OrderRefund.md)

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
createRefundTransaction($body): \OpenAPI\Client\Model\OrderTransaction
```

Create Refund Transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCreateRefundTransactionRequest(); // \OpenAPI\Client\Model\OrderCreateRefundTransactionRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCreateRefundTransactionRequest**](../Model/OrderCreateRefundTransactionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderTransaction**](../Model/OrderTransaction.md)

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
createShipment($body): \OpenAPI\Client\Model\OrderShipment
```

Create Shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCreateShipmentRequest(); // \OpenAPI\Client\Model\OrderCreateShipmentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderCreateShipmentRequest**](../Model/OrderCreateShipmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderShipment**](../Model/OrderShipment.md)

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderDeleteOrderRequest(); // \OpenAPI\Client\Model\OrderDeleteOrderRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderDeleteOrderRequest**](../Model/OrderDeleteOrderRequest.md)|  | |

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
getFulfillment($body): \OpenAPI\Client\Model\OrderFulfillment
```

Get Fulfillment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderGetFulfillmentRequest(); // \OpenAPI\Client\Model\OrderGetFulfillmentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderGetFulfillmentRequest**](../Model/OrderGetFulfillmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderFulfillment**](../Model/OrderFulfillment.md)

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
getOrder($body): \OpenAPI\Client\Model\OrderOrderData
```

Get Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderGetOrderRequest(); // \OpenAPI\Client\Model\OrderGetOrderRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderGetOrderRequest**](../Model/OrderGetOrderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderData**](../Model/OrderOrderData.md)

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
getOrderByCartId($body): \OpenAPI\Client\Model\OrderOrderData
```

Get Order by Cart ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderGetOrderByCartIdRequest(); // \OpenAPI\Client\Model\OrderGetOrderByCartIdRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderGetOrderByCartIdRequest**](../Model/OrderGetOrderByCartIdRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderData**](../Model/OrderOrderData.md)

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
getOrderByOrderNumber($body): \OpenAPI\Client\Model\OrderOrderData
```

Get Order by Order Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderGetOrderByOrderNumberRequest(); // \OpenAPI\Client\Model\OrderGetOrderByOrderNumberRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderGetOrderByOrderNumberRequest**](../Model/OrderGetOrderByOrderNumberRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderData**](../Model/OrderOrderData.md)

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
getPayment($body): \OpenAPI\Client\Model\OrderPayment
```

Get Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderGetPaymentRequest(); // \OpenAPI\Client\Model\OrderGetPaymentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderGetPaymentRequest**](../Model/OrderGetPaymentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderPayment**](../Model/OrderPayment.md)

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
getShipment($body): \OpenAPI\Client\Model\OrderShipment
```

Get Shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderGetShipmentRequest(); // \OpenAPI\Client\Model\OrderGetShipmentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderGetShipmentRequest**](../Model/OrderGetShipmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderShipment**](../Model/OrderShipment.md)

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
getTransaction($body): \OpenAPI\Client\Model\OrderTransaction
```

Get Transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderGetTransactionRequest(); // \OpenAPI\Client\Model\OrderGetTransactionRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderGetTransactionRequest**](../Model/OrderGetTransactionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderTransaction**](../Model/OrderTransaction.md)

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderHoldOrderRequest(); // \OpenAPI\Client\Model\OrderHoldOrderRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderHoldOrderRequest**](../Model/OrderHoldOrderRequest.md)|  | |

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
importOrder($body): \OpenAPI\Client\Model\OrderOrderData
```

Import Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderImportOrderRequest(); // \OpenAPI\Client\Model\OrderImportOrderRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderImportOrderRequest**](../Model/OrderImportOrderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderData**](../Model/OrderOrderData.md)

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
listFulfillments($body): \OpenAPI\Client\Model\OrderListFulfillmentsResponse
```

List Fulfillments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderListFulfillmentsRequest(); // \OpenAPI\Client\Model\OrderListFulfillmentsRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderListFulfillmentsRequest**](../Model/OrderListFulfillmentsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderListFulfillmentsResponse**](../Model/OrderListFulfillmentsResponse.md)

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
listOrders($body): \OpenAPI\Client\Model\OrderListOrdersResponse
```

List Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderListOrdersRequest(); // \OpenAPI\Client\Model\OrderListOrdersRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderListOrdersRequest**](../Model/OrderListOrdersRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderListOrdersResponse**](../Model/OrderListOrdersResponse.md)

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
listOrdersByCustomer($body): \OpenAPI\Client\Model\OrderListOrdersByCustomerResponse
```

List Orders by Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderListOrdersByCustomerRequest(); // \OpenAPI\Client\Model\OrderListOrdersByCustomerRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderListOrdersByCustomerRequest**](../Model/OrderListOrdersByCustomerRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderListOrdersByCustomerResponse**](../Model/OrderListOrdersByCustomerResponse.md)

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
listOrdersByNumbers($body): \OpenAPI\Client\Model\OrderListOrdersByNumbersResponse
```

List Orders by Numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderListOrdersByNumbersRequest(); // \OpenAPI\Client\Model\OrderListOrdersByNumbersRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderListOrdersByNumbersRequest**](../Model/OrderListOrdersByNumbersRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderListOrdersByNumbersResponse**](../Model/OrderListOrdersByNumbersResponse.md)

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
listShipments($body): \OpenAPI\Client\Model\OrderListShipmentsResponse
```

List Shipments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderListShipmentsRequest(); // \OpenAPI\Client\Model\OrderListShipmentsRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderListShipmentsRequest**](../Model/OrderListShipmentsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderListShipmentsResponse**](../Model/OrderListShipmentsResponse.md)

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderAddDocumentRequest(); // \OpenAPI\Client\Model\OrderAddDocumentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderAddDocumentRequest**](../Model/OrderAddDocumentRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderRemoveDocumentByCodeRequest(); // \OpenAPI\Client\Model\OrderRemoveDocumentByCodeRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderRemoveDocumentByCodeRequest**](../Model/OrderRemoveDocumentByCodeRequest.md)|  | |

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
printOrdersLabels($body): \OpenAPI\Client\Model\OrderPrintOrdersLabelsResponse
```

Print Orders Labels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderPrintOrdersLabelsRequest(); // \OpenAPI\Client\Model\OrderPrintOrdersLabelsRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderPrintOrdersLabelsRequest**](../Model/OrderPrintOrdersLabelsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderPrintOrdersLabelsResponse**](../Model/OrderPrintOrdersLabelsResponse.md)

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderQuashFulfillmentRequest(); // \OpenAPI\Client\Model\OrderQuashFulfillmentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderQuashFulfillmentRequest**](../Model/OrderQuashFulfillmentRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderQuashShipmentRequest(); // \OpenAPI\Client\Model\OrderQuashShipmentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderQuashShipmentRequest**](../Model/OrderQuashShipmentRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderReceiveFulfillmentRequest(); // \OpenAPI\Client\Model\OrderReceiveFulfillmentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderReceiveFulfillmentRequest**](../Model/OrderReceiveFulfillmentRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderReportFulfillmentErrorRequest(); // \OpenAPI\Client\Model\OrderReportFulfillmentErrorRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderReportFulfillmentErrorRequest**](../Model/OrderReportFulfillmentErrorRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderReportFulfillmentNotResolvableRequest(); // \OpenAPI\Client\Model\OrderReportFulfillmentNotResolvableRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderReportFulfillmentNotResolvableRequest**](../Model/OrderReportFulfillmentNotResolvableRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderReportFulfillmentReadyRequest(); // \OpenAPI\Client\Model\OrderReportFulfillmentReadyRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderReportFulfillmentReadyRequest**](../Model/OrderReportFulfillmentReadyRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderReportShipmentDeliveryRequest(); // \OpenAPI\Client\Model\OrderReportShipmentDeliveryRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderReportShipmentDeliveryRequest**](../Model/OrderReportShipmentDeliveryRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderReportShipmentMissingStockRequest(); // \OpenAPI\Client\Model\OrderReportShipmentMissingStockRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderReportShipmentMissingStockRequest**](../Model/OrderReportShipmentMissingStockRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderResolveShipmentMissingStockRequest(); // \OpenAPI\Client\Model\OrderResolveShipmentMissingStockRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderResolveShipmentMissingStockRequest**](../Model/OrderResolveShipmentMissingStockRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderRetryFulfillmentRequest(); // \OpenAPI\Client\Model\OrderRetryFulfillmentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderRetryFulfillmentRequest**](../Model/OrderRetryFulfillmentRequest.md)|  | |

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
searchOrders($body): \OpenAPI\Client\Model\OrderSearchOrdersResponse
```

Search Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderSearchOrdersRequest(); // \OpenAPI\Client\Model\OrderSearchOrdersRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderSearchOrdersRequest**](../Model/OrderSearchOrdersRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderSearchOrdersResponse**](../Model/OrderSearchOrdersResponse.md)

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderSendFulfillmentRequest(); // \OpenAPI\Client\Model\OrderSendFulfillmentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderSendFulfillmentRequest**](../Model/OrderSendFulfillmentRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderSendOrderNotificationRequest(); // \OpenAPI\Client\Model\OrderSendOrderNotificationRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderSendOrderNotificationRequest**](../Model/OrderSendOrderNotificationRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderStartFulfillmentProcessingRequest(); // \OpenAPI\Client\Model\OrderStartFulfillmentProcessingRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderStartFulfillmentProcessingRequest**](../Model/OrderStartFulfillmentProcessingRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderStartShipmentProcessingRequest(); // \OpenAPI\Client\Model\OrderStartShipmentProcessingRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderStartShipmentProcessingRequest**](../Model/OrderStartShipmentProcessingRequest.md)|  | |

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderUnholdOrderRequest(); // \OpenAPI\Client\Model\OrderUnholdOrderRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderUnholdOrderRequest**](../Model/OrderUnholdOrderRequest.md)|  | |

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
updateOrder($body): \OpenAPI\Client\Model\OrderOrderData
```

Update Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderUpdateOrderRequest(); // \OpenAPI\Client\Model\OrderUpdateOrderRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderUpdateOrderRequest**](../Model/OrderUpdateOrderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderData**](../Model/OrderOrderData.md)

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
updatePayment($body): \OpenAPI\Client\Model\OrderPayment
```

Update Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderUpdatePaymentRequest(); // \OpenAPI\Client\Model\OrderUpdatePaymentRequest

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
| **body** | [**\OpenAPI\Client\Model\OrderUpdatePaymentRequest**](../Model/OrderUpdatePaymentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderPayment**](../Model/OrderPayment.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
