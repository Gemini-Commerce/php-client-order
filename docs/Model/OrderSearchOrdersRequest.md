# # OrderSearchOrdersRequest


## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   |
**search_query**| **string** |   | [optional]
**page_size**| **int** | The maximum number of orders to return. The service may return fewer than this value. If unspecified, at most 10 orders will be returned. The maximum value is 100; values above 100 will be coerced to 100.  | [optional]
**page_token**| **string** | A page token, received from a previous &#x60;ListOrders&#x60; call. Provide this to retrieve the subsequent page.   When paginating, all other parameters provided to &#x60;ListOrders&#x60; must match the call that provided the page token.  | [optional]
**order_by**| [**\OpenAPI\Client\Model\OrderOrderBy[]**](OrderOrderBy.md) |   | [optional]
**status_filter**| [**\OpenAPI\Client\Model\OrderStatusFilter**](OrderStatusFilter.md) |   | [optional]
**from_date**| **\DateTime** |   | [optional]
**to_date**| **\DateTime** |   | [optional]
**payment_filter**| [**\OpenAPI\Client\Model\OrderPaymentFilter**](OrderPaymentFilter.md) |   | [optional]
**agent_grn**| **string** |   | [optional]
**updated_at_from**| **\DateTime** |   | [optional]
**updated_at_to**| **\DateTime** |   | [optional]
**on_hold**| **bool** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

