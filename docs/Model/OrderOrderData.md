# # OrderOrderData


## Properties


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at**| **\DateTime** |   | [optional]
**updated_at**| **\DateTime** |   | [optional]
**id**| **string** |   | [optional]
**grn**| **string** |   | [optional]
**number**| **string** |   | [optional]
**status**| **string** |   | [optional]
**channel**| **string** |   | [optional]
**market**| **string** |   | [optional]
**locale**| **string** |   | [optional]
**additional_info**| **object** |   | [optional]
**items**| [**\GeminiCommerce\Order\Model\OrderOrderDataItem[]**](OrderOrderDataItem.md) |   | [optional]
**payments**| [**\GeminiCommerce\Order\Model\OrderPayment[]**](OrderPayment.md) |   | [optional]
**shipments**| [**\GeminiCommerce\Order\Model\OrderShipment[]**](OrderShipment.md) |   | [optional]
**payments_info**| [**\GeminiCommerce\Order\Model\OrderDataPaymentInfo[]**](OrderDataPaymentInfo.md) |   | [optional]
**shipments_info**| [**\GeminiCommerce\Order\Model\OrderDataShipmentInfo[]**](OrderDataShipmentInfo.md) |   | [optional]
**promotions**| [**\GeminiCommerce\Order\Model\OrderDataPromotionInfo[]**](OrderDataPromotionInfo.md) |   | [optional]
**currency**| [**\GeminiCommerce\Order\Model\OrderCurrency**](OrderCurrency.md) |  for more information please, see Model/OrderCurrency.php  | [optional]
**subtotals**| [**array<string,\GeminiCommerce\Order\Model\OrderDataSubtotal>**](OrderDataSubtotal.md) |   | [optional]
**totals**| [**array<string,\GeminiCommerce\Order\Model\OrderDataTotal>**](OrderDataTotal.md) |   | [optional]
**vat_included**| **bool** |   | [optional]
**billing_address**| [**\GeminiCommerce\Order\Model\OrderPostalAddress**](OrderPostalAddress.md) |   | [optional]
**shipping_address**| [**\GeminiCommerce\Order\Model\OrderPostalAddress**](OrderPostalAddress.md) |   | [optional]
**customer_info**| [**\GeminiCommerce\Order\Model\OrderDataCustomerInfo**](OrderDataCustomerInfo.md) |   | [optional]
**cart_grn**| **string** |   | [optional]
**on_hold**| **bool** |   | [optional]
**history_events**| [**\GeminiCommerce\Order\Model\OrderDataHistory[]**](OrderDataHistory.md) |   | [optional]
**fulfillments**| [**\GeminiCommerce\Order\Model\OrderFulfillment[]**](OrderFulfillment.md) |   | [optional]
**notes**| **string** |   | [optional]
**is_deleted**| **bool** | this field is used to delete an order in \&quot;soft-delete mode\&quot;. This field must be used from get/list endpoint to exclude these orders.  | [optional]
**inserted_at**| **\DateTime** | this field is used to save the original created_at order date. The created_at field is used to filter data.  | [optional]
**deleted_at**| **\DateTime** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)