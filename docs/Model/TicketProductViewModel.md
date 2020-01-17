# TicketProductViewModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uid** | **string** | The unique identifier | [optional] 
**title** | **map[string,string]** | The title of the product | [optional] 
**description** | **map[string,string]** | The product description | [optional] 
**color** | **string** | An html color that can be used as a background color for this product. | [optional] 
**image** | **string** | A url to the image resource that represents this product. | [optional] 
**recommended** | **bool** | Show hist to the guest that this is a recommended product. | [optional] 
**from_price** | **int** | The original price of the product in cents. | [optional] 
**full_price** | **int** | The full price of the product in cents the guest needs to pay. | [optional] 
**price** | **int** | The price the guest needs to pay to make this reservation. It can be a deposit or the full price of the product. | [optional] 
**is_deposit** | **bool** | {true} if the price to be paid is a deposit; otherwise, {false}. | [optional] 
**booking_window_min** | **string** | The minimum amount of time a booking must be made in advance of the start time of the reservation.  Format: [0-9][h/d/w] h:hours, d: days, w: weeks, m:months.  Example: 3h -&amp;gt; A booking for 20:00 can not be booked later than 17:00 | [optional] 
**booking_window_max** | **string** | The maximum amount of time a booking can be made in advance of the start time of the reservation.  Format: [0-9][h/d/w] h:hours, d: days, w: weeks, m:months.  Example: 10d -&amp;gt;  A booking for april 20 can not be booked earlier than april 10. | [optional] 
**default** | **bool** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

