# BookingCreateViewModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tables** | **int[]** | The table id&#x27;s for this booking to be placed on. Typically left empty. If omitted, system will find optimal table combination. | [optional] 
**force_table_placement** | **bool** | Force booking on the given tables even when it conflicts with other bookings. This property is only useful when a list of tables is given. | [optional] 
**walk_in** | **bool** | This booking is a walk-in | [optional] 
**pos_id** | **string** | The POS identifier | [optional] 
**product_uid** | **string** | The identifier of the ticket product you want to reserve. If omitted, we use the default product set for your app. Setting DefaultCreateBookingProductUid | [optional] 
**external_reference_id** | **string** | The identifier of the external source that created the booking. | [optional] 
**color** | **string** | The color for this booking, only visible for the restaurant. Possible values: #3edca8 - green, #00d0f1 - azure, #b58dff - purple, #ff8da6 - pink, #ff3800 - red, #ffd100 - yellow | [optional] 
**booking_date_time** | [**\DateTime**](\DateTime.md) | The date and time of the booking. | 
**booking_duration** | **int** | The duration of the booking in minutes. Leave null for the standard booking duration. | 
**number_of_people** | **int** | The number of people that the booking consists of. | 
**company_name** | **string** | The name of the company of the person making the reservation. | [optional] 
**title** | **string** | The gender of the person making the reservation. Values: MALE, FEMALE, FAMILY, NONE. | [optional] 
**first_name** | **string** | The first name of the person making the reservation. | [optional] 
**last_name** | **string** | The last name of the person making the reservation. | [optional] 
**telephone** | **string** | The telephone number of the person making the reservation. | [optional] 
**email** | **string** | The email address of the person making the reservation. | [optional] 
**comments** | **string** | The comments/remarks of the person making the reservation. | [optional] 
**culture** | **string** | The two letter ISO culture the booking was created in. Leave null for default (en). | 
**company** | **bool** | {true} if this booking was created for a company; otherwise, {false}. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

