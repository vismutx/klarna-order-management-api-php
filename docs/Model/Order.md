# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The unique order ID. Cannot be longer than 255 characters. | [optional] 
**status** | **string** | The order status. | [optional] 
**fraud_status** | **string** | Fraud status for the order. Either ACCEPTED, PENDING or REJECTED. | [optional] 
**order_amount** | **int** | The order amount in minor units. That is the smallest currency unit available such as cent or penny. | [optional] 
**original_order_amount** | **int** | The original order amount. In minor units. | [optional] 
**captured_amount** | **int** | The total amount of all captures. In minor units. | [optional] 
**refunded_amount** | **int** | The total amount of refunded for this order. In minor units. | [optional] 
**remaining_authorized_amount** | **int** | The remaining authorized amount for this order. To increase the &#x60;remaining_authorized_amount&#x60; the &#x60;order_amount&#x60; needs to be increased. | [optional] 
**purchase_currency** | **string** | The currency for this order. Specified in ISO 4217 format. | [optional] 
**locale** | **string** | The customers locale. Specified according to RFC 1766. | [optional] 
**order_lines** | [**\Klarna\OrderManagementApiPhp\Model\OrderLine[]**](OrderLine.md) | An array of order_line objects. Each line represents one item in the cart. | [optional] 
**merchant_reference1** | **string** | The order number that the merchant should assign to the order. This is how a customer would reference the purchase they made. If supplied, it is labeled as the Order Number within post purchase communications as well as the Klarna App. | [optional] 
**merchant_reference2** | **string** | Can be used to store your internal reference to the order. This is generally an internal reference number that merchants use as alternate identifier that matches their internal ERP or Order Management system. | [optional] 
**klarna_reference** | **string** | A Klarna generated reference that is shorter than the Klarna Order Id and is used as a customer friendly reference. It is most often used as a reference when Klarna is communicating with the customer with regard to payment statuses. | [optional] 
**customer** | [**\Klarna\OrderManagementApiPhp\Model\Customer**](Customer.md) | Information about the customer placing the order. | [optional] 
**billing_address** | [**\Klarna\OrderManagementApiPhp\Model\Address**](Address.md) | Customer billing address. | [optional] 
**shipping_address** | [**\Klarna\OrderManagementApiPhp\Model\Address**](Address.md) | Customer shipping address. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The time for the purchase. Formatted according to ISO 8601. | [optional] 
**purchase_country** | **string** | The purchase country. Formatted according to ISO 3166-1 alpha-2. | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) | Order expiration time. The order can only be captured until this time. Formatted according to ISO 8601. | [optional] 
**captures** | [**\Klarna\OrderManagementApiPhp\Model\Capture[]**](Capture.md) | List of captures for this order. | [optional] 
**refunds** | [**\Klarna\OrderManagementApiPhp\Model\Refund[]**](Refund.md) | List of refunds for this order. | [optional] 
**merchant_data** | **string** | Text field for storing data about the order. Set at order creation. | [optional] 
**initial_payment_method** | [**\Klarna\OrderManagementApiPhp\Model\InitialPaymentMethodDto**](InitialPaymentMethodDto.md) | Initial payment method for this order | [optional] 
**selected_shipping_option** | [**\Klarna\OrderManagementApiPhp\Model\SelectedShippingOptionDto**](SelectedShippingOptionDto.md) | The shipping option selected by the user. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


