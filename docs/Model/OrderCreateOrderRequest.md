# # OrderCreateOrderRequest


## Properties


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   |
**number**| **string** |   |
**channel**| **string** |   | [optional]
**market**| **string** |   |
**locale**| **string** |   |
**items**| [**\GeminiCommerce\Order\Model\OrderOrderDataItem[]**](OrderOrderDataItem.md) |   |
**payments_info**| [**\GeminiCommerce\Order\Model\OrderDataPaymentInfo[]**](OrderDataPaymentInfo.md) |   | [optional]
**shipments_info**| [**\GeminiCommerce\Order\Model\OrderDataShipmentInfo[]**](OrderDataShipmentInfo.md) |   | [optional]
**promotions**| [**\GeminiCommerce\Order\Model\OrderDataPromotionInfo[]**](OrderDataPromotionInfo.md) |   | [optional]
**payments**| [**\GeminiCommerce\Order\Model\CreateOrderRequestInitialPayment[]**](CreateOrderRequestInitialPayment.md) |   | [optional]
**currency**| [**\GeminiCommerce\Order\Model\OrderCurrency**](OrderCurrency.md) |  for more information please, see Model/OrderCurrency.php  |
**subtotals**| [**array<string,\GeminiCommerce\Order\Model\OrderDataSubtotal>**](OrderDataSubtotal.md) |   |
**totals**| [**array<string,\GeminiCommerce\Order\Model\OrderDataTotal>**](OrderDataTotal.md) |   |
**vat_included**| **bool** |   |
**billing_address**| [**\GeminiCommerce\Order\Model\OrderPostalAddress**](OrderPostalAddress.md) |   |
**shipping_address**| [**\GeminiCommerce\Order\Model\OrderPostalAddress**](OrderPostalAddress.md) |   |
**customer_info**| [**\GeminiCommerce\Order\Model\OrderDataCustomerInfo**](OrderDataCustomerInfo.md) |   |
**cart_grn**| **string** |   | [optional]
**on_hold**| **bool** |   | [optional]
**notes**| **string** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)