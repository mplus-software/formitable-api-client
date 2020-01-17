# ConfigurationOption

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time** | **int** | Time in minutes from midnight, local restaurant time | [optional] 
**party_size** | **int** | The number of people for which this configuration applies. | [optional] 
**duration** | **int** | Duration in minutes | [optional] 
**product_uid** | **string** | The product that is linked to this option | [optional] 
**area_id** | **int** | The area linked to this option. If null, area is not specified and need not be shown to the guest. | [optional] 
**spots_open** | **int** | The number of spots still available for this time and number of people | [optional] 
**spots_total** | **int** | The total number of spots when the restaurant would be empty. | [optional] 
**is_squeeze** | **bool** | True when this option is squeezed between other bookings (making the duration shorter than normal); otherwise, false. | [optional] 
**show_end_time** | **bool** | True when the endtime (Time + Duration) should be shown to guests; otherwise, false. | [optional] 
**booking_window_min** | **string** | The minimum amount of time a booking must be made in advance of the start time of the reservation.  Format: [0-9][h/d/w] h:hours, d: days, w: weeks, m:months.  Example: 3h -&amp;gt; A booking for 20:00 can not be booked later than 17:00 | [optional] 
**booking_window_max** | **string** | The maximum amount of time a booking can be made in advance of the start time of the reservation.  Format: [0-9][h/d/w] h:hours, d: days, w: weeks, m:months.  Example: 10d -&amp;gt;  A booking for april 20 can not be booked earlier than april 10. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

