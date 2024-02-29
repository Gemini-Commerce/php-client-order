# # OrderImportOrderRequest


## Properties


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   | [optional]
**created_at**| **\DateTime** |   | [optional]
**number**| **string** |   | [optional]
**channel**| **string** |   | [optional]
**market**| **string** |   | [optional]
**locale**| **string** |   | [optional]
**customer_info**| [**\GeminiCommerce\Order\Model\OrderDataCustomerInfo**](OrderDataCustomerInfo.md) |   | [optional]
**shipping_address**| [**\GeminiCommerce\Order\Model\OrderPostalAddress**](OrderPostalAddress.md) |   | [optional]
**billing_address**| [**\GeminiCommerce\Order\Model\OrderPostalAddress**](OrderPostalAddress.md) |   | [optional]
**payments**| [**\GeminiCommerce\Order\Model\ImportOrderRequestImportedPayment[]**](ImportOrderRequestImportedPayment.md) |   | [optional]
**payments_info**| [**\GeminiCommerce\Order\Model\OrderDataPaymentInfo[]**](OrderDataPaymentInfo.md) |   | [optional]
**shipments_info**| [**\GeminiCommerce\Order\Model\OrderDataShipmentInfo[]**](OrderDataShipmentInfo.md) |   | [optional]
**items**| [**\GeminiCommerce\Order\Model\OrderOrderDataItem[]**](OrderOrderDataItem.md) |   | [optional]
**subtotals**| [**array<string,\GeminiCommerce\Order\Model\OrderDataSubtotal>**](OrderDataSubtotal.md) |   | [optional]
**totals**| [**array<string,\GeminiCommerce\Order\Model\OrderDataTotal>**](OrderDataTotal.md) |   | [optional]
**status**| **string** |   | [optional]
**currency**| [**\GeminiCommerce\Order\Model\OrderCurrency**](OrderCurrency.md) |  for more information please, see Model/OrderCurrency.php  | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)