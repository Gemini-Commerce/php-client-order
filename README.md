# order

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Gemini-Commerce/php-client-order.git"
    }
  ],
  "require": {
    "Gemini-Commerce/php-client-order": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/order/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




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

## API Endpoints

All URIs are relative to *https://dom.api.gogemini.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderApi* | [**approveOrder**](docs/Api/OrderApi.md#approveorder) | **POST** /order.Order/ApproveOrder | Approve Order
*OrderApi* | [**assignShipment**](docs/Api/OrderApi.md#assignshipment) | **POST** /order.Order/AssignShipment | Assign Shipment
*OrderApi* | [**calculateRefund**](docs/Api/OrderApi.md#calculaterefund) | **POST** /order.Order/CalculateRefund | Calculate Refund
*OrderApi* | [**cancelFulfillment**](docs/Api/OrderApi.md#cancelfulfillment) | **POST** /order.Order/CancelFulfillment | Cancel Fulfillment
*OrderApi* | [**cancelOrder**](docs/Api/OrderApi.md#cancelorder) | **POST** /order.Order/CancelOrder | Cancel Order
*OrderApi* | [**cancelShipment**](docs/Api/OrderApi.md#cancelshipment) | **POST** /order.Order/CancelShipment | Cancel Shipment
*OrderApi* | [**completeShipmentPacking**](docs/Api/OrderApi.md#completeshipmentpacking) | **POST** /order.Order/CompleteShipmentPacking | Complete Shipment Packing
*OrderApi* | [**createFulfillment**](docs/Api/OrderApi.md#createfulfillment) | **POST** /order.Order/CreateFulfillment | Create Fulfillment
*OrderApi* | [**createOrder**](docs/Api/OrderApi.md#createorder) | **POST** /order.Order/CreateOrder | Create Order
*OrderApi* | [**createOrderHistory**](docs/Api/OrderApi.md#createorderhistory) | **POST** /order.Order/CreateHistory | Create Order History
*OrderApi* | [**createPayment**](docs/Api/OrderApi.md#createpayment) | **POST** /order.Order/CreatePayment | Create Payment
*OrderApi* | [**createPaymentTransaction**](docs/Api/OrderApi.md#createpaymenttransaction) | **POST** /order.Order/CreatePaymentTransaction | Create Payment Transaction
*OrderApi* | [**createRefund**](docs/Api/OrderApi.md#createrefund) | **POST** /order.Order/CreateRefund | Create Refund
*OrderApi* | [**createRefundTransaction**](docs/Api/OrderApi.md#createrefundtransaction) | **POST** /order.Order/CreateRefundTransaction | Create Refund Transaction
*OrderApi* | [**createShipment**](docs/Api/OrderApi.md#createshipment) | **POST** /order.Order/CreateShipment | Create Shipment
*OrderApi* | [**deleteOrder**](docs/Api/OrderApi.md#deleteorder) | **POST** /order.Order/DeleteOrder | Delete Order
*OrderApi* | [**getFulfillment**](docs/Api/OrderApi.md#getfulfillment) | **POST** /order.Order/GetFulfillment | Get Fulfillment
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **POST** /order.Order/GetOrder | Get Order
*OrderApi* | [**getOrderByCartId**](docs/Api/OrderApi.md#getorderbycartid) | **POST** /order.Order/GetOrderByCartId | Get Order by Cart ID
*OrderApi* | [**getOrderByOrderNumber**](docs/Api/OrderApi.md#getorderbyordernumber) | **POST** /order.Order/GetOrderByOrderNumber | Get Order by Order Number
*OrderApi* | [**getPayment**](docs/Api/OrderApi.md#getpayment) | **POST** /order.Order/GetPayment | Get Payment
*OrderApi* | [**getShipment**](docs/Api/OrderApi.md#getshipment) | **POST** /order.Order/GetShipment | Get Shipment
*OrderApi* | [**getTransaction**](docs/Api/OrderApi.md#gettransaction) | **POST** /order.Order/GetTransaction | Get Transaction
*OrderApi* | [**holdOrder**](docs/Api/OrderApi.md#holdorder) | **POST** /order.Order/HoldOrder | Hold Order
*OrderApi* | [**importOrder**](docs/Api/OrderApi.md#importorder) | **POST** /order.Order/ImportOrder | Import Order
*OrderApi* | [**listFulfillments**](docs/Api/OrderApi.md#listfulfillments) | **POST** /order.Order/ListFulfillments | List Fulfillments
*OrderApi* | [**listOrders**](docs/Api/OrderApi.md#listorders) | **POST** /order.Order/ListOrders | List Orders
*OrderApi* | [**listOrdersByCustomer**](docs/Api/OrderApi.md#listordersbycustomer) | **POST** /order.Order/ListOrdersByCustomer | List Orders by Customer
*OrderApi* | [**listOrdersByNumbers**](docs/Api/OrderApi.md#listordersbynumbers) | **POST** /order.Order/ListOrdersByNumbers | List Orders by Numbers
*OrderApi* | [**listShipments**](docs/Api/OrderApi.md#listshipments) | **POST** /order.Order/ListShipments | List Shipments
*OrderApi* | [**printOrdersLabels**](docs/Api/OrderApi.md#printorderslabels) | **POST** /order.Order/PrintOrdersLabels | Print Orders Labels
*OrderApi* | [**quashFulfillment**](docs/Api/OrderApi.md#quashfulfillment) | **POST** /order.Order/QuashFulfillment | Quash Fulfillment
*OrderApi* | [**quashShipment**](docs/Api/OrderApi.md#quashshipment) | **POST** /order.Order/QuashShipment | Quash Shipment
*OrderApi* | [**receiveFulfillment**](docs/Api/OrderApi.md#receivefulfillment) | **POST** /order.Order/ReceiveFulfillment | Receive Fulfillment
*OrderApi* | [**reportFulfillmentError**](docs/Api/OrderApi.md#reportfulfillmenterror) | **POST** /order.Order/ReportFulfillmentError | Report Fulfillment Error
*OrderApi* | [**reportFulfillmentNotResolvable**](docs/Api/OrderApi.md#reportfulfillmentnotresolvable) | **POST** /order.Order/ReportFulfillmentNotResolvable | Report Fulfillment Not Resolvable
*OrderApi* | [**reportFulfillmentReady**](docs/Api/OrderApi.md#reportfulfillmentready) | **POST** /order.Order/ReportFulfillmentReady | Report Fulfillment Ready
*OrderApi* | [**reportShipmentDelivery**](docs/Api/OrderApi.md#reportshipmentdelivery) | **POST** /order.Order/ReportShipmentDelivery | Report Shipment Delivery
*OrderApi* | [**reportShipmentMissingStock**](docs/Api/OrderApi.md#reportshipmentmissingstock) | **POST** /order.Order/ReportShipmentMissingStock | Report Shipment Missing Stock
*OrderApi* | [**resolveShipmentMissingStock**](docs/Api/OrderApi.md#resolveshipmentmissingstock) | **POST** /order.Order/ResolveShipmentMissingStock | Resolve Shipment Missing Stock
*OrderApi* | [**retryFulfillment**](docs/Api/OrderApi.md#retryfulfillment) | **POST** /order.Order/RetryFulfillment | Retry Fulfillment
*OrderApi* | [**searchOrders**](docs/Api/OrderApi.md#searchorders) | **POST** /order.Order/SearchOrders | Search Orders
*OrderApi* | [**sendFulfillment**](docs/Api/OrderApi.md#sendfulfillment) | **POST** /order.Order/SendFulfillment | Send Fulfillment
*OrderApi* | [**sendOrderNotification**](docs/Api/OrderApi.md#sendordernotification) | **POST** /order.Order/SendOrderNotification | Send Order Notification
*OrderApi* | [**startFulfillmentProcessing**](docs/Api/OrderApi.md#startfulfillmentprocessing) | **POST** /order.Order/StartFulfillmentProcessing | Start Fulfillment Processing
*OrderApi* | [**startShipmentProcessing**](docs/Api/OrderApi.md#startshipmentprocessing) | **POST** /order.Order/StartShipmentProcessing | Start Shipment Processing
*OrderApi* | [**unholdOrder**](docs/Api/OrderApi.md#unholdorder) | **POST** /order.Order/UnholdOrder | Unhold Order
*OrderApi* | [**updateOrder**](docs/Api/OrderApi.md#updateorder) | **POST** /order.Order/UpdateOrder | Update Order
*OrderApi* | [**updatePayment**](docs/Api/OrderApi.md#updatepayment) | **POST** /order.Order/UpdatePayment | Update Payment

## Models

- [CreateOrderRequestInitialPayment](docs/Model/CreateOrderRequestInitialPayment.md)
- [ImportOrderRequestImportedPayment](docs/Model/ImportOrderRequestImportedPayment.md)
- [InitialPaymentInitialTransaction](docs/Model/InitialPaymentInitialTransaction.md)
- [OrderApproveOrderRequest](docs/Model/OrderApproveOrderRequest.md)
- [OrderAssignShipmentRequest](docs/Model/OrderAssignShipmentRequest.md)
- [OrderByDirection](docs/Model/OrderByDirection.md)
- [OrderCalculateRefundRequest](docs/Model/OrderCalculateRefundRequest.md)
- [OrderCalculateRefundResponse](docs/Model/OrderCalculateRefundResponse.md)
- [OrderCancelFulfillmentRequest](docs/Model/OrderCancelFulfillmentRequest.md)
- [OrderCancelOrderRequest](docs/Model/OrderCancelOrderRequest.md)
- [OrderCancelShipmentRequest](docs/Model/OrderCancelShipmentRequest.md)
- [OrderCompleteShipmentPackingRequest](docs/Model/OrderCompleteShipmentPackingRequest.md)
- [OrderCreateFulfillmentRequest](docs/Model/OrderCreateFulfillmentRequest.md)
- [OrderCreateHistoryRequest](docs/Model/OrderCreateHistoryRequest.md)
- [OrderCreateOrderRequest](docs/Model/OrderCreateOrderRequest.md)
- [OrderCreatePaymentRequest](docs/Model/OrderCreatePaymentRequest.md)
- [OrderCreatePaymentTransactionRequest](docs/Model/OrderCreatePaymentTransactionRequest.md)
- [OrderCreateRefundRequest](docs/Model/OrderCreateRefundRequest.md)
- [OrderCreateRefundTransactionRequest](docs/Model/OrderCreateRefundTransactionRequest.md)
- [OrderCreateShipmentRequest](docs/Model/OrderCreateShipmentRequest.md)
- [OrderCurrency](docs/Model/OrderCurrency.md)
- [OrderDataCustomerInfo](docs/Model/OrderDataCustomerInfo.md)
- [OrderDataHistory](docs/Model/OrderDataHistory.md)
- [OrderDataPaymentInfo](docs/Model/OrderDataPaymentInfo.md)
- [OrderDataPromotionInfo](docs/Model/OrderDataPromotionInfo.md)
- [OrderDataShipmentInfo](docs/Model/OrderDataShipmentInfo.md)
- [OrderDataSubtotal](docs/Model/OrderDataSubtotal.md)
- [OrderDataSubtotalCode](docs/Model/OrderDataSubtotalCode.md)
- [OrderDataTotal](docs/Model/OrderDataTotal.md)
- [OrderDataTotalCode](docs/Model/OrderDataTotalCode.md)
- [OrderDeleteOrderRequest](docs/Model/OrderDeleteOrderRequest.md)
- [OrderFulfillment](docs/Model/OrderFulfillment.md)
- [OrderFulfillmentItem](docs/Model/OrderFulfillmentItem.md)
- [OrderGetFulfillmentRequest](docs/Model/OrderGetFulfillmentRequest.md)
- [OrderGetOrderByCartIdRequest](docs/Model/OrderGetOrderByCartIdRequest.md)
- [OrderGetOrderByOrderNumberRequest](docs/Model/OrderGetOrderByOrderNumberRequest.md)
- [OrderGetOrderRequest](docs/Model/OrderGetOrderRequest.md)
- [OrderGetPaymentRequest](docs/Model/OrderGetPaymentRequest.md)
- [OrderGetShipmentRequest](docs/Model/OrderGetShipmentRequest.md)
- [OrderGetTransactionRequest](docs/Model/OrderGetTransactionRequest.md)
- [OrderHoldOrderRequest](docs/Model/OrderHoldOrderRequest.md)
- [OrderImportOrderRequest](docs/Model/OrderImportOrderRequest.md)
- [OrderListFulfillmentsRequest](docs/Model/OrderListFulfillmentsRequest.md)
- [OrderListFulfillmentsResponse](docs/Model/OrderListFulfillmentsResponse.md)
- [OrderListOrdersByCustomerRequest](docs/Model/OrderListOrdersByCustomerRequest.md)
- [OrderListOrdersByCustomerResponse](docs/Model/OrderListOrdersByCustomerResponse.md)
- [OrderListOrdersByNumbersRequest](docs/Model/OrderListOrdersByNumbersRequest.md)
- [OrderListOrdersByNumbersResponse](docs/Model/OrderListOrdersByNumbersResponse.md)
- [OrderListOrdersRequest](docs/Model/OrderListOrdersRequest.md)
- [OrderListOrdersResponse](docs/Model/OrderListOrdersResponse.md)
- [OrderListShipmentsRequest](docs/Model/OrderListShipmentsRequest.md)
- [OrderListShipmentsResponse](docs/Model/OrderListShipmentsResponse.md)
- [OrderLocalizedText](docs/Model/OrderLocalizedText.md)
- [OrderMoney](docs/Model/OrderMoney.md)
- [OrderOrderBy](docs/Model/OrderOrderBy.md)
- [OrderOrderData](docs/Model/OrderOrderData.md)
- [OrderOrderDataItem](docs/Model/OrderOrderDataItem.md)
- [OrderPayment](docs/Model/OrderPayment.md)
- [OrderPaymentAmount](docs/Model/OrderPaymentAmount.md)
- [OrderPaymentAmountCode](docs/Model/OrderPaymentAmountCode.md)
- [OrderPaymentFilter](docs/Model/OrderPaymentFilter.md)
- [OrderPaymentFilterCondition](docs/Model/OrderPaymentFilterCondition.md)
- [OrderPostalAddress](docs/Model/OrderPostalAddress.md)
- [OrderPrintOrdersLabelsRequest](docs/Model/OrderPrintOrdersLabelsRequest.md)
- [OrderPrintOrdersLabelsResponse](docs/Model/OrderPrintOrdersLabelsResponse.md)
- [OrderQuashFulfillmentRequest](docs/Model/OrderQuashFulfillmentRequest.md)
- [OrderQuashShipmentRequest](docs/Model/OrderQuashShipmentRequest.md)
- [OrderReceiveFulfillmentRequest](docs/Model/OrderReceiveFulfillmentRequest.md)
- [OrderRefund](docs/Model/OrderRefund.md)
- [OrderRefundAmount](docs/Model/OrderRefundAmount.md)
- [OrderRefundAmountCode](docs/Model/OrderRefundAmountCode.md)
- [OrderRefundItem](docs/Model/OrderRefundItem.md)
- [OrderReportFulfillmentErrorRequest](docs/Model/OrderReportFulfillmentErrorRequest.md)
- [OrderReportFulfillmentNotResolvableRequest](docs/Model/OrderReportFulfillmentNotResolvableRequest.md)
- [OrderReportFulfillmentReadyRequest](docs/Model/OrderReportFulfillmentReadyRequest.md)
- [OrderReportShipmentDeliveryRequest](docs/Model/OrderReportShipmentDeliveryRequest.md)
- [OrderReportShipmentMissingStockRequest](docs/Model/OrderReportShipmentMissingStockRequest.md)
- [OrderResolveShipmentMissingStockRequest](docs/Model/OrderResolveShipmentMissingStockRequest.md)
- [OrderRetryFulfillmentRequest](docs/Model/OrderRetryFulfillmentRequest.md)
- [OrderSearchOrdersRequest](docs/Model/OrderSearchOrdersRequest.md)
- [OrderSearchOrdersResponse](docs/Model/OrderSearchOrdersResponse.md)
- [OrderSendFulfillmentRequest](docs/Model/OrderSendFulfillmentRequest.md)
- [OrderSendOrderNotificationRequest](docs/Model/OrderSendOrderNotificationRequest.md)
- [OrderShipment](docs/Model/OrderShipment.md)
- [OrderShipmentItem](docs/Model/OrderShipmentItem.md)
- [OrderStartFulfillmentProcessingRequest](docs/Model/OrderStartFulfillmentProcessingRequest.md)
- [OrderStartShipmentProcessingRequest](docs/Model/OrderStartShipmentProcessingRequest.md)
- [OrderStatusFilter](docs/Model/OrderStatusFilter.md)
- [OrderStatusFilterCondition](docs/Model/OrderStatusFilterCondition.md)
- [OrderTransaction](docs/Model/OrderTransaction.md)
- [OrderTransactionType](docs/Model/OrderTransactionType.md)
- [OrderUnholdOrderRequest](docs/Model/OrderUnholdOrderRequest.md)
- [OrderUpdateOrderRequest](docs/Model/OrderUpdateOrderRequest.md)
- [OrderUpdatePaymentRequest](docs/Model/OrderUpdatePaymentRequest.md)
- [PaymentCcInfo](docs/Model/PaymentCcInfo.md)
- [PrintOrdersLabelsResponseFailedOrder](docs/Model/PrintOrdersLabelsResponseFailedOrder.md)
- [ProtobufAny](docs/Model/ProtobufAny.md)
- [ProtobufNullValue](docs/Model/ProtobufNullValue.md)
- [RpcStatus](docs/Model/RpcStatus.md)
- [ShipmentTracking](docs/Model/ShipmentTracking.md)
- [UpdateOrderRequestPayload](docs/Model/UpdateOrderRequestPayload.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@gemini-commerce.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
    - Package version: `1.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
