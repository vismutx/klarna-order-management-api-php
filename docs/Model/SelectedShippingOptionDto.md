# SelectedShippingOptionDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the selected shipping option as provided by the TMS | [optional] 
**name** | **string** | The display name of the selected shipping option | [optional] 
**tms_reference** | **string** | The shipment_id provided by the TMS | [optional] 
**carrier** | **string** | The carrier for the selected shipping option | [optional] 
**type** | **string** | The type of the selected shipping option | [optional] 
**method** | **string** | The method of the selected shipping option | [optional] 
**price** | **int** | The price of the selected shipping option | [optional] 
**tax_amount** | **int** | The tax amount of the selected shipping option | [optional] 
**tax_rate** | **int** | The tax rate of the selected shipping option | [optional] 
**location** | [**\Vismutx\KlarnaOrderManagementApiPhp\Model\Location**](Location.md) | The location of the selected shipping option | [optional] 
**timeslot** | [**\Vismutx\KlarnaOrderManagementApiPhp\Model\Timeslot**](Timeslot.md) | The chosen timeslot of the selected shipping option | [optional] 
**carrier_product** | [**\Vismutx\KlarnaOrderManagementApiPhp\Model\CarrierProduct**](CarrierProduct.md) | The chosen timeslot of the selected shipping option | [optional] 
**selected_addons** | [**\Vismutx\KlarnaOrderManagementApiPhp\Model\Addon[]**](Addon.md) | Array consisting of add-ons selected by the consumer, may be empty | [optional] 
**class** | **string** | The class of the selected shipping option | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


