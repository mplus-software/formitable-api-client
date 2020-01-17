# TicketViewModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Title of the ticket. | [optional] 
**uid** | **string** | The unique identifier of the ticket. | [optional] 
**quantity** | **int** | The number of tickets. | [optional] 
**amount** | **double** | The amount (deposited) per ticket. | [optional] 
**full_price** | **double** | The full ticket price. | [optional] 
**image_url** | **string** | The public http/s address of the image for this ticket. | [optional] 
**refund_policy** | **string** | The maximum allowed time a ticket can be refunded before the start time of the reservation.  Format: [0-9][h/d/w] h:hours, d: days, w: weeks.  Example: 3h -&amp;gt; The latest time to refund this ticket for a booking made at 16:00 is 19:00. | [optional] 
**pos_id** | **string** | The POS article reference | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

