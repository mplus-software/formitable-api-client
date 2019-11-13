# BookingTimePublic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time** | [**\DateTime**](\DateTime.md) | The local date and time of the booking in the timezone of the restaurant. | [optional] 
**status** | **string** | SHORT &#x3D; This time is available, but the duration of the booking will be shorter than the default duration for this shift.  AVAILABLE &#x3D; This booking time is available.  UNAVAILABLE &#x3D; This booking time is not available.  CLOSED &#x3D; The restaurant is closed at this time.  PASSED &#x3D; The date and time are in the past. | [optional] 
**max_duration** | **int** | The maximum duration of the booking in minutes. If the maximum duration is shorter than the default duration for this shift, Status &#x3D; SHORT. | [optional] 
**area** | **string** | The area in the restaurant where the client will be seated. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

