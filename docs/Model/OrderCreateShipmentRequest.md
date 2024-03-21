# # OrderCreateShipmentRequest


## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   |
**order_id**| **string** |   |
**items**| [**\GeminiCommerce\Order\Model\OrderShipmentItem[]**](OrderShipmentItem.md) |   |
**address**| [**\GeminiCommerce\Order\Model\OrderPostalAddress**](OrderPostalAddress.md) |   |
**from_address**| [**\GeminiCommerce\Order\Model\OrderPostalAddress**](OrderPostalAddress.md) |   | [optional]
**return_address**| [**\GeminiCommerce\Order\Model\OrderPostalAddress**](OrderPostalAddress.md) |   | [optional]
**tracking**| [**\GeminiCommerce\Order\Model\ShipmentTracking[]**](ShipmentTracking.md) |   | [optional]
**return_tracking**| [**\GeminiCommerce\Order\Model\ShipmentTracking[]**](ShipmentTracking.md) |   | [optional]
**code**| **string** |   | [optional]
**method**| **string** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

