# # OrderOrderData


## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at**| **\DateTime** |   | [optional] [readonly]
**updated_at**| **\DateTime** |   | [optional] [readonly]
**id**| **string** |   | [optional] [readonly]
**grn**| **string** |   | [optional] [readonly]
**number**| **string** |   | [optional]
**status**| **string** |   | [optional] [readonly]
**channel**| **string** |   | [optional]
**market**| **string** |   | [optional]
**locale**| **string** |   |
**additional_info**| **object** |   | [optional]
**documents**| [**\OpenAPI\Client\Model\OrderDataDocument[]**](OrderDataDocument.md) |   | [optional]
**items**| [**\OpenAPI\Client\Model\OrderOrderDataItem[]**](OrderOrderDataItem.md) |   | [optional]
**payments**| [**\OpenAPI\Client\Model\OrderPayment[]**](OrderPayment.md) |   | [optional]
**shipments**| [**\OpenAPI\Client\Model\OrderShipment[]**](OrderShipment.md) |   | [optional]
**payments_info**| [**\OpenAPI\Client\Model\OrderDataPaymentInfo[]**](OrderDataPaymentInfo.md) |   | [optional]
**shipments_info**| [**\OpenAPI\Client\Model\OrderDataShipmentInfo[]**](OrderDataShipmentInfo.md) |   | [optional]
**promotions**| [**\OpenAPI\Client\Model\OrderDataPromotionInfo[]**](OrderDataPromotionInfo.md) |   | [optional]
**currency**| [**\OpenAPI\Client\Model\OrderCurrency**](OrderCurrency.md) |  for more information please, see Model/OrderCurrency.php  | [optional]
**subtotals**| [**array<string,\OpenAPI\Client\Model\OrderDataSubtotal>**](OrderDataSubtotal.md) |   | [optional]
**totals**| [**array<string,\OpenAPI\Client\Model\OrderDataTotal>**](OrderDataTotal.md) |   | [optional]
**vat_included**| **bool** |   | [optional]
**billing_address**| [**\OpenAPI\Client\Model\OrderPostalAddress**](OrderPostalAddress.md) |   | [optional]
**shipping_address**| [**\OpenAPI\Client\Model\OrderPostalAddress**](OrderPostalAddress.md) |   | [optional]
**customer_info**| [**\OpenAPI\Client\Model\OrderDataCustomerInfo**](OrderDataCustomerInfo.md) |   | [optional]
**cart_grn**| **string** |   | [optional]
**on_hold**| **bool** |   | [optional]
**history_events**| [**\OpenAPI\Client\Model\OrderDataHistory[]**](OrderDataHistory.md) |   | [optional]
**fulfillments**| [**\OpenAPI\Client\Model\OrderFulfillment[]**](OrderFulfillment.md) |   | [optional] [readonly]
**notes**| **string** |   | [optional]
**is_deleted**| **bool** | this field is used to delete an order in \&quot;soft-delete mode\&quot;. This field must be used from get/list endpoint to exclude these orders.  | [optional]
**inserted_at**| **\DateTime** | this field is used to save the original created_at order date. The created_at field is used to filter data.  | [optional] [readonly]
**deleted_at**| **\DateTime** |   | [optional] [readonly]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

