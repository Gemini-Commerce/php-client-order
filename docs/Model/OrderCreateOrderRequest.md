# # OrderCreateOrderRequest


## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   |
**number**| **string** |   |
**channel**| **string** |   | [optional]
**market**| **string** |   |
**locale**| **string** |   |
**items**| [**\OpenAPI\Client\Model\OrderOrderDataItem[]**](OrderOrderDataItem.md) |   |
**payments_info**| [**\OpenAPI\Client\Model\OrderDataPaymentInfo[]**](OrderDataPaymentInfo.md) |   | [optional]
**shipments_info**| [**\OpenAPI\Client\Model\OrderDataShipmentInfo[]**](OrderDataShipmentInfo.md) |   | [optional]
**promotions**| [**\OpenAPI\Client\Model\OrderDataPromotionInfo[]**](OrderDataPromotionInfo.md) |   | [optional]
**payments**| [**\OpenAPI\Client\Model\CreateOrderRequestInitialPayment[]**](CreateOrderRequestInitialPayment.md) |   | [optional]
**currency**| [**\OpenAPI\Client\Model\OrderCurrency**](OrderCurrency.md) |  for more information please, see Model/OrderCurrency.php  |
**subtotals**| [**array<string,\OpenAPI\Client\Model\OrderDataSubtotal>**](OrderDataSubtotal.md) |   |
**totals**| [**array<string,\OpenAPI\Client\Model\OrderDataTotal>**](OrderDataTotal.md) |   |
**vat_included**| **bool** |   |
**billing_address**| [**\OpenAPI\Client\Model\OrderPostalAddress**](OrderPostalAddress.md) |   |
**shipping_address**| [**\OpenAPI\Client\Model\OrderPostalAddress**](OrderPostalAddress.md) |   |
**customer_info**| [**\OpenAPI\Client\Model\OrderDataCustomerInfo**](OrderDataCustomerInfo.md) |   |
**cart_grn**| **string** |   | [optional]
**on_hold**| **bool** |   | [optional]
**notes**| **string** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

