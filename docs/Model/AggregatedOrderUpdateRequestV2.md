# AggregatedOrderUpdateRequestV2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locale** | **string** |  | [optional] 
**status** | **string** |  | [optional] 
**cart** | [**\Klarna\Model\AggregatedOrderCartV2**](AggregatedOrderCartV2.md) |  | [optional] 
**customer** | [**\Klarna\Model\CustomerV2**](CustomerV2.md) |  | [optional] 
**gui** | [**\Klarna\Model\Gui**](Gui.md) |  | [optional] 
**merchant** | [**\Klarna\Model\MerchantAggregatedOrderRequestUpdateV2**](MerchantAggregatedOrderRequestUpdateV2.md) |  | [optional] 
**options** | [**\Klarna\Model\Options**](Options.md) |  | [optional] 
**attachment** | [**\Klarna\Model\Attachment**](Attachment.md) |  | [optional] 
**recurring** | **bool** |  | [optional] [default to false]
**reservation** | **string** |  | [optional] 
**id** | **string** |  | [optional] 
**started_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**completed_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_modified_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**purchase_country** | **string** |  | [optional] 
**purchase_currency** | **string** |  | [optional] 
**merchant_reference** | **map[string,string]** |  | [optional] 
**billing_address** | [**\Klarna\Model\AggregatedOrderAddressV2**](AggregatedOrderAddressV2.md) |  | [optional] 
**shipping_address** | [**\Klarna\Model\AggregatedOrderAddressV2**](AggregatedOrderAddressV2.md) |  | [optional] 
**trader_id** | **string** |  | [optional] 
**external_payment_methods** | [**\Klarna\Model\AggregatedOrderPaymentProviderV2[]**](AggregatedOrderPaymentProviderV2.md) |  | [optional] 
**external_checkouts** | [**\Klarna\Model\AggregatedOrderPaymentProviderV2[]**](AggregatedOrderPaymentProviderV2.md) |  | [optional] 
**merchant_order_data** | **string** |  | [optional] 
**merchant_requested** | [**\Klarna\Model\MerchantRequested**](MerchantRequested.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


