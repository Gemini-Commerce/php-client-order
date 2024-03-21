# # OrderImportOrderRequest


## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   |
**created_at**| **\DateTime** |   | [optional]
**number**| **string** |   |
**channel**| **string** |   | [optional]
**market**| **string** |   |
**locale**| **string** |   |
**customer_info**| [**\GeminiCommerce\Order\Model\OrderDataCustomerInfo**](OrderDataCustomerInfo.md) |   |
**shipping_address**| [**\GeminiCommerce\Order\Model\OrderPostalAddress**](OrderPostalAddress.md) |   |
**billing_address**| [**\GeminiCommerce\Order\Model\OrderPostalAddress**](OrderPostalAddress.md) |   |
**payments**| [**\GeminiCommerce\Order\Model\ImportOrderRequestImportedPayment[]**](ImportOrderRequestImportedPayment.md) |   |
**payments_info**| [**\GeminiCommerce\Order\Model\OrderDataPaymentInfo[]**](OrderDataPaymentInfo.md) |   |
**shipments_info**| [**\GeminiCommerce\Order\Model\OrderDataShipmentInfo[]**](OrderDataShipmentInfo.md) |   |
**items**| [**\GeminiCommerce\Order\Model\OrderOrderDataItem[]**](OrderOrderDataItem.md) |   |
**subtotals**| [**array<string,\GeminiCommerce\Order\Model\OrderDataSubtotal>**](OrderDataSubtotal.md) |   |
**totals**| [**array<string,\GeminiCommerce\Order\Model\OrderDataTotal>**](OrderDataTotal.md) |   |
**status**| **string** |   |
**currency**| [**\GeminiCommerce\Order\Model\OrderCurrency**](OrderCurrency.md) |  for more information please, see Model/OrderCurrency.php  |
**vat_included**| **bool** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

