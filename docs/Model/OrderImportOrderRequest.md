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
**customer_info**| [**\OpenAPI\Client\Model\OrderDataCustomerInfo**](OrderDataCustomerInfo.md) |   |
**shipping_address**| [**\OpenAPI\Client\Model\OrderPostalAddress**](OrderPostalAddress.md) |   |
**billing_address**| [**\OpenAPI\Client\Model\OrderPostalAddress**](OrderPostalAddress.md) |   |
**payments**| [**\OpenAPI\Client\Model\ImportOrderRequestImportedPayment[]**](ImportOrderRequestImportedPayment.md) |   |
**payments_info**| [**\OpenAPI\Client\Model\OrderDataPaymentInfo[]**](OrderDataPaymentInfo.md) |   |
**shipments_info**| [**\OpenAPI\Client\Model\OrderDataShipmentInfo[]**](OrderDataShipmentInfo.md) |   |
**items**| [**\OpenAPI\Client\Model\OrderOrderDataItem[]**](OrderOrderDataItem.md) |   |
**subtotals**| [**array<string,\OpenAPI\Client\Model\OrderDataSubtotal>**](OrderDataSubtotal.md) |   |
**totals**| [**array<string,\OpenAPI\Client\Model\OrderDataTotal>**](OrderDataTotal.md) |   |
**status**| **string** |   |
**currency**| [**\OpenAPI\Client\Model\OrderCurrency**](OrderCurrency.md) |  for more information please, see Model/OrderCurrency.php  |
**vat_included**| **bool** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

