# # OrderCreateShipmentRequest


## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   |
**order_id**| **string** |   |
**items**| [**\OpenAPI\Client\Model\OrderShipmentItem[]**](OrderShipmentItem.md) |   |
**address**| [**\OpenAPI\Client\Model\OrderPostalAddress**](OrderPostalAddress.md) |   |
**from_address**| [**\OpenAPI\Client\Model\OrderPostalAddress**](OrderPostalAddress.md) |   | [optional]
**return_address**| [**\OpenAPI\Client\Model\OrderPostalAddress**](OrderPostalAddress.md) |   | [optional]
**tracking**| [**\OpenAPI\Client\Model\ShipmentTracking[]**](ShipmentTracking.md) |   | [optional]
**return_tracking**| [**\OpenAPI\Client\Model\ShipmentTracking[]**](ShipmentTracking.md) |   | [optional]
**code**| **string** |   | [optional]
**method**| **string** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

